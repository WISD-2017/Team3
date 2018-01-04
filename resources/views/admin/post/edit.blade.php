@extends('admin.layout')

@section('content')

<section class="container">
  <form action="{{ url('admin/post/'.$query->id) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="text" name="title" class="form-control" value="{{ $query->title }}">
    <textarea name="content" id="" rows="10" cols="160" class="form-control">{{ $query->content }}</textarea>
    <input type="submit" name="" value="送出" class="btn btn-primary">
  </form>
</section>

@stop
