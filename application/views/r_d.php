<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>R&D(AGRONOMY)</title>
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
				<P><b>Agronomy Process Flow.</b></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/flowchart.jpg"/></br></a></p>
				<p><li><b>JOB QUEUE</b></li></p>
				<p>This interface shows the list of pending jobs/requests. The request number , request date and time, section, job type, field number, plot number, quantity and instructions are shown.</p>
				<p>The interface has buttons called filter buttons. Clicking on these, will show a filtered list, depending on properties like Request date, Request number, Field number, Request type, Requesting section entered.</p>
				<p><b>Job queue of pending jobs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Job queue.jpg"/></br></a></p>
				<p><li><b>SOIL ANALYSIS</b></li></p>
				<p><b>Enter Soil Analysis Results</b></p>
				<p>This interface is for entering the results of soil analysis. It has two tabs- Pending for Soil Analysis and Soil Analysis modification. Double clicking on any row, will pull up the land parcel number , growers name, field number , plot number and variety</p>
				<p>The chemical analysis of the soil details and physical analysis details have to be entered fully.</p>
				<p>The interface requires the user to enter the following information.</p>
				<p>1. Date of testing : Enter date of testing.</p>
				<p>2. Date Sample Collected : Enter date of sample collection.</p>
				<p><b>Chemical analysis</b></p>
				<p>1. Chemicals : Amount of Phosphorous ,Magnesium, Boron Zinc, Sulphur, Manganese, Molybdenum, Copper in ppm, Potassium, Calcium in m.e., organic matter, organic carbon.</p>
				<p>2. pH Value : Acidity value of the soil.</p>
				<p>3. % base saturation : Enter the % of base saturation.</p>
				<p>4. C.E.C : Enter the C.E.C rate of the soil.</p>
				<p>5. Electrical Conductivity : Enter the electrical conductivity rate of the Soil.</p>
				<p>6. Potassium Saturation : Enter the amount of potassium saturation in Soil.</p>
				<p>7. Calcium Saturation : Enter the amount of calcium saturation in Soil.</p>
				<p><b>Physical Analysis</b></p>
				<p>1. Lowland/Upland : Enter 0 if Lowland and 1 if Upland.</p>
				<p>2. Gradient (Degrees Angle): Enter the slope of land in degrees angle.</p>
				<p>3. Bulk Density : Enter the bulk density of the soil.</p>
				<p>4. Soil Color : Enter the color of the soil.</p>
				<p>5. Sand % : Enter the % of sand in the soil.</p>
				<p>6. Silt % : Enter the % of silt in the soil.</p>
				<p>7. Clay % : Enter the % of clay in the soil.</p>
				<p><b>Enter Soil Analysis Results</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Soil Analysis/soil sample analysis.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Soil Analysis/soil sample analysis2.jpg"/></br></a></p>
				<p><b>Recommendation for new lands:</b></p>
				<p>This interface is for entering the recommendation of new lands after the soil analysis. It has three tabs- Pending for Recommendation, Plots Recommended and Plots rejected</p>
				<p>Double clicking on any row, will pull up the land parcel number , grower’s name, field number , plot number and variety, and then it can be either Recommended or Rejected.</p>
				<p>Depending on the chemical/physical analysis of the soil AMS suggests whether land is suitable or not.</p>
				<p>The interface requires the user to enter the following information.</p>
				<p>1. Date of testing : Enter date of testing.</p>
				<p>2. Date Sample Collected : Enter date of sample collection.</p>
				<p><b>Chemical analysis</b></p>
				<p>Chemical analysis : Amount of Phosphorous ,Magnesium, Boron Zinc, Sulphur, Manganese, Molybdenum, Copper in ppm, Potassium, Calcium in m.e., organic matter, organic carbon</p>
				<p>1. pH Value : Acidity value of the soil.</p>
				<p>2. % base saturation : Enter the % of base saturation.</p>
				<p>3. C.E.C : Enter the C.E.C rate of the soil.</p>
				<p>4. Electrical Conductivity : Enter the electrical conductivity rate of the Soil.</p>
				<p>5. Potassium Saturation : Enter the amount of potassium saturation in Soil.</p>
				<p>6. Calcium Saturation : Enter the amount of calcium saturation in Soil.</p>
				<p><b>Physical Analysis</b></p>
				<p>1. Lowland/Upland : Enter 0 if Lowland and 1 if Upland.</p>
				<p>2. Gradient (Degrees Angle): Enter the slope of land in degrees angle.</p>
				<p>3. Bulk Density : Enter the bulk density of the soil.</p>
				<p>4. Soil Color : Enter the color of the soil.</p>
				<p>5. Sand % : Enter the % of sand in the soil.</p>
				<p>6. Silt % : Enter the % of silt in the soil.</p>
				<p>7. Clay % : Enter the % of clay in the soil.</p>
				<p><b>Recommendation for new lands</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Soil Analysis/soil test approval.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Soil Analysis/soil test approval2.jpg"/></br></a></p>
				<p><b>Foliar Analysis.</b></p>
				<p>This window is used to enter foliar details for a particular field. The user is required to make some important inputs like field number , chemical compositions etc.</p>
				<p><b>Foliar Analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Foliar sample analysis.jpg"/></br></a></p>
				<p><b>METEOROLOGICAL OBSERVATIONS.</b></p>
				<p>This interface is for entering the meteorological observations, at 9:00 Hrs and 15.00 Hrs. The wind speed, relative humidity, temperature of the soil and general temperature, rainfall details, sunshine hours are noted.</p>
				<p>The interface requires the user to enter the following information.</p>
				<p>Station : The station where the observation was made.</p>
				<p>Date : Enter the date on which observation is being made.</p>
				<p>Wind Speed : Enter the speed of wind.</p>
				<p>Relative humidity : Enter the relative humidity in the atmosphere.</p>
				<p>Soil temperature : Enter the temp. of the soil at depths of 5, 10, 20, 30cms.</p>
				<p>Rainfall : Enter the amount of rainfall in mm.</p>
				<p>Rainfall intensity : Enter the Rainfall intensity in mm/hr.</p>
				<p>Radiation : Enter the Radiation in the atmosphere.</p>
				<p>Evaporation : Enter the amount of evaporation.</p>
				<p>Sunshine hours : Enter the hours for which sun was shining.</p>
				<p>Temperature : Enter the maximum and minimum temp. at the time of observation</p>
				<p><b>Meterological observation.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/In plot cane losses.jpg"/></br></a></p>
				<p><b>SEEDCANE INSPECTION.</b></p>
				<p><b>Pending Seedcane inspection requests.</b><p>
				<p>This interface shows the list of pending Seedcane Inspection Requests as on the current date. It shows the request date, the section from which request was made, field number and description, plot number , farmer’s name, area, variety, crop cycle and age.</p>
				<p><b>Pending Seedcane inspection requests.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Seed Inspection/list of pending seed inspection.jpg"/></br></a></p>
				<p><b>Enter Seedcane inspection results.</b><p>
				<p>This interface is for entering the results after inspection of Seedcane. It has two tabs-Pending for Seed cane Results and Seed Inspection Modification. Double Click on any request, to enter inspection result for that field.</p>
				<p>If there are more than one samples, click on Next Site Test. Any modification to the results can be done in the Seed Inspection Modification tab.</p>
				<p>The interface requires the user to enter the following information</p>
				<p>Number of samples : Enter the number of samples taken.</p>
				<p>Sample date : Enter the date on which sample is taken.</p>
				<p>Number of Rows : Enter the number of rows of Seedcane.</p>
				<p>Survey Category : Enter the category of survey.</p>
				<p>Sample site : Enter the sample site number.</p>
				<p>Leaf color : Enter the code for leaf color.</p>
				<p>Weed control : Enter the code for weed control.</p>
				<p>Off types : Enter the % of off types.</p>
				<p>Stalks : For stalks, enter the pop, number of lodged, side shoots, aerial roots, arrows, length and girth in cms.</p>
				<p>Pests : Enter SUS, TER, MEB, STB and other details.</p>
				<p>Diseases : Enter SMT, MOS, RSD, PND and other details.</p>
				<p><b>Enter Seedcane inspection results.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Seed Inspection/seed cane inspection.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Seed Inspection/seed cane inspection2.jpg"/></br></a></p>
				<p><b>Enter Seedcane recommendation.</b><p>
				<p>This interface is for recommending those Seedcane which have undergone inspection. The screen shows the list of sample sites, from which tests were done and the list of fields awaiting approval.</p>
				<p>Double Clicking on the list of sample sites would pull up the information of the site in the box shown below.</p>
				<p>Select a field from the list and select a sample site, and then click on Approve to approve recommendation, and Reject to reject the recommendation.</p>
				<p><b>Enter Seedcane recommendation.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Seed Inspection/Enter seed cane recommendation.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Seed Inspection/Enter seed cane recommendation2.jpg"/></br></a></p>
				<p><b>In-plot cane losses</b><p>
				<p>This interface is for entering the losses of Seedcane which occurred in the fields itself. On entering the field number , and plot number , the variety, crop cycle, area, harvesting date, last transport date, h/group, assessment date, loading system and the contractor details all show up automatically</p>
				<p>T1, T2, T3, T4, T5, T6, T7 are the sub stations.</p>
				<p>The user is required to enter the following information.</p>
				<p>Tops : For different substations enter the number of tops lost.</p>
				<p>Fresh stalks : For different substations enter the number of fresh stalks lost.</p>
				<p>Stubble : For different substations enter the number of stubbles lost.</p>
				<p><b>In-plot cane losses.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Cane Field assessment.jpg"/></br></a></p>
				<p><b>Transit cane losses</b><p>
				<p>This interface is for entering the losses of Seedcane which was lost when the Seedcane was being transported. Here chasing vehicles are there, which are vehicles sent to pick up the dropped cane.</p>
				<p>1. The user is required to enter the following information.</p>
				<p>2. Chasing date : Enter the date on which the chasing vehicle was sent</p>
				<p>3. Chasing vehicle no: Vehicle number of the vehicle picking up dropped cane.</p>
				<p>4. Chasing Driver Name : Name of person driving the chasing vehicle.</p>
				<p>5. Recorder Name : Name of the person making the record of the chasing details</p>
				<p>6. Tractor Registration : Registration number of the vehicle which dropped the cane.</p>
				<p>7. Trailer type : Enter the Type of the trailer from the drop down menu.</p>
				<p>8. Start from- Field number : Field number from which Seedcane was being transported.</p>
				<p>9.Odometer condition : Select this if odometer is working (if not, the rest of the tabs are disabled.)</p>
				<p>10.Distance observed : Distance in Km for traveled.</p>
				<p>11.Odometer Start : Starting reading of odometer.</p>
				<p>12.End : Reading of the odometer when destination has been reached.</p>
				<p>13.Dropped cane stalks : Enter the amount of dropped cane stalks.</p>
				<p>14.Weight : Enter the weight of dropped cane stalks.</p>
				<p>15.Picked cane : Enter the amount of picked cane stalks.</p>
				<p>16.Weight : Enter the weight of picked cane stalks.</p>
				<p><b>Transit cane losses.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Transit cane losses.jpg"/></br></a></p>
				<p><b>JUICE ANALYSIS</b><p>
				<p><b>Commercial cane juice analysis.</b></p>
				<p> This interface is for entering the losses of Seedcane which was lost when the Seedcane was being transported. Here chasing vehicles are there, which are vehicles sent to pick up the dropped cane.</p>
				<p>1. Sample Sr. number : Enter the serial number of the sample.</p>
				<p>2. Type of cane : Enter the type of cane from the drop down menu.</p>
				<p>3. Source : Enter the source of cane from the drop down menu.</p>
				<p>4. Sample date-In : Enter the date (dd-mm-yyyy) when the sample was taken.</p>
				<p>5. In time : Enter the time at which the sample was taken.</p>
				<p>6. Date of Analysis : Enter the date (dd-mm-yyyy) on which analysis of sample is being done.</p>
				<p>7. Analysis time : Enter the time at which the analysis of sample was done.</p>
				<p>8. Number of samples : Enter the number of samples for which analysis was done.</p>
				<p>9.Purity : Enter the purity in %</p>
				<p>10.Burning date : Enter the date (dd-mm-yyyy) of burning, if sample is from a burnt cane field.</p>
				<p>11.Harvesting date : Enter the date (dd-mm-yyyy) on which cane has been harvested.</p>
				<p><b>Commercial cane juice analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/Commercial cane juice analysis.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/Commercial cane juice annalysis2.jpg"/></br></a></p>
				<p><b>Burnt Cane Analysis.</b></p>
				<p>See illustration below</p>
				<p><b>Burnt Cane Analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/Burnt Cane Analysis.jpg"/></br></a></p>
				<p><b>Juice Analysis ODS/NE</b></p>
				<p>This window is used to enter juice analysis findings , like number of cycles , purity % , variety , crop cycle etc</p>
				<p><b>Juice Analysis ODS/NE</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/Juice sample analysis.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/Juice sample analysis2.jpg"/></br></a></p>
				<p><b>ODS/NE Juice Analysis Recommendation</b></p>
				<p>This window is used to make approval or reject the juice analysis done in above step.</p>
				<p><b>ODS/NE Juice Analysis Recommendation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/agronomy recommendation of juice sample analysis.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Juice Analysis/agronomy recommendation of juice sample analysis2.jpg"/></br></a></p>
				<p><b>Mill test:</b></p>
				<p>This interface is for entering the results of the mill test. On entering the field number , the variety, crop cycle and age of the cane shows up.</p>
				<p>The user is required to enter the following information.</p>
				<p>1.Date: Enter the date of test.</p>
				<p>2.Field number : Enter the field number for which test is being done.</p>
				<p>3.Fiber : Enter the percent of fiber in the cane sample.</p>
				<p>4.Poll : Enter the percent of poll in the cane sample.</p>
				<p>5.Purity : Enter the percent of purity of the cane sample.</p>
				<p>6.Cane Qty. : Enter the quantity of the cane in tonnes.</p>
				<p>7.Crush time : Enter the time required for crushing the cane sample.</p>
				<p><b>Mill test:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Mill Test.jpg"/></p>
				<p><b>Germination assessment</b></p>
				<p>This interface is for entering the results of the germination assessment done.</p>
				<p>The user is required to enter the following information.</p>
				<p>Date : Enter the date on which assessment was done.</p>
				<p>Field number : Enter the field number for which assessment is done.</p>
				<p>Plot number : Enter the plot number for which assessment is done.</p>
				<p>Germination % : Enter the percent of germination for that plot.</p>
				<p><b>Germination assessment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Germination assessment.jpg"/></br></a></p>
				<p><b>Extraneous matter analysis</b></p>
				<p>This interface is for entering the details of analysis of extraneous matter. Clicking a row will pull up the age, cycle and harvesters name</p>
				<p>The user is required to enter the following information.</p>
				<p>1. Data collection : Select whether Mill cane or Seed cane.</p>
				<p>2. Sampling Date : Enter the date when the sample was taken.</p>
				<p>3. Field no : Enter the field number for which analysis is done.</p>
				<p>4.Plot number : Enter the plot number for which analysis is done.</p>
				<p>5. Transporter type : Select the transporter from the drop down menu.</p>
				<p>6. Variety : Select the variety of cane from the drop down menu.</p>
				<p>7. Estimated % EM : Enter the estimated extraneous matter %.</p>
				<p>8. Cutting F Asst. number : Enter the code for the field cutter assistant.</p>
				<p>9.D/Note number : Enter the delivery note number</p>
				<p>10. Extraneous Matter (kg) : Enter the trash, tops, roots, dead/stale stacks, water shoots, soil</p>
				<p>11. Total : Total weight of cane with trash.</p>
				<p>12. Net Cleaned Cane : Enter the weight of total cleaned cane.</p>
				<p><b>Extraneous matter analysis</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Extraneous matter analysis.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Extraneous matter analysis2.jpg"/></br></a></p>
				<p><b>Experimental observation test</b></p>
				<p>This interface is for entering the observations of the experimental test. On entering the Field number and plot number , variety, age, crop cycle and experiment number shows up automatically</p>
				<p>The user is required to enter the following information</p>
				<p>1.Field number : Enter the field number for which test observation is to be entered.</p>
				<p>2.Plot number : Enter the plot number for which test observation is to be entered.</p>
				<p>3. Stem : Enter the height, trash, diameter, pop, lodging, flowering,weeds, side shoots, and late tillers.</p>
				<p>4.Diseases : Enter the diseases afflicting the sample, from the drop-down menu</p>
				<p>5. Pests : Enter the pests afflicting the sample, from the drop-down menu.</p>
				<p>6.Others : Enter observation, if any other information is there.</p>
				<p>7. Comments : Enter comments if any.</p>
				<p>8. Overall : Enter the overall observation of the fields considered for test.</p>
				<p><b>Experimental observation test</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Experimental observation test.jpg"/></br></a></p>
				<P><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Experimental observation test2.jpg"/></br></a></p>
				
				<p><b>MISCELLANEOUS</b><p>
				<p><b>Approval of 3rd application of fertilizer:</b></p>
				<p>This interface is for approving/rejecting the third fertilizer requests. Select a row from the grid and click on ‘Approve’, to approve the request and ‘Reject’, to reject the request.</p>
				<p><b>Approval of 3rd application of fertilizer:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/contractor allocation for seed cane treatment.jpg"/></br></a></p>			
	            <p><b>Seedcane Treatment Contractor Allocation:</b></p>
				<p>This window is used to allocate contractor for seed cane treatment. There are two tabs in this window which allows the user to see all the pending allocations and allocated contractors in other tab.</p>
				<p><b>Seedcane Treatment Contractor Allocation:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/contractor allocation for seed cane treatment.jpg"/></br></a></p>
	            <p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/contractor allocation for seed cane treatment2.jpg"/></br></a></p>
	            <p><b>Pests/disease assessment:</b></p>
				<p>This interface is for entering the results of the pest and disease assessment. Double clicking on a row in the grid, pulls up the request date, field number , plot number , cane area, variety, crop cycle and age.</p>
				<p>The user is required to enter the following information</p>
				<p>1.Date of Sampling : Date on which sample was taken.</p>
				<p>2.Date of Testing : Date on which testing of the sample was done.</p>
				<p>3.Disease : Select the disease afflicting the sample, from the drop down menu.</p>
				<p>4.Crop Affected % : Enter the % of crop affected.</p>
				<p>5.Remarks : Enter remarks if any.</p>
				<p><b>Pest & Diseases assessment :</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/Pests and diseases assessment.jpg"/></br></a></p>
	            <p><b>Pest & Diseases Recommendation:</b></p>
				<p>This window is used to make recommendation for the pest and diseases assessment done earlier. The user need to either approve or reject the assessment.</p>
				<p><b>Pest & Diseases Recommendation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/Pests and diseases recommendation.jpg"/></br></a></p>
				<p><b>Enter Seedcane treatment status</b></p>
				<p>This window is used to enter seedcane treatment status and various details related to it. The user selects the record from the data grid to update it.</p>
				<p><b>Enter Seedcane treatment status</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/enter  seedcane treatment status.jpg"/></br></a></p>
				<p><b>Damage Assessment</b></p>
				<p>This window is used to enter the details regarding cane damage. The user selects the record from the grid to enter its details.</p>
				<p><b>Damage Assessment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/cane damage assistant.jpg"/></br></a></p>
				<p><b>Cane growth measurement tests:</b></p>
				<p>This interface is for entering the observation from the measurement of cane growth. On entering the field number and plot number , if any previous measurement for the cane has been done, the last reading as well as the date shows up.</p>
				<p>The user is required to enter the following information.</p>
				<p>1. Field number : Enter the field number for which cane is being measured.</p>
				<p>2. Plot number : Enter the plot number for which cane is being measured.</p>
				<p>3. Plant number : Enter the number of the plant.</p>
				<p>4. Date : Enter the date on which the plant is being measured.</p>
				<p>5. Current Reading : Enter the current height of the cane in cms.</p>
				<p><b>Cane growth measurement tests:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/cane growth measurement.jpg"/></br></a></p>
				<p><b>Test Request:</b></p>
				<p>See illustration below.</p>
				<p><b>Test Request</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/test request.jpg"/></br></a></p>
				<p><b>Test Result</b></p>
				<p>See illustration below.</p>
				<p><b>Test Result</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/test result entry.jpg"/></br></a></p>
				<p><b>Test Approval</b></p>
				<p>See illustration below.</p>
				<p><b>Test Approval</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/MISCELLANEOUS/test approval.jpg"/></br></a></p>
				<p><b>Agronomy Reports</b></p>
				<p><b>Meteorological Data Summary</b></p>
				<p>This report window is used to view the meteorological summary for the required month and from the required station. The user needs to make following inputs</p>
				<p>1. Month.</p>
				<p>2. Station.</p>
				<p><b>Meteorological Data Summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/meterological data summary.jpg"/></br></a></p>
				<p><b>Soil Analysis Report</b></p>
				<p>This report window is used to view the soil analysis details like Field number , chemical compositions ,etc.The user needs to make following inputs.</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location</p>
				<p><b>Soil Analysis Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/soil analysis report.jpg"/></br></a></p>
				<p><b>Foliar Analysis Report:</b></p>
				<p>This report window is used to view the foliar analysis details like Field number , chemical compositions ,cycle , age etc .The user needs to make following inputs</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location</p>
				<p><b>Foliar Analysis Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/foliar analysis report.jpg"/></br></a></p>
				<p><b>Juice Analysis Report:</b></p>
				<p>This report window is used to view the juice analysis details like Field number , purity , cycles ,etc . The user needs to make following inputs:</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location</p>
				<p><b>Juice Analysis Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/juice analysis report.jpg"/></br></a></p>
				<p><b>Seedcane Inspection Report</b></p>
				<p>This report window is used to view the seedcane inspection details like Field number , variety , cycles ,etc . The user needs to make following inputs</p>
				<p>1. Date From , To</p>
				<p>2. Zone.</p>
				<p>3. Sub-Location.</p>
				<p>4. Field number.</p>
				<p><b>Seedcane Inspection Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/seedcane inspection report.jpg"/></br></a></p>
				<p><b>Seedcane Treatment Report</b></p>
				<p>This report window is used to view the seedcane treatmentdetails like Field number , Contractor , Qty In , Qty out etc .The user needs to make following inputs:</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location.</p>
				<p><b>Seedcane Treatment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/seedcane treatment report.jpg"/></br></a></p>
				<p><b>Cane growth Report:</b></p>
				<p>This report window is used to view the cane growthdetails like Fobservation date , zone , age , field no etc . The user needs to make following inputs</p>
				<p>1. Date From , To</p>
				<p>2. Zone</p>
				<p>3. Sub-Location.</p>
				<p><b>Cane growth Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/cane growth report.jpg"/></br></a></p>
				<p><b>Germination Assessment Report</b></p>
				<p>This report window is used to view the germination assessment details like date , lab No , Field number, Plot number etc .The user needs to make following inputs</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location.</p>
				<p><b>Germination Assessment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/germ assessment report.jpg"/></br></a></p>
				<p><b>Soil Analysis Remarks Report</b></p>
				<p>This report window is used to view the soil analysis remark details like Field number , status , remarks ,etc .The user needs to make following inputs</p>
				<p>1. Date From , To</p>
				<p>2. Sub-Location.</p>
				<p><b>Soil Analysis Remarks Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Agronomy reports/soil analysis remarks report.jpg"/></br></a></p>
				<p><b>MASTERS</b></p>
				<p><b>Fertilizer Master</b></p>
				<p>This is a master window which is used to insert/delete/update Fertilizer Information</p>
				<p><b>Fertilizer Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/fert master.jpg"/></br></a></p>
				<p><b>Chemical/Herbicide Master</b></p>
				<p>See illustration below.</p>
				<p><b>Chemical/Herbicide Master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/chem master.jpg"/></br></a></p>
				<p><b>Disease Master</b></p>
				<p>This is a master window which is used to insert/delete/update Disease Information</p>
				<p><b>Disease Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/disease master.jpg"/></br></a></p>
				<p><b>Station Master</b></p>
				<p>This is a master window which is used to insert/delete/update Station Information.</p>
				<p><b>Station Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/station master.jpg"/></br></a></p>
				<p><b>Pest Master</b></p>
				<p>This is a master window which is used to insert/delete/update Pest Information.</p>
				<p><b>Pest Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/pest master.jpg"/></br></a></p>
				<p><b>Variety Master</b></p>
				<p>This is a master window which is used to insert/delete/update variety Information.</p>
				<p><b>Variety Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/variety master.jpg"/></br></a></p>
				<p><b>Relative Humidity Master :</b></p>
				<p>This is a master window which is used to insert/delete/update Relative humidity Information.</p>
				<p><b>Relative Humidity Master :</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/relative humidity master.jpg"/></br></a></p>
				<p><b>Vehicle Master :</b></p>
				<p>This is a master window which is used to insert/delete/update Vehicle Information.</p>
				<p><b>Vehicle Master :</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/vehicle master.jpg"/></br></a></p>
				<p><b>Crop Activity Master</b></p>
				<p>This is a master window which is used to insert/delete/update Crop Activity Information.</p>
				<p><b>Crop Activity Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/vehicle master.jpg"/></br></a></p>
				<p><b>Crop Activity Master</b></p>
				<p>This is a master window which is used to insert/delete/update Crop Activity Information.</p>
				<p><b>Crop Activity Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/crop event activity master.jpg"/></br></a></p>
				<p><b>Contractor Master</b></p>
				<p>This is a master window which is used to insert/delete/update Contractor Information.</p>
				<p><b>Contractor Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/contractor master.jpg"/></br></a></p>
				<p><b>Contractor Master</b></p>
				<p>This is a master window which is used to insert/delete/update Contractor Information.</p>
				<p><b>Contractor Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/contractor master.jpg"/></br></a></p>
				<p><b>Control Parameter</b></p>
				<p>See illustration below.</p>
				<p><b>Control Parameter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/parameter.jpg"/></br></a></p>
				<p><b>Test master</b></p>
				<p>See illustration below.</p>
				<p><b>Test master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/R&D(Agronomy)/Master Database/test master.jpg"/></br></a></p>
	
	<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('wb_operation')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
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
						
					
				
		
                