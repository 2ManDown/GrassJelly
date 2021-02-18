<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายงานการเบิกออกสินค้า
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 15px; margin-bottom: 20px;">
                        <!-- <a href="<?php echo site_url('product/product_exportbill') ?>" class="btn btn-s-lg btn-success btn-rounded">ส่งออกสินค้า</a> -->
                    </div>
                    <!-- <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
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
                    </div> -->
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสเบิกออก</th>
                                <!-- <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>วันที่ส่งออก</th> -->
                                <th>จำนวนที่ส่งออก</th>
                                <!-- <th>ราคาต่อหน่วย</th>
                                <th>ราคาเบิกออก</th> -->
                                <th style="text-align: center;">ใบส่งออก</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php foreach ($export as $export) { ?>
                                <tr>
                                
                                    <td><a href="<?php ?>"><?php echo $export['order_id'] ?></a></td>
                                    <td><a href="<?php ?>"><?php echo $export['order_code']  ?></a></td>
                                    <!-- <td><a href="<?php ?>"><?php //echo $export['product_code']  ?></a></td>
                                    <td><a href="<?php ?>"><?php //echo $export['product_name']  ?></a></td> -->
                                    <td><a href="<?php ?>"><?php echo $export['order_date']  ?></a></td>
                                   <!--  <td><a href="<?php ?>"><?php //echo $export['order_detail_amount']  ?></a></td>
                                    <td><a href="<?php ?>"><?php //echo $export['product_price'] ?></a></td>
                                    <td><a href="<?php ?>"><?php //echo $export['order_detail_price'] ?></a></td> -->
                                    <td style="text-align: center;"><a href="<?php ?>"><i class="glyphicon glyphicon-print"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <!-- <div class="row">
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