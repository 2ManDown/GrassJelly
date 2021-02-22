<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    จัดการข้อมูลผู้ใช้งาน
                </header>
                <div class="panel-body">
                    <?php foreach ($user_manage as $user_manage) { ?>
                        <?php echo form_open('user/user_update_adminmanage', 'class="form-horizontal"') ?>
                        <div class="form-group">
                        <input type="text" class="hidden form-control" name="user_id" value="<?php echo $user_manage['user_id'] ?>" >
                            <label class="col-sm-3 control-label">ชื่อผู้ใช้</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="user_username" value="<?php echo $user_manage['user_username'] ?>" placeholder="ชื่อผู้ใช้" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสผ่าน</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="user_password" value="" placeholder="รหัสผ่าน" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อ - สกุล</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="user_name" value="<?php echo $user_manage['user_name'] ?>" placeholder="ชื่อ - สกุล" required>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">อีเมล</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" data-type="email" name="user_email" data-required="true" value="<?php echo $user_manage['user_email'] ?>" placeholder="อีเมล" required>
                            </div>

                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-7">
                                <input type="text" data-type="phone" class="form-control" name="user_tel" value="<?php echo $user_manage['user_tel'] ?>" placeholder="เบอร์โทรศัพท์" required>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">สิทธิ์การเข้าใช้งาน</label>
                            <div class="col-sm-7">
                                <select class="form-control m-b" name="user_status" value="<?php echo $user_manage['user_status'] ?>" required>
                                    <option value="" disabled selected>กรุณาเลือกสิทธิ์การเข้าใช้งาน</option>
                                    <option value="factory">Factory</option>
                                    <option value="supplier">supplier</option>
                                </select>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-4" style="align-items: center;">
                                <button type="submit" class="btn btn-primary" name="updatebtn" value="update">บันทึก</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-default" onclick="window.history.go(-1); return false;">ยกเลิก</button>
                                &nbsp; &nbsp;

                            </div>
                        </div>
                        <?php form_close() ?>
                    <?php } ?>

                </div>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>