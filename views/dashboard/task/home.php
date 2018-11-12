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
                                style="width: 46px;" aria-sort="ascending" aria-label="
                    ID
                : activate to sort column descending">
                                ID
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 148px;">Project</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 261px;">Subject</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 44px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 90px;">Created
                                Date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 66px;">Due
                                Date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 66px;" >Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr role="row" class="odd parent">
                            <td tabindex="0" class="sorting_1" style=""><b>#1020</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <span class="m-l-5"><b>Erwin E. Brown</b></span>
                                </a>
                            </td>

                            <td>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, voluptate?
                            </td>



                            <td>
                                <span class="label label-success">Progresss</span>
                            </td>

                            <td>
                                2018/08/11
                            </td>

                            <td>
                                2018/08/30
                            </td>

                            <td >
                                       <form action="">
                                        <select class="mini-select" style="width:16px; border:none" >
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                          <button class="btn btn-success waves-effect waves-light btn-sm" type="submit" value="Change" ><i class="mdi mdi-check-all   font-18 vertical-middle"></i></button> 
                                       </form>
                            </td>
                        </tr>


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