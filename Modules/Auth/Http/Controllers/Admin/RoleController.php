<?php

namespace Modules\Auth\Http\Controllers\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth','isAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth::roles.index');
    }

    public function getRolesData()
    {
        return datatables()->of(Role::all())->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::all();
        return view('auth::roles.addNewRole', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'name' => 'required|unique:roles',
          'permission' => 'required'
        ];
        unset($request['_token']);

        $this->validate($request, $rules);
        $role = new Role;
        $role->name = $request->name;
        $saved = $role->save();

        $permissions = $request->permission;
        foreach ($permissions as $item) {
            $perms = Permission::where('id', '=', $item)->firstOrFail();
            $role = Role::where('name', '=', $request->name)->first();
            $role->givePermissionTo($perms);
        }

        if($saved){
            \Session::flash('successMsg','your data inserted successfully ');
            return redirect('/auth/role');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $rolePermissions = DB::table('role_has_permissions')->select('*')->where('role_id',$id)->get();
        $permission = Permission::all();
        if($role){
            return view('auth::roles.addNewRole', compact('role', 'permission', 'rolePermissions'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
          'name' => 'required',
          'permission' => 'required'
        ];
        unset($request['_token']);

        $this->validate($request, $rules);

        $role = Role::find($id);
        $role->name = $request->name;
        $saved = $role->save();

        $permissions = $request->permission;
        foreach ($permissions as $item) {
            $perms = Permission::where('id', '=', $item)->firstOrFail();
            $role = Role::where('name', '=', $request->name)->first();
            $role->givePermissionTo($perms);
        }

        if($saved){
            \Session::flash('successMsg','your data inserted successfully ');
            return redirect('/auth/role');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $result = Role::destroy($id);
      if($result){
          \Session::flash('successMsg','your item deleted successfully ');
          return redirect('/auth/role');
      }
    }
}
