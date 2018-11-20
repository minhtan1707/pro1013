
<div class="card-box">
	<div class="row">
		<div class="col-12">
			<h3 class="text-dark  font-700  m-b-10 text-center">Nhiệm vụ của bạn
			</h3>
		</div>
	</div>
	<div class="text-center m-b-30">
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<div class="m-t-20 m-b-20">
					<h3 class="m-b-10">
						<?php echo count($tasks);?>
					</h3>
					<p class="text-uppercase m-b-5 font-13 font-600">Tổng</p>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="m-t-20 m-b-20">
					<h3 class="m-b-10 text-danger">
						<?php echo count($unfinished_tasks);?>
					</h3>
					<p class="text-uppercase m-b-5 font-13 font-600 text-danger">Chưa hoàn thành </p>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="m-t-20 m-b-20">
					<h3 class="m-b-10 text-muted">
						<?php echo count($closed_tasks);?>
					</h3>
					<p class="text-uppercase m-b-5 font-13 font-600 text-muted">Đang làm </p>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="m-t-20 m-b-20">
					<h3 class="m-b-10 text-primary">
						<?php echo count($finished_tasks);?>
					</h3>
					<p class="text-uppercase m-b-5 font-13 font-600 text-primary">Đã hoàn thành</p>
				</div>
			</div>
		</div>
	</div>


	<div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
				 cellspacing="0" width="100%" id="datatable" role="grid" aria-describedby="datatable_info" style="width: 100%;">
					<thead>
						<tr role="row">
							<th style="width: 100px;"> Tên nv</th>
							<th style="width: 80px;">Dự án</th>
							<th style="width: 161px;">Mô tả</th>
							<th style="width: 44px;">Trạng thái</th>
							<th style="width: 145px;">Ngày tạo</th>
							<th style="width: 120px;">Ngày hết hạn</th>
							<th style="width: 66px;">Tác vụ</th>
						</tr>
					</thead>

					<tbody>

						<?php foreach($tasks as $task):?>
						<tr role="row" class="even">
							<td tabindex="0" class="sorting_1"><b>
									<?php echo isset($tasks)?$task['task_name']:'';?></b></td>
							<td>
								<a href="javascript: void(0);">
									<span class="m-l-5"><b>
											<?php echo isset($tasks)?$task['pro_name']:'';?></b></span>
								</a>
							</td>

							<td>
								<?php echo isset($tasks)?$task['task_desc']:'';?>
							</td>

							<td>

								<?php date_default_timezone_set('Asia/Ho_Chi_Minh');
								$end_date=strtotime($task['end_date']);
								$end_date=date('Y-m-d',$end_date);
								$now=date('Y-m-d');?>
								<?php if($now<$end_date):?>
								<?php if($task['status']==0){
										echo '<span class="label label-danger">Unfinished</span>';
									}else if($task['status']==1)
									{
										echo '<span class="label label-primary">Finished</span>';
									}?>
								<?php else:?>
								<span class="label label-muted">Closed</span>
								<?php endif;?>

							</td>

							<td>
								<?php echo isset($tasks)?$task['created_at']:'';?>
							</td>

							<td>
								<?php echo isset($tasks)?$task['end_date']:'';?>
							</td>
							<td>

							
								<button type="button" class="btn btn-success btn-xs waves-effect waves-light" data-toggle="modal" data-target="<?php echo isset($tasks)?'#task-detail-modal'.$task['task_id']:'';?>">Chi
									tiết</button>
							<?php //else:?>
								
							
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
					<ul class="pagination">
						<li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable"
							 data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
						<li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0"
							 class="page-link">1</a></li>
						<li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
						<li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="3"
							 tabindex="0" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- task detail modal -->
<?php foreach($tasks as $task):?>

	<?php								
date_default_timezone_set('Asia/Ho_Chi_Minh');
$end_date=strtotime($task['end_date']);
$end_date=date('Y-m-d',$end_date);
$now=date('Y-m-d');?>
		<div id="<?php echo isset($tasks)?'task-detail-modal'.$task['task_id']:'';?>" class="modal fade" tabindex="-1" role="dialog"
		aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<div class="modal-body">
						<div class="p-10 task-detail">
							<h4 class="font-600 m-b-20">
								<?php echo isset($tasks)?$task['task_name']:'';?>
							</h4>

							<p class="text-muted">
								<?php echo isset($tasks)?$task['task_desc']:'';?>
							</p>

							<ul class="list-inline task-dates m-b-0 m-t-20">
								<li>
									<h5 class="font-600 m-b-5">Ngày bắt đầu</h5>
									<p>
										<?php echo isset($tasks)?$task['created_at']:'';?>
									</p>
								</li>

								<li>
									<h5 class="font-600 m-b-5">Ngày kết thúc</h5>
									<p>
										<?php echo isset($tasks)?$task['end_date']:'';?>
									</p>
								</li>
								<li>
									<h5 class="font-600 m-b-5">Trạng thái</h5>

									<?php if($now<$end_date):?>
									<?php if($task['status']==0){
											echo '<span class="label label-danger">Unfinished</span>';
										}else if($task['status']==1)
										{
											echo '<span class="label label-primary">Finished</span>';
										}?>
									<?php else:?>
									<span class="label label-muted">Closed</span>
									<?php endif;?>
								</li>
								<li>
								<?php if($now<=$end_date):?>
									<h5 class="font-600 m-b-5">Chỉnh sửa trạng thái</h5>
									<form action="" method="POST">
										<input type=hidden name=task_id value=<?php echo isset($tasks)?$task['task_id']:'';?>>
										<div class="form-group mb-0">
											<select name="status" id="" class="form-control" style="width:7rem; float: left; height: 1.9rem;">
												<option value="0" <?php echo $task['status']==0?'selected':''?>>Unfinished</option>
												<option value="1" <?php echo $task['status']==1?'selected':''?>>Finished</option>
											</select>
											<input  style="float: left;" type="submit" name=change_status class="btn ml-2 btn-sm btn-success" value=Sửa>
										</div>
									</form>
								<?php endif;?>
								</li>
							</ul>
							<div class="clearfix"></div>
							<hr>
							<div class="row">
								<div class="col-12">
									<h3 class="font-700 m-b-5">Bình luận</h3>
									<!-- start -->
									<?php foreach($comments as $comment):?>
										<?php if($task['task_id']==$comment['task_id']):?>
											<div class="">
											<span class="pull-left m-r-15"><img src="static/images/users/<?php echo $comment?$comment['profile_picture']:'';?>" alt="" class="thumb-lg rounded-circle"></span>
												<h5 class="m-b-5"><b><?php echo $comment?$comment['member_name']:'';?></b></h5>
												<p class="text-muted m-t-0" style="font-size:.8rem"><?php echo $comment?$comment['created_at']:'';?></p>
												<p class="text-muted"><?php echo $comment?$comment['comment_content']:'';?>
												</p>
											</div>
										<?php endif;?>
									<?php endforeach;?>
									<hr>
									<!-- end -->
									<h5 class="font-600 m-b-5">Thêm bình luận</h5>
									<form action="" method="POST">
									<input type=hidden name=task_id value=<?php echo isset($tasks)?$task['task_id']:'';?>>
										<div class="form-group">
											<textarea class="form-control" name="comment_content" id="" cols="100%" rows="10"></textarea>
										</div>
										<input type="submit" class="btn btn-success" name=add_comment value='Bình luận'>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php endforeach;?>
