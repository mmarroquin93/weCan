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
								<li><a href="services.blade.php">Services</a></li>
								<li class="dropdown active">
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
										<li><a href="error.blade.php">Error</a></li>
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
					<h3>Shop - Checkout</h3>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>					
						<li><a href="#">Shop</a></li>					
						<li class="active">Place Order</li>
					</ol>
				</div><!-- Banner Heading /- -->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Checkout Content -->
		<div class="container-fluid no-padding checkout-content">		
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="section-padding"></div>
						<div class="section-title">
							<h3>New User Registeration</h3>
						</div>
						<!-- New User Registeration -->
						<form class="new-user-registeration">
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Your Name</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-id">						
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Email</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="email" class="form-control" id="new-user-email">
								</div>
							</div>
							<div class="form-group">						
								<label class="col-md-4 col-sm-4 col-xs-12">Password</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-pwd">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Re - Type Password</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="new-user-re-pwd">
								</div>
							</div>
							<div class="col-md-8 pull-right">
								<button type="submit" class="btn-register">Register</button>
							</div>
						</form><!-- New User Registeration /- -->
					</div>
					<!-- User Login -->
					<div class="col-md-6 user-login">
						<div class="section-padding"></div>
						<div class="section-title">
							<h3>Return User Login</h3>
						</div>
						<form class="new-user-registeration">					
							<div class="form-group">
								<label class="col-md-4 col-sm-4 col-xs-12">Your Email*</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="email" class="form-control" id="user-email" required="">
								</div>
							</div>
							<div class="form-group">						
								<label class="col-md-4 col-sm-4 col-xs-12">Password*</label>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control" id="user-pwd" required="">
								</div>
							</div>
							<div class="col-md-12 pull-right">
								<a href="#">Forgot Password?</a>
								<button type="submit" class="btn-register btn-sign-in">Sign In</button>
							</div>
						</form>
						<p><span>Or</span></p>
						<a href="#">Purchase As Guest User</a>
					</div><!-- User Login /- -->
					
					<!-- Order Summary -->
					<div class="col-md-12 order-summary">
						<div class="section-padding"></div>
						<!-- Section Header -->
						<div class="section-header">
							<h3>Order Summary</h3>				
						</div><!-- Section Header /- -->
						<div class="order-summary-content">
							<table class="summary_table">
								<thead>
									<tr>
										<th class="product-thumbnail">Product</th>
										<th class="product-name">Product Name</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td data-title="Product" class="product-thumbnail">
											<a title="Product Thumbnail" href="">
												<img class="attachment-shop_thumbnail wp-post-image" src="images\product\product-1.jpg" alt="thumb-1">
											</a>					
										</td>
										<td data-title="Product Name" class="product-name">
											<a title="Product Name" href="#">
												White Pet Dog
												<span>Breed   :<span> Maltese</span></span>
												<span>Category  :<span>Companion</span></span>
											</a>
										</td>									
										<td data-title="Quantity" class="product-quantity">
											<div class="quantity">
												<input type="number">
											</div>
										</td>
										<td data-title="Total" class="product-subtotal">
											<span>£650.00</span>
										</td>									
									</tr>
									<tr class="cart_item">
										<td data-title="Product" class="product-thumbnail">
											<a title="Product Thumbnail" href="">
												<img class="attachment-shop_thumbnail wp-post-image" src="images\product\product-2.jpg" alt="thumb-1">
											</a>					
										</td>
										<td data-title="Product Name" class="product-name">
											<a title="Product Name" href="#">
												Hunter Pet Dog
												<span>Breed   :<span> Pit Bull</span></span>
												<span>Category  :<span>Hunter</span></span>
											</a>
										</td>									
										<td data-title="Quantity" class="product-quantity">
											<div class="quantity">
												<input type="number">
											</div>
										</td>
										<td data-title="Total" class="product-subtotal">
											<span>£480.00</span>
										</td>
									</tr>								
								</tbody>
							</table>
						</div>
						<div class="section-padding"></div>
					</div><!-- Order Summary /- -->
					
					<!-- Billing Address -->
					<div class="col-md-12 billing-address no-padding">				
						<div class="section-title col-md-12">
							<h3>Billing Address</h3>				
						</div>
						<form class="billing-address-form">
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="billing-first-name" placeholder="First Name*" required="">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="billing-last-name" placeholder="Last Name">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="billing-phone" placeholder="Phone*" required="">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">					
								<input type="text" class="form-control" id="billing-zip" placeholder="Postcode/ZIP*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="billing-address-3" placeholder="Address Line 1*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="billing-address-4" placeholder="Address Line 2">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="billing-city" placeholder="Town / City*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="billing-state" placeholder="State / Country*" required="">
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<input type="checkbox"><span>Ship Items To The Above Billing Address</span>
							</div>
						</form><!-- Booking Details Form/- -->
						<div class="section-padding"></div>
					</div><!-- Billing Address /- -->
					
					<!-- Shipping Address -->
					<div class="col-md-12 billing-address shipping-address no-padding">				
						<div class="section-title col-md-12">
							<h3>Shipping Address</h3>				
						</div>
						<form class="billing-address-form shipping-address-form">
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="shipping-first-name" placeholder="First Name*" required="">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="shipping-last-name" placeholder="Last Name">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">
								<input type="text" class="form-control" id="shipping-phone" placeholder="Phone*" required="">
							</div>
							<div class="form-group col-md-3 col-sm-3 col-xs-12">					
								<input type="text" class="form-control" id="shipping-zip" placeholder="Postcode/ZIP*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="billing-address-1" placeholder="Address Line 1*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="shipping-address-2" placeholder="Address Line 2">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="shipping-city" placeholder="Town / City*" required="">
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-12">
								<input type="text" class="form-control" id="shipping-state" placeholder="State / Country*" required="">
							</div>					
						</form><!-- Shipping Details Form/- -->
						<div class="section-padding"></div>
					</div><!-- Shipping Address /- -->
					
					<!-- Payment Mode -->
					<div class="col-md-5 payment-mode">				
						<div class="section-title">
							<h3>Select Payment Mode</h3>				
						</div>
						<div class="payment-type">
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="db-transfer" value="option1">
								<div class="radio-content">
									<span>Direct Bank Transfer</span>
									<p>Kindly use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
								</div>
							</div>
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="cod" value="option2">
								<div class="radio-content">
									<span>Cash On Delivery</span>
									<p>Limited to Selected Town / City according to the area postal ZIP codes</p>
								</div>
							</div>
							<div class="radio-box">
								<input type="radio" name="optionsRadios" id="paypal" value="option3">
								<div class="radio-content">	
									<span>Paypal</span>
									<img src="images\icon\visa-master-card.png" alt="visa-master-card">
								</div>
							</div>
						</div>
						<a href="#">Place Order</a>
						<div class="section-padding"></div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Checkout Content /- -->

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