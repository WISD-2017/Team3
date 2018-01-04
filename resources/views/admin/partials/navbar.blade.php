<ul class="nav navbar-nav">
    <li><a href="/admin/dash">Home</a></li>
    <li><a href="/admin/news">News</a></li>
    <li><a href="/admin/upload">Uploads</a></li>
    <!-- @if (Auth::check())
        <li @if (Request::is('admin/post*')) class="active" @endif>
            <a href="/admin/post">Posts</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="active" @endif>
            <a href="/admin/tag">Tags</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="active" @endif>
            <a href="/admin/upload">Uploads</a>
        </li>
    @endif -->
</ul>

<ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          Manager <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
          <li>
              <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
      </ul>
  </li>
</ul>
