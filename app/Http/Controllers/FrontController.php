<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class FrontController extends Controller
{
  public function index()
  {
    $news = News::orderBy('updated_at','desc')->get();
    return view('news', [
      'news' => $news,
  ]);
  }

  public function show($id)//$id)
  {
    $news = News::find($id);
    return view('show',compact('news'));
  }
}
