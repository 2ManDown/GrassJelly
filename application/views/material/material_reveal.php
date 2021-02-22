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
                            เบิกออกวัตถุดิบ
                        </header>
                        <!-- <form data-validate="parsley" action="#"> -->
                        <?php echo form_open('material/material_orderinsert', 'data-validate="parsley"') ?>
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>รหัสใบเบิกออกวัตถุดิบ</label>
                                    <?php
                                    $count_all = $this->db->count_all_results('gj_order_material');
                                    $countid =  "ODM" . ($count_all + 1);
                                    echo $countid;
                                    ?>
                                    <!-- <input type="hidden" name="countid" value="<?php echo $countid ?>"> -->
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>รหัสการเบิกออกวัตถุดิบ</label>
                                    <input type="text" name="countid" class="form-control" value="<?php echo $countid ?>" placeholder="รหัสการส่งออกสินค้า" readonly required>
                                </div>


                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่เบิกออก</label>
                                    <input class="input-sm input-s datepicker-input form-control" name="reveal_date" size="16" type="text" value="" data-date-format="yyyy-mm-dd">
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">
                                    <label>เวลา</label>
                                    <div style="display: flex;">
                                        <input id="timepkr" name="reveal_time" style="width: 100; float: left;" class="form-control" placeholder="HH:MM" />
                                        <button type="button" class="btn btn-primary" onclick="showpickers('timepkr','24')" style="width: 40px; float: left;"><i class="fa fa-clock-o"></i></button>
                                        <div class="timepicker"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix"></div>
                            <div class="form-group pull-in clearfix"></div>
                            <div class="form-group pull-in clearfix"></div>

                            <div class="form-group pull-in clearfix">
                                <div class="table-responsive" style="margin-bottom: 0px;">
                                    <table class="table table-striped b-t b-light table-bordered">
                                        <thead>
                                            <th style="text-align: center;">เลือก</th>
                                            <th style="text-align: center;">รหัสวัตถุดิบ</th>
                                            <th style="text-align: center;">ชื่อวัตถุดิบ</th>
                                            <th style="text-align: center;">ปริมาตร</th>
                                            <th style="text-align: center;">หน่วย</th>


                                            <th style="text-align: center;">จำนวน</th>
                                        </thead>
                                        <?php $i = 0;
                                        foreach ($material_list as $material_list) { ?>
                                            <tr style="text-align: center;">
                                                <td><input type="checkbox" name="checkbox[<?php echo $i ?>]" value="<?php echo $material_list['material_code'] ?>"></td>


                                                <td><?php echo $material_list['material_code'] ?></td>
                                                <td><?php echo $material_list['material_name'] ?></td>
                                                <td><?php echo $material_list['material_volume'] ?></td>
                                                <td><?php echo $material_list['material_unit'] ?></td>


                                                <td>
                                                    <div class="">
                                                        <input style="text-align: center;" class="form-control rounded" type="number" name="amount[<?php echo $i ?>]" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $i++;
                                        } ?>
                                    </table>
                                </div>

                            </div>


                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <?php form_close() ?>

                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>

<script>
    function plus() {
        let price = document.getElementById("export_price").value;
        console.log(price);
        let amount = document.getElementById("export_amount").value;
        console.log(amount);
        let sumprice = price * amount;
        console.log(sumprice);
        let output = document.getElementById("export_sumprice");
        output.value = sumprice;

        let vat = sumprice * 7 / 100;
        console.log('Vat = ' + vat);

        let vatresult = document.getElementById("export_vat");
        vatresult.value = vat;

        let result = vat + sumprice;
        console.log('Result = ' + vat);

        let sumresult = document.getElementById("export_sumresult");
        sumresult.value = result;
    }
</script>