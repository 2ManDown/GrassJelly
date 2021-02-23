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
                    รายการเบิกออกสินค้า
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
                                <th>รหัสเบิกออก</th>
                                <th>ศูนย์กระจาย</th>
                                <th>วันที่เบิกออก</th>
                                <th>จำนวนสินค้า</th>
                                <th>ราคารวม</th>
                                <th>ผู้เบิกออกสินค้า</th>
                                <th>ดูข้อมูลการเบิกออก</th>
                                <th>ใบส่งออก</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($export as $export) { ?>

                                <a href="<?php echo site_url('product/product_order_detail/') . $export['order_code'] ?>">
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $export['order_code']  ?></td>
                                        <td><?php $export['hub_id'];
                                            $this->db->select('hub_name');
                                            $this->db->where('hub_id', $export['hub_id']);
                                            $query = $this->db->get('gj_hub');
                                            $user_hub = $query->result_array();
                                            foreach ($user_hub as $hub) {
                                                echo $hub['hub_name'];
                                            } ?></td>

                                        <td><?php echo $export['order_date']  ?></td>
                                        <td><?php
                                            $this->db->select('COUNT(order_detail_amount) as row');
                                            $this->db->from('gj_order_detail');
                                            $this->db->where('order_code', $export['order_code']);
                                            $query = $this->db->get();
                                            $row = $query->result_array();
                                            echo $row[0]['row'];
                                            //echo $sql = $this->db->last_query();
                                            ?></td>

                                        <td><?php
                                            $this->db->where('order_code', $export['order_code']);
                                            $this->db->select_sum('order_detail_price');
                                            $query = $this->db->get('gj_order_detail');
                                            $order_price = $query->result_array();
                                            echo number_format($order_price[0]['order_detail_price']);
                                            ?></td>

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
                                        <!-- class="btn btn-sm btn-icon btn-info btn-rounded" -->
                                        <td><a href="<?php echo site_url('product/product_order_detail/') .
                                                            $export['order_code'] ?>"> <i class="glyphicon glyphicon-eye-open"></i> </a></td>
                                        <td><a href="<?php echo site_url('report/exportbill') ?>"><i class="glyphicon glyphicon-print"></i></td>
                                        <?php $i++ ?>
                                    </tr>
                                </a>
                            <?php } ?>
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


<script>
    $(document).ready(function() {
        $('*[href]').click(function() {
            window.location = $(this).data('href');
            return false;
        });
    });
</script>