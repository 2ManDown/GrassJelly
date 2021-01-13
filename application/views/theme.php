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

  <!-- Card CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/card.css" type="text/css" />
  <link rel="preconnect" href="<?php echo base_url() ?>https://fonts.gstatic.com">
  <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>


<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="<?php echo site_url('') ?>" class="navbar-brand">
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

    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">

                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Overview</div>
                  <ul class="nav nav-main" data-ride="collapse">
                    <li class="active">
                      <a href="<?php echo site_url('') ?>" class="auto">
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
                        <a href="<?php echo site_url('product/product_warehouse') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายการสินค้าคงคลัง</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_reportim') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการนำเข้าสินค้า</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_sellreport') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการส่งออกสินค้า</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_manufac') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>เพิ่มข้อมูลการผลิตสินค้า</span>
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
                      <i class="i i-lab icon">
                      </i>
                      <span class="font-bold">ข้อมูลคลังวัตถุดิบ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('metarial/metarial_list') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายการคลังวัตถุดิบ</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('metarial/metarial_importlist') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการนำเข้าวัตถุดิบ</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('metarial/metarial_reavlist') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>รายงานการเบิกใช้วัตถุดิบ</span>
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

                      <i class="i i-docs icon">
                      </i>
                      <span class="font-bold">นำเข้าและเบิกวัตถุดิบ</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('metarial/metarial_insert') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>นำเข้าวัตถุดิบ</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('metarial/metarial_reavel') ?>" class="auto">
                          <i class="i i-dot"></i>

                          <span>เบิกใช้วัตถุดิบ</span>
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

                      <i class="fa fa-plane">
                      </i>
                      <span class="font-bold">การนำเข้าและส่งออกสินค้า</span>
                    </a>
                    <ul class="nav dk">
                      <li>
                        <a href="<?php echo site_url('product/product_import') ?>" class="auto">
                        <i class="i i-dot"></i>
                          <span>การนำเข้าสินค้า</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('product/product_exportbill') ?>" class="auto">
                          <i class="i i-dot"></i>
                          <span>ส่งออกสินค้า</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <div class="line dk hidden-nav-xs"></div>
                  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Supplyer</div>
                  <li>
                    <a href="<?php echo site_url('supplyer/supplyer_list') ?>" class="auto">
                      <span class="pull-right text-muted">
                        <!-- <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i> -->
                      </span>
                      <i class="i i-lab icon">
                      </i>
                      <span class="font-bold">จัดการข้อมูลร้านค้า</span>
                    </a>
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
                        <a href="<?php echo site_url('metarial/metarial_exp') ?>" class="auto">
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