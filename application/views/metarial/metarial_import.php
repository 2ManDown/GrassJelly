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
                        <?php echo form_open('metarial/metarial_insert_import', 'data-validate="parsley"'); ?>

                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">

                                    <label>รหัสวัตถุดิบ</label>
                                    <select name="metarial_code" class="form-control m-b " onclick="">
                                        <option disabled selected>กรุณาเลือกวัตถุดิบ</option>
                                        <?php foreach ($metarial_list as $metarial_list) { ?>
                                            <option value="<?php echo $metarial_list['metarial_code'] ?>"><?php echo $metarial_list['metarial_code'], ' - ', $metarial_list['metarial_name'], ' - ', $metarial_list['metarial_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>


                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนนำเข้า</label>
                                    <input type="number" name="immetarial_amount" class="form-control" placeholder="จำนวนผลิต" id="amount" onchange="plus()" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่นำเข้า</label>
                                    <input name="immetarial_imdate" class="input-sm input-s datepicker-input form-control" size="16" type="text" name="importproduct_imdate" value="" data-date-format="yyyy-mm-dd">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <div class="input-group m-b">
                                        <span class="input-group-addon">BTH</span>
                                        <input type="number" name="immetarial_price" class="form-control" id="price" onchange="plus()">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันหมดอายุ</label>
                                    <input name="immetarial_expdate" class="input-sm input-s datepicker-input form-control" size="16" type="text" name="importproduct_expdate" value="" data-date-format="yyyy-mm-dd">
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคารวม</label>
                                    <input name="immetarial_sumprice" type="number" class="form-control" id="sumprice" readonly>

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


<script>
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
</script>