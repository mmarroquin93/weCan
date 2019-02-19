﻿<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>care</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images\favicon.ico">
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images\apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images\apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images\apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="libraries\loader\loaders.min.css">

	<!-- Library - Google Font Familys -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries\bootstrap\bootstrap.min.css">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="libraries\fonts\font-awesome.min.css">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="libraries\owl-carousel\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="libraries\owl-carousel\owl.theme.css">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="libraries\animate\animate.min.css">
	
	<!-- Library - Price Filter -->
	<link rel="stylesheet" type="text/css" href="libraries\price-filter\jquery-ui.min.css">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="css\plugins.css">
	<link rel="stylesheet" type="text/css" href="css\navigation-menu.css">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="css\shortcodes.css">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<a id="top"></a>
	<!-- Main Container -->
	<div class="main-container">
		<!-- Header -->
		<header class="header-main">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<div class="col-md-4 col-sm-4 col-xs-4 no-padding color-red"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 no-padding color-green"></div>
				<div class="col-md-4 col-sm-4 col-xs-4 no-padding color-yellow"></div>
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-6">
							<p>Leave A Message: <a href="mailto:info@petcare.com">info@petcare.com</a></p>
						</div>
						<div class="social col-md-4 col-sm-4 col-xs-6 pull-right">
							<ul class="no-bottom-margin">
								<li><a href="#"><img src="images\icon\tw-ic.png" alt="Twitter"></a></li>
								<li><a href="#"><img src="images\icon\fb-ic.png" alt="Facebook"></a></li>	
								<li><a href="#"><img src="images\icon\g -ic.png" alt="Google pulse"></a></li>
								<li><a href="#"><img src="images\icon\dribbble-ic.png" alt="dribbler"></a></li>
								<li><a href="#"><img src="images\icon\in-ic.png" alt="In"></a></li>
							</ul>					
						</div>
					</div>
				</div>
				<!-- container /- -->
			</div><!-- Top Header /- -->
			
			<!-- Logo Block -->
			<div class="middle-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-3 logo-block pull-left">
							<a href="#">
								<img src="images\logo.png" alt="Logo">
							</a>
						</div>
						<div class="col-md-9 pull-right">
							<div class="location">
								<img src="images\icon\location-ic.png" alt="Location">
								<p><span>Our Location</span> 50- Design Street, Texas</p>
							</div>
							<div class="time-scheduled">
								<img src="images\icon\time-ic.png" alt="time">
								<p><span>Mon - Sat</span> 8 am - 10 pm</p>
							</div>
							<div class="phone">
								<img src="images\icon\phone-ic.png" alt="phone">
								<p><span>Call Us</span> +1 (0) 234 56 789</p>
							</div>
							<div class="cart">
								<a href="#"><img src="images\icon\cart-ic.png" alt="png"><span>10</span></a>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Logo Block /- -->
			<nav class="navbar ow-navigation">
				<div class="container">
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand logo-block">
								<a href="#">
									<img src="images\logo.png" alt="Logo">
								</a>
							</div>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="index.blade.php">Home</a></li>
								<li><a href="about.blade.php">About Us</a></li>
								<li class="active"><a href="services.blade.php">Services</a></li>
								<li class="dropdown">
									<a href="shop.blade.php" title="product list" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="shop-pets.blade.php">Pets List</a></li>
										<li><a href="shop-details.blade.php">Product Details</a></li>
										<li><a href="checkout.blade.php">Place Order</a></li>
										<li><a href="shop-cart.blade.php">My Cart</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="errors/404.blade.php">Error</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="blog.blade.php" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a href="single-blog.blade.php">Single Blog</a></li>
									</ul>
								</li>
								<li><a href="contact-us.blade.php">Contact US</a></li>
							</ul>						
						</div>
						<a href="#">Get An Appointment</a>
					</div>
				</div>
			</nav>
		</header><!-- Header /- -->
	
		<!-- Page Banner -->
		<div class="container-fluid no-padding page-banner">
			<!-- Container -->
			<div class="container">
				<!-- Banner Heading -->
				<div class="banner-heading">
					<h3>Our Services</h3>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Services</li>
					</ol>
				</div><!-- Banner Heading /- -->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Services -->
		<div id="services" class="services container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Services we Offer</h3>
					<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
				</div><!-- Section Header /- -->
				<div class="service-tab col-md-9 no-padding">
					<div class="col-md-4 col-sm-5 no-padding">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-one" href="#tab-one" aria-expanded="true"><i><img src="images\icon\care.png" alt="care"></i>Veterinary care</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-two" href="#tab-two" aria-expanded="false"><i><img src="images\icon\camp.png" alt="care"></i>Pets Day Camp</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-three" href="#tab-three" aria-expanded="false"><i><img src="images\icon\nutrition.png" alt="nutrition"></i>Pet Nutrition</a>
							</li>
							<li class="" role="presentation">
								<a data-toggle="tab" role="tab" aria-controls="tab-four" href="#tab-four" aria-expanded="false"><i><img src="images\icon\insurance.png" alt="insurance"></i>Pet Insurance</a>
							</li>
						</ul>
					</div>
					<div class="tab-content col-md-8 col-sm-7 no-padding">
						<div id="tab-one" class="tab-pane active" role="tabpanel">
							<div class="tab-box">
								<p>1 Trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Space. The final frontier. These are the voyages of the Starship Enterprise.</p>
								<p>Now were up in the big leagues getting' our turn at bat? No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be! Boy the way Glen Miller played. Songs that made the hit parade guys like us.</p>
							</div>
						</div>
						<div id="tab-two" class="tab-pane" role="tabpanel">
							<div class="tab-box">
								<p>2 Trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Space. The final frontier. These are the voyages of the Starship Enterprise.</p>
								<p>Now were up in the big leagues getting' our turn at bat? No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be! Boy the way Glen Miller played. Songs that made the hit parade guys like us.</p>
							</div>
						</div>
						<div id="tab-three" class="tab-pane" role="tabpanel">
							<div class="tab-box">
								<p>3 Trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Space. The final frontier. These are the voyages of the Starship Enterprise.</p>
								<p>Now were up in the big leagues getting' our turn at bat? No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be! Boy the way Glen Miller played. Songs that made the hit parade guys like us.</p>
							</div>	
						</div>
						<div id="tab-four" class="tab-pane" role="tabpanel">
							<div class="tab-box">
								<p>4 Trajectory into an orbit which freezes his life support systems and returns Buck Rogers to Earth five-hundred years later. We're gonna do it. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true. Space. The final frontier. These are the voyages of the Starship Enterprise.</p>
								<p>Now were up in the big leagues getting' our turn at bat? No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be! Boy the way Glen Miller played. Songs that made the hit parade guys like us.</p>
							</div>	
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="right-image"><img src="images\services\services-1.png" alt="Service"></div>
			<div class="section-padding"></div>
		</div><!-- Services /- -->
		
		<!-- Callout -->
		<div class="callout container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="callout-content row">
					<div class="col-md-10 col-sm-9">
						<h3>Have a visit to Our Store for a Movement</h3>
						<h4>You Will Really Gets Satisfied with Our Largest Collections</h4>
					</div>
					<div class="col-md-2 col-sm-3">
						<a href="#" class="btn btn-default" title="Purchase">Go To Store</a>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Callout /- -->
		
		<!-- Appointment -->
		<div id="appointment" class="appointment container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<form class="appointment-form">
						<!-- Section Header -->
						<div class="section-header">
							<h3>Get An Appointment</h3>
							<p>They will have to make the best of things its an uphill climb</p>
						</div><!-- Section Header /- -->
						<div class="col-md-3 col-sm-3">
							<input type="text" class="form-control" placeholder="First Name" required="">
						</div>
						<div class="col-md-3 col-sm-3">
							<input type="text" class="form-control" placeholder="Last Name" required="">
						</div>
						<div class="col-md-3 col-sm-3">
							<input type="text" class="form-control" placeholder="Email" required="">
						</div>
						<div class="col-md-3 col-sm-3">
							<input type="text" class="form-control" placeholder="Phone Number" required="">
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select>
								<option>Pet Category</option>
								<option>Pet Category</option>
								<option>Pet Category</option>
								<option>Pet Category</option>
							</select>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
							</select>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
							</select>
						</div>
						<div class="form-group col-md-3 col-sm-3">
							<select>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
								<option>Service Type</option>
							</select>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea class="form-control" rows="7" cols="20" placeholder="Anything we should know about your pet?" required=""></textarea>
						</div>
						<button class="btn btn-default">Get An Appoinment</button>
					</form>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Appointment /- -->	
		
		<!-- Counter -->
		<div class="counter container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images\counter\counter-1.png" alt="counter-1"><span class="count" id="statistics_count-1" data-statistics_percent="3540"> &nbsp;</span></h3>
							<p>srvice we done</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images\counter\counter-2.png" alt="counter-2">
							<span class="count" id="statistics_count-2" data-statistics_percent="1234">&nbsp;</span></h3>
							<p>Our Happy Clients</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images\counter\counter-3.png" alt="counter-3">
							<span class="count" id="statistics_count-3" data-statistics_percent="2200">&nbsp;</span></h3>
							<p>Talented Employees</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="counter-box">
							<h3><img src="images\counter\counter-4.png" alt="counter-4">
							<span class="count" id="statistics_count-4" data-statistics_percent="1234">&nbsp;</span></h3>
							<p>Branches We Have</p>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Counter /- -->
		
		<!-- Shop -->
		<div class="shop container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h3>Updates From Our Shop</h3>
						<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product-box">
							<div class="product-image">
								<img src="images\shop\shop-1.jpg" alt="shop">
								<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
								<div class="wishlist">
									<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
									<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
								</div>
							</div>
							<div class="product-content">
								<h2>Pet Harness</h2>
								<h3><i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i><span>$120.00</span></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product-box">
							<div class="product-image">
								<img src="images\shop\shop-2.jpg" alt="shop">
								<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
								<div class="wishlist">
									<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
									<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
								</div>
							</div>
							<div class="product-content">
								<h2>Pet Toys</h2>
								<h3><i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i><span>$150.00</span></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product-box">
							<div class="product-image">
								<img src="images\shop\shop-3.jpg" alt="shop">
								<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
								<div class="wishlist">
									<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
									<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
								</div>
							</div>
							<div class="product-content">
								<h2>Pet Out Fits</h2>
								<h3><i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i><span>$280.00</span></h3>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product-box">
							<div class="product-image">
								<img src="images\shop\shop-4.jpg" alt="shop">
								<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
								<div class="wishlist">
									<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
									<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
								</div>
							</div>
							<div class="product-content">
								<h2>Pet Food</h2>
								<h3><i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i><span>$360.00</span></h3>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container / -->
			<div class="section-padding"></div>
		</div><!-- Shop / -->
		
		<!-- Offer -->
		<div class="offer container-fluid no-padding">
			<div class="offer-shape">
				<svg width="100%" height="100%">
					<clippath id="clipPolygon1" clippathunits="objectBoundingBox">
						<polygon points="0 0, 32 100, 100 100, 100 0"></polygon>
					</clippath>
				</svg>
			</div>
			
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6">
						<div class="smart-price">
							<h3>Something Special For Your Pets</h3>
							<h2>In Smart Price</h2>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 pull-right offer-box">					
						<h2>30%</h2><h3>Upto 500 Products<span>On Season Offer Sale</span></h3>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Offer / -->
		
		<!-- Pricing -->
		<div class="pricing container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- section-header -->
			<div class="section-header">
				<h3>Packages We Provide</h3>
				<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
			</div><!-- section-header /- -->
			<!-- Container -->
			<div class="container">
				<div class="col-md-4 col-sm-6">
					<div class="price-table">
						<h5>Basic</h5>
						<div class="price-box">
							<h3><sup>$</sup>100<sub>/mo</sub></h3>
							<ul>
								<li>Pet Food</li>
								<li>Nutrition guide</li>
								<li>Leather Harness</li>
								<li>Pet Toys</li>
								<li>Shopping Coupon</li>
							</ul>
							<a class="btn btn-default" href="#" role="button">Purchase</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="price-table price-color-1">
						<h5>Standard</h5>
						<div class="price-box">
							<h3><sup>$</sup>200<sub>/mo</sub></h3>
							<ul>
								<li>Pet Food</li>
								<li>Health Checkup</li>
								<li>Pet Out Fit</li>
								<li>Pet Toys</li>
								<li>Shopping Discount</li>
							</ul>
							<a class="btn btn-default" href="#" role="button">Purchase</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="price-table price-color-2">
						<h5>Premium</h5>
						<div class="price-box">
							<h3><sup>$</sup>300<sub>/mo</sub></h3>
							<ul>
								<li>Pet Food</li>
								<li>Health Checkup</li>
								<li>Pet Grooming</li>
								<li>Pet Toys</li>
								<li>Free Gifts</li>
							</ul>
							<a class="btn btn-default" href="#" role="button">Purchase</a>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Pricing /- -->

		<!-- Newsletter -->
		<div id="newsletter-section" class="newsletter-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<form>
						<h3>Subscribe Our Newsletter</h3>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div><!-- /input-group -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your E-mail">					
						</div><!-- /input-group -->
						<input type="submit" value="Go">
					</form>
				</div>
			</div><!-- Container -->
		</div><!-- Newsletter /- -->
		
		<footer class="footer-main">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-about">
							<h3 class="widget-title">about Us</h3>
							<p>Hello we are Comre. We are here to provide you the best offers through our coupons. Hello we are company.</p>
							<ul>
								<li><img src="images\icon\ftr-location.png" alt="Address">Washington Square Park, <span>NY, United States</span></li>
								<li><img src="images\icon\ftr-customer.png" alt="Phone"> Customer Support : <span>+ 124 45 76 678</span></li>
								<li><img src="images\icon\ftr-email.png" alt="Mail"><span>Email :</span><a href="mailto:mail@woodsman.com"> mail@woodsman.com</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-links">
							<h3 class="widget-title">Working Time</h3>
							<ul>
								<li>Monday <span>08:00 am  -  10:00 pm</span></li>
								<li>tuesday <span>08:00 am  -  10:00 pm</span></li>
								<li>wednesday <span>08:00 am  -  10:00 pm</span></li>
								<li>thursday <span>08:00 am  -  10:00 pm</span></li>
								<li>friday <span>08:00 am  -  10:00 pm</span></li>
								<li>Week End <span>CloSed</span></li>
								<li>Emergency Unit <span>Open Any Time</span></li>						
							</ul>
						</aside>
					</div>	
					<div class="col-md-4 col-sm-6">
						<aside class="widget widget-subscribe">
							<div class="subscribe-box">
								<h4>Subscribe To Mail!</h4>
								<p>Get our Daily email n.ewsletter with Special Services, Updates, Offers and more</p>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email Address">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">SignUp</button>
									</span>
								</div><!-- /input-group -->
							</div>
							<ul>
								<li><a href="#"><img src="images\icon\ftr-fb.png" alt="ftr"></a></li>
								<li><a href="#"><img src="images\icon\ftr-g .png" alt="ftr"></a></li>
								<li><a href="#"><img src="images\icon\ftr-tumbler.png" alt="ftr"></a></li>
								<li><a href="#"><img src="images\icon\ftr-dribbble.png" alt="ftr"></a></li>
								<li><a href="#"><img src="images\icon\ftr-ln.png" alt="ftr"></a></li>
								<li><a href="#"><img src="images\icon\ftr-tw.png" alt="ftr"></a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="bottom-footer container-fluid no-padding">		
				<div class="container">
					<div class="row">
						<ul class="col-md-5 pull-left">
							<li><a href="#">Faq</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Client Support</a></li>
						</ul>
						
						<div class="col-md-7 pull-right">
							<p class="copyright">copyrights &copy; 2015 Mice Cab. All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</div><!-- Main Container -->
	<!-- JQuery v1.11.3 -->
	<script src="js\jquery.min.js"></script>

	<!-- Library - Modernizer -->
	<script src="libraries\modernizr\modernizr.js"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="libraries\bootstrap\bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="js\jquery.easing.min.js"></script>

	<!-- Library - jQuery.appear -->
	<script src="libraries\appear\jquery.appear.js"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="libraries\owl-carousel\owl.carousel.min.js"></script>
	
	<!-- jQuery For Number Counter -->	
	<script src="libraries\number\jquery.animateNumber.min.js"></script>

	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Price Filter -->
	<script src="libraries\price-filter\jquery-ui.min.js"></script>
	
	<!-- Library - Theme JS -->
	<script src="js\functions.js"></script>
</body>
</html>