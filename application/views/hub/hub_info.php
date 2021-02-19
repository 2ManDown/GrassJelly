<section id="content">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลศูนย์กระจายสินค้า
                </header>
                <div class="row wrapper text-right">
                    <div class="col-sm-12 m-b-xs">
                        <a href="<?php echo site_url('hub/hub_addinfo') ?>" class="btn btn-s-lg btn-success btn-rounded">เพิ่มข้อมูล</a>
                    </div>
                </div>


                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th style="text-align: center;">#</th>
                                <th>ชื่อ</th>
                                <th>ที่อยู่</th>
                                <th>เบอร์ติดต่อ</th>
                                <th>อีเมล</th>
                                <th style="text-align: center;">คลังสินค้า</th>
                                <th style="text-align: center;">จัดการ</th>
                            </tr>
                        </div>
                        <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($hub_list as $hub_list) { ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $i ?></td>
                                    <td><?php echo $hub_list['hub_name'] ?></td>
                                    <td><?php echo $hub_list['hub_address'] ?></td>
                                    <td><?php echo $hub_list['hub_tel'] ?></td>
                                    <td><?php echo $hub_list['hub_email'] ?></td>
                                    <td style="text-align: center;"><a href="<?php echo site_url('hub/hub_stock/').$hub_list['hub_id'] ?>"> <i class="glyphicon glyphicon-eye-open"></i> </a></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('hub/hub_manage/') . $hub_list['hub_id'] ?>" class="btn btn-sm btn-icon btn-info btn-rounded" title="แก้ไขข้อมูล"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo site_url('hub/hub_delete/') . $hub_list['hub_id'] ?>" class="btn btn-sm btn-icon btn-danger btn-rounded" title="ลบข้อมูล"><i class="fa  fa-trash-o"></i></a>
                                        
                                    </td>
                                </tr>
                                <?php $i++ ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer"></footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>