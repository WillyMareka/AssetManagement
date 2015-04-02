<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.4/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2014 13:53:50 GMT -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $title;?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="<?php echo base_url() . 'assets/fonts/asset2.ico'?>" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/template_files/css/style-responsive.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert/lib/sweet-alert.css">
	<link href="<?php echo base_url(); ?>assets/template_files/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> Asset Management
                    <small>Managing Rental Assets</small>
                    <small><?php if(isset($new_user)){
                    	echo $new_user?>
                    </small>
                    <?php }else{ ?>
                    <small>Enter your credentials</small>
                    <?php }?>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form enctype="multipart/form-data" id="loginauthentication" name="loginauthentication" method="POST" class="margin-bottom-0 ">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" required placeholder="Username" name="username" id="username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" required placeholder="Password" name="password" id="password" />
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
        
        
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/template_files/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>assets/template_files/js/apps.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/sweetalert/lib/sweet-alert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/template_files/js/login.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script type="text/javascript">
    $(document).ready(function(){
    	base_url = '<?php echo base_url();?>';
    });
    </script>
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.4/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2014 13:53:50 GMT -->
</html>
