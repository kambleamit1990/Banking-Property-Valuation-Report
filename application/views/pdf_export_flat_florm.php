<!DOCTYPE html>
<html>
<head>
<style>

div.hidden {border-style: hidden;}
.table2, tr, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>
<?php
function Get_number_in_char($number)
{
	$no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
	return $result;
}

?>

<table width="100%" class='table2'>
	<tr>
		
		<th colspan='20' align='right'><h1>ROHIDA LAXMAN T.</h1>
						<p>(B.Arch. A.I.I.A, F.I.V.)</p></th>
	</tr>
	
	<tr>
		<td colspan='10'>
			<ul>
				<li>GOVT. APPROVED REGISTERED VALUER</li>
				<li>ARCHITECT ENGINEER</li>
				<li>INTERIOR DESIGNER</li>
				<li>ARBITRATOR</li>
				</ul>
		
		</td>
		<td  colspan='10'>Registered Valuer / CAT – I / 663 /2002-03 PUNE.<br>Registered ARCHITECT / CA / 86 /9998 DELHI.<br>Registered Interior of   I. I. I. D<br>Reg. Arbitrator Indian Council of Arbitration</td>
	</tr>
	<tr>
		<td colspan='10'>&nbsp;405-B, 4th Floor, Sterling Centre, M. G. Road
			<br>&nbsp;Opp. Hotel Aurora Towers, Camp, Pune.
			<br>&nbsp;1060, M. G. Road, Telikhunt, Ahmednagar, 414001.</td>
		<td colspan='10' >Mobile: - 8208353897/9850648976<br>E-mail - rohidarch@hotmail.com<br>Ph.: - (0241) (0) 2347870, (R) 2424376</td>
	</tr>
<tr>
		<td colspan='20'>

		
			<br>
			REF. NO: - VAL / 140 / PAT
			<div style="text-align:right;margin-top: -20px;">Date: - 23/04/2024</div>
			
			<p>
			To,<BR>
						The Branch Manager, <BR>
						Canara Bank,<BR>
						Branch - Chinchwad, <BR>
						Pune.
			</p>
			
			<BR>
			<table style='border: 1px solid white;'>
				<tr style='border: 1px solid white;'>
					<td style='border: 1px solid white;'>Subject</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'> : <?php echo $Subject; ?></td>
				</tr>
				
				<tr style='border: 1px solid white;'>
					<td style='border: 1px solid white;'>Client Name</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'> : <?php echo $ClientName; ?></td>
				</tr>
				
				<tr style='border: 1px solid white;'>
					<td style='border: 1px solid white;'>Address of the property</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'> : <?php echo $AddressProperty; ?></td>
				</tr>
				
				<tr style='border: 1px solid white;'>
					<td style='border: 1px solid white;'>Fair Market Value</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'>&nbsp;</td>
					<td style='border: 1px solid white;'> : Rs. <?php echo number_format($FairMarketValue,2); ?>/-<BR>(Rs. <?php echo Get_number_in_char($FairMarketValue); ?> Only)</td>
				</tr>
				
			</table>
			
			<BR>
			<table class="table2" >
				<tr>
					<th>Realizable Value</th>
					<th>Distress Value</th>
				</tr>
				
				<tr>
					<td >Rs.81,09,000/-<br>(Rs. Eighty-One Lacs & Nine Thousand Only)</td>
					<td>Rs.72,08,000/-(Rs. Seventy-Two Lacs & Eight Thousand      Only)</td>
				</tr>
				
				
			</table>
			
			
			Respected Sir,
			<br><br>
We are enclosing here with a valuation report in particular format. The valuation given in this report is as per my best knowledge. We have visited to the said property in presence of Representative.Report contains 11 pages including photographs.Kindly acknowledge the receipt.<br><br>
			<p style='text-align:right;' align='right'>
			LAXMAN T. ROHIDA 2222<br>PANEL VALUER <br>CANARA BANK</p>
			<br><br><br>
			
</td></tr>			
</table>



			

		<div> 
						<h2 style="text-align:center">VALUATION REPORT (IN RESPECT OF FLATS)</h2>
						<p  style="text-align:center">(To be filled in by the Approved Valuer)</p>
							
			</div>	
		
		<table class="table2" width="100%;">
				<tr>
					<td >I.</td>
					<td colspan='4'><b>GENERAL</b></td>
					
				</tr>
				
				<tr>
					<td >1.</td>
					<td colspan='2'>Purpose for which the valuation is made</td>
					<td >:</td>
					<td><?php echo $Purposeforwhichthevaluationismade; ?>
					</td>
				</tr>
				
				<tr>
					<td rowspan='2'>2.</td>
					<td>a)</td>
					<td >Date of inspection</td>
					<td>:</td>
					<td><?php echo $Dateofinspection; ?></td>
				</tr>
				
				<tr>
					
					<td>b)</td>
					<td >Date on which the valuation is made</td>
					<td>:</td>
					<td><?php echo $Dateonwhichthevaluationismade; ?></td>
				</tr>
				<tr>
					<td rowspan='4'>3.</td>
					<td  colspan='2'>List of documents produced for perusal</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					
					<td colspan='2'>i) Agreement / Index ii </td>
					<td>:</td>
					<td><?php echo $AgreementIndexii; ?></td>
				</tr>
			
				<tr>
					
					<td colspan='2'>ii) Commencement Certificate / Sanction Plan 
    No. </td>
					<td>:</td>
					<td><?php echo $CommencementCertificateSanctionPlanNo; ?></td>
				</tr>
			
				<tr>
					
					<td colspan='2'>iii) Completion / Occupancy Certificate No.</td>
					<td>:</td>
					<td><?php echo $CompletionOccupancyCertificateNo; ?></td>
				</tr>
			
			<tr>
					<td >4.</td>
					<td colspan='2'>Name of the owner(s) and his / their address (es) with Phone no. (details of share of each owner in case of joint ownership)</td>
					<td >:</td>
					<td><?php echo $detailsofshareofeachowner; ?></td>
				</tr>
				
				<tr>
					<td >5.</td>
					<td colspan='2'>Brief description of the property</td>
					<td >:</td>
					<td><?php echo $Briefdescriptionoftheproperty; ?></td>
				</tr>
				
				
				<tr>
					<td rowspan='10'>6.</td>
					<td colspan='4'>Location of property</td>
					
				</tr>
				
				<tr>
					<td>a)</td>
					<td >Plot No. / Survey No.</td>
					<td>:</td>
					<td><?php echo $PlotNoSurveyNo; ?></td>
				</tr>
				
				<tr>
					<td>b)</td>
					<td >Door No.</td>
					<td>:</td>
					<td><?php echo $DoorNo; ?></td>
				</tr>
				
				<tr>
					<td>c)</td>
					<td >T. S. No. / Village</td>
					<td>:</td>
					<td><?php echo $TSNoVillage; ?></td>
				</tr>
				
				<tr>
					<td>d)</td>
					<td >Ward / Taluka</td>
					<td>:</td>
					<td><?php echo $WardTaluka; ?></td>
				</tr>
				
				<tr>
					<td>e)</td>
					<td >Mandal / District</td>
					<td>:</td>
					<td><?php echo $MandalDistrict; ?></td>
				</tr>
				
				<tr>
					<td>f)</td>
					<td >Date of issue and validity of layout of approved map / plan</td>
					<td>:</td>
					<td><?php echo $Dateofissue; ?></td>
				</tr>
				
				<tr>
					<td>g)</td>
					<td >Approved map / plan issuing authority</td>
					<td>:</td>
					<td><?php echo $Approvedmap; ?></td>
				</tr>
				
				<tr>
					<td>h)</td>
					<td >Whether genuineness or authenticity of approved map / plan is verified</td>
					<td>:</td>
					<td><?php echo $authenticityofapprovedmap; ?></td>
				</tr>
				
				<tr>
					<td>i)</td>
					<td >Any other comments by our empaneled
valuers on authentic of approved plan
</td>
					<td>:</td>
					<td><?php echo $empaneledvaluers; ?></td>
				</tr>
				
				
				<tr>
					<td >7.</td>
					<td colspan='2'>Postal address of the property</td>
					<td >:</td>
					<td><?php echo $Postaladdressoftheproperty; ?></td>
				</tr>
				
				<tr>
					<td  rowspan='4'>8.</td>
					<td colspan='2'>City / Town</td>
					<td >:</td>
					<td><?php echo $City; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Residential Area</td>
					<td >:</td>
					<td><?php echo $ResidentialArea; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Commercial Area</td>
					<td >:</td>
					<td><?php echo $CommercialArea; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Industrial Area</td>
					<td >:</td>
					<td><?php echo $IndustrialArea; ?></td>
				</tr>
				
				
				
				<tr>
					<td  rowspan='3'>9.</td>
					<td colspan='2'>Classification of the area</td>
					<td >:</td>
					<td>&nbsp;</td>
				</tr>
				
				<tr>
					<td>i)</td>
					<td>High / Middle / Poor</td>
					<td >:</td>
					<td><?php echo $HighMiddlePoor; ?></td>
				</tr>
				
				<tr>
					<td>ii)</td>
					<td>Urban / Semi Urban / Rural</td>
					<td >:</td>
					<td><?php echo $UrbanSemIUrbanRural; ?></td>
				</tr>
				
				
				<tr>
					<td>10.</td>
					<td colspan='2'>Coming	under	Corporation limit	/Village
Panchayat / Municipality</td>
					<td >:</td>
					<td><?php echo $Municipality; ?></td>
				</tr>
			
				<tr>
					<td>11.</td>
					<td colspan='2'>Whether covered under any State / Central Govt. enactments (e.g. Urban Land Ceiling Act) or notified under agency area /
scheduled area / cantonment area
</td>
					<td >:</td>
					<td><?php echo $CentralGovtenactments; ?></td>
				</tr>
				
				
				
				<tr>
					<td  rowspan='5'>12.</td>
					<td colspan='2'>Boundaries of the property</td>
					<td >:</td>
					<td><?php echo $Boundariesoftheproperty; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>East</td>
					<td >:</td>
					<td><?php echo $East; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>West</td>
					<td >:</td>
					<td><?php echo $West; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>North</td>
					<td >:</td>
					<td><?php echo $North; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>South</td>
					<td >:</td>
					<td><?php echo $South; ?></td>
				</tr>
				
				<tr>
					<td>13.</td>
					<td colspan='2'>Dimensions of the site</td>
					<td >:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As per the Deed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actual</td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>North</td>
					<td >:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteNorth; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteNorthActual; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>South</td>
					<td >:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteSouth; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteSouthActual; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>East</td>
					<td >:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteEast; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteEastActual; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>West</td>
					<td >:</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteWest; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DimensionsofthesiteWestActual; ?></td>
				</tr>
				
				
				<tr>
					<td>14.</td>
					<td colspan='2'>Extent of the site</td>
					<td >:</td>
					<td><?php echo $Extentofthesite; ?></td>
				</tr>
				
				<tr>
					<td>14.1</td>
					<td colspan='2'>Latitude, Longitude & Co-ordinates of flat</td>
					<td >:</td>
					<td><?php echo $LatitudeLongitude; ?></td>
				</tr>
				
				<tr>
					<td>15.</td>
					<td colspan='2'>Extent of the site considered for valuation (least of 13 A & 13 B)</td>
					<td >:</td>
					<td><?php echo $Extentofthesiteconsideredforvaluation; ?></td>
				</tr>
				
				<tr>
					<td>16.</td>
					<td colspan='2'>Whether occupied by the owner / tenant? If
Occupied by tenant, since how long? Rent received per month.
</td>
					<td >:</td>
					<td><?php echo $Rentreceivedpermonth; ?></td>
				</tr>
				<tr>
					<td >II.</td>
					<td colspan='4'><b>APARTMENT BUILDING</b></td>
					
				</tr>
				
				
				<tr>
					<td>1.</td>
					<td colspan='2'>Nature of the Apartment</td>
					<td >:</td>
					<td><?php echo $NatureoftheApartment; ?></td>
				</tr>
				
				<tr>
					<td>2.</td>
					<td colspan='2'>Location</td>
					<td >:</td>
					<td><?php echo $Location; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>T. S. No. / Village</td>
					<td >:</td>
					<td><?php echo $TSNoVillage2; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Block No.</td>
					<td >:</td>
					<td><?php echo $BlockNo; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Ward No.</td>
					<td >:</td>
					<td><?php echo $WardNo; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Village/ Municipality / Corporation</td>
					<td >:</td>
					<td><?php echo $VillageMunicipalityCorporation; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Door No., Street or Road (Pin Code)</td>
					<td >:</td>
					<td><?php echo $DoorNo; ?></td>
				</tr>
				
				<tr>
					<td>3.</td>
					<td colspan='2'>Description of the locality Residential /
Commercial / Mixed
</td>
					<td >:</td>
					<td><?php echo $DescriptionofthelocalityResidential; ?></td>
				</tr>
				
				<tr>
					<td>4.</td>
					<td colspan='2'>Year of Construction</td>
					<td >:</td>
					<td><?php echo $YearofConstruction; ?></td>
				</tr>
				
				<tr>
					<td>5.</td>
					<td colspan='2'>Number of Floors</td>
					<td >:</td>
					<td><?php echo $NumberofFloors; ?></td>
				</tr>
				
				<tr>
					<td>6.</td>
					<td colspan='2'>Type of Structure</td>
					<td >:</td>
					<td><?php echo $TypeofStructure; ?></td>
				</tr>
				
				<tr>
					<td>7.</td>
					<td colspan='2'>Number of Dwelling units in the building</td>
					<td >:</td>
					<td><?php echo $NumberofDwellingunitsinthebuilding; ?></td>
				</tr>
				
				<tr>
					<td>8.</td>
					<td colspan='2'>Quality of Construction</td>
					<td >:</td>
					<td><?php echo $QualityofConstruction; ?></td>
				</tr>
				
				<tr>
					<td>9.</td>
					<td colspan='2'>Appearance of the Building</td>
					<td >:</td>
					<td><?php echo $AppearanceoftheBuilding; ?></td>
				</tr>
				
				<tr>
					<td>10.</td>
					<td colspan='2'>Maintenance of the Building</td>
					<td >:</td>
					<td><?php echo $MaintenanceoftheBuilding; ?></td>
				</tr>
				
				<tr>
					<td>11.</td>
					<td colspan='2'>Facilities Available</td>
					<td >:</td>
					<td><?php echo $FacilitiesAvailable; ?></td>
				</tr>
				
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Lift</td>
					<td >:</td>
					<td><?php echo $Lift; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Protected Water Supply</td>
					<td >:</td>
					<td><?php echo $ProtectedWaterSupply; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Underground Sewerage</td>
					<td >:</td>
					<td><?php echo $UndergroundSewerage; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Car Parking - Open/ Covered</td>
					<td >:</td>
					<td><?php echo $CarParking; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Does Compound wall exist?</td>
					<td >:</td>
					<td><?php echo $DoesCompoundwallexist; ?></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td colspan='2'>Is pavement laid around the building</td>
					<td >:</td>
					<td><?php echo $Ispavementlaidaroundthebuilding; ?></td>
				</tr>
				
				<tr>
					<td >III.</td>
					<td colspan='4'><b>FLAT</b></td>
					
				</tr>
				<tr>
					<td>1.</td>
					<td colspan='2'>The floor on which the flat is situated</td>
					<td >:</td>
					<td><?php echo $Thefloorsituated; ?></td>
				</tr>
				
				<tr>
					<td>2.</td>
					<td colspan='2'>Door No. of the flat</td>
					<td >:</td>
					<td><?php echo $DoorNoflat; ?></td>
				</tr>
				
				<tr>
					<td rowspan='7'>3.</td>
					<td colspan='2'>Specifications of the flat</td>
					<td >:</td>
					<td><?php echo $Specificationsflat; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Roof</td>
					<td >:</td>
					<td><?php echo $Roof; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Flooring</td>
					<td >:</td>
					<td><?php echo $Flooring; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Doors</td>
					<td >:</td>
					<td><?php echo $Doors; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Windows</td>
					<td >:</td>
					<td><?php echo $Windows; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Fittings</td>
					<td >:</td>
					<td><?php echo $Fittings; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Finishing</td>
					<td >:</td>
					<td><?php echo $Finishing; ?></td>
				</tr>
				
				<tr>
					<td rowspan='4'>4.</td>
					<td colspan='2'>Flat Tax</td>
					<td >:</td>
					<td><?php echo $FlatTax; ?> </td>
				</tr>
				
				<tr>
					<td colspan='2'>Assessment No.</td>
					<td >:</td>
					<td><?php echo $AssessmentNo; ?> </td>
				</tr>
				
				<tr>
					<td colspan='2'>Tax paid in the name of</td>
					<td >:</td>
					<td><?php echo $Taxpaidname; ?> </td>
				</tr>
				
				<tr>
					<td colspan='2'>Tax amount</td>
					<td >:</td>
					<td><?php echo $Taxamount; ?> </td>
				</tr>
				
				<tr>
					<td rowspan='2'>5.</td>
					<td colspan='2'>Electricity Service Connection no.</td>
					<td >:</td>
					<td><?php echo $ElectricityServiceConnectionno; ?> </td>
				</tr>
				
				<tr>
					<td colspan='2'>Meter Card is in the name of</td>
					<td >:</td>
					<td><?php echo $MeterCardname; ?></td>
				</tr>
				
				<tr>
					<td>6.</td>
					<td colspan='2'>How is the maintenance of the flat?</td>
					<td >:</td>
					<td><?php echo $maintenanceflat; ?></td>
				</tr>
				
				<tr>
					<td>7.</td>
					<td colspan='2'>Agreement executed in the name of</td>
					<td >:</td>
					<td><?php echo $Agreementexecuted; ?></td>
				</tr>
				
				<tr>
					<td>8.</td>
					<td colspan='2'>What is the undivided area of land as per
Deed?
</td>
					<td >:</td>
					<td><?php echo $undividedarealand; ?></td>
				</tr>
				
				<tr>
					<td>9.</td>
					<td colspan='2'>What is the plinth area of the flat?</td>
					<td >:</td>
					<td><?php echo $plinthareaflat; ?> </td>
				</tr>
				
				<tr>
					<td>10.</td>
					<td colspan='2'>What is the floor space index (app.)</td>
					<td >:</td>
					<td><?php echo $floorspaceindex; ?></td>
				</tr>
				
				<tr>
					<td>11.</td>
					<td colspan='2'>What is the Carpet Area of the flat?</td>
					<td >:</td>
					<td><?php echo $CarpetAreaflat; ?> </td>
				</tr>
				
				<tr>
					<td>12.</td>
					<td colspan='2'>Is it Posh/ I class / Medium / Ordinary?</td>
					<td >:</td>
					<td><?php echo $IsitPosh; ?></td>
				</tr>
				
				<tr>
					<td>13.</td>
					<td colspan='2'>Is it being used for Residential or Commercial
Purpose?
</td>
					<td >:</td>
					<td><?php echo $usedforResidential; ?></td>
				</tr>
				
				<tr>
					<td>14.</td>
					<td colspan='2'>Is it Owner-occupied or let out?</td>
					<td >:</td>
					<td><?php echo $Owneroccupied; ?></td>
				</tr>
				
				<tr>
					<td>15.</td>
					<td colspan='2'>If rented, what is the monthly rent?</td>
					<td >:</td>
					<td><?php echo $monthlyrent; ?></td>
				</tr>
				
				<tr>
					<td >IV.</td>
					<td colspan='4'><b>MARKETABILITY</b></td>
					
				</tr>
				<tr>
					<td>1.</td>
					<td colspan='2'>How is the marketability?</td>
					<td >:</td>
					<td><?php echo $marketability; ?></td>
				</tr>
				
				<tr>
					<td>2.</td>
					<td colspan='2'>What are the factors favoring for an extra
Potential Value?
</td>
					<td >:</td>
					<td><?php echo $PotentialValue; ?></td>
				</tr>
				
				<tr>
					<td>3.</td>
					<td colspan='2'>Any negative factors are observed which affect
The market value in general?
</td>
					<td >:</td>
					<td><?php echo $negativefactors; ?></td>
				</tr>
				
				
				<tr>
					<td >V.</td>
					<td colspan='4'><b>Rate</b></td>
					
				</tr>
				<tr>
					<td>1.</td>
					<td colspan='2'>After analyzing the comparable sale instances, what is the composite rate for a similar flat with same specifications in the adjoining   locality?   -(Along   with   details /reference of at-least	two
Latest deals/transactions with respect to adjacent properties in the areas)
</td>
					<td >:</td>
					<td><?php echo $compositerate; ?></td>
				</tr>
				
				<tr>
					<td>2.</td>
					<td colspan='2'>Assuming it is a new construction, what is the adopted basic composite rate of the flat under valuation after comparing with the specifications and other factors with the flat under comparison (Give details).
</td>
					<td >:</td>
					<td><?php echo $newconstruction; ?></td>
				</tr>
				
				<tr>
					<td rowspan='3'>3.</td>
					<td colspan='2'>Break - up for the rate
</td>
					<td >:</td>
					<td><?php echo $Breakrate; ?></td>
				</tr>
				
				<tr>
					<td>i)</td>
					<td >Building + Services</td>
					<td >:</td>
					<td><?php echo $BuildingServices; ?></td>
				</tr>
				
				<tr>
					<td>ii)</td>
					<td >Land + Others</td>
					<td >:</td>
					<td><?php echo $LandOthers; ?></td>
				</tr>
				
				
				<tr>
					<td>4.</td>
					<td colspan='2'>Guideline rate obtained from the Registrar's office (an evidence thereof to be enclosed)
</td>
					<td >:</td>
					<td><?php echo $Guidelinerate; ?></td>
				</tr>
				
				<tr>
					<td>5.</td>
					<td colspan='2'>Insurance Value</td>
					<td >:</td>
					<td><?php echo $InsuranceValue; ?> </td>
				</tr>
				
				
				
				<tr>
					<td >VI.</td>
					<td colspan='4'><b>COMPOSITE RATE ADOPTED AFTER DEPRECIATION</b></td>
					
				</tr>
				<tr>
					<td rowspan='6'>a.</td>
					<td colspan='2'>Depreciated building rate for Construction</td>
					<td >:</td>
					<td><?php echo $Depreciatedbuildingrate; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Replacement cost of flat with Services {V (3)i}</td>
					<td >:</td>
					<td><?php echo $Replacementcostofflat; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Age of the building</td>
					<td >:</td>
					<td><?php echo $Agebuilding; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Life of the building estimated</td>
					<td >:</td>
					<td><?php echo $Lifebuilding; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Depreciation percentage assuming the salvage value as 10%</td>
					<td >:</td>
					<td><?php echo $Depreciationpercentage; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Depreciated Rate of Construction of Building</td>
					<td >:</td>
					<td><?php echo $DepreciatedRateConstruction; ?></td>
				</tr>
				
				<tr>
					<td rowspan='4'>b.</td>
					<td colspan='2'>Total composite rate arrived for valuation</td>
					<td >:</td>
					<td><?php echo $Totalcompositerate; ?></td>
				</tr>
				<tr>
					<td colspan='2'>Depreciated building rate VI (a)</td>
					<td >:</td>
					<td><?php echo $DepreciatedbuildingrateVI; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Rate for Land & other V (3)ii</td>
					<td >:</td>
					<td><?php echo $RateforLand; ?></td>
				</tr>
				
				<tr>
					<td colspan='2'>Total Composite Rate</td>
					<td >:</td>
					<td><?php echo $TotalCompositeRate; ?></td>
				</tr>
				
				</table>
				<BR>
			<table>	
				<tr>
					<th colspan='5' align='left'><h4>Details of Valuation:</h4></th>
				</tr>
				
				<tr>
					<td><b>Sr.No.</b></td>
					<td  width='500px'><b>Description</b></td>
					<td><b>Qty/Area</b></td>
					<td><b>Rate per unit Rs.</b></td>
					<td><b>Estimated Value Rs.</b></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Present value of the flat (including Services and amenities)</td>
					<td>45.05Sqm</td>
					<td>200000/-</td>
					<td>9010000/-</td>
				</tr>
				
				<tr>
					<td>2</td>
					<td>Wardrobes</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>3</td>
					<td>Showcases</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>4</td>
					<td>Kitchen Arrangements</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>5</td>
					<td>Superfine Finish</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>6</td>
					<td>Interior Decorations (Additional Fix Furniture)</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>7</td>
					<td>Electricity	deposits	/	electrical fittings, etc.,</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>8</td>
					<td>Extra collapsible gates / grill works etc.,</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>9</td>
					<td>Potential value, if any</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>10</td>
					<td>Others (Covered & Reserved Car Parking)</td>
					<td>0</td>
					<td>-</td>
					<td>-</td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td><b>Total</td>
					<td><b>0</td>
					<td><b>&nbsp;</td>
					<td><b>9010000/-</td>
				</tr>
				
				<tr>
					<td><b>&nbsp;</td>
					<td><b>Say</td>
					<td><b>0</td>
					<td>&nbsp;</td>
					<td><b>Rs.90,10,000/-</b></td>
				</tr>
				
		</table>
		
		<p><b>(Valuation: Here, the approved valuer should discuss in details his approach (Market Approach, Income Approach and Cost Approach) to valuation of property and indicate how the value has been arrived at, supported by necessary calculation. Also, such aspects as impending threat of acquisition by government for road widening / public service purposes, sub merging & applicability of CRZ provisions (Distance from sea-coast / tidal level must be incorporated) and their effect on i) Saleability ii) Likely rental value in future and iii) any likely income it may generate may be discussed).</p>
		<p><b>We have valued the plot with market approach & valued the construction with cost approach also the said property has good salability since it is in good location of Pimpri Waghere, Tal. Haveli, Pune & above Valuation is also matching with income approach of current market rate situations.</b></p>
		<p>Photograph of property– <b>Enclosed with Report.</b></p>
		<p>Details	of	longitude/latitude	and	co-ordinates	of	property	using	GPS/Various Apps/Internet sites - <b>Enclosed with Report.</b></p>
		<p>As a result of my appraisal and analysis, it is my considered opinion that the present fair market value of the above property in the prevailing condition with aforesaid specifications is Rs.90,10,000/- (Rupees Ninety Lacs & Ten Thousand Only) The Realizable                value of the above property is Rs.81,09,000/- and the distress value Rs.72,08,000/-</p>
		<br><br><br><br>
		<p>Place : Pune <br>Date  :23/04/2024</p>
		<div align='right'>Signature<br>
(Name and Official Seal of the Approved Valuer)</div>

	<br><br>
		<p>The undersigned has inspected the property detailed in the Valuation Report dated__________________________
 	on	__________________________. We are satisfied that the fair and reasonable market value of the property is Rs.__________________________		

</p>
<br><br><br><br>
		<p>Place : Pune <br>Date  :23/04/2024</p>
		<div align='right'>Signature<br>
(Name and Official Seal of the Approved Valuer)</div>
	<br><br><br><br><br><br><br><br><br><br>
		<h4 align='center'><u>DECLARATION & REMARKS</u></h4>
		<br>I hereby declare that-
		<br>a)	The information furnished in my valuation report dated 23/04/2024 is true and correct to the best of my knowledge and belief and I have made an impartial and true valuation of the property.
		<br>b)	I have no direct or indirect interest in the property valued.
		<br>c)	I have / My representative personally inspected the property on 12/04/2024The work is not sub-contracted to any other valuer and report is carried out by myself.
		<br>d)	I have not been convicted of any offence and sentenced to a term of Imprisonment.
		<br>e)	I have not been found guilty of misconduct in my professional capacity.
		<br>f)	I have read the International Valuation Standards (IVS) and the report submitted to the Bank for the respective asset class is in conformity to the “Standards” as enshrined for valuation in the IVS in “General Standards” and “Asset Standards” as applicable.
		<br>g)	I abide by the Model Code of Conduct for empanelment of valuer in the Bank.
		<br>h)	I am registered under Section 34 AB of the Wealth Tax Act, 1957.
		<br>i)	I am the proprietor / partner / authorized official of the firm / company, who is competent to sign this valuation report.
		<br>j)	I am the proprietor / partner / authorized official of the firm / company, who is competent to sign this valuation report.
		<br>k)	This report is generated as per documents provided by bank or Client, kindly collect all required 
documents from client & also refer legal opinion before loan disbursement.
		<br>l)	Further, I hearby provide the following information.
		
		<table style='font-size: 12px;'>
		<tr>
			<td><b>Sr.No.</b></td>
			<td><b>Particulars</b></td>
			<td><b>Valuers Comments</b></td>
		</tr>
		<tr>
			<td>1.</td>
			<td>Background information of the asset being valued;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>2.</td>
			<td>Purpose of valuation and appointing authority</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>3.</td>
			<td>Identity of the valuer and any other experts involved in the Valuation;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>4.</td>
			<td>Disclosure of valuer interest or conflict, if any;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>5.</td>
			<td>Date of appointment, valuation date and date of report;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>6.</td>
			<td>Inspections and/or investigations undertaken;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>7.</td>
			<td>Nature	and sources of the information used or relied upon;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>8.</td>
			<td>Procedures adopted in carrying out the valuation and Valuation standards followed;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>9.</td>
			<td>Restrictions on use of the report, if any;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>10.</td>
			<td>Major factors that were taken into account during the valuation;</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		<tr>
			<td>11.</td>
			<td>Caveats, limitations and disclaimers to the extent they Explain or elucidate the limitations faced by valuer, which Shall not be for the purpose of limiting his responsibility for the valuation report.</td>
			<td>Provided in Valuation Report</td>
		</tr>
		
		</table>
		<br>
		Place: Pune <br>
		Date: 23/04/2024
<p align='right'>Signature<br>
(Name and Official Seal of the Approved Valuer)

</p>
<br><br><br><br><br><br><br><br>
		<div class="hidden">
			<div> 
						<h1 style="text-align:right">ROHIDA LAXMAN T.</h1>
						<p  style="text-align:right">(B.Arch. A.I.I.A, F.I.V.)</p>
							
			</div>	 
			<p>	
				<ul>
				<li>GOVT. APPROVED REGISTERED VALUER</li><div style="text-align:right;margin-top: -20px;">Registered Valuer / CAT – I / 663 /2002-03 PUNE.</div>
				<li>ARCHITECT ENGINEER</li><div style="text-align:right;margin-top: -20px;">Registered ARCHITECT / CA / 86 /9998 DELHI.</div>
				<li>INTERIOR DESIGNER</li><div style="text-align:right;margin-top: -20px;">Registered Interior of   I. I. I. D</div>
				<li>ARBITRATOR</li><div style="text-align:right;margin-top: -20px;">Reg. Arbitrator Indian Council of Arbitration</div>
				</ul>
			
			
						
			</p>
			</div>	 
			
			<div class="hidden">
			<br>
			&nbsp;405-B, 4th Floor, Sterling Centre, M. G. Road
			<br>&nbsp;Opp. Hotel Aurora Towers, Camp, Pune.
			<br>&nbsp;1060, M. G. Road, Telikhunt, Ahmednagar, 414001.
			<div style="text-align:right;margin-top: -60px;">Mobile: - 8208353897/9850648976<br>E-mail - rohidarch@hotmail.com<br>Ph.: - (0241) (0) 2347870, (R) 2424376</div>
			</div>
			<br>
			REF. NO: - VAL / 140 / PAT
			<div style="text-align:right;margin-top: -20px;">Date: - 23/04/2024</div>
			
			<p>
			To,<BR>
						The Branch Manager, <BR>
						Canara Bank,<BR>
						Branch - Chinchwad, <BR>
						Pune.
			</p>
			
			<p><b>SUBJECT -: CERTIFICATE ON VERIFICATION OF COPY OF SANCTION PLAN</b></p>
			<p><b>CLIENT NAME -: MR. KESHAVJI K. BHANUSHALI & MR. KRANTIKUMAR R. PATIL</b></p>
			
			<p>DEAR SIR / MADAM,</p>
			<p>WE HAVE VERIFIED THE PLAN NO. 51/2003 DATED 12/05/2003 REVISED – 89/2005 DATED 18/11/2005
   ISSUED BY PUNE MUNICIPAL CORPORATION & THIS PROPERTY IS AT MAUJE PIMPRI WAGHERE, CTS   
   NO. 4858, 4858/1, 4858/2, SURVEY NO.177, HISSA NO. 2, SURVEY NO. 187, HISSA NO. 2, SURVEY NO. 188, 
   HISSA NO. 2, PLOT NO. D-1 IN THAT SHOP NO.22, GROUND FLOOR, TULIPS - BUILDING, “SUKHWANI 
   CAMPUS” ON YASHWANTRAO CHAVAN ROAD, NEAR PIMPRI CHINCHWAD BUS STAND, 
   VALLABHNAGAR, PIMPRI WAGHERE, TAL. HAVELI, PUNE – 411018 & WE HEARBY CLARIFY THAT, THE PRESENT PROPERTY IS CONSTRUCTED AS PER PLAN OR PLAN PROVIDED BY CLIENT.

</p>
			<p>DATE	: 23/04/2024<br>PLACE   : PUNE</p>
			<p align='right'>LAXMAN T. ROHIDA<br>PANEL VALUER CANARA BANK</p>
			
			
			
		<br><br><br><br><br><br><br><br>
		<div class="hidden">
			<div> 
						<h1 style="text-align:right">ROHIDA LAXMAN T.</h1>
						<p  style="text-align:right">(B.Arch. A.I.I.A, F.I.V.)</p>
							
			</div>	 
			<p>	
				<ul>
				<li>GOVT. APPROVED REGISTERED VALUER</li><div style="text-align:right;margin-top: -20px;">Registered Valuer / CAT – I / 663 /2002-03 PUNE.</div>
				<li>ARCHITECT ENGINEER</li><div style="text-align:right;margin-top: -20px;">Registered ARCHITECT / CA / 86 /9998 DELHI.</div>
				<li>INTERIOR DESIGNER</li><div style="text-align:right;margin-top: -20px;">Registered Interior of   I. I. I. D</div>
				<li>ARBITRATOR</li><div style="text-align:right;margin-top: -20px;">Reg. Arbitrator Indian Council of Arbitration</div>
				</ul>
			
			
						
			</p>
			</div>	 
			<div class="hidden">
			<br>
			&nbsp;405-B, 4th Floor, Sterling Centre, M. G. Road
			<br>&nbsp;Opp. Hotel Aurora Towers, Camp, Pune.
			<br>&nbsp;1060, M. G. Road, Telikhunt, Ahmednagar, 414001.
			<div style="text-align:right;margin-top: -60px;">Mobile: - 8208353897/9850648976<br>E-mail - rohidarch@hotmail.com<br>Ph.: - (0241) (0) 2347870, (R) 2424376</div>
			</div>
			<br>
			REF. NO: - VAL / 140 / PAT
			<div style="text-align:right;margin-top: -20px;">Date: - 23/04/2024</div>
			
			<p>
			To,<BR>
						The Branch Manager, <BR>
						Canara Bank,<BR>
						Branch - Chinchwad, <BR>
						Pune.
			</p>
			
			<p>SUBJECT -: <b>BILL OF VALUATION FOR MR. KESHAVJI K. BHANUSHALI & MR. KRANTIKUMAR RAMCHANDRA PATIL, PROPERTY IN     PIMPRI WAGHERE, PUNE - 411018</b></p>
			
			<p>VALUER FEES FOR VALUATION = <b>Rs.4000/-</b></p>
			<p>THEREFORE, PLEASE BE PAY US <b>Rs.4000/-</b> IN WORDS  <b>“RUPEES FOUR THOUSAND ONLY”</b></p>
				
			<p align='center'>ISSUE DD OR CHEQUE OR BANK TRANSFER IN FAVOUR OF <br>ROHIDA LAXMAN T, SBI ACCOUNT NO 31002346265<br>
BRANCH: CHAUPATI KARANJA, AHMEDNAGAR, IFSC NUNMBER: SBIN0007309
</p>
		
			<p>DATE	: 23/04/2024<br>PLACE   : PUNE</p>
			<p align='right'>LAXMAN T. ROHIDA<br>PANEL VALUER CANARA BANK</p>
			
		
</body>
</html>


