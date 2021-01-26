<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายการสินค้าคงคลัง
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <a href="<?php echo site_url('product/product_manufacinsert') ?>" class="btn btn-s-lg btn-success btn-rounded">เพิ่มข้อมูลการผลิตสินค้า</a>
                    </div>
                    <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
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
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>รหัสการผลิต</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>วันที่ผลิต</th>
                                <th>จำนวนที่ผลิต</th>
                                <th>ราคาสุทธิ</th>
                                <th>จำนวนคงเหลือ</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php foreach ($product_productbalance as $product_productbalance) { ?>
                            
                                <tr>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['manufac_id'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['product_code'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['product_name'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['manufac_producedate'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['manufac_produce'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['manufac_price'] ?></a></td>
                                    <td><a href="<?php echo site_url('product/product_manufacdetail/').$product_productbalance['productbalance_id'] ?>"><?php echo $product_productbalance['productbalance_balance'] ?></a></td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
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
                    </div>
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>