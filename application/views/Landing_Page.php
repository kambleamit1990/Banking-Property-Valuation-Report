<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vision Banking Services</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animate/animate.css">
		
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/css-hamburgers/hamburgers.min.css">
			
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/animsition/css/animsition.min.css">
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/select2/select2.min.css">
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.css">
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/util.css">
	-->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
<!--===============================================================================================-->
</head>
		<?php
				$attributes = array('id' => 'formValidate');
				echo form_open_multipart('Home/Login',$attributes); 
			?>
<body>
	
	<div class="limiter">
	
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>images/bg-01.jpg');">
		
			<div class="wrap-login100">
				<div class="text-right p-t-90" align="right">
						<?php echo "Hello ".$first_name." ".$last_name; ?><br>
						<a class="txt1" href="<?php echo base_url(); ?>">
							Logout
						</a>
					</div>
					<br>
				<form class="login100-form validate-form">
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>-->
						<?php
						if(@$this->session->flashdata('error_code'))
						{ ?>	
							<div class="alert alert-danger alert-dismissible">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<?php echo $this->session->flashdata('error_code'); ?>
							  </div>
				<?php 	} ?>
					<?php
						if(@$this->session->flashdata('success_code'))
						{ ?>	
							<div class="alert alert-success">
								  <?php echo $this->session->flashdata('success_code'); ?>
							</div>
				<?php 	} ?>
					<span class="login100-form-title p-b-34 p-t-27">
						<a  class="login100-form-btn" href="<?php echo base_url(); ?>index.php/Home/FlatForm">Flat Form</a>
						<br><a class="login100-form-btn" href="#">Land & Building Form</a>
						<br><a class="login100-form-btn" href="#">Empty Plots Form</a>
						<br><a class="login100-form-btn" href="<?php echo base_url(); ?>index.php/Home/UploadImages">Upload Images</a>
						<br><a class="login100-form-btn" href="#">Login Report</a>
					</span>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->


<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================
	<script src="<?php echo base_url(); ?>vendor/countdowntime/countdowntime.js"></script>
		<script src="<?php echo base_url(); ?>js/main.js"></script>
			<script src="<?php echo base_url(); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>vendor/daterangepicker/daterangepicker.js"></script>
		<script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
			<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
				<script src="<?php echo base_url(); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================--
	<script src="<?php echo base_url(); ?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================--
	<script src="<?php echo base_url(); ?>vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->


</body>
</html>