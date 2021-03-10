<style>
    th {
        background-color: #ffff;
        text-align: center;
        position: sticky;
        top: -1px;
    }

    .my-custom-scrollbar {
        position: relative;
        height: 710px;
        overflow: auto;
    }

    .table-wrapper-scroll-y {
        display: block;
    }
</style>
<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
        <a href="<?php echo site_url('mobile/mobile_stock') ?>" class="btn btn-link visible-xs">
            <i class="fa fa-arrow-left"></i>
        </a>
        <a href="<?php echo site_url('employee') ?>" class="navbar-brand">
            <!-- <img src="<?php //echo base_url() 
                            ?>asset/images/logo.png" class="m-r-sm" alt="scale" > -->
            <span class="hidden-nav-xs hname">ประวัติการนำเข้าและขายสินค้า</span>
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

    <div class="table-mobile table-wrapper-scroll-y my-custom-scrollbar" style="margin: 25px 10px 10px 10px;">
        <table class="table table-striped b-t b-light table-bordered">
            <div>
                <tr>
                    <th>#</th>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <!-- <th>ปริมาตร</th> -->
                    <!-- <th>ราคา</th> -->
                    <th>วันที่</th>
                    <!-- <th>เวลา</th> -->
                    <th>จำนวน</th>
                    <th>สถานะ</th>
                </tr>
            </div>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($sale_history as $sale_history) { ?>

                    <tr>
                        <td style="text-align: center;"><?php echo $i ?></a></td>
                        <td><?php echo $sale_history['product_code'] ?></a></td>
                        <td><?php echo $sale_history['product_name'] ?></a></td>
                        <!-- <td><?php //echo $sale_history['product_volume'] 
                                    ?></a></td> -->
                        <!-- <td style="text-align: center;"><?php// echo $sale_history['product_price'] ?></a></td> -->
                        <td style="text-align: center;"><?php echo $sale_history['sale_stock_date'] ?></a></td>
                        <!-- <td style="text-align: center;"><?php //echo $sale_history['sale_stock_time'] ?></a></td> -->
                        <td style="text-align: center;"><?php echo $sale_history['sale_stock_amount'] ?></a></td>
                        <td><a href="" style="color: <?php echo $sale_history['stock_status_color'] ?>;"><?php echo $sale_history['stock_status_value'] ?></a></td>
                    </tr>

                    <?php $i++ ?>
                <?php } ?>

            </tbody>
        </table>
    </div>


</section>
<!-- end content -->
