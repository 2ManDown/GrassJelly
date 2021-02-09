<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder">



                    <section class="panel panel-default">
                        <header class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                            เพิ่มข้อมูลการผลิตสินค้า
                        </header>
                        <?php echo form_open('product/product_insert_manufac', 'data-validate="parsley"') ?>
                        <div class="panel-body">
                            <div class="form-group pull-in clearfix">
                                <!--  <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ลอตการผลิตสินค้า</label>
                                    <input type="text" class="form-control" id="input-id-1" name="manufac_id" required placeholder="ป้อนลอตผลิคสินค้า">
                                </div> -->
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>สินค้าที่ผลิต</label>
                                    <select name="product_code" id="product" class="form-control m-b ">
                                        <option value="" disabled selected>กรุณาเลือกสินค้าที่ผลิต</option>
                                        <?php foreach ($product_list as $product_list) { ?>
                                            <option value="<?php echo $product_list['product_code'] ?>"><?php echo $product_list['product_code'], ' - ', $product_list['product_name'], ' - ', $product_list['product_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>จำนวนที่ผลิต</label>
                                    <input type="number" name="manufac_produce" class="form-control" placeholder="จำนวนผลิต" id="produceamount" onchange="plus()" required>
                                </div>

                                <!-- <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ชื่อสินค้าที่ผลิต</label>
                                    <input type="text" class="form-control" id="productname" value="<?php //$product_list['product_name'] 
                                                                                                    ?>" readonly>
                                </div> -->
                            </div>

                            <div class="form-group pull-in clearfix">
                                <!--  <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ประเภทบรรจุภัณฑ์</label>
                                    <input type="text" class="form-control" id="productunit" value="<?php //$product_list['product_unit'] 
                                                                                                    ?>" readonly>
                                </div> -->
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่ผลิต</label>
                                    <input name="manufac_producedate" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy">
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคาต่อหน่วย</label>
                                    <div class="input-group m-b">
                                        <span class="input-group-addon">BTH</span>
                                        <input type="number" name="manufac_price" class="form-control" id="produceprice" onchange="plus()">
                                        <!-- <span class="input-group-addon">.00</span> -->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>วันที่หมดอายุ</label>
                                    <input name="manufac_expdate" class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy">
                                </div>

                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                    <label>ราคารวม</label>
                                    <input name="manufac_sumprice" type="number" class="form-control" id="sumprice" readonly>
                                </div>
                            </div>

                            <!-- <div class="form-group pull-in clearfix"> -->
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
                                </div>
                            <!-- </div> -->

                        </div>

                    </section>

                    <?php echo form_close() ?>

                </section>
            </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
    </section>
</section>

<script>
    $(document).ready(function() {
        $("SELECT").change(function() {
            var product_code = $(this).attr("id") /* .value */ ;
            $.ajax({
                url: "<?php echo site_url('product/product_manufacinsert') ?>",
                method: "post",
                data: {
                    id: product_code
                },
                success: function(data) {
                    console.log("SUCCESS");
                    $('#productname').html(data['product_name']);
                }
            })
        });
    });
</script>

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