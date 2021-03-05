<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <!-- <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a> -->
        <a href="" class="navbar-brand">
          <!-- <img src="<?php //echo base_url() ?>asset/images/logo.png" class="m-r-sm" alt="scale"> -->
          <span class="hidden-nav-xs">Grass Jelly</span>
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
    <h3><i class="fa  fa-bars"></i> เมนูการจัดการ</h3>
    <div class="button-group">
        
                <a type="button" class="btn-a btn-stock" href="<?php echo site_url('mobile/mobile_stock')?>"><i class="fa  fa-archive"></i><br>สต็อก</a>
                <a type="button" class="btn-a btn-sale" href="<?php echo site_url('mobile/mobile_sale')?>"><i class="fa  fa-tag"></i><br>ขาย</a>
                <a type="button" class="btn-a btn-account" href="<?php echo site_url('mobile/mobile_account')?>"><i class="fa  fa-book"></i><br>บัญชี</a>

    </div>

</section>
<!-- end content -->