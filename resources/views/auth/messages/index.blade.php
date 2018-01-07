@extends('layouts.app')

@section('content')


<div class="container">
  <div class="col-sm-offset-1 col-sm-10">
      <div class="panel panel-default">
          <div class="panel-heading">
              新增留言
          </div>
          <div class="panel-body">
              <!-- 顯示驗證錯誤 -->
              @include('common.errors')

              <!-- 新留言的表單 -->
              <form action="{{ url('message') }}" method="POST" class="form-horizontal">
                  {{ csrf_field() }}

                  <!-- 留言內容 -->
                  <div class="form-group">
                      <label for="message-name" class="col-sm-3 control-label">輸入留言</label>

                      <div class="col-sm-6">
                          <input type="text" name="name" id="message-name" class="form-control">
                      </div>
                  </div>

                  <!-- 增加留言按鈕-->
                  <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-6">
                          <button type="submit" class="btn btn-default pull-right">
                              <i class="fa fa-plus"></i> 送出
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      @if (count($messages) > 0)
          <div class="panel panel-default">
              <div class="panel-heading">
                  留言板
              </div>

              <div class="panel-body">
                  <table class="table table-striped message-table">

                      <!-- Table Headings -->
                      <thead>
                          <th>會員ID</th>
                          <th>留言內容</th>
                      </thead>

                      <!-- Table Body -->
                      <tbody>
                          @foreach ($messages as $message)
                              <tr>
                                <td class="table-text">
                                    <div>{{ $message->user_id }}</div>
                                    <!-- <a href="{{ url('messages/'.$message->id) }}"><div>{{ $message->name }}</div></a> -->
                                </td>
                                  <!-- Message Name -->
                                  <td class="table-text">
                                      <div>{{ $message->name }}</div>
                                      <!-- <a href="{{ url('messages/'.$message->id) }}"><div>{{ $message->name }}</div></a> -->
                                  </td>
                                  <td>
                                    @if (Auth::user()->id==$message->user_id)
                                    <form action="{{ url('messages/'.$message->id.'/edit') }}" method="GET">
                                      <button type="submit" id="edit-message-{{ $message->id }}" class="btn btn-info">
                                        <i class="fa fa-pencil fa-fw"></i>編輯
                                      </button>
                                    </form>
                                    @endif
                                  </td>
                                  <td>
                                    <form action="{{ url('message/'.$message->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}

                                        @if (Auth::user()->id==$message->user_id)
                                        <button type="submit" id="delete-message-{{ $message->id }}" class="btn btn-danger">
                                          <i class="fa fa-btn fa-trash"></i>刪除
                                        </button>
                                        @endif
                                      </form>
                                  </td>
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
