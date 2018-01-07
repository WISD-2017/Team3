@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <div class="breadcrumb">
      <label>編輯前的留言</label>
      <br>
      <input type="text" class="form-control" value="{{ $message->name }}" onclick="alert(this.value);" disabled />
      <br><br>
    </div>
<div class="breadcrumb">
    <form method="POST" action="{{ url('messages/'.$message->id) }}">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $message->name }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">更新留言</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
@endsection
