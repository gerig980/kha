<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
        return view('backend.products.create');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit',compact('product'));
    }

    public function store(Request $request)
    {   
       
        $validator = Validator::make($request->all(),[
           'name'        => 'required',
           'description' => 'required',
           'thumbnail'   => 'required' 
        ]);
        if($validator->fails()){
            Session()->flash('message','You need to complete name and description');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $product = new Product();
        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $last_product_id = Product::orderBy('id', 'DESC')->first();
        if($last_product_id){
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name) . $last_product_id->id + 1);
        $product->slug = $slug;
        }else{
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        $product->slug = $slug;
        }
        $colors = [];

        if ($request->colors) {
            foreach ($request->colors as $color) {
                $colors[] = $color; 
            }
            $product->colors = json_encode($colors); 
        }
        
        $sizes = [];

        if ($request->sizes) {
            foreach ($request->sizes as $size) {
                $sizes[] = $size; 
            }
            $product->sizes = json_encode($sizes); 
        }

        if($request->hasFile('thumbnail')){
            $image_temp = $request->file('thumbnail');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/products/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $product->thumbnail = $imageName;   
            }else{
                $product->thumbnail = '';
            }
        }

        if ($request->hasFile('images')) {
            $images = array();
            foreach ($request->images as $key => $image) {
                if ($image->isValid()) {
                    //Get Original Image Name
                    $img_extension = $image->getClientOriginalName();
                    $img_name = pathinfo($img_extension, PATHINFO_FILENAME);
                    //Get Image Extension
                    $extension = $image->getClientOriginalExtension();
                    //Generate new image name
                    $filename = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                    //Set path for small, medium, large image
                    // $destinationLargePath = public_path('images/products/') . $filename;
                    $image->move(public_path('images/products/'), $filename);
                    // $image->move($destinationLargePath, $filename);
                    array_push($images, $filename);
                }
            }
            $product->images = $images;
        }
        
        $product->save();
        $notification = array('message'=>'Product created successfully','alert-type'=>'success');
        return redirect()->route('products')->with($notification);
    }

    public function update(Request $request,$id){

        $product = Product::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'          => 'required',
            'description'   => 'required'
        ]);
        if($validator->fails()){
            Session()->flash('message','Name and Description cannot be empty');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $colors = [];

        if ($request->colors) {
            foreach ($request->colors as $color) {
                $colors[] = $color; 
            }
            $product->colors = json_encode($colors); 
        }else{
            $product->colors = null;
        }
        
        $sizes = [];

        if ($request->sizes) {
            foreach ($request->sizes as $size) {
                $sizes[] = $size; 
            }
            $product->sizes = json_encode($sizes); 
        }else{
            $product->sizes = null;
        }
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        $product->update([
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'slug'        => $slug
        ]);
        
        if($request->hasFile('thumbnail')){
            $image_temp = $request->file('thumbnail');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/products/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $product->thumbnail = $imageName;   
            }else{
                $product->thumbnail = '';
            }
        }
        
        if ($request->hasFile('images')) {
            $images =[];
            foreach ($request->images as $key => $image) {
                if ($image->isValid()) {
                    //Get Original Image Name
                    $img_extension = $image->getClientOriginalName();
                    $img_name = pathinfo($img_extension, PATHINFO_FILENAME);
                    //Get Image Extension
                    $extension = $image->getClientOriginalExtension();
                    //Generate new image name
                    $filename = $img_name . '-' . rand(111, 99999) . '.' . $extension;
                    //Set path for small, medium, large image
                    $destinationLargePath = public_path('images/products/') . $filename;
                    $image->move(public_path('images/products/'), $filename);
                    array_push($images, $filename);
                }
            }
            if($product->images != ''){
            $product->images = array_merge($product->images, $images);
            }else{
                 $product->images = $images;
            }
        }
        $product->save();
        
        $notification = array('message' => 'Produkti u perditesua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $notification = array('message' => 'Product deleted successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function all_products_search(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('product.edit', $row->id);
                    $deleteUrl = route('product.destroy', $row->id);
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
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('description', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('images/products'), $fileName);
    
            $url = asset('images/products/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function deleteImage($id,$imageName){
        $product = Product::findOrFail($id);
        $images = is_array($product->images) ? $product->images : [$product->images];

        //Remove the images from the images array
        $key = array_search($imageName, $images);
        
        if($key !== false){
            unset ($images[$key]);
            
        //Update the blog images
        
        $product->images = $images;
        $product->save();
        
        //Delete the actual file from storage
        Storage::disk('public')->delete('images/products/' . $imageName);
        
        return back()->with('success','Image deleted succesfully');
        }
    }

}
