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
                    รายการเบิกออกวัตถุดิบ
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
                                <th>รหัสเบิกออก</th>
                                <th>วันที่เบิกออก</th>
                                <th>จำนวนวัตถุดิบ</th>

                                <th>ผู้เบิกออก</th>
                                <th>ดูข้อมูลการเบิกออก</th>
                                <th>ใบเบิกออก</th>
                            </tr>
                        </div>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($reveal as $reveal) { ?>

                                <a href="<?php echo site_url('material/material_order_detail/') . $reveal['order_material_code'] ?>">
                                    <tr>
                                        <td style="text-align: center;"><?php echo $i ?></td>
                                        <td><?php echo $reveal['order_material_code']  ?></td>
                                        
                                        <td style="text-align: center;"><?php echo $reveal['order_material_date']  ?></td>
                                        <td style="text-align: center;"><?php
                                            $this->db->select('COUNT(order_detailmaterial_amount) as row');
                                            $this->db->from('gj_order_detailmaterial');
                                            $this->db->where('order_material_code', $reveal['order_material_code']);
                                            $query = $this->db->get();
                                            $row = $query->result_array();
                                            echo $row[0]['row'];
                                            //echo $sql = $this->db->last_query();
                                            ?></td>

                                        <td><?php
                                            $this->db->where('order_material_code', $reveal['order_material_code']);
                                            $this->db->select_avg('material_stock_user');
                                            $query = $this->db->get('gj_material_stock');
                                            $order_user = $query->result_array();
                                            $user = number_format($order_user[0]['material_stock_user']);

                                            $this->db->select('user_name');
                                            $this->db->where('user_id', $user);
                                            $query = $this->db->get('gj_user');
                                            $user_name = $query->result_array();
                                            foreach ($user_name as $name) {
                                                echo $name['user_name'];
                                            }

                                            ?></td>
                                        <!-- class="btn btn-sm btn-icon btn-info btn-rounded" -->
                                        <td style="text-align: center;"><a href="<?php echo site_url('material/material_order_detail/') .
                                                            $reveal['order_material_code'] ?>"> <i class="glyphicon glyphicon-eye-open"></i> </a></td>
                                        <td style="text-align: center;"><a href="<?php echo site_url('report/revealbill/'). $reveal['order_material_code'] ?>"><i class="glyphicon glyphicon-print"></i></td>
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


<script>
    $(document).ready(function() {
        $('*[href]').click(function() {
            window.location = $(this).data('href');
            return false;
        });
    });
</script>