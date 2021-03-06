<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">
            <?php foreach ($product_list as $product_list) { ?>
                <section class="panel panel-default">
                    <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                        ข้อมูลสินค้า
                    </header>
                    <div class="panel-body">
                        <?php echo form_open('Product/product_update_db', 'class="form-horizontal"')  ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รหัสสินค้า</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_code" class="form-control rounded" value="<?php echo $product_list['product_code'] ?>">
                            </div>
                            <label class="col-sm-1 control-label">ชื่อ</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_name" class="form-control" value="<?php echo $product_list['product_name'] ?>">
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ปริมาตร</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_volume" class="form-control" value="<?php echo $product_list['product_volume'] ?>">
                            </div>
                            <label class="col-sm-1 control-label">บรรจุภัณฑ์</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_unit" class="form-control" value="<?php echo $product_list['product_unit'] ?>">
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label">ปริมาณขั้นต่ำ</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_min" class="form-control" placeholder="กรอกปริมาณสินค้าขั้นต่ำ" value="<?php echo $product_list['product_min'] ?>">
                            </div>
                            <label class="col-sm-1 control-label">ราคา</label>
                            <div class="col-sm-4">
                                <input type="text" name="product_price" class="form-control" value="<?php echo $product_list['product_price'] ?>">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รายละเอียดสินค้าโดยย่อ</label>
                            <div class="col-sm-7">
                                <textarea name="product_detail" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message" style="resize: none;"><?php echo $product_list['product_detail'] ?></textarea>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เลือกรูปสินค้า</label>
                            <div class="col-sm-6">
                                <input type="file" name="product_img" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div id="btn">
                                <!-- class="col-sm-8 col-sm-offset-3" -->
                                <button type="submit" class="btn btn-primary" id="btnitem" name="updatebtn" value="update">แก้ไขข้อมูลสินค้า</button>
                                &nbsp; &nbsp;
                                <!-- <button type="submit" class="btn btn-success">ดูตัวอย่าง</button>
                                &nbsp; &nbsp; -->
                                <button type="button" class="btn btn-default" id="btnitem" className="btncancel" onclick="goBack()">ย้อนกลับ</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-danger" id="btnitem" className="btndelete" name="deletebtn" value="delete" onclick="location.href='<?php echo site_url('product/product_delete/') . $product_list['product_code']; ?>'">ลบข้อมูลสินค้า!</button>
                            </div>
                        </div>
                        <?php form_close() ?>
                    </div>

                </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>


<!-- Image -->

<section id="content" class="col-md-5">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ตัวอย่างข้อมูลสินค้า
                </header>
            </section>

            <div class="col-md-12" style="margin-top: 20px;">

                <div class="profile-card-4 text-center"><img src="https://i.ibb.co/G0mD9sH/3-626x330.jpg" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name" style="font-size: 30px;"><?php echo $product_list['product_name'] ?>
                        </div>
                        <div class="profile-description"><?php echo $product_list['product_detail'] ?></div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="profile-overview">
                                    <p>ปริมาตร</p>
                                    <h4><?php echo $product_list['product_volume'] ?> </h4>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="profile-overview">
                                    <p>ราคา</p>
                                    <h4><?php echo $product_list['product_price'] ?>. </h4>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="profile-overview">
                                    <p>หน่วยนับ</p>
                                    <h4><?php echo $product_list['product_unit'] ?> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php } ?>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<script>
    function goBack() {
        window.history.back();
    }
</script>