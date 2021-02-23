<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    เพิ่มสิทธิ์ผู้ใช้งานระบบ
                </header>

                <div class="row wrapper text-right"></div>

                <div class="panel-body">
                <div class="form-group pull-in clearfix">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>Username</label>
                            <input type="email" name="user_username" class="form-control"  data-required="true" placeholder="กรอกชื่อผู้ใช้" required>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>Password</label>
                            <input type="email" name="user_password" class="form-control"  data-required="true" placeholder="กรอกรหัสผ่าน" required>
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
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" data-type="phone" name="employee_tel" class="form-control" placeholder="กรอกเบอร์โทรศัพท์" required maxlength="10">
                        </div>
                    </div>
                    
                    <div class="form-group pull-in clearfix">
                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4">
                            <label>อีเมล</label>
                            <input type="email" name="employee_email" class="form-control" data-type="email" data-required="true" placeholder="กรอกอีเมล" required>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-s-xs" onclick="return confirm('ยืนยันการบันทึกข้อมูล')">บันทึก</button>
                    </div>
                </div>

                <footer class="panel-footer">
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>