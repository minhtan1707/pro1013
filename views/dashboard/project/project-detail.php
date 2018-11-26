<div class="row">
	<div class="col-md-4">
		<div class="text-center card-box">
			<div class="member-card">
				<h4 class="text-dark header-title m-t-0 text-left ">Thông tin dự án</h4>
				<h3 class="text-dark  m-b-30 text-center">
					<?php echo isset($project)?$project['pro_name']:'';?>
				</h3>
				<p class=" text-left">
					<?php echo isset($project)?$project['description']:'';?>.</p>
				<?php if($project['pro_leader']==$_SESSION['user_info']['member_id']):?>
				<button type="button" data-toggle="modal" data-target="#edit-pro-modal" class="btn btn-inverse btn-rounded w-md waves-effect waves-light">
					<i class="fa fa-wrench m-r-5"></i> <span>Sửa</span> </button>
				<?php endif;?>
				<hr>
				<h4 class="text-dark header-title m-t-0 text-left">Trưởng nhóm</h4>
				<div class="thumb-xl member-thumb m-b-10 mx-auto">
					<img src="./static/images/users/<?php echo isset($team_lead)?$team_lead['profile_picture']:'';?>" class="rounded-circle img-thumbnail"
					 alt="profile-image">
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
						<img class=" thumb-sm rounded-circle" alt="64x64" src="./static/images/users/<?php echo isset($project_detail)?$project_detail['profile_picture']:''?>">
						<p class="text-center">
							<?php echo isset($project_detail)?$project_detail['member_name']:''?>
						</p>
						<?php endforeach;?>
					</div>
					<?php if($project['pro_leader']==$_SESSION['user_info']['member_id']):?>
					<button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#mem-modal">Thêm
						thành viên</button>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
	<div class="card-box ">
				<h4 class="text-dark header-title m-t-0 text-center ">Tiến độ</h4>
				<hr>
				<div class="progress m-b-0">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
		</div>
		<div class="card-box">
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-dark  font-700  m-b-10 text-left">Bảng nhiệm vụ</h3>
				</div>
				<div class="col-md-6">
					<h3 class="text-dark  font-700  m-b-10 text-right">

						<button type="button" class="btn btn-custom waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Thêm
							nhiệm vụ</button>
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
					<?php if($now>$end_date):?>
					<span class="badge badge-muted pull-right" style=margin-left:5px>Closed</span>
					<?php endif;?>

					<?php if($task['status']==0){
							echo '<span class="badge badge-danger pull-right">Unfinished</span> ';
						}else if($task['status']==1)
						{
							echo '<span class="badge badge-primary pull-right">Finished</span> ';
						}?>


					<!-- <span class="badge badge-muted pull-right">Finished</span> -->
					<!-- <span class="badge badge-success pull-right">In progress</span> -->
					<h4>
						<?php echo isset($task)?$task['task_name']:'';?>
					</h4>
					<p class=" text-left">
						<?php echo isset($task)?$task['task_desc']:'';?>
					</p>
				</div>
				<div class="m-t-20">
					<?php if($project['pro_leader']==$_SESSION['user_info']['member_id']):?>
					<p class="pull-right m-b-0 m-t-10">
						<button type="button" class="btn btn-pink btn-xs waves-effect waves-light" data-toggle="modal" data-target="#comment-modal">Bình
							luận</button>
						<button type="button" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="<?php echo isset($task)?'#edit-task-modal-'.$task['task_id']:'';?> ">Chỉnh
							sửa</button>
					</p>
					<?php endif;?>
					<p class="m-b-0"><img src="./static/images/users/<?php echo isset($task)?$task['profile_picture']:'';?>" alt="<?php echo isset($task)?$task['member_name']:'';?>"
						 class="thumb-sm rounded-circle m-r-10"> <span class="font-bold font-secondary">
							<?php echo isset($task)?$task['member_name']:'';?></span> </p>
				</div>
			</div>
			<?php endforeach;?>
			<!-- end task box -->
		</div>

	</div>
</div>
<!-- meeting box -->
<div class="row">
	<div class="col-4">
		<div class="card-box">
				<h4 class="text-dark header-title m-t-0 text-left ">Thông báo</h4>
				<hr>
				<!-- start box -->
				<div class="timeline-box">
						<h5 class="text-success">07 January 2016</h5>
						<p class="timeline-date text-muted"><small>08:25 am</small></p>
						<p>Jonatha Smith added new milestone
							Lorem ipsum dolor sit amet consiquest dio</p>
					</div>
					<!-- end box -->
				<hr>
				<form action="" method="POST">
					<input type="hidden" name="task_id" value="3">
					<div class="form-group">
						<textarea class="form-control" name="comment_content" id="" cols="100%" rows="10"></textarea>
					</div>
					<input type="submit" class="btn btn-success" name="add_comment" value="Tạo">

				</form>
		</div>
	</div>
	<div class="col-8">
		<div class="card-box">
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-dark  font-700  m-b-10 text-left">Cuộc họp</h3>
				</div>
				<div class="col-md-6">
					<h3 class="text-dark  font-700  m-b-10 text-right">
						<button type="button" class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target="#metting-modal">Tạo
							cuộc họp</button>
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="table-responsive">
					<table class="table m-0 table-colored table-pink">
						<thead>
							<tr>
								<th>#</th>
								<th style="width: 400px;">Nội dung</th>
								<th style="width: 400px;">Địa điểm</th>
								<th style="width: 400px;">Ngày họp</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($meetings as $meeting):?>
							<tr>
								<th scope="row">1</th>
								<td>
									<?php echo isset($meeting)?$meeting['meeting_desc']:''?>
								</td>
								<td>
									<?php echo isset($meeting)?$meeting['meeting_location']:''?>
								</td>
								<td>
									<?php echo isset($meeting)?$meeting['meeting_date']:''?>
								</td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- // modal -->
	<!-- add task modal -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	 aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myLargeModalLabel">Thêm nhiệm vụ</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="" method="post">

						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<label for="username">Tên nhiệm vụ</label>
								<input class="form-control" type="text" name="task_name" id="username" required="">
							</div>
						</div>

						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Nội dung</label></div>
								<textarea id="textarea" class="form-control" name="task_desc" maxlength="225" rows="3"></textarea>
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Người thực hiện</label></div>
								<select class="form-control" name=assigned_member>
									<?php foreach($members_by_pro_id as $member):?>
									<option value=<?php echo $member['member_id'];?>>
										<?php echo $member['member_name'].' - '.$member['email'];?>
									</option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Ngày kết thúc</label></div>
								<input type="date" name="end_date" class="form-control" max=<?php echo $pro_end?>>
							</div>
						</div>
						<div class="form-group account-btn text-center m-t-10">
							<div class="col-xs-12">
								<input class="btn w-lg btn-lg btn-custom" type="submit" name="add_task" value=Thêm>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end task modal -->
	<!-- add member modal -->
	<div id="mem-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
	 aria-hidden="true" style="display: none;">
		<div class="modal-dialog" style="width:55%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="custom-width-modalLabel">Thêm thành viên vào dự án</h4>
				</div>
				<div class="modal-body">

					<div class="form-group m-b-25">
						<form action="" class="" method=post>
							<div class="col-xs-12">
								<div> <label for="emailaddress">Nhập Email</label></div>
								<input type="text" name="member_added" class="form-control m-b-25">

								<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
								<input type="submit" name=add_member class="btn btn-info" value='Thêm'>
							</div>
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!-- end add member modal -->
	<!-- edit task modal -->
	<?php foreach($tasks as $task):?>
	<div id="<?php echo isset($tasks)?'edit-task-modal-'.$task['task_id']:'';?>" class="modal fade" tabindex="-1" role="dialog"
	 aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" style="width:55%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="custom-width-modalLabel">Sửa
						<?php echo isset($task)?$task['task_name']:'';?>
					</h4>
				</div>
				<form class="form-horizontal" action="" method="post">
					<input type=hidden name=task_id value=<?php echo isset($task)?$task['task_id']:'';?>>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<label for="username">Tên nhiệm vụ</label>
							<input class="form-control" type="text" name="task_name" id="username" value='<?php echo isset($task)?$task['
							 task_name']:'';?>' required="">
						</div>
					</div>

					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<div> <label for="emailaddress">Nội dung</label></div>
							<textarea id="textarea" class="form-control" name="task_desc" maxlength="225" rows="3"><?php echo isset($task)?$task['task_desc']:'';?></textarea>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<div> <label for="emailaddress">Người thực hiện</label></div>
							<select class="form-control" name=assigned_member>
								<?php foreach($members as $member):?>
								<option value=<?php echo $member['member_id']; if($task['assigned_member']==$member['member_id']) { echo
								 ' selected' ; } ?>>
									<?php echo $member['member_name'].' - '.$member['email'];?>
								</option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<div> <label for="emailaddress">Trạng thái</label></div>
							<select class="form-control" name=status>
								<option value=0>Chưa Hoàn Thành</option>
								<option value=1>Đã Hoàn Thành</option>
							</select>
						</div>
					</div>
					<div class="form-group m-b-25">
						<div class="col-xs-12">
							<div> <label for="emailaddress">Ngày kết thúc</label></div>
							<input type="date" name="end_date" class="form-control" value=<?php echo isset($task)?$task['end_date']:'';?>
							max=
							<?php echo $pro_end?>>
						</div>
					</div>
					<div class="form-group m-b-25">
						<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
						<input type="submit" name=edit_task class="btn btn-success" value="Xác nhận">
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


					<form class="form-horizontal" action="" method="post">

						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<label for="username">Tên dự án</label>
								<input class="form-control" type="text" name="pro_name" id="username" value="<?php echo isset($project)?$project['pro_name']:'';?>"
								 required="">
							</div>
						</div>

						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Nội dung</label></div>
								<textarea id="textarea" class="form-control" name="pro_desc" maxlength="225" rows="3"><?php echo isset($project)?$project['description']:'';?></textarea>
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Ngày bắt đầu</label></div>
								<input type="date" name="pro_start" class="form-control" value=<?php echo
								 isset($project)?$project['pro_start']:'';?>>
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Ngày kết thúc</label></div>
								<input type="date" name="pro_end" class="form-control" value=<?php echo
								 isset($project)?$project['pro_end']:'';?>>
							</div>
						</div>
						<div class="form-group account-btn text-center m-t-10">
							<div class="col-xs-12">
								<input class="btn w-lg btn-s btn-inverse" type="submit" value=Sửa name=edit_project>
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


					<form class="form-horizontal" action="" method="post">
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Nội dung</label></div>
								<textarea id="textarea" class="form-control" name="description" maxlength="225" rows="3"></textarea>
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<label for="username">Địa điểm</label>
								<input class="form-control" type="text" name="meeting_location" id="username" required="">
							</div>
						</div>
						<div class="form-group m-b-25">
							<div class="col-xs-12">
								<div> <label for="emailaddress">Ngày họp</label></div>
								<input type="date" name="meeting_date" class="form-control">
							</div>
						</div>
						<div class="form-group account-btn text-center m-t-10">
							<div class="col-xs-12">
								<input class="btn w-lg btn-s btn-pink" type="submit" name=add_meeting value="Sửa">
							</div>
						</div>

					</form>


				</div>
			</div>
		</div>
	</div>
	<!-- end edit project inffo modal -->
	<?php if(isset($_SESSION['alert'])):?>
	<div id=toastr-one div='<?php echo $_SESSION[' alert']['class'];?>' message='
		<?php echo $_SESSION['alert']['message'];?>'></div>
	<?php unset($_SESSION['alert']);?>
	<?php endif;?>
	<!-- Modal comment -->
	<div id="comment-modal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel"
	 style="display: none; padding-left: 0px;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="modal-body">
					<div class="p-10 task-detail">
						<h4 class="font-600 m-b-20">
							Task no.3 </h4>

						<p class="text-muted">
							Lorem disasd eqg sgsdg ew gewgw </p>

						<ul class="list-inline task-dates m-b-0 m-t-20">
							<li>
								<h5 class="font-600 m-b-5">Ngày bắt đầu</h5>
								<p>
									2018-11-06 10:18:50 </p>
							</li>

							<li>
								<h5 class="font-600 m-b-5">Ngày kết thúc</h5>
								<p>
									2018-11-14 </p>
							</li>
							<li>
								<h5 class="font-600 m-b-5">Trạng thái</h5>

								<span class="label label-muted">Closed</span>
							</li>
							<li>
							</li>
						</ul>
						<div class="clearfix"></div>
						<hr>
						<div class="row">
							<div class="col-12">
								<h3 class="font-700 m-b-5">Bình luận</h3>
								<!-- start -->
								<div class="">
									<span class="pull-left m-r-15"><img src="static/images/users/profile1.jpg" alt="" class="thumb-lg rounded-circle"></span>
									<h5 class="m-b-5"><b>Mike Tanny</b></h5>
									<p class="text-muted m-t-0" style="font-size:.8rem">2018-11-26 18:52:32</p>
									<p class="text-muted">sdsdfsdf
									</p>
								</div>
								<hr>
								<!-- end -->
								<h5 class="font-600 m-b-5">Thêm bình luận</h5>
								<form action="" method="POST">
									<input type="hidden" name="task_id" value="3">
									<div class="form-group">
										<textarea class="form-control" name="comment_content" id="" cols="100%" rows="10"></textarea>
									</div>
									<input type="submit" class="btn btn-success" name="add_comment" value="Bình luận">

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal comment -->
	