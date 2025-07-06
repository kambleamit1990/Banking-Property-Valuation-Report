<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
   <title>Vision Banking Services</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>RegistrationStyle/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>RegistrationStyle/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>RegistrationStyle/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>RegistrationStyle/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>RegistrationStyle/css/main.css" rel="stylesheet" media="all">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
			<?php
				$attributes = array('id' => 'formValidate');
				echo form_open_multipart('Home/Registration',$attributes); 
			?>
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
				
                <div class="card-body">
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
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action='Registration'>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="labelReg">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" required >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="labelReg">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" required >
                                </div>
                            </div>
                        </div>
                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="labelReg">Email</label>
                                    <input class="input--style-4" type="email" name="email" required >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="labelReg">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" required maxlength="10"  onkeyup="this.value=this.value.replace(/\D/g,'');" >
                                </div>
                            </div>
                        </div>
                     
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
						<div class="text-center p-t-90">
						<a class="txt1" href="<?php echo base_url(); ?>">
							Login?
						</a>
					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>RegistrationStyle/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>RegistrationStyle/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>RegistrationStyle/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>RegistrationStyle/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>RegistrationStyle/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->