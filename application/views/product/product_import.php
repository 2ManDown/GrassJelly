<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            นำเข้าสินค้า
                        </header>
                        <?php echo form_open('product/product_import_insert', 'data-validate="parsley"'); ?>

                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">

                                    <label>รหัสสินค้า</label>
                                    <select name="product_code" class="form-control m-b " onclick="">
                                        <option disabled selected>กรุณาเลือกสินค้า</option>
                                        <?php //foreach ($product_list as $product_list) { ?>
                                            <option onclick="location.href='<?php //echo site_url('product/product_select/').$product_list['product_code']; ?>'"><?php //echo $product_list['product_code'], ' - ', $product_list['product_name'] ?></option>
                                        <?php //} ?>
                                    </select>
                                </div>


                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ชื่อสินค้า</label>
                                        <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="product_name" value="<?php  ?>" required readonly>
                                    </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ปริมาตร</label>
                                    <input type="text" class="form-control" placeholder="ปริมาตร" name="product_name" value="<?php  ?>" required readonly>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>หน่วยนับ</label>
                                    <input type="text" class="form-control" placeholder="หน่วยนับ" name="product_name" required readonly>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนนำเข้า</label>
                                    <input type="text" class="form-control" placeholder="ราคาต่อหน่วย" name="importproduct_amount" required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <input type="text" class="form-control" placeholder="ราคาต่อหน่วย" name="importproduct_price" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่นำเข้า</label>
                                    <input class="input-sm input-s datepicker-input form-control" size="16" type="text" name="importproduct_imdate" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคารวม</label>
                                    <input type="text" class="form-control" placeholder="ราคารวม" name="importproduct_sumprice" required readonly>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <?php form_close(); ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>