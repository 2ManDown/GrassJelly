<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                    เพิ่มข้อมูลพนักงาน
                </header>
                <?php echo form_open('Employee/employee_insert_db') ?>
                <div class="panel-body">
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>รหัสบัตรประชานชน</label>
                            <input type="text" name="employee_id" class="form-control " placeholder="กรอกรหัสบัตรประชาชน" required>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" data-type="phone" name="employee_tel" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" required>
                        </div>
                    </div>
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>ชื่อ - สกุล</label>
                            <input type="text" name="employee_name" class="form-control" id="input-id-1" placeholder="กรอกชื่อ - สกุล" required>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>อีเมล</label>
                            <input type="text" name="employee_email" class="form-control" data-type="email" data-required="true" placeholder="กรอกอีเมล" required>
                        </div>
                    </div>
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>เพศ</label>
                            <select name="employee_sex" class="form-control m-b">
                                <option disabled selected>กรุณาเลือกเพศ</option>
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>วันเดือนปีเกิด</label>
                            <input name="employee_birthdate" id="datetime" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="yyyy-mm-dd">
                        </div>
                    </div>
                    <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>ที่อยู่</label>
                            <textarea name="employee_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรุณากรอกที่อยู่" style="resize: none;" required></textarea>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">


                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                    </div>
                </div>

                <?php echo form_close() ?>
            </section>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>