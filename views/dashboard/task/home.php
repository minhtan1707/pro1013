<div class="card-box">
    <div class="text-center m-b-30">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10">25563</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10">6952</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10">18361</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="m-t-20 m-b-20">
                    <h3 class="m-b-10 text-danger">250</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
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
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 148px;"
                                aria-label="Requested By: activate to sort column ascending">Requested By</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 261px;"
                                aria-label="Subject: activate to sort column ascending">Subject</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 62px;"
                                aria-label="Assignee: activate to sort column ascending">Assignee</th>
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

                        <tr role="row" class="odd parent">
                            <td tabindex="0" class="sorting_1" style=""><b>#1020</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-9.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Erwin E. Brown</b></span>
                                </a>
                            </td>

                            <td>
                                A new rating has been received
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-1.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-warning">Medium</span>
                            </td>

                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                2013/08/11
                            </td>

                            <td>
                                2013/08/30
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
                        <tr class="child">
                            <td class="child" colspan="8">
                                <ul data-dtr-index="4">
                                    <li data-dtr-index="8" data-dt-row="4" data-dt-column="8"><span class="dtr-title">Action</span>
                                        <span class="dtr-data">
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil m-r-10 text-muted font-18 vertical-middle"></i>Edit
                                                        Ticket</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-check-all m-r-10 text-muted font-18 vertical-middle"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete m-r-10 text-muted font-18 vertical-middle"></i>Remove</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-star m-r-10 font-18 text-muted vertical-middle"></i>Mark
                                                        as Favorite</a>
                                                </div>
                                            </div>
                                        </span></li>
                                </ul>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1"><b>#1254</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-8.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Margeret V. Ligon</b></span>
                                </a>
                            </td>

                            <td>
                                Your application has been received!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-danger">High</span>
                            </td>

                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1"><b>#1256</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-2.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>George A. Llanes</b></span>
                                </a>
                            </td>

                            <td>
                                Support for theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-muted">Low</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                2017/04/28
                            </td>

                            <td>
                                2017/04/28
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
                        <tr role="row" class="even">
                            <td class="sorting_1" tabindex="0"><b>#1352</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-5.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Karen R. Doyle</b></span>
                                </a>
                            </td>

                            <td>
                                Question regarding your Bootstrap Theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-8.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-danger">High</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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
                        <tr role="row" class="odd">
                            <td class="sorting_1" tabindex="0"><b>#2251</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-8.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Mark C. Diaz</b></span>
                                </a>
                            </td>

                            <td>
                                Verify your new email address!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-danger">High</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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
                        <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1"><b>#2542</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-3.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Jose D. Delacruz</b></span>
                                </a>
                            </td>

                            <td>
                                New submission on your website
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-9.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-warning">Medium</span>
                            </td>

                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                2008/04/25
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
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1"><b>#320</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-5.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Phyllis K. Maciel</b></span>
                                </a>
                            </td>

                            <td>
                                Verify your new email address!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-danger">High</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                2017/04/20
                            </td>

                            <td>
                                2017/04/25
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
                        <tr role="row" class="even">
                            <td class="sorting_1" tabindex="0"><b>#3562</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-8.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Freddie J. Plourde</b></span>
                                </a>
                            </td>

                            <td>
                                Security alert for my account
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-2.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-muted">Low</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1"><b>#3652</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-3.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Jessica T. Phillips</b></span>
                                </a>
                            </td>

                            <td>
                                Item Support Message sent
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-9.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-warning">Medium</span>
                            </td>

                            <td>
                                <span class="label label-muted">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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
                        <tr role="row" class="even">
                            <td tabindex="0" class="sorting_1"><b>#3652</b></td>
                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-4.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                    <span class="m-l-5"><b>Luke J. Sain</b></span>
                                </a>
                            </td>

                            <td>
                                Your password has been reset
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="./static/images/users/avatar-10.jpg" alt="contact-img" title="contact-img"
                                        class="rounded-circle">
                                </a>
                            </td>

                            <td>
                                <span class="label label-muted">Low</span>
                            </td>

                            <td>
                                <span class="label label-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
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