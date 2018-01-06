<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;

class MemberController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth.admin:admin');
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $query = User::all();
      return view ('admin.member.index',compact('query'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view ('admin.member.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(UserRequest $request)
  {
      User::create($request->all());
      return redirect('admin/member');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $query = User::find($id);
      return view('admin.member.edit',compact('query'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      User::where('id',$id)->update([
        'account' => $request->get('account'),
        'user_name' => $request->get('user_name'),
        'email' => $request->get('email'),
        'status' => $request->get('status'),
      ]);
      return redirect('admin/member');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      User::destroy($id);
      return redirect('admin/member');
  }
}
