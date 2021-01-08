<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Outgrowers Extension</title>
		<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/>
		<link rel="index" title="index" href="genindex.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title=""Welcome To AMS User Guide" href="general/welcome.html"/>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>	
	</head>
	<body class="wy-body-for-nav" role="document" style=""><!-- creates the vertical navbar on the left -->
		<div id="nav">
			<div id="nav-inner">
				<div id="pulldown-menu" class="ciNav"></div>
			</div>
		</div>
		<div class="wy-div-for-nav">
			<nav data-toggle="wy-nav-shift" class="wy-nav-side stickynav">
				<div class="wy-side-nav-search">
					<a href="<?php echo base_url();?>" class="">Agriculture Management System</a>
		<div role="search">
			<form id="rtd-search-form" class="wy-form" action="search.html" methods="get">
				<input name="q" placeholder="search docs" type="text">
				<input name="check_keywords" value="yes" type="hidden">
				<input name="area" value="default" type="hidden">
			</form>
		</div>
				</div><!-- Closes the wy-side-nav-search -->
		<div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation"> 
      	<ul>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>"><span class="doc">Welcome to AMS</span></a></li>
      		<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>">AMS Hardware Requirement</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
      	 </ul> 
      	 </li>
      	 <ul>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('other_modules')?>">AMS Other Modules</a></li>
      	 </ul>         
      </div>
			</nav>
		</div>
		<!-- To create header title -->
		<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
			<nav class="wy-nav-top" role="navigation" aria-label="top navigation">
				<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
					<a href="#">AMS</a>
			</nav>
			<div class="wy-nav-content">
				<div class="rst-content"><!-- Aligns the entire content of the header and body at the same margin --></div>
					<div role="navigation" aria-label="breadcrumbs navigation" style="color:green";>
								<ul class="wy-breadcrumbs">
									<li><a href="#">Docs</a><li>&raquo;</li>
									<li>Outgrowers Extension</li>
									<li class="wy-breadcrumbs-aside"></li>
								</ul>
						<hr/>
					</div>
					<div role="main" class="document">
						<div class="section" id="">
						<h1>System Overview<a class="headerlink" href="#" title="permalink to this headline"</a></h1>
							<p>Process Flow.</p>
							<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/flowchart.jpg"/></a></p>
              				<h3><li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/oes/job.jpg">Job Queue</a></li></h3>
              				<h3><li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/oes/Cane Fields.jpg">Cane Fields</a></li></h3>
              				<h3><li class="toctree-11"><a class="reference internal" href="">New Land Applications</a></li></h3>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Enter new land application.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Physical inspection</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Initial Approval</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Final OES decision on new land.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Print farmer contract</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Enter contract signing information</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Request for soil analysis</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Contract for private cane</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">9. Split Fields</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">10. Amalgation of fields</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">11. Change Sub location</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">12. Delete fields or plots</a></li>
								
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Planting Activities</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Confirm Date of planting.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Planting status report </a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Additional seed request</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Approval / Rejection of additional seedcane report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Request for gap filling</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Approval/Rejection of additional/gapping seedcane request</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Re-activation of terminated accounts.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Machinery allocation regular</a></li>

							<p><h3><li class="toctree-11"><a class="reference internal" href="">Crop Growth Monitoring.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Develop crop development job schedule</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Enter crop schedule feedback</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Crop activity slippage report</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Enter yield estimate.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Approve fertilizer supply.</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Cane Fire Menu</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Report cane fire incidents.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Pending cane fire analysis by agronomy</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Generate notice for burnt cane disposition.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Burnt cane disposition activity.</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Farmer Enquiries.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Application Status..</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Farmer Enquiry</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Plot clearance for payment</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Field Enquiry</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5.Ownership transfer.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Ownership transfer approval</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Ownership transfer signing confirmation.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Ownership transfer status.</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Farmer Loan Processing.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Enter farmer loan request</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Approve or Reject Application.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Farmer Advance Against Supply.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Initial Approval.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Final Approval.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Advance Payment</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Bank Advice</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Contract Job Processing.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Request For Contractor Jobs.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Contractor Jobs Approval.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Contract allocation</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Contractor work certification</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Contractor Advance against supply.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Initial approval.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Final Approval.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Advance payment</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">9. Bank advice</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Post Harvesting Process.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Generate Extension/termination/renewal list.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Generate Extension contracts.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Confirmation of Extension contract signing.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Confirm contract terminations.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Generate new contracts for renewal cases.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Confirm signing of new contracts.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Generate Land Preparations requests.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Contract transfer.</a></li>	
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Miscellaneous.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Request For third fertilizer application.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Request For additional seed.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Request for plot weeding</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Request to AE for bush cleaning</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Request to AE for road repair.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. Request to AE for re-survey of plots.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Request to Agronomy for pest/disease assessment.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Tag/untag plot as disputed.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">9. Cancellation of farmer contract.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">10. Enter bank account numbers.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">11. Request agronomy for assessment of gaps.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">12. Request agronomy for germination assessment.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">13. Farmer request for cane carrying</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">14. Farmer request for cane slashing.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">15. Request for foliar analysis.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">16. Job status</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">17. Request for juice analysis</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">18. Report germination failure.</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">OES reports.</a></li></h3></p>
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">1. Farmer register.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">2. Cane inventory.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">3. Mature cane availability report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">4. Total cane hectare</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">5. Weekly program of cane maintenance.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">6. List of pending jobs with agronomy.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">7. Pending land preparations with AE.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">8. Supervisory summary.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">9. Cane maintenance report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">10. Productivity report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">11. New land application report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">12. Pending seedcane / fertilizer distribution by CDS.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">13. Crop activity analysis report.</a></li>
								<li class="toctree-11"><a class="reference internal" href="<?php echo base_url(); ?>public/">14. Total cane area by variety.</a></li>
							</ul>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Enter Nominee and Mandates</a></li></h3></p>
							<p><h3><li class="toctree-11"><a class="reference internal" href="">Master Database</a></li></h3></p>
								<li>1. Site master</li>
								<li>2. District master</li>
								<li>3. Zone master</li>
								<li>4. Sub location master</li>
								<li>5. Location master</li>
								<li>6. Contractor Master_OES</li>
								<li>7. Field supervisor master</li>
								<li>8. Field assistant master.</li>
								<li>9. IPA staff master</li>
								<li>10. Farmer master</li>
							<p><li><b>JOB QUEUE</b></li></p>
							<p>This interface shows the list of pending jobs/requests. The request number, request date and time, section, job type, field number, plot number, quantity and instructions are shown</p>
							<p>The interface has buttons called filter buttons. Clicking on these will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, and Requesting section entered</p>
								<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/job queue.jpg"/></a></p>
							<p><li><b>CANE FIELDS</b></li></p>
							<p>This interface shows the list of all the fields of ODS with their Field number, Description, Crop Cycle, Planting Date, Maturity Date, Parent field, Sector, Route, Nursery, Type of land, accessibility, Current Status etc</p>
							<p>The interface has buttons called filter buttons. Clicking on these, will show a filtered list depending on Cane Variety, Date of Planting, Date of Maturity, Field number, Transport sector, Transport route number, Nursery Status and Crop Cycle.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Cane Fields.jpg"/></a></p>
							<p><li><b>NEW LAND APPLICATIONS:</b></li></p>
							<p><li><b>Enter New Land Applications</b></li></p>
							<p>This interface is for entering New Land Applications. The interface requires the following information to be entered by the user</p>
							<p>1. Application Date : The date on which the application is submitted.By default it takes current working date</p>
							<p>2. Zone : Select zone from the combo box</p>
							<p>3. Sub location : System will filter the sub locations that are under the selected zone</p>
							<p>4. Society : Select the society from the combo box</p>
							<p>5. Join Existing field : Check the control if joining existing field.</p>
							<p>6. Enabled and required only when Join Existing Field is checked. Double click on the box or press F1 key to get the list of existing fields with relative field codes..</p>
							<p>7. Total plot size : The total size of the plot.</p>
							<p>8. Area for cane : Total area available for cane</p>
							<p>9. Low land : Check the control if land level is low.</p>
							<p>10. Proof of ownership : Select the type of Ownership</p>
							<p>11. Development type : Select the Development type from the drop down list.</p>
							<p>12. Remarks : Enter remarks regarding new land recruitment.</p>
							<p>13. Farmer ID Number : Kenyan ID of the Farmer.</p>
								<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/New Land App.jpg"/></a></p>
							<p><li><b>PHYSICAL INSPECTION</b></li></p>
							<p>This interface is filled after physical verification of the field by the ODS is done. It requires plot details, access information soil details etc</p>
							<p>The interface contains some information which the system fetches automatically after entering Application number, and some required as verification information from user. The following information is to be entered</p>
							<p>This interface is for entering New Land Applications. The interface requires the following information to be entered by the user</p>
							<p>1. Application Number : Application number for land which is being Inspected. (Pressing Enter key after enter Application number, will show the application date, Land Parcel Number, Farmer(s)Name, total plot size, Size available for cane, sub location, society and low land status.)</p>
							<p>2. Access Type : Select the access condition (Direct/Indirect) of the field</p>
							<p>3. Type of Ownership : Free-Hold/Lease-Hold</p>
							<p>4. Contiguous : Select within/wide/narrow from the combo box.</p>
							<p>5. Steepness of the plot : Value for steepness of the form.</p>
							<p>6. Distance from Haulage Road : Distance from Haulage Road</p>
							<p>7. Field Shape : Select Irregular/Square.</p>
							<p>8. Field Length : Length of the field (If shape is square.)</p>
							<p>9. Field Width : Width of the field (If shape is square.).</p>
							<p>10. Access Road : Select Condition of the access road</p>
							<p>11. Ability of the Farmer : Select ability ( Aged/Business Man/MSC Employee)</p>
							<p>12. Nature of disputes : Enter the details of the disputes in the land (if any)..</p>
							<p>13. Plot drainage condition : Select the drainage condition of the plot.</p>
							<p>14. Top Soil Depth : Depth of the top soil.</p>
							<p>15. Top Soil Color : Color the top soil.</p>
							<p>16. Top Soil Texture : Texture of the top soil.</p>
							<p>17. Sub Soil Depth: Depth of the sub soil..</p>
							<p>18. Sub Soil Color : Color the sub soil.</p>
							<p>19. Sub Soil Texture : Texture of the sub soil.</p>
								<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/Physical Inspection.jpg"/></a></p>
							<p><li><b>Initial Approval</b></li></p>
							<p>This interface is to for the initial approval of the Land Application after physical inspection. There are three tabs-Awaiting Approval, Approved Plots and Rejected Plots. On approval of the application, request is sent to Agronomy for soil testing. Rejection at any stage in ODS, causes the application to go out of AMS.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/initial approval.jpg"/></a></p>
							<p>In the Awaiting Approvals tab, double clicking on the row containing Application number, will show the details of the application in the window shown below</p>
							<p><li><b>Final Decision from OES</b></li></p>
							<p>This interface shows the report of Agronomy after soil testing, which is sent back to the ODS. This interface allows ODS to make final decision of the approval or rejection of the application</p>
							<p>Double clicking on the application, can help one to view the previous details of the application, so that it can be finally approved or rejected.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/OES final decision.jpg"/></a></p>
							<p>Double clicking on the row containing Application number, will show the details of the application in the window shown below</p>
							<p><li><b>Print Farmer Contract</b></li></p>
							<p>This interface shows the approved applications, after final decision from ODS. Contracts can be printed directly from this interface. Click on rows to select/deselect applications individually</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/Print Farmer Contract.jpg"/></a></p>
							<p><li><b>Contract Signing information</b></li></p>
							<p>This interface is to confirm the status of the application, whether it has been signed or rejected. Like every other stage, rejected applications go out of the AMS. Click on rows to select/deselect applications individually</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/Enter contract signing.jpg"/></a></p>
							<p><li><b>Request For Soil Analysis</b></li></p>
							<p>Using this window user can generate an ad-hoc request for soil analysis for that particular field. The user needs to give following inputs :-</p>
								<p><ul>
									<li>1. Sub-Location</li>
									<li>2. Field Number</li>
									<li>3. Plot number</li>
								</ul></p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/current request for soil analyst.jpg"/></a></p>
							<p>On clicking the save button an request for soil analysis related to inputted field will be stored into the database and same can be seen in existing requests and Agronomy Section</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/req for soil analysis.jpg"/></a></p>
							<p><li><b>Contract For Private Cane</b></li></p>
							<p>This window is used to generate a contract for private cane . The forms works similar to Enter New Land Application. The following inputs are need to be made for this form :-</p>
								<p><ul>
										<li>1. Sub-Location</li>
										<li>2. Purchase Center </li>
										<li>3. Society</li>
										<li>4. Plot Area</li>
										<li>5. Cane Area</li>
										<li>6. Variety</li>
										<li>7. Crop Cycle</li>
										<li>8. Distance</li>
										<li>9. Yield</li>
										<li>10. Farmer id</li>
										<li>11. Farmer Name ( Surname, First Name , Other Name)</li>
										<li>12. Kin</li>
								 </ul>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/contract for private cane.jpg"/></a></p>
							<p>On clicking the Save & Print button a contract for particular Farmer and Land will get generated. This window also allows the user to enter details of more than one farmer to corresponding land/Field.</p>
							<p><li><b>Split Fields</b></li></p>
							<p>This window is used to split a field and transfer its plots to another field. Here the user need to make following inputs :-</p>
							<p><ul>
									<li>1. Sub-Location</li>
									<li>2. Field number</li>
									<li>3. Plot number</li>
							 </ul></p>	
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/split fields.jpg"/></a></p>
							<p>On clicking the save button a new field will get generated containing the plots which are selected by the user.</p>
							<p><li><b>Amalgamation Of Fields</b></li></p>
							<p>This window is used to amalgamate two fields. The user needs to enter the required field number (2 fields) on clicking the save button the plots present in the Field 2 will get amalgamated with plots in Field 1.The user needs to make following inputs :-</p>
							<p><ul>
									<li>1. Sub-Location</li>
									<li>2. Field number 1</li>
									<li>3. Plot number 2</li>
							 </ul></p>	
							 <p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/Amalgation of fields.jpg"/></a></p>
							 <p><li><b>Change Field Sub-Location</b></li></p>
							 <p>This window is used to change the sub-location of a desired field to another sub-location in that zone itself. The user need to make following inputs to change the sub-location</p>
							<p><ul>
									<li>1. Field number</li>
							 </ul></p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/change sublocation.jpg"/></a></p> 	
							<p><li><b>New Sub-location</b></li></p>
							<p><li><b>Delete Field or Plot</b></li></p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/New Land App/delete fields.jpg"/></a></p>
							<p><li><b>PLANTING ACTIVITIES</b></li></p>
							<p><li><b>Confirm Date of Planting</b></li></p>
							<p>Using this window user can confirm date of planting for given field.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/confirm planting date.jpg"/></a></p>
							<p><li><b>Planting Status Report</b></li></p>
							<p>This form is used to generate the report of planting status. The user selects the desired filter to obtain the data which is required</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/planting status report.jpg"/></a></p>
							<p><li><b>Additional Seed Request</b></li></p>
							<p>This form is used to generate an additional seed cane request.The user is required to enter Filed No , Plot No , qty of seed cane required. On clicking the save button the request will get generated</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/current additional seed request.jpg"/></a></p>
							<p>There is another tab in this form which allows the user to view or delete the existing requests.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/existing additional seed request.jpg"/></a></p>
							<p><li><b>Approval/Rejection Of Additional Seed Cane Request</b></li></p>
							<p>This window is used to approve or reject the request for additional seed cane. The user is required to enter the remark of its decision</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/Approval for gap filling.jpg"/></a></p>
							<p><li><b>Request For Gap-Filling</b></li></p>
							<p>This form is used to generate an additional seed cane request for gap-filling. The user is required to enter Filed No , Plot No , qty of seed cane.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/current additional seed request.jpg"/></a></p>
							<p>required.On clicking the save button the request will get generated.There is another tab in this form which allows the user to view or delete the existing requests.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/existing additional seed request.jpg"/></a></p>
							<p><li><b>Approval/Rejection Of Additional/Gapping Seed Cane Request : -</b></li></p>
							<p>This window is used to approve or reject the request for additional seed cane. The user is required to enter the remark of its decision.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/Approval for gap filling.jpg"/></a></p>
							<p><li><b>Re-Activation Of Terminated Accounts</b></li></p>
							<p>This window is used to re-activate the terminated accounts. The user selects the desired sub-location and the data grid will get populated with terminated accounts the user can then select the required account and activate it</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Planting activities/Terminate accounts.jpg"/></a></p>
							<p><li><b>Machinery Allocation Regular</b></li></p>
							<p>This window is used to enter a new request for machinery allocation.The user is required to enter the field number and plot number and select the activity for which the machinery is to be allocated.</p>
							<p><li><b>CROP GROWTH MONITORING:</b></li></p>
							<p><li><b>Generate Crop Development job schedule:</b></li></p>
							<p>This report shows the crop development information of the field in terms of variety, crop cycle, age (in months), and estimated start date. User can enter the range of dates for which report is required, and get the information by clicking on Select button</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/crop development schedule.jpg"/></a></p>
							<p>This is the feedback interface for status of crop growth. It shows the relative information of the fields in the grid. User can double click on the selected row, to enter status of the field</p>
							<p>The interface requires the user to enter the following information</p>
							<p>(1). Start date : Enter the starting date of the job</p>
							<p>(2). End date : Enter the date when the job was completed</p>
							<p>(3). % completed :  Percent of work completed</p>
							<p>(4). Remarks : Enter remarks if any</p>
							<p>(5). Estimated Yield : Enter the estimated yield in tonnes</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/crop monitoring feedback.jpg"/></a></p>
							<p><li><b>Crop activities Slippage Report</b></li></p>
							<p>This report shows the field jobs and its status, which have not been completed on their scheduled date. The report is for the current working date.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/crop activity slippage.jpg"/></a></p>
							<p><li><b>Yield Estimation</b></li></p>
							<p>This interface is for the user to enter the estimated yield date and the quantity of yield, for any field. Double click the field row to enter the information.</p>
							<p>The interface requires the user to enter the following information:</p>
							<p>Supervisor : Enter the name of the supervisor</p>
							<p>Yield Estimate Date : Enter the estimated date of yield</p>
							<p>Estimated Yield : Enter the estimated yield of cane</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/Yield estimation.jpg"/></a></p>
							<p><li><b>Approve Fertilizer Supply</b></li></p>
							<p>This form is used to approve the pending fertilizer requests .The user is required to select the desired Zone , Sub-Location and enter the field number to view all the pending requests and take further action</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/pending fertilizer requirement.jpg"/></a></p>
							<P><b>Cane Diversion.</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/cane diversion.jpg"/></a></p>
							<P><b>Diversion Approval</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/OGMs Action on cane diversion.jpg"/></a></p>
							<P><b>Upload cane census</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/load cane census data.jpg"/></a></p>
							<P><b>Request for chemical or herbicide</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/generate chem or herb request.jpg"/></a></p>
							<P><b>Approve chemical or herbicide request</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/pending chemical rquest waiting approval.jpg"/></a></p>
							<P><b>Farmer training and demonstration</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/farmer training attendance.jpg"/></a></p>
							<P><b>Request to Research development</b></p>
							<p>See illustration below</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Crop Growth Monitoring/test request.jpg"/></a></p>
							<p><li><b>Cane Fire Menu</b></li></p>
							<p><b>Report Cane Fire incidents</b></p>
							<p>This interface is for reporting cane fires in the fields. It requires the user to enter some information</p>
							<p>Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key</p>
							<p>Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of cane area, estimated yield amount, age of crop, crop cycle etc.</p>
							<p>Date of cane burnt : Date on which cane field burned.</p>
							<p>% area : The % of area burnt</p>
							<p>Date reported : Date on which the fire was reported</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Cane Fire Menu/cane fire cases.jpg"/></a></p>
							<p><b>Pending Cane fire analysis by Agronomy</b></p>
							<p>This interface shows the pending cane fire analysis by agronomy, as on the current date. For a fire in any field or plot, it lists the report date, burnt rate, field number, description, plot number, % of cane burnt, split field number and the date of splitting</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Cane Fire Menu/List pending cane.jpg"/></a></p>
							<p><b>Generate notice for burnt cane disposition</b></p>
							<p>This interface generates notices for the disposition of burnt cane. It shows the field number, description, plot number , farmers name, area, area burnt, and the % of cane burnt. Click on rows to select/deselect applications individually.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Cane Fire Menu/generate notic.jpg"/></a></p>
							<p><b>Burnt cane disposition activity</b></p>
							<p>This interface is for entering the burnt cane disposition activity. It shows field number, description, plot number, farmers name, area, parent field number, and plot number, for any field selected. The user has to enter the following information</p>
							<p>Date of Disposition : Date on which field is to be disposed</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Cane Fire Menu/burnt plot.jpg"/></a></p>
							<p><li><b>FARMER ENQUIRIES</b></li></p>
							<p><li><b>Application Status</b></li></p>
							<p>This window is used to see the status of particular application . The user is required to enter the application number in order to view its status.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/Application details.jpg"/></a></p>
							<p><li><b>Farmer Inquiry</b></li></p>
							<p>This window is used to view the requests related to a particular field</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/Farmer Inquiry.jpg"/></a></p>
							<p><li><b>Plot Clearance For Payment</b></li></p>
							<p>This window is used to view and print the plots which are cleared by Harvesting Transport and are ready for payment.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/plot clearance.jpg"/></a></p>
							<p><li><b>Field Enquiry</b></li></p>
							<p>This window is used to each and every detail related to a particular field. The user is required to select the field number and associated plot number to view the details.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/field enquiry.jpg"/></a></p>
							<p><li><b>Farmer Enquiry</b></li></p>
							<p>This window is used to view each and every detail regarding a particular farmer. The user is required to enter the kenyan id to view the details</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/Farmer enquiry.jpg"/></a></p>
							<p><li><b>Ownership Transfer:</b></li></p>
							<p>This window is used to transfer the ownership of a plot to another farmer. The user enters the field no , plot number and new farmer's details to transfer the ownership</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/ownership transfer.jpg"/></a></p>
							<p><li><b>Ownership Transfer Approval:</b></li></p>
							<p>This window is used to approve the ownership transfer. The user enters the field number , plot no, to refresh the grid. The user is also entitled to view approved and rejected applications.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/ownership transfer approval.jpg"/></a></p>
							<p><li><b>Ownership Transfer Signing Confirmation:</b></li></p>
							<p>This window is used to confirm the signing process of ownership transfer. On page load the data grid is automatically filled with pending confirmation ownership transfers.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/ownership transfer signing confirmation.jpg"/></a></p>
							<p><li><b>Ownership Transfer Printing:</b></li></p>
							<p>This window is used to update the status of ownership transfer case and print it.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/ownership transfer printing.jpg"/></a></p>
							<p><li><b>Ownership Transfer Status:</b></li></p>
							<p>This window is used to view the status of ownership transfer cases. The user is required to enter the field , plot number to view the status.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Enquiries/ownership transfer status.jpg"/></a></p>
							<p><li><b>FARMER ADVANCE PROCESSING:</b></li></p>
							<p><li><b>Enter Farmer loan request:</b></li></p>
							<p>This interface is for submission of the loan request from farmers. It has three tabs-Application Entry, Unprocessed Applications, and Rejected Applications. For any field number and plot number entered, information like cane area, crop cycle, crop age, estimated yield amount and % of yield shows up automatically</p>
							<p>The interface requires the following information to be filled by the user:</p>
							<p>Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box orpressing F1 key</p>
							<p>Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of cane area, estimated yield amount, age of crop, crop cycle etc.</p>
							<p>Loan Type : Select the loan type, from the combo box</p>
							<p>Loan Amount : Enter the amount of loan. (Amount of loan cannot exceed the value defined in loan master)</p>
							<p><li><b>Approve or Reject application:</b></li></p>
							<p>This interface is for Approval and Rejection of loan applications. The grid shows all the approved, rejected and unprocessed loan applications. It shows Rejected applications in Red, Approved applications in Green and Unprocessed applications in White.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Advance Processing/approval of farmer advance.jpg"/></a></p>
							<p><li><b>Farmer Advance Against Supply:</b></li></p>
							<p>This window is used to insert/delete/modify the advance request for payment by the farmer. The user enters the details like Zone , Sub-location ,Field Number , plot Number, requested amount , mode of transfer , Remarks to enter the request for advance.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Advance Processing/Enter Advance Request.jpg"/></a></p>
							<p><li><b>Initial Approval:</b></li></p>
							<p>This window is used to do initial approval or rejection of the advance payment. The data grid will get filled on page load and on double clicking the row the data is populated into the fields and the user can then approve or reject the request</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Advance Processing/Initial approval.jpg"/></a></p>
							<p><li><b>Advance Payment:</b></li></p>
							<p>This window is used to create the voucher and provide the advance payment by cash to the farmer</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Advance Processing/advance payment.jpg"/></a></p>
							<p><li><b>Bank Advice:</b></li></p>
							<p>This window is used to create the bank advice. The user is required to select the Payment Mode , Bank , enter mode details to generate the Advice</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Farmer Advance Processing/Bank advice.jpg"/></a></p>
							<p><li><b>CONTRACTOR JOB PROCESSING:</b></li></p>
							<p><li><b>Request for Contractor jobs:</b></li></p>
							<p>Using this interface user can raise requests like Fertilizer Issue, Land Preparation Request, Request for Road Repair etc. against a field or plot.The interface requires the following information to be entered by the user.</p>
							<p>1. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box orpressing F1 key.</p>
							<p>2. Plot number : Like the Field number, Plot number can also be selected.From master list</p>
							<p>3. Request Type : Request Type can be selected from the drop down list</p>
							<p>4. Area/Qty : Area/ Quantity for which request is being raised.</p>
							<p>5. Remarks : Remarks (if any.)</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/Contractor job requests.jpg"/></a></p>
							<p><li><b>Contractor job approval:</b></li></p>
							<p>This interface shows the status of contractor jobs. It has three tabs- Awaiting Jobs, Approved Jobs, Rejected Jobs. It shows information like job request number, field number and description, plot number , farmers name, request type, area and quantity allocated and remarks if any</p>
							<p>User can select/deselect the row(s) by using the provided buttons or by clicking on the rows individually.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/Approval of contractor job request.jpg"/></a></p>
							<p><li><b>Contractor allocation:</b></li></p>
							<p>This interface is used to allocate job to contractors. The interface has two tabs Pending For Contractor Allocation and Contractor Allocated.</p>
							<p>The First tab Pending For Contractor Allocation has two lists, one showing the list of pending requests, and the other showing the list of contractors.</p>
							<p>For allocation of a job to a contractor, first select the job from pending job list and contractor from contractor list, and click on Allocate. For Deallocation, select the request and click on the DeAllocate button</p>
							<p>Note: At a time only one job request can be selected whereas multiple contractors can be selected using shift + click</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/Pending for contractor allocation.jpg"/></a></p>
							<p><li><b>Contractor Work Certification:</b></li></p>
							<p>This interface shows the contractor work certificate. It has three tabs-Awaiting Jobs, Completed Jobs and Failed Jobs. Selecting any row would show the field number , plot number , contractor, request type, area allocated, contractor allocation date and the expected completion date</p>
							<p>The user is required to enter information like</p>
							<p>1. Completion Status : Select whether job is completed/Failed </p>
							<p>2. Work Start Date : Enter the date for starting work</p>
							<p>3. Completion date : Enter the date for completing work</p>
							<p>4. Remark : Enter remark(s) if any.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/contractor work cert.jpg"/></a></p>
							<p><li><b>Contractor Advance Payment:</b></li></p>
							<p>This window is used to insert/delete/modify the advance request for payment by the farmer. The user enters the details like Zone , Sub-location ,Field Number , plot Number, Contractor Code ,requested amount , mode of transfer , Remarks to enter the request for advance</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/enter contractor request.jpg"/></a></p>
							<p><li><b>Initial Approval:</b></li></p>
							<p>This window is used to do initial approval or rejection of the advance payment. The data grid will get filled on page load and on double clicking the row the data is populated into the fields and the user can then approve or reject the request</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/initial approval.jpg"/></a></p>
							<p><li><b>Final Approval:</b></li></p>
							<p>This window is used to do final approval or rejection of the advance payment. The data grid will get filled on page load and on double clicking the row the data is populated into the fields and the user can then approve or reject the request</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/final approval of contractor advance.jpg"/></a></p>
							<p><li><b>Advance Payment:</b></li></p>
							<p>This window is used to create the voucher and provide the advance payment by cash to the farmer</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/advance payment.jpg"/></a></p>
							<p><li><b>Bank Advice::</b></li></p>
							<p>This window is used to create the bank advice. The user is required to select the Payment Mode , Bank , enter mode details to generate the Advice.</p>
							<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Contractor job processing/bank advice for advance payment.jpg"/></a></p>
					</div>
				</div>
			</div>	
<footer class="container-fluid footer">
	<div class="rst-footer-button" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('post_harvesting_process')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('ams_modules')?>" class= "btn btn-neutral" title="Installation_Instruction"><span class=""></span>Previous</a>
	</div>
	<hr/>
	<div class="container-fluid site-container">
		<div class = "container-fluid site-container">
			<div class="container-fluid footer-details">
				<div class="d-flex justify-content-between mb-3 flex wrap" >
					<div class="row">
							<p style ="text-align: left;"><a href="/" class="navbar-brand navbar-brand-1">
                        		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/image/sonysugarfooter.jpg"/></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>
		</div>
			</div>
			</div>
		</section>
	</body>
</html> 
	