<?php

namespace App\Http\Controllers\backend;

use App\Models\Course;
use App\Models\CourseRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{
    public function index()
    {
        return view('backend.courses.index');
    }

    public function create()
    {
        return view('backend.courses.create');
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.courses.edit',compact('course'));
    }

    public function store(Request $request)
    {   
   
        $validator = Validator::make($request->all(),[
           'name'   => 'required',
           'description' => 'required', 
        ]);
        if($validator->fails()){
            Session()->flash('message','You need to complete name and description');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $course = new Course();
        $course->name          = $request->name;
        $course->name_en          = $request->name_en;
        $course->description   = $request->description;
        $course->description_en   = $request->description_en;
        $course->days          = $request->days;
        $course->start_time    = $request->start_time;
        $course->end_time      = $request->end_time;


        $teachers = [];

        if ($request->teachers) {
            foreach ($request->teachers as $teacher) {
                $teachers[] = $teacher; 
            }
            $course->teachers = json_encode($teachers); 
        }
        
        $times = [];

        if ($request->times) {
            foreach ($request->times as $time) {
                $times[] = $time; 
            }
            $course->times = json_encode($times); 
        }

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/course/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $course->image = $imageName;   
            }else{
                $course->image = '';
            }
        }
    
        $course->save();
        $notification = array('message'=>'Service created successfully','alert-type'=>'success');
        return redirect()->route('courses')->with($notification);
    }

    public function update(Request $request,$id)
    {
        $course = Course::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'        => 'required',
            'description' => 'required',
        ]);
        if($validator->fails()){
            Session()->flash('message','You need to complete name and description');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }

        $teachers = [];

        if ($request->teachers) {
            foreach ($request->teachers as $teacher) {
                $teachers[] = $teacher; 
            }
            $course->teachers = json_encode($teachers); 
        }
        else{
            $course->teachers = null;
        }

        $times = [];

        if ($request->times) {
            foreach ($request->times as $time) {
                $times[] = $time; 
            }
            $course->times = json_encode($times); 
        }
        else{
            $course->times = null;
        }
        
        $course->update([
            'name'          => $request->name,
            'name_en'          => $request->name_en,
            'description'   => $request->description,
            'description_en'   => $request->description_en,
            'days'          => $request->days,
            'start_time'    => $request->start_time,
            'end_time'      => $request->end_time
        ]);

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                $img_extension = $image_temp->getClientOriginalName();
                $img_name      = pathinfo($img_extension,PATHINFO_FILENAME);
                $extension     = $image_temp->getClientOriginalExtension();
                $imageName     = $img_name . '-' . rand(111,99999) . '.' . $extension;
                $medium_image_path = public_path('images/course/') . $imageName;
                Image::make($image_temp)->resize(760,null,function($constraint){
                    $constraint->aspectRatio();
                })->save($medium_image_path);
                $course->image = $imageName; 
            }else{
                $course->image = '';
            }
        }

        $course->save();
        $notification = array('message'=>'Course updated successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        $notification = array('message'=>'Course deleted successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function all_courses_search(Request $request)
    {
        if ($request->ajax()) {
            $data = Course::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('courses.edit', $row->id);
                    $deleteUrl = route('courses.destroy', $row->id);
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
    
            $request->file('upload')->move(public_path('images/course'), $fileName);
    
            $url = asset('images/course/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
    
    public function courseRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'surname'   => 'required',
            'phone'     => 'required',
            'course_id' => 'required'
            ]);
            
        if($validator->fails()){
            Session()->flash('error','Ju nuk i keni plotesuar te gjitha fushat');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        
        $courseRegister = new CourseRegister();
        $courseRegister->name       = $request->name;
        $courseRegister->surname    = $request->surname;
        $courseRegister->email      = $request->email;
        $courseRegister->phone      = $request->phone;
        $courseRegister->course_id  = $request->course_id;
        $courseRegister->orari      = $request->orari;
        $courseRegister->save();
        $notification = array('message'=>'Faleminderit! Regjistrimi ne kurs u krye me sukses!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
    
    public function registered_courses(Request $request){
        $courses = Course::all();
        return view('backend.courses.course-register',compact('courses'));
    }
    
    public function all_register_course(Request $request)
    {
    if ($request->ajax()) {
        $data = CourseRegister::with('course')
    ->select('course_registers.*', 'courses.name as course_name')
    ->join('courses', 'course_registers.course_id', '=', 'courses.id');


        return DataTables::eloquent($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $deleteUrl = route('courseRegister.destroy', $row->id);
                $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                ' . method_field('DELETE') . '
                                ' . csrf_field() . '
                                <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                            </form>';
                return $deleteBtn;
            })

            ->orderColumn('course.name', 'courses.name $1') 
            ->filter(function ($instance) use ($request) {

                // if ($request->get('approved'))  {
                //         $instance->where('course_id', $request->get('approved'));
                //     }
                
                if ($request->has('approved') && $request->get('approved') !== 'all') {
        $instance->where('course_id', $request->get('approved'));
    }
    
                if (!empty($request->get('search'))) {
                    $search = $request->get('search');
                    $instance->where(function ($w) use ($search) {
                        $w->orWhere('name', 'LIKE', "%$search%")
                            ->orWhere('phone', 'LIKE', "%$search%")
                            ->orWhere('courses.name', 'LIKE', "%$search%")
                            ->orWhere('email', 'LIKE', "%$search%");
                    });
                }
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

    public function course_register_destroy($id){
        $courseRegister = CourseRegister::FindOrFail($id);
        $courseRegister->delete();
        $notification = array('message'=>'Aplikimi u fshi me sukses','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function updateStatus(Request $request, $id) {

            $course = Course::where('id', $id)->first();
            if($course->status == 1) { 
                $course->status = 0;
                $course->update();
            } else {
                $course->status = 1;
                $course->update();
            }
    
            $notification = array('message' => 'Statusi u modifikua me sukses!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
        



}
