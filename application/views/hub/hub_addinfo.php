<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                    เพิ่มข้อมูลศูนย์กระจายสินค้า
                </header>
                <?php echo form_open('hub/hub_insert_db') ?>
                <div class="panel-body">
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>ชื่อ</label>
                            <input type="text" name="hub_name" class="form-control" placeholder="กรุณากรอกชื่อ" required>
                        </div>

                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                        <label>เบอร์ติดต่อ</label>
                            <input type="text" data-type="phone" name="hub_tel" class="form-control" placeholder="กรุณากรอกเบอร์ติดต่อ" maxlength="10" required>
                        </div>
                    </div>

                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                        <label>ที่อยู่ </label>
                            <textarea name="hub_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรุณากรอกที่อยู่" style="resize: none;" required></textarea>
                        </div>

                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>อีเมล</label>
                            <input type="email" name="hub_email" class="form-control" placeholder="กรุณากรอกอีเมล" required>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-s-xs" onclick="return confirm('ยืนยันการบันทึกข้อมูล')">บันทึก</button>
                    </div>
                </div>

                <?php echo form_close() ?>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>