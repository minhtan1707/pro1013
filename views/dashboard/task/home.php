<div class="card-box">
    <div class="text-center m-b-30">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10"><?php echo count($tasks);?></h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total Tasks</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10 text-danger"><?php echo count($unfinished_tasks);?></h3>
                    <p class="text-uppercase m-b-5 font-13 font-600 text-danger">Unfinished Tasks</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10 text-muted"><?php echo count($closed_tasks);?></h3>
                    <p class="text-uppercase m-b-5 font-13 font-600 text-muted">Closed Tasks</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10 text-primary"><?php echo count($finished_tasks);?></h3>
                    <p class="text-uppercase m-b-5 font-13 font-600 text-primary">Finished Tasks</p>
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
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                style="width: 60px;" aria-sort="ascending" aria-label="
                    ID
                : activate to sort column descending">
                                Task
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 148px;"
                                aria-label="Requested By: activate to sort column ascending">Project</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 261px;"
                                aria-label="Subject: activate to sort column ascending">Description</th>
                            <!-- <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 62px;"
                                aria-label="Assignee: activate to sort column ascending">Assignee</th> -->
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 51px;"
                                aria-label="Priority: activate to sort column ascending">Priority</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 44px;"
                                aria-label="Status: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 90px;"
                                aria-label="Created Date: activate to sort column ascending">Created Date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 66px;"
                                aria-label="Due Date: activate to sort column ascending">Due Date</th>
                            <th class="hidden-sm sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                style="width: 0px; display: none;" aria-label="Action: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($tasks as $task):?>
                            <tr role="row" class="even">
                                <td tabindex="0" class="sorting_1"><b><?php echo isset($tasks)?$task['task_name']:'';?></b></td>
                                <td>
                                    <a href="javascript: void(0);">
                                        <!-- <img src="./static/images/users/avatar-4.jpg" alt="contact-img" title="contact-img"
                                            class="rounded-circle"> -->
                                        <span class="m-l-5"><b><?php echo isset($tasks)?$task['pro_name']:'';?></b></span>
                                    </a>
                                </td>

                                <td>
                                <?php echo isset($tasks)?$task['task_desc']:'';?>
                                </td>

                                <!-- <td>
                                    <a href="javascript: void(0);">
                                        <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                            class="rounded-circle">
                                    </a>
                                </td> -->

                                <td>
                                <?php if($task['priority']==1):?>
                                
                                <span class="label label-muted">Low</span>
                            <?php elseif($task['priority']==2):?>
                            <span class="label label-warning">Normal</span>
                            <?php elseif($task['priority']==3):?>
                            <span class="label label-danger">High</span>
                            <?php endif;?>
                                    
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

                                <td style="display: none;">
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="table-action-btn dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit
                                                Ticket</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-check-all m-r-10 text-muted font-18 vertical-middle"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-star m-r-10 font-18 text-muted vertical-middle"></i>Mark
                                                as Favorite</a>
                                        </div>
                                    </div>
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
                        <li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#"
                                aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1"
                                tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2"
                                tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable"
                                data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>