<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>AMS_Issuelog</title>
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
      		<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('hardware_requirement')?>"><span class="doc">AMS Hardware Requirement</span></a></li>	
      		<li class="toctree-11"><a class="current reference internal" href="<?php echo site_url('installation_instruction')?>">AMS Installation Instruction</a></li>
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
					<a href="#">AMS</a>
			</nav>
			<div class="wy-nav-content">
				<div class="rst-content"><!-- Aligns the entire content of the header and body at the same margin --></div>
					<div role="navigation" aria-label="breadcrumbs navigation" style="color:green";>
								<ul class="wy-breadcrumbs">
									<li><a href="#">Docs</a><li>&raquo;</li>
									<li>AMS Issue Log</li>
									<li class="wy-breadcrumbs-aside"></li>
								</ul>
						<hr/>
					</div>
			<div role="main" class="document">
				<div class="section" id="Welcome To AMS">
					<h1>AMS  issue log<a class="headerlink" href="#Welcocme To AMS" title="Permalink to this headline"></a></h1>				
					<p>AMS issue log is a documentation that aids in managing projects within AMS as pertains timelines of starting and completing the project and financial implications tied to the projects.</p>
					<p>Since AMS issue log contains list of open and closed projects, the areas to which a project belongs, date logged and date completed, it becomes easier for SonySugar to keep track of its  status. Such information is vital since it enables SonySugar understand its positive findings and opportunities for improvement.</p>
					<p>Finally, with AMS issue log in place, the SonySugar can tell where its service provider has made timely deliveries, where there are delays from the service provider or where the service provider has failed as well as also know where service has been delivered in good time but the company has delayed or failed to pay its service provider in good time.</p>
				</div>
			<div class="container">
				<div class="row">
    				<div class="col-md-8">
        				<table id="issuelog-table" class="table table-bordered table-striped table hover">
        				<thead>
        				<tr><td><b>S/No</b></td><td><b>Description</b></td><td><b>View</b></td></tr>
        				<tr><td>001</td><td>AMS issue log July 2017 to June 2018<td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vS0pYnM4fP2vMfXvLI4P_lPTQEWMm1-pCaD3V_OeR399CKw40Q96KyR4Jz1DUi9PZs3vhZSpwfxpSUp/pubhtml?widget=true&amp;headers=false">view</a></td></tr>
        				<tr><td>002</td><td>AMS issue log July 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTjKn75sqey-XjS_aO3dioE9BVoGs_A-QtO1xJmtEdVibMvhWYwRyEEaW7nGtUDA6MfrHb8tSYW1i5d/pubhtml?widget=true&amp;headers=false">view</a></td></tr>
        				<tr><td>003</td><td>AMS issue log June 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUGIJkmeAyS4Lc_nYSd96sRuc9pVaSiZw5D-dKfC8wfY9fxdvZbsQDdyep_L3BWHj3vz6mHS3QtwBf/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>004</td><td>AMS issue log May 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRZrAyHGuzKQFdEckOMbKS_MZBFn374JYmyDwjyOu5B8l36HDlwDDaarXGecm2PfyiDDeYqadz3DUDZ/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>005</td><td>AMS issue log April 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTo2DBuq3ESOe1oAFIUY87V_DJCiQ8e5_wr5PdtrqD90lHeWcXcQsFdph7DXQsxvKR4-RVMjU8CPpo3/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>006</td><td>AMS issue log Mar 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQytF_hWABwXdfZDbT5NIVhXwicirMj0SwWabG3M15-_ZMTfAGtQW3rGY1oC7HG09edlfzzjqCU845p/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>007</td><td>AMS issue log Feb 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSr_NO4EDF6Kdh4ozQZkOfY-VIEvSDGADdoRhpEyorPalQKoPpGxYRj0ndzZe-wNZIPV46dJPN_gAp1/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>008</td><td>AMS issue log Jan 2016</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSkfaFtgMjHAEHzzy4O0CLgW_dqw-533F6Kh2oHDV1gsr3iNtWaed_PM0oiFYlhP-xM9XsLfQpdTtOA/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>009</td><td>AMS issue log Dec 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vS_MjoAhq5WTIhgBDfwI-JzaO5fxQOlFhZROW3HItA5VJpOWOCF16vXQODvuKbTKyEU-j7DQ1y3fzkA/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>010</td><td>AMS issue log Nov(Outstanding issues)2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRyeRDdDnE49RQMa39sYQUhQS8w4uJ1RkZ_OxlZKE5HqPuI34GZ-yddlPzAilknFAZb6_gY26VmsSUX/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>011</td><td>AMS issue log Nov 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTTgha5OanNOjL-x4ks6LTi6enAleaDW2OT-XgBr6mpv-3U19acZ7Mp7r7MlJsadBBiKhKXNtqNDZFb/pubhtml?widget=true&amp;headers=false">View</a></td></tr>
        				<tr><td>012</td><td>AMS issue log Oct 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTteI-OBWIXDh3-Nwef3qXtXn9INnZLZvqeX92ut0swmkgP0QfM71gEsgjxL9GloRCDFxtR91yE0Grw/pubhtml">View</a></td></tr>
        				<tr><td>013</td><td>AMS issue log Sep 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSOJMPAy3rHMtHiMg5kMNCaEvbYL23V2xZX8F8eE2oDRkvXeyuMfM2_LIVw9qTqwj3QwD6bHBCZPkpP/pubhtml">View</a></td></tr>
        				<tr><td>014</td><td>AMS issue log Aug 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ8cZPVU26EDeh6pKdDcnXXVMmy3fNETXtixikIrIgUBdibQKFZ7ee8EVRzHFH143SBnb7x6GSSww22/pubhtml">View</a></td></tr>
        				<tr><td>015</td><td>AMS issue log July 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTOVOH3gd0dsTlx7Cj1Pcet31Tpk19fi_yznEhfCnytx4xzbQiOMe9tczGqCjYgbEPPytZSeHGu8m1f/pubhtml">View</a></td></tr>
        				<tr><td>016</td><td>AMS issue log June 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vR3HLvGIwx2izNPtAcmssWLebFxnaVuqq6dBcv8lofMOfc7aJZZUOJejINYelM4sESepB1Ya-Z_0i9X/pubhtml">View</a></td></tr>
        				<tr><td>017</td><td>AMS issue log May 2015</td><td><a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQqp-6wyddGnxGRk3_YdT4bKWz1el8z3QA6qjAP-MjWrykqFfyRHxyhkV90UIW2VZn1F6No7y9zOkSZ/pubhtml">View</a></td></tr>
           				</thead>
        				<tbody>
        				</tbody>
        				</table>
					</div>
				</div>
			</div>	
			</div><!-- closes the div role="main" -->
<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="/ams_user_guide/welcome_to_ams" class="btn btn-neutral float-right" title="">Next<span class="">
		 <a href="/ams_user_guide/sla" class="btn btn-neutral" title=""><span class=""></span> Previous</a>
	</div>
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
			</div>
		</section>
				
	</body>
</html>