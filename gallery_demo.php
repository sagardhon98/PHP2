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
			<section class="wrapper site-min-height">
				<h1><i class="fa fa-angle-right"></i><u><b>GALLERY :-</b></u></h1>
				<hr>
				<div class="row mt">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project">
								<div class="photo-wrapper">
									<div class="photo">
										<a class="fancybox" href="img/portfolio/port01.jpg"><img class="img-responsive" src="img/portfolio/port01.jpg"></a>
									</div>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
					</div><!--col-lg-4-->

					<div class="clo-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project">
								<div class="photo-wrapper">
									<div class="photo">
										<a class="fancybox" href="img/portfolio/port02.jpg"><img class="img-responsive" src="img/portfolio/port02.jpg"></a>
									</div>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
					</div><!--col-lg-4-->

					<div class="clo-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project-wrapper">
								<div class="photo-wrapper">
									<div class="photo">
										<a class="fancybox" href="img/portfolio/port03.jpg"><img class="img-responsive" src="img/portfolio/port03.jpg"></a>
									</div>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
					</div><!--col-lg-4-->
				</div><!--row mt-->
				
				<div class="row mt">	
					<div class="clo-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project">
								<div class="photo-wrapper">
									<div class="photo">
										<a class="fancybox" href="img/portfolio/port04.jpg"><img class="img-responsive" src="img/portfolio/port04.jpg"></a>
									</div>
									<div class="overlay"></div>
								</div>
							</div>
						</div>
					</div><!--col-lg-4-->

					<div class="clo-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project">
								<div class="photo-wrapper">
									<div class="project">
										<a class="fancybox" href="img/portfolio/port05.jpg"><img class="img-responsive" src="img/portfolio/port05.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clo-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
							<div class="project">
								<div class="photo-wrapper">
									<div class="photo">
										<a class="fancybox" href="img/portfolio/port06/jpg"><img class="img-responsive" src="img/portfolio/port06.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div><!--row mt-->
			</section>
		</section>
	<!--main content end-->

<!--------------------------
		 FOOTER CONTENT
	--------------------------->
	<!--footer content start-->
		<footer class="site-footer">
			<div class="text-center">
				<p>&copy;<strong>SAGAR_ELECTRONICS</strong></p>
				<a href="#" class="go-top">
				<i class="fa fa-angle-up"></i>
			    </a>
			</div>
		</footer>
	<!--footer content start-->