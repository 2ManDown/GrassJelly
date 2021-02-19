<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">

            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    ข้อมูลวัตถุดิบ
                </header>
                <div class="panel-body">
                    <?php foreach ($material_manage as $material_manage) { ?>
                        <?php echo form_open('material/material_update_db', 'class="form-horizontal"') ?>
                        <!-- <form class="form-horizontal" method="get"> -->
                            <div class="form-group">
                            <input type="text" class="hidden form-control" name="material_id" value="<?php echo $material_manage['material_id'] ?>" >
                                <label class="col-sm-3 control-label">รหัสวัตถุดิบ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="material_code" value="<?php echo $material_manage['material_code'] ?>" >
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ชื่อวัตถุดิบ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="material_name" value="<?php echo $material_manage['material_name'] ?>" >
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">ปริมาตร</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="material_volume" value="<?php echo $material_manage['material_volume'] ?>" >
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">

                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">หน่วยนับ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="หน่วยนับ" name="material_unit" value="<?php echo $material_manage['material_unit'] ?>" >
                                </div>
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <div class="form-group">

                                <div id="btn">
                                    <button type="submit" class="btn btn-primary" name="updatebtn" value="update">แก้ไขข้อมูลวัตถุดิบ</button>
                                    &nbsp; &nbsp;
                                    <button type="button" class="btn btn-default" onclick="goBack()">ย้อนกลับ</button>
                                    &nbsp; &nbsp;
                                    <!-- <button type="button" class="btn btn-danger" name="deletebtn" value="delete" onclick="location.href='<?php //echo site_url('material/material_delete/') . $material_manage['material_code']; ?>'">ลบข้อมูลวัตถุดิบ!</button> -->
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