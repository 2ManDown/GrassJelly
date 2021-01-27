<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

<?php foreach($manufac_detail as $manufac_detail){ ?>

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลการผลิตสินค้า
                </header>
                <div class="panel-body">
                    <form class="form-horizontal" method="get">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รหัสสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control rounded" value="<?php echo $manufac_detail['product_code'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ชื่อสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['product_name'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ปริมาตร</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['product_volume'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">วันที่ผลิต</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="วันที่ผลิต" value="<?php echo $manufac_detail['manufac_producedate'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">วันหมดอายุ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="วันหมดอายุ" value="<?php echo $manufac_detail['manufac_expdate'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ราคาสินค้า</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['product_price'] ?>" readonly>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">รายละเอียดสินค้าโดยย่อ</label>
                            <div class="col-sm-7">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message" style="resize: none;" readonly><?php echo $manufac_detail['product_detail'] ?></textarea>
                            </div>
                        </div>


                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">หน่วยนับ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['product_unit']?>" readonly>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">จำนวนที่ผลิต</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['manufac_produce'] ?>" readonly>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">จำนวนคงเหลือ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="<?php echo $manufac_detail['productbalance_balance'] ?>" readonly>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div id="btn"> <!-- class="col-sm-7 col-sm-offset-5" -->
                                <button type="submit" class="btn btn-default" onclick="goBack()">ย้อนกลับ</button>
                                &nbsp; &nbsp;
                                <button type="submit" class="btn btn-danger">ลบข้อมูลสินค้า!</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </section>
<?php } ?>
        </section>

    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>


