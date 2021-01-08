<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Outgrowers Cane Development</title>
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
							<li><b>System overview</b></li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><b></b></p>
		<p>This interface is for contractor. For allocation of a machine, for a job to a contractor, first select a row from pending machine allocation list and row(s) from contractor /machine list, and click on Allocate.</p>
		<p><b>Outgrowers Cane development.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/outgrowers.jpg"/></br></a></p>
		<p><li><b>JOB QUEUE:</b></li></p>
		<p>This interface shows the list of pending jobs/requests. The request number , request date and time, section, job type, field number, plot number, quantity and instructions are shown.</p>
		<p>The interface has buttons called filter buttons. Clicking on these, will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, Requesting section entered</p>
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/JOB QUEUE.jpg"/></br></a></p>
		<p><li><b>SEED SUPPLY PROCESSING</b></li></p>
		<p><li>This interface is for viewing all the pending Seedcane requests as on the current date. It shows the request date, field number and description, plot number , farmer’s name, type of request, variety of the Seedcane, area, the quantity and remarks.</li></p
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/PENDING SEEDCANE REQUESTS.jpg"/></br></a></p>
		<p><li><b>FINAL SELECTION OF SUPPLY FIEDS</b></li></p>
		<p>This window is used to select fields for seed cane supply. The user can select the sub-location to view list of fields.</p>
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/FINAL SELECTION OF SUPPLY FIEDS.jpg"/></br></a></p>
		<p><li><b>Map Plots For Direct Supply</b></li></p>
		<p></p>
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/MAP PLOTS FOR DIRECT SUPPLY.jpg"/></br></a></p>
		<p><li><b>Harvesting Contractor Allocation:</b></li></p>
		<p>This interface is for the final selection of fields for harvesting of Seedcane, as on the current date. On double clicking a row, the Consignor field number , the Consignor plot number , variety, field area and age show up automatically.</p>
		<p>The user is required to enter the following information</p>
		<p>Contractor : Enter the name of contractor from the drop down menu.</p>
		<p>Date of harvest : Enter the date of harvesting.</p>
		<p>Approved : Select this, if harvesting is approved.</p>
		<p>Rejected : Select this, if harvesting is approved.</p>
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/HARVESTING CONTRACTOR ALLOCATION.jpg"/></br></a></p>
		<p><li><b>Seed Cane Harvest Program</b></li></p>
		<p>This window is used to view the harvesting program from selected date range.</p>
		<p><b></b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/SEEDCANE HARVESTINGPROGRAMME.jpg"/></br></a></p>
		<p><li><b>Generate Seedcane DNotes</b></li></p>
		<p>This interface is for generating estimated delivery notes for Seedcane. Enter any Harvesting date and Transport sector and click ‘Show’. Information like Maturity, Field number , Plot number , variety, crop cycle, age, area, yield and estimated D/notes shows up.</p>
		<p>Clicking on ‘Generate D/notes’ after selecting a row(s) will generate the delivery notes.</p>
		<p>The interface requires the user to enter the following information</p>
		<p>Harvesting Date : Enter the date for harvesting Seedcane.</p>
		<p>Transport Sector : Select the transport sector from the drop-down menu.</p>
	    <p><b>Generate Seedcane DNotes</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/SEEDCANE DNOTES.jpg"/></br></a></p>										
	    <p><li><b>Generate Excess Seedcane DNotes</b></li></p>
		<p></p>
		<p><b>Generate Excess Seedcane DNotes</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/EXCESS DNOTES.jpg"/></br></a></p>
		<p><li><b>Generate Excess Seedcane DNote</b></li></p>
		<p></p>
		<p><b>Generate Excess Seedcane DNote</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/FINAL SELECTION OF SUPPLY FIEDS.jpg"/></br></a></p>
		<p><li><b>Allot Transporter:Direct Supply</b></li></p>
		<p>This interface is for allocating transporters for the Seedcane, as on the current date. There are two tabs-‘Allocate Transporter’ and ‘De-Allocate Transporter’.</p>
		<p>For allocating a transporter for cane, select a row and click on ‘Allocate’. For de allocating a transporter for cane, select a row and click on ‘De Allocate’.</p>
		<p><b>Allot Transporter:Direct Supply</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/ALLOT TRNSPORTER.jpg"/></br></a></p>
		<p><li><b>Enter Cutter Information</b></li></p>
		<p></p>
		<p><b>Enter Cutter Information</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/FINAL SELECTION OF SUPPLY FIEDS.jpg"/></br></a></p>
		<p><li><b>Print Dnotes</b></li></p>
		<p></p>
		<p><b>Print Dnotes</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/PRINT SEEDCANE DNOTES.jpg"/></br></a></p>
		<p><li><b>Seedcane Delivery Confirmation</b></li></p>
		<p>This interface is for conformation of Seedcane delivery. On entering the D/note number , the field number and plot number show up automatically. The screen also shows the D/Note Date and the description of the field.</p>
		<p>The interface requires the user to enter the following information</p>
		<p>D-Note number : Enter the number of the delivery note.</p>
		<p>Actual Delivery Date : Enter the date of actual delivery.</p>
		<p><b>Seedcane Delivery Confirmation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/DELIVERY CNFIRMATION OF DNOTES.jpg"/></br></a></p>
		<p><li><b>Seedcane Supply Program</b></li></p>
		<p>This window is used to view the seed cane supply program.</p>
		<p><b>Seedcane Supply Program</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/SEEDCANE SUPPLY PROGRAMME.jpg"/></br></a></p>
		<p><li><b>Seedcane Prorating/Invoicing</b></li></p>
		<p>This window is used to Generate Invoice or reprint the invoice.</p>
		<p><b>Seedcane Prorating/Invoicing</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/SEED PRORATING AND INVOICE GENERATION.jpg"/></br></a></p>
		<p><li><b>Modify Transport Assistant</b></li></p>
		<p>This window is used to modify the transporter alloted for a particular field.</p>
		<p><b>Modify Transport Assistant</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE PROCESSING/MODIFY TRANSPORT ASSISTANT.jpg"/></br></a></p>
		<p><li><b>SEEDCANE DNOTES</b></li></p>
		<p><li><b>Query D-Note For Weighing:</b></li></p>
		<p>This window is used to view the list of D-Nptes which are marked for Weighment.</p>
		<p><b>Query D-Note For Weighing:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/queryDNpoteforweighing.jpg"/></br></a></p>
		<p><li><b>Cancel SeedCane D-Note:</b></li></p>
		<p>This window is used to cancel the seed cane d-note.</p>
		<p><b>Cancel SeedCane D-Note:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/CANCEL DNOTES.jpg"/></br></a></p>
		<p><li><b>D-Note Enquiry:</b></li></p>
		<p>This window is used to do enquiry related to particular D-Note. It shows its details and an option to Activate the D-Note.</p>
		<p></p>
		<p><b>D-Note Enquiry:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/DNOTE ENQUIRY.jpg"/></br></a></p>
		<p><li><b>Re-Print D-Notes:</b></li></p>
		<p>This window is used to re print the d-note. The user can view the d-notes which are filtered on the basis of date/ field number etc</p>
		<p></p>
		<p><b>Re-Print D-Notes:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/REPRINT DNOTES.jpg"/></br></a></p>
		<p><li><b>Change in Seedcane consignee:</b></li></p>
		<p>This interface is for noting the change in consignee of Seedcane. On entering the D/Note number , The original consignee details like field number , plot number , route number show up automatically.</p>
		<p>The interface requires the user to enter the following information</p>
		<p>D/Note number : Enter the delivery note number of the stack/heap.</p>
		<p>Field number : Enter the field number of the new consignee.</p>
		<p>Plot number : Enter the plot number of the new consignee</p>
		<p><b>Change in Seedcane consignee:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/SEEDCANE CHANGE IN COSIGNEE.jpg"/></br></a></p>
		<p><li><b>Re-Direct SeedCane to Mill Cane:</b></li></p>
		<p>This window is used to re-direct seedcane to mill cane.The user is expected to enter the d-note which is needed to be re-directed.</p>
		<p><b>Re-Direct SeedCane to Mill Cane:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/REDIRECT SEEDCANE TO MILLCANE.jpg"/></br></a></p>
		<p><b>D-Note On Farmer Request:</b></p>
		<p>This window is used to generate D-Notes on request from Farmer. This window allows the user to create additional d-notes.</p>
		<p><b>D-Note On Farmer Request:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/DNOTES ON FARMERS REQUEST.jpg"/></br></a></p>
		<p><b>Change Consignee :</b></p>
		<p>This window is used to change the consignee for the D-Note</p>
		<p><b>Change Consignee </b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/CHANGE COSIGNEE PATCH.jpg"/></br></a></p>
		<p><b>SeedCane Recipient Transport Zone</b></p>
		<p></p>
		<p><b>SeedCane Recipient Transport Zone</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/SEEDCANE DNOTES/update consignee transport zone.jpg"/></br></a></p>
		<p><b>ADDITIONAL/GAPPING SEEDCANE.</b></p>
		<p>This window is used to make additional seedcane allotment. The user selects the Target Field and Sources Of seed</p>
		<p><b>ADDITIONAL/GAPPING SEEDCANE</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/GAPPING SEEDCANE/SELECT LOTS FOR SEEDCANE HARVESTING.jpg"/></br></a></p>
		<p><b>Allot Transporter</b></p>
		<p>This window is used to allot transporter For cane Transport. The user selects the transporter from the data grid to allot them for cane transportation.</p>
		<p><b>Allot Transporter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/GAPPING SEEDCANE/ALLOT TRANSPORTER.jpg"/></br></a></p>
		<p><b>CLEAR SEEDCANE FIELDS:</b></p>
		<p>This window is used to clear a particular field for payment. The user enters the sub-location , zone and field number to clear them for payment.s</p>
		<p><b>CLEAR SEEDCANE FIELDS</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/CLEAR SEEDCANE FIELDS.jpg"/></br></a></p>
		<P><b>FERTILIZER PROCESSING</b></P>
		<p><b>View Approved Requests</b></p>
		<p>This interface is for assigning Lorries that are available at the moment. The interface shows the list of Lorries as well as those Lorries, which are available. Select a row under lorries, click on-->
          to show it under Available Lorries, and to remove a selected row from Available Lorries, click on<--</p>
		<p><b>View Approved Requests</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/VIEW APPROVED REQUEST.jpg"/></br></a></p>
		<p><b>Select Availabe Trucks:</b></p>
		<p>This interface is for allotting fertilizer loads to trucks. There are two tabs-Making Fertilizer Truck loads and Undo. Select a lorry number, and then select the pending request. Then click, Allocate.
           Clicking on any lorry number will show the maximum capacity, contractor, allocated load and the balance capacity of the lorry.
           To undo the allotted truckloads, go to the Undo tab and click on
           Deallocate, after selecting a row.</p>
		<p><b>Select Availabe Trucks:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/AVAILABLE TRUCKS.jpg"/></br></a></p>
		<p><li><b>Make Fertilizer Truckloads:</b></li></p>
		<p>This interface is for confirming fertilizer deliveries. Enter the lorry number, trip number , and dispatch date of the lorry and click on ‘Show Consignments’.
              For any selected row, then enter the return date of the lorry the time and the meter reading when the lorry reached. Then, click on ‘Processed’.</p>
		<p>The user is required to enter information like,</p>
		<p>Lorry number : Enter the lorry number</p>
		<p>Trip number : Enter the trip number</p>
		<p>Dispatch date : Enter the date on which lorry was dispatched</p>
		<p>Lorry return time : Enter the time at which lorry returned.</p>
		<p>Closing meter reading : Enter the meter reading of the lorry when it returned.</p>
		<p></p>
		<p><b>Make Fertilizer Truckloads:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/MAKE FERTILIZER TRUCK LOADS.jpg"/></br></a></p>
		<p><li><b>Fertilizer Supply Programme:</b></li></p>
		<p>This window is used to view the Fertilizer Supply Programme for the date range. The user can however see the Program for particular Lorry or Trip number also.</p>
		<p><b>Fertilizer Supply Programme:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/FERTILIZER SUPPLY PROGRAMME.jpg"/></br></a></p>
		<p><li><b>View Truck Consignments:</b></li></p>
		<p>This window is used to view the transactions related to a particular Truck number / Trip number or even Field number</p>
		<p><b>View Truck Consignments:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/VIEW TRUCKTOR CORE ASSIGNEMMENTS.jpg"/></br></a></p>
		<p><li><b>Fertilizer invoices:</b></li></p>
		<p>This interface generates lorry invoices. After selecting by double clicking a lorry number from left pane, enter the details of the lorry in the tabs provided. It will show load of that lorry with fertilizer details in right pane. Then click on ‘Generate Invoice’.</p>
		<p>The user is required to enter the following information</p>
		<p>Gross weight : Enter the weight of the truck with the cane.</p>
		<p>Tare weight : Enter the weight of the truck alone.</p>
		<p>Start reading : Enter the odometer reading of the truck at starting.</p>
		<p><b>Fertilizer invoices</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/MAKE LORRY INVOICES.jpg"/></br></a></p>
		<p><li><b>Fertilizer Delivery Confirmation:</b></li></p>
		<p>This interface is for entering changes in the lorry number in case of breakdown. On the screen, the consignments for which trucks were changed needs to be selected, and then old lorry number, and new lorry number, should be entered.</p>
		<p>The user is required to enter information like,</p>
		<p>Old Lorry number : Enter the number of the lorry which broke down.</p>
		<p>New Lorry number : Enter the number of the lorry which replaced the broken down lorry</p>
		<p></p>
		<p><b>Fertilizer Delivery Confirmation:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/CONFIRM FERTILIZER DELIVERIES.jpg"/></br></a></p>
		<p><li><b>Self Collection of Fertilizer:</b></li></p>
		<p>This report is for showing the seedcane lying in the field for the inputted number of stale days.</p>
		<p>The user is required to enter the following information</p>
		<p>Date : Enter the date to which report is required.</p>
		<p>Stale Days</p>
		<p><b>Self Collection of Fertilizer</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/hand delivery of fertilizer.jpg"/></br></a></p>				
		<p><li><b>Re-Schedule Fertilizer Supply:</b></li></p>
		<p>This report is for showing the seedcane stock reconciliation for any entered dates.</p>
		<p>Date : Enter the date for which report is required.</p>
		<p>Sub-Locations</p>
		<p><b>Re-Schedule Fertilizer Supply:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/excluding or rescheduling fertilizer.jpg"/></br></a></p>
		<p><li><b>Manage Truck Breakdown</b></li></p>
		<p>This report is for showing the seedcane mean weighment details for any entered range of dates.</p>
		<p>The user is required to enter the following information</p>
		<p>From : Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Weighment Center</p>
		<p>Sub-Locations</p>
		<p><b>Manage Truck Breakdown:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/breakdown cases.jpg"/></br></a></p>
		<p><li><b>Nullify Fertilizer Requests</b></li></p>
		<p>This report is for showing the seedcane Prorating details for any entered range of dates.</p>
		<p>The user is required to enter the following information</p>
		<p>From : Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Zone</p>
		<p>Sub-Locations</p>
		<p>Field number</p>
		<p>Plot number</p>
		<p><b>Nullify Fertilizer Requests:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/confirm second fert.jpg"/></br></a></p>
		<p><li><b>REQUEST AE FOR ROAD REPAIR</b></li></p>
		<p>This interface shows the requests to AE for Road Repair. It has two tabs-Current Road Repair Request and Existing Road Repair. It shows the request date and Road name/Remarks</p>
		<p>This interface requires the user to fill the following information</p>
		<p>Request Date: Date on which request is made.</p>
		<p>Road Name : Name of the road to be repaired/Remarks (if any).</p>
		<p><b>Request for road repair:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/FERTILIZER PROCESSING/confirm second fert.jpg"/></br></a></p>
		<p><b>SEEDCANE REPORTS</b></p>
		<p><b>Seedcane Mapping Report</b></p>
		<p>This report is for showing the list of seedcane mappings for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<P>Zone</P>
		<p>Sub-Locations.</p>
		<p>From-To Field number.</p>
		<p><b>Seedcane Mapping Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane mapping report.jpg"/></br></a></p>
		<p><b>Seedcane Harvesting/Delivery Report</b></p>
		<p>This report is for showing the seedcane harvesting/delivered details for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<P>Zone</P>
		<p>Sub-Locations.</p>
		
		<p><b>Seedcane Harvesting/Delivery Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane harvesting.jpg"/></br></a></p>
		<p><b>Seedcane Lying in the Field</b></p>
		<p>This report is for showing the seedcane lying in the field for the inputted number of stale days.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date to which report is required.</p>
		<p><b>Seedcane Lying in the Field</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane harvesting.jpg"/></br></a></p>
		<p>Stale Days</p>
		<p><b>Seedcane Transport Report</b></p>
		<p>This report is for showing the seedcane stock reconciliation for any entered dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date for which report is required.</p>
		<p>Sub-Locations.</p>
		<p><b>Seedcane Transport Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane stock reconcilliation.jpg"/></br></a></p>
		<p><b>Seedcane Mean Weighments Report:</b></p>
		<p>This report is for showing the seedcane mean weighment details for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Weighment Center.</p>
		<p>Sub-Locations.</p>
		<p><b>Seedcane Mean Weighments Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane mean weight.jpg"/></br></a></p>
		<p><b>Seedcane Prorating Report:</b></p>
		<p>This report is for showing the seedcane Prorating details for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Zone.</p>
		<p>Sub-Locations.</p>
		<p>Field number.</p>
		<p>Plot number.</p>
		<p><b>Seedcane Prorating Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seed prorating report.jpg"/></br></a></p>
		<p><b>Seedcane Timeline Report:</b></p>
		<p>This report is for showing the seedcane timeline details for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>Date From: Enter the date from which report is required.</p>
		<p>Date To : Enter the date till which report is required.</p>
		<p>Transporter.</p>
		<p>Field From , Field To</p>
		<p><b>Seedcane Timeline Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/seedcane timeline report.jpg"/></br></a></p>
		<p><b>Planting Summary Report.</b></p>
		<p>This report is for showing the planting summary for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Zone.</p>
		<p>Sub-Locations.</p>
		<p><b>Planting Summary Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Seedcane reports/planting summary report.jpg"/></br></a></p>
		<p><b>FERTILIZER REPORT.</b></p>
		<p><b>Fertilizer Invoice Report.</b></p>
		<p>This report is for showing the fertilizer Invoice for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From: Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required.</p>
		<p>Zone.</p>
		<p>Sub-Locations.</p>
		<p>Field number etc</p>
		<p><b>Fertilizer Invoice Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/list of fert invoices.jpg"/></br></a></p>
		<p><b>Fertilizer Distribution Report.</b></p>
		<p>This report is for showing the fertilizer distribution report for any entered date.</p>
		<p>The user is required to enter the following information.</p>
		<p>Date: Enter the date from which report is required.</p>
		<p>Zone.</p>
		<p>Sub-Locations.</p>
		<p>Field number etc</p>
		<p><b>Fertilizer Distribution Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/fert distribution.jpg"/></br></a></p>
		<p><b>Fertilizer Request Forecast Report.</b></p>
		<p>This report is for showing the fertilizer request forecast report for any entered range of duration.</p>
		<p>The user is required to enter the following information.</p>
		<p>Month</p>
		<p>Year</p>
		<p>Zone</p>
		<p>Sub-Locations</p>
		<p>Field number</p>
		<p>Fertilizer Type</p>
		<p><b>Fertilizer Request Forecast Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/fert req. forecast.jpg"/></br></a></p>
		<p><b>Fertilizer Target Report.</b></p>
		<p>This report is for showing the fertilizer target report for any entered range of dates.</p>
		<p>The user is required to enter the following information.</p>
		<p>From : Enter the date from which report is required.</p>
		<p>To: Enter the date till which report is required.</p>
		<p><b>Fertilizer Target Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/fert target.jpg"/></br></a></p>
		<p><b>List of fertilizer invoices.</b></p>
		<p>This report is for showing the list of fertilizer invoices for any entered range of dates. It pulls up the invoice number , date, field number , plot number , farmer�s name, fertilizer, quantity, rate and amount.</p>
		<p>The user is required to enter the following information.</p>
		<p>From : Enter the date from which report is required.</p>
		<p>To: Enter the date till which report is required.</p>
		<p><b>List of fertilizer invoices.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/list of chemical invoices.jpg"/></br></a></p>
		<p><b>View approved chemical request.</b></p>
		<p>See image below.</p>
		<p><b>View approved chemical request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/pending chem requirements.jpg"/></br></a></p>
		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Fertilizer chemical report/pending chem requirements2.jpg"/></br></a></p>
		<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('ocd_reports')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('ods_reports')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		