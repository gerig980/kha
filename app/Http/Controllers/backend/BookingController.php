<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;
use Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index(){
        return view('backend.bookings.index');
    }
    
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'name'      =>  'required|max:191',
            'surname'   =>  'required|max:191',
            'email'     =>  'required|max:191',
            'phone'     =>  'required|max:191',
            'event_id'  =>  'required'
            ]);
            
        if($validator->fails()){
            Session()->flash('message','You need to complete all fields');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $otherBookings = Booking::where('event_id',($request->event_id))->get();
        $event = Event::where('id',$request->event_id)->first();
        $eventLimit = $event->limit_number;

        if($otherBookings->count() <= ($eventLimit - 1)){
        $booking = new Booking();
        $booking->event_id  =   $request->event_id;
        $booking->name      =   $request->name;
        $booking->surname   =   $request->surname;
        $booking->email     =   $request->email;
        $booking->phone     =   $request->phone;
        
        $booking->save();
        $notification = array('message'=>'Regjistrimi ne event u krye me sukses!','alert-type'=>'success');
        return redirect()->back()->with($notification);
        }else{
            $notification = array('limit_reached'=>'Na vjen keq numri i vendeve ne event eshte arritur!','alert-type'=>'danger');
            return redirect()->back()->with($notification);
        }
        
    }
    
    public function destroy($id){
        $booking = Booking::findOrFail($id);
        $booking->delete();
        $notification = array('message'=>'Booking u fshi me sukses','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
    
    // public function all_bookings(Request $request){
    //     if ($request->ajax()) {
    //         $data = Booking::with('event')->latest();

    //         return DataTables::eloquent($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function ($row) {
                
    //                 $deleteUrl = route('booking.destroy', $row->id);
    //                 $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
    //                                 ' . method_field('DELETE') . '
    //                                 ' . csrf_field() . '
    //                                 <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
    //                             </form>';
    //                 return $deleteBtn;

    //             })
                
    //           ->filter(function ($instance) use ($request) {
    //             if (!empty($request->get('search'))) {
    //                 $search = $request->get('search');
    //                 $instance->where(function ($w) use ($search) {
    //                     $w->orWhere('name', 'LIKE', "%$search%")
    //                         ->orWhere('phone', 'LIKE', "%$search%")
    //                         ->orWhereHas('event', function ($query) use ($search) {
    //                             $query->where('title', 'LIKE', "%$search%");
    //                         })
    //                         ->orWhere('email', 'LIKE', "%$search%");
    //                 });
    //             }
        
    //                 })
                
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    // }
public function all_bookings(Request $request)
{
    if ($request->ajax()) {
        $data = Booking::with('event')
            ->select('bookings.*', 'events.title as event_title')
            ->join('events', 'bookings.event_id', '=', 'events.id');

        return DataTables::eloquent($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $deleteUrl = route('booking.destroy', $row->id);
                $deleteBtn = '<form style="-webkit-box-shadow:none;box-shadow:none;" class="btn btn-sm" method="post" action="' . $deleteUrl . '">
                                ' . method_field('DELETE') . '
                                ' . csrf_field() . '
                                <button type="submit" class="delete btn btn-danger btn-sm">Delete</button>
                            </form>';
                return $deleteBtn;
            })
            ->orderColumn('events.title', 'events.title $1') // Use the actual column name for sorting
            ->filter(function ($instance) use ($request) {
                if (!empty($request->get('search'))) {
                    $search = $request->get('search');
                    $instance->where(function ($w) use ($search) {
                        $w->orWhere('name', 'LIKE', "%$search%")
                            ->orWhere('phone', 'LIKE', "%$search%")
                            ->orWhere('events.title', 'LIKE', "%$search%")
                            ->orWhere('email', 'LIKE', "%$search%");
                    });
                }
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}




}
