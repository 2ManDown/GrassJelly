<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลร้านค้า
                </header>
                <div class="panel-body">
                <?php foreach ($supplier_list as $supplier_list) {?>
                    <?php echo form_open('supplier/supplier_update_db','class="form-horizontal"') ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รหัสร้านค้า</label>
                            <div class="col-sm-3">
                                <input type="text" name="supplier_code" class="form-control rounded" value="<?php echo $supplier_list['supplier_code'] ?>"> 
                            </div>

                            <label class="col-sm-2 control-label">ชื่อร้านค้า</label>
                            <div class="col-sm-3">
                                <input type="text" name="supplier_name"  class="form-control" value="<?php echo $supplier_list['supplier_name'] ?>">
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">ที่อยู่</label>
                            <div class="col-sm-3">
                                <input type="text" name="supplier_address"  class="form-control" value="<?php echo $supplier_list['supplier_address'] ?>">
                            </div>

                            <label class="col-sm-2 control-label">เบอร์โทรศัพท์</label>
                            <div class="col-sm-3">
                                <input type="text" name="supplier_tel"  class="form-control" value="<?php echo $supplier_list['supplier_tel'] ?>">
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">รายละเอียดร้านค้าค้าโดยย่อ</label>
                            <div class="col-sm-3">
                                <!-- <input type="text" class="form-control"> -->
                                <textarea class="form-control" rows="6" data-minwords="6" data-required="true"  name="supplier_detail" placeholder="Type your message" style="resize: none;"><?php echo $supplier_list['supplier_detail'] ?></textarea>
                            </div>

                            <label class="col-sm-2 control-label">เลือกรูปร้านค้า</label>
                            <div class="col-sm-4">
                                <input type="file" class="filestyle" name="supplier_img"  data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s">
                            </div>
                        </div>
                       
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary" name="updatebtn" value="update">แก้ไขข้อมูลร้านค้า</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-default" onclick="goBack()">ยกเลิก</button>
                                &nbsp; &nbsp;
                                <button type="button" class="btn btn-danger" name="deletebtn" value="delete" onclick="location.href='<?php echo site_url('supplier/supplier_delete/').$supplier_list['supplier_code'];?>'" >ลบข้อมูลร้านค้า!</button>
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
<script>
    function goBack() {
        window.history.back();
    }
</script>

