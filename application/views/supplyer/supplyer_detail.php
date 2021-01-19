<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลร้านค้า
                </header>
                <div class="panel-body">
                <?php foreach ($supplyer_list as $supplyer_list) {?>
                    <!-- <form class="form-horizontal" method="get"> -->
                    <?php echo form_open('Supplyer/supplyer_update_db','class="form-horizontal"') ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสร้านค้า</label>
                            <div class="col-sm-7">
                                <input type="text" name="supplyer_code" class="form-control rounded" value="<?php echo $supplyer_list['supplyer_code'] ?>"> 
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อร้านค้า</label>
                            <div class="col-sm-7">
                                <input type="text" name="supplyer_name"  class="form-control" value="<?php echo $supplyer_list['supplyer_name'] ?>">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ที่อยู่</label>
                            <div class="col-sm-7">
                                <input type="text" name="supplyer_address"  class="form-control" value="<?php echo $supplyer_list['supplyer_address'] ?>">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-7">
                                <input type="text" name="supplyer_tel"  class="form-control" value="<?php echo $supplyer_list['supplyer_tel'] ?>">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รายละเอียดร้านค้าค้าโดยย่อ</label>
                            <div class="col-sm-7">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true"  name="supplyer_detail" placeholder="Type your message" style="resize: none;"><?php echo $supplyer_list['supplyer_detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">เลือกรูปร้านค้า</label>
                            <div class="col-sm-6">
                                <input type="file" class="filestyle" name="supplyer_img"  data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">แก้ไขข้อมูลร้านค้า</button>
                                &nbsp; &nbsp;
                                <button type="submit" class="btn btn-default" onclick="goBack()">Cancel</button>
                                &nbsp; &nbsp;
                                <button type="submit" class="btn btn-danger" >ลบข้อมูลร้านค้า!</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    <?php form_close() ?>
                    <?php } ?>
                </div>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>

