<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AjarinCode | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/dist/css/skins/_all-skins.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/select2/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Teks Editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/editor/codemirror/lib/codemirror.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/editor/css/dialog.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/editor/css/style.css" />

  <script src="<?php echo base_url() ?>assets/editor/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/xml/xml.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/css/css.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/php/php.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/codemirror/mode/clike/clike.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/emmet.min.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/color-picker.min.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/xml-fold.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/matchtags.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/searchcursor.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/match-highlighter.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/dialog.js"></script>
  <script src="<?php echo base_url() ?>assets/editor/js/search.js"></script>
  <!-- Teks Editor --> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php if($this->session->userdata('hak_akses')=="Admin" || $this->session->userdata('hak_akses')=="Mentor"){ ?>
<body class="<?php if($this->session->userdata('hak_akses')=="Admin"){echo "hold-transition skin-blue sidebar-mini";} if($this->session->userdata('hak_akses')=="Mentor"){echo "sidebar-mini wysihtml5-supported skin-purple-light";} ?>">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AJC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AjarinCode</b>.com</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url() ?>assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
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
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('nama_user') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('nama_user') ?>
                  <small><?php echo $this->session->userdata('email') ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center"></div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('dashboard/profil/'.$this->session->userdata('username')) ?>" class="btn btn-success btn-flat"><i class="fa fa-user"></i>&nbsp;Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i>&nbsp;Log Out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" id="nav">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <?php if($this->session->userdata('hak_akses') == "Admin"){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/provinsi') ?>"><i class="fa fa-circle-o"></i> Provinsi</a></li>
            <li><a href="<?php echo site_url('admin/kabupaten') ?>"><i class="fa fa-circle-o"></i> Kabupaten</a></li>
            <li><a href="<?php echo site_url('admin/level') ?>"><i class="fa fa-circle-o"></i> Level</a></li>
            <li><a href="<?php echo site_url('admin/kategori') ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-500px"></i>
            <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/jenis_event') ?>"><i class="fa fa-circle-o"></i> Jenis Event</a></li>
            <li><a href="<?php echo site_url('admin/kelola_event') ?>"><i class="fa fa-circle-o"></i> Event Berlangsung</a></li>
            <li><a href="<?php echo site_url('admin/partisipasi') ?>"><i class="fa fa-circle-o"></i> Participant</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('admin/materi') ?>">
            <i class="fa fa-book"></i> <span>Materi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square"></i> <span>Quis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/soal') ?>"><i class="fa fa-circle-o"></i> Pertanyaan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Rekap Tes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Data User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/peserta') ?>"><i class="fa fa-circle-o"></i> Peserta</a></li>
            <li><a href="<?php echo site_url('admin/mentor') ?>"><i class="fa fa-circle-o"></i> Mentor</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('admin/laporan') ?>">
            <i class="fa fa-file"></i> <span>Laporan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/lini_masa') ?>">
            <i class="fa fa-clock-o"></i> <span>Timeline</span>
          </a>
        </li>
        <?php } ?>
        <?php if($this->session->userdata('hak_akses') == "Mentor"){ ?>
        <li>
          <a href="<?php echo site_url('materi') ?>">
            <i class="fa fa-book"></i> <span>Materi</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square"></i> <span>Quis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('soal') ?>"><i class="fa fa-circle-o"></i> Pertanyaan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Rekap Tes</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/lini_masa') ?>">
            <i class="fa fa-clock-o"></i> <span>Timeline</span>
          </a>
        </li>
        <?php } ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  <?php } ?>
  <?php if($this->session->userdata('hak_akses') == "Peserta"){ ?>
    <body class="hold-transition skin-red-light layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo site_url('dashboard') ?>" class="navbar-brand"><b>AjarinCode</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav" id="nav">
            <li><a href="<?php echo site_url('dashboard/materi') ?>">Materi</a></li>
            <li><a href="#">Tes</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Text Editor <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('dashboard/editor_front') ?>">Front-End (HTML, CSS, Javascript)</a></li>
                <li><a href="#">Back-End (PHP)</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url('dashboard/lini_masa') ?>">Timeline</a></li>
            <li><a href="#">Event</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
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
                          <img src="<?php echo base_url() ?>assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                <img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('peserta') ?>
                    <small><?php echo $this->session->userdata('email') ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
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
                    <a href="<?php echo site_url('dashboard/profil/'.$this->session->userdata('username')) ?>" class="btn btn-success btn-flat"><i class="fa fa-user"></i>&nbsp;Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-warning btn-flat"><i class="fa fa-sign-out"></i>&nbsp;Log out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <?php } ?>
  </aside>