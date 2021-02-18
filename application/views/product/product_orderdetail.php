<section id="content" class="col-md-12">
    <section class="hbox stretch">
        <section>
            <section id="vbox" class="vbox">
                <section id="scollpad" class="scrollable padder">

                    <?php foreach ($orderdetail as $orderdetail) { ?>

                        <section class="panel panel-default">
                            <header id="headone" class="panel-heading font-bold" style="font-size: 22px; color:dimgray;">
                                ช้อมูลการขาย / ส่งออกสินค้า
                            </header>
                            <div class="panel-body">
                                <header class="panel-heading font-bold" style="font-size: 15px;">
                                    เลขที่เอกสาร: <?php echo $orderdetail['order_id'] ?>
                                </header>
                                <?php echo form_open('product/product_sell_update', 'class="form-horizontal"') ?>

                                <div id="namesup" class="form-group" style="margin-top: 15px;">
                                    
                                        <label class="col-sm-2 control-label">ชื่อร้านค้า</label>
                                        <div class="col-sm-3">
                                            <!-- <input type="text" class="form-control rounded" placeholder="ชื่อร้านค้า" value="<?php //echo $selldetail['exportproduct_reciever'] 
                                                                                                                                    ?>" readonly> -->
                                            <p>ชื่อร้านค้า</p>
                                        </div>
                                   


                                    <label class="col-sm-1 control-label">วันที่ขาย</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control rounded" placeholder="วันที่ขาย" value="<?php //echo $selldetail['exportproduct_exdate'] 
                                                                                                                        ?>" readonly>
                                    </div>
                                </div>


                                <div class="table-responsive" style="margin-bottom: 0px;">
                                    <table class="table table-striped b-t b-light table-bordered" cellspacing="0" cellpadding="0">
                                        <div>
                                            <tr>
                                                <th>#</th>
                                                <th>ลอตสินค้าที่ส่งออก/วันที่</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>ราคา/หน่วย</th>
                                                <th>จำนวน</th>
                                                <th style="text-align: center;">ราคาส่งออกรวม</th>
                                            </tr>
                                        </div>
                                        <tbody>
                                            <tr>
                                                <td><input type="hidden" name="sellid" value="<?php //echo $selldetail['exportproduct_id'] 
                                                                                                ?>"><?php //echo $selldetail['exportproduct_id'] 
                                                                                                                                                ?></td>
                                                <td><?php //echo $selldetail['exportproduct_exdate'] 
                                                    ?></td>
                                                <td><?php //echo $selldetail['product_name'] 
                                                    ?></td>
                                                <td><input type="text" class="form-control rounded" name="sellprice" value="<?php //echo $selldetail['exportproduct_price'] 
                                                                                                                            ?>" readonly></td>
                                                <td><input type="text" class="form-control rounded" name="sellamount" value="<?php //echo $selldetail['exportproduct_amount'] 
                                                                                                                                ?>" readonly></td>

                                                <?php //$sumprice = $selldetail['exportproduct_price'] * $selldetail['exportproduct_amount'] 
                                                ?>

                                                <td style="text-align: center; color: #11B9E9; font-weight: bold;"><input type="hidden" name="sellsumprice" value="<?php //echo $sumprice 
                                                                                                                                                                    ?>"><?php //echo $sumprice 
                                                                                                                                                                                                ?></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <footer class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right text-center-xs">

                                            <div id="vat" class="form-group ">
                                                <label class="col-sm-9 control-label">ภาษี : </label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="sellvat" style="color: #11B9E9; font-weight: bold;" class="form-control rounded text-right" value="<?php //echo $vat =  $sumprice * 7 / 100; 
                                                                                                                                                                                ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="line line-dashed b-b line-lg pull-in"></div>
                                            <div class="form-group ">
                                                <label class="col-sm-9 control-label">ยอดรวม : </label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="sellincludevat" style="color: Red; font-weight: bold;" class="form-control rounded text-right" value="<?php //echo $sum =  $selldetail['exportproduct_sumprice'] + $vat
                                                                                                                                                                                    ?>" readonly>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </footer>
                                <div class="col-sm-12">
                                    <div class="col-sm-11"></div>

                                    <button type="button" class="btn btn-primary btn-md" id="print" style="margin-top: 30px;" onclick="window.print()"> <i class="glyphicon glyphicon-print"></i> &nbsp; พิมพ์</button>
                                </div>
                                <!-- <div class="form-group" >
                                    <div class="col-sm-3 col-sm-offset-10" style="margin-top: 30px;">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div> -->
                                <!-- </form> -->

                            </div>
                        </section>

                    <?php } ?>
                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
    </section>
</section>