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
                            เบิกใช้วัตถุดิบ
                        </header>
                        <?php echo form_open('Metarial/metarial_reavinsert', 'data-validate="parsley"'); ?>

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
                                    <label>จำนวนที่เบิกใช้</label>
                                    <input type="number" name="reavelmetarial_amount" class="form-control" placeholder="จำนวนผลิต" id="amount" onchange="plus()" required>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่เบิกใช้</label>
                                    <input name="reavelmetarial_revdate" class="input-sm input-s datepicker-input form-control" size="16" type="text" name="importproduct_imdate" value="" data-date-format="yyyy-mm-dd">
                                </div>
                                <div class="col-sm-1"></div>
                                
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs" onclick="return confirm('บันทึกข้อมูลการเบิกใช้นี้')">บันทึก</button>
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
