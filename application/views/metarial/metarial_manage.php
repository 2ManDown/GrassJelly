<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลวัตถุดิบ
                </header>
                <div class="panel-body">
                    <?php foreach ($metarial_manage as $metarial_manage) { ?>
                        <form class="form-horizontal" method="get">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">รหัสวัตถุดิบ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="metarial_code" value="<?php echo $metarial_manage['metarial_code'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ชื่อวัตถุดิบ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="metarial_name" value="<?php echo $metarial_manage['metarial_name'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ปริมาตร</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="metarial_volume" value="<?php echo $metarial_manage['metarial_volume'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ราคาต่อหน่วย</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="วันที่ผลิต" name="metarial_price" value="<?php echo $metarial_manage['metarial_price'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">หน่วยนับ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="วันหมดอายุ" name="metarial_unit" value="<?php echo $metarial_manage['metarial_unit'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">วันหมดอายุ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="metarial_expdate" value="<?php echo $metarial_manage['metarial_expdate'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">จำนวนคงเหลือ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div id="btn">
                                <!-- class="col-sm-7 col-sm-offset-5" -->
                                <button type="submit" class="btn btn-default" onclick="goBack()">ย้อนกลับ</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-danger" name="deletebtn" value="delete" onclick="location.href='<?php echo site_url('metarial/metarial_delete/') . $metarial_manage['metarial_code']; ?>'" >ลบข้อมูลวัตถุดิบ!</button>
                            </div>
                </div>
                </form>
            <?php } ?>
            </div>
            </section>

        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>