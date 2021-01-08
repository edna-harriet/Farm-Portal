<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1.0"/>
		<title>OUTGROWERS ACCOUNTS</title>
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
							<li><b>OUTGROWERS ACCOUNTS.</b></li>
							<li class="wy-breadcrumbs-aside"></li>				
						</ul>
					<hr/>
				</div>
			<div role ="main" class="document">
		<div class="section" id="">
				<P><b>Farmer Payment Preparation</b></p>
				<p><b>Clear Fields For payment</b></p>
				<p>This window is used to view all the fields which are cleared by HT / or which are cleared for Final payment. The user can filter the result on the basis of various filter conditions like Zone , Sub-Location , Field number.</p>
				<p><b>Clear Fields For payment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Plot Clearance for Payment.jpg"/></br></a></p>
				<p><b>PAYMENT EXCEPTIONS</b></p>
				<p>This interface is for showing the list of farmers for whom payment exceptions have been made. After the plot status has been verified, fields/plots for payment can be cleared by clicking Clear Exception.</p>
				<p><b>Payment exceptions</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/List of Payment Exceptions.jpg"/></br></a></p>
				<p><b>Manual Transaction Entry.</b></p>
				<p>This window is used to manually enter the transaction details. The user is required to enter:</p>
				<p>1. Transaction Date , Entry Date.</p>
				<p>2. Old Acc , Field number , Plot number.</p>
				<p>3.Transaction Code.</p>
				<p>4.Activity , Ref number Rate</p>
				<p><b>Manual Transaction Entry</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Transaction Entry.jpg"/></br></a></p>
				<p><b>Checklist</b></p>
				<p>This window is used as a checklist for the manual entries. The User is allowed to select the Transaction Date to view all the checklist data in the data grid.</p>
				<p><b>Checklist</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Manual transaction check.jpg"/></br></a></p>
				<p><b>Manual transaction Approval:</b></p>
				<p>This window is used to approve or reject the Manual Transaction Entry . The user selects the transaction type and Date to View the data and approve/reject accordingly.</p>
				<p><b>Manual transaction Approval:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Manual transaction approval.jpg"/></br></a></p>
				<p><b>Cane Price Master</b></p>
				<p>See illustration below.</p>
				<p><b>Cane Price Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Cane Rate.jpg"/></br></a></p>
				<p><b>Cane Price initial approval</b></p>
				<p>See illustration below.</p>
				<p><b>Cane Price initial approval</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Initial Approval.jpg"/></br></a></p>
				<p><b>Cane Price Final approval</b></p>
				<p>See illustration below.</p>
				<p><b>Cane Price Final approval</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment Preparation/Final Approval.jpg"/></br></a></p>
				<p><b>Farmer Payment Processing</b></p>
				<p><b>Interim Farmer Statement</b></p>
				<p>This window is used to view the interim statement for farmer. The user enters the following details:</p>
				<p>1. Field number , Plot number</p>
				<p><b>Interim Farmer Statement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer Inquiry.jpg"/></br></a></p>
				<p><b>FARMER STATEMENT:</b></p>
				<p>This interface is for processing the farmers statement. Clicking Process will show the farmer’s information in the grid.The user is required to enter the following information</p>
				<p>1. Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key.</p>
				<p>2. Plot number : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field.</p>
				<p><b>Farmer statement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer Statement.jpg"/></br></a></p>
				<p><b>Update Farmer Information:</b></p>
				<p>This window is used to enter necessary information like ID , Bank Name , Branch , Account number These details will be stored into the database after clicking save button</p>
				<p><b>Update Farmer Information</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Enter bank account numbers.jpg"/></br></a></p>
				<p><b>Schedule Farmer Payment</b></p>
				<p>This window is used to view plots for scheduling. The user selects the Payment Date and Sub-Location to view the scheduling Plan.</p>
				<p><b>Schedule Farmer Payment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Schedule Fields for payment.jpg"/></br></a></p>
				<p><b>Enter mandate</b></p>
				<p>See illustration below.</p>
				<p><b>Enter mandate</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Nominees and Mandate.jpg"/></br></a></p>
				<p><b>BANK ADVICE/CHEQUE (1ST PAYMENT)</b></p>
				<p>This interface is for printing the bank advice or for printing Cheques for farmers. This interface is for making the first payment. Clicking on Process after entering the society will pull up the grid showing bank code and name bank a/c number , field number , plot number , farmer’s name, supplied quantity, amount due to the farmer and amount payable.</p>
				<p>The user is required to enter the following information.</p>
				<p>Society : Enter the name of the society processing the Cheque or for whom the bank advice is. User can select it from the drop down menu</p>
				<p><b>Bank Advice/Cheque(1st Payment)</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer payment bank advice.jpg"/></br></a></p>
				<p><b>Confirm Farmer Paysheet</b></p>
				<p>See illustration below.</p>
				<p><b>Confirm Farmer Paysheet</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Confirm bank advice.jpg"/></br></a></p>
				<p><b>Clear Retention</b></p>
				<p>This window is used to clear or remove the retention transactions from the system. The user enters the account number , Field , Plot number and Amount to perform the operation</p>
				<p><b>Clear Retention</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Remove retension transaction.jpg"/></br></a></p>
				<p><b>BANK ADVICE/CHEQUE FOR RETENTION PAYMENT</b></p>
				<p>This interface is for printing the bank advice or for printing Cheques for retention payments. Retention payments are the payments made to the farmer, after retention of an amount by the parent company. Clicking on Process after entering the society will pull up bank code and name, bank a/c number , field number , plot number , farmers name, supplied quantity, amount due and amount payable</p>
				<p>The user is required to enter the following information.</p>
				<p>Society : Enter the name of the society processing the Cheque or for whom the bank advice is. User can select it from the drop down menu.</p>
				<p><b>Bank advice/cheque for retention payment.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer payment bank cheque.jpg"/></br></a></p>
				<p><b>LIST OF MISSING BANK A/C NUMBERS</b></p>
				<p>This interface shows the list of missing bank account numbers of farmers. Clicking Process will show the farmer’s information in the grid</p>
				<p>The user is required to enter the following information.</p>
				<p>Field number : Field number can be filled directly or can be selected from the list by double clicking on the text box or pressing F1 key</p>
				<p>Plot number* : Like the Field number, Plot number can also be selected from the list that will show the list of the plots in the selected field.</p>
				<p><b>Missing bank accounts.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/List of missing bank account number.jpg"/></br></a></p>
				<p><b>Farmer Statement Register</b></p>
				<p>This window is used to get the details of all the fields depending upon its A/c Type , Date and Statement Status.</p>
				<p><b>Farmer Statement Register</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer statement register.jpg"/></br></a></p>
				<p><b>View Previous Statement.</b></p>
				<p>This window is used to view the previous statement related to a particular Land. The user can therefore enter the details like Field , Plot number and Harvesting Cycle to get the previous statement.</p>
				<p><b>View Previous Statement.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Previous farmer statement.jpg"/></br></a></p>
				<p><b>Nominee and Mandates.</b></p>
				<p>This window is used to get the details regarding Nominees and mandate . The user enters the date range to get the report.</p>
				<p><b>Nominee and Mandates</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/ODS mandate report.jpg"/></br></a></p>
				<p><b>Farmer account summary</b></p>
				<p>See illustration below.</p>
				<p><b>Farmer account summary</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer's Account summary.jpg"/></br></a></p>
				<p><b>Farmer account statement</b></p>
				<p>See illustration below.</p>
				<p><b>Farmer account statement</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer Payment processing/Farmer's Account report.jpg"/></br></a></p>
				<p><b>Contractor Payment</b></p>
				<p><b>Cane Transporter Payment</b></p>
				<p>This window is used to get the statement of Cane Transporter. The user can filter the data on the basis of Filter Conditions like Date , Contractor Name . The user can thus Nullify , Confirm Payment and Process Statement accordingly.</p>
				<p><b>Cane Transporter Payment.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Millcane Transporter Statement.jpg"/></br></a></p>
				<p><b>HPU Transporter Statement</b></p>
				<p>This window is used to get the statement of High Payload Cane Transporter. The user can filter the data on the basis of Filter Conditions like Date , Contractor Name . The user can thus Nullify , Confirm Payment and Process Statement accordingly</p>
				<p><b>HPU Transporter Statement.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Transporter statement.jpg"/></br></a></p>
				<p><b>Contractor Statement</b></p>
				<p>This window is used to get the statement of Contractors. The user can filter the data on the basis of Filter Conditions like Date , Contractor Name,type , Society . The user can thus Nullify , Confirm Payment and Process Statement accordingly.</p>
				<p><b>Contractor Statement.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Contractor statement.jpg"/></br></a></p>
				<p><b>Cane Transport Arrears</b></p>
				<p>This window is used to list of all the cane transport arrears. The user selects the contractor to get its arrears transaction details</p>
				<p><b>Cane Transport Arrears</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Transport arrear statement.jpg"/></br></a></p>
				<p><b>Contractor EFT File Generation</b></p>
				<p>This window is used to generate the EFT File For Contractor for Bulk payment using Mobile. The user enters the date and selects the Payroll to generate the EFT File</p>
				<p><b>Contractor EFT File Generation</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Generate EFT File for contractor bulk payment using mobile.jpg"/></br></a></p>
				<p><b>Contractor Work Payment Report</b></p>
				<p>This window is used to get the report of contractors work. The user enters the date, Selects the contractor and society to get the details</p>
				<p><b>Contractor Work Payment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Contractor work statement.jpg"/></br></a></p>
				<p><b>Harvesting contractor payment Report</b></p>
				<p>See illustration below.</p>
				<p><b>Harvesting contractor payment Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Contractor payment/Harvesting contractor statement.jpg"/></br></a></p>
				<p><b>Cutter Payroll Processing.</b></p>
				<p><b>Stack Cutter Payroll</b></p>
				<p>This window is used to view the cutters for payment processing . The user filters the data on the basis of Gang number Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc</p>
				<p><b>Stack Cutter Payroll.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll 2.jpg"/></br></a></p>
				
				<p><b>Windrow Cutter Payroll</b></p>
				<p>This window is used to view the windrow cutters for payment processing . The user filters the data on the basis of Gang number Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc.</p>
				<p><b>Windrow Cutter Payroll</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll for window cutters.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll for window cutters2.jpg"/></br></a></p>
				
				<p><b>Cane Carrying/Slashing Payroll</b></p>
				<p>This window is used to view the cane carrying/slashing harvesters payment processing . The user filters the data on the basis of harvesters. Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc.</p>
				<p><b>Cane Carrying/Slashing Payroll</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cane carrying payroll.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cane carrying payroll 2.jpg"/></br></a></p>
	
				<p><b>Non Harvester Payroll</b></p>
				<p>This window is used to view the non harvesters for payment processing . The user filters the data on the basis of harvesters. Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc</p>
				<p><b>Non Harvester Payroll</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/non harvestor payroll.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/non harvestor payroll 2.jpg"/></br></a></p>
	
				<p><b>Cutter Payroll Arrears</b></p>
				<p>This window is used to view the cutter for arrear payment processing . The user filters the data on the basis of harvesters. Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc</p>
				<p><b>Cutter Payroll Arrears</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll arrear.jpg"/></br></a></p>
				<p><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll arrear 2.jpg"/>
	
				<p><b>Cane Carrying/Slashing Arrears</b></p>
				<p>This window is used to view the harvesters(cane carrying/slashing) for arrear payment processing . The user filters the data on the basis of harvesters. Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc</p>
				<p><b>Cane Carrying/Slashing Arrears</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cane carrying slashing payroll(arrears).jpg"/></br></a></p>
				
				<p><b>Non Harvesters(Arrear):</b></p>
				<p>This window is used to view the Non harvesters for arrear payment processing . The user filters the data on the basis of harvesters. Date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc</p>
				<p><b>Non Harvesters(Arrear):</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/non harvestor payroll(arrear payment).jpg"/></br></a></p>
				
				<p><b>Enter Holidays</b></p>
				<p>This master window is used to insert/delete or update the Holiday details like date , description.</p>
				<p><b>Enter Holidays</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/holidays.jpg"/></br></a></p>
	
				<p><b>Enter Cutter Rates</b></p>
				<p>This window is used to enter the cutter rate.</p>
				<p><b>Enter Cutter Rates</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter rates.jpg"/></br></a></p>
	
				<p><b>Generate Cutter EFT File:</b></p>
				<p>This window is used to generate the EFT File for Cutters .The user is required to enter the date , Payroll and Phase to generate the EFT File.</p>
				<p><b>Generate Cutter EFT File:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/generate EFT file for cutter bulk payment using mobile.jpg"/></br></a></p>
	
				<p><b>Generate NHIF EFT File.</b></p>
				<p>This window is used to generate the EFT File for NHIF .The user is required to enter the date , Payroll and Phase to generate the EFT File.</p>
				<p><b>Generate NHIF EFT File</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/generate EFT file for NHIF.jpg"/></br></a></p>
	
				<p><b>Cutter Recoveries Maintenance</b></p>
				<p>This window is used to view the details of selected cutter.</p>
				<p><b>Cutter Recoveries Maintenance.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/select contractor.jpg"/></br></a></p>
	
				<p><b>Cutter Bonus</b></p>
				<p>This window is used to view the cutter for bonus payment processing . The user filters the data on the basis of harvesters, payment date to view the cutters data and then perform necessary actions like Confirm Payment , Print Total Summary , Process Payroll etc.</p>
				<p><b>Cutter Bonus</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/cutter payroll/cutter payroll(bonus).jpg"/></br></a></p>
	
				<p><b>Recoveries</b></p>
				<p><b>Interest</b></p>
				<p>This window is used to view the interest recovered from various sources. The user can filter the result on the basis of date , Outgrower and Sub-Location.</p>
				<p><b>Interest</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/interest recovered.jpg"/></br></a></p>
	
				<p><b>CESS</b></p>
				<p>This window is used to view the recovery of CESS from various sources. The user can filter the result on the basis of date , District and Sub-Location.</p>
				<p><b>CESS</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/Recovery of CESS.jpg"/></br></a></p>
				<p><b>LEVY:</b></p>
				<p>This window is used to view the recovery of LEVY from various sources. The user can filter the result on the basis of date , District and Sub-location</p>
				<p><b>LEVY:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/recovery of levy.jpg"/></br></a></p>
				<p><b>Recoveries</b></p>
				<p>This window is used to view all the recoveries from all the sources. The user filters the result on the basis of date , society .This report allows the user to see the Debit , Credit and nets</p>
				<p><b>Recoveries</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/recoveries.jpg"/></br></a></p>
				<p><b>Food Project transactions</b></p>
				<p>This window is used to see the food project transaction details on the basis of date and sub-location.</p>
				<p><b>Food Project transactions</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/food project transaction.jpg"/></br></a></p>
				<p><b>Unrecovered Services</b></p>
				<p>This window is used to get the list of unrecovered services. The user filters the data on the basis of Sub-Location , Society , Date and Service</p>
				<p><b>Unrecovered Services</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/list of unpaid serv rendered accounts.jpg"/></br></a></p>
				<p><b>Farmer Recoverable transactions</b></p>
				<p>This window is used to view the transactions which can be recovered by the farmer. The user filters the data on the basis of Zone , Sub-Location , Activity , Status , Field number Etc.</p>
				<p><b>Farmer Recoverable transactions</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/farmer recoverable transaction.jpg"/></br></a></p>
				<p><b>UnPaid Cane Purchase Report:</b></p>
				<p>This window is used to view the Report showing the unpaid cane purchase. The user filters the data on the basis of Zone , Sub-Location , Society , Field number , Date , Cane type.</p>
				<p><b>UnPaid Cane Purchase Report:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/unpaid cane purchase report.jpg"/></br></a></p>
				<p><b>View County Cess</b></p>
				<p>See illustration below.</p>
				<p><b>View County Cess</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/county CESS payment(frmCESS payment).jpg"/></br></a></p>
				<p><b>County Cess Payment process</b></p>
				<p>See illustration below.</p>
				<p><b>County Cess Payment process</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/county CESS payment(frmCESS payment).jpg"/></br></a></p>
				<p><b>Cess Payment NE</b></p>
				<p>See illustration below.</p>
				<p><b>Cess Payment NE</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Recoveries/county CESS payment(NE).jpg"/></br></a></p>
				<p><b>POST TRANSACTIONS</b></p>
				<p><b>POST DAILY FARMER TRANSACTIONS:</b></p>
				<p>This interface is for showing the daily transactions of farmers. There are two tabs- Un Passed Transactions and Withheld Transactions. The first tabs lists all the un passed transactions of farmers, and the second tab shows all the withheld transactions</p>
				<p><b>Post daily farmer transactions</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Post transactions/post farmer transaction.jpg"/></br></a></p>
				<p><b>POST daily contractor transaction</b></p>
				<p>This interface is for showing the daily transactions of contractors. There are two tabs- Un Passed Transactions and Withheld Transactions. The first tab lists all the un passed transactions of contractors, and the second tab shows all the withheld transactions of contractors</p>
				<p><b>POST daily contractor transaction</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Post transactions/post contractor transaction.jpg"/></br></a></p>
				<p><b>Posted Farmer Transactions</b></p>
				<p>This window is used to view the all the posted transactions. The user filters the data on the basis of Date , Activity and Outgrower.</p>
				<p><b>Posted Farmer Transactions</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Post transactions/posted farmer transaction.jpg"/></br></a></p>
				<p><b>FARMER PAYMENT STATUS</b></p>
				<p><b>Cleared by ASA , unpaid Farmer.</b></p>
				<p>This window generates a report which shows all the farmers details who are cleared by ASA but they are unpaid.</p>
				<p><b>Cleared by ASA , unpaid Farmer</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer payment status/accounts awaiting payments.jpg"/></br></a></p>
				<p><b>Cleared by HT , Uncleared by ASA</b></p>
				<p>This window generates a report which shows all the farmers details who are cleared by HT but they are not cleared by ASA.</p>
				<p><b>Cleared by HT , Uncleared by ASA</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer payment status/accounts awaiting payments.jpg"/></br></a></p>
				<p><b>List of Paid/UnPaid Farmers:</b></p>
				<p>This window is used to view the list of farmers which are paid or unpaid. The user filters the result on the basis of date , Sub-Location.</p>
				<p><b>List of Paid/UnPaid Farmers:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer payment status/payment status report.jpg"/></br></a></p>
				<p><b>Farmer Payable report</b></p>
				<p>This window is used to view the list of farmer which are payable till particular date. The user can filter the data on the basis of various conditions like Zone , Sub-Location , Field number , Date.</p>
				<p><b>Farmer Payable report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Farmer payment status/farmer payable report.jpg"/></br></a></p>
				<p><b>ASA Reports</b></p>
				<p><b>List of Disputed Plots.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Disputed Plots. The user is required to make following inputs:</p>
				<p>1. Payment Period(Days).</p>
				<p><b>List of Disputed Plots.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/list of disputed plots.jpg"/></br></a></p>
				<p><b>Monthly Summary Of Cane Purchased:</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Purchased Cane. The user is required to make following inputs.</p>
				<p>1. Payment Period(Days).</p>
				<p>2.Date.</p>
				<p><b>Monthly Summary Of Cane Purchased:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/monthly summary of mill cane purchased.jpg"/></br></a></p>
				<p><b>Monthly Summary Of Seedcane Purchased</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Purchased Seed Cane. The user is required to make following inputs.</p>
				<p>1. Payment Period(Days).</p>
				<p>2.Date.</p>
				<p><b>Monthly Summary Of Seedcane Purchased</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/monthly summary of seedcane purchased.jpg"/></br></a></p>
				<p><b>Farmers with Additional Fertilizer Applications.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Fields with more than 2 fertilizer Applications. The user is required to make following inputs.</p>
				<p>1. Payment Period(Days).</p>
				<p><b>Farmers with Additional Fertilizer Applications.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/farmers with additional fertilizer application.jpg"/></br></a></p>
				<p><b>Raton Plot with Land Prep/SeedcaneCharges.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Ratoon Fields with some land preparation or Seedcane activities. The user is required to make following inputs.</p>
				<p>1. Payment Period(Days).</p>
				<p>2. Date.</p>
				<p><b>Raton Plot with Land Prep/SeedcaneCharges</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/ratoon plot with land prep..jpg"/></br></a></p>
				<p><b>Plant Plots with No Land Prep/Seed cane Charges.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of Fields with no land preparation or seed cane activity. The user is required to make following inputs.</p>
				<p>1. Payment Period(Days).</p>
				<p>2. Date.</p>
				<p><b>Plant Plots with No Land Prep/Seed cane Charges.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/plant plots with no lands.jpg"/></br></a></p>
				<p><b>EXCEPTIONS</b></p>
				<p>This interface is for showing the list of farmers for whom payment exceptions have been made. After the plot status has been verified, fields/plots for payment can be cleared by clicking Clear Exception</p>
				<p><b>EXCEPTIONS</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/exception.jpg"/></br></a></p>
				<p><b>Farmer Recoveries Details</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of farmer recoveries. The user is required to make following inputs</p>
				<p>1. Date.</p>
				<p>2. Activity.</p>
				<p>3. Outgrower.</p>
				<p><b>Farmer Recoveries Details</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/farmers recovery details.jpg"/></br></a></p>
				<p><b>Seed cane Supply Report.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list of seed cane supply and its details. The user is required to make following inputs.</p>
				<p>1. Society.</p>
				<p>2. Date.</p>
				<p><b>Seed cane Supply Report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/seedcane supply.jpg"/></br></a></p>
				<p><b>Fertilizer Supply Report</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to fertilizer supply and its details. The user is required to make following inputs.</p>
				<p>1. Society.</p>
				<p>2. Date.</p>
				<p><b>Fertilizer Supply Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/fertilizer suply.jpg"/></br></a></p>
				<p><b>Transport Subsidy</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related transport Subsidy and its details. The user is required to make following inputs.</p>
				<p>1. Contractor.</p>
				<p>2. Date.</p>
				<p>3. Payment Period.</p>
				<p><b>Transport Subsidy</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/transport subsidy.jpg"/></br></a></p>
				<p><b>Seed cane DayBook</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Seed cane and its details. The user is required to make following inputs.</p>
				<p>1. Society , Zone and Sub-Location.</p>
				<p>2. Date.</p>
				<p>3. Payment Period.</p>
				<p><b>Seed cane DayBook</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/seedcane day book.jpg"/></br></a></p>
				<p><b>DEBIT BALANCE CASES</b></p>
				<p>This interface shows the list of farmers who have debit balances under their names. Clicking Process will show the farmers information in the grid</p>
				<p>The user is required to enter the following information:</p>
				<p>1. Sub-Location.</p>
				<p>2. Society.</p>
				<p><b>Debit balance cases</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/debit balance cases.jpg"/></br></a></p>
				<p><b>Planting Status report.</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Planting Status and its details. The user is required to make following inputs</p>
				<p>The user is required to enter the following information:</p>
				<p>1. Society, Zone and Sub-Location.</p>
				<p>2. Date.</p>
				<p>3. Status.</p>
				<p><b>Planting Status report.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/oga report 1/field planting status.jpg"/></br></a></p>
				<p><b>Bank Loan Recoveries</b></p>
				<p><b>Loan Bank master</b></p>
				<p>This window is a master window. The user is required to insert/delete/Modify details regarding Bank and enter necessary fields related to Bank.</p>
				<p><b>Loan Bank master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/loan bank master.jpg"/></br></a></p>
				<p><b>Loan Type Master:</b></p>
				<p>This window is a master window. The user is required to insert/delete/Modify details regarding Loan Type and enter necessary fields related to Loan.</p>
				<p><b>Loan Type Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/loan type master.jpg"/></br></a></p>
				<p><b>Loan Interest Master</b></p>
				<p>This window is a master window. The user is required to insert details regarding Loan interest and enter necessary fields related to Loan Interest.</p>
				<p><b>Loan Interest Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/loan interest master.jpg"/></br></a></p>
				<p><b>Load Loan Records</b></p>
				<p>This window allows the user to load Loan records from the excel file.</p>
				<p><b>Load Loan Records</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/load loan records.jpg"/></br></a></p>
				<p><b>Loan Data Details Report</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Loan and its details. The user is required to make following inputs.</p>
				<p>1. Zone and Sub-Location.</p>
				<p>2. Date.</p>
				<p>3.Bank Name.</p>
				<p><b>Loan Data Details Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/loan data details report.jpg"/></br></a></p>
				<p><b>Loan Recovery Report</b></p>
				<p>This window is used to generate a report. The Report generated shows a list related to Loan Recovery and its details. The user is required to make following inputs</p>
				<p>1. Zone and Sub-Location.</p>
				<p>2. Date</p>
				<p>3. Bank Name.</p>
				<p><b>Loan Recovery Report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/bank loan recoveries/loan recovery reports.jpg"/></br></a></p>
				<p><b>Utility</b></p>
				<p><b>Undo Clearance:</b></p>
				<p>This window is used to undo clearance for fields which are cleared by ODS on selected date and not scheduled for payment.</p>
				<p><b>Undo Clearance</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/undo clearence.jpg"/></br></a></p>
				<p><b>Display Paysheet</b></p>
				<p>This window is used to view paysheet for the inputted Field and Plot number</p>
				<p><b>Display Paysheet</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/diplay paysheet.jpg"/></br></a></p>
				<p><b>Nullify Paysheet</b></p>
				<p>This window is used to Nullify the Paysheet.The user is required to enter Pay sheet number to Proceed.</p>
				<p><b>Nullify Paysheet</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/nulify paysheet.jpg"/></br></a>
				<p><b>Add AMS Jobs:</b></p>
				<p>This is a master window which is used to insert/delete/modify AMS jobs.</p>
				<p><b>Add AMS Jobs:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/add AMS job.jpg"/></br></a>
				<p><b>Add transaction type:</b></p>
				<p>This is a master window which is used to insert/delete/modify Transaction Type.</p>
				<p><b>Add transaction type:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/add transaction type.jpg"/></br></a>
				<p><b>AMS jobs parameter:</b></p>
				<p>This is a master window which is used to insert/delete/modify Transaction Type.</p>
				<p><b>Add jobs parameter:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/AMS job parameter.jpg"/></br></a>
				<p><b>Add Missing Grower Transaction:</b></p>
				<p>This window is used to enter missing transactions .The user is required to enter the field number , plot number , Transport Rate, harvesting Rate , Burnt Cane Penalty.</p>
				<p><b>Add Missing Grower Transaction:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/add mising transaction.jpg"/></br></a>
				<p><b>Re-Generate EFT File</b></p>
				<p>This window is used to re-generate the EFT file. The user is required to enter the Payment Paysheet Number to generate the EFT File.</p>
				<p><b>Re-Generate EFT File</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/generate EFT file.jpg"/></br></a>
				<p><b>Grower Accounts.</b></p>
				<p>This window is used to view the details regarding cane supplied to the factory by the farmers. The report thus produced shows various important data like Farmer Name , Sub-Location , Kenyan ID , Date , Tonnage , Credit.</p>
				<p><b>Grower Accounts.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/grower account.jpg"/></br></a>
				<p><b>Staff master</b></p>
				<p>See illustration below.</p>
				<p><b>Staff master.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/staff master.jpg"/></br></a>
				<p><b>Staff attendance</b></p>
				<p>See illustration below.</p>
				<p><b>Staff attendance.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/staff attendance.jpg"/></br></a>
				<p><b>Notification.</b></p>
				<p>See illustration below.</p>
				<p><b>Notification.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/notification.jpg"/></br></a>
				<p><b>Staff rate master</b></p>
				<p>See illustration below.</p>
				<p><b>Staff rate master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/utility/staff rate master.jpg"/></br></a>
				<p><b>Master Database</b></p>
				<p><b>Loan Master</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Loan.</p>
				<p><b>Loan Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/loan master.jpg"/></br></a>
				<p><b>Transport Zone:</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Transport Zone.</p>
				<p><b>Transport Zone:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/transport zone.jpg"/></br></a>
				<p><b>Bank Master:</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Banks.</p>
				<p><b>Bank Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/bank master.jpg"/></br></a>
				<p><b>Branch Master:</b></p>
				<p>This is a master window which is used to insert information related to Branch. The user is required to enter information like Bank , branch code ,branch Name , address.</p>
				<p><b>Branch Master:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/branch master.jpg"/></br></a>
				<p><b>JOB rates:</b></p>
				<p>This is a master window which is used to insert information related to Job Rates. The user is required to enter information like Debit rate credit rate(NE/ODS).</p>
				<p><b>JOB rates:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/job rates.jpg"/></br></a>
				<p><b>Society Master</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Society.</p>
				<p><b>Society Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/society master.jpg"/></br></a>
				<p><b>Cane Purchase Center</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Cane Purchase Center.</p>
				<p><b>Cane Purchase Center</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/purchase center master.jpg"/></br></a>
				<p><b>High Payload Rates</b></p>
				<p>This is a master window which is used to insert information related to High Payload Rates. The user is required to enter Date , Purchase Center , Rate , Min Qty to Proceed.</p>
				<p><b>High Payload Rates</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/high payload transport rate master.jpg"/></br></a>
				<p><b>Control parameter</b></p>
				<p>See illustration below.</p>
				<p><b>Control parameter</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/parameter.jpg"/></br></a>
				<p><b>MNO(Mobile Network Operator) master</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Mobile network operator.</p>
				<p><b>MNO(Mobile Network Operator) master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/MNO master.jpg"/></br></a>
				<p><b>MNO Band Rate Master</b></p>
				<p>This is a master window which is used to insert information related to MNO Band Rate. The user enters the information like MNO , Min Band Range, etc</p>
				<p><b>MNO Band Rate Master</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/MNO band rate master.jpg"/></br></a>
				<p><b>Cutter Recovery:</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Cutter Recovery.</p>
				<p><b>Cutter Recovery:</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/cutter recovery master.jpg"/></br></a>
				<p><b>Cutter Payroll Phase</b></p>
				<p>This is a master window which is used to insert/delete/modify information related to Cutter Payroll.</p>
				<p><b>Cutter Payroll Phase</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/cutter payroll run master.jpg"/></br></a>
				<p><b>Cutter Payroll Phases with gangs.</b></p>
				<p>See illustration below.</p>
				<p><b>Cutter Payroll Phases with gangs</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/Master Database/gang payroll run mapping.jpg"/></br></a>
				<p><b>Cutter recovery list</b></p>
				<p>See illustration below</p>
				<p><b>Cutter recovery list</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cutter recovery report.jpg"/></br></a>
				<p><b>Cutter recovery status report</b></p>
				<p>See illustration below</p>
				<p><b>Cutter recovery status report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cutter recovery status report.jpg"/></br></a>
				<p><b>Outstanding cutters payment</b></p>
				<p>See illustration below</p>
				<p><b>Outstanding cutters payment</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/outstanding cutter payments.jpg"/></br></a>
				<p><b>Cutters performance report.</b></p>
				<p>See illustration below</p>
				<p><b>Cutters performance report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cutter payment reports.jpg"/></br></a>
				<p><b>Cane Harvestor reconcilliation.</b></p>
				<p>See illustration below</p>
				<p><b>Cane Harvestor reconcilliation.</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cutter payroll reconcilliation.jpg"/></br></a>
				<p><b>Electronic cutter payment summary report</b></p>
				<p>See illustration below</p>
				<p><b>Electronic cutter payment summary report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cutter payment summary report.jpg"/></br></a>
				<p><b>MNO payment summary report</b></p>
				<p>See illustration below</p>
				<p><b>MNO payment summary report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/MNO payment summary report.jpg"/></br></a>
				<p><b>Cutter unrecovered report</b></p>
				<p>See illustration below</p>
				<p><b>Cutter unrecovered report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/cane cutter unrecovered loan report.jpg"/></br></a>
				<p><b>Misc report</b></p>
				<p>See illustration below</p>
				<p><b>Misc report</b><br><img class="brand-logo homepage"  src="<?php echo base_url(); ?>public/Outgrowers Accounts/OGA Reports-II/master report.jpg"/></br></a>
	<footer class="container-fluid footer">
	<div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
		<a href="<?php echo site_url('mgt_admin')?>" class="btn btn-neutral float-right" title=""><span class=""></span>Next</a>
		<a href="<?php echo site_url('wb_operation')?>" class= "btn btn-neutral" title=""><span class=""></span>Previous</a>
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
						
					
				
		
                