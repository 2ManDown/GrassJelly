<style>
    th {
        text-align: center;
    }
</style>
<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder" style="margin: 0px; padding: 0px;">
            <section class="panel panel-default">

                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray">
                    รายการข้อมูลวัตถุดิบ
                </header>
                <div class="row wrapper  text-right">
                    <div class="col-sm-12 m-b-xs">
                        <a href="<?php echo site_url('material/material_addinfo') ?>" class="btn btn-s-lg btn-success btn-rounded">เพิ่มข้อมูลวัตถุดิบ</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสวัตถุดิบ</th>
                                <th>ชื่อวัตถุดิบ</th>
                                <th>ปริมาตร</th>
                                <th>หน่วยนับ</th>
                                <th>จัดการ</th>
                            </tr>
                        </div>
                        <tbody>
                        <?php $i = 1 ?>
                            <?php foreach ($material_list as $material_list) { ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $i ?></td>
                                    <td><?php echo $material_list['material_code'] ?></td>
                                    <td><?php echo $material_list['material_name'] ?></td>
                                    <td style="text-align: center;"><?php echo $material_list['material_volume'] ?></td>
                                    <td><?php echo $material_list['material_unit'] ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('material/material_manage/') . $material_list['material_code'] ?>" class="btn btn-sm btn-icon btn-info btn-rounded" title="ส่งออกสินค้า"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                <?php $i ++ ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer"></footer>

            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>