<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    จัดการข้อมูลพนักงาน
                </header>
                <div class="panel-body">
                    <?php foreach ($employee_manage as $employee_manage) { ?>
                        <?php echo form_open('employee/employee_update_db', 'class="form-horizontal"') ?>
                        <input type="text" class="hidden form-control" name="employee_id" value="<?php echo $employee_manage['employee_id'] ?>" readonly>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ชื่อ - สกุล</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="employee_name" value="<?php echo $employee_manage['employee_name'] ?>" placeholder="กรอกชื่อ - สกุล" required>
                            </div>

                            <label class="col-sm-2 control-label">ศูนย์กระจาย</label>
                            <div class="col-sm-3">
                            <select name="hub_id" class="form-control m-b" value="<?php// echo $employee_manage['hud_id'] ?>" required>
                                <option disabled selected value="">ศูนย์กระจายเดิม: <?php echo $employee_manage['hub_name']?></option>
                                <?php foreach ( $employee_hub as $employee_hub) { ?>
                                <option value="<?php echo $employee_hub['hub_id']?>"><?php echo $employee_hub['hub_id'], ' - ', $employee_hub['hub_name'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">วันเดือนปีเกิด</label>
                            <div class="col-sm-3">
                                <input class="input-sm input-s datepicker-input form-control" name="employee_birthdate" size="16" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $employee_manage['employee_birthdate'] ?>" required>
                            </div>

                            <label class="col-sm-2 control-label">เพศ</label>
                            <div class="col-sm-3">
                                <select class="form-control m-b" name="employee_sex" value="<?php echo $employee_manage['employee_sex']?>" id="sex" required>
                                <option disabled selected value="">เพศเดิม: <?php if ($employee_manage['employee_sex'] == 1){
                                    echo "ชาย";
                                }else{
                                    echo "หญิง";
                                }?></option>
                                    <option value="1">ชาย</option>
                                    <option value="2">หญิง</option>
                                </select>
                            </div>
                           
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-3">
                                <input type="text" data-type="phone" class="form-control" name="employee_tel" value="<?php echo $employee_manage['employee_tel'] ?>" placeholder="กรอกเบอร์โทรศัพท์" required>
                            </div>

                            <label class="col-sm-2 control-label">อีเมล</label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" data-type="email" name="employee_email" data-required="true" value="<?php echo $employee_manage['employee_email'] ?>" placeholder="กรอกอีเมล" required>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label">ที่อยู่</label>
                            <div class="col-sm-3">
                            <textarea name="employee_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรุณากรอกที่อยู่" style="resize: none;" required><?php echo $employee_manage['employee_address'] ?></textarea>
                            </div>
                            
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-4" style="align-items: center;">
                                <button type="submit" class="btn btn-primary" name="updatebtn" value="update">แก้ไขข้อมูลพนักงาน</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-default" onclick="goBack()">ยกเลิก</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-danger" name="deletebtn" value="delete" onclick="location.href='<?php echo site_url('employee/employee_delete/') . $employee_manage['employee_id']; ?>'">ลบข้อมูลพนักงาน!</button>

                            </div>

                        
                        <?php form_close() ?>
                    <?php } ?>

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