<?php

namespace App\Http\Controllers\backend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index()
    {
        return view('backend.events.index');
    }

    public function create()
    {
        return view('backend.events.create');
    }

    public function all_events(Request $request)
    {
        if ($request->ajax()) {
            $data = Event::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('event.edit', $row->id);
                    $deleteUrl = route('event.destroy', $row->id);
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

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('backend.events.edit',compact('event'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'required'
        ]);

        if ($validator->fails()) {
            $notification = ['message' => 'Eventi nuk mund të shtohet: '.$validator->messages()->first(), 'alert-type' => 'error'];
            return redirect()->back()->with($notification);
        }

        $event = new Event();
        $event->title       = $request->title;
        $event->title_en       = $request->title_en;
        $event->description = $request->description;
        $event->description_en = $request->description_en;
        $event->maps_url    = $request->maps_url;
        $event->limit_number    = $request->limit_number;
        $event->isBanner    = $request->isBanner ?? 0;
        $event->isPaid      = $request->isPaid ?? 0;
        $event->price       = $request->price;
        $event->data_eventit = $request->data_eventit;
        $event->days        = $request->days;
        
        $regjia = [];

        if ($request->regjia) {
            foreach ($request->regjia as $regji) {
                $regjia[] = $regji; 
            }
            $event->regjia = json_encode($regjia); 
        }
        
        $times = [];

        if ($request->times) {
            foreach ($request->times as $time) {
                $times[] = $time; 
            }
            $event->times = json_encode($times); 
        }
        
         if($request->isBanner == 1){
            $otherEvents = Event::where('isBanner',1)->where('id','!=', $event->id)->get();
            foreach($otherEvents as $other){
                $other->update(['isBanner' => 0]);
            }
        }
        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/events/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $event->image = $imageName;   
            }else{
                $event->image = '';
            }
        }

        $event->save();
        $notification = array('message' => 'Eventi u shtua me sukses','alert-type' => 'sucess');
        return redirect()->route('events')->with($notification);
    }

    public function update(Request $request,$id)
    {
        $event = Event::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'title'         => 'required',
            'description'   => 'required',
        ]);

        if($validator->fails()){
            Session()->flash('message','You need to complete required fields');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
    
        $event->update([
            'title'         => $request->title,
            'title_en'      => $request->title_en,
            'description'   => $request->description,
            'description_en'   => $request->description_en,
            'maps_url'      => $request->maps_url,
            'limit_number'      => $request->limit_number,
            'isBanner'      => $request->isBanner ?? '0',
            'isSold'        => $request->isSold ?? '0',
            'isPaid'        => $request->isPaid ?? '0',
            'price'         => $request->price,
            'data_eventit'  => $request->data_eventit,
            'days'          => $request->days
        ]);

        $regjia = [];

        if ($request->regjia) {
            foreach ($request->regjia as $regji) {
                $regjia[] = $regji; 
            }
            $event->regjia = json_encode($regjia); 
        }
        else{
            $event->regjia = null;
        }

        $times = [];

        if ($request->times) {
            foreach ($request->times as $time) {
                $times[] = $time; 
            }
            $event->times = json_encode($times); 
        }
        else{
            $event->times = null;
        }
        

        if($request->isBanner == 1){
            $otherEvents = Event::where('isBanner',1)->where('id','!=', $event->id)->get();
            foreach($otherEvents as $other){
                $other->update(['isBanner' => 0]);
            }
        }

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/events/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $event->image = $imageName; 
            }else{
                $event->image = '';
            }
        }

        $event->save();
        $notification = array('message'=>'Event updated successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        $notification = array('message' => 'Event deleted successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('images/events'), $fileName);
    
            $url = asset('images/events/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
