<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    td,
    th {
        text-align: center;
    }

    @media print {

        @page {
            size: A4;
            margin: 0;
        }

        #a {
            display: none;
            visibility: none;
        }
    }
</style>

<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            รายละเอียดใบเบิกออกวัตถุดิบ
                        </header>
                        <?php foreach ($orderdetail as $orderdetail) { ?>
                            <?php echo form_open('material/material_orderinsert', 'data-validate="parsley"') ?>
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-4">
                                        <label>รหัสใบเบิกออก</label>
                                        <?php
                                        echo $orderdetail['order_material_code'];
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>รหัสใบเบิกออก</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_material_code'] ?>" placeholder="รหัสการเบิกออก" readonly>
                                    </div>


                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่เบิกออก</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_material_date'] ?>" placeholder="วันที่เบิกออก" readonly>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>เวลา</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_material_time'] ?>" placeholder="เวลาเบิกออก" readonly>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix"></div>
                                <div class="form-group pull-in clearfix"></div>
                                <div class="form-group pull-in clearfix"></div>

                                <div class="form-group pull-in clearfix">
                                    <div class="table-responsive" style="margin-bottom: 0px;">
                                        <table class="table table-striped b-t b-light table-bordered">
                                            <thead>
                                                <th>#</th>
                                                <th>รหัสวัตถุดิบ</th>
                                                <th>ชื่อวัตถุดิบ</th>
                                                <th>ปริมาตร</th>
                                                <th>หน่วย</th>
                                                <th>จำนวน</th>
                                            </thead>

                                            <tr>
                                                <?php $i = 1; ?>
                                                <?php $this->db->select('material_code,order_detailmaterial_amount');
                                                $this->db->where('order_material_code', $orderdetail['order_material_code']);
                                                $query = $this->db->get('gj_order_detailmaterial');
                                                $order_code = $query->result_array();

                                                foreach ($order_code as $code) {
                                                    $this->db->select('*');
                                                    $this->db->where('material_code', $code['material_code']);
                                                    $query = $this->db->get('gj_material');
                                                    $material = $query->result_array();
                                                    /* echo '<pre>';
                                                            print_r($material); */

                                                    foreach ($material as $material) { ?>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $material['material_code'] ?></td>
                                                        <td><?php echo $material['material_name'] ?></td>
                                                        <td><?php echo $material['material_volume'] ?></td>
                                                        <td><?php echo $material['material_unit'] ?></td>
                                                        <td><b><?php echo $code['order_detailmaterial_amount'] ?></b></td>
                                                        <?php $i++;   ?>
                                            </tr>
                                    <?php }
                                                } ?>

                                        </table>
                                    </div>

                                </div>

                                <div class="text-right">
                                    <button type="button" id="a" class="btn btn-primary btn-s-xs" onclick="print()">พิมพ์</button>
                                </div>
                            </div>
                        <?php } ?>
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