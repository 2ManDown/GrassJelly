<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            นำเข้าวัตถุดิบ
                        </header>
                        <?php echo form_open('material/material_insert_import', 'data-validate="parsley"'); ?>

                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">

                                    <label>รหัสวัตถุดิบ</label>
                                    <select name="material_code" class="form-control m-b" required>
                                        <option disabled selected>กรุณาเลือกวัตถุดิบ</option>
                                        <?php foreach ($material_list as $material_list) { ?>
                                            <option value="<?php echo $material_list['material_code'] ?>"><?php echo $material_list['material_code'], ' - ', $material_list['material_name'], ' - ', $material_list['material_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>


                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ร้านค้า</label>
                                    <select name="supplier_id" class="form-control m-b" required>
                                        <option disabled selected>กรุณาเลือกร้านค้า</option>
                                        <?php foreach ($material_suppiler as $material_suppiler) { ?>
                                            <option value="<?php echo $material_suppiler['supplier_id'] ?>"><?php echo $material_suppiler['supplier_code'], ' - ', $material_suppiler['supplier_name'] ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนนำเข้า</label>
                                    <input type="number" name="material_stock_amount" class="form-control" placeholder="จำนวนนำเข้า" id="amount" required>

                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่นำเข้า</label>
                                    <input name="material_stock_date" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="yyyy-mm-dd">


                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>คอมเมนต์</label>
                                    <textarea class="form-control" name="material_stock_comment" rows="6" data-minwords="6" data-required="true" placeholder="คอมเม้นต์" required style="resize: none;"></textarea>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">
                                        <label>เวลาที่นำเข้า</label>
                                        <div style="display: flex;">
                                        <input id="timepkr" name="material_stock_time" style="width: 100; float: left;" class="form-control" placeholder="HH:MM" />
                                        <button type="button" class="btn btn-primary" onclick="showpickers('timepkr','24')" style="width: 40px; float: left;"><i class="fa fa-clock-o"></i></button>
                                        <div class="timepicker"></div>
                                        </div>

                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label class="hidden">สถานะ</label>
                                    <input type="number" name="material_stock_status" class="hidden form-control" value="1" readonly>

                                    <label class="hidden">stock_user</label>
                                    <input name="material_stock_user" type="number" class="hidden form-control" value="<?php echo $this->session->userdata("id") ?>" readonly>
                                </div>

                            </div>






                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs" onclick="return confirm('บันทึกข้อมูลการนำเข้านี้')">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <?php form_close(); ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>


<!-- <script>
    function plus() {
        let x = document.getElementById("amount").value;
        console.log(x);
        let a = document.getElementById("price").value;
        console.log(a);
        let b = x * a;
        console.log(b);
        let output = document.getElementById("sumprice");
        output.value = b;
    }
</script> -->