<?php defined('BASEPATH') OR exit('No direct script access is allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AMS User Guide</title>  
		<link rel="shortcut icon" type="image/jpg"  href="<?php echo base_url(); ?>favicon.jpg"/>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.jpg"/>		
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/><!-- Ensure to connect the autoload['helper'] in the autolaod file to 'url'
		 -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.mim.js"></script>
		<link rel="index" title="Index" href="genindex.html"/>
		<link rel="search" title="Search" href="search.html"/>
		<link rel="top" title="" href="#"/>
		<link rel="next" title="Welcome To AMS User Guide" href="general/welcome.html"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src=https://www.jqueryscript.net/demo/jQuery-Extension-To-Add-Ken-Burns-Effect-To-Bootstrap-Carousel/></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>	
		<style>
		.fixed-footer {
	       position:fixed;
	       left:10;
	       bottom:0;
	       width:100%;
	       }
		</style>
	</head>
	<body class="wy-body-for-nav"  role="document" style="">
		<div id="nav">
			<div id="nav_inner">
				<div id="pulldown-menu" class="ciNav"></div>
			</div>
		</div>
		<!-- The code below is to create a nav with a text of Agriculture Management System on the layout and the change its color from orange to green. -->
		<div class="wy-grid-for-nav">
	<!-- the navigation bar -->
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
      </div>
      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation"> 
      	 <ul>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a></li>
      	 	<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('sla')?>">AMS Service Level Agreement</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>">AMS Issue Log</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>">AMS Hardware Requirement</a></li>	
      		<li class="toctree-11"><a class="current reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('ams_modules')?>">AMS Modules</a></li>
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('other_modules')?>">AMS Other Modules</a></li>
      	</ul>                      
      </div>
    </nav>
    <!-- Here is for creating header title -->
    	<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
    		<nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        		<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        			<a href="#">AMS</a>
      		</nav>
			<div class="wy-nav-content">
        		<div class="rst-content">
          			<div role="navigation" aria-label="breadcrumbs navigation" style="color:green;">
  						<ul class="wy-breadcrumbs">
        					<li><a href="#">Docs</a></li><li>&raquo;</li>
        					<li>AMS User Guide</li>
          					<li class="wy-breadcrumbs-aside"></li>
  						</ul>
  				<hr/>
					</div> <!-- Closes the div role= "navigation" aria-label="breadcrumbs navigation" -->
    				<div role="main" class="document">
						<div class="section" id="AMS-user-guide">
							<h1>AMS User Guide<a class="headerlink" href="#AMS-user-guide" title=""></a></h1>
								<ul class="Simple">
									<li><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>"><span class="doc">Welcome to AMS</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('sla')?>"><span class="doc">AMS Service Level Agreement</span></a></li>
            						<li><a class="reference internal" href="<?php echo site_url('ams_issuelog')?>"><span class="doc">AMS Issue Log</span></a></li>
            						<li><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>"><span class="doc">AMS Hardware Requirements</span></a></li>
            						<li><a class="reference internal" href="<?php echo site_url('installation_instruction')?>"><span class="doc">AMS Installation Instruction</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('ams_upgrade')?>"><span class="doc">Upgrading from previous version of AMS</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('ams_user_support')?>"><span class="doc">AMS User Support</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('ams_modules')?>"><span class="doc">AMS system overview</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('outgrowers_extension')?>"><span class="doc">Outgrowers Extension Service</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('nucleus_estate')?>"><span class="doc">Nucleus Estate</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('agric_eng')?>"><span class="doc">Agriculture Engineering</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('outgrowers_canedev')?>"><span class="doc">Outgrowers Cane Development</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('h_t')?>"><span class="doc">Harvesting & Transport</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('r_d')?>"><span class="doc">Research&Development(Agronomy)</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('wb_operation')?>"><span class="doc">Weighbridge Operations</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('oga')?>"><span class="doc">Outgrowers Accounts</span></a></li>
									<li><a class="reference internal" href="<?php echo site_url('mgt_admin')?>"><span class="doc">Management & Administration</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Other Modules' system overview</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Interactive Voice Response System</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Query by Message System</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">HHTPDA system</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Fleet&Fuel Monitoring system</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Farmers Web Portal</span></a></li>
									<li><a class="reference internal" href=""><span class="doc">Smart Weighment System</span></a></li>
								</ul>		
						</div>
					</div>
					<div class="section" id="welcome">
						<h2><a class="toc-backref" href="#id1">Welcome to AMS</a><a class = "headerlink" href="#welcome" title=""></a></h2>
						<div class="toctree-wrapper compound">
							<ul>
								<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('welcome_to_ams')?>">Welcome to AMS</a></li><!-- the link enables connection to the Welcome to AMS page whose file controls the sidenav bar -->
							</ul>
						</div>
					</div>
					<div class="section" id="basic-info">
						<h2><a class="toc-backref" href="#id2">Basic Information</a><a class="headelink" href="#basic-info" title=""></a></h2>
							<ul class="simple">
								<li><a class="reference internal" href="/ams_user_guide/hardware_requirement"><span class="doc">Hardware Requirements</span></a></li>
							</ul>
					</div>
					<div class="section" id="installation">
						<h2><a class="toc-backref" href="#id3">Installation</a><a class="headerlink" href="#installation" title=""></a></h2>
						<div class="toctree-wrapper compound">
							<ul>
                				<li class="toctree-11"><a class="reference internal" href="/ams_user_guide/installation_instruction">Installation Instructions</a></li>
                				<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/ams_upgrade">Upgrading from a previous version of AMS</a></li>
                				<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/ams_user_support">AMS User Support</a></li>
							</ul>
						</div>
						<div class="section" id="general-topics">
							<h2><a class="toc-backref"  href="#id7">AMS Modules</a><a class="headerlink" href="#general-topics" title="Permalink to this headline"></a></h2>
							<ul>
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/ams_modules" class="color:green;" style="text-decoration-color:green;">System Overview</a></li>
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/outgrowers_extension">Outgrowers Extension</a></li>
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/nucleus_estate">Nucleus Estate</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/agric_eng">Agricultural Engineering</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/Outgrowers_canedev">Outgrowers Cane Development</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/h_t">Harvesting&Transport</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/r_d">Research&Development(Agronomy)</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/wb_operation">Weighbridge Operation</a></li>	
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/oga">Outgrowers Accounts</a></li>
                    			<li class="toctree-12"><a class="reference internal" href="/ams_user_guide/mgt_admin">Management & Administration</a></li>	
							</ul>	
						</div>
						<h2><a class ="toc-backref" href="#id3">Other Modules</a><a class="headerlink" href="#general-topics" title="Permalink to this headline"></a></h2>
						<ul>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/index.html" style="style=color:green;">System Overview</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/Ivrs.html">Interactive Voice Response System</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/QMS.html">Query by Mobile System</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/HHTPDA.html">HHTPDA system</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/FFMS.html">Fleet&Fuel Monitoring System</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/Farmer_Web_Portal.html">Farmer Web Portal</a></li>
                			<li class="toctree-12"><a class="reference internal" href="Other_Modules/SWS.html">Smart Weighment System</a></li>
                		</ul>
                		
		</div><!-- closes the div class="wy-nav-content" -->
		</div><!-- closes the div class="wy-grid-for-nav" -->

 <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">   
    </div>
  

  <hr/>

  <div role="contentinfo" class="fixed-footer">
            <p style ="text-align:;"><a href="<?php echo base_url()?>"class="navbar-brand navbar-brand-1">
                 <img src="<?php echo base_url();?>public/image/sonysugarfooter.jpg" class="img-responsive"/>
            </p>
 </div> 
                   	
</footer>
		 </div>
		</div>
	</section>
  </div>
</body>
</html>