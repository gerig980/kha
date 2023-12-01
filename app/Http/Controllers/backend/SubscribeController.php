<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{
    public function index(){
        return view('backend.subscribes.index');
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'email'     => 'required',
            ]);
            
        if($validator->fails()){
            Session()->flash('message','Email Required');
        }
        
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        
        $notification = array('success'=>'Subscribed successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification);
        
    }
    
   public function all_subscribes(Request $request){
        if ($request->ajax()) {
            $data = Subscribe::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $deleteUrl = route('subscribe.destroy', $row->id);
                    $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                    ' . method_field('DELETE') . '
                                    ' . csrf_field() . '
                                    <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                                </form>';
                    return $deleteBtn;
                })
                ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('name', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    
    public function destroy($id){
        $subscribe = Subscribe::findOrFail($id);
        $subscribe->delete();
        $notification = array('message'=>'Subscribe deleted successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
}
