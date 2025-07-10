<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
		public function __construct()
	{
		parent::__construct();		
		$this->load->library('form_validation');		
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('property_model');
	//	$this->load->library('m_pdf');
	}

	public function index()
	{
		
		$this->load->view('login');
	}
		public function Landing_Page()
	{
		
		$this->load->view('Landing_Page');
		
	}
	public function Registration()
	{
		if ($_POST == NULL) {
		$this->load->view('RegistrationView');
		}
		else
		{
				$first_name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $_REQUEST['first_name']);
				$last_name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $_REQUEST['last_name']);
				$phone = preg_replace('/[^A-Za-z0-9\-]/', ' ', $_REQUEST['phone']);
				if($first_name == '' || $last_name == '' || $phone == '' || $_REQUEST['email'] == '' ){
					 $this->session->set_flashdata("error_code","Please Enter all Required fields !!!");
					redirect('Home/Registration', 'refresh');	
				}
					
					
				if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
				  $this->session->set_flashdata("error_code","Please Enter Valid Email ID");
					redirect('Home/Registration', 'refresh');	
				}
				if(strlen($_REQUEST['phone']) != 10) 
				{
					$this->session->set_flashdata("error_code","Please Enter 10 digit Phone No.");
					redirect('Home/Registration', 'refresh');	
				}
				if( is_numeric($_REQUEST['phone']) != 1 )
				{
					
					$this->session->set_flashdata("error_code","Invalid Phone No.");
					redirect('Home/Registration', 'refresh');	
				}
				
				$Insert_data= array(
									'first_name'=>$this->input->post('first_name'),
									'last_name'=>$this->input->post('last_name'),
									'email'=>$this->input->post('email'),
									'phone'=>$this->input->post('phone')
								  );
				$result_cat = $this->property_model->insert_registration($Insert_data);
				$this->session->set_flashdata("success_code","Registration Successfull !!!");
				redirect('Home/Registration', 'refresh');	
		}	
		
	}

		public function Login()
	{
		if ($_POST == NULL) {
		$this->load->view('RegistrationView');
		}
		else
		{
				
				if($_REQUEST['username'] == '' || $_REQUEST['pass'] == ''  ){
					 $this->session->set_flashdata("error_code","Please Enter all Required fields !!!");
					redirect(base_url(), 'refresh');	
				}
					
					
				if (!filter_var($_REQUEST['username'], FILTER_VALIDATE_EMAIL)) {
				  $this->session->set_flashdata("error_code","Please Enter Valid Email ID");
					redirect(base_url(), 'refresh');	
				}
				
				
				
				$Login = $this->property_model->Login($_REQUEST['username'],$_REQUEST['pass']);
				if($Login==0)
				{
					$this->session->set_flashdata("error_code","Invalid Username & Password !!!");
					redirect(base_url(), 'refresh');	
				}
				else
				{
					 foreach ($Login as $row) {
						$sess_array = array( 'first_name' => $row['first_name'],'last_name' => $row['last_name']);
			
						$this->session->set_userdata('logged_in', $sess_array);
					 }
					 if($this->session->userdata('logged_in'))
					{
						$session_data = $this->session->userdata('logged_in');
						$data['first_name'] = $session_data['first_name'];
						$data['last_name'] = $session_data['last_name'];
					}
					$this->load->view('Landing_Page',$data);
				}
		}	
		
	}
	public function FlatForm()
	{
		if ($_POST == NULL) {
		$this->load->view('FlatFormView');
		}
		else
		{
				
				$data['Subject']=$_REQUEST['Subject'];
				$data['ClientName']=$_REQUEST['ClientName'];
				$data['AddressProperty']=$_REQUEST['AddressProperty'];
				$data['FairMarketValue']=$_REQUEST['FairMarketValue'];
				
				$data['AgreementIndexii']=$_REQUEST['AgreementIndexii'];
				$data['Purposeforwhichthevaluationismade']=$_REQUEST['Purposeforwhichthevaluationismade'];
				$data['Dateofinspection']=$_REQUEST['Dateofinspection'];
				$data['Dateonwhichthevaluationismade']=$_REQUEST['Dateonwhichthevaluationismade'];
				$data['CommencementCertificateSanctionPlanNo']=$_REQUEST['CommencementCertificateSanctionPlanNo'];
				$data['CompletionOccupancyCertificateNo']=$_REQUEST['CompletionOccupancyCertificateNo'];
				$data['detailsofshareofeachowner']=$_REQUEST['detailsofshareofeachowner'];
				$data['Briefdescriptionoftheproperty']=$_REQUEST['Briefdescriptionoftheproperty'];
				$data['PlotNoSurveyNo']=$_REQUEST['PlotNoSurveyNo'];
				$data['DoorNo']=$_REQUEST['DoorNo'];
				$data['TSNoVillage']=$_REQUEST['TSNoVillage'];
				$data['WardTaluka']=$_REQUEST['WardTaluka'];
				$data['MandalDistrict']=$_REQUEST['MandalDistrict'];
				$data['Dateofissue']=$_REQUEST['Dateofissue'];
				$data['Approvedmap']=$_REQUEST['Approvedmap'];
				$data['authenticityofapprovedmap']=$_REQUEST['authenticityofapprovedmap'];
				$data['empaneledvaluers']=$_REQUEST['empaneledvaluers'];
				$data['Postaladdressoftheproperty']=$_REQUEST['Postaladdressoftheproperty'];
				$data['City']=$_REQUEST['City'];
				$data['ResidentialArea']=$_REQUEST['ResidentialArea'];
				$data['CommercialArea']=$_REQUEST['CommercialArea'];
				$data['IndustrialArea']=$_REQUEST['IndustrialArea'];
				$data['HighMiddlePoor']=$_REQUEST['HighMiddlePoor'];
				$data['UrbanSemIUrbanRural']=$_REQUEST['UrbanSemIUrbanRural'];
				$data['Municipality']=$_REQUEST['Municipality'];
				$data['CentralGovtenactments']=$_REQUEST['CentralGovtenactments'];
				$data['Boundariesoftheproperty']=$_REQUEST['Boundariesoftheproperty'];
				$data['East']=$_REQUEST['East'];
				$data['West']=$_REQUEST['West'];
				$data['North']=$_REQUEST['North'];
				$data['South']=$_REQUEST['South'];
				$data['DimensionsofthesiteNorth']=$_REQUEST['DimensionsofthesiteNorth'];
				$data['DimensionsofthesiteNorthActual']=$_REQUEST['DimensionsofthesiteNorthActual'];
				
				$data['DimensionsofthesiteSouth']=$_REQUEST['DimensionsofthesiteSouth'];
				$data['DimensionsofthesiteSouthActual']=$_REQUEST['DimensionsofthesiteSouthActual'];
				$data['DimensionsofthesiteEast']=$_REQUEST['DimensionsofthesiteEast'];
				$data['DimensionsofthesiteEastActual']=$_REQUEST['DimensionsofthesiteEastActual'];
				$data['DimensionsofthesiteWest']=$_REQUEST['DimensionsofthesiteWest'];
				$data['DimensionsofthesiteWestActual']=$_REQUEST['DimensionsofthesiteWestActual'];
				$data['Extentofthesite']=$_REQUEST['Extentofthesite'];
				$data['LatitudeLongitude']=$_REQUEST['LatitudeLongitude'];
				$data['Extentofthesiteconsideredforvaluation']=$_REQUEST['Extentofthesiteconsideredforvaluation'];
				$data['Rentreceivedpermonth']=$_REQUEST['Rentreceivedpermonth'];
				$data['NatureoftheApartment']=$_REQUEST['NatureoftheApartment'];
				$data['Location']=$_REQUEST['Location'];
				$data['TSNoVillage2']=$_REQUEST['TSNoVillage2'];
				$data['BlockNo']=$_REQUEST['BlockNo'];
				$data['WardNo']=$_REQUEST['WardNo'];
				$data['VillageMunicipalityCorporation']=$_REQUEST['VillageMunicipalityCorporation'];
				$data['DoorNo']=$_REQUEST['DoorNo'];
				$data['DescriptionofthelocalityResidential']=$_REQUEST['DescriptionofthelocalityResidential'];
				$data['YearofConstruction']=$_REQUEST['YearofConstruction'];
				$data['NumberofFloors']=$_REQUEST['NumberofFloors'];
				$data['TypeofStructure']=$_REQUEST['TypeofStructure'];
				$data['NumberofDwellingunitsinthebuilding']=$_REQUEST['NumberofDwellingunitsinthebuilding'];
				
				$data['QualityofConstruction']=$_REQUEST['QualityofConstruction'];
				
				$data['AppearanceoftheBuilding']=$_REQUEST['AppearanceoftheBuilding'];
				
				$data['MaintenanceoftheBuilding']=$_REQUEST['MaintenanceoftheBuilding'];
				
				$data['FacilitiesAvailable']=$_REQUEST['FacilitiesAvailable'];
				
				$data['Lift']=$_REQUEST['Lift'];
				
				$data['ProtectedWaterSupply']=$_REQUEST['ProtectedWaterSupply'];
				
				$data['UndergroundSewerage']=$_REQUEST['UndergroundSewerage'];
				
				$data['CarParking']=$_REQUEST['CarParking'];
				
				$data['DoesCompoundwallexist']=$_REQUEST['DoesCompoundwallexist'];
				
				$data['Ispavementlaidaroundthebuilding']=$_REQUEST['Ispavementlaidaroundthebuilding'];
				
				$data['Thefloorsituated']=$_REQUEST['Thefloorsituated'];
				
				$data['DoorNoflat']=$_REQUEST['DoorNoflat'];
				
				$data['Specificationsflat']=$_REQUEST['Specificationsflat'];
				
				$data['Roof']=$_REQUEST['Roof'];
				
				$data['Flooring']=$_REQUEST['Flooring'];
				
				$data['Doors']=$_REQUEST['Doors'];
				
				$data['Windows']=$_REQUEST['Windows'];
				
				$data['Fittings']=$_REQUEST['Fittings'];
				
				$data['Finishing']=$_REQUEST['Finishing'];
				
				$data['FlatTax']=$_REQUEST['FlatTax'];
				
				$data['AssessmentNo']=$_REQUEST['AssessmentNo'];
				
				$data['Taxpaidname']=$_REQUEST['Taxpaidname'];
				
				$data['Taxamount']=$_REQUEST['Taxamount'];
				
				$data['ElectricityServiceConnectionno']=$_REQUEST['ElectricityServiceConnectionno'];
				
				$data['MeterCardname']=$_REQUEST['MeterCardname'];
				
				$data['maintenanceflat']=$_REQUEST['maintenanceflat'];
				
				$data['Agreementexecuted']=$_REQUEST['Agreementexecuted'];
				
				$data['undividedarealand']=$_REQUEST['undividedarealand'];
				
				$data['plinthareaflat']=$_REQUEST['plinthareaflat'];
				
				$data['floorspaceindex']=$_REQUEST['floorspaceindex'];
				
				$data['CarpetAreaflat']=$_REQUEST['CarpetAreaflat'];
				
				$data['IsitPosh']=$_REQUEST['IsitPosh'];
				
				$data['usedforResidential']=$_REQUEST['usedforResidential'];
				
				$data['Owneroccupied']=$_REQUEST['Owneroccupied'];
				
				$data['monthlyrent']=$_REQUEST['monthlyrent'];
				
				$data['marketability']=$_REQUEST['marketability'];
				
				$data['PotentialValue']=$_REQUEST['PotentialValue'];
				
				$data['negativefactors']=$_REQUEST['negativefactors'];
				
				$data['compositerate']=$_REQUEST['compositerate'];
				
				$data['newconstruction']=$_REQUEST['newconstruction'];
				
				$data['Breakrate']=$_REQUEST['Breakrate'];
				
				$data['BuildingServices']=$_REQUEST['BuildingServices'];
				
				$data['LandOthers']=$_REQUEST['LandOthers'];
				
				$data['Guidelinerate']=$_REQUEST['Guidelinerate'];
				
				$data['InsuranceValue']=$_REQUEST['InsuranceValue'];
				
				$data['Depreciatedbuildingrate']=$_REQUEST['Depreciatedbuildingrate'];
				
				$data['Replacementcostofflat']=$_REQUEST['Replacementcostofflat'];
				
				$data['Agebuilding']=$_REQUEST['Agebuilding'];
				
				$data['Lifebuilding']=$_REQUEST['Lifebuilding'];
				
				$data['Depreciationpercentage']=$_REQUEST['Depreciationpercentage'];
				
				$data['DepreciatedRateConstruction']=$_REQUEST['DepreciatedRateConstruction'];
				
				$data['Totalcompositerate']=$_REQUEST['Totalcompositerate'];
				
				$data['DepreciatedbuildingrateVI']=$_REQUEST['DepreciatedbuildingrateVI'];
				
				$data['RateforLand']=$_REQUEST['RateforLand'];
				
				$data['TotalCompositeRate']=$_REQUEST['TotalCompositeRate'];
				
				
				// echo 	$_REQUEST['Subject'];die;
				$Today_date = date("Y-m-d");
				
				if($_REQUEST['flag']=='pdf')
				{
					$Export_file_name = 'FlatForm-'.$Today_date;
					$data['records']=0;
					$html = $this->load->view('pdf_export_flat_florm', $data, true);
					$this->m_pdf->pdf->WriteHTML($html);
					$this->m_pdf->pdf->Output($Export_file_name . ".pdf", "D");
				}
				
				if($_REQUEST['flag']=='word')
				{
					header("Content-Type: application/vnd.ms-word");
					header("Expires: 0");
					header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
					header("Content-disposition: attachment; filename=\"word_export_flat_florm.doc\"");

					$output = $this->load->view("pdf_export_flat_florm", $data);
				}
				
				
				
				// echo $data;
				// exit;

				// $this->session->set_flashdata("success_code","PDF generated successfully !!!");
				
				// redirect('Home/FlatForm', 'refresh');
		}	
		
	}
	
	public function pdf_export_flat_florm()
	{
			$Today_date = date("Y-m-d");
			$Export_file_name = 'FlatForm-'.$Today_date;
			$data['records']=0;
			$html = $this->load->view('pdf_export_flat_florm', $data, true);
			$this->m_pdf->pdf->WriteHTML($html);
			$this->m_pdf->pdf->Output($Export_file_name . ".pdf", "D");
	}
	
	public function UploadImages()
	{
		if ($_POST == NULL) {
		$this->load->view('UploadImagesView');
		}
		else
		{
			 $this->load->library('image_lib');
			/*-----------------------------------Images1-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images1');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images1']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images2-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images2');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images2']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images3-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images3');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images3']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images4-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images4');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images4']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images5-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images5');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images5']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images6-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images6');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images6']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images7-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images7');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images7']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images8-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images8');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images8']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images9-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images9');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images9']=base_url().'images/'.$data22['file_name'];
			}
			
			/*-----------------------------------Images10-----------------------------*/
				
			$config = array
			(
				'allowed_types'     => 'jpg|jpeg|gif|png', //only accept these file types
				'encrypt_name'    => false,
				'upload_path'       => './images/' //upload directory
			);
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			$upload22 = $this->upload->do_upload('Images10');
			$data22 = $this->upload->data();			   
			if($data22['is_image'] == 1) 
			{						 
				$data['Images10']=base_url().'images/'.$data22['file_name'];
			}
					
			
			$Today_date = date("Y-m-d");
			$Export_file_name = 'UploadedImages-'.$Today_date;
			$html = $this->load->view('pdf_UploadedImages', $data, true);
			$this->m_pdf->pdf->WriteHTML($html);
			
			$this->m_pdf->pdf->Output($Export_file_name . ".pdf", "D");
			redirect('Home/UploadImages', 'refresh');
		}	
	}
	
}
