<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Agriculture Engineering</title>
		<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/>
		<link rel="index" title="index" href="genindex.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title=""Welcome To AMS User Guide" href="general/welcome.html"/>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.imin.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
			
	</head>
	<body class="wy-body-for-nav" role="document" style=""><!-- creates the vertical navbar on the left-->
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
			<form id="rtd-search-form" class="wy-form" action="search.html" method="get">
				<input name="q" placeholder="search docs" type="text">
				<input name="check_keywords" value="yes" type="hidden">
				<input name="area" value="default" type="hidden">
			</form>
		</div>
				</div><!-- Closes the wy-side-nav-search -->
		<div class="wy-menu wy-menu-vertical"	data-spy="affix" role="navigation"	aria-label="main-navigation">
			<ul>
          		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a></li>
          		<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
          	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
          		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>"><span class="doc">AMS Hardware Requirement</span></a></li>	
          		<li class="toctree-11"><a class="current reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
          		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a></li>
          	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('other_modules')?>">AMS Other Modules</a></li>
      	 	</ul>  
		</div>
			</nav>
		</div>
		<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
			<nav class="wy-nav-top" role="navigation" aria-label="top navigation">
				<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
					<a href="#">AMS</a>
			</nav>
			<div class="wy-nav-content">
				<div class="rst-content"><!-- Aligns the entire content of the header and body at the same margin --></div>
					<div role="navigation" aria-label="breadcrumbs navigation" style="color:green";>
						<ul class="wy-breadcrumbs">
							<li><a href="#">Docs</a></li>&raquo;</li>
							<li>System overview</li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><li><b>JOB QUEUE:</b></li></p>
		
		<p>This interface shows the list of pending jobs/requests. The request number , request date and time, section, job type, field number, plot number, quantity and instructions are shown.
           The interface has buttons called filter buttons. Clicking on these, will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, Requesting section entered.</p>
		<p><b>JOB QUEUE</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/job queue of pending jobs.jpg"/></br></a></p>
		<p><b>LIST OF CASES REQUIRING INSPECTION:</b></p>
		<p>This interface shows the list of cases requiring inspection and the land inspection result, as on the current date. It has three tabs, Pending requests, Ploughable plots and UnPloughable plots.</p>
		<p><b>LIST OF CASES REQUIRING INSPECTION:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Land inspection result.jpg"/></br></a></p>
		<p></p>  
		<p><b>CONTRACTOR ALLOCATION FOR PLOUGHING:</b></p>
		<p>This interface is for contractor. For allocation of a machine, for a job to a contractor, first select a row from pending machine allocation list and row(s) from contractor /machine list, and click on Allocate.</p>
		<p><b>CONTRACTOR ALLOCATION FOR PLOUGHING:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Contractor Mechine allocation.jpg"/></br></a></p>
		<p><b>SURVEYOR ALLOCATION:</b></p>
		<p>This interface is for allocating surveyors for fields. It has two tabs- Pending for surveyor allocation and Surveyor allocated.
         For allocation of surveyor, for a field, first select a row from pending surveyor allocation requests, and a row from surveyor list, and click on Allocate.</p>
		<p><b>SURVEYOR ALLOCATION:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Survey/surveyor  allocation.jpg"/></br></a></p>
		<p></p>
		<p><li><b>ENTER SURVEY RESULT:</b></li></p>
		<p>This interface is for entering the survey result. On Clicking a row, the field number , plot number , and estimated area shows up automatically.</p> 
		<p>The user is required to enter the following information</p> 
		<p>Surveyed area : Enter the total area which has been surveyed.</p> 
		<p>Surveyor remark : Enter remarks if any.</p> 
		<p><b>ENTER SURVEY RESULT:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Survey/surveyor result.jpg"/></br></a></p>
		<p><li><b>Edit Area :</b></li></p>
		<p>This window is used to edit the area of a particular field ,plot whose survey result is entered into the system.</p> 
		<p><b>Edit Area :</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Survey/Area Modification.jpg"/></br></a></p>
		<p><b>QUALITY ASSESSMENT SHEET FOR PLOUGHING :</b></p> 
		<p>This interface shows the quality assessment sheet for ploughing. Clicking on any row, would show the field number and area automatically.
              Enter the quality assessment by selecting pass/fail radio buttons.
                  Click on Save Button after entering all the result.</p> 
         <p><b>Edit Area :</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/quality assessment sheet ploughing.jpg"/></br></a></p>
        <p><b>QUALITY ASSESSMENT SHEET FOR HARROWING AND FURROWING</b></p> 
		<p>This interface shows the quality assessment sheet for Harrowing and Furrowing . Clicking on any row, would show the field number and area automatically.
            Enter the quality assessment by selecting pass/fail radio buttons.
           Click on Save Button after entering all the result.</p> 
        <p><b>QUALITY ASSESSMENT SHEET FOR HARROWING AND FURROWING:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/quality assessment sheet harrowing.jpg"/></br></a></p>
        <p><b>CONTRACTOR WORK COMPLETION:</b></p>   
		<p>This interface shows the contractor work certificate. It has three tabs-Awaiting Jobs, Completed Jobs and Failed Jobs. Selecting any row would show the field number , plot number , contractor, request type, area allocated, contractor allocation date and the expected completion date.</p> 
		<p>For the first tab, the user is required to enter information like,</p> 
		<p>Completion Status : Select whether job is completed or not.</p> 
		<p>Work Start Date : Enter the date for starting work.</p> 
		<p>Completion date : Enter the date for completing work.</p> 
		<p>Remark : Enter remark(s) if any.</p> 
		 <p><b>CONTRACTOR WORK COMPLETION:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/contractor work cert.jpg"/></br></a></p>
		<p><b>SECOND HARROW:</b></p>	
		<p><b>Request For 2nd Harrow :</b></b></p> 
		<p><b>SECOND HARROW</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Additional plough and harrow/2nd harrowing request.jpg"/></br></a></p>	
		<p><b>Contractor Allocation:</b></p> 
		<p>This window is used to allocate contractor for second harrow. The requests for second harrow as well as list of contractors will be populated into desired data grids.</p> 
		<p><b>Contractor allocation:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Additional plough and harrow/contractor mechine allocation for 2nd harrowing.jpg"/></br></a></p>
		<p><b>Land Preparation Programme</b></p>
		<p>This window is used to see the land preparation program . The user selects a particular contractor to view its Program</p>
		<p><b>Land Preparation Programme</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Land Preparation program.jpg"/><br></a></p>
		<p><b>ROAD MAINTENANCE</b></p>
		<p><b>Road Master:</b></p>
		<p>This window is used to store the road details. The details can be stored/deleted or updated from this window. The user enters various information related to Road like Road Name, Condition ,material etc etc</p>
		<p><b>Road master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/Road master.jpg"/><br></a></p>
		<p><b>Material Master:</b></p>
		<p>See illustration below.</p>
		<p><b>Material Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/material master.jpg"/><br></a></p>
		<p><b>Road repair request:</b></p>
		<p>See illustration below.</p>
		<p><b>Road repair request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/road repair request.jpg"/><br></a></p>
		<p><b>Road repair request approval / rejection:</b></p>
		<p>See illustration below.</p>
		<p><b>Road repair request approval / rejection</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/road repair request approval.jpg"/><br></a></p>
		<p><b>Daily Work Entry:</b></p>
		<p>See illustration below.</p>
		<p><b>Daily Work Entry</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/daily work entry.jpg"/><br></a></p>
		<p><b>Completion of Road request</b></p>
		<p>See illustration below.</p>
		<p><b>Completion of Road request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/road repair complete.jpg"/><br></a></p>
		<p><b>Bridge Master</b></p>
		<p>See illustration below.</p>
		<p><b>Bridge Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/bridge master.jpg"/><br></a></p>
		<p><b>Culvert master</b></p>
		<p>See illustration below.</p>
		<p><b>Culvert master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/Road maintenance/culvert master.jpg"/><br></a></p>
		<p><li><b>MISCELLANEOUS.</b></li></p>
		<p><b>Information on Self Land Preparation by Farmer:</b></p>
		<pThis interface is for entering the details of Land Preparation activities mainly fertilizer application, done by the farmer himself. On clicking on any row, the field number , plot number , request type and area show up automatically.b></p>
		<p>The interface requires user to enter information like : </p>
		<p>Completion date : Date on which the job was completed.</p>
		<p>Remarks : Remarks if any.</p>
		<p><b>Information on Self Land Preparation by Farmer:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/infm on self land preparation.jpg"/><br></a></p>
		<p><b>De-allocation of Contractors:</b></p>
		<p>This interface has the list of all contractors allocated for different jobs by AE. The screen shows the request date, field number , plot number , farmers name, job type, area/quantity, remarks ,contractor code and contractor description, as on the current date.<p>
		<p>Select any row(s), and click on De-allocate to remove a job from under a contractor.</p>
		<p><b>De-allocation of Contractors:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/de-allocation of contractors.jpg"/><br></a></p>        
		<p><b>Update Road Repair Status:</b></p>
		<p>Using this interface AE updates the Status of road repair requests from different departments. This interface shows the pending road repair requests from all departments<p>
		<p>On clicking any row, the request date and the road name/request previously entered shows up. Enter the latest remark and click on Job Complete to save the update</p>
		<p>The interface requires user to enter information like.</p>
		<p>Remark : Enter the latest status of the job.</p>
		<p><b>Update Road Repair Status:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/update road repair request.jpg"/><br></a></p>        
		<p><b>Internal Job Requests:</b></p>
		<p>This window is used to save a new job request. The user enters the field, plot number area , job description to store a new job<p>
		<p><b>Internal Job Requests:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/internal job request.jpg"/><br></a></p>        
		<p><b>Duplicate AE Jobs:</b></p>
		<p>This window is used to view and delete the jobs which are duplicate.<p>
		<p><b>Duplicate AE Jobs:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/delete duplicate jobs.jpg"/><br></a></p>        
		<p><b>Vehicle Attendance List::</b></p>
		<p>This window is used to make the attendance of a vehicle for that day.<p>
		<p><b>Vehicle Attendance List:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/vehicle attendance.jpg"/><br></a></p>        
		<p><b>Vehicle trip Sheet:</b></p>
		<p>This window is used to store details related to particular trip done by a particular vehicle. This window stores various details pertaining to the trip like fuel consumption , distance covered etc<p>
		<p><b>Vehicle trip Sheet:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/vehicle trip sheet.jpg"/><br></a></p>        
		<p><b>Mill Cane Trip Sheet:</b></p>
		<p>This window is used to enter details regarding mill cane trip and store necessar details like fuel consumption , distance , duration etc.<p>
		<p><b>Mill Cane Trip Sheet</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/mill cane trip sheet.jpg"/><br></a></p>        
		<p><b>Contractor Job requests</b></p>
		<p>This window is used to generate job request for contractrs manually. The user is expected to enter following details<p>
		<p>1. Sub-Location </p>
		<p>2. Field number</p>
		<p>3. Plot number</p>
		<p>4. Request Type </p>
		<p>5. Qty </p>
		<p>6. Remark</p>
		<p><b>Contractor Job requests</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/contractor job request.jpg"/><br></a></p>        
		<p><b>Contractor Approval</b></p>
		<p>This window is used to approve or reject the contractor request generated by above step<p>
		<p><b>Contractor Approval</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/miscellaneous/contractor job approval.jpg"/><br></a></p>        
		<p><b>AE REPORTS:</b></p>
		<p><b>Survey Report</b></p>
		<p>This window is used to view the report related to survey done on the basis of various filters like contractor/ type/ field number etc</p>
		<p><b>Survey Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Survey report.jpg"/><br></a></p>
		<p><b>Work Status report:</b></p> 
		<p>This window is used to view the report related to work done on the basis of various filters like contractor/ sub-location/ source etc.<p> 
		<p><b>Work Status report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/WORK STATUS REPORT.jpg"/></br></a></p>
		<p><b>Contractor Work Report:</b></p> 
		<p>This window is used to view the report related to contractors work done on the basis of various filters like date from/to/work/Contractor.<p> 
		<p><b>Contractor Work Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/CONTRACTOR WORK REPORT.jpg"/></br></a></p>
		<p><b>Field Preparation Report:</b></p> 
		<p>This window is used to view the report related to field preparation on the basis of various filters like zone/sub-location/field number</p> 
		<p><b>Field Preparation Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Field preparation report.jpg"/></br></a></p>
		<p><b>Survey Rejected Plots:</b></p> 
		<p>This window is used to view the report related to the plots which are rejected after Survey.</p> 
		<p><b>Survey Rejected Plots</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/survey rejected plot.jpg"/></br></a></p>
		<p><b>Plot Inspection Report.</b></p> 
		<p>This window is used to view the list of fields which are inspected , it gives its details like inspection status, remarks etc.</p> 
		<p><b>Plot Inspection Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/plot inspection report.jpg"/></br></a></p>
		<p><b>Land Status Report.</b></p> 
		<p>This window is used to view the details of fields.</p> 
		<p><b>Land Status Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Land status report.jpg"/></br></a></p>
		<p><b>Land Preparation by Contractors.</b></p> 
		<p>This window is used to view the list of ODS Land which is prepared by contractors along with Area , Remarks , Contractor Name etc.</p> 
		<p><b>Land Preparation by Contractors.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Land preparation by contractor.jpg"/></br></a></p>
		<p><b>Quality Assessment Report.</b></p> 
		<p>This window is used to view the quality assessment report based on various filters like date,job type, contractor , job status.</p> 
		<p><b>Quality Assessment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/quality assessment report.jpg"/></br></a></p>
		<p><b>Plough Quality Analysis.</b></p> 
		<p>This window is used to generate the report of ploughing activities done by AE Section. This Window also provides a functionality to generate Graphical Reports.</p> 
		<p><b>Plough Quality Analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Plough quality report.jpg"/></br></a></p>
		<p><b>Furrowing Quality Analysis:</b></p> 
		<p>This window is used to generate the report of furrowing activities done by AE Section. This Window also provides a functionality to generate Graphical Reports</p> 
		<p><b>Furrowing Quality Analysis:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Furrow quality analysis.jpg"/></br></a></p>
		<p><b>Harrowing Quality Analysis:</b></p> 
		<p>This window is used to generate the report of harrowing activities done by AE Section. This Window also provides a functionality to generate Graphical Reports</p> 
		<p><b>Harrowing Quality Analysis:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/Harrow quality analysis.jpg"/></br></a></p>
		<p><b>AE Contract Analysis Report:</b></p> 
		<p>This window is used to generate the report of Contractor done by AE Section. This Window also provides a functionality to generate Graphical Reports</p> 
		<p><b>AE Contract Analysis Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/AE contractor analysis report.bmp"/></br></a></p>
		<p><b>MISC Report:</b></p> 
		<p>Refer to below.</p> 
		<p><b>MISC Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/AE REPORTS/MISC REPORT.jpg"/></br></a></p>
		<p><b>Masters</b></p> 
		<p><b>Contractor Master:</b></p>
		<p>This window is used to enter/delete/update Contractor details.</p>
		<p><b>Contractor Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/MASTER DATABASES/CONTRACTOR MASTER.jpg"/></br></a></p>
		<p><b>Vehicle Master:</b></p>
		<p>This window is used to enter/delete/update vehicle details.</p>
		<p><b>Vehicle Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/MASTER DATABASES/VEHICLE MASTER.jpg"/></br></a></p>
		<p><b>Driver Master:</b></p>
		<p>This window is used to enter/delete/update Driver details.</p>
		<p><b>Driver Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/MASTER DATABASES/DRIVER MASTER.jpg"/></br></a></p>
		<p><b>Contractor Job Processing:</b></p> 
		<p><b>Request for contractor jobs:</b></p> 
		<p>Refer to image below.</p>
		<p><b>Request for contractor jobs:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/REQUEST FOR CONTRACT JOBS.jpg"/></br></a></p>
		<p><b>Approval of contractor job requests.</b></p>
		<p>Refer to image below</p>
		<p><b>Approval of contractor job requests</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/APPROVAL OF CONTRACTOR JOB REQUEST.jpg"/></br></a></p>
		<p><b>Final Approval</b></p>
		<p>Refer to image below</p>
		<p><b>Final Approval</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/FINAL APROVAL.jpg"/></br></a></p>
		<p><b>Contractor Allocation.</b></p>
		<p>Refer to image below</p>
		<p><b>Contractor Allocation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/contractor allocation.jpg"/></br></a></p>
		<p><b>Quality Assurance</b></p>
		<p>Refer to image below</p>
		<p><b>Quality Assurance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/quality assurance.png"/></br></a></p>
		<p><b>Contractor Work Certification.</b></p>
		<p>Refer to image below</p>
		<p><b>Contractor Work Certification</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Agric Eng/CONTRACTOR JOBS PROCCESING/contractor work certificate.jpg"/></br></a></p>
		<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('outgrowers_canedev')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('nucleus_estate')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		