<?php

namespace Modules\Auth\Http\Controllers\Admin;

use Modules\Auth\Entities\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PermissionController extends Controller
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
      return view('auth::Permissions.index');
  }

  public function getPermissionsData()
  {
      return datatables()->of(Permission::all())->toJson();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('auth::Permissions.addNewPermission');
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
        'name' => 'required',
      ];
      unset($request['_token']);

      $this->validate($request, $rules);
      $article = Permission::create($request->all());
      if($article){
          \Session::flash('successMsg','your data inserted successfully ');
          return redirect('/auth/permission');
      }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Permission  $Permission
   * @return \Illuminate\Http\Response
   */
  public function show(Permission $Permission)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Permission  $Permission
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $permission = Permission::find($id);
      if($permission){
          return view('auth::permissions.addNewPermission', compact('permission'));
      }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Permission  $Permission
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $rules = [
        'name' => 'required',
      ];
      unset($request['_token'], $request['_method']);

      $this->validate($request, $rules);
      $article = Permission::where('id',$id)->update($request->all());
      if($article){
          \Session::flash('successMsg','your data inserted successfully ');
          return redirect('/auth/permission');
      }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Permission  $Permission
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $result = Permission::destroy($id);
      if($result){
          \Session::flash('successMsg','your item deleted successfully ');
          return redirect('/auth/permission');
      }
  }


}
