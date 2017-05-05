<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <?php echo $this->Html->css('bootstrap.min');?>
    <!-- Font Awesome -->
    <?php echo $this->Html->css('font-awesome.min');?>
    <!-- NProgress -->
    <?php echo $this->Html->css('nprogress')?>
    <!-- iCheck -->
    <?php echo $this->Html->css('green')?>
    <!-- bootstrap-progressbar -->
    <?php echo $this->Html->css('bootstrap-progressbar-3.3.4.min')?>
    <!-- JQVMap -->
    <?php echo $this->Html->css('jqvmap.min')?>
    <!-- bootstrap-daterangepicker -->
    <?php echo $this->Html->css('daterangepicker')?>
    <!-- Custom Theme Style -->
    <?php echo $this->Html->css('custom.min')?>

    <?php echo $this->fetch('css');?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>News!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php echo $this->Html->image('img.jpg', array('alt'=>'myimage', 'class'=>'img-circle profile_img')); ?>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Nguyễn Thị Huyền</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Trang chủ </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Quản lý danh mục </a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Quản lý tin bài <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a a href="#">Video, media</a></li>
                      <li><a a href="#">Duyệt bài viết</a></li>
                      <li><a a href="#">Gửi tin nhắn sau khi duyệt bài</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i>Quản lý người dùng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">User</a></li>
                      <li><a href="chartjs2.html">Role</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">Thống kê bài viết</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $this->Html->image('img.jpg', array('alt'=>'myimage')); ?>Nguyễn Huyền
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số nhân viên</span>
              <div class="count">100</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số danh mục</span>
              <div class="count green">20</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Tổng số bài viết</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Thống kê thành viên</span>
              <div class="count">1000</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          <!-- /top tiles -->

                <!-- Start to do list -->

                <!-- End to do list -->

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php echo $this->Html->script('jquery.min')?>
    <!-- Bootstrap -->
    <?php echo $this->Html->script('bootstrap.min.js')?>
    <!-- FastClick -->
    <?php echo $this->Html->script('fastclick.js')?>
    <!-- NProgress -->
    <?php echo $this->Html->script('nprogress')?>
    <!-- Chart.js -->
    <?php echo $this->Html->script('Chart.min.js')?>
    <!-- gauge.js -->
    <?php echo $this->Html->script('gauge.min.js')?>
    <!-- bootstrap-progressbar -->
    <?php echo $this->Html->script('bootstrap-progressbar.min.js')?>
    <!-- iCheck -->
    <?php echo $this->Html->script('icheck.min.js')?>
    <!-- Skycons -->
    <?php echo $this->Html->script('skycons.js')?>
    <!-- Flot -->
    <?php echo $this->Html->script('jquery.flot.js')?>
    <?php echo $this->Html->script('jquery.flot.pie.js')?>
    <?php echo $this->Html->script('jquery.flot.time.js')?>
    <?php echo $this->Html->script('jquery.flot.stack.js')?>
    <?php echo $this->Html->script('jquery.flot.resize.js')?>
    <!-- Flot plugins -->
    <?php echo $this->Html->script('jquery.flot.orderBars.js')?>
    <?php echo $this->Html->script('jquery.flot.spline.min.js')?>
    <?php echo $this->Html->script('curvedLines.js')?>
    <!-- DateJS -->
    <?php echo $this->Html->script('date.js')?>
    <!-- JQVMap -->
    <?php echo $this->Html->script('jquery.vmap.js')?>
    <?php echo $this->Html->script('jquery.vmap.world.js')?>
    <?php echo $this->Html->script('jquery.vmap.sampledata.js')?>
    <!-- bootstrap-daterangepicker -->
    <?php echo $this->Html->script('moment.min.js')?>
    <?php echo $this->Html->script('daterangepicker.js')?>
    <!-- Custom Theme Scripts -->
    <?php echo $this->Html->script('custom.min.js')?>
	
  </body>
</html>
