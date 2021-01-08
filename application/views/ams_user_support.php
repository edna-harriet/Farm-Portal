<?php defined('BASEPATH') OR exit('No direct script access is allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AMS User Support</title>
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
									<li>AMS User Support</li>
								</ul>
						<hr/>
							</div>
					<div role="main" class="document">
						<div class="section" id="The Service Level Agreement">
							<h3>AMS User Support<a class="headerlink" href="#the service level agreement" title="Permalink to this headline"></a></h3>
							<p>AMS is a system that has introduced revolutionary effect to the Agriculture sector. It takes different lengths of time for users to adopt and understand the system.</p>
							<p>This means that majority of AMS users are still experiencing challenges with the system.</p>
							<p>Solutions to the most common problems logged on ICT helpdesk by AMS users are:</p>
							<p><b>1.AMS expired account</b></p>
							<p>Before AMS user's account expires, they will usually receive a notification while logging in to the system. This notification requests the to change their password before their account expires.</p>
							<p>It is important that users respond to such notification for it saves alot of time compared to following up with administrators for activation of the account after it has expired.</p>
							<p>However, if the user forgets to respond to the notification immediately, and remembers to do so before the expiry date, s/he may follow the procedure below:
							<p>(i)<b>Log in</b> to AMS.</p>
							<p>(ii)Go to menubar and click on<b> User maintenance.</b></p>
							<p>(iii)On the dropdown menu, select <b>change password.</b> and click.</p>
							<p>(iv)A window pops up. Fill it appropriately and click<b> update.</b>
							<p>(v) User password has been changed and that means the expiry date has been extended.</p>
							<p><b>See table below on how to change password</b></p>
							<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/ams user support/change_password.jpg"/></a></p>
							<p><b>2. AMS locked account</b></p>
							<p>AMS users should be aware that whenever they enter a wrong password three times, the account gets locked.S/he has to contact administrator through helpdesk,commonly known as lansupport to unlock their account.</p>
							<p>Open <b>Internet Explorer browser</b> on the bottom menubar of computer screen and that directs you to the page where issues are logged on helpdesk.</p>
							<p>Alternatively, use any browser e.g <b>mozilla firefox or chrome browsers</b>. Go to URL link, and type this link:<b>http://sony-ta-wb-sch/lansupport/LSclient.asp</b>.This link will also direct to the helpdesk page.</p>
							<p><b>3.AMS session management</b></p>   	
							<p><b>(A)Causes of the error below are:</b></p>
							<p>(i)A single AMS account is trying to log in to more than one computer.
							<p>(ii)There may have been power outage when user was lastly logged in and therefore their computer shut down unprocedurally.</p>
							<p>(iii)A user shuts down his/her computer without closing the running applications.</p>
							<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/image/ams_sessionmanagement.jpg"/></a></p> 
							<p><b>(B)Solutions to this problem</b>
							<p>(i)Exit AMS application by clicking close icon on the far top right corner.A window will pop requesting you to either exit or continue.
							<p>(ii)Another way of exiting is by going to the top left corner ->select&click <b>databank</b> ->click <b>exit</b> AMS. A window then pops as asking one to confirm that they really want to exit AMS.</p>
							<p>(iii)Finally, contact administrator for help by logging problem on helpdesk accessed by opening <b>Internet Explorer browser</b>or through the link:<b>http://sony-ta-wb-sch/lansupport/LSClient.asp</b> using any other browser e.g Mozilla firefox and chrome.</p>
							<p><b>See image below on how to exit AMS</b></p>
							<img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/ams user support/ams_exit.jpg"/></a></p>    	
						</div><!-- Closes the div class = section -->
	                	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
                    		 <a href="" class="btn btn-neutral float-right" title="AMS Issue Log">Next <span class="">
                    		 <a href="/ams_user_guide/ams_upgrade" class="btn btn-neutral" title="AMS User Guide"><span class=""></span> Previous</a>
						</div>
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