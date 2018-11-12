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
                        <img src="./static/images/users/<?php echo isset($user_info)?$user_info['profile_picture']:''?>" class="rounded-circle img-thumbnail" alt="profile-image">
                    </div>

                    <div class="">
                        <h4 class="m-b-5"><?php echo isset($user_info)?$user_info['member_name']:''?></h4>
                    </div>

                    <p class="text-muted font-13">
                    <?php echo isset($user_info)?$user_info['about']:''?>
                    </p>
                    <div class="panel-body">
                        <p class="text-muted font-13">
                        </p>

                        <hr>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?php echo isset($user_info)?$user_info['member_name']:''?></span></p>

                            <p class="text-muted font-13"><strong>Phone :</strong><span class="m-l-15">9999999</span>
                            </p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo isset($user_info)?$user_info['email']:''?></span></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card-box">
                <h4 class="header-title m-t-0">Chỉnh sửa</h4>
                <form action="#" novalidate="" method="post" enctype="multipart/form-data">
                <input type=hidden name=member_id value=<?php echo $_SESSION['user_info']['member_id'];?>>
                    <div class="form-group">
                        <label for="userName">Full Name<span class="text-danger">*</span></label>
                        <input type="text" parsley-trigger="change" name=member_name required="" placeholder="Enter your name"
                            class="form-control" id="userName"
                            value="<?php echo isset($user_info)?$user_info['member_name']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                        <input type="email" parsley-trigger="change"  name=email required="" placeholder="Enter email"
                            class="form-control" id="emailAddress"
                            value="<?php echo isset($user_info)?$user_info['email']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                        <input type="email" parsley-trigger="change"  name=phone required="" placeholder="Enter phone number"
                            class="form-control" id="phoneNumber"
                            value="<?php echo isset($user_info)?$user_info['phone']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span class="text-danger">*</span></label>
                        <input id="pass1" type="password" placeholder="Password" name=pass required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass1">About<span class="text-danger">*</span></label><br>
                        <textarea name="about" id="" cols="100" rows="6" class="form-control"><?php echo isset($user_info)?$user_info['about']:''?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Title<span class="text-danger">*</span></label>
                        <input id="pass1" type="text" placeholder="Title" name=title required="" class="form-control"
                        value="<?php echo isset($user_info)?$user_info['title']:''?>">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Avatar<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="profile_picture"> </div>
                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary waves-effect waves-light" name=submit type="submit">
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