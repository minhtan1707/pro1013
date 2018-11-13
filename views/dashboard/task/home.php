<div class="card-box">
    <div class="text-center m-b-30">
        <div class="row">
            <div class="col-xs-6 col-sm-12">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10 text-danger">Nhiệm vụ của bạn</h3>
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
                                style="width: 50px;" aria-sort="ascending" aria-label="
                    ID
                : activate to sort column descending">
                                Task
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;">Project</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 150px;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 30px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 90px;">Created
                                Date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 40px;">Due
                                Date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;" >Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($tasks as $task):?>
                            <tr role="row" class="odd parent">
                                <td tabindex="0" class="sorting_1" style=""><b><?php echo isset($tasks)?$task['task_name']:''?></b></td>
                                <td>
                                    <a href="javascript: void(0);">
                                        <span class="m-l-5"><b><?php echo isset($tasks)?$task['pro_name']:''?></b></span>
                                    </a>
                                </td>

                                <td>
                                <?php echo isset($tasks)?$task['task_desc']:''?>
                                </td>


                                <?php if($task['status']==0):?>
                                <td>
                                    <span class="label label-danger">In Progress</span>
                                </td>
                                <?php else:?>
                                <td>
                                    <span class="label label-primary">Finished</span>
                                </td>
                                <?php endif;?>
                                <td>
                                <?php echo isset($tasks)?$task['created_at']:''?>
                                </td>

                                <td>
                                <?php echo isset($tasks)?$task['end_date']:''?>
                                </td>

                                <td >
                                        <form action="">
                                            <select class="mini-select" style="width:100px; border:none" >
                                                <option>Status</option>
                                                <option value="0" <?php echo $task['status']==0?'selected':''?> >In Progress</option>
                                                <option value="1" <?php echo $task['status']==1?'selected':''?>>Finished</option>
                                            </select>
                                            <button class="btn btn-success waves-effect waves-light btn-sm" type="submit" value="Change" name='submit' ><i class="mdi mdi-check-all   font-18 vertical-middle"></i></button> 
                                        </form>
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