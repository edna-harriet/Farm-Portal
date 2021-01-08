<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>ODS REPORTS</title>
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
							<li>ODS REPORTS</li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><li><b>ODS Reports :</b></li></p>
		<p><li><b>REPORT</b></li></p>
		<p><li><b>Farmer Register :</b></li></p>
		<p>This reports shows the list of farmers with their relative information. It shows Field number and description, plot number , farmer’s name, parcel number , plot area, cane area, Bank code and name, account number</p>
		<p><b>Cane Inventory :</b></p>
		<p>This window is used to see all the fields and its details like location , transport sector etc.</p>
		<p></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/farmer register.jpg"/></a></p>
		<p><b>Mature Cane Availability Report :</b></p>
		<p>This Report shows the list of mature cane fields with their relative information as on the date entered. It shows field number and description, plot number , crop cycle, estimated yield, variety, cane area, date of planting and maturity days.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/total cane hactarage.jpg"/><a/></p>
		<p><b>Total Cane Hectare:</b></p>
		<p>This window is used to view total cane hectare area on the basis of various filters and it will show total cane area available for various type of cane.(plant , ratoon 1 ,ratoon 2 etc ).</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/farmer register.jpg"/></a></p>
		<p><b>Weekly Program Of Cane Maintenance:</b></p>
		<p>This window is used to view the weekly program for cane maintance. Showing all the activities , its scheduled time period etc related to a particular field</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/weekly program of cane maintance.jpg"/></a></p>
		<p><b>List of Pending Jobs with Agronomy:</b></p>
		<p>This interface shows the list of all pending jobs with Agronomy, created by ODS. It shows the field number, farmer’s name, area, request date and job type.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/list of pending jobs with Agronomy.jpg"/></a></p>
		<p><b>Pending Land Preparations with AE:</b></p>
		<p>This interface shows the list of all pending jobs with AE, created by ODS. It shows the field number, farmer’s name, area, request date and job type.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/pending land preparation with AE.jpg"/></a></p>
		<p><b>Supervisor Summary:</b></p>
		<p>This window is used to view the supervisors based on some filters like sub-location etc to see its area and field.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/supervisor summary.jpg"/></a></p>
		<p><b>Cane Maintenance Report</b></p>
		<p>This window is used to view Pending/Completed/All events along with its due date and completed date.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/cane maintanance report.jpg"/></a></p>
		<p><b>Productivity Report</b></p>
		<p>This window is used to see the productivity report related to particular sub-location and during a particular time interval.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/productivity report.jpg"/></a></p>
		<p><b>New Land Application Report</b></p>
		<p>This window is used to view all the applications whose contract signing process is completed. This window also allows the user to generate a report of such entries.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/New land recruitment annalysis.jpg"/></a></p>
		<p><br><b>Pending Seed cane / Fertilizer Distribution by FSS:</b></br></p>
		<p>This interface shows the list of all pending jobs with CDS, created by ODS. It shows the field number , farmers name, area, request date and job type.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/pending seedcane fertilizer distribution.jpg"/></a></p>
		<p><br><b>Crop Activity Analysis Report:</b></br></p>
		<p>This window is used to view the crop activity details like total area , actual area , estimated fields , actual fields.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/crop activity analysis report.jpg"/></a></p>	
		<p><b>Total Cane Area By Variety:</b></p>
		<p>This window is used to view the details of particular type of plot , its variety and its crop cycle.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/total cane area by variety.jpg"/></a></p>	
		<p><br><b>Misc Reports:</b></br></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/ods reports/master report.jpg"/></a></p>	
		<p><br><b>District Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding District</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/district master.jpg"/></a></p>	
		<p><br><b>Zone Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding Zone.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/zone master.jpg"/></a></p>	
		<p><br><b>Sub-Location Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding Sub-Location.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/sub location.jpg"/></a></p>	
		<p><br><b>Location Master::</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding location.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/location master.jpg"/></a></p>	
		<p><br><b>Contractor Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding Contractor.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/contractor master.jpg"/></a></p>	
		<p><br><b>Field Supervisor Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding Field Supervisor.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/field supervisor master.jpg"/></a></p>	
		<p><br><b>Field Assistants Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding Field Assistants..</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/field assistant.jpg"/></a></p>	
		<p><br><b>IPA Staff Master:</b></br></p>
		<p>This window is used to insert/delete/modify the information regarding IPA Staff.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/staff master.jpg"/></a></p>	
		<p><br><b>Farmer Master:</b></br></p>
		<p>This window is used to view all the farmers associated with the company .As well as this form is used to Insert , Delete or Update a farmer detail.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/farmer  master.jpg"/></a></p>	
		<p><br><b>Site Master:</b></br></p>
		<p>This window is used to enter a new site or delete or modify a previously existing site.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/site master.jpg"/></a></p>	
		<p><br><b>County Master:</b></br></p>
		<p>See county master below.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/county master.jpg"/></a></p>	
		<p>See control parameter below.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Master database/control parameter.jpg"/></a></p>	
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('nucleus_estate')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('miscellaneous')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		