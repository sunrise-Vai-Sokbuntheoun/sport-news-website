<?php
function url()
{
  return URL;
}

function assets()
{
  return ASSETS;
}

function lib()
{
  return LIB;
}

function get_link()
{
  $lib = lib();
  $css = <<<EOT
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{$lib}/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{$lib}/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{$lib}/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{$lib}/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{$lib}/css/skins/_all-skins.min.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{$lib}/bower_components/morris.js/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{$lib}/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="{$lib}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{$lib}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{$lib}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <!-- Google Font -->
        <link rel="stylesheet" href="{$lib}/summernote/summernote.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

         <!-- --------- -->
         <link href="{$lib}/plugins/css/core.css" rel="stylesheet" type="text/css" />
         <link href="{$lib}/plugins/css/components.css" rel="stylesheet" type="text/css" />
         <link href="{$lib}/plugins/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="{$lib}/plugins/css/pages.css" rel="stylesheet" type="text/css" />
         <link href="{$lib}/plugins/css/menu.css" rel="stylesheet" type="text/css" />
         <link href="{$lib}/plugins/css/responsive.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
         <script src="{$lib}/plugins/js/modernizr.min.js"></script>
         
         <!-- --------- -->
        
EOT;
  echo $css;
}

function get_script()
{
  $lib = lib();
  $script = <<<EOT
    <!-- jQuery 3 -->
    <script src="{$lib}/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{$lib}/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{$lib}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="{$lib}/bower_components/raphael/raphael.min.js"></script>
    <script src="{$lib}/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="{$lib}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{$lib}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{$lib}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{$lib}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{$lib}/bower_components/moment/min/moment.min.js"></script>
    <script src="{$lib}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{$lib}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{$lib}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{$lib}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{$lib}/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="{$lib}/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{$lib}/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{$lib}/js/demo.js"></script>
    <script src="{$lib}/ckeditor/ckeditor.js"></script>
    <script src="{$lib}/summernote/summernote.js"></script>

    <script src="{$lib}/plugins/js/jquery.core.js"></script>
    <script src="{$lib}/plugins/js/jquery.app.js"></script>

EOT;

  echo $script;
}

function get_header()
{
  $url = url();
  $assets = assets();
  $header = <<<EOT

    <header class="main-header">
    <!-- Logo -->
    <a href="{$url}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{$assets}/images/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{$assets}/images/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{$url}/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
EOT;
  echo $header;
}

function get_footer()
{
  $url = url();
  $assets = assets();
  $footer = <<<EOT
  <footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.13
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="{$url}">AdminLTE</a>.</strong> All rights
  reserved.
</footer>
EOT;
  echo $footer;
}

function get_sideBar(){
  $url = url();
  $assets = assets();
  $sideBar = <<<EOT
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{$assets}/images/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
        <li class="active treeview">
          <a href="{$url}/index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{$url}/pages/posts/add-post/add-posts.php"><i class="fa fa-arrow-right"></i> Add Posts</a></li>
            <li><a href="{$url}/pages/posts/manage-post/manage-posts.php"><i class="fa fa-arrow-right"></i> Manage Posts</a></li>
            <li><a href="{$url}/pages/posts/trash-post/trash-posts.php"><i class="fa fa-arrow-right"></i> Trash</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Company</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{$url}/pages/posts/add-post/add-posts.php"><i class="fa fa-arrow-right"></i> Add Posts</a></li>
            <li><a href="{$url}/pages/posts/manage-post/manage-posts.php"><i class="fa fa-arrow-right"></i> Manage Posts</a></li>
            <li><a href="{$url}/pages/posts/trash-post/trash-posts.php"><i class="fa fa-arrow-right"></i> Trash</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Partner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{$url}/pages/posts/add-post/add-posts.php"><i class="fa fa-arrow-right"></i> Add Posts</a></li>
            <li><a href="{$url}/pages/posts/manage-post/manage-posts.php"><i class="fa fa-arrow-right"></i> Manage Posts</a></li>
            <li><a href="{$url}/pages/posts/trash-post/trash-posts.php"><i class="fa fa-arrow-right"></i> Trash</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{$url}/pages/posts/add-post/add-posts.php"><i class="fa fa-arrow-right"></i> Add Posts</a></li>
            <li><a href="{$url}/pages/posts/manage-post/manage-posts.php"><i class="fa fa-arrow-right"></i> Manage Posts</a></li>
            <li><a href="{$url}/pages/posts/trash-post/trash-posts.php"><i class="fa fa-arrow-right"></i> Trash</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-key"></i>
            <span>Security</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{$url}/pages/users/index.php"><i class="fa fa-user"></i> Users</a></li>
            <li><a href="{$url}/pages/roles/index.php"><i class="fa fa-arrow-right"></i> Roles</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
EOT;
  echo $sideBar;
}

function login($username, $password){
  $url = url();
  $query = "select * from tbluser where username = '{$username}'";
  $result = run_query($query,'Error 404!');
  $user = mysqli_fetch_assoc($result);
  if($user==null){
    echo "<p class='text-danger'> Invalid username or password! </p> ";
  }else{
    if($user['password']==md5($password)){
      $_SESSION['user'] = $user;
      header("location: {$url}");
    }else{
      echo "<p class='text-danger'> Invalid username or password! </p> ";
    }
  }
}

function is_login(){
  $url = url();
  if($_SESSION['user']==null){
    header("location: {$url}/login.php");
  }
}

function mdb_link(){
  $mdblink = <<<EOT
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.js"></script>  
EOT;
echo $mdblink;
}

?>