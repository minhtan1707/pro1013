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
							<?php 
                if($all_project){
                    if((date('m')-date('m',$latest_project))>=1)
                    {
                        $date= date('m')-date('m',$latest_project);
                        echo '<small>'.$date.' tháng trước</small>';
                    }
                    else if((date('d')-date('d',$latest_project))>=1)
                    {
                        $date= date('d')-date('d',$latest_project);
                        echo '<small>'.$date.' ngày trước</small>';
                    }else if((date('H')-date('H',$latest_project))>=1){
                        $hour=date('H')-date('H',$latest_project);
                        echo '<small>'.$hour.' giờ trước</small>';
                    }else{
                        $minute=date('i')-date('i',$latest_project);
                        echo '<small>'.$minute.' phút trước</small>';
                    }
                }?>

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
							<?php 
                if($all_meeting){
                    if((date('m')-date('m',$latest_meeting))>=1)
                    {
                        $date= date('m')-date('m',$latest_meeting);
                        echo '<small>'.$date.' tháng trước</small>';
                    }
                    else if((date('d')-date('d',$latest_meeting))>=1)
                    {
                        $date= date('d')-date('d',$latest_meeting);
                        echo '<small>'.$date.' ngày trước</small>';
                    }else if((date('H')-date('H',$latest_meeting))>=1){
                        $hour=date('H')-date('H',$latest_meeting);
                        echo '<small>'.$hour.' giờ trước</small>';
                    }else{
                        $minute=date('i')-date('i',$latest_meeting);
                        echo '<small>'.$minute.' phút trước</small>';
                    }
                }?>
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
							<?php 
                if($all_task){
                    if((date('m')-date('m',$latest_task))>=1)
                    {
                        $date= date('m')-date('m',$latest_task);
                        echo '<small>'.$date.' tháng trước</small>';
                    }
                    else if((date('d')-date('d',$latest_task))>=1)
                    {
                        $date= date('d')-date('d',$latest_task);
                        echo '<small>'.$date.' ngày trước</small>';
                    }else if((date('H')-date('H',$latest_task))>=1){
                        $hour=date('H')-date('H',$latest_task);
                        echo '<small>'.$hour.' giờ trước</small>';
                    }else{
                        $minute=date('i')-date('i',$latest_task);
                        echo '<small>'.$minute.' phút trước</small>';
                    }
                }?>
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
									<th >Trạng thái</th>
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
									<td>
									<?php if($now>$end_date):?>
									<span class="label label-muted">Closed</span>
									<?php endif;?>
									<span class="label label-danger">Unfinished</span></td>

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
					<h4 class="header-title mt-0 m-b-20">Thông báo mới nhất</h4>
						<!-- start box -->
						<hr>
						<div class="timeline-box text-left">
							<h5 class="text-success">Tên dự án</h5>
							<p class="timeline-date text-muted"><small>08:25 am</small></p>
							<p>Jonatha Smith added new milestone
								Lorem ipsum dolor sit amet consiquest dio</p>
						</div>
						<hr>
						<!-- end box -->
						<!-- start box -->
						<hr>
						<div class="timeline-box text-left">
							<h5 class="text-success">Tên dự án</h5>
							<p class="timeline-date text-muted"><small>08:25 am</small></p>
							<p>Jonatha Smith added new milestone
								Lorem ipsum dolor sit amet consiquest dio</p>
						</div>
						<hr>
						<!-- end box -->
				</div>
			</div>

		</div>

		<div class="card-box">
			<h4 class="header-title mt-0 m-b-20">Cuộc họp sắp tới</h4>
			<!-- start -->
			<?php if(isset($meetings)):?>
				<?php for($a=0;$a<count($meetings);$a++):?>
					<?php 
					if(date('Y-m-d')<=date('Y-m-d',strtotime($meetings[$a]['meeting_date']))):?>
						<?php $meeting = $meetings[$a];?>
						<div class="">
							<div class="">
								
									<h5 class="m-b-5"><strong><?php echo $meetings[$a]['pro_name'];?></strong></h5>
									<p class="m-b-0">Địa điểm: <?php echo $meetings[$a]['meeting_location'];?></p>
									<p>Thời gian họp: <?php echo $meetings[$a]['meeting_date'];?></p>
									<p class="text-muted font-13 m-b-0"> <?php echo $meetings[$a]['meeting_desc'];?>
									</p>
								</div>
							<hr>
							<!-- end -->
						</div>
						<?php break;?>
					<?php endif;?>
				<?php endfor;?>
			<?php else:?>
			<p>Chưa có cuộc họp</p>
			<?php endif;?>
		</div>
	</div> <!-- end col -->

</div>
<?php if(isset($_SESSION['alert'])):?>
<div id=toastr-one div='<?php echo $_SESSION['alert']['class'];?>' message='<?php echo $_SESSION['alert']['message'];?>'></div>
<?php unset($_SESSION['alert']);?>
<?php endif;?>

<!-- cấu hình file js static/plugin/jquery-toastr/jquery.toastr.js -->
