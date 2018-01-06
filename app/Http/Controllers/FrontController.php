<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class FrontController extends Controller
{
  public function index()
  {
      $query = News::all();
      return view ('news',compact('query'));
  }
}
