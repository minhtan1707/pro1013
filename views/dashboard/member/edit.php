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

</head>

<body>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center card-box">
                <div class="clearfix"></div>
                <div class="member-card">
                    <div class="thumb-xl member-thumb m-b-10 mx-auto">
                        <img src="./static/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                    </div>

                    <div class="">
                        <h4 class="m-b-5">Julie L. Arsenault</h4>
                    </div>

                    <p class="text-muted font-13">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusantium nam iste
                        voluptatum veritatis officiis ipsa minima cupiditate! Aut, omnis. Est distinctio molestias
                        explicabo? Explicabo ullam delectus cupiditate omnis quo.
                    </p>
                    <div class="panel-body">
                        <p class="text-muted font-13">
                        </p>

                        <hr>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Suu</span></p>

                            <p class="text-muted font-13"><strong>Phone :</strong><span class="m-l-15">9999999</span>
                            </p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">quocsuu66@gmail.com</span></p>

                            <p class="text-muted font-13"><strong>Địa chỉ :</strong> <span class="m-l-15">Việt nam</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title m-t-0">Chỉnh sửa</h4>
                <form action="#" novalidate="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="userName">User Name<span class="text-danger">*</span></label>
                        <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter user name"
                            class="form-control" id="userName">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                        <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email"
                            class="form-control" id="emailAddress">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span class="text-danger">*</span></label>
                        <input id="pass1" type="password" placeholder="Password" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass1">About<span class="text-danger">*</span></label>
                        <textarea name="about" id="" cols="100" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Avatar<span class="text-danger">*</span></label>
                        <input type="file" class="form-control"> </div>
                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    </div> <!-- JS  -->
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/tether.min.js"></script>
    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/metisMenu.min.js"></script>
    <script src="./static/js/waves.js"></script>
    <script src="./static/js/jquery.slimscroll.js"></script>
    <script src="./static/js/jquery.core.js"></script>
    <script src="./static/js/jquery.app.js"></script>
    <script src="./static/js/main.js"></script>


</body>

</html>