<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>Miscellaneous</title>
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
							<li>Miscellaneous</li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
		<p><li><b>MISCELLANEOUS</b></li></p>
		<p><li><b>Request for 3rd Fertilizer Application</b></li></p>
		<p><li>This interface shows the farmer requests for 3rd Fertilizer applications. It has two tabs-Fertilizer Request and Existing Fertilizer Request. It shows the request number, field number , description, plot number ,farmers name, area, variety, crop cycle, age, fertilizer, required quantity, land parcel number and remarks</li></p>
		<p>The first tab interface requires the user to fill the following information.</p>
		<p>1. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.</p>
		<p>2. Plot number* : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in theselected field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area, age etc</p>
		<p>3. Qty. Required : Quantity of the fertilizer required</p>
		<p>4. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/third fertilizer application request.jpg"/></a></p>
		<p><li><b>Request to AE for Re-survey of Plots</b></li></p>
		<p>This interface shows the requests to AE from ODS, for Re-survey of plots. On entering the field number, and plot number, the cane area, variety, crop cycle, age show up automatically</p>
		<p>This interface requires the user to fill the following information</p>
		<p>1. Request Date : Date on which request is made</p>
		<p>2. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key</p>
		<p>3. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area, age.</p>
		<p>4. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/request re survey of plot.jpg"/></a></p>
		<p><li><b>Request to Agronomy for Pest/Disease Assessment:</b></li></p>
		<p>This interface is for submission of request to Agronomy for Pest/Disease Assessment. On entering the field number ,and plot number, the cane area, variety, crop cycle, age show up automatically</p>
		<p>This interface requires the user to fill the following information.</p>
		<p>Request Date : Date on which request is made</p>
		<p>Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key</p>
		<p>Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot no, it will show the related details in the terms of variety, crop cycle, cane area age</p>
		<p>Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/request to agronomy for pest disease assessment.jpg"/></a></p>
		<p><li><b>Tag / Un-tag Plot as Disputed</b></li></p>
		<p>This interface is for marking and unmarking disputed plots, and also giving the reason why. Clicking  Tag/Un-tag after entering all the mandatory information will perform the requested action</p>
		<p>To un-tag a plot, select the tagged plot from the existing list by double clicking on it, then select Un-tag from the reason for tagging list and update it clicking Tag/Un-tag Button</p>
		<p>This interface requires the user to fill the following information</p>
		<p>1. Tagging Date : Date on which request is made.</p>
		<p>2. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.
		<p>3. Plot number* : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area, age</p>
		<p>4. Reason for tag : Select reason for tagging</p>
		<p>5. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/tag untag disputed plots.jpg"/></a></p>
		<p><li><b>Command Buttons</b></li></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/tag_untag.jpg"/></a></p>
		<p>For disputed plots, click on this button to tag or Untag</p>
		<p><li><b>Enter Bank Account Numbers</b></li></p>
		<p>This interface is for entering Bank, Bank Code and Account number of the farmers. It shows field description, plot number , farmers name, farmers ID number , bank code, name of the bank and account number.</p>
		<p>This interface requires the user to fill the following information.</p>
		<p>1. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.</p>
		<p>2. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area,age.</p>
		<p>3. I.D number : ID Number of the farmer.</p>
		<p>4. Bank : Bank Name can be picked from the list, on selection of the bank, its branches will be shown in the Branch list.</p>
		<p>5. Branch : Branch Name can be selected from the list, which shows up automatically</p>
		<p>6. Account number : Enter the Bank Account Number of the farmer</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/enter bank account number.jpg"/></a></p>
		<p><li><b>Request Agronomy for Germination Assessment</b></li></p>
		<p>Request to Agronomy for Germination Assessment can be done through this interface. It has two tabs-Current Request for Germination Assessment and Existing Request for Germination Assessment. . On entering the field number, and plot number, the cane area, variety, crop cycle, age show up automatically.</p>
		<p>This interface requires the user to fill the following information</p>
		<p>1. Request Date : Date on which request is made</p>
		<p>2. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.</p>
		<p>3. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number it will show the related details in the terms of variety, crop cycle, cane area, age.</p>
		<p>4. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/request agronomy for germination assessment.jpg"/></a></p>
		<p><li><b>Request Agronomy for Assessment of Gaps:</b></li></p>
		<p>Request to Agronomy for Gap assessment can be done through this interface. It has two tabs-Current Request for Assessment of Gaps and Existing Request for Assessment of Gaps</p>
		<p>On entering the field number , and plot number, the cane area, variety, crop cycle, age show up automatically.</p>
		<p>This interface requires the user to fill the following information.</p>
		<p>1. Request Date : Date on which request is made</p>
		<p>2. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key</p>
		<p>3. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field. On selecting plot number , it will show the related details in the terms of variety, crop cycle, cane area, age</p>
		<p>4. Remarks : Remarks if any</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/request agronomy for assessment of gaps.jpg"/></a></p>
		<p><li><b>Farmer Request for Cane Carrying:</b></li></p>
		<p>The farmers request for Carrying Cane can be entered through this interface. It has two tabs-Current Request for Cane Carrying and Existing Request for Cane Carrying. It shows the request date, D/Note number , land parcel number , field number , description, plot number , farmers name, area, variety, crop cycle and remarks.</p>
		<p>This interface requires the user to fill the following information.</p>
		<p>1. Request date : Enter the date of request.</p>
		<p>2. D/Note number : Enter the delivery note number. On selecting D/Note number it will show the field number , plot number , land parcel number , variety, crop cycle, cane area</p>
		<p>3. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/growers request for cane carrying.jpg"/></a></p>
		<p><li><b>Farmer Request for Cane Slashing:</b></li></p>
		<p>The farmers request for Slashing Cane can be entered through this interface. Request is generated towards HTM .It has two tabs-Current Request for Cane Slashing and Existing Request for Cane Slashing</p>
		<p>It shows the request date, D/Note number , land parcel number , field number , description, plot number , farmers name, area, variety, crop cycle and remarks.</p>
		<p>This interface requires the user to fill the following information</p>
		<p>1. Request date : Enter the date of request.</p>
		<p>2. D/Note number : Enter the delivery note number. On selecting D/Note number it will show the field number , plot number , land parcel number , variety, crop cycle, cane area</p>
		<p>3. Remarks : Remarks if any.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/grower request for cane slashing.jpg"/></a>
		<p><li><b>Request For Foliar Analysis:</b></li></p>
		<p>Using this window user can send foliar analysis request to agronomy department</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/foliar request.jpg"/></a>
		<p><li><b>Job Status:</b></li></p>
		<p>This window is used to view the status of jobs which are requested by a particular section.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/status of job request.jpg"/></a>
		<p><li><b>Request For Juice Analysis:</b></li></p>
		<p>This window is used to generate a request for juice analysis. The user is required to select the sub-location and enter the field number , plot number to generate the request.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/requet for juice analysis.jpg"/></a>
		<p><li><b>Report Germination Failure:</b></li></p>
		<p>This window is used to report total germination failure. The user is required to select zone , sub-location , field number , Plot number and add remarks accordingly.</p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/miscellaneous/report germination failure.jpg"/></a>
		<p><li><b>Enter Mandates:</b></li></p>
		<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/oes/Enter_mandates.jpg"/></a>
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('ods_reports')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('post_harvesting_process')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
				