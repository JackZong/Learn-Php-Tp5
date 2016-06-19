<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\wamp\www\AdminLTE-master/application/index\view\index\accesslist.html";i:1465445786;s:71:"C:\wamp\www\AdminLTE-master/application/index\view\public\frameset.html";i:1466171353;}*/ ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="__PUBLIC__/assets/plugins/lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="__PUBLIC__/assets/plugins/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="__PUBLIC__/assets/plugins/lte/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini"> 
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo url('Index/index'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>AC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="__PUBLIC__/assets/plugins/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="__PUBLIC__/assets/plugins/lte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="__PUBLIC__/assets/plugins/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="__PUBLIC__/assets/plugins/lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jack Zong</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>在线</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-camera-retro"></i> <span>栏目管理</span></a></li>
        <li><a href="#"><i class="fa fa-th-list "></i> <span>文章管理</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-lock"></i> <span>权限管理</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo url('Index/accesslist'); ?>">权限列表</a></li>
            <li><a href="#">权限修改</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Table With Full Features</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div id="example1_wrapper"
					class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-6">
							<div class="dataTables_length" id="example1_length">
								<label>Show <select name="example1_length"
									aria-controls="example1" class="form-control input-sm"><option
											value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option></select> entries
								</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div id="example1_filter" class="dataTables_filter">
								<label>Search:<input type="search"
									class="form-control input-sm" placeholder=""
									aria-controls="example1"></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table id="example1"
								class="table table-bordered table-striped dataTable" role="grid"
								aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting_desc" tabindex="0" aria-controls="example1"
											rowspan="1" colspan="1"
											aria-label="Rendering engine: activate to sort column ascending"
											style="width: 203px;" aria-sort="descending">Rendering
											engine</th>
										<th class="sorting" tabindex="0" aria-controls="example1"
											rowspan="1" colspan="1"
											aria-label="Browser: activate to sort column ascending"
											style="width: 251px;">Browser</th>
										<th class="sorting" tabindex="0" aria-controls="example1"
											rowspan="1" colspan="1"
											aria-label="Platform(s): activate to sort column ascending"
											style="width: 221px;">Platform(s)</th>
										<th class="sorting" tabindex="0" aria-controls="example1"
											rowspan="1" colspan="1"
											aria-label="Engine version: activate to sort column ascending"
											style="width: 174px;">Engine version</th>
										<th class="sorting" tabindex="0" aria-controls="example1"
											rowspan="1" colspan="1"
											aria-label="CSS grade: activate to sort column ascending"
											style="width: 127px;">CSS grade</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row" class="odd">
										<td class="sorting_1">Webkit</td>
										<td class="">iPod Touch / iPhone</td>
										<td class="">iPod</td>
										<td>420.1</td>
										<td>A</td>
									</tr>
									<tr role="row" class="even">
										<td class="sorting_1">Webkit</td>
										<td class="">OmniWeb 5.5</td>
										<td class="">OSX.4+</td>
										<td>420</td>
										<td>A</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1">Webkit</td>
										<td class="">S60</td>
										<td class="">S60</td>
										<td>413</td>
										<td>A</td>
									</tr>
									<tr role="row" class="even">
										<td class="sorting_1">Webkit</td>
										<td class="">Safari 1.2</td>
										<td class="">OSX.3</td>
										<td>125.5</td>
										<td>A</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1">Webkit</td>
										<td class="">Safari 1.3</td>
										<td class="">OSX.3</td>
										<td>312.8</td>
										<td>A</td>
									</tr>
									<tr role="row" class="even">
										<td class="sorting_1">Webkit</td>
										<td class="">Safari 2.0</td>
										<td class="">OSX.4+</td>
										<td>419.3</td>
										<td>A</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1">Webkit</td>
										<td class="">Safari 3.0</td>
										<td class="">OSX.4+</td>
										<td>522.1</td>
										<td>A</td>
									</tr>
									<tr role="row" class="even">
										<td class="sorting_1">Trident</td>
										<td class="">AOL browser (AOL desktop)</td>
										<td class="">Win XP</td>
										<td>6</td>
										<td>A</td>
									</tr>
									<tr role="row" class="odd">
										<td class="sorting_1">Trident</td>
										<td class="">Internet Explorer 4.0</td>
										<td class="">Win 95+</td>
										<td>4</td>
										<td>X</td>
									</tr>
									<tr role="row" class="even">
										<td class="sorting_1">Trident</td>
										<td class="">Internet Explorer 5.0</td>
										<td class="">Win 95+</td>
										<td>5</td>
										<td>C</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">Rendering engine</th>
										<th rowspan="1" colspan="1">Browser</th>
										<th rowspan="1" colspan="1">Platform(s)</th>
										<th rowspan="1" colspan="1">Engine version</th>
										<th rowspan="1" colspan="1">CSS grade</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="dataTables_info" id="example1_info" role="status"
								aria-live="polite">Showing 1 to 10 of 57 entries</div>
						</div>
						<div class="col-sm-7">
							<div class="dataTables_paginate paging_simple_numbers"
								id="example1_paginate">
								<ul class="pagination">
									<li class="paginate_button previous disabled"
										id="example1_previous"><a href="#"
										aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
									<li class="paginate_button active"><a href="#"
										aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
									<li class="paginate_button "><a href="#"
										aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
									<li class="paginate_button "><a href="#"
										aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
									<li class="paginate_button "><a href="#"
										aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
									<li class="paginate_button "><a href="#"
										aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
									<li class="paginate_button "><a href="#"
										aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
									<li class="paginate_button next" id="example1_next"><a
										href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
</div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="__PUBLIC__/assets/plugins/lte/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="__PUBLIC__/assets/plugins/lte/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="__PUBLIC__/assets/plugins/lte/dist/js/app.min.js"></script>
<!-- Slimscroll -->
<script src="__PUBLIC__/assets/plugins/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="__PUBLIC__/assets/plugins/lte/plugins/fastclick/fastclick.js"></script>
<!-- jvectormap -->
<script src="__PUBLIC__/assets/plugins/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="__PUBLIC__/assets/plugins/lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="__PUBLIC__/assets/plugins/lte/plugins/morris/morris.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="__PUBLIC__/assets/plugins/lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="__PUBLIC__/assets/plugins/lte/dist/js/demo.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
