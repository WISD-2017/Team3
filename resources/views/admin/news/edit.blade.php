@extends('admin.layout')

@section('content')

<section class="container">
  <div class="row page-title-row">
      <div class="col-md-6">
          <h3>編輯 News<small>»»»</small></h3>
          <br>
      </div>
  </div>
  <form action="{{ url('admin/news/'.$query->id) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PATCH">
    <div>
      <label class="navbar-brand">標題</label>
      <input type="text" name="title" class="form-control" value="{{ $query->title }}">
      <br>
    </div>
    <div>
      <label class="navbar-brand">內容</label>
      <textarea name="content" id="" rows="10" cols="160" class="form-control">{{ $query->content }}</textarea>
      <br>
    </div>
    <div>
      <input type="submit" name="" value="送出" class="btn btn-primary pull-right">
    </div>
  </form>
</section>

@stop
