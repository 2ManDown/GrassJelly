<style>
    th,
    td {
        text-align: center;
    }

    /* table tr {
    cursor: pointer; 
    }*/
</style>

<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">
            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายการนำเข้าสินค้า
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 15px; margin-bottom: 20px;">
                        <!-- <a href="<?php echo site_url('product/product_exportbill') ?>" class="btn btn-s-lg btn-success btn-rounded">ส่งออกสินค้า</a> -->
                    </div>
                    <!-- <div class="col-sm-4 m-b-xs" style="margin-top: 20px">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-sm btn-default active">
                                <input type="radio" name="options" id="option1"> รายวัน
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายสัปดาห์
                            </label>
                            <label class="btn btn-sm btn-default">
                                <input type="radio" name="options" id="option2"> รายเดือน
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div> -->
                </div>

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสล็อตสินค้า</th>
                                <th>วันที่นำเข้า</th>
                                <th>เวลานำเข้า</th>
                                <th>จำนวนนำเข้า</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>ผู้นำเข้าสินค้า</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($product_import as $export) { ?>

                                <a href="<?php echo site_url('product/product_order_detail/') . $export['order_code'] ?>">
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $export['order_code']  ?></td>
                                        <td><?php echo $export['order_date']  ?></td>
                                        <td><?php echo $export['order_time']  ?></td>

                                         <?php 
                                            $this->db->select('order_detail_amount,order_detail_price');
                                            $this->db->where('order_code', $export['order_code']);
                                            $this->db->where('hub_id',$this->session->userdata('hub'));
                                            $query = $this->db->get('gj_order_import_detail');
                                            $amount_price = $query->result_array();
                                            foreach($amount_price as $amount_price){
                                        ?>

                                        <td><?php echo $amount_price['order_detail_amount'] ?></td>
                                        <td><?php echo $amount_price['order_detail_price'] ?></td>
                                         <td><?php echo $amount_price['order_detail_price'] * $amount_price['order_detail_amount'] ?></td>
                                        <?php } ?> 

                                        
                                       <td><?php
                                            $this->db->where('order_code', $export['order_code']);
                                            $this->db->select_avg('product_stock_user');
                                            $query = $this->db->get('gj_product_stock');
                                            $order_user = $query->result_array();
                                            $user = number_format($order_user[0]['product_stock_user']);

                                            $this->db->select('user_name');
                                            $this->db->where('user_id', $user);
                                            $query = $this->db->get('gj_user');
                                            $user_name = $query->result_array();
                                            foreach ($user_name as $name) {
                                                echo $name['user_name'];
                                            }

                                            ?></td>

                                        <?php $i++ ?>
                                    </tr>
                                </a>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                </footer>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>