<div class="row">
    <div class="col-sm-12">
        <div class="profile-bg-picture" style="background-image:url('./static/images/bg-profile.jpg')">
            <span class="picture-bg-overlay"></span>
        </div>
        <!-- meta -->
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15">
                        <img src="static/images/users/<?php echo $_SESSION['user_info']['profile_picture'];?>" alt="" class="thumb-lg rounded-circle">
                    </span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 font-18 ellipsis">
                            <?php echo $_SESSION['user_info']['member_name']?>
                        </h4>
                        <!-- Echo role -->
                        <p class="font-13">
                            <?php echo $_SESSION['user_info']['title']?>
                        </p>
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
                    <p class="text-muted font-13">
                        <strong>Full Name :</strong>
                        <span class="m-l-15">
                            <?php echo $_SESSION['user_info']['member_name']?>
                        </span>
                    </p>

                    <p class="text-muted font-13">
                        <strong>Phone :</strong>
                        <span class="m-l-15">9999999</span>
                    </p>

                    <p class="text-muted font-13">
                        <strong>Email :</strong>
                        <span class="m-l-15">
                            <?php echo $_SESSION['user_info']['email']?>
                        </span>
                    </p>


                </div>

                <ul class="social-links list-inline m-t-20 m-b-0">
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Personal Information -->
        <div class="card-box">
            <h4 class="header-title mt-0 m-b-20">Cuộc họp sắp tới</h4>
            <!-- start -->
            <?php foreach($meetings as $meeting):?>
            <div class="">
                <div class="">
                    
                        <h5 class="m-b-5">
                            <strong>
                                <?php echo $meeting['pro_name'];?>
                            </strong>
                        </h5>
                        <p class="m-b-0">Địa điểm:
                            <?php echo $meeting['meeting_location'];?>
                        </p>
                        <p>
                            Thời gian họp: 
                                <?php echo $meeting['meeting_date'];?>
                            
                        </p>
                        <p class="text-muted font-13 m-b-0">
                            <?php echo $meeting['meeting_desc'];?>
                        </p>
                    
                </div>
                <hr>
                <!-- end -->
            </div>
            <?php endforeach;?>
        </div>
        

    </div>


    <div class="col-md-8">

        <div class="row">

            <div class="col-sm-6">
                <div class="card-box widget-box-three card-success">
                    <div class="bg-icon pull-left">
                        <img class="" src="./static/images/icons/clock.svg" title="clock.svg">
                    </div>
                    <div class="text-right">
                        <p class="m-t-5 text-uppercase font-14 font-600">Tổng dự án đang tham gia</p>
                        <h2 class="m-b-10">
                            <span data-plugin="counterup">
                                <?php echo count($projects);?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-sm-6">
                <div class="card-box widget-box-three">
                    <div class="bg-icon pull-left">
                        <img src="./static/images/icons/advertising1.svg" title="advertising.svg">
                    </div>
                    <div class="text-right">
                        <p class="m-t-5 text-uppercase font-14 font-600">Nhiệm vụ chưa hoàn thành</p>
                        <h2 class="m-b-10">
                            <span data-plugin="counterup">
                                <?php echo count($tasks);?>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="card-box">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-20">Nhiện vụ chưa hoàn thành</h4>
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th>Nhiệm vụ</th>
                                <th>Dự án</th>
                                <th>Kết thúc </th>
                                <th>Trạng thái</th>
                                <!-- <th>Chi tiết</th> -->
                            </tr>
                        </thead>
                        <tbody>

                            <?php $count=count($tasks)<3?count($tasks):3;
							for($i=0;$i<$count;$i++):?>
                            <?php $task=isset($tasks[$i])?$tasks[$i]:'';?>
                            <?php								
							date_default_timezone_set('Asia/Ho_Chi_Minh');
							$end_date=strtotime($task['end_date']);
							$end_date=date('Y-m-d',$end_date);
							$now=date('Y-m-d');?>
                            <tr>
                                <td>
                                    <?php echo isset($task)?$task['task_name']:''?>
                                </td>
                                <td>
                                    <?php echo isset($task)?$task['pro_name']:''?>
                                </td>
                                <td>
                                    <?php echo isset($task)?$task['end_date']:''?>
                                </td>
                                <td>
                                    <?php if($now>$end_date):?>
                                    <span class="label label-muted">Closed</span>
                                    <?php endif;?>
                                    <span class="label label-danger">Unfinished</span>
                                </td>

                                <!-- <td><a href="#" class="btn btn-success btn-xs waves-effect waves-light">Xem</a></td> -->
                            </tr>
                            <?php endfor;?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


 <div class="card-box ">
            <div class="card-box">
                <h4 class="header-title mt-0 m-b-20">Dự án đang tham gia</h4>
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ngày kết thúc</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=count($projects)<4?count($projects):4;
                        for($j=0;$j<$count;$j++):?>
                            <?php $project=$projects[$j];?>
                            <tr>
                                <td>
                                    <?php echo isset($project)?$project['pro_name']:'';?>
                                </td>
                                <td>
                                    <?php echo isset($project)?$project['pro_end']:'';?>
                                </td>
                                <td>
                                    <a href="dashboard.php?page=projects&act=detail&id=<?php echo isset($project)?$project['id']:'';?>"
                                        class="btn btn-success btn-xs waves-effect waves-light">Xem</a>
                                </td>
                            </tr>
                            <?php endfor;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <!-- end col -->

</div>