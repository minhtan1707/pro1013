<div class="row">
    <div class="col-md-4">

        <div class="text-center card-box">
            <div class="member-card">
                <h4 class="text-dark header-title m-t-0 text-left">Team leader</h4>
                <div class="thumb-xl member-thumb m-b-10 mx-auto">
                    <img src="./static/images/users/<?php echo isset($team_lead)?$team_lead['profile_picture']:'';?>" class="rounded-circle img-thumbnail" alt="profile-image">
                </div>

                <div class="">
                    <h4 class="m-b-5"><?php echo isset($team_lead)?$team_lead['member_name']:'';?></h4>
                    <p class="text-muted"><?php echo isset($team_lead)?$team_lead['title']:'';?></p>
                    <hr>
                </div>
                <div class="assign-team m-t-30">
                        <h4 class="text-dark header-title m-t-0 text-left">Team </h4>
                        <div>
                        <?php foreach($project_details as $project_detail):?>
                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="./static/images/users/<?php echo isset($project_detail)?$project_detail['profile_picture']:''?>"> </a>
                        <?php endforeach;?> 
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">

    </div>
</div>