<div class="row">
	<div class="col-12">
		<div class="card-box table-responsive">
			<!-- <h3 class="text-dark  mb-5 font-700 m-l-10 text-left">Thành Viên</h3> -->
			<table id="datatable" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap dataTable no-footer dtr-inline collapsed">
				<thead>
					<tr>
						<th style="width:80px"></th>
						<th style="width:200px">Tên Thành Viên</th>
						<th style="width:300px">Email</th>
						<th style="width:200px">Title</th>
						<th style="width:200px">Phone </th>
						<th style="width:150px">Ngày Gia Nhập </th>
						<th style="width:150px">Xem </th>
					</tr>
				</thead>


				<tbody>
					<?php foreach($results as $result):?>
					<!-- <th scope="row">1</th> -->
					<td>
						<div class='thumb-md'>
							<img class="rounded-circle img-thumbnail" alt="profile-image" alt="100x100" src="./static/images/users/<?php echo isset($result)?$result['profile_picture']:''?>"
							 style='height:50px; width:50px'>
						</div>
					</td>
					<td>
						<?php echo isset($result)?$result['member_name']:''?>
					</td>
					<td>
						<?php echo isset($result)?$result['email']:''?>
					</td>
					<td>
						<?php echo isset($result)?$result['title']:''?>
					</td>
					<td>
						<?php echo isset($result)?$result['phone']:''?>
					</td>
					<td>
						<?php echo isset($result['joined_date'])?date('Y-m-d',strtotime($result['joined_date'])):''?>
					</td>
					<td><button type="button" data-toggle="modal" data-target="#mem-modal" class="btn btn-primary btn-rounded w-md waves-effect waves-light">
							Chi tiết</button></td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="mem-modal" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
 style="display: none; padding-left: 0px;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myLargeModalLabel">Chi tiết thành viên</h4>
			</div>
			<div class="modal-body">
				<div class="card-box">
					<img src="static/images/users/profile1.jpg" alt="" class="thumb-lg rounded-circle">
					<div class="panel-body">
						<p class="text-muted font-13">
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
							unknown printer took a galley of type and scrambled it to make a type specimen book. It has
							survived not only five centuries, but also the leap into electronic typesetting, remaining
							essentially unchanged. </p>

						<hr>

						<div class="text-left">
							<p class="text-muted font-13">
								<strong>Full Name :</strong>
								<span class="m-l-15">
									Mike Tanny </span>
							</p>

							<p class="text-muted font-13">
								<strong>Phone :</strong>
								<span class="m-l-15">9999999</span>
							</p>

							<p class="text-muted font-13">
								<strong>Email :</strong>
								<span class="m-l-15">
									minhtan1707@gmail.com </span>
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
			</div>
		</div>
	</div>
</div>
<!-- end modal -->