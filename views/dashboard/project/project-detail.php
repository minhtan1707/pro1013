<div class="row">
    <div class="col-md-4">

        <div class="text-center card-box">
            <div class="member-card">
                <h4 class="text-dark header-title m-t-0 text-left ">Thông tin dự án</h4>
                <h3 class="text-dark  m-b-30 text-center">Dự án 1</h3>
                <p class=" text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste
                    itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                    delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo
                    \rerum? Lorem ipsum dolor sit amet.</p>
                <hr>
                <h4 class="text-dark header-title m-t-0 text-left">Team leader</h4>
                <div class="thumb-xl member-thumb m-b-10 mx-auto">
                    <img src="./static/images/users/<?php echo isset($team_lead)?$team_lead['profile_picture']:'';?>"
                        class="rounded-circle img-thumbnail" alt="profile-image">
                </div>

                <div class="">
                    <h4 class="m-b-5">
                        <?php echo isset($team_lead)?$team_lead['member_name']:'';?>
                    </h4>
                    <p class="text-muted">
                        <?php echo isset($team_lead)?$team_lead['title']:'';?>
                    </p>
                    <hr>
                </div>
                <div class="assign-team m-t-30">
                    <h4 class="text-dark header-title m-t-0 text-left">Team </h4>
                    <div>
                        <?php foreach($project_details as $project_detail):?>
                        <img class=" thumb-sm" alt="64x64" src="./static/images/users/<?php echo isset($project_detail)?$project_detail['profile_picture']:''?>">
                        <p class="text-center">Member name</p>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card-box">
            <div class="row">
            <div class="col-md-6">
                    <h3 class="text-dark  font-700  m-b-10 text-left">Bảng nhiệm vụ</h3>
            </div>
            <div class="col-md-6">
                    <h3 class="text-dark  font-700  m-b-10 text-right">
                            <a href="dashboard.php?page=projects&act=newtask" class="btn btn-custom waves-effect waves-light m-b-20" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="md md-add"></i> Add Task</a>
                    </h3>
            </div>
            </div>
            <div class="card-box kanban-box">
                <div class="kanban-detail">
                    <span class="badge badge-danger pull-right">Unfinished</span>
                    <!-- <span class="badge badge-muted pull-right">Finished</span> -->
                    <!-- <span class="badge badge-success pull-right">In progress</span> -->
                    <h4>Name task</h4>
                    <p class=" text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste
                            itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                            delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo
                            \rerum? Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="m-t-20">
                    <p class="pull-right m-b-0 m-t-10">
                        <button type="button" class="btn btn-success btn-s waves-effect waves-light" data-toggle="modal"
                            data-target="#task-detail-modal">Xem chi tiết</button>
                    </p>
                    <p class="m-b-0"><a href="" class="text-muted"><img src="./static/images/users/avatar-1.jpg" alt="task-user"
                                class="thumb-sm rounded-circle m-r-10"> <span class="font-bold font-secondary">Tên người làm</span></a> </p>
                </div>
            </div>
        </div>
    </div>
</div>


