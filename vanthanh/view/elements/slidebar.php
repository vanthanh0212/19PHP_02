
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="webroot/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['login']['username'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="admin.php?controller=back&action=home">Home</a>
        </li>
        <li  class="treeview">
          <a href="#">
            Products
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?controller=products&action=list_products"><i class="fa fa-circle-o"></i> List Products</a></li>
            <li><a href="admin.php?controller=products&action=add_products"><i class="fa fa-circle-o"></i> Add Products</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            News
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="admin.php?controller=news&action=list_news"><i class="fa fa-circle-o"></i> List News</a></li>
            <li><a href="admin.php?controller=news&action=add_news"><i class="fa fa-circle-o"></i> Add News</a></li>
          </ul>
        </li>
        <li>
          <a href="admin.php?controller=comment&action=list_comment">
            Comment
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
<!--           <ul class="treeview-menu">
            <li><a href="admin.php?controller=news&action=list_news"><i class="fa fa-circle-o"></i> List News</a></li>
            <li><a href="admin.php?controller=news&action=add_news"><i class="fa fa-circle-o"></i> Add News</a></li>
          </ul> -->
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>