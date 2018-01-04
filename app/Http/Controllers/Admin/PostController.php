<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $query = Post::all();
      return view ('admin.post.index',compact('query'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view ('admin.post.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(PostRequest $request)
  {
      Post::create($request->all());
      return redirect('admin/post');
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
      $query = Post::find($id);
      return view('admin.post.edit',compact('query'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      Post::where('id',$id)->update([
        'title' => $request->get('title'),
        'content' => $request->get('content')
      ]);
      return redirect('admin/post');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      Post::destroy($id);
      return redirect('admin/post');
  }
}
