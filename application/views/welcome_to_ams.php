<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Welcome to AMS</title>
		<link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.jpg"/>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/>
		<link rel="index" title="index" href="genindex.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title="Welcome To AMS User Guide" href="general/welcome.html"/>
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
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a></li>
      		<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>">AMS Hardware Requirement</a></li>	
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
      		<li class="toctree-11 dropdown-header"><a class="reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a></li>
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
									<li>Welcome To AMS</li>
									<li class="wy-breadcrumbs-aside"></li>
								</ul>
						<hr/>
					</div>
			<div role="main" class="document">
				<div class="section" id="Welcome To AMS">
					<h1>Welcome To AMS<a class="headerlink" href="#Welcocme To AMS" title="Permalink to this headline"></a></h1>
						<p>The Agricultural Management System (AMS) is an integrated application for management of all operations in growing cane.</p>
						<p>It therefore provides a common view of data and reports for all the sections of Agriculture from farmer application to payment. More importantly the application;</p>
						<p>a. Enables automatic routing of activities and requests from one section of the department to another.</p>
						<p>b. Tracks activity schedules for best practice maintenance of cane according to each cane variety requirements.</p>
						<p>c. Provides a single point of query handling to the farmer hence eliminating the need for farmer to seek help from sections providing each service.</p>
						<p>d. Enables online transaction recording between the Weighment of cane and individual farmer account therefore eliminating transcription of weighbridge tickets into the system.</p>
						<p>e. Electronic maintenance of farmer records for on demand access</p>		
						<p>Below is the <b>AMS login page</b></p>
						<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/image/welcome_to_ams.jpg"/></a></p>    	
						<p>This manual provides detailed step by step explanation on all processes in all areas covered by the application. In each case, it starts by explaining the process and then how and when to execute the activities to complete each process.</p>
				</div>
			</div><!-- closes the div role="main" -->
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="/ams_user_guide/basic_information" class="btn btn-neutral float-right" title="Basic Information">Next<span class="">
		 <a href="/ams_user_guide/welcome_to_ams" class="btn btn-neutral" title="Welcome To AMS">Previous</a>
	</div>
	<hr/>
	<div class="container-fluid site-container">
    	<div class="container-fluid footer-details">
    		<div class="d-flex justify-content-between mb-3 flex-wrap">
    			<div class="row">
        			<div class="col-xs-2">
    					<p style ="text-align: left;"><a href="/" class="navbar-brand navbar-brand-1">
                        		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/image/sonysugarfooter.jpg"/></a></p>
                   	</div>  	
				</div>
 			</div>
 		</div>
	</div>				
</footer>
			</div>
			</div>
		</section>
	</body>
</html>