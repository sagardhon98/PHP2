<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="Keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title>Dashdemo</title>

	<!--fevicons-->
	<link rel="icon" href="img/favicon.png">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!--Bootstrap core css-->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">

	<!--external css-->
	<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css">

    <!--custom styles for this template-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-responsive.css">
    <script src="lib/chart-master/Chart.js"></script>
	
</head>


<body>
	<section id="container">
	<!---------------------------------------
		 TOP BAR CONTENT & NOTIFICATION
	---------------------------------------->	
<!--header start-->
	<header class="header black-bg">
		<div class="sidebar-toggle-box">
			<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Novogation"></div>
		</div>
		<!--logo start-->
		<a href="Dashboard.php" class="logo"><b>SAGAR_<span>ELECTRONICS</span></b></a>
		<!--logo end-->
		<div class="nov notify-row" id="top menu">
			<!--notification start-->
			<ul class="nav top-menu">
				<!--settings start-->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="fa fa-tasks"></i>
						<span class="badge bg-theme">!</span>
					 </a>
					<ul class="dropdown-menu extended tasks-bar">
					
						<li><a class="logout" href="#">Lock screen</a></li> 
				<!--settings end-->
			</ul>
			<!--notification end-->
		</div>
		<div class="top-menu">
			<ul class="nav pull-right top-menu">
				<li><a href="#" class="logout">Logout</a></li>
			</ul>
		</div>
	</header> <!--header end-->

	<!-----------------------------------
		      MAIN SIDEBAR MENU
	------------------------------------>
	<!--sidebar start-->
	<aside>
		<div id="sidebar" class="nav-collapse">
			<!--sidebar menu start-->
			<ul class="sidebar-menu" class="nav-accordian">
				<p class="centered"><a href="#"><img src="img/logo-designtext=RC+Electronics (1).png" class="img-circle" width="50%"></a></p>
				<h5 class="centered">SAGAR DHON</h5>
				<li class="mt">
					<a href="#" class="action">
						<i class="fa fa-dashboard"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="sub-menu dcjq-parent-li">
					<a href="javascript:;" class="dcjq-parent">
					<i class="fa fa-th"></i>
					<span>View Stock</span>
					<span class="dcjq-icon"></span>
					</a>
					<ul class="sub" style="display: none;">
						<li><a href="#">T.V</a></li>
						<li><a href="#">Refrigerator</a></li>
						<li><a href="#">Inverter</a></li>
						<li><a href="#">Washing Machine</a></li>
						<li><a href="#">Mobiles</a></li>
					</ul>
				</li>
				<li class="sub-menu" dcjq-parent-li>
					<a href="javascript" class="dcjq-parent">
					<i class="fa fa-desktop"></i>
					<span>Add Stock</span>
					<span class="dcjq-icon"></span>
					</a>
					<ul class="sub" style="display: none;">
						<li><a href="#">T.V</a></li>
						<li><a href="#">Refrigerator</a></li>
						<li><a href="#">Inverter</a></li>
						<li><a href="#">Washing Machine</a></li>
						<li><a href="#">Mobiles</a></li>
					</ul>
				</li>
				<li class="sub-menu" dcjq-parent-li>
					<a href="javascript" class="dcjq-parent">
					<i class="fa fa-cogs"></i>
					<span>Customer</span>
					<span class="dcjq-icon"></span>
					</a>
					<ul class="sub" style="display: none;">
						<li><a href="#">Gallery</a></li>
					</ul>
				</li>
				<li class="sub-menu" dcjq-parent-li>
					<a href="javascript" class="dcjq-parent">
					<i class="fa fa-book"></i>
					<span>Billing</span>
					<span class="dcjq-icon"></span>
					</a>
					<ul class="sub" style="display: none;">
						<li><a href="#">Invoice</a></li>
					</ul>
				</li>
				<li class="sub-menu" dcjq-parent-li>
					<a href="javascript" class="dcjq-parent">
					<i class="fa fa-th-list"></i>
					<span>Social Media</span>
					<span class="dcjq-icon"></span>	
					</a>
					<ul class="sub" style="display: none;">
						<li><a href="#" class="fa fa-whatsapp">Whatsapp</a></li>
						<li><a href="#" class="fa fa-instagram">Instagram</a></li>
						<li><a href="#" class="fa fa-facebook">Facebook</a></li>
						<li><a href="#" class="fa fa-twitter">Twitter</a></li>
						<li><a href="#" class="fa fa-youtube">Youtube</a></li>
						<li><a href="#" class="fa fa-google-plus">Google-plus</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>
	<!--sidebar end-->

	<!--------------------------
		   MAIN CONTENT
	--------------------------->
	<!--main content start-->
	<section id="main-content">
		<section class="wrapper">
			<div class="col-lg-12 mt">
				<div class="row-content panel">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="Invoice-body">
							<div class="pull-left">
								<h3>SAGAR DHON</h3>
								<address>
									<strong>SAGAR ELECTONICS, Inc.</strong><br>
									1307,Krushna CHS, sec-4<br>
									Ghansoli, Navi Mumbai-400 701<br>
									<abbr title="phone">p:</abbr> (123) 456-7890
								</address>
							</div>
							<!--/pull left-->
							<div class="pull-right">
								<h2>INVOICE</h2>
							</div>
							<!--/pull right-->
							<div class="clearfix"></div>
							<br>
							<br>
							<br>
							<div class="row">
								<div class="col-md-9">
									<h4>GUNWANTA DHON</h4>
									<address>
										<strong>Enterprise Corp.</strong><br>
										1307,Krushna CHS, sec-4<br>
										Ghansoli, Navi Mumbai-400 701<br>
										<abbr title="phone">p:</abbr> (123) 456-7890
									</address>
								</div>
								<!--/col-md-9-->
								<div class="col-md-3">
									<br>
									<div>
										<div class="pull-left">INVOICE NO.:</div>
										<div class="pull-right">000001</div>
										<div class="clearfix"></div>
									</div>
									<div>
										<!--col-md-3-->
										<div class="pull-left">INVOICE DATE.:</div>
										<div class="pull-right">00/00/0000</div>
										<div class="clearfix"></div>
									</div>
									<!--/row-->
									<br>
									<div class="well well-small green">
										<div class="pull-left">Total Due.:</div>
										<div class="pull-right">0000 USD</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<!--/invoice body-->
							</div>
							<!--col-lg-10-->
							<table class="table">
								<thead>
									<tr>
										<th style="width: 60px" class="text-center">QTY</th>
										<th class="text-left">DESCRIPTION</th>
										<th style="width: 140px" class="text-right">UNIT PRICE</th>
										<th style="width: 90px" class="text-right">TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">1</td>
										<td>Flat Pack Haritage</td>
										<td class="text-right">$000.00</td>
										<td class="text-right">$000.oo</td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td>Carry On suitcase</td>
										<td class="text-right">$000.00</td>
										<td class="text-right">$000.oo</td>
									</tr>
									<tr>
										<td class="text-center">3</td>
										<td>Carry On School bag</td>
										<td class="text-right">$000.00</td>
										<td class="text-right">$000.oo</td>
									</tr>
									<tr>
										<td class="text-center">4</td>
										<td>Carry On frigh</td>
										<td class="text-right">$000.00</td>
										<td class="text-right">$000.oo</td>
									</tr>
								</tbody>
							</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<!--main content end-->

