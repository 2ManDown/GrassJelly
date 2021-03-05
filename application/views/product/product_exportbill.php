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
                            ออกใบส่งออกสินค้า
                        </header>
                        <!-- <form data-validate="parsley" action="#"> -->
                        <?php echo form_open('product/product_orderinsert', 'data-validate="parsley"', 'id="form-valid"') ?>
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>รหัสใบเบิกของ</label>
                                    <?php if($this->session->userdata('status') != 'admin'){$this->db->where('hub_id',$this->session->userdata('hub'));}
                                    $count_all = $this->db->count_all_results('gj_order');
                                    $countid =  "ODE" . ($count_all + 1);
                                    echo $countid;
                                    ?>
                                    <!-- <input type="hidden" name="countid" value="<?php echo $countid ?>"> -->
                                </div>
                            </div>
                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ผู้รับสินค้า</label>
                                    <select name="hubid" class="form-control m-b " required>
                                        <option value="" disabled selected>กรุณาเลือกผู้รับสินค้า</option>
                                        <?php if($this->session->userdata('status') == 'admin' || $this->session->userdata('status') == 'factory'){
                                            foreach ($hub_list as $hub_list) { ?>
                                                <option value="<?php echo $hub_list['hub_id'] ?>"><?php echo $hub_list['hub_id'], '. ', $hub_list['hub_name'] ?></option>
                                            <?php } 
                                        }else{
                                            $this->db->select('employee_name,employee_id');
                                            $this->db->where('hub_id', $this->session->userdata('hub'));
                                            $query = $this->db->get('gj_employee');
                                            $employee = $query->result_array();
                                            $i = 1;
                                            foreach($employee as $employee){?>
                                                <option value="<?php echo $employee['employee_id'] ?>"><?php echo $i, '. ', $employee['employee_name'] ?></option>
                                                
                                           <?php $i++; }
                                        } ?>
                                        
                                    </select>
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>รหัสการส่งออกสินค้า</label>
                                    <input type="text" name="countid" class="form-control" value="<?php echo $countid ?>" placeholder="รหัสการส่งออกสินค้า" readonly required>
                                </div>


                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่ส่งออก</label>
                                    <input class="input-sm input-s datepicker-input form-control" name="export_date" size="16" type="text" value="" data-date-format="yyyy-mm-dd">
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-3">
                                    <label>เวลา</label>
                                    <div style="display: flex;">
                                        <input id="timepkr" name="export_time" style="width: 100; float: left;" class="form-control" placeholder="HH:MM" />
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
                                            <th style="text-align: center;">รหัสสินค้า</th>
                                            <th style="text-align: center;">ชื่อสินค้า</th>
                                            <th style="text-align: center;">ปริมาตร</th>
                                            <th style="text-align: center;">บรรจุภัณฑ์</th>
                                            <th style="text-align: center;">คำอธิบาย</th>
                                            <th style="text-align: center;">ราคา</th>
                                            <th style="text-align: center;">จำนวน</th>
                                            <th style="text-align: center;">คงเหลือ</th>
                                        </thead>
                                        <?php $i = 0;
                                        foreach ($product_list as $product_list) { ?>
                                            <tr style="text-align: center;">
                                                <td><input type="checkbox" name="checkbox[<?php echo $i ?>]" value="<?php echo $product_list['product_code'] ?>"></td>


                                                <td><?php echo $product_list['product_code'] ?></td>
                                                <td><?php echo $product_list['product_name'] ?></td>
                                                <td><?php echo $product_list['product_volume'] ?></td>
                                                <td><?php echo $product_list['product_unit'] ?></td>
                                                <td><?php echo $product_list['product_detail'] ?></td>
                                                <td><input type="hidden" name="price[<?php echo $i ?>]" value="<?php echo $product_list['product_price'] ?>"><b><?php echo $product_list['product_price'] ?></b></td>

                                                <?php
                                                $this->db->where('product_code', $product_list['product_code']);
                                                if($this->session->userdata('status') != 'factory'){
                                                    $this->db->where('hub_id', $this->session->userdata('hub'));
                                                }
                                                $this->db->select_sum('product_stock_amount');
                                                $query = $this->db->get('gj_product_stock');
                                                $product_stock = $query->result_array();
                                                $product = number_format($product_stock[0]['product_stock_amount']);
                                                if ($product <= $product_list['product_min']) { ?>
                                                    <td style="color: red;">
                                                    <?php } else { ?>
                                                    <td style="color: #3BD028;">
                                                    <?php } ?>

                                                    <b><?php echo $product ?></b>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input style="text-align: center;" class="form-control error rounded" type="number" name="amount[<?php echo $i ?>]" id="amount" value="">

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