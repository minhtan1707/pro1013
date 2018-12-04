<div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                    <h3 class="text-dark  mb-5 font-700 m-l-10 text-left">Cuộc họp</h3>
                <table id="datatable" class="table table-bordered table-colored table-pink">
                    <thead>
                    <tr>
                            <th style="width:100px" >Người tạo</th>
                            <th style="width:200px">Dự án</th>
                            <th style="width:350px" >Nội dung</th>
                            <th style="width:300px">Địa điểm </th>
                            <th style="width:100px">Ngày họp</th>
                    </tr>
                    </thead>


                    <tbody>
                            <?php foreach($meetings as $meeting):?>
                            <?php 						
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $meeting_date=strtotime($meeting['meeting_date']);
                            $meeting_date=date('Y-m-d',$meeting_date);
                            $now=date('Y-m-d');?>
                                <?php if($meeting['meeting_desc']):?>
                                    <?php if($now>$meeting_date):?>
                                        <tr class='bg-secondary text-muted' style=background:#F6F6F6>
                                    <?php else:?>
                                        <tr class=text-dark>
                                    <?php endif;?>
                                                                                <!-- <th scope="row">1</th> -->
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



    