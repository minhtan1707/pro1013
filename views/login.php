<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="./static/images/favicon.png">

    <title>Đăng nhập - Cú to</title>

    <!-- css -->
    <link href="./static/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body style="background: url(./static/images/img-3.jpg) no-repeat fixed center; background-size:cover;">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.php" class="text-success">
                                            <span><img src="./static/images/logo_dark.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <h5 class="text-uppercase font-bold m-b-5 m-t-50">Đăng nhập</h5>
                                    <p class="m-b-0">Đăng nhập với tài khoản đã đăng ký</p>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="" method='post'>

                                        <div class="form-group m-b-20 row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" name="email"  id="emailaddress" required=""
                                                    placeholder="@.com">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted pull-right"><small>Quên mật khẩu?</small></a>
                                                <label for="password">Password</label>
                                                <input class="form-control" name="password"  type="password" required="" id="password"
                                                    placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        Ghi nhớ
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                                    type="submit">Đăng nhập</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                                <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                                    <i class="fa fa-facebook"></i>
                                                </button>
                                                <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                                    <i class="fa fa-google"></i>
                                                </button>
                                                <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">Chưa có tài khoản ư? <a href="index.php?url=register"
                                                    class="text-dark m-l-5"><b>Đăng ký</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->
<?php if(isset($_SESSION['alert'])):?>
<div id=toastr-one div='<?php echo $_SESSION['alert']['class'];?>' message='<?php echo $_SESSION['alert']['message'];?>'></div>
<?php unset($_SESSION['alert']);?>
<?php endif;?>

<!-- JS  -->
<script src="./static/js/jquery.min.js"></script>
<script src="./static/js/tether.min.js"></script>
<script src="./static/js/bootstrap.min.js"></script>
<script src="./static/js/metisMenu.min.js"></script>
<script src="./static/js/waves.js"></script>
<script src="./static/js/jquery.slimscroll.js"></script>
<script src="./static/js/jquery.core.js"></script>
<script src="./static/js/jquery.app.js"></script>
<script src="./static/js/main.js"></script>
<script src="./static/plugin/jquery-toastr/jquery.toast.min.js"></script>
<script src="./static/plugin/jquery-toastr/jquery.toastr.js"></script>
</body>

</html>