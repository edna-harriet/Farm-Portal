<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Post Harvesting Process</title>
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
							<li>Post harvesting process</li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><li><b>Post harvesting process</b></li></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/flowchart.jpg"/></a></p>
		<p><li><b>New Land Application</b></li></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/new land application.jpg"/></a></p>
		<p><li><b>Generate Extension/Termination/Renewal lists</b></li></p>
		<p>This interface generates the list for all extension, termination and renewal cases. It shows the field number , description, plot number , farmers name, land parcel number , variety, crop cycle, yield and action.All Renewal cases are shown in Yellow, Extension cases in Green and Terminated cases in Red.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/post harvesting process.jpg"/></a></p>
		<p><li><b>Generate Extension Contracts</b></li></p>
		<p>This interface shows the list of all extension cases. It shows the field number, description, plot number , farmers name, land parcel number , variety, crop cycle, yield and action.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/post harvesting extension  process.jpg"/></a></p>
		<p><li><b>Confirmation of extension contract signing</b></li></p>
		<p>This interface generates the confirmation for all extension contract-signing cases. It shows the field number, description, plot number, farmers name, land parcel number , variety, crop cycle, yield per hectare and action.</p>
		<p>All Approved cases are highlighted in Green and Rejected cases in Red.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/confirmation of extension signing.jpg"/></a></p>
		<p><li><b>Confirm Contract Terminations</b></li></p>
		<p>This interface is for confirming the termination of contracts. It shows the field number, description, plot number, farmers name, land parcel number, variety, crop cycle, yield per hectare and action.</p>
		<p>The contracts to be continued are highlighted in Green and those to be terminated are shown in Red</p>
		<p><li><b>Generate new contracts for renewal cases</b></li></p>
		<p>This interface generates new contracts for renewal cases. It shows the field number, description, plot number, farmers name, land parcel number, variety, crop cycle, yield per hectare and action.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/post harvesting renewal process.jpg"/></a></p>
		<p><li><b>Confirm Signing of New Contracts</b></li></p>
		<p>This interface is for the confirmation of new contracts being signed. It shows the field number, description, plot number, farmers name, land parcel number, variety, crop cycle, yield per hectare and action.</p>
		<p>The contracts that are approved are highlighted in Green and those rejected are shown in Red.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/new contract signing confirmation.jpg"/></a></p>
		<p><li><b>Generate Land Preparation Requests</b></li></p>
		<p>This interface is for generating land preparation requests as on the current date. It shows the field number, description, plot number, area, variety, crop cycle, nursery, land parcel number and remarks.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/general request for land preparation.jpg"/></a></p>
		<p><li><b>Contract Transfer</b></li></p>
		<p>This window is used to transfer the contract related to a particular land. The user enters the field number and plot number and new farmer id and other details to transfer the contract</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/post harvesting process/contract transfer.jpg"/></a></p>
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('miscellaneous')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('outgrowers_extension')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
				