


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

<?php if($_SESSION['user_info']['last_logged_out']==NULL):?>
<div id="first-login" class="modal fade" tabindex="1" role="dialog" aria-labelledby="custom-width-modalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                    Đăng nhập lần đầu
                </h2>

                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <p>Xin chào mừng đến với Cú to</p>
                            <p> Chúng tôi khuyến khích người dùng chỉnh sửa thông tin cá nhân trước khi bắt đầu sử dụng website</p>
                        </div>
                    </div>


            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php endif; ?>