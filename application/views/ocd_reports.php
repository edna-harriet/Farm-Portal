<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Outgrowers Cane Development: OCD reports</title>
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
							<li><b>OCD reports.</b></li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><b>OCD reports.</b></p>
		<p><b>List of fertilizer invoices</b></p>
		<p>This report is for showing the list of fertilizer invoices for any entered range of dates. It pulls up the invoice number , date, field number , plot number , farmers name, fertilizer, quantity, rate and amount.</p>
		<p>The user is required to enter the following information:</p>
		<p>From : Enter the date from which report is required.</p>
		<p>To : Enter the date till which report is required</p>
		<p><b>List of fertilizer invoices.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/list of fert invoices.jpg"/></br></a></p>
		<p><b>Fertilizer Report.</b></p>
		<p>See image below.</p>
		<p><b>Fertilizer Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/fert distribution report.jpg"/></br></a></p>
		<p><b>Fertilizer Requirement Forecast.</b></p>
		<p>See image below.</p>
		<p><b>Fertilizer Requirement Forecast.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/fert req forecast report.jpg"/></br></a></p>
		<p><b>Seedcane Mapping Report.</b></p>
		<p>See image below.</p>
		<p><b>Seedcane Mapping Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/seedcane mapping report.jpg"/></br></a></p>
		<p><b>Fertilizer Target Report.</b></p>
		<p>See image below.</p>
		<p><b>Fertilizer Target Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/fert target report.jpg"/></br></a></p>
		<p><b>Seedcane Planting Report.</b></p>
		<p>See image below.</p>
		<p><b>Seedcane Planting Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/planting summary report.jpg"/></br></a></p>
		<p><b>Seedcane Transport Report.</b></p>
		<p>See image below.</p>
		<p><b>Seedcane Transport Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/seedcane stock reconcilliation report.jpg"/></br></a></p>
		<p><b>Available land without Seedcane.</b></p>
		<p>See image below.</p>
		<p><b>Available land without Seedcane.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/plots available at CDS.jpg"/></br></a></p>
		<p><b>Seedcane mean weights</b></p>
		<p>See image below.</p>
		<p><b>Seedcane mean weights.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/seedcane mean weight.jpg"/></br></a></p>
		<p><b>Seedcane Lying in the fields</b></p>
		<p>See image below.</p>
		<p><b>Seedcane Lying in the fields.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/harvested cane lying in field.jpg"/></br></a></p>
		<p><b>Seedcane Harvesting report</b></p>
		<p>See image below.</p>
		<p><b>Seedcane Harvesting report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/seedcane harvesting.jpg"/></br></a></p>
		<p><b>MISC reports.</b></p>
		<p>See image below.</p>
		<p><b>MISC reports.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/OCD reports/master report.jpg"/></br></a></p>
		<P><b>MASTERS</b></P>
		<p><b>Contractor master.</b></p>
		<p>This window is used to insert/delete/modify contractor Information.</p>
		<p><b>Contractor master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Master Database/contractor master.jpg"/></br></a></p>
		<p><b>Vehicle Master.</b></p>
		<p>This window is used to insert/delete/modify Vehicle Information.</p>
		<p><b>Vehicle Master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Master Database/vehicle master.jpg"/></br></a></p>
		<p><b>Fertilizer Return Causes.</b></p>
		<p>This window is used to insert/delete/modify fertilizer retaining causes.</p>
		<p><b>Fertilizer Return Causes.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Master Database/fert retaining causes.jpg"/></br></a></p>
		<p><b>Fertilizer/Load seed master.</b></p>
		<p>See image below.</p>
		<p><b>Fertilizer/Load seed master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Master Database/loader master.jpg"/></br></a></p>
		<p><b>Control Parameter</b></p>
		<p>See image below.</p>
		<p><b>Control Parameter.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/control parameter.jpg"/></br></a></p>
		<p><b>Additional Plough/Harrow.</b></p>
		<p>See image below.</p>
		<p><b>Additional Plough/Harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/2nd plough request.jpg"/></br></a></p>
		<p><b>Contractor allocation 2nd plough</b></p>
		<p>See image below.</p>
		<p><b>Contractor allocation 2nd plough.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 2nd plough.jpg"/></br></a></p>
		<p><b>2nd plough QA</b></p>
		<p>See image below.</p>
		<p><b>2nd plough QA.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/quality assessment sheet for 2nd ploughing.jpg"/></br></a></p>
		<p><b>Request for 3rd plough.</b></p>
		<p>See image below.</p>
		<p><b>Request for 3rd plough.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/3rd plough request.jpg"/></br></a></p>
		<p><b>Contractor allocation 3rd plough.</b></p>
		<p>See image below.</p>
		<p><b>Contractor allocation 3rd plough.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 3rd ploughing.jpg"/></br></a></p>
		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 3rd ploughing2.jpg"/></br></a></p>
		<p><b>3rd plough QA.</b></p>
		<p>See image below.</p>
		<p><b>3rd plough QA.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/quality assessment sheet for 2nd ploughing.jpg"/></br></a></p>
		<p><b>Request for second harrow.</b></p>
		<p>See image below.</p>
		<p><b>Request for second harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/2nd harrow request.jpg"/></br></a></p>
		<p><b>Contractor allocation 2nd harrow.</b></p>
		<p>See image below.</p>
		<p><b>Contractor allocation 2nd harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 2nd harrowing.jpg"/></br></a></p>
		<p><b>Contractor allocation 2nd harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 2nd harrowing2.jpg"/></br></a></p>
		<p><b>2nd harrow QA</b></p>
		<p>See image below.</p>
		<p><b>2nd harrow QA.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/quality assessment sheet 2nd harrow.jpg"/></br></a></p>
		<p><b>Request for 3rd harrow</b></p>
		<p>See image below.</p>
		<p><b>Request for 3rd harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/3rd harrowing request.jpg"/></br></a></p>
		<p><b>Contractor allocation 3rd harrow</b></p>
		<p>See image below.</p>
		<p><b>Contractor allocation 3rd harrow.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 3rd harrowing.jpg"/></br></a></p>
		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/contractor mechine allocation for 3rd harrowing2.jpg"/></br></a></p>
		<p><b>3rd harrow QA</b></p>
		<p>See image below.</p>
		<p><b>3rd harrow QA.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Additional plough harrow/quality assessment sheet 3rd harrow.jpg"/></br></a></p>
		<p><b>Land Development</b></p>
		<p><b>Land Requiring Inspection</b></p>
		<p>See image below.</p>
		<p><b>Land Requiring Inspection.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/land inspection result.jpg"/></br></a></p>
		<p><b>Contractor Allocation - Ploughing CD</b></p>
		<p>See image below.</p>
		<p><b>Contractor Allocation - Ploughing CD.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor mechine allocation for ploughing.jpg"/></br></a></p>
		<p><b>QA sheet-Ploughing</b></p>
		<p>See image below.</p>
		<p><b>QA sheet-Ploughing</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/quality assessment sheet.jpg"/></br></a></p>
		<p><b>Survey Job allocation</b></p>
		<p>See image below.</p>
		<p><b>Survey Job allocation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/surveyor allocation.jpg"/></br></a></p>
		<p><b>Enter Survey results</b></p>
		<p>See image below.</p>
		<p><b>Enter Survey results</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/surveyor results.jpg"/></br></a></p>
		<p><b>Contractor Allocation - Harrow/Furrow CD</b></p>
		<p>See image below.</p>
		<p><b>Contractor Allocation - Harrow/Furrow CD</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/Daily machinery allocation.jpg"/></br></a></p>
		<p><b>QA sheets - Harrow/Furrow</b></p>
		<p>See image below.</p>
		<p><b>QA sheets - Harrow/Furrow</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/harrowing quality assessment sheet.jpg"/></br></a></p>
		<p><b>Contractor Work Certificate</b></p>
		<p>See image below.</p>
		<p><b>Contractor Work Certificate</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor work cert.jpg"/></br></a></p>
		
		<p><b>Request For 2nd harrow</b></p>
		<p>See image below.</p>
		<p><b>Request For 2nd harrow</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/2nd harrowing request.jpg"/></br></a></p>
		<p><b>2nd harrow contractor allocation</b></p>
		<p>See image below.</p>
		<p><b>2nd harrow contractor allocation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor mechine allocation for 2nd harrowing.jpg"/></br></a></p>
		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor mechine allocation for 2nd harrowing2.jpg"/></br></a></p>
		<p><b>contractor allocation - Plough(SD)</b></p>
		<p>See image below.</p>
		<p><b>contractor allocation - Plough(SD)</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor mechine allocation for ploughing self dev.jpg"/></br></a></p>
		
		<p><b>contractor allocation - Harrow /Furrow(SD)</b></p>
		<p>See image below.</p>
		<p><b>contractor allocation - Harrow /Furrow(SD)</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/contractor mechine allocation for 2nd harrowing.jpg"/></br></a></p>
		<p><b>Job Completion Certificate</b></p>
		<p>See image below.</p>
		<p><b>Job Completion Certificate</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/job completion cert.jpg"/></br></a></p>
		<p><b>Land Development Invoice</b></p>
		<p>See image below.</p>
		<p><b>Land Development Invoice</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/land prep invoicing.jpg"/></br></a></p>
		<p><b>Land Development Invoice Reprint</b></p>
		<p>See image below.</p>
		<p><b>Land Development Invoice Reprint</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land development/land prep invoicing reprint.jpg"/></br></a></p>
		<p><b>Land Development Reports.</b></p>
		<p><b>Survey Reports.</b><p>
		<p>See image below.</p>
		<p><b>Survey Reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/survey report.jpg"/></br></a></p>
		<p><b>Work Status Reports.</b><p>
		<p>See image below.</p>
		<p><b>Work Status Reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/work status report.jpg"/></br></a></p>
		<p><b>Contractor Work Allocated Reports.</b><p>
		<p>See image below.</p>
		<p><b>Contractor Work Allocated Reports</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/contractor work report.jpg"/></br></a></p>
		<p><b>Land Preparation Status.</b><p>
		<p>See image below.</p>
		<p><b>Land Preparation Status.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/field preparation report.jpg"/></br></a></p>
		<p><b>Ploughed Fields Without Survey.</b><p>
		<p>See image below.</p>
		<p><b>Ploughed Fields Without Survey.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/survey rejected plots.jpg"/></br></a></p>
		<p><b>Land Inspection Results.</b><p>
		<p>See image below.</p>
		<p><b>Land Inspection Results.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/plot inspection report.jpg"/></br></a></p>
		<p><b>Land Status Summary</b><p>
		<p>See image below.</p>
		<p><b>Land Status Summary.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/land status report.jpg"/></br></a></p>
		<p><b>Land Prepared per Contractor</b><p>
		<p>See image below.</p>
		<p><b>Land Prepared per Contractor.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/ODS land preparation.jpg"/></br></a></p>
		<p><b>Quality Assessment Report</b><p>
		<p>See image below.</p>
		<p><b>Quality Assessment Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/quality assessment report.jpg"/></br></a></p>
		<p><b>Plough Quality Analysis.</b><p>
		<p>See image below.</p>
		<p><b>Plough Quality Analysis.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/ploughing QA analysis report.jpg"/></br></a></p>
		<p><b>Harrow Quality Analysis.</b><p>
		<p>See image below.</p>
		<p><b>Harrow Quality Analysis.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/harrowing QA analysis report.jpg"/></br></a></p>
		<p><b>Furrow Quality Analysis.</b><p>
		<p>See image below.</p>
		<p><b>Furrow Quality Analysis.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/furrowing QA analysis report.jpg"/></br></a></p>
		<p><b>Contractor Performance Analysis.</b><p>
		<p>See image below.</p>
		<p><b>Contractor Performance Analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers cane dev/Land dev reports/AE contractor analysis report.jpg"/></br></a></p>
		<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('h_t')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('outgrowers_canedev')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		