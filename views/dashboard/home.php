<div class="row">
                            <div class="col-sm-8">
                                <div class="bg-picture card-box">
                                    <div class="profile-info-name">
                                        <img src="static/images/users/<?php echo $_SESSION['user_info']['profile_picture'];?>" class="img-thumbnail" alt="<?php echo $_SESSION['user_info']['member_name'];?>">

                                        <div class="profile-info-detail">
                                            <h4 class="m-0"><?php echo $_SESSION['user_info']['member_name']?></h4>
                                            <p class="text-muted m-b-20"><i><?php echo $_SESSION['user_info']['title']?></i></p>
                                            <p><?php echo $_SESSION['user_info']['about'];?></p>

                                            <div class="button-list m-t-20">
                                                <button type="button" class="btn btn-facebook btn-sm waves-effect waves-light">
                                                    <i class="fa fa-facebook"></i>
                                                </button>

                                                <button type="button" class="btn btn-sm btn-twitter waves-effect waves-light">
                                                    <i class="fa fa-twitter"></i>
                                                </button>

                                                <button type="button" class="btn btn-sm btn-linkedin waves-effect waves-light">
                                                    <i class="fa fa-linkedin"></i>
                                                </button>

                                                <button type="button" class="btn btn-sm btn-dribbble waves-effect waves-light">
                                                    <i class="fa fa-dribbble"></i>
                                                </button>

                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--/ meta -->


                            </div>

                            <div class="col-sm-4">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">My Team Members</h4>

                                    <ul class="list-group m-b-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Michael Zenaty</span>
                                                    <span class="desc">CEO</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">James Neon</span>
                                                    <span class="desc">Web Designer</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">John Smith</span>
                                                    <span class="desc m-b-0">Web Developer</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Michael Zenaty</span>
                                                    <span class="desc">Programmer</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Mat Helme</span>
                                                    <span class="desc">Manager</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30"><i class="mdi mdi-notification-clear-all m-r-5"></i> Upcoming Reminders</h4>

                                    <ul class="list-group m-b-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <i class="mdi mdi-circle text-primary"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Meet Manager</span>
                                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <i class="mdi mdi-circle text-success"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Project Discussion</span>
                                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <i class="mdi mdi-circle text-pink"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Meet Manager</span>
                                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <i class="mdi mdi-circle text-muted"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Project Discussion</span>
                                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <i class="mdi mdi-circle text-danger"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Meet Manager</span>
                                                    <span class="desc">February 29, 2016 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>