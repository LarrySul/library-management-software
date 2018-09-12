<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p class="text-danger">ADMIN: {{Auth::user()->name}}</p>
        <a href="#"><span class="glyphicon glyphicon-certificate text-success"></span> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <span class="glyphicon glyphicon-home" id="home"></span><span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      @if (Route::has('login'))
      <li class="treeview">
       @auth
        <a href="{{ url('/admin') }}">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span>Book Section</span>
            <span class="pull-right-container">
              <span class="label label-info pull-right">5</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url ('/admin/addbook')}}"><span class="glyphicon glyphicon-menu-right"></span>Add Book</a></li>
          <li><a href="{{url ('/admin/allBooks')}}"><span class="glyphicon glyphicon-menu-right"></span>View all Book</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span>Registered Students</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">3</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url ('/admin/regStudent')}}"><span class="glyphicon glyphicon-menu-right"></span>Registered Students</a></li>
        </ul>
      </li>
      @else
      <li class="treeview">
        <a href="{{ route('login') }}">
        <span class="glyphicon glyphicon-bookmark"></span>
        <span>Login</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ route('register') }}">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span>Register</span>
        </a>
      </li>
      @endauth
    </ul>
    @endif

  </section>
</aside>
<style type="text/css">
  #home{
    color:#b8c7ce;
    font-size:15px;
  }
  #home:hover{
    color:#fff;
  }
</style>