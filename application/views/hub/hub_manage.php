<section id="content" class="col-md-12">
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
                            <label class="col-sm-3 control-label">ชื่อ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="hub_name" value="<?php echo $hub_manage['hub_name'] ?>">
                            </div>
                        </div>
                        

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-4" style="align-items: center;">
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