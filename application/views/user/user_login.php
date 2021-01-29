<!DOCTYPE html>
<html lang="en">

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

    <!-- Card CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/card.css" type="text/css" />
    <link rel="preconnect" href="<?php echo base_url() ?>https://fonts.gstatic.com">
    <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

</head>

<body>

    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl">
            <a class="navbar-brand block" href="">
                <!-- <img src="<?php echo base_url() ?>asset/images/logo.png" class="m-r-sm" alt="scale"> -->
                Grass Jelly | โรงงานเฉาก๊วย</a>
            <section class="m-b-lg">
                <header class="wrapper text-center">
                    <strong>กรุณาเข้าสู่ระบบ</strong>
                </header>
                <?php echo form_open('user/user_auth') ?>
                <div class="list-group">
                    <div class="list-group-item">
                        <input type="text" placeholder="Username Or Email" name="user_username" class="form-control no-border">
                        <!-- <span class="text-danger"><?php //echo form_error('user_username') 
                                                        ?></span> -->
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="Password" name="user_password" class="form-control no-border">
                        <!-- <span class="text-danger"><?php //echo form_error('user_password') 
                                                        ?></span> -->
                    </div>
                </div>
                <?php //echo $this->session->flashdata("error"); 
                ?>
                <button type="submit" class="btn btn-lg btn-info btn-block">เข้าสู่ระบบ</button>
                <div class="text-center m-t m-b"><a href="#"><small>ลืมรหัสผ่าน?</small></a></div>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a href="#" class="btn btn-lg btn-default btn-block">Create an account</a>
                <?php form_close() ?>
            </section>
        </div>
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