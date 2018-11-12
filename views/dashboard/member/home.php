
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="profile-bg-picture" style="background-image:url('./static/images/bg-profile.jpg')">
                                    <span class="picture-bg-overlay"></span>
                                </div>
                                <!-- meta -->
                                <div class="profile-user-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="pull-left m-r-15"><img src="static/images/users/<?php echo $_SESSION['user_info']['profile_picture'];?>" alt="" class="thumb-lg rounded-circle"></span>
                                            <div class="media-body">
                                                <h4 class="m-t-5 m-b-5 font-18 ellipsis"><?php echo $_SESSION['user_info']['member_name']?></h4>
                                                <!-- Echo role -->
                                                <p class="font-13"><?php echo $_SESSION['user_info']['title']?> </p>
                                                <!-- Echo addresss -->
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <a href="dashboard.php?page=members&act=edit" class="btn btn-success waves-effect waves-light">
                                                    <i class="mdi mdi-account-settings-variant m-r-5"></i> Chỉnh sửa thông tin
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h4 class="header-title mt-0 m-b-20">Thông tin cá nhân</h4>
                                    <div class="panel-body">
                                        <p class="text-muted font-13">
                                            <?php echo $_SESSION['user_info']['about']?>
                                        </p>

                                        <hr>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?php echo $_SESSION['user_info']['member_name']?></span></p>

                                            <p class="text-muted font-13"><strong>Phone :</strong><span class="m-l-15">9999999</span>
                                            </p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $_SESSION['user_info']['email']?></span></p>

                                            
                                        </div>

                                        <ul class="social-links list-inline m-t-20 m-b-0">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Personal Information -->

                                <div class="card-box ribbon-box">
                                    <div class="card-box">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 id="todo-message">Todo list</h4>
                                            </div>
                                        </div>
    
                                        <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                            <div class="row">
                                                <div class="col-sm-9 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="col-sm-3 todo-send">
                                                    <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </form>
    
                                        
    
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-8">

                                <div class="row">

                                    <div class="col-sm-6">
                                    <div class="card-box widget-box-three card-success">
                                    <div class="bg-icon pull-left">
                                        <i class="fi-server"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="m-t-5 text-uppercase font-14 font-600">Tổng dự án đang tham gia</p>
                                        <h2 class="m-b-10"><span data-plugin="counterup"><?php echo count($projects);?></span></h2>
                                    </div>
                                </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-6">
                                    <div class="card-box widget-box-three">
                                    <div class="bg-icon pull-left">
                                        <i class="fi-server"></i>
                                    </div>
                                    <div class="text-right">
                                        <p class="m-t-5 text-uppercase font-14 font-600">Nhiệm vụ chưa hoàn thành</p>
                                        <h2 class="m-b-10"><span data-plugin="counterup"><?php echo count($tasks);?></span></h2>
                                    </div>
                                </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table m-b-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>2</td>
                                                <td>Adminox Frontend</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="label label-success">Finished</span></td>
                                                <td>xxx</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Adminox Frontend</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="label label-purple">In Progress</span></td>
                                                <td>xxx</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Adminox Admin</td>
                                                <td>01/01/2015</td>
                                                <td>07/05/2015</td>
                                                <td><span class="label label-warning">Unfinished</span></td>
                                                <td>xxx</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="card-box">
                                    <h4 class="header-title mt-0 m-b-20">Experience</h4>
                                    <div class="">
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Lead designer / Developer</h5>
                                            <p class="m-b-0">websitename.com</p>
                                            <p><b>2010-2015</b></p>

                                            <p class="text-muted font-13 m-b-0">Lorem Ipsum is simply dummy text
                                                of the printing and typesetting industry. Lorem Ipsum has
                                                been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.
                                            </p>
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Senior Graphic Designer</h5>
                                            <p class="m-b-0">xxx.com</p>
                                            <p><b>2007-2009</b></p>

                                            <p class="text-muted font-13">Lorem Ipsum is simply dummy text
                                                of the printing and typesetting industry. Lorem Ipsum has
                                                been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- end col -->

                        </div>
