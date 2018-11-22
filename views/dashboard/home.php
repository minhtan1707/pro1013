<div class="row">
	<div class="col-lg-8">
		<div class="card-box">
			<h4 class="header-title mt-0 m-b-20 font-700 text-center">Thống kê</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="card-box widget-box-two widget-two-custom">
						<i class="mdi mdi-currency-usd widget-two-icon"></i>
						<div class="wigdet-two-content">
							<p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Dự án</p>
							<h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php echo $count_project;?></span></h2>
							<!-- <p class="m-0">2 giờ trước</p> -->
						</div>
					</div>
				</div><!-- end col -->

				<div class="col-md-4">
					<div class="card-box widget-box-two widget-two-primary">
						<i class="mdi mdi-account-multiple widget-two-icon"></i>
						<div class="wigdet-two-content">
							<p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Cuộc họp</p>
							<h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php echo $count_meeting;?></span></h2>
							<!-- <p class="m-0">2 giờ trước</p> -->
						</div>
					</div>
				</div><!-- end col -->

				<div class="col-md-4">
					<div class="card-box widget-box-two widget-two-success">
						<i class="mdi mdi-crown widget-two-icon"></i>
						<div class="wigdet-two-content">
							<p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Nhiệm vụ</p>
							<h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?php echo $count_task;?></span></h2>
							<!-- <p class="m-0">2 giờ trước</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
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
									<td><?php echo isset($task)?$task['task_name']:''?></td>
									<td><?php echo isset($task)?$task['pro_name']:''?></td>
									<td><?php echo isset($task)?$task['end_date']:''?></td>
									<?php if($now<$end_date):?>
									<td><span class="label label-danger">Unfinished</span></td>
									<?php else:?>
									<td><span class="label label-muted">Closed</span></td>
									<?php endif;?>
									<!-- <td><a href="#" class="btn btn-success btn-xs waves-effect waves-light">Xem</a></td> -->
								</tr>
							<?php endfor;?>
		
							</tbody>
						</table>
					</div>
				</div>
</div>
	</div><!-- end col -->


	<div class="col-lg-4">
		<div class="card-box text-center">
			<div class="text-center">
				<div class="card-box">
					<h4 class="header-title mt-0 m-b-20">Dự án đang tham gia</h4>
					<div class="table-responsive">
						<table class="table m-b-0">
							<thead>
								<tr>
									<th>#</th>
									<th>Tên</th>
									<th>Chi tiết</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>2</td>
									<td>Adminox Frontend</td>
									<td><a href="#" class="btn btn-success btn-xs waves-effect waves-light">Xem</a>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Adminox Frontend</td>
									<td><a href="#" class="btn btn-success btn-xs waves-effect waves-light">Xem</a>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>Adminox Frontend</td>
									<td><a href="#" class="btn btn-success btn-xs waves-effect waves-light">Xem</a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

		<div class="card-box">
			<h4 class="header-title mt-0 m-b-20">Cuộc họp sắp tới</h4>
			<!-- start -->
			<?php if(isset($meetings)):?>
				<?php for($a=0;$a<1;$a++):?>
				<?php $meeting = $meetings[$a];?>
				<div class="">
					<div class="">
						<a href="dashboard.php?page=meetings">
							<h5 class="m-b-5"><strong><?php echo $meeting['pro_name'];?></strong></h5>
							<p class="m-b-0">Địa điểm: <?php echo $meeting['meeting_location'];?></p>
							<p><b><?php echo $meeting['meeting_date'];?></b></p>
							<p class="text-muted font-13 m-b-0"> <?php echo $meeting['meeting_desc'];?>
							</p>
						</a></div>
					<hr>
					<!-- end -->
			</div>
				<?php endfor;?>
			<?php else:?>
			<p>Chưa có cuộc họp</p>
			<?php endif;?>
		</div>
	</div> <!-- end col -->

</div>