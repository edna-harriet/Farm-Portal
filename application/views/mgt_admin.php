<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>MANAGEMENT & ADMINISTRATION</title>
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
							<li><b>Management & Administration.</b></li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
				<p><b>User Administration</b></p>
				<p><b>User Profile Report:</b></p>
				<p>This window is used to generate a report .The report generated shows the list of user profile and Menu Name and information regarding rights given to the user. The report shows whether the user is allowed to add/Modify/Delete on the corresponding Page or not.</p>
				<p><b>User Profile Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/User Admin/user profile report.jpg"/></br></a></p>
				<p><b>Profile Wise User List:</b></p>
				<p>This window is used to get a report of all the users and their associated Profiles. The report thus produced shows details like Profile , User ID , Name , Validity of Account</p>
				<p><b>Profile Wise User List:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/User Admin/profile wise user list.jpg"/></br></a></p>
				<p><b>Password Management</b></p>
				<p>This window is used to reset or unlock an account. The user is required to enter the User Name to Proceed and perform next step.</p>
				<p><b>Password Management</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/User Admin/reset password.jpg"/></br></a></p> 
				<p><b>AMS user Monitoring.</b></p>
				<p>By clicking the view button, the administrator is able to see AMS users who are logged in. Force log out button is used to clear AMS user who is logged in.</p>
				<p><b>AMS user Monitoring</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/User Admin/Active user list.jpg"/></br></a></p> 
				<p><b>Web Portal user list</b></p>
				<p>After clicking the View button,administrator sees the farmers who own Farmer Web Portal accounts.</p>
				<p><b>Web Portal user list</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/User Admin/Active user list.jpg"/></br></a></p> 
				<p><b>Web Portal user list</b></p>
				<p><b>Management Reports</b></p>
				<p><b>Total Cane Hectarage</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Total Cane Area in various cane type(Fallow , Plant , Ratoon1 etc ) and its details. The user is required to make following inputs:</p>
				<p>1. Date.</p>
				<p>2. Zone , Sub-Location , Plot Type.</p>
				<p>3. Variety.</p>
				<p>4. Min , Max Age.</p>
				<p><b>Total Cane Hectarage</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/total cane hectarage.jpg"/></br></a></p> 
				<p><b>Fertilizer Distribution Report:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Fertilizer Distribution in various cane type(Fallow , Plant etc) and its details. The user is required to make following inputs:</p>
				<p>1. Date.</p>
				<p>2. Zone , Sub-Location.</p>
				<p><b>Fertilizer Distribution Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/fert distribution.jpg"/></br></a></p> 
				<p><b>Meteorological Data Summary</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Meteorological Data and its details. The user is required to make following inputs.</p>
				<p>1. Month.</p>
				<p>2. Station.</p>
				<p><b>Meteorological Data Summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/meterological data summary.jpg"/></br></a></p> 
				<p><b>Monthly Production Statistics</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Monthly Production and its details like age variety etc. The user is required to make following inputs.</p>
				<p>1. Date.</p>
				<p>2. Zone , Sub-Location , Source.</p>
				<p><b>Monthly Production Statistics.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/monthly production statistics.jpg"/></br></a></p> 
				<p><b>Weekly Harvesting Program</b></p>
				<p>This window is used to generate a report. The Report generated shows weekly harvesting Plan and its details like age , km ,Zone , Tonnage etc. The user is required to make following inputs.</p>
				<p>1. Date.</p>
				<p><b>Weekly Harvesting Program.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/weekly harvesting programme.jpg"/></br></a></p> 
				<p><b>Cane Availability Forecast:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Cane Availability in future and its details month wise. The user is required to make following inputs.</p>
				<p>1. Date.</p>
				<p>1. Section.</p>
				<p><b>Cane Availability Forecast:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/cane forecast.jpg"/></br></a></p> 
				<p><b>Farmer Payment Report</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Farmer Payment and its details . The user is required to make following inputs:</p>
				<p>1. Date.</p>
				<p>1. Sub-Location.</p>
				<p><b>Farmer Payment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/farmer payment report.jpg"/></br></a></p> 
				<p><b>Farmer Payment Statistics</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Farmer Payment and its details , Statistics . The user is required to make following inputs</p>
				<p>1. Date.</p>
				<p>1. Period.</p>
				<p><b>Farmer Payment Statistics</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/farmer payment statistics.jpg"/></br></a></p> 
				<P><b>Cane Area Movement</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Cane Movement and its details like area harvested , Planted , Fallow , Total Area etc. The user is required to make following inputs.</p>
				<p>1. Date.</p>
				<p>1. Zone , Sub-Location.</p>
				<p><b>Cane Area Movement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/cane area movement report.jpg"/></br></a></p> 
				<p><b>Cane Area Summary</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Total Cane Area and its details like sub-location , area in that sub-location etc. The user is required to make following inputs.</p>
				<p>1. Date.</p>
				<p>1. Zone , Sub-Location.</p>
				<p><b>Cane Area Summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/cane area summary.jpg"/></br></a></p> 
				<p><b>Agriculture Dashboard</b></p>
				<p>This window is used to generate a report. The Report generated shows data related to various sections of Sony Sugar Company like ODS , NE , AE , FSS , HT ,Agronomy , ASA. The user is required to make following inputs</p>
				<p>1. Date.</p>
				<p><b>Agriculture Dashboard</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/HOA dashboard.jpg"/></br></a></p> 
				<p><b>PDA operator monitoring</b></p>
				<p>See illustration below.</p>
				<p><b>PDA operator monitoring</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Mgt reports/field operator.jpg"/></br></a></p> 
				<p><b>Utility</b></p>
				<p><b>Import data/Weighment Reconciliation</b></p>
				<p>This window is used to generate the report. The report thus produced shows information regarding Plots , Fields and its Weighment. The user can select the Option of D-Note , Token number , Ticket number To Proceed</p>
				<p><b>Import data / Weighment Reconciliation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/reconcile weight.jpg"/></br></a></p> 
				<p><b>Auditrail report</b></p>
				<p>See illustration below.</p>
				<p><b>Auditrail report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/report.jpg"/></br></a></p> 
				<p><b>Change Split Field:</b></p>
				<p>This window is used to change splited fields. The user is required to enter Old Field number , Plot number and New Field numbers</p>
				<p><b>Change Split Field:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/change field with splitted field.jpg"/></br></a></p> 
				<p><b>Rectify duplicate accounts</b></p>
				<p>See illustration below.</p>
				<p><b>Rectify duplicate accounts</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/rectification of duplicate accounts.jpg"/></br></a></p> 
				<p><b>Generate Fertilizer Calender:</b></p>
				<p>This window is used to generate Fertilizer calender for the particular month. The user enters the date range , Month and year to generate the calender.</p>
				<p><b>Generate Fertilizer Calender</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/sony calendar.jpg"/></br></a></p> 
				<p><b>Change Crop Cycle</b></p>
				<p>This window is used to change the crop cycle . The user is required to enter the field number to change its crop cycle from Fallow to Plant.</p>
				<p><b>Change Crop Cycle</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/change crop cycle from fallow.jpg"/></br></a></p> 
				<p><b>Print Masters</b></p>
				<p>This window is used to generate a report . The report generated shows information regarding the selected Report type like Contractor,Cuter,Supervisor</p>
				<p><b>Print Masters</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/master report.jpg"/></br></a></p> 
				<p><b>Edit NE Row Space.</b></p>
				<p>This window is used to edit the NE Row Space. The user is required to make following inputs : Filed number , Row Space , Crop Cycle , Variety to Proceed.</p>
				<p><b>Edit NE Row Space</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/edit nucleus fields.jpg"/></br></a></p> 
				<p><b>Edit Cane Fields</b></p>
				<p>This window is used to see all the fields and its related information. The user is entitled to edit , add , remove information from this form. The user can however see Total Area , Total Matured Cane Area from this form itself</p>
				<p><b>Edit Cane Fields</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/cane fields.jpg"/></br></a></p> 
				<p><b>Harvest Plan Modification</b></p>
				<p>This window is used to do modification in harvest Plan. The user must select the Sub-Location , Field number and Date to change the Harvest plan.</p>
				<p><b>Harvest Plan Modification</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/harvest plan.jpg"/></br></a></p> 
				<p><b>Initiate fertilizer request</b></p>
				<p>See illustration below</p>
				<p><b>Initiate fertilizer request.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/generate fertilizer request.jpg"/></br></a></p> 
				<p><b>Modify Duplicate Plots</b></p>
				<p>This window is used to view all the duplicate Plots . On clicking the View Button the data grid is filled with list of duplicate plots , The user can rename any plot from this form itself.</p>
				<p><b>Modify Duplicate Plots</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/rename duplicate plots.jpg"/></br></a></p> 
				<p><b>Administration Parameters:</b></p>
				<p>This window shows additional parameters used in the system. The User is entitled to change these details.</p>
				<p><b>Administration Parameters:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/Admin parameter.jpg"/></br></a></p> 
				<p><b>Functional Parameters</b></p>
				<p>Similar to Additional Parameters. This form is used to update Functional Parameters like Stack Size , 1st fertilizer request(in Months) etc.</p>
				<p><b>Functional Parameters</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Utility/functional parameter.jpg"/></br></a></p> 
				<p><b>D-Note Transfer</b></p>
				<p><b>Request For D-Note transfer.</b></p>
				<p>This window is used to create a new request for D-note transfer. The user enters the D-Note number , Check digit to proceed .The user can then select th field, Plot number to transfer the D-Note.</p>
				<p><b>Request For D-Note transfer</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Dnote transfer/dnote transfer.jpg"/></br></a></p> 
				<p><b>Approve D-Note Transfer</b></p>
				<p>This window is used to Approve or reject the D-Note Transfer request. The data grid is populated with d-note on clicking the view button after filling the input details. The user can then approve or reject the d-note transfer request.</p>
				<p><b>Approve D-Note Transfer</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Dnote transfer/dnote transfer approval.jpg"/></br></a></p> 
				<p><b>D-Note transfer Report</b></p>
				<p>This window is used to generate a report. The report shows the information regarding D-Note transfer and its details. The report shows information like D-Note number Source Field , Source Plot , Destination Field , Destination Plot , User requested etc etc.
The user needs to give the date range as input to proceed.</p>
				<p><b>D-Note transfer Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Dnote transfer/dnote transfer report.jpg"/></br></a></p> 
				<p><b>SOC</b></p>
				<p><b>Upload SOC data</b></p>
				<p>See illustration below.</p>
				<p><b>Upload SOC data</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/SOC/import data.jpg"/></br></a></p> 
				<p><b>SOC recoveries.</b></p>
				<p>See illustration below.</p>
				<p><b>SOC recoveries.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/SOC/food project recoveries report.jpg"/></br></a></p> 
				<p><b>Exceptional Reports</b></p>
				<p><b>Plots Missing Yields</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Plots whose yields are missing and its details .The user is required to make following inputs</p>
				<p>1. Zone</p>
				<p>2. Sub-Location</p>
				<p>3. Min Age</p>
				<p><b>Plots Missing Yields.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/zero yield field.jpg"/></br></a></p> 
				<p><b>Plots Missing hectarage</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Plots whose hectarage is missing and its details .The user is required to make following inputs</p>
				<p>1. Zone</p>
				<p>2. Sub-Location</p>
				<p>3. Min Age</p>
				<p><b>Plots Missing hectarage</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/zero Area field.jpg"/></br></a></p> 
				<p><b>Exceptional transactions For D-Notes</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to exceptional transactions for D-Notes and its details .The user is required to make following inputs:</p>
				<p>1. Date range</p>
				<p>2. Source for Data</p>
				<p>3. D-Note number</p>
				<p><b>Exceptional transactions For D-Notes</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/Duplicate Dnote transaction list.jpg"/></br></a></p> 
				<p><b>Amalgamation Of Fields Report:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to amalgamated fields and its details .The user is required to make following inputs</p>
				<p>1. Date range</p>
				<p>2. Zone , SubLocation</p>
				<p><b>Amalgamation Of Fields Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/Amalgamation log report.jpg"/></br></a></p> 
				<p><b>Tag/Untag Disputed Plots report:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Disputed plots which are either taged or untaged and its details .The user is required to make following inputs</p>
				<p>1. Date range</p>
				<p>2. Zone , SubLocation</p>
				<p>3. Field number</p>
				<p>4. tag type</p>
				<p><b>Tag/Untag Disputed Plots report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/tag report.jpg"/></br></a></p> 
				<p><b>High Payloads Weights:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to high payloads weights and its details .The user is required to make following inputs.</p>
				<p>1. Date range</p>
				<p>2. Purchase Center.</p>
				<p>3. Contractor</p>
				<p><b>High Payloads Weights:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Exceptional reports/out centre exceptional weighment report.jpg"/></br></a></p> 
				<p><b>NEW FUNCTIONALITIES:</b></p>
				<p><b>Document Management</b></p>
				<p>This window provides the functionality of adding a document and a scanned form into the system. The user enters the account number or Kenyan ID to view the documents related to inputted farmer.
The user when selects the document its preview gets displayed in the adjacent screen with functionality to Print / Email / Fax /Burn To DVD functionalites</p>
				<p><b>Document Management</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/sonysugar.jpg"/></br></a></p> 
				<p><b>Vehicle Norms Master</b></p>
				<p>This window is used to make the norms for Vehicle. The user selects the section , Vehicle Maker , Job type to enter the following norms:</p>
				<p>1.Work</p>
				<p>2.Distance</p>
				<p>3.Hour</p>
				<p>4.Max Capacity</p>
				<p><b>Vehicle Norms Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/vehicle make norms entry.jpg"/></br></a></p> 
				<p><b>User Access Log</b></p>
				<p>This window is used to generate the report. The report generated shows information regarding user access. The user can select the date range and user login to view the activities performed by him.The report shows information like</p>
				<p>1.User ID</p>
				<p>2.Session Id</p>
				<p>3.Session Start Date</p>
				<p>4.Session End Date</p>
				<p>5.Section</p>
				<p>6.Form Name</p>
				<p>7.Time</p>
				<p><b>User Access Log</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/user access log.jpg"/></br></a></p> 
				<p><b>Make call</b></p>
				<p>See illustration below.</p>
				<p><b>Make call</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/make call.jpg"/></br></a></p> 
				<p><b>Analyse call</b></p>
				<p>See illustration below.</p>
				<p><b>Analyse call</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/analyse call.jpg"/></br></a></p> 
				<p><b>Resolve call</b></p>
				<p>See illustration below.</p>
				<p><b>Resolve call</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/forwarded call.jpg"/></br></a></p> 
				<p><b>Reverse OGA clearance</b></p>
				<p>See illustration below.</p>
				<p><b>Reverse OGA clearance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/reverse OGA clearance.jpg"/></br></a></p> 
				<p><b>Bank Advise / Paysheet revision.</b></p>
				<p>See illustration below.</p>
				<p><b>Bank Advise / Paysheet revision</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/revise bank advice.jpg"/></br></a></p> 
				<p><b>Enter activity planned target</b></p>
				<p>See illustration below.</p>
				<p><b>Enter activity planned target</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/weekly activity target.jpg"/></br></a></p> 
				<p><b>SAP integration reference document</b></p>
				<p>See illustration below.</p>
				<p><b>SAP integration reference document</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/SAP integration.jpg"/></br></a></p> 
				<p><b>Change Dnote cancel reason</b></p>
				<p>See illustration below.</p>
				<p><b>Change Dnote cancel reason</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/Change cancellation reason.jpg"/></br></a></p> 
				<p><b>Query Old/New Dnote</b></p>
				<p>See illustration below.</p>
				<p><b>Query Old/New Dnote</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/dnote converter.jpg"/></br></a></p> 
				<p><b>Nullify future harvest planning.</b></p>
				<p>See illustration below.</p>
				<p><b>Nullify future harvest planning</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/New functionality/nullify harvest plan.jpg"/></br></a></p> 
				<p><b>MIS report</b></p>
				<p><b>System User Access Summary report</b></p>
				<p>See illustration below.</p>
				<p><b>System User Access Summary report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/MIS report/user access log summary.jpg"/></br></a></p> 
				<p><b>System Usage section wise</b></p>
				<p>See illustration below.</p>
				<p><b>System Usage section wise</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/MIS report/AMS system usage per section.jpg"/></br></a></p> 
				<p><b>Profile wise usage report</b></p>
				<p>See illustration below.</p>
				<p><b>Profile wise usage report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/MIS report/profile wise usage report.jpg"/></br></a></p> 
				<p><b>Functionality usage report</b></p>
				<p>See illustration below.</p>
				<p><b>Functionality usage report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/MIS report/Functionality usage report.jpg"/></br></a></p> 
				<p><b>Master database</b></p>
				<p><b>AMS jobs</b></p>
				<p>See illustration below.</p>
				<p><b>AMS jobs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Master database/jobs master.jpg"/></br></a></p> 
				<p><b>MISC reports</b></p>
				<p>See illustration below.</p>
				<p><b>MISC reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/master report.jpg"/></br></a></p> 
				<p><b>Fleet Management Operations.</b></p>
				<p><b>Driver Master</b></p>
				<p>See illustration below.</p>
				<p><b>Driver Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/select transporter.jpg"/></br></a></p> 
				<p><b>Vehicle Requisition request</b></p>
				<p>See illustration below.</p>
				<p><b>Vehicle Requisition request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/vehicle requisition form.jpg"/></br></a></p> 
				<p><b>Authorization of request</b></p>
				<p>See illustration below.</p>
				<p><b>Authorization of request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/vehicle requisition authorization.jpg"/></br></a></p> 
				<p><b>Approval of request</b></p>
				<p>See illustration below.</p>
				<p><b>Approval of request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/vehicle request approval.jpg"/></br></a></p> 
				<p><b>Final approval of request</b></p>
				<p>See illustration below.</p>
				<p><b>Final approval of request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/vehicle request final  approval.jpg"/></br></a></p> 
				<p><b>Road maintenance</b></p>
				<p>See illustration below.</p>
				<p><b>Road maintenance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/road maintenance plan.jpg"/></br></a></p> 
				<p><b>Vehicle service entry</b></p>
				<p>See illustration below.</p>
				<p><b>Vehicle service entry.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management operations/vehicle service details.jpg"/></br></a></p> 
				<p><b>Fleet Management Reports.</b></p>
				<p><b>Driver Reports</b></p>
				<p>See illustration below.</p>
				<p><b>Driver Reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/driver report.jpg"/></br></a></p> 
				<p><b>Driving Licence Report</b></p>
				<p>See illustration below.</p>
				<p><b>Driving Licence Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/driving licence report.jpg"/></br></a></p> 
				<p><b>DL Expiry Report</b></p>
				<p>See illustration below.</p>
				<p><b>DL Expiry Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/driving licence  expiry report.jpg"/></br></a></p> 
				<p><b>Service History Report</b></p>
				<p>See illustration below.</p>
				<p><b>Service History Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/service history report.jpg"/></br></a></p> 
				<p><b>Pending Service Report</b></p>
				<p>See illustration below.</p>
				<p><b>Pending Service Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/pending service report.jpg"/></br></a></p> 
				<p><b>Maintenance Report</b></p>
				<p>See illustration below.</p>
				<p><b>Maintenance Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/road maintenance report.jpg"/></br></a></p> 
				<p><b>Actual Vs Planned maintenance report</b></p>
				<p>See illustration below.</p>
				<p><b>Actual Vs Planned maintenance report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/road maintenance target vs Actual report.jpg"/></br></a></p> 
				<p><b>FFMS Daily Fuel Tonnage report</b></p>
				<p>See illustration below.</p>
				<p><b>FFMS Daily Fuel Tonnage report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/FFMS daily fuel tonnage.jpg"/></br></a></p> 
				<p><b>FFMS Fuel Excess/Misuse report</b></p>
				<p>See illustration below.</p>
				<p><b>FFMS Fuel Excess/Misuse report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/FFMS daily fuel excess report.jpg"/></br></a></p> 
				<p><b>FFMS Fleet Productivity report</b></p>
				<p>See illustration below.</p>
				<p><b>FFMS Fleet Productivity report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/FFMS fleet productivity report.jpg"/></br></a></p> 
				<p><b>FFMS Driver Performance report</b></p>
				<p>See illustration below.</p>
				<p><b>FFMS Driver Performance report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Fleet management reports/Driver productivity report.jpg"/></br></a></p> 
				<p><b>Farmer Litigation.</b></p>
				<p><b>Legal court master</b></p>
				<p>See illustration below.</p>
				<p><b>Legal court master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Farmer litigation/Court master.jpg"/></br></a></p> 
				<p><b>Legal case Types</b></p>
				<p>See illustration below.</p>
				<p><b>Legal case Types.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Farmer litigation/case type master.jpg"/></br></a></p> 
				<p><b>Record Legal court case</b></p>
				<p>See illustration below.</p>
				<p><b>Record Legal court case</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Farmer litigation/court cases.jpg"/></br></a></p> 
				<p><b>Court case report</b></p>
				<p>See illustration below.</p>
				<p><b>Court case report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Mgt&Admin/Farmer litigation/court cases report.jpg"/></br></a></p> 
	<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('gateway')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('oga')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		
                