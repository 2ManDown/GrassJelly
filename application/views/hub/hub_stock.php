<style>
    th,
    td {
        text-align: center;
    }
</style>

<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <?php foreach ($hub as $hub) { ?>
                <section class="panel panel-default">
                    <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">

                        รายการสินค้าคงเหลือ <?php echo $hub['hub_name']; ?>

                    </header>
                    <div class="row wrapper">
                        <div class="col-sm-5 m-b-xs" style="position: ralative; top: 15px; margin-bottom: 20px;">

                        </div>
                    </div>

                    <div class="table-responsive" style="margin-bottom: 0px;">
                        <table class="table table-striped b-t b-light table-bordered">
                            <div>
                                <tr>
                                    <th>#</th>
                                    <th>รหัสสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>รายละเอียดสินค้า</th>
                                    <th>ขนาด</th>
                                    <th>จำนวนสินค้าขั้นต่ำ</th>
                                    <th>จำนวนคงเหลือ</th>
                                    <th>หมายเหตุ</th>
                                </tr>
                            </div>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($product as $product) {
                                    //foreach($hub_stock as $hub_stock){
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $i ?></td>
                                        <td><?php echo $product['product_code'] ?></td>
                                        <td><?php echo $product['product_name']  ?></td>
                                        <td><?php echo $product['product_detail']  ?></td>
                                        <td><?php echo $product['product_volume']  ?></td>
                                        <td><?php echo $product['product_min']  ?></td>

                                        <?php 
                                        $this->db->where('product_code', $product['product_code']);
                                        $this->db->where('hub_id', $hub['hub_id']);
                                        $this->db->select_sum('product_stock_amount');
                                        $query = $this->db->get('gj_product_stock');
                                        $product_stock = $query->result_array();
                                        $product_min = number_format($product_stock[0]['product_stock_amount']);

                                        if ($product_min <= $product['product_min']) { ?>
                                            <td style="color: red; text-align: center;">
                                            <?php } else { ?>
                                            <td style="color: #3BD028; text-align: center;">
                                            <?php } ?>

                                            <b><?php echo $product_min ?></b>
                                            </td>

                                            <?php
                                            if ($product_min <= $product['product_min']) { ?>
                                                <td style="color: red;"><b>กรุณานำเข้าสินค้า</b>
                                                <?php } else { ?>
                                                <td style="color: #3BD028;"><b>ปกติ</b>
                                                <?php } ?>

                                                </td>

                                    </tr>
                                <?php $i++;
                                } //} 
                                ?>

                            </tbody>
                        </table>
                    <?php } ?>
                    </div>
                    <footer class="panel-footer">
                    </footer>
                </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>