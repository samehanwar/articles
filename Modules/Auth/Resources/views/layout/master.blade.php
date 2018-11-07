<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href={{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{url('bower_components/font-awesome/css/font-awesome.min.css')}}>
  <link rel="stylesheet" href={{url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}>
  <link rel="stylesheet" href={{url('dist/css/AdminLTE.min.css')}}>
  <link rel="stylesheet" href={{url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}>
  <link rel="stylesheet" href={{url('dist/css/skins/skin-blue.min.css')}}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
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
                          <img src={{asset('dist/img/user2-160x160.jpg')}} class="img-circle" alt="User Image">
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
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
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
            @auth
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src={{asset('dist/img/user2-160x160.jpg')}} class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src={{asset('dist/img/user2-160x160.jpg')}} class="img-circle" alt="User Image">

                  <p>
                    {{ Auth::user()->name }}
                    <small>{{ Auth::user()->created_at }}</small>
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
                      <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
              </ul>
            </li>
            @endauth
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
            <img src={{asset('dist/img/user2-160x160.jpg')}} class="img-circle" alt="User Image">
          </div>
          @auth
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
          @endauth
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
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="{{url('/auth/article')}}"><i class="fa fa-link"></i> <span>Articles</span></a></li>
          <li class="treeview">
            <a href="{{url('/auth/users')}}"><i class="fa fa-users"></i> <span>Users</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/auth/users')}}">Users</a></li>
              <li><a href="{{url('/auth/role')}}">Roles</a></li>
              <li><a href="{{url('/auth/permission')}}">Permissions</a></li>
            </ul>
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

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
              <a href="javascript:;">
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
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
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

  <!-- jQuery 3 -->
  <script src={{url('bower_components/jquery/dist/jquery.min.js')}}></script>
  <script src={{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}></script>
  <script src={{url('bower_components/datatables.net/js/jquery.dataTables.min.js')}}></script>
  <script src={{url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}></script>
  <script src={{url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}></script>
  <script src={{url('bower_components/fastclick/lib/fastclick.js')}}></script>
  <script src={{url('dist/js/adminlte.min.js')}}></script>
  <script src={{url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}></script>
  <script src={{url('dist/js/demo.js')}}></script>
  <script>
    $(function () {
      $('#articlesList').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{url('/auth/article/getArticlesData')}}",
          columns: [
            {data: 'name'},
            {data: null},
            {data: 'created_at'},
            {data: null}
          ],
          columnDefs: [
            {
              "targets": -1,
              "data": "id",
              "render": function ( data, type, full, meta ) {
                var urlRoute = "{{url('/auth/article/show/')}}"+'/'+data.id;
                  var coulmnContent = "";
                      coulmnContent += '<a href='+urlRoute+'> <button class="btn btn-notes-action"> <i class="fa fa-eye"></i></button></a>';
                  return coulmnContent;
              }
            },
            {
              "targets": 1,
              "data": "body",
              "render": function ( data, type, full, meta ) {
                  return data.body.substring(0, 120) + "..";
              }
            }
          ]
      });

      //Users Roles
      $('#rolesList').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{url('/auth/role/getRolesData')}}",
          columns: [
            {data: 'name'},
            {data: 'created_at'},
            {data: null},
          ],
          columnDefs: [
            {
              "targets": -1,
              "data": "id",
              "render": function ( data, type, full, meta ) {
                var urlRouteEdit = "{{url('/auth/role/edit/')}}"+'/'+data.id;
                var urlRouteDelete = "{{url('/auth/role/delete/')}}"+'/'+data.id;
                  var coulmnContent = "";
                      coulmnContent += '<a href='+urlRouteEdit+'> <button class="btn btn-notes-action"> <i class="fa fa-edit"></i></button></a>';
                      coulmnContent += '<a href='+urlRouteDelete+'> <button class="btn btn-notes-action"> <i class="fa fa-trash"></i></button></a>';
                  return coulmnContent;
              }
            }
          ]
      });

      //Users Roles
      $('#userSList').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{url('/auth/users/getUsersData')}}",
          columns: [
            {data: 'name'},
            {data: 'email'},
            {data: 'created_at'},
          ]
      });

      //Permissions
      $('#PermissionList').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{url('/auth/permission/getpermissionsData')}}",
          columns: [
            {data: 'name'},
            {data: 'created_at'},
            {data: null},
          ],
          columnDefs: [
            {
              "targets": -1,
              "data": "id",
              "render": function ( data, type, full, meta ) {
                var urlRouteEdit = "{{url('/auth/permission/edit/')}}"+'/'+data.id;
                var urlRouteDelete = "{{url('/auth/permission/delete/')}}"+'/'+data.id;
                  var coulmnContent = "";
                      coulmnContent += '<a href='+urlRouteEdit+'> <button class="btn btn-notes-action"> <i class="fa fa-edit"></i></button></a>';
                      coulmnContent += '<a href='+urlRouteDelete+'> <button class="btn btn-notes-action"> <i class="fa fa-trash"></i></button></a>';
                  return coulmnContent;
              }
            }
          ]
      });

      $('.textarea').wysihtml5();
    })
  </script>
  </body>
  </html>
