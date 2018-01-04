<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
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
      $query = News::all();
      return view ('admin.news.index',compact('query'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view ('admin.news.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(NewsRequest $request)
  {
      News::create($request->all());
      return redirect('admin/news');
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
      $query = News::find($id);
      return view('admin.news.edit',compact('query'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      News::where('id',$id)->update([
        'title' => $request->get('title'),
        'content' => $request->get('content')
      ]);
      return redirect('admin/news');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      News::destroy($id);
      return redirect('admin/news');
  }
}
