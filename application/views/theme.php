<!DOCTYPE html>
<html lang="en" class="app">

<head>
  <meta charset="utf-8" />
  <title>Grass Jelly | โรงงานเฉาก๊วย</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/app.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/datepicker/datepicker.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/slider/slider.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/chosen/chosen.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/spinner/jquery.bootstrap-touchspin.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/typehead/typehead.css" type="text/css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/responsive.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/print.css" media="print">

  <!-- Card CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/card.css" type="text/css" />
  <link rel="preconnect" href="<?php echo base_url() ?>https://fonts.gstatic.com">
  <!-- <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet"> -->
</head>

<?php $userdata = $this->session->userdata('status');
/*$userdata ? $userdata : redirect('')  ;*/

if ($userdata == 'admin') {
} else if ($userdata == 'factory') {
  redirect('factory');
} else if ($userdata == 'supplyer') {
  redirect('supplyer');
} else {
  redirect('');
}

?>

<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="" class="navbar-brand">
          <img src="<?php echo base_url() ?>asset/images/logo.png" class="m-r-sm" alt="scale">
          <span class="hidden-nav-xs">Grass Jelly</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>

      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects...">
          </div>
        </div>
      </form>



      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
      <li class="dropdown">
          <a href="<?php echo site_url('user/user_list') ?>" ><!-- class="dropdown-toggle" data-toggle="dropdown" -->
            <b>จัดการสิทธิ์ข้อมูลผู้ใช้งานระบบ</b>
          </a>
        </li>

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
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb avatar pull-left m-r">
                        <img src="<?php echo base_url() ?>asset/images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt"><?php echo $this->session->userdata("name") ?></strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block"><?php echo $this->session->userdata("status") ?></span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="<?php echo site_url('user/user_profile') ?>">Profile</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="<?php echo site_url('user/user_login') ?>">Logout</a> <!-- data-toggle="ajaxModal" -->
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Overview</div>
                  <ul class="nav nav-main" data-ride="collapse">
                    <li class="active">
                      <a href="<?php echo site_url('index') ?>" class="auto">
                        <i class="i i-statistics icon">
                        </i>
                        <span class="font-bold">Overview</span>
                      </a>
                    </li>

                    <!-- <div class="line dk hidden-nav-xs"></div> -->
                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Product</div>
                    <li>
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <!-- <b class="badge bg-danger pull-right">4</b> -->
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">ข้อมูลสินค้า</span>
                      </a>
                      <ul class="nav dk">
                        <li>
                          <a href="<?php echo site_url('product/product_list') ?>" class="auto">
                            <i class="i i-dot"></i>

                            <span>รายการข้อมูลสินค้า</span>
                          </a>
                        </li>
                    </li>
                    <li>
                      <a href="<?php echo site_url('product/product_insert') ?>" class="auto">
                        <i class="i i-dot"></i>

                        <span>เพิ่มข้อมูลสินค้า</span>
                      </a>
                    </li>
                  </ul>
                  </li>

                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Materail</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <!-- <b class="badge bg-danger pull-right">4</b> -->
                      <i class="i i-stack icon">
                      </i>
                      <span class="font-bold">ข้อมูลวัตถุดิบ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('material/material_listinfo') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายการข้อมูลสินค้า</span>
                        </a>
                      </li>
                  </li>
                  </ul>
                  </li>

                  <!-- <div class="line dk hidden-nav-xs"></div> -->
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Stock</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <!--  <b class="badge bg-danger pull-right">4</b> -->
                      <i class="i i-stack icon">
                      </i>
                      <span class="font-bold">ข้อมูลคลังสินค้า</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('product/product_productbalance') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายการสินค้าคงเหลือ</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_exportreport') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการเบิกออกสินค้า</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_stock_history') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>ประวัติการนำเข้าและเบิกออก</span>
                        </a>
                      </li>


                    </ul>
                  </li>

                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>
                      <i class=" fa fa-archive">
                      </i>
                      <span class="font-bold">ข้อมูลคลังวัตถุดิบ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('material/material_materialbalance') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายการคลังวัตถุดิบคงเหลือ</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('material/material_stock_history') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>ประวัติการนำเข้าและเบิกออก</span>
                        </a>
                      </li>

                    </ul>
                  </li>


                  <!-- <div class="line dk hidden-nav-xs"></div> -->
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Account</div>

                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-plane">
                      </i>
                      <span class="font-bold">การผลิตสินค้า</span>
                    </a>
                    <ul class="nav dk">
                    <li>
                        <a href="<?php echo site_url('product/product_manufacreport') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการผลิตสินค้า</span>
                        </a>
                      </li>
                      <li>
                    <li>
                        <a href="<?php echo site_url('product/product_manufacinsert') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ผลิตสินค้า</span>
                        </a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo site_url('product/product_import') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>นำเข้าสินค้า</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_exportbill') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ส่งออกสินค้า</span>
                        </a>
                      </li> -->
                    </ul>
                  </li>

                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Supplyer</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <!-- <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i> -->
                      </span>
                      <i class="i i-lab icon"></i>

                      <span class="font-bold">จัดการข้อมูลร้านค้า</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('supplyer/supplyer_list') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ข้อมูลร้านค้า</span>
                        </a>
                      </li>

                      <li>
                        <a href="<?php echo site_url('supplyer/supplyer_insert') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>เพิ่มข้อมูลร้านค้า</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Expired</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-exclamation-circle">
                      </i>
                      <span class="font-bold">วัตถุดิบหมดอายุ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('material/material_exp') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>จัดการวัตถุดิบหมดอายุ</span>
                        </a>
                      </li>

                    </ul>
                  </li>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-exclamation-circle"></i>
                      <span class="font-bold">สินค้าหมดอายุ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('product/product_exp') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>จัดการสินค้าหมดอายุ</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Hub</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-truck"></i>
                      <span class="font-bold">ศูนย์กระจาย</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('hub/hub_info') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ข้อมูลศูนย์กระจาย</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('hub/hub_addinfo') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>เพิ่มข้อมูล Hub</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Employee</div>
                  <li>
                    <a href="#" class="auto">
                      <span class="pull-right text-muted">
                        <i class="i i-circle-sm-o text"></i>
                        <i class="i i-circle-sm text-active"></i>
                      </span>

                      <i class="fa fa-users"></i>
                      <span class="font-bold">พนักงาน</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('employee/employee_info') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ข้อมูลพนักงาน</span>
                        </a>
                      </li>
                    </ul>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('employee/employee_addinfo') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>เพิ่มข้อมูลพนักงาน</span>
                        </a>
                      </li>
                    </ul>
                  </li>


                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Setting</div>
                  <li>
                    <a href="<?php echo site_url('factory/factory_info') ?>" class="auto">
                      <span class="pull-right text-muted">
                        <!-- <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i> -->
                      </span>
                      <i class="i i-settings">
                      </i>
                      <span class="font-bold">ตั้งค่าข้อมูลโรงงาน</span>
                    </a>

                  </li>

                  </ul>

                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">

              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <?php $this->load->view($page) ?>
      </section>
    </section>
  </section>


  <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>asset/js/bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo base_url() ?>asset/js/app.js"></script>
  <script src="<?php echo base_url() ?>asset/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.spline.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="<?php echo base_url() ?>asset/js/charts/flot/demo.js"></script>

  <script src="<?php echo base_url() ?>asset/js/calendar/bootstrap_calendar.js"></script>
  <script src="<?php echo base_url() ?>asset/js/calendar/demo.js"></script>

  <script src="<?php echo base_url() ?>asset/js/sortable/jquery.sortable.js"></script>
  <script src="<?php echo base_url() ?>asset/js/app.plugin.js"></script>
  <script src="<?php echo base_url() ?>asset/js/chosen/chosen.jquery.min.js"></script>
  <!-- file input -->
  <script src="<?php echo base_url() ?>asset/js/file-input/bootstrap-filestyle.min.js"></script>

  <!-- Date Picker -->
  <script src="<?php echo base_url() ?>asset/js/datepicker/bootstrap-datepicker.js"></script>

</body>

</html>
