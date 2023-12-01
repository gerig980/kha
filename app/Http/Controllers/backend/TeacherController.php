<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        return view('backend.teachers.index');
    }
    
    public function getTeacher($id)
    {
        try {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    } catch (\Exception $e) {
        // Log or print the exception details
        \Log::error($e);
        dd($e->getMessage());
    }
    }

    public function edit($id){
        $teacher = Teacher::findOrFail($id);
        return view('backend.teachers.index',compact('teacher'));
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'      =>  'required',
            'surname'   =>  'required'
            ]);
            
        if($validator->fails()){
            $notification = array('message'=>'Duhet te plotesoni fushat e detyrueshme','alert-type'=>'danger');
            return redirect()->back()->with($notification);
        }
        
        $teacher = new Teacher();
        $teacher->name      =   $request->name;
        $teacher->surname   =   $request->surname;
        $teacher->save();
        
        $notification = array('message'=>'Teacher u krijua me sukses!','alert-type'=>'success');
        return redirect()->route('teachers')->with($notification);
    }
    
    public function update(Request $request,$id){
        $teacher = Teacher::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'  =>  'required',
            'surname'   =>  'required'
            ]);
            
        if($validator->fails()){
            $notification = array('message'=>'Nuk duhen lene bosh fushat e detyrueshme','alert-type'=>'danger');
            return redirect()->back()->with($notification);
        }
        
        $teacher->update([
            'name'      =>  $request->name,
            'surname'   =>  $request->surname,
            'status'    =>  $request->status
            ]);
            
        $notification = array('message'=>'U azhornua me sukses!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    
    public function all_teachers(Request $request)
    {
        if ($request->ajax()) {
            $data = Teacher::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = 'editTeacher'. $row->id;
                    $deleteUrl = route('teacher.destroy', $row->id);
                    $editBtn = '<a data-bs-target="#' . $editUrl . '"  class="edit btn btn-success btn-sm" data-id="' . $row->id . '">Edit</a>';
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return  $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('surname', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function destroy($id){
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        $notification = array('message'=>'U fshi me sukses!','alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
