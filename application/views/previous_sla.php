<?php defined('BASEPATH') OR exit('No direct script access is allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Previous SLA</title>
		<link rel="shortcut icon" type="image/jpg"  href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url();  ?>favicon.jpg"/>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/><!-- Ensure to connect the autoload['helper'] in the autolaod file to 'url'
		 -->
		<link rel="index" title="index" href="genindex.html"/>
		<link rel="search" title="Search" href="search.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title="Welcome To AMS User Guide" href="general/welcome.html"/>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.imin.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
	</head>
	<body class="wy-body-for-nav" role="document" style=""><!-- Creates the vertical navbar on the left -->
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
    			<input name="q" placeholder="Search docs" type="text">
    			<input name="check_keywords" value="yes" type="hidden">
    			<input name="area" value="default" type="hidden">
  			</form>
  		</div>
  				</div><!-- Closes the wy-side-nav-search -->
  		<div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation"> 
      	<ul>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>">AMS Hardware Requirement</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('other_modules')?>">AMS Other Modules</a></li>
      	 </ul>          
      </div>
      		</nav>
	  </div>	
			<!-- To create header title -->
			<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
					<nav class="wy-nav-top" role="navigation" aria-label="top navigation">
						<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
							<a href ="#">AMS</a>
					</nav>
					<div class="wy-nav-content">
						<div class="rst-content"></div><!-- Aligns the entire content of the header and body at the same margin-->
							<div role="navigation" aria-label="breadcrumbs navigation" style="color:green";>
								<ul class="wy-breadcrumbs">
									<li><a href="#">Docs</a><li>&raquo;</li>
									<li>Previous Service Level Agreement</li>
								</ul>
						<hr/>
							</div>
					<div role="main" class="document">
						<div class="section" id="The Service Level Agreement">
							<h3>AMS Previous Service Level Agreement<a class="headerlink" href="#the service level agreement" title="Permalink to this headline"></a></h3>
							<embed src="<?php echo base_url(); ?>public/document/sla.pdf" type="application/pdf" width="100%" height="600px" /><!-- Attaches the sla.pdf file to the webpage -->
						</div><!-- Closes the div class = section -->
	                		 <a href="/ams_user_guide/sla" class="btn btn-neutral" title="AMS User Guide"><span class=""></span>Next</a>
					</div>	
<footer class="container-fluid footer">
	<hr/>
	<div class="container-fluid site-container">
    	<div class="container-fluid footer-details">
    		<div class="d-flex justify-content-between mb-3 flex-wrap">
    			<div class="row">
    					<p style ="text-align: left;"><a href="/" class="navbar-brand navbar-brand-1">
                        		<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/image/sonysugarfooter.jpg"/></a></p>    	
				</div>
 			</div>
 		</div>
	</div>				
</footer>	
					</div><!-- closes the div class="wy-nav-content" -->
				</div>
			</section><!-- closes the section data-toggle="wy-nav-shift" -->
	</body>
</html>