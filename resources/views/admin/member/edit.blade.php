@extends('admin.layout')

@section('content')

<section class="container">
  <div class="row page-title-row">
      <div class="col-md-6">
          <h3>編輯 Member<small>»»»</small></h3>
          <br><br><br><br>
      </div>
  </div>
  <form action="{{ url('admin/member/'.$query->id) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PATCH">
    <div class="container-fluid">
      <div class="col-md-2 col-md-offset-1">
        <label class="navbar-brand">會員編號</label>
        <input type="text" class="form-control" value="{{ $query->id }}" onclick="alert(this.value);" disabled />
        <br><br>
      </div>
      <div class="col-md-4 col-md-offset-3">
        <label class="navbar-brand">會員註冊時間</label>
        <input type="text" class="form-control" value="{{ $query->created_at }}" onclick="alert(this.value);" disabled />
        <br><br>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-md-2 col-md-offset-1">
        <label class="navbar-brand">會員帳號</label>
        <input type="text" name="account" class="form-control" value="{{ $query->account }}">
        <br><br>
      </div>
      <div class="col-md-4 col-md-offset-3">
        <label class="navbar-brand">會員修改時間</label>
        <input type="text" class="form-control" value="{{ $query->updated_at }}" onclick="alert(this.value);" disabled />
        <br><br>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-md-2 col-md-offset-1">
        <label class="navbar-brand">會員名稱</label>
        <input type="text" name="user_name" class="form-control" value="{{ $query->user_name }}">
        <br><br>
      </div>
      <div class="col-md-4 col-md-offset-3">
        <label class="navbar-brand">帳號狀態</label>
        <input type="text" name="status" class="form-control" value="{{ $query->status }}">
        <br><br>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-md-4 col-md-offset-1">
        <label class="navbar-brand">會員e-mail</label>
        <input type="text" name="email" class="form-control" value="{{ $query->email }}">
        <br><br>
      </div>
      <div class="col-md-4 col-md-offset-1">
        <input type="submit" name="" value="送出" class="btn btn-primary pull-right">
        <br><br>
      </div>
    </div>
    <!-- <div>
      <input type="submit" name="" value="送出" class="btn btn-primary pull-right">
    </div> -->
  </form>
</section>

@stop
