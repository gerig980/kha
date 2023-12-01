<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Module;
use Illuminate\Support\Str;


class RoleController extends Controller
{
    public function index(Request $request) {
        $request->user('web')->authorizePermission('app.roles.index');
        $roles = Role::all();
        return view('backend.roles', compact('roles'));
    }
    
    public function edit(Request $request,$id) {
        $request->user('web')->authorizePermission('app.roles.edit');
        $role = Role::findOrFail($id);
        $modules = Module::all();
        return view('backend.permissions',compact('role','modules'));
    }
    
    public function store(Request $request) {
        $request->user('web')->authorizePermission('app.roles.edit');
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ]);
        if ($validator->fails()) {
            $notification = ['message' => 'Roli nuk mund te shtohet: '.$validator->messages()->first(), 'alert-type' => 'error'];
            return redirect()->back()->withInput()->with($notification);
        }
        
        $name = $request->input('name');
        $permissionIds = $request->input('permissions');
        $role = Role::create([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);
        $role->permissions()->sync($permissionIds);

        $notification = array('message' => 'Roli u shtua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    
    public function update(Request $request, $id) {
        $request->user('web')->authorizePermission('app.roles.edit');
        $role = Role::findOrFail($id);
         $validator = Validator::make($request->all(), [
            'name' => 'required|unique:roles,name,'.$role->id,
            'permissions' => 'required|array',
        ]);
        

        if ($validator->fails()) {
            $notification = ['message' => 'Roli nuk mund te shtohet: '.$validator->messages()->first(), 'alert-type' => 'error'];
            return redirect()->back()->withInput()->with($notification);
        }

        $name = $request->input('name');
        $permissionIds = $request->input('permissions');
        
        $role->update([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);
        
        $role->permissions()->sync($permissionIds);
        
        $notification = array('message' => 'Roli u modifikua me sukses!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    
    public function destroy(Request $request, $id) {
        $request->user('web')->authorizePermission('app.roles.edit');
        $role = Role::findOrFail($id);
        $done = $role->delete();

        if (!$done) {
            $notification = ['message' => 'Pati nje problem ne fshirjen e rolit!', 'alert-type' => 'error'];
        } else {
            $notification = array('message' => 'Roli u fshi me sukses!', 'alert-type' => 'success');
        }

        return redirect()->back()->with($notification);
    }
}
