<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class BlogController extends Controller
{

    public function index(){
        return view('backend.blogs.index');
    }

    public function all_blogs(Request $request){
        if ($request->ajax()) {
            $data = Blog::latest();
            return FacadesDataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('blog.edit', $row->id);
                    $deleteUrl = route('blog.destroy', $row->id);
                    $editBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $editBtn . ' ' . $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('title', 'LIKE', "%$search%")
                                ->orWhere('description', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create(){
       return view('backend.blogs.create');
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        $array1 = $blog->tags->pluck('name');
        foreach($array1 as $key =>$tag){
            $results[]= $tag;
        }
        $tags = implode(',',$results);
        return view('backend.blogs.edit',compact('blog','tags'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255',
            'description'   => 'required',
            'image'     => 'required',
        ]);
        if($validator->fails()){
            session()->flash('message','Blogu nuk mund te shtohet: ' . $validator->messages()->first());
            session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
   
        $blog = new Blog();
        $blog->title            = $request->title;
        $blog->title_en         = $request->title_en;
        $blog->description      = $request->description;
        $blog->description_en   = $request->description_en;
        $blog->save();
        $tags = explode(',',$request->tags);
    $languages = ['en', 'sq'];
       foreach ($tags as $tag) {
        $tagModel = \Spatie\Tags\Tag::findOrCreate($tag);
    
        // Assuming your request contains the desired translations (e.g., 'name_en', 'name_fr')
        foreach ($languages as $locale) {
            // Adjust this line to get the translations from your request
            $translation = $request->get("name_$locale", $tag);
    
            $tagModel->setTranslation('name', $locale, $translation);
        }
    
        $tagModel->save();
    }
        $blog->attachTags($tags);
        if($request->hasFile('image')){
            $img_temp = $request->file('image');
            if($img_temp->isValid()){
                $img_extension  = $img_temp->getClientOriginalName();
                $img_name       = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension      = $img_temp->getClientOriginalExtension();
                $imageName      = $img_name . '-' . rand(111,99999). '.' . $extension;
                $medium_image_path = public_path('images/blogs/').$imageName;
                Image::make($img_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $blog->image = $imageName;
            }else{
                $blog->image = '';
            }
        }
        $blog->save();
        $notification = array('message' => 'Blogu u krijua me sukses!', 'alert-type' => 'success');
        return redirect()->route('blogs')->with($notification);
    }

    public function update($id,Request $request,Blog $blog){
        $validator = Validator::make($request->all(),[
            'title'         => 'required|max:255',
            'description'   => 'required',
        ]);
        if($validator->fails()){
            session()->flash('message', 'Blogu nuk mund te modifikohet: ' . $validator->messages()->first());
            session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $blog = Blog::findOrFail($id);
        $blog->update([
            'title'                => $request['title'],
            'title_en'             => $request['title_en'],
            'description'          => $request['description'],
            'description_en'       => $request['description_en'],
            ]);
        $tags = explode(',',$request->tags);
        $languages = ['en', 'sq'];
       foreach ($tags as $tag) {
        $tagModel = \Spatie\Tags\Tag::findOrCreate($tag);
    
        // Assuming your request contains the desired translations (e.g., 'name_en', 'name_fr')
        foreach ($languages as $locale) {
            // Adjust this line to get the translations from your request
            $translation = $request->get("name_$locale", $tag);
    
            $tagModel->setTranslation('name', $locale, $translation);
        }
    
        $tagModel->save();
    }
        $blog->syncTags($tags);
        if($request->hasFile('image')){
            $img_temp = $request->file('image');
            if($img_temp->isValid()){
                $img_extension = $img_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $img_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/blogs/') . $imageName;
                Image::make($img_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);

                $blog->image = $imageName;
            }else{
                $blog->image = '';
            }
        }

        $blog->save();
        $notification = array('message' => 'Blogu u modifikua me sukses', 'alert-type' => 'success');
        return redirect()->route('blogs')->with($notification);
    }


    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        $notification   = array('message' => 'Blogu u fshi me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
