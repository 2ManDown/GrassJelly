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
                            นำเข้าสินค้า
                        </header>
                        <?php echo form_open('product/product_insert_import', 'data-validate="parsley"'); ?>

                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-4">
                                    <label>รหัสล็อตนำเข้าสินค้า</label>
                                    <?php if($this->session->userdata('status') != 'admin'){$this->db->where('hub_id',$this->session->userdata('hub'));}
                                    $count_all = $this->db->count_all_results('gj_order_import');
                                    $countid =  "OD-IM" . ($count_all + 1);
                                    echo $countid;
                                    ?>
                                    <input type="hidden" name="countid" value="<?php echo $countid ?>">
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>สินค้า</label>
                                    <select name="product_code" class="form-control m-b " required>
                                        <option disabled selected>กรุณาเลือกสินค้า</option>
                                        <?php foreach ($product_list as $product_list) { ?>
                                            <option value="<?php echo $product_list['product_code'] ?>"><?php echo $product_list['product_code'], ' - ', $product_list['product_name'], ' / ', $product_list['product_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <input type="number" name="import_price" class="form-control" placeholder="กรอกราคาต่อหน่วย" id="produceamount" required>
                                </div>
                                
                            </div>

                            <div class="form-group pull-in clearfix">

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่นำเข้า</label>
                                    <input name="import_date" class="input-sm input-s datepicker-input form-control" size="16" type="text" name="importproduct_imdate" value="" data-date-format="yyyy-mm-dd">
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนนำเข้า</label>
                                    <input type="number" name="import_amount" class="form-control" placeholder="กรอกจำนวนนำเข้า" id="produceamount" required>
                                </div>
                                
                            </div>

                            <div class="form-group pull-in clearfix">
                            <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>เวลา</label>
                                    <div style="display: flex;">
                                        <input id="timepkr" name="import_time" style="width: 100; float: left;" class="form-control" placeholder="HH:MM" />
                                        <button type="button" class="btn btn-primary" onclick="showpickers('timepkr','24')" style="width: 40px; float: left;"><i class="fa fa-clock-o"></i></button>
                                        <div class="timepicker"></div>
                                    </div>
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>หมายเหตุ</label>
                                    <textarea class="form-control" name="import_comment" rows="6" data-minwords="6" data-required="true" placeholder="หมายเหตุ" style="resize: none;"></textarea>
                                </div>
                            </div>



                            <div class="text-right">
                                <input name="manufac_id" type="hidden" class="form-control" id="manufac_id" value="MN0">
                                <button type="submit" class="btn btn-primary btn-s-xs" onclick="return confirm('บันทึกข้อมูลการนำเข้านี้')">บันทึก</button>
                            </div>
                        </div>
                    </section>
                    <?php form_close(); ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>


<script>
    function plus() {
        let x = document.getElementById("produceamount").value;
        console.log(x);
        let a = document.getElementById("produceprice").value;
        console.log(a);
        let b = x * a;
        console.log(b);
        let output = document.getElementById("sumprice");
        output.value = b;
    }
</script>