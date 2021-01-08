<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Harvesting&Transport</title>
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
				<p><li><b>JOB QUEUE</b></li></p>
				<p>This interface shows the list of pending jobs/requests. The request number , request date and time, section, job type, field number, plot number, quantity and instructions are shown</p>
				<p>The interface has buttons called filter buttons. Clicking on these, will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, Requesting section entered</p>
		
				<p><b>Job queue of printing jobs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Job queue.jpg"/></br></a></p>
				<p><li><b>HARVESTING CALENDAR</b></li></p>
                <p><b>Create harvesting calendar:</b></p>
                <p>This interface is for generating a work schedule for selected fields.Enter the estimated quantity to be harvested from the fields, for each sector. After entering all the information click on Proceed so that it shows up in the grid below</p>
				<p>The interface requires the user to enter the following information</p>
                <p>Date range : Enter the date range for which calendar is to be generated</p>
                <p>Quantity : For the transport sectors A,B,C,D,E,F,G,H, enter the quantity of cane to be harvested.</p>
				<p><b>Create harvesting calendar</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingCalender/createHarvestingCalender.gif"/></br></a></p>
                <p><b>Canefields in current Calendar</b></p>
                <p>This window is used to view the canefields which are present in the current calender.</p>
		
				<p><b>Canefields in current Calender</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingCalender/canefieldsinCurrentCalender.gif "/></br></a></p>
                
                <p><b>Canefields not in calender</b></p>
                <p>This window is used to view the Mature Canefields which are not present in the current calender.</p>
		
				<p><b>Canefields not in calender</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingCalender/caneFieldsNotinCalender.gif "/></br></a></p>
                <p><b>Harvest Calender Report:</b></p>
                <p>This window is used to generate a report. The report thus generated shows information regarding harvest calender. The user is required to enter following details.</p>
                <p>Zone.</p>
                <p>Sub-location.</p>
                <p>Field number.</p>
				<p><b>Harvest Calender Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingCalender/HarvestingCalenderReport.gif "/></br></a></p>
                <p><b>HARVEST PLANNING</b></p>
                <p><b>Harvesting type</b></p>
                <p>This window is used to set the type of harvesting stack/Windrow for  a particular field.</p>
                
				<p><b>Harvesting type</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingPlanning/HarvestingType.gif "/></br></a></p>
                <p><b>Daily harvest planning:</b></p>
                <p>This interface is for planning out the daily schedule for harvesting. It has two tabs Selected Field for Harvesting and Balance Fields in Calendar. The user is required to enter a lead quantity of cane, which is the amount of cane to be harvested, along with a reserve quantity of cane.</p>
                <p>The interface requires the user to enter the following information</p>
                <p>Harvesting date : Date for which harvesting is to be done.</p>
                <p>Lead quantity : Quantity of cane from different sectors to be harvested. It is the actual quantity of cane along with a reserve quantity added.</p>
                <p><b>Daily harvest planning:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingPlanning/Daily Harvest Planning.jpg "/></br></a></p>
                <p><b>Disposal Of Burnt Cane</b></p>
                <p>This window is used to dispose matured Burnt Cane. The user selects the record from the database to dispose it.</p>
                <p><b>Disposal Of Burnt Cane</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingPlanning/dispose mature burnt cane.jpg "/></br></a></p>
                <p><b>Early Harvest Request:</b></p>
                <p>This window is used to make early harvest request in the system. The user selects the particular Zone , Sub-Location and field number to make the request.</p>
                
                <p><b>Early Harvest Request:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HarvestingPlanning/Early Harvest request.jpg "/></br></a></p>
                <p><b>Allot Harvesting Assistant:</b></p>
                <p>This window is used to allot Field Assistant to a particular field/Plot. The user selects the Sub-Location to filter Field number and then selects it to allot an assistant</p>
                <p><b>Allot Harvesting Assistant:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Allot field assistant.jpg "/></br></a></p>
                <p><b>Enter Harvesting Information:</b></p>
                <p>This interface is for generating the estimated delivery notes for Seedcane. Enter any Harvesting date and Transport sector and click Show. Information like Maturity, Field number , Plot number , variety, crop cycle, age, area, yield and estimated D/notes shows up.</p>
                <p>Clicking on Generate D/notes after selecting a row(s) will generate the delivery notes</p>
                <p>The interface requires the user to enter the following information</p>
                <p>Harvesting Date : Enter the date for harvesting Seedcane.</p>
                <p>Transport Sector : Select the transport sector from the drop-down menu</p>
                <p><b>Enter Harvesting Information:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Enter actual harvesting information.jpg "/></br></a></p>
                <p><b>CUTTER MANAGEMENT:</b></p>
                <p><b>Cutter Enquiry:</b></p>
                <p>This window is used to view the details of Cutter. The user enters the mobile number and search for the Cutter information.</p>
                
                <p><b>Cutter Enquiry</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/CutterManagement/Cutter Enquiry.jpg "/></br></a></p>
                <p><b>Requests For contractor Jobs:</b></p>
                <p>This window is used to create a job request to the contractor .The user enters the sub-location , field number , Request Type , Area and remarks to make the request</p>
                
                <p><b>Requests For contractor Jobs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/CutterManagement/contractor job requests.jpg "/></br></a></p>
                <p><b>Contractor Job Approval:</b></p>
                <p>This window is used to either approve or reject the job request. On Page Load all the awaiting confirmation requests will be populated into the database.</p>
                
                <p>Contractor Job Approval:<br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/CutterManagement/Approval of contractor job requests.jpg "/></br></a></p>
                <p>Contractor Allocation:</p>
                <p>This window is used to allocate contractor for a particular job. The user is expected to select the request and then contractor to allocate it.</p>
                
                <p><b>Contractor Allocation:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/CutterManagement/Contractor allocation.jpg "/></br></a></p>
                <p><b>Contractor Work Certification</b></p>
                <p>This window is used to generate work certification for the contractor.</p>
                
                <p><b>Contractor Work Certification</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/CutterManagement/contractor work cert.jpg "/></br></a></p>
                <p><b>TRANSPORTER MANAGEMENT</b></p>
                 <p><b>Allot transporters:</b></p>           
                <p>This interface is for allocating transporters for the Seedcane, as on the current date. There are two tabs-‘Allocate Transporter and De-Allocate Transporter.For allocating a transporter for cane, select a row and click on Allocate. For de allocating a transporter for cane, select a row and click on DeAllocate.</p>
                <p><b>Allot transporters</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/allot tranporter for cane.jpg "/></br></a></p>
                <p><b>Issue Transport Card</b></p>           
                <p>This window is used to issue transport card to the vehicle.The user is required to make some inputs like whether it is issue/re-issue , cane type , Card Number , Vehicle etc etc. to generate the card..</p>

                <p><b>Issue Transport Card</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/transport card issuance.jpg "/></br></a></p>
                <p><b>Print Transport Programme:</b></p>           
                <p>This window is used to view the Transport Program . The user can use various filters like date , contractor etc</p>

                <p><b>Print Transport Programme:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/transport card issuance.jpg "/></br></a></p>
                <p><b>Field Distance Report:</b></p>           
                <p>This window is used to view various details related to field number like its transport zone , distance , yield etc.</p>
                <p><b>Field Distance Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/field distance report.jpg "/></br></a></p>
                <p><b>Edit Field Distance</b></p>           
                <p>This window is used to edit the distance of field from the purchase center. The user can give new distance from field to Purchase center</p>

                <p><b>Edit Field Distance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/cane fields modification.jpg "/></br></a></p>
                <p><b>Vehicle Attendance</b></p>           
                <p>This window is used to make the attendance for the vehicle. The user selects the vehicle and mark its attendance</p>

                <p><b>Vehicle Attendance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/vehicle attendance.jpg "/></br></a></p>
                <p><b>Contractor /machine Allocation</b></p>           
                <p>This window is used to allot contractor or machine for a particular  activity. The user is required to enter expected date of job completion..</p>

                <p><b>Contractor /machine Allocation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/contractor transporter machine allocation.jpg "/></br></a></p>
                <p><b>Weighment reports</b></p>           
                <p>see illustration below </p>
                <p><b>Weighment reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/TransportManagement/weighment reports.jpg "/></br></a></p>
                <p><b>PRINT D-NOTEs</b></p>           
                <p>This window is used to print the d-notes available over the given range of dates for the particular field number.</p>

                <p><b>PRINT D-NOTEs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/print D notes.jpg "/></br></a></p>
                <p><b>DNOTE MANAGEMENT</b></p>
                <p><b>D-Note Enquiry</b></p>                        
                <p>This window is used to retrieve data related to D-Notes. Like Field number , Description , Plot , Farmer etc</p>

                <p><b>Contractor /machine Allocation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Dnote Enquiry.jpg "/></br></a></p>
                <p><b>D-Note Check Digit:</b></p>
                                                 
                <p>This window is used to know the check digit of the d-note. The user enters the d-note number and its check digit gets displayed there.</p>

                <p><b>D-Note Check Digit</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Get D notes check digit.jpg "/></br></a></p>
                <p><b>View D-Note:</b></p>
                                       
                <p>This window is used to view D-Notes which are between the given range of date , Sub-location and satisfy other filter conditions.</p>
                <p><b>View D-Note:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/View D notes.jpg "/></br></a></p>
                <p><b>Print Farmer Han</b></p>
                                            
                <p>See illustration below.</p>
                <p><b>Print Farmer Han</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Print Harvesting Advise.jpg "/></br></a></p>
                <p><b>Cancel Dnotes</b></p>
                                            
                <p>See illustration below.</p>
                <p><b>Cancel Dnotes</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Cancel D notes.jpg "/></br></a></p>
                
                <p><b>Farmer D-Note Reconciliation</b></p>
                                                 
                <p>This window is used to view all the re-conciliated d-notes satisfying the input date range.</p>

                <p><b>Farmer D-Note Reconciliation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Farmer Dnote reconcilliation.jpg "/></br></a></p>
                <p><b>Dnote For Windrow</b></p>
                                                 
                <p>This window is used to generate d-note for windrow cases.The user enters information like date , field number plot number</p>

                <p><b>Dnote For Windrow</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Enter actual harvesting info.jpg "/></br></a></p>
                <p><b>Cancel D/notes of missing stacks:</b></p>
                <p>This interface is for canceling the delivery notes of missing stacks or consignments. On entering the D/note number , the field number and plot number shows up automatically. Click on Proceed to cancel the D/note</p>                              
                <p>The interface requires the user to enter the following information</p>
                <p>D-Note number : Enter the number of the delivery note.</p>
                <p><b>Cancel D/notes of missing stacks:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Cancel D notes.jpg "/></br></a></p>
                <p><b>Harvestor D-Note Reconciliation</b></p>
                <p>This window is used to view all the re-conciliated d-notes satisfying the input date range for harvestors.</p>                              
                <p><b>Harvestor D-Note Reconciliation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Dnote reconcilliation.jpg "/></br></a></p>
                <p><b>D/notes on farmers request:</b></p>
                <p>This interface is for generating additional Delivery Notes on request by the farmer. On entering the field number and plot number , the variety, crop cycle and cane area show up automatically</p>                              
                <p><The interface requires the user to enter the following information</p>
                <p>Field number : Enter the field number for which additional notes are required.</p>
                <p>Plot number : Enter the plot number for which additional notes required.</p>
                <p>Number of D/Notes : Enter the number of delivery notes required.</p>
                <p>Remarks : Enter the reason why delivery notes are needed.</p>
                <p><b>D/notes on farmers request.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Additional D-Note request.jpg "/></br></a></p>
                <p><b>D/notes for poached/dropped cane</b></p>
                <p>This interface is for the generation of delivery notes for poached/dropped cane</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>D/Note type : Select the type of Delivery note from the drop down menu</p>
                <p>Vehicle number : Enter the vehicle number of the vehicle going to pick up the cane.</p>
                <p>Number of D/Notes : Enter the number of delivery notes required.</p>
                <p>Remarks : Enter the reason why delivery notes are needed.</p>
                <p><b>D/notes for poached/dropped cane</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Dnotes for poached dropped cane.jpg "/></br></a></p>
                <p><b>D/notes for private cane</b></p>
                <p>This interface is for the generation of delivery notes for private cane. On entering the field number and plot number , the variety, crop cycle and cane area show up.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>Field number : Enter the field number for which additional notes are  required.</p>
                <p>Plot number : Enter the plot number for which additional notes are required </p>
                
                <p>Number of D/Notes : Enter the number of delivery notes required.</p>
                <p>Remarks : Enter the reason why delivery notes are needed.</p>
                <p><b>D/notes for private cane</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Additional D-Note request.jpg "/></br></a></p>
                <p><b>D/notes for cane from other factories</b></p>
                <p>This interface is for the generation of delivery notes for cane coming from other factories.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>D/Note type : Select the type of Delivery note from the drop down menu.</p>
                <p>Vehicle number : Enter the vehicle number of the vehicle going to pick up the cane</p>

                <p>Number of D/Notes : Enter the number of delivery notes required.</p>
                <p>Remarks : Enter the reason why delivery notes are needed.</p>
                <p><b>D/notes for cane from other factories</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Dnotes for cane from to other factories.jpg "/></br></a></p>
                <p><b>D/notes for cane to other factories</b></p>
                <p>This interface is for the generation of delivery notes for cane going to other factories.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>D/Note type : Select the type of Delivery note from the dropdown menu.</p>
                <p>Vehicle number : Enter the vehicle number of the vehicle going to deliver the cane</p>
                <p>Number of D/Notes : Enter the number of delivery notes required.</p>
                <p>Remarks : Enter the reason why delivery notes are needed.</p>
                <p><b>D/notes for cane to other factories</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/Dnotes for cane from to other factories.jpg "/></br></a></p>
                <p><b>DAILY HARVESTING REPORT</b></p>
                <p>This window is used to generate a report in order to see information regarding cane lying in the fields like its number of stacks , field number , today's harvested stacks etc..</p>
                <p><b>Cane lying in the fields</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/cane lying in the field.jpg "/></br></a></p>
                <img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/DnoteManagement/cane lying in the field2.jpg "/></a></p>
                <p><b>MISCELLANEOUS</b></p>
                <p><b>Request For Cane Carrying</b></p>
                <p>This window is used to generate a request to carry cane by farmer.</p>
                <p>The user enters various information like date, d-note no , remarks to make such request.</p>
                <p><b>Request For Cane Carrying</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/Growers request for cane carrying.jpg "/></br></a></p>
                <p><b>Farmer Request for Cane Slashing.</b></p>
                <p>The farmers request for Slashing Cane can be entered through this interface. Request is generated towards HTM .On entering the field number and plot number , the contractors name show up automatically. Under a contractor there cane be a maximum of four cutters</p>
                <p>This interface requires the user to fill the following information.</p>
                <p>Field no : Enter the field number of the field where slashing is to be done.</p>
                <p>Plot number : Enter the plot number of the plot where slashing is to be done.</p>
                <p>D/Note number : Enter the delivery note number. On selecting D/Note number it will show the field number , plot number , land parcelnumber, variety, crop cycle, cane area.</p>
                <p>Cutter : Enter the code for cutters (maximum of four).</p>
                <p><b>Farmer Request for Cane Slashing</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/cane slashing.jpg "/></br></a></p>
                <p><b>Request to AE for Road Repair.</b></p>
                <p>This interface shows the requests to AE for Road Repair. It has two tabs-Current Road Repair Request and Existing Road Repair. It shows the request date and Road name/Remarks</p>
                <p>This interface requires the user to fill the following information.</p>
                <p>Request Date : Date on which request is made</p>
                <p>Road Name : Name of the road to be repaired/Remarks (if any).</p>
                <p>D/Note number : Enter the delivery note number. On selecting D/Note number it will show the field number , plot number , land parcel number, variety, crop cycle, cane area.</p>
                <p>Cutter : Enter the code for cutters (maximum of four).</p>
                <p><b>Request to AE for Road Repair</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/Request AE for Road repair.jpg "/></br></a></p>
                <p><b>Cane Slashing Cases.</b></p>
                <p>This window is used to view all the cane slashing cases for a particular date. The user enters the date to view all the cane slashing cases on that day.</p>
                
                <p><b>Cane Slashing Cases</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/cane slashing.jpg "/></br></a></p>
                <p><b>Cane Carrying Cases</b></p>
                <p>This window is used to view all the cases related to cane carrying on the given date.</p>
                
                <p><b>Cane Carrying Cases</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/cane carrying.jpg "/></br></a></p>
                <p><b>Clear Fields</b></p>
                <p>This window is used to view all the fields in the selected zone sublocation which are cleared for payment.</p>
                
                <p><b>Clear Fields</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/clear fields for payment.jpg "/></br></a></p>
                <p><b>Change harvestor</b></p>
                <p>This window is used to change the harvestor for a particular D-Note and assign a new harvestor.</p>
                
                <p><b>Change harvestor</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/Change harvestor.jpg "/></br></a></p>
                <p><b>Fields Awaiting Clearance:</b></p>
                <p>This window is used to view all fields which are needed to be cleared.</p>
                
                <p><b>Fields Awaiting Clearance:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/view all fields.jpg "/></br></a></p>
                <p><b>Non Harvestor Attendance</b></p>
                <p>This window is used to View and enter attendance for gang and cutter(Non Harvesters)The user is required to enter details like Field , Plot number , Gang Code , Cutter number , Activity Date</p>
                
                <p><b>Non Harvestor Attendance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/non harvester attendance sheet.jpg "/></br></a></p>
                <p><b>Inaccessible fields:</b></p>
                <p>This interface shows the list of fields and requires the user to enter the accessibility condition of the field. On selecting a row, the field number , crop variety, land parcel number , and crop cycle shows up.</p>
                <p>The interface requires the user to enter the following information</p>
                <p>Inaccessible : Select if yes or no</p>
                <p>Date : Enter the date on which field survey was done.</p>
                <p>Reason : Enter the reason or remarks on condition of the field</p>
                <p><b>Inaccessible fields:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/inaccessible fields.jpg "/></br></a></p>
               	<p><b>Remove fields from harvest plans</b></p>
                <p>See illustration below</p>
                <p><b>Remove fields from harvest plans</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Miscellaneous/remove fields from harvest.jpg "/></br></a></p>
                <p><b>REPORTS</b></p>
                <p><b>Top harvesters list</b></p>
                <p>This report shows the list of top harvesters for a period. Clicking on View, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information</p>
                <p>From Date : Enter the date from which the list is needed.</p>
                <p>To Date : Enter the date till which the list is needed</p>
                <p>Number of top Harvesters : Enter the number of harvesters to be viewed.</p>
                <p><b>Top harvesters list</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/top harvestors list.jpg "/></br></a></p>
                <p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/top harvestors list2.jpg "/></a></p>
                <p><b>Mean haulage distance for each transporter</b></p>
                <p>This report shows the list of mean haulage distance for each transporter. Clicking on View, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date from which the list is needed.</p>
                <p>To Date : Enter the date till which the list is needed</p>
                <p><b>Mean haulage distance for each transporter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/mean haulage distance.jpg "/></br></a></p>
                <p><b>Transporter/vehicle-type wise, mean trip weight</b></p>
                <p>This report shows the list of transporter-wise/vehicle type-wise, mean weight of cane for each trip. Clicking on View, after entering the required information will show lists</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date from which the list is needed.</p>
                <p>To Date : Enter the date till which the list is needed</p>
                <p>Transporter : Enter the name of the transporter.</p>
                <p>Vehicle type : Enter the type of vehicle from the drop down menu.</p>
                <p><b>Transporter/vehicle-type wise, mean trip weight</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/transporter vehicle.jpg "/></br></a></p>
                <p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/transporter vehicle2.jpg "/></br></a></p>
                <p><b>List of harvesting done by contractors in a period</b></p>
                <p>This report shows the list of harvesting done by contractors in a period. Clicking on OK, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date from which the list is needed.</p>
                <p>To Date : Enter the date till which the list is needed</p>
                
                <p><b>List of harvesting done by contractors in a period</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/list of harvesting done by contractors.jpg "/></br></a></p>
                <p><b>Staleness Report:</b></p>
                <p>This report shows the list of Harvested cane lying in a field for more than two days. Clicking on OK, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>As on Date : Enter the date for which the report is needed.</p>
                <p>No of stale days : Enter the number of days for which the cane is lying in the fields.</p>
                <p><b>Staleness Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/harvested cane lying in the field.jpg "/></br></a></p>
                <p><b>Cane deliveries summary for day/week/month:</b></p>
                <p>This report shows the cane delivery summary for a period. It can be a day, a week or a month. Clicking on Ok, after entering the required information will show list</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date, from which the report is needed.</p>
                <p>To Date : Enter the date, till which the report is needed</p>    
                <p>Zone</p>
                <p>Sub location.</p>
                <p>Wmnt center.</p>
                <p><b>Cane deliveries summary for day/week/month:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/cane deliveries summary for the period.jpg "/></br></a></p>
                <p><b>Weighbridge tickets register for OG and NE cane</b></p>
                <p>This report shows the Weighbridge tickets register for OG and NE cane. Clicking on OK, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date, from which the report is needed.</p>
                <p>To Date : Enter the date, till which the report is needed</p>    
                <p>Weighment center.</p>
                <p><b>Weighbridge tickets register for OG and NE cane</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/wb tickets register.jpg "/></br></a></p>
                <p><b>Superintendents daily report</b></p>
                <p>This report shows the Superintendents daily report. Clicking on OK, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>As on Date : Enter the date, for which report is required.</p>
                
                <p><b>Superintendents daily report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/supritendets daily reports.jpg "/></br></a></p>
                <p><b>Daily report on stacks received and mean stack weight:</b></p>
                <p>This shows the daily report on stacks received, and the mean stack weight. Clicking on View, after entering the required information will show list.</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>As on Date : Enter the date, for which report is required.</p>
                
                <p><b>Daily report on stacks received and mean stack weight:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/daily report on stacks received.jpg "/></br></a></p>
                <p><b>Transporter wise lifting program</b></p>
                <p>This report shows the transporter-wise lifting program. Clicking on OK, after entering the required information will show list..</p>
                <p>The interface requires the user to enter the following information.</p>
                <p>From Date : Enter the date, from which report is needed.</p>
                <p>To Date : Enter the date, till which the report is needed</p>
                <p><b>Transporter wise lifting program</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/transporter wise lifting.jpg "/></br></a></p>
                <p><b>View Harvesting Plan</b></p>
                <p>This window is used to view harvesting plan for the selected date.</p>
                
                <p><b>View Harvesting Plan</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/harvest plan.jpg "/></br></a></p>
                <p><b>List Of cleared Fields</b></p>
                <p>This window is used to get a report of all fields depending upon the selection( cleared/uncleared /all) etc.</p>
                
                <p><b>List Of cleared Fields</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/HTMreports/cleared uncleared fields report.jpg "/></br></a></p>
                <p><b>UTILITY</b></p>
				<p><b>Transfer Cutter</b></p>
                <p>This window is used to transfer the cutter related to one field to another field. Here the user is required to make following inputs:</p>
                <p>1. D-Note , CheckDigit.</p>
				<p>2. Field number.</p>
				<p>3. Plot number.</p>
                <p><b>Transfer Cutter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Utility/transfer cutters from transfercutter.jpg "/></br></a></p>
				<p><b>Transfer Cutter-Gangwise</b></p>
                <p>This window is used to transfer the cutter on the basis of Gangs. The user is required to enter the old gang number , cutter code and new gang number.</p>
                <p><b>Transfer Cutter-Gangwise</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Utility/transfer cutters from old new gang.jpg "/></br></a></p>
				<p><b>Contractor/Machine Allocation:</b></p>
                <p>This window is used to Allot Contractor or Machine to a particular plot. The user selects the sub-location , activity to be done and the expected date of completion.</p>
                <p><b>Contractor/Machine Allocation:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Utility/contractor transport machine allocation.jpg "/></br></a></p>
				<p><b>Vehicle Trip Sheet</b></p>
                <p>This window is used to enter various details of a vehicle trip like fuel consumption , distance , time and various other details.</p>
                <p><b>Vehicle Trip Sheet</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/Utility/vehicle movement trip sheet.jpg "/></br></a></p>
				<p><b>MASTERS</b></p>
				<p><b>Contractor Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Contractor Details.</p>
                <p><b>Contractor Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/contractor master.jpg "/></br></a></p>
				<p><b>Route Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Route Details.</p>
                <p><b>Route Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/route master.jpg "/></br></a></p>
				<p><b>Transport Cycle Master</b></p>
                <p>This is a master window which is used to insert/delete/modify Transport Cycle details</p>
                <p><b>Transport Cycle Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/transport cycle.jpg "/></br></a></p>
				<p><b>Cutter Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Cutter Details.</p>
                <p><b>Cutter Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/select contractor.jpg "/></br></a></p>
				<p><b>Vehicle Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Vehicle Details.</p>
                <p><b>Vehicle Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/vehicle master.jpg "/></br></a></p>
				<p><b>Harvest Group Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Harvest Group Details.</p>
                <p><b>Harvest Group Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/harvestor group master.jpg "/></br></a></p>
				<p><b>Sub_location Group Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify Sub-Location Group Details.</p>
                <p><b>Sub_location Group Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/sublocation group master.jpg "/></br></a></p>
				<p><b>D-Note Cancel Reason Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify D-Note Cancel Reason and Details.</p>
                <p><b>D-Note Cancel Reason Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/dnote cancel reason master.jpg "/></br></a></p>
				<p><b>D-Note Cancel Reason Master:</b></p>
                <p>This is a master window which is used to insert/delete/modify D-Note Cancel Reason and Details.</p>
                <p><b>D-Note Cancel Reason Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Harvesting&Transport/MasterDatabase/dnote cancel reason master.jpg "/></br></a></p>
				<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('r_d')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('ocd_reports')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		
                