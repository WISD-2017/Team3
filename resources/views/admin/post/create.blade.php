@extends('admin.layout')

@section('content')

<section class="container">
  <form action="{{ url('admin/post') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" class="form-control">
    <textarea name="content" id="" rows="10" cols="160" class="form-control"></textarea>
    <input type="submit" name="" value="送出" class="btn btn-primary">
  </form>
</section>

@stop
