<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            นำเข้าวัตถุดิบ
                        </header>
                        <?php echo form_open('metarial/metarial_iminsert', 'data-validate="parsley" action="#"') ?>
                        <!-- <form data-validate="parsley" action="#"> -->
                        <div class="panel-body">
                            <?php foreach ($metarial_code as $metarial_code) { ?>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>รหัสวัตถุดิบ</label>
                                        <input type="text" class="form-control" name="metarial_code" value="<?php echo $metarial_code['metarial_code'] ?>" placeholder="รหัสวัตถุดิบ" required readonly>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ปริมาตร</label>
                                        <input type="text" class="form-control" value="<?php echo $metarial_code['metarial_volume'] ?>" placeholder="ปริมาตร" required readonly>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคาต่อหน่วย</label>

                                        <div class="input-group m-b">
                                            <span class="input-group-addon">BTH</span>

                                            <input type="number" class="form-control" id="metarial_price" value="<?php echo $metarial_code['metarial_price'] ?>" readonly>

                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>จำนวนนำเข้า</label>
                                        <input type="number" class="form-control" id="immetarial_amount" name="immetarial_amount" value="" onchange="plus()" placeholder="จำนวนนำเข้า" required>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ราคารวม</label>
                                        <input type="text" class="form-control" id="immetarial_sumprice" name="immetarial_sumprice" value="" placeholder="ราคารวม" required readonly>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>หน่วยนับ</label>
                                        <input type="text" class="form-control" value="<?php echo $metarial_code['metarial_unit'] ?>" placeholder="หน่วยนับ" required readonly>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่นำเข้า </label>
                                        <input class="input-sm input-s datepicker-input form-control" name="immetarial_imdate" size="16" type="text" value="" data-date-format="yyyy-mm-dd">
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                                </div>
                            <?php } ?>
                        </div>
                    </section>
                    <!-- </form> -->
                    <?php form_close() ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>


        </section>
    </section>


</section>


<script>
    function plus() {
        let x = document.getElementById("metarial_price").value;
        console.log(x);
        let a = document.getElementById("immetarial_amount").value;
        console.log(a);
        let b = x * a;
        console.log(b);
        let output = document.getElementById("immetarial_sumprice");
        output.value = b;
    }
</script>