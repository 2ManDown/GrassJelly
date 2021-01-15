<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">



                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            เพิ่มข้อมูลการผลิตสินค้า
                        </header>
                        <?php echo form_open('product/product_insert_manufac', 'data-validate="parsley"') ?>
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ลอตการผลิตสินค้า</label>
                                    <input type="text" class="form-control" id="input-id-1" name="manufac_id" required placeholder="ป้อนลอตผลิคสินค้า">

                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ประเภทบรรจุภัณฑ์</label>
                                    <input type="text" class="form-control" id="input-id-1" readonly>

                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>สินค้าที่ผลิต</label>
                                    <select name="account" class="form-control m-b ">
                                    <option value="" disabled selected>กรุณาเลือกสินค้าที่ผลิต</option>
                                        <?php foreach ($product_list as $product_list) { ?>
                                            <option><?php echo $product_list['product_code'], ' - ', $product_list['product_name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนที่ผลิต</label>
                                    <input type="email" class="form-control" placeholder="จำนวนผลิต" required>
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ชื่อสินค้าที่ผลิต</label>
                                    <input type="text" class="form-control" id="input-id-1" readonly>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <div class="input-group m-b">
                                        <span class="input-group-addon">BTH</span>
                                        <input type="number" class="form-control">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่ผลิต</label>
                                    <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="29-12-2020" data-date-format="dd-mm-yyyy">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคารวม</label>
                                    <input type="number" class="form-control" id="input-id-1" readonly>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <?php echo form_close() ?>

                </section>
            </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
</section>