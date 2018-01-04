@extends('admin.layout')

@section('content')
<section class="container">
  <div class="container-fluid">
      <div class="row page-title-row">
          <div class="col-md-6">
              <h3>News <small>» List</small></h3>
          </div>
      </div>

      <div class="row">
          <div class="col-sm-12">
            <a href="{{ url('admin/news/create') }}" role="btn" class="btn btn-primary pull-right">新增</a>
            <br><br>
            <table class="table table-hover">
              @foreach ($query as $var)
              <tr>
                <td>{{ $var -> id }}</td>
                <td>{{ $var -> title }}</td>
                <td><a href="{{ url('admin/news/'.$var->id.'/edit') }}" role="btn" class="btn btn-warning">編輯</a></td>
                <td>
                  <form class="" action="{{ url('admin/news/'.$var->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" role="btn" class="btn btn-danger "value="刪除">
                  </form>
                </td>
                  <!-- <a href="{{ url('admin/post/'.$var->id.'/delete') }}" role="btn" class="btn btn-danger">刪除</a></td> -->
              </tr>
              @endforeach
            </table>
          </div>
      </div>
    </div>
</section>
@stop
