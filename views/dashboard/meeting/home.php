<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-dark  font-700  m-b-10 text-left">Cuộc họp</h3>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table m-0 table-colored table-pink">
                        <thead>
                            <tr>
                                <th style="width:10px">#</th>
                                <th style="width:100px" >Người tạo</th>
                                <th style="width:100px">Dự án</th>
                                <th style="width:100px" >Nội dung</th>
                                <th style="width:100px">Địa điểm </th>
                                <th style="width:100px">Ngày họp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($meetings as $meeting):?>
                                <?php if($meeting['meeting_desc']):?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo isset($meeting)?$meeting['member_name']:''?></td>
                                    <td><?php echo isset($meeting)?$meeting['pro_name']:''?></td>
                                    <td><?php echo isset($meeting)?$meeting['meeting_desc']:''?></td>
                                    <td><?php echo isset($meeting)?$meeting['meeting_location']:''?></td>
                                    <td><?php echo isset($meeting)?$meeting['meeting_date']:''?></td>
                                </tr>
                                <?php endif;?>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>