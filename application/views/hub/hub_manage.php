<<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    </style>
    <section id="content" class="col-md-12" >
        <section class="vbox">
            <section class="scrollable padder">

                <section class="panel panel-default">
                    <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                        จัดการข้อมูลศูนย์กระจายสินค้า
                    </header>
                    <div class="panel-body">
                        <?php foreach ($hub_manage as $hub_manage) { ?>
                            <?php echo form_open('hub/hub_update_db', 'class="form-horizontal"') ?>
                            <div class="form-group">
                                <input type="text" class="hidden form-control" name="hub_id" value="<?php echo $hub_manage['hub_id'] ?>">
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ชื่อ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="hub_name" placeholder="กรุณากรอกที่อยู่" required value="<?php echo $hub_manage['hub_name'] ?>">
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ที่อยู่</label>
                                <div class="col-sm-7">
                                    <textarea name="hub_address" class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="กรุณากรอกที่อยู่" style="resize: none;" required><?php echo $hub_manage['hub_address'] ?></textarea>
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">เบอร์ติดต่อ</label>
                                <div class="col-sm-7">
                                    <input type="text" data-type="phone" name="hub_tel" class="form-control" value="<?php echo $hub_manage['hub_tel'] ?>" placeholder="กรุณากรอกเบอร์ติดต่อ" maxlength="10" required>
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">อีเมล</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="hub_email" value="<?php echo $hub_manage['hub_email'] ?>">
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ละติจูด</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="hub_latitude" value="<?php echo $hub_manage['hub_latitude'] ?>">
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ลองจิจูด</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="hub_longitude" value="<?php echo $hub_manage['hub_longitude'] ?>">
                                </div>
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group ">
                                <div class="col-sm-12 col-sm-offset-5" style="align-items: center;">
                                    <button type="submit" class="btn btn-primary" name="updatebtn" value="update">แก้ไขข้อมูล</button>
                                    &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-default" onclick="goBack()">ยกเลิก</button>
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
