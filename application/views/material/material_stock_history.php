<style>
th {
    text-align: center;
}
td {
    text-align: center;
}
</style>
<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ประวัติการนำเข้าและเบิกออก
                </header>
                <div class="row wrapper text-right">

                    <div class="col-sm-12 m-b-xs">
                        <a href="<?php echo site_url('material/material_import') ?>" class="btn btn-s-lg btn-success btn-rounded">นำเข้าวัตถุดิบ</a>
                        &nbsp;
                        <a href="<?php echo site_url('material/material_reavel') ?>" class="btn btn-s-lg btn-primary btn-rounded">เบิกออกวัตถุดิบ</a>

                    </div>
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสวัตถุดิบ</th>
                                <th>ชื่อวัตถุดิบ</th>
                                <th>ปริมาตร</th>
                                <th>หน่วย</th>
                                <th>วันที่</th>
                                <th>เวลา</th>
                                <th>จำนวน</th>
                                <th>สถานะ</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php foreach ($material_history as $material_history) { ?>

                                <tr>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_stock_id'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_code'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_name'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_volume'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_unit'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_stock_date'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_stock_time'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $material_history['material_stock_amount'] ?></a></td>
                                    <td><a style="color: <?php echo $material_history['stock_status_color'] ?>;"><?php echo $material_history['stock_status_value'] ?></a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>