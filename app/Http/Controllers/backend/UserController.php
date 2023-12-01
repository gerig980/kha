<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    public function indexAdmins(Request $request) {
       
        $request->user('web')->authorizePermission('app.users.index');
        $admins = User::get();
        $roles = Role::get();
        return view('backend.users.index', compact('admins', 'roles'));

        
    }

   
    public function storeAdmin(Request $request) {
        $request->user('web')->authorizePermission('app.users.store');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|integer',
        ]);
        if ($validator->fails()) {
            $notification = ['message' => 'User-i nuk mund te krijohet: '.$validator->messages()->first(), 'alert-type' => 'error'];
            return redirect()->back()->withInput()->with($notification);
        }

        $name = $request->input("name");
        $email = $request->input("email");
        $roleId = (int) $request->input("role");
        $password = $request->input("password");

        $role = Role::findOrFail($roleId);

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => $role->id,
        ]);

        $notification = array('message' => 'User-i u krijua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function updateAdmin(Request $request, $id) {
        $request->user('web')->authorizePermission('app.users.edit');
        $updateAdmin = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$updateAdmin->id,
            'role_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            $notification = ['message' => 'User-i nuk mund te modifikohet: '.$validator->messages()->first(), 'alert-type' => 'error'];
            return redirect()->back()->withInput()->with($notification);
        }

        $name = $request->input("name");
        $email = $request->input("email");
        $roleId = (int) $request->input("role_id");
        
        $role = Role::findOrFail($roleId);
        $updateAdmin->update(['name' => $name, 'email' => $email, 'role' => $role->id]);
        $notification = array('message' => 'User-i u modifikua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function deleteAdmin(Request $request,$id) {
        $request->user('web')->authorizePermission('app.users.destroy');
        $admin = Auth::guard('web')->user();
        if ($admin->id == $id) {
            $notification = ['message' => 'Ju nuk mund te fshini vetveten!', 'alert-type' => 'error'];
            return redirect()->back()->with($notification);
        }

        $deleteAdmin = User::findOrFail($id);

        $done = $deleteAdmin->delete();

        if (!$done) {
            $notification = ['message' => 'Pati nje problem ne fshirjen e user-it!', 'alert-type' => 'error'];
        } else {
            $notification = array('message' => 'User-i u fshi me sukses!', 'alert-type' => 'success');
        }

        return redirect()->route('app.admins.index')->with($notification);
    }
}
