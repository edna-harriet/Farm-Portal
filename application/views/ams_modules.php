<?php defined('BASEPATH') OR exit ('No direct script access allowed')?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AMS Modules</title>  
		<link rel="shortcut icon" type="image/jpg"  href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.jpg"/>		
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/><!-- Ensure to connect the autoload['helper'] in the autolaod file to 'url'
		 -->
		<link rel="index" title="Index" href="genindex.html"/>
		<link rel="search" title="Search" href="search.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title="Welcome To AMS User Guide" href="general/welcome.html"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>	
	</head>
	<body class="wy-body-for-nav" role="document" style=""><!-- creates the vertical navbar on the left -->
		<div id="nav">
			<div id ="nav-inner">
				<div id="pulldown-menu" class="ciNav"></div>
			</div>
		</div>
		<div class="wy-div-for-nav">
			<nav data-toggle="wy-nav-shift" class="wy-nav-side stickynav" >
				<div class="wy-side-nav-search">
					<a href="<?php echo base_url()?>" class="">Agriculture Management System</a>
		<div role ="search">
			<form id="rtd-search-form" class="wy-form" action="search.html" methods="get" >
				<input name="q" placeholder="search docs" type="text">
				<input name="check_keywords" value="yes" type="hidden">
				<input name="area" value="default" type="hidden">
			</form>
		</div>
				</div><!-- Closes the wy-side-nav-search -->
		<div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main-navigation">
		<ul>
			<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a>
			<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
			<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>"><span class="doc">AMS Hardware Requirement</span></a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
      	</ul>
      	<ul class="current">
        			<li class="toctree-11 current"><a class="current reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a><ul class="current">
        			<li class= "toctree-12"><a class="reference internal" href="<?php echo site_url('outgrowers_extension')?>">Outgrowers Extension</a></li>
          			<li class= "toctree-12"><a class="reference internal" href="">Nucleus Estate</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">Agriculture Engineering</a></li>
           			<li class= "toctree-12"><a class="reference internal" href="">Outgrowers Cane Development</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">Harvesting & Transport</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">R & D(Agronomy)</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">Weighbridge Operations</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">Outgrowers Accounts</a></li>
        			<li class= "toctree-12"><a class="reference internal" href="">Management&Administration</a></li>
		</ul>
		</li>
		<ul>
			<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('other_modules')?>">AMS Other Modules</a></li>
		</ul>
		</div>
			</nav>
		</div>
		<!-- To create header title, see below code upto <hr/> -->
		<section data-toggle ="wy-nav-shift" class="wy-nav-content-wrap">
			<nav class="wy-nav-top" role="navigation" aria-label="top navigation">
				<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
					<a href="#">AMS</a>
			</nav>
			<div class="wy-nav-content">
				<div class="rst-content"><!-- Aligns the entire content of the header and body at the same margin --></div>
					<div role="navigation" aria-label="breadcrumbs navigation" style="color:green";>
						<ul class="wy-breadcrumbs">
							<li><a href="#">Docs</a></li>&raquo;</li>
							<li>System Overview</li>
							<li class="wy-breadcrumbs-aside"></li>
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<h2>System Overview<a class="headerlink" href="#" title="Permalink to this headline"></a></h2>
		<p>Keeping in mind the requirement of agricultural sector, Agriculture Management System (AMS) was designed to manage the life cycle of agricultural crop grown in the farm.</P>
		<p>AMS enables management of agricultural farms by monitoring all aspects of cultivation of the crop, harvesting, weighing, and transportation of the crop to the processing unit or other places.</P>
		<p>The system also manages the accounting and financial aspect to the farmers, vendors and field staff involved in field activities, drivers, transporters with their complete accounting.</p>
		<p>The purpose of this document is to describe the functionality of AMS required for SONY SUGAR Company Ltd. Thus, this document contains information about the application software for Agriculture Management System (AMS).</p> 
		<p>This information includes functionality of each modules and how this software will help the users to access the required data.</p>
		<p>The AMS of SONY SUGAR company is responsible for planning and budgeting of agriculture related activities and sugarcane procurement as per the demand by factory. This consists of the following modules:
				<p>1. Out-growers Section (Out-growers Extension)</p>
				<p>2. Nucleus Estate (Cane Maintenance)</p>
				<p>3. Agronomy (R&D)</p>
				<p>4. Agriculture Engineering</p>
				<p>5. Out-growers cane development services</p>
				<p>6. Harvesting and Transportation</p>
				<p>7. Weighbridge Operation</p>
				<p>8. Out-growers accounts</p>
				<p>9. Management and Administration.</p>
		<h2>Definitions, Acronyms and Abbreviations</h2>
        		<p>1. AE = Agriculture Engineering Section</p>
        		<p>2. AG = Agronomy Section.</p>
        		<p>3. AMITY = Amity Software Inc.</p>
                <p>4. AMS = Agriculture Management System.</p>
                <p>5. OCD = Outgrowers Cane Development Section.</p>
                <p>6. HTM = Harvesting & Transport Section.</p>
                <p>7. NE = Nucleus Estate Section.</p>
                <p>8. OES = Outgrowers Extension Services Section.</p>
                <p>9. OGA = Outgrower Accounts section .</p>
                <p>10. % = Percentage.</p>
                <p>11. No. = Number.</p>
                <p>12. * = Mandatory Fields.</p>
                <p>13. WB = Weighbridge.</p>
        <h2>LOGGING INTO THE AGRICULTURAL MANAGEMENT SYSTEM (AMS)</h2>
        		<p>To log into the AMS, a user must have been created into the system and given a profile. A profile gives the user a set of rights to carry out transactions in the system according to their work requirements</p>
        		<p>To log into the system, CLICK on the <b> AMS.exe</b> icon on the desktop or that is located in Local C -> AMS folder. <b>See illustration below</b></p>
				<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/ams_login.jpg"/></a></p>
				<p>The system will open a dialog box for you to enter your LOGIN ID and PASSWORD</p>
				<p>Click on <b>SUBMIT</b> to enter the system; alternatively you can press ENTER.<b>See below</b></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/submit.jpg"/></a></p>    	    	
		<h2>STRUCTURE OF THE AMS INTERFACE SCREEN</h2>
				<p>1. Once in the system the application only gives you access to its functionalities based on your profile. The interface screen has specific elements thatfacilitates navigation and use of system features. These are;</p>
				<p>2. Agricultural Business Sections</p>
				<p>3. Business processes and sub-processes within each section</p>
				<p>4. Activities constituting business processes</p>
				<p>5. Shared master records</p>
				<p><b>See Interface Screen</b></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/interface_screen.jpg"/></a></p>  
		<h2>MASTER DATA BASE</h2>
				<p>The master records consist of the standing records that drive or against which transaction records are stored. They rarely change and changes to them can only be effected through certain processes and approvals. These records consist of the following,</p>
						<p><br>o Society Master</br>
                        <br>o District Master</br>
                        <br>o Zone Master</br>
                        <br>o Sub-location Master</br>
                        <br>o Location Master</br>
                        <br>o Contractor Master</br>
                        <br>o Field Superintendents</br>
                        <br>o Cutters Master</br>
                        <br>o Fertilizer Returning Causes</br>
                        <br>o Route Master</br>
                        <br>o Transport Cycle</br>
                        <br>o Cutter Master</br>
                        <br>o Vehicle Master</br>
                        <br>o Harvest Groups</br>
                        <br>o Fertilizer Master</br>
                        <br>o Disease Master</br>
                        <br>o Station Master</br>
                        <br>o Pest Master</br>
                        <br>o Variety Master</br>
                        <br>o Transport Zone</br>
                        <br>o Loan Master</br>
                        <br>o Farmer master</br>
                        <br>o Site Master</br></P>
                 <p>The master records are owned and controlled by specific sections of the business. These sections ensure that necessary changes are effected from time to time so that the records are current. Ownership and control of the master records will be discussed section by section and responsibilities for the same allocated.</p>
		<h2>Access to Master Records</h2>
				 <p>To access, view or modify master records, a user must have appropriate user profile and rights. To access any of the records a user will move through the following steps</p>
				 <p>Click on the Section button</p>
				 <p>Scroll down to Master Database</p>
				 <p>Scroll down and select the appropriate master record</p>
				 <p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/OES_master records.jpg"/></a></p>
		<h2>OWNERSHIP OF THE MASTER RECORDS</h2>
				 <p>The master records are owned and updated by specific sections of Agriculture. Some records can be updated directly while others will only be updated through a defined process</p>
				 	<p><h3>Outgrowers Extension Services Section</h3></p>
				 		<ul>
    				 		<li>1. Site Master</li>
    				 		<li>2. District Master</li>
    				 		<li>3. Zone Master</li>
    				 		<li>4. Sub-Location Master</li>
    				 		<li>5. Location Master</li>
    				 		<li>6. Contractor Master_OES</li>
    				 		<li>7. Field Supervisor Master</li>
    				 		<li>8. Field Assistants Master</li>
    				 		<li>9. IPA Staff Master</li>
    				 		<li>10. Farmer Master</li>
				 		</ul>
				 	<p><h3>Nucleus Estate</h3></p>
				 		<ul>
    				 		<li>1. Contractor Master</li>
    				 		<li>2. Supervisor master</li>
    				 		<li>3. Vehicle Master</li>
    				 	</ul>
				 	<p><h3>Agricultural Engineering</h3></p>
				 		<ul>
    				 		<li>1. Contractor Master</li>
    				 		<li>2. Vehicle Master</li>
    				 		<li>3. Driver master</li>
				 		</ul>
				 	<p><h3>Outgrowers Cane Development</h3></p>
				 		<ul>
    				 		<li>1. Contractor Master</li>
    				 		<li>2. Vehicle Master</li>
    				 		<li>3. Fertilizer Return Causes</li>
    				 		<li>4. Vehicle Attendance list</li>
    				 	</ul>
    				<p><h3>Harvesting & Transport</h3><p>
				 		<ul>
    				 		<li>1. Contractor Master HTM</li>
    				 		<li>2. Route Master</li>
    				 		<li>3. Transport cycle</li>
    				 		<li>4. Cutter Master</li>
    				 		<li>5. Vehicle Master HTM</li>
    				 		<li>6. Harvest Group Master</li>
    				 		<li>7. Sub_location Group Master</li>
    				 		<li>8. D-Note Cancel Reason Master</li>
    				 	</ul>
    				 <p><h3>Harvesting & Transport</h3><p>
				 		<ul>
    				 		<li>1. Contractor Master HTM</li>
    				 		<li>2. Route Master</li>
    				 		<li>3. Transport cycle</li>
    				 		<li>4. Cutter Master</li>
    				 	</ul>
    				 <p><h3>Agronomy</h3><p>
				 		<ul>
    				 		<li>1. Fertilizer Master</li>
    				 		<li>2. Disease Master</li>
    				 		<li>3. Station Master</li>
    				 		<li>4. Pest Master</li>
    				 		<li>5. Variety Master</li>
    				 		<li>6. Relative Humidity Master</li>
    				 		<li>7. Vehicle Master</li>
    				 		<li>8. Crop Activity Master</li>
    				 		<li>9. Contractor Master</li>
    				 	</ul>
    				 <p><h3>Outgrowers Accounts</h3><p>
				 		<ul>
    				 		<li>1. Loan Master</li>
    				 		<li>2. Transport Zone</li>
    				 		<li>3. Bank Master</li>
    				 		<li>4. Branch Master</li>
    				 		<li>5. JOB rates</li>
    				 		<li>6. Society Master</li>
    				 		<li>7. Cane Purchase Center</li>
    				 		<li>8. high Payload Rates</li>
    				 		<li>9. MNO(Mobile Network Operator) master</li>
    				 		<li>10. MNO Band Rate Master</li>
    				 		<li>11. Cutter Recovery</li>
    				 		<li>12. Cutter Payroll Phase</li>
    				 		<li>13. Cutter Payroll Phase with Mapping</li>
    				 	</ul>
    				 <p><h2>COMMONLY USED BUTTONS AND FUNCTIONALITIES</h2></p>
    					<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/exit.jpg"/></a> Takes user out of the screen</p> 
    					<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Accept.png"/></a> Click this button after entering the farmer information to
added into grid. (Note: the complete information can be only saved if the farmer information is added into grid.)</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Add.png"/></a> Click this button after entering all the mandatory information to submit the application. The system confirms the submission of the Application Form along with the Application Number on successful submission</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/print.jpg"/></a> Gives a print-out of the list.</p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/save.png"/></a> Click this button to save the physical inspection
information after entering Application Number and other
mandatory fields</p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/select all.png"/></a> Click on this to select all the applications on the list.
(Once all applications are selected, the button changes
into Deselect All).</p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/refresh.jpg"/></a>Deletes all entered information for any field from the
grid.</p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Cancel.png"/></a> Clears the input before saving.</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Approve.png"/></a> This button approves the entire selected job</p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/rejected.jpg"/></a>This button rejects all the selected job requests.</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Allocate.png"/></a> This button is for allocation between two lists. Select
both the rows. and then click this button.</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Deallocate.jpg"/></a>De allocates the selected rows..</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/Process.png"/></a> Processes the selected request row-wise.</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/continue.png"/></a>Click on this to proceed further</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/gen dnote.jpg"/></a> Click on this to generate D/Notes for a selected row.</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/show.png"/></a>Click on this to show the required list, after entering
required information</p> 
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/system overview/buttons/view.png"/></a>Click on this to view the entire list..</p> 
						<p><h2>OTHER IMPORTANT GUIDING INFORMATION</h2></p>
						<p>1.The date is entered in the dd-mm-yyyy format. Clicking on the date tab will automatically pull up the date picker </p>
						<p>2. Master lists can be obtained by pressing F1 or double clicking on the tab. </p>
						<p>3. For New land applications, the plot size must be less than 30 hectares </p>
						<p>4. One Harvester team which makes one stack can have a maximum of four cutters.</p>
						<p>5. A truck/lorry can have a maximum of three bins</p>
						<p>6. The weight of one stack is estimated to be 5.5 tonnes</p>
						<p>7. One and only one delivery note will be issued for per stack.</p>
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('outgrowers_extension')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('installation_instruction')?>" class= "btn btn-neutral" title="Installation_Instruction"><span class=""></span>Previous</a>
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
