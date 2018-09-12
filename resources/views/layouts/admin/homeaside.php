<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="admiin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
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
      <li class="treeview">
        <a href="#">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span>Book Section</span>
            <span class="pull-right-container">
              <span class="label label-info pull-right">15</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/book"><span class="glyphicon glyphicon-menu-right"></span>Add Book</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Edit Book</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Update Book</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Delete Book</a></li>
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
          <li><a href="/admin/student"><span class="glyphicon glyphicon-menu-right"></span>Registered Students</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <span class="glyphicon glyphicon-bookmark"></span>
          <span>Stock Section</span>
           <span class="pull-right-container">
              <span class="label label-danger pull-right">5</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/returned"><span class="glyphicon glyphicon-menu-right"></span>View Returned Books</a></li>
          <li><a href="/admin/borrowed"><span class="glyphicon glyphicon-menu-right"></span>View Borrowed Books</a></li>
        </ul>
      </li>
    </ul>
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