<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <meta name="author" content="Suu">

    <link rel="shortcut icon" href="./static/images/favicon.png">

    <title>Cú to - Project management</title>

    <!-- css -->
    <link href="./static/css/style.css" rel="stylesheet" type="text/css" />
    <link href="./static/plugin/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="./static/plugin/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="./static/plugin/jquery-toastr/jquery.toast.min.css "rel="stylesheet" type="text/css" />
    
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
</head>

<body>

    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Logo -->
            <div class="topbar-left">
                <a href="dashboard.php" class="logo">
                    <span>
                        <img src="./static/images/logo.png" alt="" height="25">
                    </span>
                </a>
            </div>
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon p-r-0"></i>
                            <span style="background:darkred;color:white;font-weight:800;padding:3px 6px;border-radius:50%;margin-right:10px"><?php echo count($_SESSION['announcement']);?></span>
                        </a>
                    </li>
                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="hide-phone app-search">
                        <form role="search" id="search-members" action="dashboard.php?page=search-members" method=post>
                            <input type="text" placeholder="Tìm kiếm..." name=search-members class="form-control">
                            <a id='search'><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!-- User box -->
                <div class="user-box">
                        <div class="user-img">
                            <img src="./static/images/users/<?php echo $_SESSION['user_info']['profile_picture'];?>" alt="user-img" title="<?php echo $_SESSION['user_info']['member_name'];?>" class="rounded-circle img-thumbnail img-responsive">
                        </div>
                        <h5 class="text-overflow" style="color:#fff"><small>Hello <?php echo $_SESSION['user_info']['member_name'];?></small> </h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="dashboard.php?page=members" class="text-custom">
                                    <i class="  mdi mdi-eye" style=font-size:20px></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="dashboard.php?page=members&act=logout" class="text-custom">
                                    <i class="  mdi mdi-export" style=font-size:20px></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- End User box -->
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="dashboard.php">
                                <i class="fi-layout"></i><span> Bảng điều khiển </span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=projects">
                                <i class="fi-archive"></i><span> Dự án </span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=tasks">
                                <i class="fi-layers"></i><span> Nhiệm vụ </span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=meetings">
                                <i class="fi-monitor"></i><span>Cuộc họp </span>
                            </a>
                        </li>
                        <li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- View content right -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
<!-- start title  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title float-left"><?php echo $title;?></h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

        <!-- end title -->
<!-- Sub view here -->
                    <?php 
 require_once './views/'.$subview;
?>

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
            Nhóm Cú TO. 
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End  View content right -->
        <!-- ============================================================== -->


    </div>
    <!-- Js  -->
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/tether.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/metisMenu.min.js"></script>
    <script src="./static/js/waves.js"></script>
    <script src="./static/js/jquery.slimscroll.js"></script>
    <script src="./static/js/jquery.core.js"></script>
    <script src="./static/js/jquery.app.js"></script>
    <script src="./static/js/main.js"></script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> -->
    <!-- data tables -->
    <script src="./static/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="./static/plugin/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="./static/plugin/datatables/dataTables.buttons.min.js"></script>
    <script src="./static/plugin/datatables/buttons.bootstrap4.min.js"></script>
    <script src="./static/plugin/datatables/jszip.min.js"></script>
    <script src="./static/plugin/datatables/pdfmake.min.js"></script>
    <script src="./static/plugin/datatables/vfs_fonts.js"></script>
    <script src="./static/plugin/datatables/buttons.html5.min.js"></script>
    <script src="./static/plugin/datatables/buttons.print.min.js"></script>
    <script src="./static/plugin/datatables/buttons.colVis.min.js"></script>
    <script src="./static/plugin/jquery-toastr/jquery.toast.min.js"></script>
    <script src="./static/plugin/jquery-toastr/jquery.toastr.js"></script>




</script>

</body>

</html>