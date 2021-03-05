<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs">
            <i class="fa fa-arrow-left" onclick="goBack();"></i>
        </a>
        <a href="<?php echo site_url('employee') ?>" class="navbar-brand">
            <!-- <img src="<?php //echo base_url() 
                            ?>asset/images/logo.png" class="m-r-sm" alt="scale" > -->
            <span class="hidden-nav-xs hname">สต็อกสินค้า</span>
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
    <!-- <div class="button-group">
        <a type="button" class="btn-immobile" href="<?php echo site_url('mobile/mobile_import') ?>">
            <i class="fa  fa-archive"></i><br>นำเข้าสินค้า
        </a>
    </div> -->

    <div class="table-mobile" style="margin: 25px 10px 10px 10px;">
        <table class="table table-striped b-t b-light table-bordered">
            <div>
                <tr>
                    <th style="text-align: center; width: 10px;">#</th>
                    <th style="text-align: center;">รหัส</th>
                    <th style="text-align: center;">ชื่อ</th>
                    <th style="text-align: center;">ราคา</th>
                    <th style="text-align: center;">คงเหลือ</th>

                </tr>
            </div>
            <tbody>
            <?php $i = 1 ?>
            <?php foreach ($product_productbalance as $product_productbalance) { ?>

                <tr>
                    <td style="text-align: center;"><?php echo $i ?></td>
                    <td ><?php echo $product_productbalance['product_code'] ?></td>
                    <td><?php echo $product_productbalance['product_name'] ?></td>
                    <td style="text-align: right;"><?php echo $product_productbalance['product_price'] ?></td>
                    <?php
                    $this->db->where('product_code', $product_productbalance['product_code']);
                                    $this->db->select_sum('product_stock_amount');
                                    $query = $this->db->get('gj_product_stock');
                                    $product_stock = $query->result_array();
                                    $product = number_format($product_stock[0]['product_stock_amount']);
                                    if ($product <= $product_productbalance['product_min']) { ?>
                                        <td style="color: red; text-align: center; width: 20px;">
                                        <?php } else { ?>
                                        <td style="color: #3BD028; text-align: center; width: 20px;">
                                        <?php } ?>
                                        <b><?php echo $product ?></b> </td>
                </tr>
                
                <?php $i++; } ?>

            </tbody>
        </table>
    </div>

</section>
<!-- end content -->

<script>
    function goBack() {
        window.history.back();
    }
</script>