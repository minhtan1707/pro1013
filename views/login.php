
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="./static/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- App css -->
        <link href="./static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./static/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./static/css/style.css" rel="stylesheet" type="text/css" />

        <script src="./static/js/modernizr.min.js"></script>

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
                <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" action='' method="POST">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" required="" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="index.php?act=register" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>
            
        </div>
        <!-- end wrapper page -->



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
	
	</body>
</html>