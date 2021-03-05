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
  <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/timepicker.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/mobile.css" type="text/css" />
</head>

<?php $userdata = $this->session->userdata('status');
//$userdata ? $userdata : redirect('') ; 

if ($userdata == 'admin') {
  redirect('admin');
} else if ($userdata == 'factory') {
  redirect('factory');
} else if ($userdata == 'supplier') {
} else if ($userdata == 'employee') {
} else {
  redirect('');
}
?>

<body class="">
  <section class="vbox">

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
  
  <script src="<?php echo base_url() ?>asset/js/timepicker.js"></script>
</body>

</html>