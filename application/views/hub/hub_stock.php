<style>
    th {
        text-align: center;
    }
</style>

<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายการสินค้าคงคลัง
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
                            <?php foreach ($hub_stock as $hub_stock) { ?>

                                <tr>
                                    <td style="text-align: center;"><?php echo $i ?></td>
                                    <td><?php echo $hub_stock['product_code'] ?></td>
                                    <td><?php echo $hub_stock['product_name'] ?></td>
                                    <td><?php echo $hub_stock['product_detail'] ?></td>
                                    <td><?php echo $hub_stock['product_volume'] . " " . $hub_stock['product_unit'] ?></td>
                                    <td style="text-align: center;"><?php echo $hub_stock['product_min'] ?></td>
                                    <?php
                                    $this->db->where('product_code', $hub_stock['product_code']);
                                    $this->db->select_sum('product_stock_amount');
                                    $query = $this->db->get('gj_product_stock');
                                    $product_stock = $query->result_array();
                                    $product = number_format($product_stock[0]['product_stock_amount']);
                                    if ($product <= $hub_stock['product_min']) { ?>
                                        <td style="color: red; text-align: center;">
                                        <?php } else { ?>
                                        <td style="color: #3BD028; text-align: center;">
                                        <?php } ?>

                                        <b><?php echo $product ?></b> </td>
                                    
                                    <?php 
                                        if ($product <= $hub_stock['product_min']) { ?>
                                        <td style="color: red;"><b>กรุณานำเข้าสินค้า</b> 
                                        <?php } else { ?>
                                        <td style="color: #3BD028;"><b>ปกติ</b> 
                                        <?php } ?>

                                         </td>
                                        
                                        
                                </tr>
                            <?php $i++;
                            } ?>

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <!-- <div class="row">
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>