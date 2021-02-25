<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ประวัติการนำเข้าและเบิกออก
                </header>
                <div class="row wrapper text-right">

                    <div class="col-sm-12 m-b-xs">
                        <a href="<?php echo site_url('product/product_import') ?>" class="btn btn-s-lg btn-success btn-rounded">นำเข้าสินค้า</a>
                        &nbsp;
                        <a href="<?php echo site_url('hub/hub_list') ?>" class="btn btn-s-lg btn-primary btn-rounded">เบิกออกสินค้า</a>

                    </div>
                   <!--  <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options" id="option1"> รายวัน
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายสัปดาห์
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายเดือน
                            </label>
                        </div>
                    </div> -->
                    <!-- <div class="col-sm-3" style="margin-top: 20px">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div> -->
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ปริมาตร</th>
                                <th>ราคา</th>
                                <th>วันที่</th>
                                <th>เวลา</th>
                                <th>จำนวน</th>
                                <th>สถานะ</th>
                            </tr>
                        </div>
                        <tbody>
                        <?php $i =1 ?>
                            <?php foreach ($product_history as $product_history) { ?>

                                <tr>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $i ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_code'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_name'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_volume'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_price'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_stock_date'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_stock_time'] ?></a></td>
                                    <td><a href="<?php //echo site_url('') . $product_history[''] ?>"><?php echo $product_history['product_stock_amount'] ?></a></td>
                                    <td><a href="" style="color: <?php echo $product_history['stock_status_color'] ?>;"><?php echo $product_history['stock_status_value'] ?></a></td>
                                </tr>
                                <?php $i++ ?>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                   <!--  <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>