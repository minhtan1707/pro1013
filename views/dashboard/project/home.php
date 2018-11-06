<!-- Start project list -->
<div class="row">
        <div class="col-sm-4">
            <a href="dashboard.php?page=projects&act=add" class="btn btn-primary waves-effect waves-light m-b-20"><i class="md md-add"></i> Add Project</a>
        </div>
        <div class="col-sm-8">
            <div class="text-right">
                <ul class="pagination pagination-split mt-0 pull-right">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
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

    <div class="col-sm-4 col-xs-12">
        <a href="dashboard.php?page=projects&act=detail">
        <div class="card m-b-20 card-block card-inverse card-primary">
            <h4 class="card-title"><?php echo isset($project)?$project['pro_name']:'';?></h4>
            <p class="card-text">Thông tin dự án <br>
            <?php echo isset($project)?$project['description']:'';?>
            </p>
            <p class="card-text">
                <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                $created_at=strtotime($project['created_at']);
                if(isset($project)){
                    if((date('m')-date('m',$created_at))>1)
                    {
                        $date= date('m')-date('m',$created_at);
                        echo '<small>Đăng '.$date.' tháng trước</small>';
                    }
                    else if((date('d')-date('d',$created_at))>1)
                    {
                        $date= date('d')-date('d',$created_at);
                        echo '<small>Đăng '.$date.' ngày trước</small>';
                    }else{
                        $hour=date('H')-date('H',$created_at);
                        echo '<small>Đăng '.$hour.' giờ trước</small>';
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
