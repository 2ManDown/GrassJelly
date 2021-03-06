<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มข้อมูลร้านค้า
                </header>
                <div class="panel-body">
                    <?php echo form_open('supplier/supplier_insert_db', 'class="form-horizontal"') ?>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">รหัสร้านค้า</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="supplier_code" placeholder="กรอกรหัสร้านค้า" required>
                        </div>

                        <label class="col-sm-2 control-label">ชื่อร้านค้า</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="supplier_name" placeholder="กรอกชื่อร้านค้า" required>
                        </div>
                    </div>
                    
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ที่อยู่</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="supplier_address" placeholder="กรอกที่อยู่" required>
                        </div>

                        <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="supplier_tel" placeholder="กรอกเบอร์โทรศัพท์" maxlength="10" required>
                        </div>
                    </div>
                    
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">รายละเอียดร้านค้าโดยย่อ</label>
                        <div class="col-sm-3">
                            <!-- <input type="text" class="form-control"> -->
                            <textarea class="form-control" rows="6" data-minwords="6" data-required="true" name="supplier_detail" placeholder="กรอกรายละเอียดโดยย่อ" required style="resize: none;"></textarea>
                        </div>

                        <label class="col-sm-2 control-label">เลือกรูปร้านค้า</label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="supplier_img">
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                        <div id="btn" > <!-- class="col-sm-8 col-sm-offset-5" style="margin-top: 10px;" -->
                            <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยันการเพิ่มข้อมูล')">เพิ่มข้อมูลร้านค้า</button>
                            &nbsp; &nbsp;
                            <button type="button" class="btn btn-default" onclick="goBack()">ยกเลิก</button>
                        </div>
                    </div>

                    <?php form_close() ?>
                </div>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>
<script>
    function goBack() {
        window.history.back();
    }
</script>