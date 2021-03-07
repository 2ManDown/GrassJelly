<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs">
            <i class="fa fa-arrow-left" onclick="goBack();"></i>
        </a>
        <a href="<?php echo site_url('employee') ?>" class="navbar-brand">
            <!-- <img src="<?php //echo base_url() 
                            ?>asset/images/logo.png" class="m-r-sm" alt="scale" > -->
            <span class="hidden-nav-xs hname">ขายสินค้า</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
            <i class="fa fa-cog"></i>
        </a>
    </div>


    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-left">
                    <img src="<?php echo base_url() ?>asset/images/a0.png" alt="...">
                </span>
                <?php echo $this->session->userdata("name") ?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">
                <li>
                    <span class="arrow top"></span>
                    <a href="<?php echo site_url('user/user_profile') ?>">Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo site_url('user/user_logout') ?>">Logout</a> <!-- data-toggle="ajaxModal" -->
                </li>
            </ul>
        </li>
    </ul>

</header>

<!-- content -->
<section>

    <?php// echo form_open('product/product_orderinsert', 'data-validate="parsley"', 'id="form-valid"') ?>
    <div class="panel-body">
        <div class="form-group pull-in clearfix">
            <div class="col-sm-4">
                <label>รหัสขายสินค้า</label>
                <?php //if ($this->session->userdata('status') != 'admin') {
                    //$this->db->where('hub_id', $this->session->userdata('hub'));
                //}
                //$count_all = $this->db->count_all_results('gj_order');
                //$countid =  "ODE" . ($count_all + 1);
                //echo $countid;
                ?>
                <!-- <input type="hidden" name="countid" value="<?php echo $countid ?>"> -->
            </div>
        </div>

        <div class="form-group pull-in clearfix">

            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <label>รหัสการขายสินค้า</label>
                <input type="text" name="countid" class="form-control  input-m" value="<?php //echo $countid 
                                                                                        ?>" placeholder="รหัสการส่งออกสินค้า" readonly required>
            </div>


        </div>

        <div class="form-group pull-in clearfix">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <label>วันที่ขาย</label>
                <input class="input-sm input-s datepicker-input form-control input-m" name="export_date" size="16" type="text" value="" data-date-format="yyyy-mm-dd">
            </div>
<br>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <label>เวลา</label>
                <div style="display: flex;">
                    <input id="timepkr" name="export_time" style="width: 100; float: left;" class="form-control input-m" placeholder="HH:MM" />
                    <button type="button" class="btn btn-primary" onclick="showpickers('timepkr','24')" style="width: 40px; float: left;"><i class="fa fa-clock-o"></i></button>
                    <div class="timepicker"></div>
                </div>
            </div>
        </div>

        <div class="form-group pull-in clearfix"></div>

        <div class="form-group pull-in clearfix">
            <div class="" style="margin: 20px 10px 0px 10px;">
                <table class="table table-striped b-t b-light table-bordered">
                    <thead>
                        <th style="text-align: center;">เลือก</th>
                        <th style="text-align: center;">รหัส</th>
                        <th style="text-align: center;">ชื่อ</th>

                        <th style="text-align: center;">ราคา</th>
                        <th style="text-align: center; width: 70px;">จำนวน</th>
                    </thead>
                    <?php $i = 0;
                    foreach ($product_list as $product_list) { 
                    ?>
                    <tr style="text-align: center;">
                        <td><input type="checkbox" name="checkbox[<?php echo $i ?>]" value="<?php echo $product_list['product_code'] ?>"></td>


                        <td><?php echo $product_list['product_code'] ?>P213</td>
                        <td><?php echo $product_list['product_name'] ?>dasdasd</td>

                        <td><input type="hidden" name="price[<?php echo $i ?>]" value="<?php echo $product_list['product_price'] ?>"><b><?php echo $product_list['product_price'] ?></b></td>

                        <td>
                            <div>
                                <input style="text-align: center;" class="form-control error rounded input-m" type="number" name="amount[<?php echo $i ?>]" id="amount" value="">
                            </div>
                        </td>
                    </tr>
                    <?php $i++;
                    } 
                    ?>
                </table>
            </div>

        </div>


        <div class="text-right">
            <button type="submit" class="btn btn-primary btn-s-xs">บันทึก</button>
        </div>
    </div>
</section>
<?php //form_close() 
?>

</section>
<!-- end content -->

<script>
    function goBack() {
        window.history.back();
    }
</script>