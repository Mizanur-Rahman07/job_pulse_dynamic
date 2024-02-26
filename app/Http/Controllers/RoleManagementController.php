<?php

namespace App\Http\Controllers;

use App\Models\RoleManagement;
use Illuminate\Http\Request;

class RoleManagementController extends Controller
{
    public function addRole(){
        return view('admin.roleManagement.add_role');
    }

    public function saveRole(Request $request)
    {
        // return $request;
        $role = new RoleManagement();
        $role->user_name = $request->user_name;
        $role->first_name = $request->first_name;
        $role->last_name = $request->last_name;
        $role->phone_no = $request->phone_no;
        $role->email_address = $request->email_address;
        $role->role = $request->role;
        $role->image = $this->saveImage($request);
        $role->slug = $this->makeSlug($request);
        $role->save();
        return redirect('/manage-role')->with('message', 'Role Add Successfully');
    }

    private function saveImage($request){
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/RolePerson/';
        $imgUrl = $directory . $imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->user_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function roleStatus($id)
    {
        $role = RoleManagement::find($id);
        if ($role->status == 1) {
            $role->status = 0;
            $role->save();
            return back();
        } else {
            $role->status = 1;
            $role->save();
            return back();
        }
    }

    public function manageRole() {
        return view('admin.roleManagement.manage_role',[
            'roles' =>RoleManagement::all()
        ]);
    }

    public function editRole($id) {
        return view('admin.roleManagement.edit_role',[
            'roles' => RoleManagement::find($id)
        ]);
    }  


    public function updateRole(Request $request) {
        $role = RoleManagement::find($request->role_id);
        $role->user_name = $request->user_name;
        $role->first_name = $request->first_name;
        $role->last_name = $request->last_name;
        $role->phone_no = $request->phone_no;
        $role->email_address = $request->email_address;
        $role->role = $request->role;
        if ($request->file('image')) {
            if ($role->image) {
                unlink($role->image);
            }
            $role->image = $this->saveImage($request);
        }
        $role->slug = $this->makeSlug($request);
        $role->save();
        return redirect('/manage-role')->with('message', 'Role Update Successfully');
    }
    
    
    public function deleteRole(Request $request)
    {
        $role = RoleManagement::find($request->role_id);
        $role->delete();
        return back()->with('message', 'Delete success');
    }

}
