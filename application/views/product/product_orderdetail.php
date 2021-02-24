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
</style>

<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            รายละเอียดใบส่งออกสินค้า
                        </header>
                        <?php foreach ($orderdetail as $orderdetail) { ?>
                            <?php echo form_open('product/product_orderinsert', 'data-validate="parsley"') ?>
                            <div class="panel-body">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-4">
                                        <label>รหัสใบเบิกของ</label>
                                        <?php
                                        echo $orderdetail['order_code'];
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>ผู้รับสินค้า</label>
                                        <input type="text" name="countid" class="form-control" placeholder="ผู้รับสินค้า" readonly 
                                        value="<?php
                                                        $this->db->select('hub_name');
                                                        $this->db->where('hub_id', $orderdetail['hub_id']);
                                                        $query = $this->db->get('gj_hub');
                                                        $hub = $query->result_array();
                                                        foreach ($hub as $hub) {
                                                        echo $hub['hub_name'];
                                                        } ?>">
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>รหัสใบเบิกของ</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_code'] ?>" placeholder="รหัสการส่งออกสินค้า" readonly>
                                    </div>


                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>วันที่ส่งออก</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_date'] ?>" placeholder="รหัสการส่งออกสินค้า" readonly>
                                    </div>

                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <label>เวลา</label>
                                        <input type="text" name="countid" class="form-control" value="<?php echo $orderdetail['order_time'] ?>" placeholder="รหัสการส่งออกสินค้า" readonly>
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
                                                <th>รหัสสินค้า</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>ปริมาตร</th>
                                                <th>บรรจุภัณฑ์</th>
                                                <th>คำอธิบาย</th>
                                                <th>ราคา</th>
                                                <th>จำนวน</th>
                                            </thead>

                                            <tr>
                                                <?php $i = 1; ?>
                                                <?php $this->db->select('product_code,order_detail_amount');
                                                $this->db->where('order_code', $orderdetail['order_code']);
                                                $query = $this->db->get('gj_order_detail');
                                                $order_code = $query->result_array();

                                                foreach ($order_code as $code) {
                                                    $this->db->select('*');
                                                    $this->db->where('product_code', $code['product_code']);
                                                    $query = $this->db->get('gj_product');
                                                    $product = $query->result_array();
                                                    /* echo '<pre>';
                                                            print_r($product); */

                                                    foreach ($product as $product) { ?>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $product['product_code'] ?></td>
                                                        <td><?php echo $product['product_name'] ?></td>
                                                        <td><?php echo $product['product_volume'] ?></td>
                                                        <td><?php echo $product['product_unit'] ?></td>
                                                        <td><?php echo $product['product_detail'] ?></td>
                                                        <td><?php echo $product['product_price'] ?></td>
                                                        <td><b><?php echo $code['order_detail_amount'] ?></b></td>
                                                        <?php $i++;   ?>
                                            </tr>
                                    <?php }
                                                } ?>

                                        </table>
                                    </div>

                                </div>


                                <div class="text-right">
                                    <button type="button" class="btn btn-primary btn-s-xs" onclick="window.location.href='<?php echo site_url('report/exportbill/'). $orderdetail['order_code'] ?>'">พิมพ์</button>
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