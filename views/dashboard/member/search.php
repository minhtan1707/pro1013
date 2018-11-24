<div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                    <!-- <h3 class="text-dark  mb-5 font-700 m-l-10 text-left">Thành Viên</h3> -->
                <table id="datatable" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap dataTable no-footer dtr-inline collapsed">
                    <thead>
                    <tr>
                            <th style="width:80px"></th>
                            <th style="width:200px" >Tên Thành Viên</th>
                            <th style="width:300px">Email</th>
                            <th style="width:200px" >Title</th>
                            <th style="width:200px">Phone </th>
                            <th style="width:150px">Ngày Gia Nhập </th>
                    </tr>
                    </thead>


                    <tbody>
                            <?php foreach($results as $result):?>						
                                            <!-- <th scope="row">1</th> -->
                                            <td>
                                            <div class='thumb-md'>
                                            <img class="rounded-circle img-thumbnail" alt="profile-image" alt="100x100" src="./static/images/users/<?php echo isset($result)?$result['profile_picture']:''?>" style='height:50px; width:50px'>
                                            </div></td>
                                            <td><?php echo isset($result)?$result['member_name']:''?></td>
                                            <td><?php echo isset($result)?$result['email']:''?></td>
                                            <td><?php echo isset($result)?$result['title']:''?></td>
                                            <td><?php echo isset($result)?$result['phone']:''?></td>
                                            <td><?php echo isset($result)?date('Y-m-d',strtotime($result['joined_date'])):''?></td>
                                        </tr>
                            <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    