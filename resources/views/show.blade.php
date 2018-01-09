@extends('front')
@section('styles')
<link href="/css/app.css" rel="stylesheet">
@endsection
@section('content')

<section class="container">
  <div class="col-sm-9" style="padding:100px;">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3>News<small>»»»最新消息</small></h3>
              </div>

              <div class="panel-body">
                  <table class="table table-striped message-table">

                      <!-- Table Headings -->
                      <thead>
                          <div>{{ $news->title }}</div><br>
                      </thead>

                      <!-- Table Body -->
                      <tbody>
                              <tr>
                                  <!-- Message Name -->
                                  <td class="table-text"><br>
                                      <textarea name="content" id="" rows="10" cols="160" class="form-control" onclick="alert(this.value);" disabled>{{ $news->content }}</textarea><br>
                                  </td>
                              </tr>
                      </tbody>
                  </table>
              </div>
          </div>
  </div>
</div>
@endsection
