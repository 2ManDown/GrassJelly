<style>
th {
    text-align: center;
}
td {
    text-align: center;
}
</style>
<section id="content" class="col-md-12">
    <section class="vbox">
        <section class="scrollable padder">


            <section class="panel panel-default">
                <header class="panel-heading font-bold" style="font-size: 23px; color:dimgray;">
                    รายการวัตถุดิบคงคลัง
                </header>
                <div class="row wrapper">
                    <div class="col-sm-5 m-b-xs" style="position: ralative; top: 15px; margin-bottom: 20px;"></div>
                </div>
                <!-- <div class="row wrapper">
                    <div class="col-sm-2 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <a href="<?php //echo site_url('material/material_import') 
                                    ?>" class="btn btn-s-lg btn-success btn-rounded">นำเข้าวัตถุดิบ</a>
                    </div>
                    <div class="col-sm-2 m-b-xs" style="position: ralative; top: 18px; margin-bottom: 40px;">
                        <a href="<?php //echo site_url('material/material_reavel') 
                                    ?>" class="btn btn-s-lg btn-success btn-rounded">เบิกใช้วัตถุดิบ</a>
                    </div>
                </div> -->

                <div class="table-responsive" style="margin-bottom: 0px;">
                    <table class="table table-striped b-t b-light table-bordered">
                        <div>
                            <tr>
                                <th>#</th>
                                <th>รหัสวัตถุดิบ</th>
                                <th>ชื่อวัตถุดิบ</th>
                                <th>ปริมาตร / หน่วย</th>
                               
                                <th>จำนวนขั้นต่ำ</th>
                                <th>จำนวนคงเหลือ</th>
                                <th>หมายเหตุ</th>
                            </tr>
                           
                        </div>
                        <tbody>
                        <?php $i = 1 ?>
                            <?php foreach ($material_materialbalance as $material_materialbalance) { ?>

                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $material_materialbalance['material_code'] ?></td>
                                    <td><?php echo $material_materialbalance['material_name'] ?></td>
                                    <td><?php echo $material_materialbalance['material_volume']. " " . $material_materialbalance['material_unit'] ?></td>
                                    <td><?php echo $material_materialbalance['material_min'] ?></td>
                                    <?php
                                        $this->db->where('material_code', $material_materialbalance['material_code']);
                                        $this->db->select_sum('material_stock_amount');
                                        $query = $this->db->get('gj_material_stock');
                                        $material_stock = $query->result_array();
                                        $material = number_format($material_stock[0]['material_stock_amount']);

                                        if ($material <= $material_materialbalance['material_min']) { ?>
                                            <td style="color: red;">
                                            <?php } else { ?>
                                            <td style="color: #3BD028;">
                                            <?php } ?>
    
                                            <b><?php echo $material ?></b> </td>
                                        
                                        <?php 
                                            if ($material <= $material_materialbalance['material_min']) { ?>
                                            <td style="color: red;"><b>กรุณานำเข้าวัตถุดิบ</b> 
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

                <footer class="panel-footer"></footer>

            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>