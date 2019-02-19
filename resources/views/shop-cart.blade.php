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
					<h3>Shop - Cart Page</h3>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>					
						<li><a href="#">Shop</a></li>					
						<li class="active">My - Cart</li>
					</ol>
				</div><!-- Banner Heading /- -->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Checkout Content -->
		<div class="container-fluid no-padding checkout-content">		
			<!-- Container -->
			<div class="container">
				<div class="row">				
					<!-- Order Summary -->
					<div class="col-md-12 order-summary">
						<div class="section-padding"></div>
						<!-- Section Header -->
						<div class="section-header">
							<h3>My Shopping Cart</h3>	
							<a href="#" title="Continue Shopping">continue shopping</a>
						</div><!-- Section Header /- -->
						<div class="order-summary-content">
							<table class="shop_cart">
								<thead>
									<tr>
										<th class="product-thumbnail">Product</th>
										<th class="product-name">Product Name</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-price">Unit Price</th>
										<th class="product-subtotal">Sub Total</th>
										<th class="product-remove">Remove</th>
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
										<td data-title="Total" class="product-price">
											<span>£650.00</span>
										</td>	
										<td data-title="Total" class="product-subtotal">
											<span>£650.00</span>
										</td>	
										<td data-title="Total" class="product-remove">
											<a href="#" title="Remove"><img src="images\icon\product-remove.png" alt="Remove"></a>
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
										<td data-title="Unit Price" class="product-price">
											<span>£480.00</span>
										</td>	
										<td data-title="Sub Total" class="product-subtotal">
											<span>£480.00</span>
										</td>	
										<td data-title="Remove" class="product-remove">
											<a href="#" title="Remove"><img src="images\icon\product-remove.png" alt="Remove"></a>
										</td>
									</tr>								
								</tbody>
								<tfoot>
									<tr>
										<td colspan="6">
											<a href="#" title="Clear Shopping Cart">clear shopping cart</a>
											<a href="#" title="Update Shopping Cart">Update shopping cart</a>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div><!-- Order Summary /- -->
					<!-- Coupon Apply -->
					<div class="col-md-4 col-sm-4">
						<div class="code-box">
							<h3>apply coupon code here</h3>
							<p>Enter your coupon code</p>
							<form>
								<input type="text">
								<input type="submit" value="Apply code">
							</form>
						</div>
					</div><!-- Coupon Apply /- -->
					<!-- Estimation -->
					<div class="col-md-4 col-sm-4">
						<div class="code-box">
							<h3>estimate shipping and tax</h3>
							<p>Enter your destination to get a shipping estimate</p>
							<form>
								<label>Counrty*</label>
								<select>
									<option>United States</option>
									<option>United States</option>
									<option>United States</option>
									<option>United States</option>
								</select>
								<label>State/Province</label>
								<select>
									<option>Please select region,state or province</option>
									<option>Please select region,state or province</option>
									<option>Please select region,state or province</option>
									<option>Please select region,state or province</option>
								</select>
								<label>Zip/Postal Code</label>
								<input type="text">
								<input type="submit" value="get a quote">
							</form>
						</div>
					</div><!-- Estimation /- -->
					<!-- Proceed To Checkout -->
					<div class="col-md-4 col-sm-4">
						<div class="wc-proceed-to-checkout">
							<p>Subtotal <span>$1130</span></p>
							<p>Shipping Charges <span>$300</span></p>
							<h5>Grand total <span>$1430</span></h5>
							<a href="#" title="Proceed To Checkout">proceed to checkout</a>
							<label>Checkout  with multiple addresses</label>
						</div>
					</div><!-- Proceed To Checkout /- -->
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
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