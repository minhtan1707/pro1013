<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="./static/images/favicon.ico">

        <title>Cú to - Dashboard</title>

        <!-- App css -->
        <link href="./static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./static/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./static/css/style.css" rel="stylesheet" type="text/css" />

        <script src="./static/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="dashboard.php" class="logo"><span>Cú  <span>to</span></span><i class="mdi mdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title"><?php echo $title;?></h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="./static/images/users/<?php echo $_SESSION['user_info']['profile_picture'];?>" alt="user-img" title="<?php echo $_SESSION['user_info']['member_name'];?>" class="rounded-circle img-thumbnail img-responsive">
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['user_info']['member_name'];?></a> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="dashboard.php?page=members&act=logout" class="text-custom">
                                    <i class="mdi mdi-power" style=font-size:20px></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Menu</li>
                            <li>
                                <a href="dashboard.php?page=projects" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Projects </span> </a>
                            </li>
                            <li>
                                <a href="dashboard.php?page=tasks" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Tasks </span> </a>
                            </li>
                            <li>
                                <a href="dashboard.php?page=meetings" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Meetings </span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                    <?php 
 require_once './views/'.$subview;
?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-center">
                    Nhóm con chim bé nhỏa.. /
                    Ô rai sa vồ rịt !
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="./static/js/jquery.min.js"></script>
        <script src="./static/js/popper.min.js"></script>
        <script src="./static/js/bootstrap.min.js"></script>
        <script src="./static/js/detect.js"></script>
        <script src="./static/js/fastclick.js"></script>
        <script src="./static/js/jquery.blockUI.js"></script>
        <script src="./static/js/waves.js"></script>
        <script src="./static/js/jquery.nicescroll.js"></script>
        <script src="./static/js/jquery.slimscroll.js"></script>
        <script src="./static/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="./static/js/jquery.core.js"></script>
        <script src="./static/js/jquery.app.js"></script>
        <script src="./static/js/main.js"></script>

    </body>
</html>