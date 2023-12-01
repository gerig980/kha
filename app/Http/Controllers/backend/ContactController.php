<?php

namespace App\Http\Controllers\backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    
    public function index(){
        return view('backend.contact.index');
    }

    public function show($id){
        $contact = Contact::findOrFail($id);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'  => 'required|max:191',
            'surname' => 'required|max:191',
            'email'   => 'required|max:191',
            'phone'   => 'required|max:191',
        ]);

        if($validator->fails()){
            Session()->flash('message','You need to complete all fields');
            Session()->flash('class','danger');
            return redirect()->back()->withInput();
        }
        $contact              = new Contact();
        $contact->name        = $request->name;
        $contact->surname     = $request->surname;
        $contact->email       = $request->email;
        $contact->phone       = $request->phone;
        $contact->save();
        return redirect()->back();
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back();
    }

    public function all_Contacts(Request $request){
        if ($request->ajax()) {
            $data = Contact::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $deleteUrl = route('contact.destroy', $row->id);
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
                                $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('email', 'LIKE', "%$search%");
                            });
                        }
        
                    })
                
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
