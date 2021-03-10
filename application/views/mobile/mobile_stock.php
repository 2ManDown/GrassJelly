<style>
    .button-group-b{
        display: flex;
        flex-direction: column;
    }
    .btn-b {
    margin: 10px 10px 5px 10px;
    height: 50%;
    font-size: 20px; 
    border-radius: 8px;
    padding: 5px 0px; 
    background-color: #1aae88;
    color: #fff;
    text-align: center;
     
}
</style>

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

    <div class="button-group-b">
        <a type="button" class="btn-b" href="<?php echo site_url('mobile/mobile_return_product') ?>"><i class="fa  fa-archive"></i>  คืนสินค้า</a>
        <a type="button" class="btn-b" href="<?php echo site_url('mobile/mobile_stock_history') ?>"><i class="fa  fa-archive"></i>  ประวัติ</a>
    </div>

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
                <?php foreach ($sale_stockbalance as $sale_stockbalance) { ?>

                    <tr>
                        <td style="text-align: center;"><?php echo $i ?></td>
                        <td><?php echo $sale_stockbalance['product_code'] ?></td>
                        <td><?php echo $sale_stockbalance['product_name'] ?></td>
                        <td style="text-align: right;"><?php echo $sale_stockbalance['product_price'] ?></td>
                        <?php
                        $this->db->where('product_code', $sale_stockbalance['product_code']);
                        $this->db->where('employee_id', $this->session->userdata('employee'));
                        $this->db->select_sum('sale_stock_amount');
                        $query = $this->db->get('gj_sale_stock');
                        $product_stock = $query->result_array();
                        $product = number_format($product_stock[0]['sale_stock_amount']);
                        if ($product <= $sale_stockbalance['product_min']) { ?>
                            <td style="color: red; text-align: center; width: 20px;">
                            <?php } else { ?>
                            <td style="color: #3BD028; text-align: center; width: 20px;">
                            <?php } ?>
                            <b><?php echo $product ?></b>
                            </td>
                    </tr>

                <?php $i++;
                } ?>

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