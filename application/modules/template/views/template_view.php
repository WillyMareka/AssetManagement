<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Asset Management | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="Bakasa Joshua Neyole" name="author" />
	
	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/theme/default.css" rel="stylesheet" id="theme" />
	
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/template_files/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/parsley/src/parsley.css" rel="stylesheet" />

	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/DataTables-1.10.2/css/data-table.css" rel="stylesheet" />

	<link href="<?php echo base_url(); ?>assets/template_files/css/main.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/select2/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert/lib/sweet-alert.css">
</head>
    <script src="<?php echo base_url(); ?>assets/template_files/js/jquery2.js" ></script>
	// <script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/select2/js/select2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/validation.js" type="text/javascript"></script>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php
			$this->load->view("header");
		?>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<?php
			$this->load->view($sidebar);
		?>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<?php 
			$this->load->view($content_page);
		?>
		<!-- end #content -->
		
        
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/template_files/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/template_files/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/template_files/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/dashboard.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/parsley/dist/parsley.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/form-wizards.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/apps.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/DataTables-1.10.2/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/DataTables-1.10.2/js/data-table.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/apps.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/sweetalert/lib/sweet-alert.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/payments.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/house.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/js/tenants.js"></script>
	
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      });
    </script>
</body>

</html>
