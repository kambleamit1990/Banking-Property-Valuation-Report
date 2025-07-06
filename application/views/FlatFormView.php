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
				echo form_open_multipart('Home/FlatForm',$attributes); 
			?>
<body>
	
	<div class="limiter">
	
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		
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
						Flat Form
					</span>
					<div><a href="<?php echo base_url();?>index.php/Home/Landing_Page"><img src="<?php echo base_url();?>images/home.png" width="50px" height='50px'></a></div>
					<br>
					
					<!--
					<a href="<?php echo base_url()?>index.php/Home/pdf_export_flat_florm/">
							<img src='<?php echo base_url()?>images/pdficon.png' width="20%">
					</a>
					-->
					<p>Enter Subject</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Subject" required2 >
						
					</div>
					<p>Client Name</p>
					<div class="wrap-input100 validate-input"  >
						<input class="input100" type="text" name="ClientName" required2 >
						
					</div>
					<p>Address of the property</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="AddressProperty" required2 >
					</div>
					<p>Fair Market Value</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="FairMarketValue"  required2  onkeyup="this.value=this.value.replace(/\D/g,'')" >
					</div>
					
					
					<h4 align="center">VALUATION REPORT (IN RESPECT OF FLATS)</h4>
					<p  align="center">(To be filled in by the Approved Valuer)</p>
					<BR>
					
					<h5>I.&nbsp;&nbsp;&nbsp;&nbsp;GENERAL</h5>
					<p>1.  Purpose for which the valuation is made</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Purposeforwhichthevaluationismade"  required2 >
					</div>
					
					
					
					
					<p>2. a) Date of inspection</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Dateofinspection"  required2 >
					</div>
					
					
					<p>2. b) Date on which the valuation is made</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Dateonwhichthevaluationismade"  required2 >
					</div>
					
					<p><b>List of documents produced for perusal</b></p>
					<p>3.&nbsp;&nbsp;&nbsp;&nbsp;i) Agreement / Index ii</p>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="AgreementIndexii"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii) Commencement Certificate / Sanction Plan No.</p>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="CommencementCertificateSanctionPlanNo"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iii) Completion / Occupancy Certificate No.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="CompletionOccupancyCertificateNo"  required2 >
					</div>
					
					
					<p>4.&nbsp;&nbsp;&nbsp;&nbsp;Name of the owner(s) and his / their address (es) with Phone no. (details of share of each owner in case of joint ownership)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="detailsofshareofeachowner"  required2 >
					</div>
					
					
					<p>5.&nbsp;&nbsp;&nbsp;&nbsp;Brief description of the property</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Briefdescriptionoftheproperty"  required2 >
					</div>
					
					<p>Location of property</p>
					<p>6.&nbsp;&nbsp;&nbsp;&nbsp;a) Plot No. / Survey No.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="PlotNoSurveyNo"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) Door No.</p>
					<div class="wrap-input100 validate-input" data-validate = "Door No.">
						<input class="input100" type="text" name="DoorNo" required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) T. S. No. / Village</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="TSNoVillage"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) Ward / Taluka</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="WardTaluka"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e) Mandal / District</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="MandalDistrict"  required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f) Date of issue and validity of layout of approved map / plan</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Dateofissue" required2 >
					</div>
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g) Approved map / plan issuing authority</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Approvedmap"  required2 >
					</div>
					
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h) Whether genuineness or authenticity of approved map / plan is verified</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="authenticityofapprovedmap"  required2 >
					</div>
					
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i) Any other comments by our empaneled
valuers on authentic of approved plan</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="empaneledvaluers"  required2 >
					</div>
					
					
					
					<p>7.&nbsp;&nbsp;&nbsp;&nbsp; Postal address of the property</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Postaladdressoftheproperty"  required2 >
					</div>
					
					
					
					<p>8.&nbsp;&nbsp;&nbsp;&nbsp; City / Town</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="City"  required2 >
					</div>
					
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Residential Area</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="ResidentialArea"  required2 >
					</div>
					
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Commercial Area</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="CommercialArea"  required2 >
					</div>
					
					
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Industrial Area</p>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="IndustrialArea"  required2 >
					</div>
					
					
					
					<p>Classification of the area</p>
					<p>9.&nbsp;&nbsp;&nbsp;&nbsp;i)  High / Middle / Poor</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="HighMiddlePoor"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii) Urban / Semi Urban / Rural</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="UrbanSemIUrbanRural"  required2 >
					</div>
					
					<p>10.&nbsp;&nbsp;&nbsp;&nbsp; Coming	under	Corporation Panchayat / Municipality</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Municipality"  required2 >
					</div>
					
					<p>11.&nbsp;&nbsp;&nbsp;&nbsp; Whether covered under any State / Central Govt. enactments (e.g. Urban Land Ceiling Act) or notified under agency area /
scheduled area / cantonment area</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="CentralGovtenactments"  required2 >
					</div>
					
					<p>12.&nbsp;&nbsp;&nbsp;&nbsp; Boundaries of the property</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Boundariesoftheproperty"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; East</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="East"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; West</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="West"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; North</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="North"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; South</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="South"  required2 >
					</div>
					
					
					
					<p>13.&nbsp;&nbsp;&nbsp;&nbsp; Dimensions of the site</p>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; North As per the Deed</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteNorth"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; North Actual</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteNorthActual"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; South As per the Deed</p>
					<div class="wrap-input100 validate-input" data-validate = "South">
						<input class="input100" type="text" name="DimensionsofthesiteSouth"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; South Actual</p>
					<div class="wrap-input100 validate-input" data-validate = "South">
						<input class="input100" type="text" name="DimensionsofthesiteSouthActual"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; East As per the Deed</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteEast"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; East Actual</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteEastActual"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; West As per the Deed</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteWest"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; West Actual</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DimensionsofthesiteWestActual"  required2 >
					</div>
					
					<p>14.&nbsp;&nbsp;&nbsp;&nbsp; Extent of the site</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Extentofthesite"  required2 >
					</div>
					
					<p>14.1&nbsp;&nbsp;&nbsp;&nbsp; Latitude, Longitude & Co-ordinates of flat</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="LatitudeLongitude" required2 >
					</div>
					
					<p>15.&nbsp;&nbsp;&nbsp;&nbsp; Extent of the site considered for valuation (least of 13 A & 13 B)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Extentofthesiteconsideredforvaluation" required2 >
					</div>
					<p>16.&nbsp;&nbsp;&nbsp;&nbsp; Whether occupied by the owner / tenant? If
Occupied by tenant, since how long? Rent received per month.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Rentreceivedpermonth"  required2 >
					</div>
					
					

				<h5>II.&nbsp;&nbsp;&nbsp;&nbsp;APARTMENT BUILDING</h5>
				<p>1.&nbsp;&nbsp;&nbsp;&nbsp;Nature of the Apartment</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="NatureoftheApartment" required2 >
					</div>
					<p>2.&nbsp;&nbsp;&nbsp;&nbsp;Location</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Location"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;T. S. No. / Village</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="TSNoVillage2"  required2 >
					</div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Block No.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="BlockNo"  required2 >
					</div>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Ward No.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="WardNo"  required2 >
					</div>
								
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Village/ Municipality / Corporation</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="VillageMunicipalityCorporation"  required2 >
					</div>
								
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Door No., Street or Road (Pin Code)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DoorNo"  required2 >
					</div>
								
					<p>3.&nbsp;&nbsp;&nbsp;&nbsp;Description of the locality Residential /Commercial / Mixed</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DescriptionofthelocalityResidential"  required2 >
					</div>
					
					<p>4.&nbsp;&nbsp;&nbsp;&nbsp;Year of Construction</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="YearofConstruction"  required2 >
					</div>
					
					<p>5.&nbsp;&nbsp;&nbsp;&nbsp;Number of Floors</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="NumberofFloors"  required2 >
					</div>
					
					<p>6.&nbsp;&nbsp;&nbsp;&nbsp;Type of Structure</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="TypeofStructure"  required2 >
					</div>
					
					<p>7.&nbsp;&nbsp;&nbsp;&nbsp;Number of Dwelling units in the building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="NumberofDwellingunitsinthebuilding"  required2 >
					</div>
					
					<p>8.&nbsp;&nbsp;&nbsp;&nbsp;Quality of Construction</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="QualityofConstruction"  required2 >
					</div>
					
					<p>9.&nbsp;&nbsp;&nbsp;&nbsp;Appearance of the Building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="AppearanceoftheBuilding"  required2 >
					</div>
					
					<p>10.&nbsp;&nbsp;&nbsp;&nbsp;Maintenance of the Building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="MaintenanceoftheBuilding"  required2 >
					</div>
					
					<p>11.&nbsp;&nbsp;&nbsp;&nbsp;Facilities Available</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="FacilitiesAvailable"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lift</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Lift"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protected Water Supply</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="ProtectedWaterSupply"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Underground Sewerage</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="UndergroundSewerage"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Parking - Open/ Covered</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="CarParking"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does Compound wall exist?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DoesCompoundwallexist"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is pavement laid around the building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Ispavementlaidaroundthebuilding"  required2 >
					</div>
					
					
				<h5>III.&nbsp;&nbsp;&nbsp;&nbsp;FLAT</h5>
					<p>1.&nbsp;&nbsp;&nbsp;&nbsp;The floor on which the flat is situated</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Thefloorsituated"  required2 >
					</div>
					<p>2.&nbsp;&nbsp;&nbsp;&nbsp;Door No. of the flat</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DoorNoflat"  required2 >
					</div>
					<p>3.&nbsp;&nbsp;&nbsp;&nbsp;Specifications of the flat</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Specificationsflat"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roof</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Roof"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flooring</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Flooring"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doors</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Doors"  required2 >
					</div>
					
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Windows"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fittings</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Fittings"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Finishing</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Finishing"  required2 >
					</div>
					<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flat Tax</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="FlatTax"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assessment No.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="AssessmentNo"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tax paid in the name of</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Taxpaidname"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tax amount</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Taxamount"  required2 >
					</div>
					<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electricity Service Connection no.</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="ElectricityServiceConnectionno"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meter Card is in the name of</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="MeterCardname"  required2 >
					</div>
					<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How is the maintenance of the flat?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="maintenanceflat"  required2 >
					</div>
					<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agreement executed in the name of</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Agreementexecuted"  required2 >
					</div>
					<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the undivided area of land as per
Deed?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="undividedarealand"  required2 >
					</div>
					<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the plinth area of the flat?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="plinthareaflat"  required2 >
					</div>
					<p>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the floor space index (app.)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="floorspaceindex"  required2 >
					</div>
					<p>11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the Carpet Area of the flat?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="CarpetAreaflat"  required2 >
					</div>
					<p>12.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is it Posh/ I class / Medium / Ordinary?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="IsitPosh"  required2 >
					</div>
					<p>13.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is it being used for Residential or Commercial Purpose?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="usedforResidential"  required2 >
					</div>
					<p>14.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is it Owner-occupied or let out?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Owneroccupied"  required2 >
					</div>
					<p>15.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If rented, what is the monthly rent?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="monthlyrent"  required2 >
					</div>
					
					
					
				<h5>IV.&nbsp;&nbsp;&nbsp;&nbsp;MARKETABILITY</h5>
					
					<p>1.&nbsp;&nbsp;&nbsp;&nbsp;How is the marketability?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="marketability"  required2 >
					</div>
					<p>2.&nbsp;&nbsp;&nbsp;&nbsp;What are the factors favoring for an extra
Potential Value?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="PotentialValue"  required2 >
					</div>
					<p>3.&nbsp;&nbsp;&nbsp;&nbsp;Any negative factors are observed which affect
The market value in general?</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="negativefactors"  required2 >
					</div>
					
					
					
				<h5>V.&nbsp;&nbsp;&nbsp;&nbsp;Rate</h5>
					<p>1.&nbsp;&nbsp;&nbsp;&nbsp;After analyzing the comparable sale instances, what is the composite rate for a similar flat with same specifications in the adjoining   locality?   -(Along   with   details /reference of at-least	two
Latest deals/transactions with respect to adjacent properties in the areas)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="compositerate"  required2 >
					</div>
					<p>2.&nbsp;&nbsp;&nbsp;&nbsp;Assuming it is a new construction, what is the adopted basic composite rate of the flat under valuation after comparing with the specifications and other factors with the flat under comparison (Give details).</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="newconstruction"  required2 >
					</div>
					<p>3.&nbsp;&nbsp;&nbsp;&nbsp;Break - up for the rate</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Breakrate"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i) Building + Services</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="BuildingServices"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ii) Land + Others</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="LandOthers"  required2 >
					</div>
					<p>4.&nbsp;&nbsp;&nbsp;&nbsp;Guideline rate obtained from the Registrar's office (an evidence thereof to be enclosed)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Guidelinerate"  required2 >
					</div>
					<p>5.&nbsp;&nbsp;&nbsp;&nbsp;Insurance Value</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="InsuranceValue"  required2 >
					</div>
					
					
					
					
					
				<h5>VI.&nbsp;&nbsp;&nbsp;&nbsp;COMPOSITE RATE ADOPTED AFTER DEPRECIATION</h5>
					<p>a.&nbsp;&nbsp;&nbsp;&nbsp;Depreciated building rate for Construction</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Depreciatedbuildingrate"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Replacement cost of flat with Services {V (3)i}</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Replacementcostofflat"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age of the building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Agebuilding"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life of the building estimated</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Lifebuilding"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depreciation percentage assuming the salvage value as 10%</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Depreciationpercentage"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depreciated Rate of Construction of Building</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DepreciatedRateConstruction"  required2 >
					</div>
					
					<p>b.&nbsp;&nbsp;&nbsp;&nbsp;Total composite rate arrived for valuation</p>
					
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Totalcompositerate"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depreciated building rate VI (a)</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="DepreciatedbuildingrateVI"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate for Land & other V (3)ii</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="RateforLand"  required2 >
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Composite Rate</p>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="TotalCompositeRate"  required2 >
					</div>
					
					
					
					
					<input type='hidden' name='flag'  id='flag' value='AMIT'>
				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id='pdf' onclick="document.getElementById('flag').value='pdf';">
							PDF
						</button>
						&nbsp;&nbsp;
						<button class="login100-form-btn" id='word' onclick="document.getElementById('flag').value='word';">
							WORD
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

</body>
</html>