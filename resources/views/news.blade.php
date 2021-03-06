@extends('front')
@section('styles')
<link href="/css/app.css" rel="stylesheet">
@endsection
@section('content')

<section class="container">
  <div class="col-sm-9" style="padding:100px;">
      @if (count($news) > 0)
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3>News<small>»»»最新消息</small></h3>
              </div>

              <div class="panel-body">
                  <table class="table table-striped message-table">

                      <!-- Table Headings -->
                      <thead>
                          <th>最新消息</th>
                      </thead>

                      <!-- Table Body -->
                      <tbody>
                          @foreach ($news as $var)
                              <tr>
                                <td class="table-text">
                                  <a href="{{ url('news/'.$var->id) }}"><div>{{ $var->title }}</div></a>
                                    <!-- <div>{{ $var->title }}</div> -->
                                </td>
                                  <!-- Message Name -->
                                  <!-- <td class="table-text">
                                      <div>{{ $var->content }}</div>
                                  </td> -->
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      @endif

  </div>
</div>
@endsection
