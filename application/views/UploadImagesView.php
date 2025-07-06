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
<style>
p{
	// color:#b2ad7f;
	color:black;
}
.input1002{

  font-family: Poppins-Regular;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 70px;
  background: transparent;
  padding: 0 5px 0 38px;

}

</style>
		<?php
				$attributes = array('id' => 'formValidate');
				echo form_open_multipart('Home/UploadImages',$attributes); 
			?>
<body>
	
	<div class="limiter">
	
		<div class="container-login100" >
		
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					
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
						Upload Images
					</span>
					<div><a href="<?php echo base_url();?>index.php/Home/Landing_Page"><img src="<?php echo base_url();?>images/home.png" width="50px" height='50px'></a></div>
					<br>
					<input type='hidden' name='amit' value='0'>
					
					<table class="table2" width="100%;">
						<tr>
							<td ><h4>Images 1</h4></td>
							<td><input class="input100" type="file" name="Images1"  onchange="readURL(this,'#Images1');"></td>
							<td><img id="Images1" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 2</h4></td>
							<td><input class="input100" type="file" name="Images2"  onchange="readURL(this,'#Images2');"></td>
							<td><img id="Images2" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 3</h4></td>
							<td><input class="input100" type="file" name="Images3"  onchange="readURL(this,'#Images3');"></td>
							<td><img id="Images3" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 4</h4></td>
							<td><input class="input100" type="file" name="Images4"  onchange="readURL(this,'#Images4');"></td>
							<td><img id="Images4" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 5</h4></td>
							<td><input class="input100" type="file" name="Images5"  onchange="readURL(this,'#Images5');"></td>
							<td><img id="Images5" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 6</h4></td>
							<td><input class="input100" type="file" name="Images6"  onchange="readURL(this,'#Images6');"></td>
							<td><img id="Images6" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 7</h4></td>
							<td><input class="input100" type="file" name="Images7"  onchange="readURL(this,'#Images7');"></td>
							<td><img id="Images7" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 8</h4></td>
							<td><input class="input100" type="file" name="Images8"  onchange="readURL(this,'#Images8');"></td>
							<td><img id="Images8" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 9</h4></td>
							<td><input class="input100" type="file" name="Images9"  onchange="readURL(this,'#Images9');"></td>
							<td><img id="Images9" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
						<tr>
							<td ><h4>Images 10</h4></td>
							<td><input class="input100" type="file" name="Images10"  onchange="readURL(this,'#Images10');"></td>
							<td><img id="Images10" src="#" style="display:none"  width="20%"/></td>
						</tr>
						
					</table>
					
					<!--
					<h4>Images 1</h4>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="file" name="Images1"  onchange="readURL(this);">
						
					</div>
					<img id="blah" src="#"   width="20%"/>
					
					-->
					
				

					<div class="container-login100-form-btn" id='Submit'>
						<button class="login100-form-btn" >
							Submit
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<div class="loader"></div>
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding: 20px;
  border: 0px solid #888;
  width: 80%;
}

</style>

</body>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" align="center">
   <img  align="center" alt="" src="<?php echo base_url(); ?>images/loader.gif" style="width: 100px;">
  </div>

</div>


<script>

$('#Submit').click(function()
{
	var modal = document.getElementById("myModal");
	modal.style.display = "block";
});
function readURL(input,id) {
		
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
			$(id).show();	
                $(id)
					.css('display','inline')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
             
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	
</script>
</html>