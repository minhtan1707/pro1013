<!-- Start project list -->
<div class="row">
    <div class="col-sm-4">
        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#signup-modal">Add project</button>
    </div>
    <div class="col-sm-8">
        <div class="text-right">
            <ul class="pagination pagination-split mt-0 pull-right">
                <!-- <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li> -->
                <li class="page-item">
                    <a href="<?php echo $previous_page<1?'':'dashboard.php?page=projects&pages='.$previous_page;?>" class="page-link" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php if($previous_page>=1):?>
                <li class="page-item">
                    <a href="<?php echo 'dashboard.php?page=projects&pages='.$previous_page;?>" class="page-link">
                        <?php echo $previous_page;?>
                    </a>
                </li>
                <?php endif;?>
                <li class="page-item active">
                    <a class="page-link">
                        <?php echo $current_page;?>
                    </a>
                </li>
                <?php if($next_page<=$total_page):?>
                <li class="page-item">
                    <a href="<?php echo 'dashboard.php?page=projects&pages='.$next_page;?>" class="page-link">
                        <?php echo $next_page;?>
                    </a>
                </li>
                <?php endif;?>
                <li class="page-item">
                    <a href="<?php echo $next_page>$total_page?'':'dashboard.php?page=projects&pages='.$next_page;?>" class="page-link" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach($projects as $project):?>
    <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                $created_at=strtotime($project['created_at']);
                $pro_end = strtotime($project['pro_end']);?>
    <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail&id=<?php echo isset($project)?$project['id']:''?>">
            <div class="project-card card m-b-20 card-block card-inverse card-<?php 
                if(date('Y-m-d',$pro_end)<date('Y-m-d'))
                {
                    echo 'muted';
                }
                else if($_SESSION['user_info']['member_id']==$project['pro_leader'])
                {
                    echo 'success';
                }
                else
                {
                    echo 'info';
                }
            ?>">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">
                            <?php echo isset($project)?$project['pro_name']:'';?>
                        </h4>
                    </div>
                    <div class="col-6 text-right m-t-5">
                        <p class="card-text">
                            <b>
                                <?php if(date('Y-m-d',$pro_end)<date('Y-m-d')){
                         echo 'Closed<br>';}?>
                                
                                <?php if($_SESSION['user_info']['member_id']==$project['pro_leader']){
                        echo 'PM';
                        }else{
                        echo "";
                        }?>

                            </b>
                    </p>
                    </div>
                </div>


                <p class="card-text">Ngày kết thúc:
                    <?php echo isset($project)?$project['pro_end']:'';?>
                </p>
                <p class="card-text">
                    <?php echo isset($project)?$project['description']:'';?>
                </p>
                <p class="card-text m-b-0">
                    <?php 
                if(isset($project)){
                    if((date('m')-date('m',$created_at))>=1)
                    {
                        $date= date('m')-date('m',$created_at);
                        echo '<small>Đăng '.$date.' tháng trước</small>';
                    }
                    else if((date('d')-date('d',$created_at))>=1)
                    {
                        $date= date('d')-date('d',$created_at);
                        echo '<small>Đăng '.$date.' ngày trước</small>';
                    }else if((date('H')-date('H',$created_at))>=1){
                        $hour=date('H')-date('H',$created_at);
                        echo '<small>Đăng '.$hour.' giờ trước</small>';
                    }else{
                        $minute=date('i')-date('i',$created_at);
                        echo '<small>Đăng '.$minute.' phút trước</small>';
                    }
                }?>
                </p>




            </div>
        </a>
    </div>

    <?php endforeach;?>
    <!-- <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail">
        <div class="card m-b-20 card-block card-inverse card-info">
            <h4 class="card-title">Project title</h4>
            <p class="card-text">Thông tin dự án <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dignissimos neque quod quam earum
                eius.
            </p>
            <p class="card-text">
                <small>Đăng 3 giờ trước</small>
            </p>
        </div>
    </a>
    </div>
    <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail">
        <div class="card m-b-20 card-block card-inverse card-success">
            <h4 class="card-title">Project title</h4>
            <p class="card-text">Thông tin dự án <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dignissimos neque quod quam earum
                eius.
            </p>
            <p class="card-text">
                <small>Đăng 3 giờ trước</small>
            </p>
        </div>
    </a>
    </div>
    <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail">
        <div class="card m-b-20 card-block card-inverse card-warning">
            <h4 class="card-title">Project title</h4>
            <p class="card-text">Thông tin dự án <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dignissimos neque quod quam earum
                eius.
            </p>
            <p class="card-text">
                <small>Đăng 3 giờ trước</small>
            </p>
        </div>
    </a>
    </div>
    <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail">
        <div class="card m-b-20 card-block card-inverse card-danger">
            <h4 class="card-title">Project title</h4>
            <p class="card-text">Thông tin dự án <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dignissimos neque quod quam earum
                eius.
            </p>
            <p class="card-text">
                <small>Đăng 3 giờ trước</small>
            </p>
        </div>
    </a>
    </div> -->
</div>


<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <div class="modal-body">
                <h2 class="text-uppercase text-center m-b-30">
                    Thêm dự án
                </h2>


                <form class="form-horizontal" action="" method="post">

                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <label for="username">Tên dự án</label>
                            <input class="form-control" type="text" name="project[pro_name]" id="username" required="">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <div>
                                <label for="emailaddress">Nội dung</label>
                            </div>
                            <textarea id="textarea" class="form-control" name="project[pro_desc]" maxlength="225" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <div>
                                <label for="emailaddress">Ngày bắt đầu</label>
                            </div>
                            <input type="date" name="project[pro_start]" class="form-control">
                        </div>
                    </div>
                    <div class="form-group m-b-25">
                        <div class="col-xs-12">
                            <div>
                                <label for="emailaddress">Ngày kết thúc</label>
                            </div>
                            <input type="date" name="project[pro_end]" class="form-control">
                        </div>
                    </div>

                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn w-lg btn-lg btn-primary waves-effect waves-light" type="submit">Thêm dự án</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php if(isset($_SESSION['alert'])):?>
<div id=toastr-one div='<?php echo $_SESSION[' alert ']['class '];?>' message='<?php echo $_SESSION[' alert ']['message
    '];?>'></div>
<?php unset($_SESSION['alert']);?>
<?php endif;?>