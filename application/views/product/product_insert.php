<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลสินค้า
                </header>
                <div class="panel-body">
                    <?php echo form_open('Product/product_insert_db', 'class="form-horizontal"') ?>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">รหัสสินค้า</label>
                        <div class="col-sm-7">
                            <input type="text" name="product_code" placeholder="กรอกรหัสสินค้า" required class="form-control rounded">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อสินค้า</label>
                        <div class="col-sm-7">
                            <input type="text" name="product_name" placeholder="กรอกชื่อสินค้า" required class="form-control">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ปริมาตร</label>
                        <div class="col-sm-7">
                            <input type="text" name="product_volume" placeholder="กรอกปริมาตร" required class="form-control">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ราคาสินค้า</label>
                        <div class="col-sm-7">
                            <input type="text" name="product_price" placeholder="กรอกราคาสินค้า" required class="form-control">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">รายละเอียดสินค้าโดยย่อ</label>
                        <div class="col-sm-7">
                            <!-- <input type="text" class="form-control"> -->
                            <textarea class="form-control" name="product_detail" rows="6" data-minwords="6" data-required="true" placeholder="เพิ่มรายละเอียดโดยย่อ" required style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                    <label class="col-sm-3 control-label">หน่วยนับ/บรรจุภัณฑ์</label>
                            <div class="col-sm-7">
                                <input type="text" name="product_unit" class="form-control">
                            </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ปริมาณสินค้าขั้นต่ำ</label>
                        <div class="col-sm-7">
                            <input type="text" name="product_min" placeholder="กรอกปริมาณสินค้าขั้นต่ำ" required class="form-control">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">เลือกรูปสินค้า</label>
                        <div class="col-sm-6">
                            <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                        </div>
                    </div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <div id="btn">
                            <!-- class="col-sm-5 col-sm-offset-4"  -->
                            <button type="submit" class="btn btn-primary" style="padding: 5px 25px;">บันทึก</button>
                            &nbsp; &nbsp;
                            <!--  <button type="submit" class="btn btn-success" style="padding: 5px 20px;">ดูตัวอย่าง</button>
                                &nbsp; &nbsp; -->
                            <button type="submit" class="btn btn-default" onclick="goBack()" style="padding: 5px 23px;">ยกเลิก</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
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
                <a href="#">
                    <div class="profile-card-4 text-center"><img src="https://i.ibb.co/G0mD9sH/3-626x330.jpg" class="img img-responsive">
                        <div class="profile-content">
                            <div class="profile-name" style="font-size: 30px;">ชื่อสินค้า
                            </div>
                            <div class="profile-description">รายละเอียดสินค้าโดยย่อ</div>
                            <div class="row">
                                <div class="col-xs-7">
                                    <div class="profile-overview">
                                        <p>ปริมาตร</p>
                                        <h4>XXX.</h4>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="profile-overview">
                                        <p>ราคา</p>
                                        <h4>XXX.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>



<!-- JS back Previuos page -->
<script>
    function goBack() {
        window.history.back();
    }
</script>