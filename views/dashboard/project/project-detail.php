<div class="row">
	<div class="col-md-4">

		<div class="text-center card-box">
			<div class="member-card">
				<h4 class="text-dark header-title m-t-0 text-left ">Thông tin dự án</h4>
				<h3 class="text-dark  m-b-30 text-center"><?php echo isset($project)?$project['pro_name']:'';?></h3>
				<p class=" text-left"><?php echo isset($project)?$project['description']:'';?>.</p>
				<button type="button" data-toggle="modal" data-target="#edit-pro-modal" class="btn btn-inverse btn-rounded w-md waves-effect waves-light"> <i class="fa fa-wrench m-r-5"></i> <span>Sửa</span> </button>
				<hr>
				<h4 class="text-dark header-title m-t-0 text-left">Trưởng nhóm</h4>
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
					<h4 class="text-dark header-title m-t-0 text-left">Thành viên </h4>
					<div>
						<?php foreach($project_details as $project_detail):?>
						<img class=" thumb-sm" alt="64x64" src="./static/images/users/<?php echo isset($project_detail)?$project_detail['profile_picture']:''?>">
						<p class="text-center">Member name</p>
						<?php endforeach;?>
					</div>
					<button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#mem-modal">Thêm thành viên</button>
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
							 <button type="button" class="btn btn-custom waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Thêm nhiệm vụ</button>
					</h3>
			</div>
			</div>
			<!-- start task box-->
			<?php foreach($tasks as $task):?>
			<div class="card-box kanban-box">
				<div class="kanban-detail">
					<?php 
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$end_date=strtotime($task['end_date']);
						$end_date=date('Y-m-d',$end_date);
						$now=date('Y-m-d');?>
						<?php if($now<$end_date):?>
							<?php if($task['status']==0){
								echo '<span class="badge badge-danger pull-right">Unfinished</span>';
							}else if($task['status']==1)
							{
								echo '<span class="badge badge-primary pull-right">Finished</span>';
							}?>
						<?php else:?>
						<span class="badge badge-muted pull-right">Closed</span>
						<?php endif;?>

					<!-- <span class="badge badge-muted pull-right">Finished</span> -->
					<!-- <span class="badge badge-success pull-right">In progress</span> -->
					<h4><?php echo isset($task)?$task['task_name']:'';?></h4>
					<p class=" text-left"><?php echo isset($task)?$task['task_desc']:'';?></p>
				</div>
				<div class="m-t-20">
					<p class="pull-right m-b-0 m-t-10">
						<button type="button"  class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal"
							data-target="<?php echo isset($task)?'#edit-task-modal-'.$task['task_id']:'';?> ">Chỉnh sửa</button>
					</p>
					<p class="m-b-0"><img src="./static/images/users/<?php echo isset($task)?$task['profile_picture']:'';?>" alt="<?php echo isset($task)?$task['member_name']:'';?>"
								class="thumb-sm rounded-circle m-r-10"> <span class="font-bold font-secondary"><?php echo isset($task)?$task['member_name']:'';?></span> </p>
				</div>
			</div>
			<?php endforeach;?>
			<!-- end task box -->
		</div>

	</div>
</div>
		<!-- meeting box -->
<div class="row">
<div class="col-12">
		<div class="card-box">
				<div class="row">
				<div class="col-md-6">
						<h3 class="text-dark  font-700  m-b-10 text-left">Cuộc họp</h3>
				</div>
				<div class="col-md-6">
						<h3 class="text-dark  font-700  m-b-10 text-right">
								 <button type="button" class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target="#metting-modal">Tạo cuộc họp</button>
						</h3>
				</div>
				</div>
				<div class="row">
						<div class="table-responsive">
								<table class="table m-0 table-colored table-pink">
									<thead>
									<tr>
										<th>#</th>
										<th style="width: 500px;">Nội dung</th>
										<th style="width: 400px;">Địa điểm</th>
										<th>Ngày họp</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<th scope="row">1</th>
										<td >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, vel! Reprehenderit, nobis? Nihil illo in provident beatae omnis quos blanditiis incidunt maxime quidem itaque animi aliquid totam rerum, harum dicta.</td>
										<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, labore.</td>
										<td>09:23 /10/2017</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, vel! Reprehenderit, nobis? Nihil illo in provident beatae omnis quos blanditiis incidunt maxime quidem itaque animi aliquid totam rerum, harum dicta.</td>
										<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, labore.</td>
										<td>09:23 /10/2017</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, vel! Reprehenderit, nobis? Nihil illo in provident beatae omnis quos blanditiis incidunt maxime quidem itaque animi aliquid totam rerum, harum dicta.</td>
										<td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, labore.</td>
										<td>09:23 /10/2017</td>
									</tr>
									</tbody>
								</table>
							</div>
				</div>
</div>
</div>
<!-- // modal -->
<!-- add task modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Thêm nhiệm vụ</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="" method="post" >

					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<label for="username">Tên nhiệm vụ</label>
							<input class="form-control" type="text" name="pro_name" id="username" required="">
						</div>
					</div>

					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Nội dung</label></div>
						  <textarea id="textarea" class="form-control" name="pro_desc" maxlength="225" rows="3" ></textarea>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Người thực hiện</label></div>
						  <select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Ngày kết thúc</label></div>
						  <input type="date" name="day" class="form-control">
						</div>
					</div>
					<div class="form-group account-btn text-center m-t-10">
						<div class="col-xs-12">
							<button class="btn w-lg btn-lg btn-custom waves-effect waves-light" type="submit">Thêm </button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!-- end task modal -->
<!-- add member modal -->
<div id="mem-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog" style="width:55%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="custom-width-modalLabel">Thêm thành viên vào dự án</h4>
			</div>
			<div class="modal-body">
				<form action="" class="">
					<div class="assign-team m-t-30">
						<div class="row">
							<?php foreach($all_mems as $mem):?>
							<div class="col-md-6 m-b-5">
							<span class="checkbox checkbox-custom checkbox-circle">
								<input type="checkbox"  id="<?php echo isset($mem)?'radio_mum_'.$mem['member_id']:''?>" value="<?php echo isset($mem)?'name_mum_'.$mem['member_id']:''?>">
								<label for="<?php echo isset($mem)?'radio_mum_'.$mem['member_id']:''?>">
										<?php echo isset($mem)?$mem['member_name']:''?>
								</label>
							</span>
							<img class=" mr-auto rounded-circle thumb-sm" alt="64x64" src="./static/images/users/<?php echo isset($mem)?$mem['profile_picture']:''?>">
						</div>
							
							<?php endforeach;?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
						<button type="submit" class="btn btn-info waves-effect waves-light">Thêm</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<!-- end add member modal -->
<!-- edit task modal -->
<?php foreach($tasks as $task):?>
<div id="<?php echo isset($task)?'edit-task-modal-'.$task['task_id']:'';?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog" style="width:55%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="custom-width-modalLabel">Sửa <?php echo isset($task)?$task['task_name']:'';?></h4>
			</div>
			<form class="form-horizontal" action="" method="post" >

				<div class="form-group m-b-25">
					<div class="col-xs-12">
						<label for="username">Tên nhiệm vụ</label>
						<input class="form-control" type="text" name="pro_name" id="username" required="">
					</div>
				</div>

				<div class="form-group m-b-25">
					<div class="col-xs-12">
					  <div>  <label for="emailaddress">Nội dung</label></div>
					  <textarea id="textarea" class="form-control" name="pro_desc" maxlength="225" rows="3" ></textarea>
					</div>
				</div>
				<div class="form-group m-b-25">
					<div class="col-xs-12">
					  <div>  <label for="emailaddress">Người thực hiện</label></div>
					  <select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
					</div>
				</div>
				<div class="form-group m-b-25">
					<div class="col-xs-12">
					  <div>  <label for="emailaddress">Trạng thái</label></div>
					  <select class="form-control">
						<option>Đang</option>
						<option>Chưa</option>
						<option>Đã</option>
					</select>
					</div>
				</div>
				<div class="form-group m-b-25">
					<div class="col-xs-12">
					  <div>  <label for="emailaddress">Ngày kết thúc</label></div>
					  <input type="date" name="day" class="form-control">
					</div>
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
				<button type="submit" class="btn btn-success waves-effect waves-light">Xác nhận</button>
			</div>
			</form>

		</div>
	</div>
</div>
<?php endforeach;?>
<!-- end edit task modal -->
<!-- edit project inffo modal -->
<div id="edit-pro-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

			<div class="modal-body">
				<h2 class="text-uppercase text-center m-b-30">
					Sửa dự án
				</h2>


				<form class="form-horizontal" action="" method="post" >

					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<label for="username">Tên dự án</label>
							<input class="form-control" type="text" name="pro_name" id="username" required="">
						</div>
					</div>

					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Nội dung</label></div>
						  <textarea id="textarea" class="form-control" name="pro_desc" maxlength="225" rows="3" ></textarea>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Ngày kết thúc</label></div>
						  <input type="date" name="day" class="form-control">
						</div>
					</div>
					<div class="form-group account-btn text-center m-t-10">
						<div class="col-xs-12">
							<button class="btn w-lg btn-s btn-inverse waves-effect waves-light" type="submit">Sửa</button>
						</div>
					</div>

				</form>


			</div>
		</div>
	</div>
</div>
<!-- end edit project inffo modal -->
<!-- edit project inffo modal -->
<div id="metting-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

			<div class="modal-body">
				<h2 class="text-uppercase text-center m-b-30">
					Tạo cuộc họp
				</h2>


				<form class="form-horizontal" action="" method="post" >
					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Nội dung</label></div>
						  <textarea id="textarea" class="form-control" name="pro_desc" maxlength="225" rows="3" ></textarea>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<label for="username">Địa điểm</label>
							<input class="form-control" type="text" name="pro_name" id="username" required="">
						</div>
					</div>                    
					<div class="form-group m-b-25">
						<div class="col-xs-12">
						  <div>  <label for="emailaddress">Ngày họp</label></div>
						  <input type="date" name="day" class="form-control">
						</div>
					</div>
					<div class="form-group account-btn text-center m-t-10">
						<div class="col-xs-12">
							<button class="btn w-lg btn-s btn-pink waves-effect waves-light" type="submit">Sửa</button>
						</div>
					</div>

				</form>


			</div>
		</div>
	</div>
</div>
<!-- end edit project inffo modal -->