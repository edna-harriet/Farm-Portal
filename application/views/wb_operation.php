<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>WEIGHBRIDGE OPERATION</title>
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
							<li><b>WEIGHBRIDGE OPERATION</b></li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
				<P><b>Daily cane Delivery report</b></p>
				<p>This window is used to view the daily cane report. The report thus produced shows the data time wise in the difference of 1 hour. The user needs to make following inputs</p>
				<p>1. Date</p>
				<p>2. Weighment center</p>
				<p><b>Daily cane Delivery report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Daily cane delivery report.jpg"/></br></a></p>
				<p><b>Daily Cane Weightment Report</b></p>
				<p>This window is used to view the weightment report. The report thus produced show various details like center name, center date , time , gross wt , Tare wt.</p>
				<p>The user needs to make following inputs.</p>
				<p>1.Date From, To</p>
				<p>2.Purchase Center</p>
				<p>3.Contractor.</p>
				<p><b>Daily Cane Weightment Report / High Payload Weights report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/High payload weights report.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/High payload weights report2.jpg"/></br></a></p>
				<p><b>Vehicle turn around Statistics</b></p>
				<p>This window is used to view the vehicle turn-around report. The report thus produced shows the data on the basis of various filters like date , weighment center , time period</p>
				<p>The user needs to make following inputs:</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Time Period</p>
				<p><b>Vehicle turn around Statistics</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Vehicle turn around statistics.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Vehicle turn around statistics2.jpg"/></br></a></p>
				<p><b>Exceptional Weights</b></p>
				<p>This window is used to view the exceptional weights report. The report thus produced shows the data on the basis of various filters like date , wmnt center , qty.</p>
				<p>The user needs to make following inputs:</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Time Period</p>
				<p>4.Quantity</p>
				<p><b>Exceptional Weights</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Exceptional weights.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Exceptional weights2.jpg"/></br></a></p>
				<p><b>Staleness Index Report</b></p>
				<p>This window is used to view the Staleness report. The report thus produced shows the data on the basis of various details like date , wmnt center , cane type and shows information like stale days etc .The user needs to make following inputs:</p>
				<p>The user needs to make following inputs:</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Cane type</p>
				<p><b>Staleness Index Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index report.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index report2.jpg"/></br></a></p>
				<p><b>Staleness Index Details Summary</b></p>
				<p>This window is used to view the staleness index Details. It shows information regarding staleness , its index etc.The user needs to make following inputs</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Cane type</p>
				<p><b>Staleness Index Details Summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index summary.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index summary2.jpg"/></br></a></p>
				<p><b>Staleness Index Details Summary</b></p>
				<p>This window is used to view the staleness index Details. It shows information regarding staleness , its index etc.The user needs to make following inputs</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Cane type</p>
				<p><b>Staleness Index Details Summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index summary.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Staleness index summary2.jpg"/></br></a></p>
				<p><b>Cane Supply Total Report</b></p>
				<p>This window is used to get the report of total cane on the basis of zone , sublocation , field , plot etc from their Codes. The report thus produced gives the result in the form of data grid showing various information like field number , plot number , total weight etc.</p>
				<p>1.Date</p>
				<p>2.Weighment Center</p>
				<p>3.Cane type</p>
				<p><b>Cane Supply Total Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Cane supply total report.jpg"/></br></a></p>
				<p><b>Weighbridge comprehensive Report</b></p>
				<p>See illustration below.</p>
				<p><b>Weighbridge comprehensive Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/WB Comprehensive report.jpg"/></br></a></p>
				<p><b>Misc Report</b></p>
				<p>See illustration below.</p>
				<p><b>Misc Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Reports.jpg"/></br></a></p>
				<p><b>Misc Operations</b></p>
				<p><b>Vehicle transfer</b></p>
				<p>See illustration below.</p>
				<p><b>Vehicle transfer</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Vehicle transfer.jpg"/></br></a></p>
				<p><b>Include uncaptured delivery note.</b></p>
				<p>See illustration below.</p>
				<p><b>Include uncaptured delivery note</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Include Dnote.jpg"/></br></a></p>
				<p><b>Enter manual weighment</b></p>
				<p>See illustration below.</p>
				<p><b>Enter manual weighment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Manual weighment.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Manual weighment2.jpg"/></br></a></p>
				<p><b>Authorize manual weighment</b></p>
				<p>See illustration below.</p>
				<p><b>Authorize manual weighment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Confirm weighments.jpg"/></br></a></p>
				<p><b>Manual weighment checklist</b></p>
				<p>See illustration below.</p>
				<p><b>Manual weighment checklist.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Misc Operation/Weighment checklist.jpg"/></br></a></p>
				<p><b>Cane Testing Unit Integration.</b></p>
				<p><b>CTU lab result.</b></p>
				<p>See illustration below.</p>
				<p><b>CTU lab result</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Cane testing unit intergration/CTU Lab Results.jpg"/></br></a></p>
				<p><b>AMS-CTU integrated lab report.</b></p>
				<p>See illustration below.</p>
				<p><b>AMS-CTU integrated lab report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/weighbridge operation/Cane testing unit intergration/frmCTULabResultReport.jpg"/></br></a></p>
	<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('oga')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('h_t')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		
                