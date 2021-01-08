<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Nucleus Estate</title>
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
							<li>System overview.</li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><li><b>NUCLEUS ESTATE :</b></li></p>
		<p><li><b>JOB QUEUE:</b></li></p>
		<p>This interface shows the list of pending jobs/requests. The request number, request date and time, section, job type, field number, plot number, quantity and instructions are shown.
           The interface has buttons called filter buttons. Clicking on these, will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, Requesting section entered.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Job queue.jpg"/></a></p>
		<p><b>CANE FIELDS</b></p>
		<p>This interface shows the list of all the fields of ODS with their Field number, Description, Crop Cycle, Planting Date, Maturity Date, Parent field, Sector, Route, Nursery, Type of land, whether accessible or not, Current Status etc.
           The interface has buttons called filter buttons. Clicking on these, will show a filtered list depending on Cane Variety, Date of Planting, Date of Maturity, Field number, Transport sector, Transport route number , Nursery Status and Crop Cycle.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/CANEFIELDS.png"/></a></p>
		<p><b>Confirm Date Of Planting:</b></p>
		<p>Using this window user can confirm date of planting for given field.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/CONFIRM DATE OF PLANTING.jpg"/></a></p>
		<p><b>CROP GROWTH MONITORING</b></p>
		<p>Generate Crop Development Job Schedule:</p>
		<p>This report shows the crop development information of the field in terms of variety, crop cycle, age (in months), event and estimated start date. User can enter a range of dates to generate the reports for that time period.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Crop Development Schedule.jpg"/></a></p>
		<p><li><b>Enter Crop Schedule Feedback</b></li></p>
		<p>This is the feedback interface for status of crop growth. It shows the fields with its related information in the grid. User can double click on the selected row, to enter status of the field</p>
		<p>The interface requires the user to enter the following information</p>
		<p>1. Start date : Enter the starting date of the job</p>
		<p>2. End date : Enter the date when the job was completed</p>
		<p>3. % completed : Percent of work completed</p>
		<p>4. Remarks : Enter remarks if any.</p>
		<p>5. Estimated Yield : Enter the estimated yield in tonnes.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Crop Monitoring Feed Form Updation.jpg"/></a></p>
		<p><b>Yield Estimation</b></p>
		<p>This interface is for the user, to enter the estimated yield date and the quantity of yield, for any field. Double click the field row to enter the information.</p>
		<p>The interface requires the user to enter the following information</p>
		<p>1. Supervisor : Enter the name of the supervisor.</p>
		<p>2. Yield Estimate Date : Enter the estimated date of yield.</p>
		<p>3. Estimated Yield : Enter the estimated yield of cane</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Yield Estimation.jpg"/></a></p>
		<p><b>SPECIFY SEEDCANE VARIETY</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/List Pending Supply Request.jpg"/></a></p>
		<p><b>SEEDCANE REQUEST</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Current Seed Request.jpg"/></a></p>
		<p><b>Enter Smut Incident.</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Smut Incident.jpg"/></a></p>
		<p><b>Request For Chemical/Herbicide.</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Generate chemicals.jpg"/></a></p>
		<p><b>Approve chemical / herbicide request.</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/pending chemical requirements.jpg"/></a></p>
		<p><b>Generate SIV - Chemical / Herbicide</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/generate SIV request.jpg"/></a></p>
		<p><b>Chemical / Herbicide supply program</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/herbicide supply program.jpg"/></a></p>
		<p><b>Confirm Delivery</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/Confirm fertilizer delivery.jpg"/></a></p>
		<p><b>Chemical Supply Report</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Crop growth monitoring/chemical report.jpg"/></a></p>
		<p><b>CANE FIRE MENU</b></p>
		<p><b>Report Cane Fire incidents</b></p>
		<p>This interface is for reporting cane fires in the fields. It requires the user to enter some information</p>
		<p>1. Field number* : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.</p>
		<p>2. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of cane area, estimated</p>
		<p>3. Date of cane burnt : Date on which cane field burned.</p>
		<p>4. % area : The % of area burnt.</p>
		<p>5. Date reported : Date on which the fire was reported.</p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/cane fire cases.jpg"/></a></p>
		<p><b>Pending Cane fire analysis by Agronomy</b></p>
		<p>This interface shows the pending cane fire analysis by agronomy, as on the current date. For a fire in any field or plot, it lists the report date, burnt rate, field number , description, plot number , % of cane burnt, split field number and the date of splitting</p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/pending fire cases.jpg"/></a></p>
		<p><b>Burnt cane disposition activity</b></p>
		<p>This interface is for entering the burnt cane disposition activity. It shows field number , description, plot number , farmer’s name, area, parent field number, and plot number , for any field selected. The user is required to enter the following information</p>
		<p>Date of Disposition : Date on which field has been disposed.</p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/burnt plot report.jpg"/></a></p>
		<p><b>Split Plot</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/split plot.jpg"/></a></p>
		<p><b>Merge Plot</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/merge plot.jpg"/></a></p>
		<p><b>Split Field</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/split fields.jpg"/></a></p>
		<p><b>Amalgamate Field</b></p>
		<P>See illustration below</P>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Cane Fire Menu/Amalgation.jpg"/></a></p>
		<p><b>CONTRACTOR JOB PROCESSING.</b></p>
		<p><b>Request for Contractor jobs.</b></p>
		<p>Using this interface user can raise requests like Fertilizer Issue, Land Preparation Request, Request for Road Repair etc. against a field or plot.
            The interface requires the following information to be entered by the user</p>
		<p>1. Field number* : Field number of field for which request is being made.</p>
		<p>2. Plot number* : Plot number of plot for which request is being made.</p>
		<p>3. Request Type : Request Type can be selected from the drop down menu.</p>
		<p>4. Area/Qty : Area/ Quantity for which request is being raised.</p>
		<p>5. Remarks : Remarks (if any.)</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/contractor job request.jpg"/></a></p>
		<p><b>Contractor Jobs Approval:</b></p>
		<p>This interface shows the status of contractor jobs. It has three tabs- Awaiting Jobs, Approved Jobs, Rejected Jobs. It shows information like job request number , field number and description, plot number , farmers name, request type, area and quantity allocated and remarks if any</p>
		<p>User can select/deselect the row(s) by using the provided buttons or by clicking on the rows</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/approval of contractor.jpg"/></a></p>
		<p><b>Final  Approval:</b></p>
		<p>See illustration below.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/final approval.jpg"/></a></p>
		<p><b>Contractor Allocation:</b></p>
		<p>This interface is used to allocate job to contractors. The interface has two tabs Pending For Contractor Allocation and Contractor Allocated</p>
		<p>The First tab Pending for Contractor Allocation has two lists, one showing the list of pending requests, and the other showing the list of contractors.</p>
		<p>For allocation of a job to a contractor, first select the job from pending job list and contractor from contractor list, and click on Allocate. For Deallocation, select the request and click on the DeAllocate button</p>
		<p>Note: At a time only one job request can be selected whereas multiple contractors can be selected using shift + click</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/contractor allocation.jpg"/></a></p>
		<p><b>Quality Assurance:</b></p>
		<p>See illustration below.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/quality assurance.jpg"/></a></p>
		<p><b>Contractor Work Certification:</b></p>
		<p>This interface shows the contractor work certificate. 
		It has three tabs-Awaiting Jobs, Completed Jobs and Failed Jobs. Selecting any rowwould automatically show the field number, plot number, contractor, request type, area allocated, contractor allocation date and the expected completion date.</p>
		<p>The user is required to enter information like,</p>
		<li>Completion Status : Select whether job is completed or failed.<li>
		<li>Work Start Date : Enter the date for starting work.<li>
		<li>Completion date : Enter the date when work has been completed.<li>
		<li>Remark : Enter remark(s) if any.<li>
		<li>View Pending Seed Cane Requirements:<li>
		<li><li>
		<p><p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/contractor work certificate.jpg"/></a></p>
		<p><b>Operation Expenditure Report</b></p>
		<p><p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Contractor Job Processing/operation expenditure.jpg"/></a></p>
		<p><b>SEED CANE SUPPLY PROCESSING</b></p>
		<p>View Pending Seed Cane Requirements:</p>
		<p>This interface shows the pending Seedcane requests as on the current date. It shows the request date, Field number and description, Plot number , Farmer’s name, type of request, variety, area, quantity and remarks.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/list pending seed supply.jpg"/></a></p>
		<p><b>Select Nursery For Seed cane Supply:</b></p>
		<p>This window is used to view the nurseries available in particular sub-location for seed cane supply.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/select field for seed cane.jpg"/></a></p>
		<p><b>Final Selection of Nursery:</b></p>
		<p>This window is used to approve or reject the nursery for seed cane supply.</p>
		<p><p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/final field selection of seedcane.jpg"/></a></p>
		<p><b>Map Plots For Seed Cane Supply:</b></p>
		<p>This interface is for selecting fields for supply of Seedcane. There are two tabs-Pending for Allocation and Allocated plots. For the first tab, the screen shows the list of plots having requirement for Seedcane and those which can supply Seedcane.
            Select a row(s) from pending plots for seed request, and select a row(s) from plots available for seed, and click Allocate, to allocate Seedcane to a plot.</p>
		<li>To view the list of allocated plots, click on the second tab.<li>
		<li>The interface requires the user to enter the following information<li>
		<li>Plots Available For Seed : Enter the Plot number from the drop down menu.<li>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/select plots for seedcane harvesting.jpg"/></a></p>
		<p><b>Final Selection For Seed Cane Harvesting:</b></p>
		<p>This interface is for the final selection of fields for harvesting of Seedcane, as on the current date. On double clicking a row, the Consignor field number, the Consignor plot number , variety, field area and age show up automatically.</p>
		<p>The user is required to enter the following information</p>
		<li>Contractor : Enter the name of contractor from the drop down menu</li>
		<li>Date of harvest : Enter the date of harvesting.</li>
		<li>Approved : Select this, if harvesting is approved.</li>
		<p>Rejected : Select this, if harvesting is approved.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/final field selection of seedcane.jpg"/></a></p>
		<p><b>Generate Seed Cane D/Notes:</b></p>
		<li>Clicking on Generate D/notes after selecting a row will generate the delivery notes.The interface requires the user to enter the following information</li>
		<p>1. Harvesting Date : Enter the date for harvesting Seedcane.</p>
		<p>2. Transport Sector : Select the transport sector from the drop-down menu</p>
		<p>This interface is for generating delivery notes for Seedcane. Enter any Harvesting date and Transport sector and click Show. Information like Maturity, Field number , Plot number , variety, crop cycle, age, area, yield and estimated D/notes shows up.</p>
		<p><b>Generate Seed Cane D/Notes:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/enter actual harvesting information.jpg"/></br></a></p>
		<p><b>D Note's Checkdigit:</b></p>
		<p>This window is used to get the check digit for a particular d-Note.</p>
		<p><b>DNote's Checkdigit</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/get D Notes.jpg"/></br></a></p>
        <p><b>Seed Cane Delivery Confirmations:</b></p>
		<p>This interface is for conformation of Seedcane delivery. On entering the D/Note number , the field number and plot number show up</p>
		<p>The interface requires the user to enter the following information</p>
		<p>1. D-Note number : Enter the number of the delivery note<p>
		<p>2. Actual Delivery Date : Enter the actual date of delivery</p>
		<p><b>Seed Cane Delivery Confirmations</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/delivery confirmation.jpg"/></br></a></p>
		<p><b>Allot Transporter</b></p>
		<p>This window is used to allot transporter for cane transport.There are 3 data grids in this window which shows pending d-note for cane transport , available transporters and seed cane consignee</p>
		<p><b>Allot Transporter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/allot transporter.jpg"/></br></a></p>
		<p><b>Seed Cane Supply Program</b></p>
		<p>This window is used to view the program for seed cane supply. Where the user is entitled to view either all the seed cane supply requests or the requests for which transporter is allocated</p>
		<p><b>Seed Cane Supply Program</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/seedcane supply programme.jpg"/></br></a></p>
		<p><b>Seed Cane Delivery Confirmation:</b></p>
		<p>This window is used to confirm the seed cane supply by entering the actual Delivery date and saving the details</p>
		<p><b>Seed Cane Delivery Confirmation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/seedcane supply programme.jpg"/></br></a></p>
		<p><b>Map Plots for Additional Seed cane supply:</b></p>
		<p>This window is used to map plots for additional seed cane supply.</p>
		<p><b>Map Plots for Additional Seed cane supply.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/select plots for seedcane harvesting.jpg"/></br></a></p>
		<p><b>Re-Print D-Note:</b></p>
		<p>This window is used to reprint the d-note. The user is required to enter the date from , to and field number along with associated plot number to view and print the d-note.</p>
		<p><b>Re-Print D-Note.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/reprint d notes.jpg"/></br></a></p>
		<p><b>Allot Additional Transporter:</b></p>
		<p>This window is used to allot additional transporter for transporting seed cane.</p>
		<p><b>Allot Additional Transporter.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/seedcane supply process/allot transporter.jpg"/></br></a></p>
		<p><b>FERTILIZER SUPPLY PROCESSING</b></p>
		<p><b>View Pending Fertilizer Requirements:</b></p>
		<p>This interface shows the list of pending fertilizer requirements as on the current date. It shows details like request date, field number , plot number , farmers name, area, crop cycle, fertilizer and quantity.</p>
		<p><b>View Pending Fertilizer Requirements:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/pending fertilizer requirement.jpg"/></br></a></p>
		<p><b>Generate SIV Requests For Fertilizer:</b></p>
		<p>This interface is for generating SIV requests for fertilizer. The screen shows information like request date, sector, field number, route number, fertilizer, area, quantity, quantity issued and balance quantity.</p>
		<p>Double clicking on any row, pulls up the sector, field number , fertilizer and quantity. Double click on any row to edit details.</p>
		<p>The interface requires the user to enter the following information</p>
		<p>number of bags : Enter the number of bags of fertilizer to be issued.</p>
		<p><b>View Pending Fertilizer Requirements:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/generate SIV.jpg"/></br></a></p>
		<p><b>Confirm Fertilizer Delivery:</b></p>
		<p>This window is used to confirm the Fertilizer delivery on the basis of SIV number </p>
		<p><b>View Pending Fertilizer Requirements:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/confirm fertilizer delivery.jpg"/></br></a></p>
		<p><b>Enter Lorry Availability:</b></p>
		<p>This window is used to view all the lorries and available lorreis from that list.</p>
		<p><b>Enter Lorry Availability:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/lorry availabity.jpg"/></br></a></p>
		<p><b>Make Fertilizer Truck Load:</b></p>
		<p>This window is used to generate a SIV Request and to store regarding the transfer , capacity in Kg of Fertilizer being transported.</p>
		<p><b>Make Fertilizer Truck Load:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/make fertilizer truck load.jpg"/></br></a></p>
		<p><b>Fertilizer Supply Program:</b></p>
		<p>This window is used to view the fertilizer supply program from a required From date to To Date. The user can even filter on the basis of Lorry No and Trip number</p>
		<p><b>Fertilizer Supply Program:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/fertilizer supply.jpg"/></br></a></p>
		<p><b>Updated List of debits/Credits:</b></p>
		<p>This window is used to view all the list of debits/ credits for a particular Field number on the basis of Truck number and Trip number</p>
		<p><b>Updated List of debits/Credits:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/updated debits-credits.jpg"/></br></a></p>
		<p>Make Lorry Invoice:</p>
		<p>This window is used to make invoice for lorries. The user selects a particular lorry to generate its invoice.</p>
		<p><b>Make Lorry Invoice:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/make lorry invoices.jpg"/></br></a></p>
		<p><b>Confirmation Of delivery:</b></p>
		<p>This interface is to confirm fertilizer deliveries. Enter the lorry number , trip number , dispatch date and click Show Consignments. This will pull upthe entire grid showing field number , plot number , farmer’s name, fertilizer,
quantity and marked as undelivered</p>
		<p>It requires the user to enter the following information:</p>
		<p>Lorry number : Enter the lorry number</p>
           <p>Trip number : Enter the number of the trip.</p>
            <p>Dispatch Date : Enter the date of dispatch of lorry.</p>
            <p>Lorry return date : Enter the date when lorry returned.</p>
            <p>Lorry return time : Enter the time the lorry returned.</p>
            <p>Closing Meter reading : Enter the meter reading of lorry when it returned</p>
		<p><b>Confirmation Of delivery:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/confirm fertilizer delivery.jpg"/></br></a></p>
		<p>Request for Fertilizer supply</p>
		<p>refer to image</p>
		<p><b>Request for Fertilizer supply</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/fertilize supply processing/request for fertilizer supply.jpg"/></br></a></p>
		<p><b>POST HARVESTING PROCESS</b></p>
		<p><b>Generate Land Preparation Request:</b></p>
		<p>This interface is to generate land preparation requests. It shows all the NE Fields with its relative information as on the current date. Clicking on
‘Update for Land Preparation’ after selecting a row(s) will generate the request.</p>
                <p><b>Generate Land Preparation Request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Post Harvesting Processing/land preparation request.jpg" /></br></a></p>
				<p><b>Generate Extension/Termination List:</b></p>
				<p>This window is used to generate a list of terminated or extended fields</p> 
                <p><b>Generate Extension/Termination List</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Post Harvesting Processing/post harvesting process.jpg" /></br></a></p>
		<p><b>MISCELLANEOUS</b></p>
		<p><b>Request to AE for Bush Cleaning:</b></p>
		<p>This interface shows the requests to AE for Bush Cleaning. It has
two tabs-Current Request for Bush Cleaning and Existing Request for Bush
cleaning. On entering plot number, and field number , the variety, crop cycle,
cane area and age, show up automatically on the screen.</p>
                <p>The interface requires the user to enter the following information</p>
           		<p>1. Field number* : Field number of field where bush cleaning is to be done.</p>
                <p>2. Plot number* : Plot number of plot where bush cleaning is to be done.
On selecting plot number , variety, crop cycle, cane area, age
will be shown.</p> 
                <p>3. Remarks : Remarks if any</p>
                <p><b>Request to AE for Bush Cleaning</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request for AE for bush.jpg"/></br></a></p>
                <p><b>Request to AE for Road Repair:</b></p>
		<p>This interface shows the requests to AE for Road Repairs. It has two
tabs-Current Road Repair Request and Existing Road Repair Request. It
shows the request date and Road name/Remarks.</p>
                <p>This interface requires the user to fill the following information.</p>
                <p>1. Request Date* : Date on which request is made.</p> 
                <p>2.Road Name : Name of the road to be repaired/Remarks (if any).</p>     
                <p><b>Request to AE for Bush Cleaning</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request AE for road repair.jpg"/></br></a></p>    
				<p><b>Request to Agronomy for Pest/Disease Assessment:</b></p>
				<p>This interface is for submission of request to Agronomy for Pest/Disease Assessment. On entering the field number ,and plot number, the
cane area, variety, crop cycle, age show up automatically.</p>
                <p>This interface requires the user to fill the following information.</p>
                <p>1. Field number* : Field number of field which needs to be assessed for pests and diseases.</p> 
                <p>2.Plot number : Field number of field which needs to be assessed for pests and diseases. On selecting plot number, it will show the
related details in the terms of variety, crop cycle, cane area, age.</p>   
                <p>Remarks : Remarks if any.</p>
                <p><b>Request to Agronomy for Pest/Disease Assessment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request to agronomy for pest or disease assessment.jpg"/></br></a></p>    
                <p><b>Request Agronomy for Germination Assessment:</b></p>
				<p>Request to Agronomy for Germination Assessment can be done through this interface. It has two tabs-Current Request for Germination
Assessment and Existing Request for Germination Assessment. On entering the field number , and plot number, the cane area, variety, crop cycle, age
show up automatically</p>
                <p>This interface requires the user to fill the following information</p>
                <p>1. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing
F1 key.</p> 
                <p>2.Plot number* : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected
field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area, age.</p>
                 <p>Remarks : Remarks if any.</p>
                <p><b>Request Agronomy for Germination Assessment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request agronomy for germination assessment.jpg"/></br></a></p>       
                <p><b>Request Agronomy for Assessment of Gaps:</b></p>
		<p>Request to Agronomy for Assessment of Gaps can be done
through this interface. It has two tabs-Current Request for Assessment of Gaps and Existing Request for Assessment of Gaps</p>
                <p>On entering the field number ,and plot number, the cane
area, variety, crop cycle, age show up automatically.</p>
                <p>This interface requires the user to fill the following information</p>
                <p>1. Field number : Field number can be filled directly or can be selected
from the list by double clicking on the text box or pressing F1 key.</p> 
                 <p>2.Plot number* : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected
field. On selecting plot number , it will show the related details in the terms of variety, crop cycle, cane area, age.</p>
                <p>Remarks : Remarks if any.</p>
                <p><b>Request Agronomy for Assessment of Gaps:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request agronomy for assessment of gaps.jpg"/></br></a></p>       
                <p><b>Request For Soil Analysis:</b></p>
		<p>Using this window user can generate an request for soil analysis for that
particular field. The user needs to give following inputs :-</p>
                <p>Sub-Location</p>
                <p>Field number</p>
                <p>Plot number</p> 
                <p><b>Request For Soil Analysis:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/request for soil analysis.jpg"/></br></a></p>       
                <p><b>Request For Foliar Analysis:</b></p>
		<p>This window is used to generate a request for foliar analysis. The user
enters the sub-location, field no, plot number and remarks to generate a request.</p>
                <p><b>Request For Foliar Analysis:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/foliar request.jpg"/></br></a></p>       
                <p><b>Request For Seed cane Treatment:</b></p>
				<p>This window is used to generate a request for seed cane treatment. The user enters the field no, plot number and remarks to generate an request.</p>
                <p><b>Request For Seed cane Treatment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/seed cane treatment request.jpg"/></br></a></p>       
                <p><b>Additional Seed Cane Request:</b></p>
				<p>This window is used to generate a request for Additional Seed cane. The user enters the sub-location,field no, plot number , qty ,and remarks to
generate an request</p>
                <p><b>Additional Seed Cane Request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/additional  seed request.jpg"/></br></a></p>       
                <p><b>Request For Gap Filling</b></p>
				<p>This window is used to generate a request for Additional Seed for gap filling. The user enters the sub-location,field no, plot number , qty ,and remarks
to generate an request.</p>
                <p><b>Request For Gap Filling</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/additional  seed request for gapping.jpg"/></br></a></p>           
                <p><b>Approval For additional Seed cane supply</b></p>
				<p>This window is required to approve or reject the additional seed cane request.</p>
                <p><b>Approval For additional Seed cane supply</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/Approval or rejection of additional or gapping seed request.jpg"/></br></a></p>               
                <p><b>Request For Juice Analysis</b></p>
				<p>This window is used to generate a request for Juice analysis. The user enters the sub-location,field no, plot number ,and remarks to generate a request</p>
                <p><b>Request For Juice Analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/miscellaneous/juice analysis request.jpg"/></br></a></p>          
                <p><b>NE ENQUIRIES</b></p>
				<p><b>NE Interim Statement</b></p>
                <p>This window is used to generate an Interim statement. The user enters the details to enter the request and see its financial transactions.</p>
                <p><b>NE Interim Statement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE Enquiries/NE field inquiry.jpg"/></br></a></p>          
                <p><b>NE Final Statement</b></p>
                <p>This window is used to view the final statement for a particular field number.</p>
                <p><b>NE Final Statement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE Enquiries/NE field performance report.jpg"/></br></a></p>          
                <p><b>List Of D-Notes Marked For Weighment</b></p>
                <p>This window is used to view the list of d-notes which are marked for weighment..</p>
                <p><b>List Of D-Notes Marked For Weighment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE Enquiries/List of Dnotes.jpg"/></br></a></p>
                <p><b>Cancel D-note:</b></p>
                <p>This window is used to cancel the d-note. The user enters the d-note number and remark for cancelation.</p>
                <p><b>Cancel D-note:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE Enquiries/Cancel Dnotes.jpg"/></br></a></p>
                <p><b>REPORTS</b></p>
                <p><b>Mature Cane Availability Report:</b></p>
                <p>This Report shows the list of mature cane fields with their relative information as on the date entered. It shows Field number and description, plot
number , crop cycle, estimated yield, variety, cane area, date of planting and maturity days</p>
                <p><b>Mature Cane Availability Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/mature cane available.jpg"/></br></a></p>
                <p><b>Cane Inventory</b></p>
                <p>This window is used to see all the fields and its details like location, transport sector etc</p>
                <p><b>Cane Inventory</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/cane inventory.jpg"/></br></a></p>
                <p><b>Total Cane Hectare</b></p>
                <p>This window is used to view total cane hectare area on the basis of various filters and it will show total cane area available for various type of cane.(plant , ratoon 1 ,ratoon 2 etc ).</p>
                <p><b>Total Cane Hectare</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/total cane hectarage.jpg"/></br></a></p>
                <p><b>Productivity Report</b></p>
                <p>This window is used to generate the report for productivity.</p>
                <p><b>Productivity Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/productivity report.jpg"/></br></a></p>
                <p><b>List Of Cleared NE Field</b></p>
                <p>This window is used to view the list of Fields which are harvested by HTM but not cleared For Accounting.</p>
                <p><b>List Of Cleared NE Field</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/NE fields harvested by HTM.jpg"/></br></a></p>
                <p><b>Cane Purchase Report</b></p>
                <p>This window is used to view the report for cane purchase. By entering Period From , Period To , Source etc.</p>
                <p><b>Cane Purchase Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/cane purchase report.jpg"/></br></a></p>
                <p><b>Seed Cane Daybook Report</b></p>
                <p>This window is used to view the seed cane Delivery report .</p>
                <p><b>Seed Cane Daybook Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/seed cane daybook report.jpg"/></br></a></p>
                <p><b>Partially harvested Fields</b></p>
                <p>This window is used to view the list of all the fields which are partially harvested.</p>
                <p><b>Partially harvested Fields</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/partially harvested fields.jpg"/></br></a></p>
                <p><b>List of Cane Fire Cases During a Period</b></p>
                <p>This request shows the list of cane fire cases during a period.Clicking View, after entering the range of dates will pull up the information</p>
                <p>It requires the user to enter the following information:</p>
                <p>From date : Enter the date from when the report is required</p>
                <p>To date : Enter the date till when the report is required.</p>
                <p><b>List of Cane Fire Cases During a Period</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/list of cane fire cases.jpg"/></br></a></p>
                <p><b>List of Fields Awaiting Soil Analysis:</b></p>
                <p>This interface shows the list of all pending jobs with Agronomy, created by NE. It shows the field number, farmers name, area, request date
and job type.</p>
                <p><b>List of Fields Awaiting Soil Analysis:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/list of fields awaiting soil analysis.jpg"/></br></a></p>
                <p><b>List of Plots Awaiting for Land Preparation</b></p>
                <p>This interface shows the list of all pending jobs with AE, created by NE. It shows the field number , farmers name, area, request date
and job type.</p>
                <p><b>List of Plots Awaiting for Land Preparation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/pending land preparation with AE.jpg"/></br></a></p>
                <p><b>Weekly Program of Cane Maintenance</b></p>
                <p>This interface shows the weekly program of cane maintenance.Enter the range of dates for which the program is required, and click ok. This
brings up the screen showing date, activity type, field no and description, plot number , area, variety, crop cycle, age and scheduled period for finishing the
job.</p>
                <p>It requires the user to enter the following information:</p>
                <p>Date from : Date from which program is needed.</p>
                <p>Date till : Date till which program is needed.</p>
                <p><b>Weekly Program of Cane Maintenance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE reports/weekly program of cane maintenance.jpg"/></br></a></p>
                <p><b>NE Clearance Status</b></p>
                <p><b>NE Fields Uncleared by Accounts</b></p>
                <p>This window is used to view the list of Fields which are harvested by HTM but not cleared for Accounting.</p>
                <p><b>NE Fields Uncleared by Accounts</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE clearance status/NE fields harvested by HTM but not cleared for accounting.jpg"/></br></a></p>
                <p><b>NE Fields cleared by Accounts</b></p>
                <p>This window is used to view the list of Fields which are harvested by HTM and cleared for Accounting.</p>
                <p><b>NE Fields cleared by Accounts</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/NE clearance status/NE fields cleared for accounting.jpg"/></br></a></p>
                <p><b>Masters</b></p>
                <p><b> Contract Master:</b></p>
                <p>This window is used to insert/update/modify the contractor details.</p>
                <p><b>Contract Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Master database/contractor master.jpg"/></br></a></p>
                <p><b>Supervisor Master</b></p>
                <p>This form is used to enter Supervisor Details , update, delete them.</p>
                <p><b>Supervisor Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Master database/field supervisor master.jpg"/></br></a></p>
                <p><b>Vehicle Master</b></p>
                <p>This window is used to enter/delete/update Vehicle details.</p>
                <p><b>Vehicle Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/Master database/vehicle master.jpg"/></br></a></p>
                <p><b>Control Parameter</b></p>
                <p>See illustration below.</p>
                <p><b>Control Parameter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/nucleus estate/control parameter/parameter.jpg"/></br></a></p>	
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('agric_eng')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
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
						
					
				
		