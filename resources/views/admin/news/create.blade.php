@extends('admin.layout')

@section('content')

<section class="container">
  <div class="row page-title-row">
      <div class="col-md-6">
          <h3>新增 News</h3>
          <br>
      </div>
  </div>
  <form action="{{ url('admin/news') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
      <label class="navbar-brand">標題</label>
      <input type="text" name="title" class="form-control">
      <br>
    </div>
    <div>
      <label class="navbar-brand">內容</label>
      <textarea name="content" id="" rows="10" cols="160" class="form-control"></textarea>
      <br>
    </div>
    <div>
      <input type="submit" name="" value="送出" class="btn btn-primary pull-right">
    </div>
  </form>
</section>

@stop
