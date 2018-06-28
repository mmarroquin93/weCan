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
					<h3>Shop - Product List</h3>
					<ol class="breadcrumb">
						<li><a href="index.blade.php">Home</a></li>
						<li><a href="#">shop</a></li>
						<li class="active">Product List</li>
					</ol>
				</div><!-- Banner Heading /- -->
			</div><!-- Container /- -->
		</div><!-- Page Banner /- -->
		
		<!-- Product List -->
		<div id="product-list" class="product-list container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Product Filter -->
					<div class="col-md-3 col-sm-4">
						<!-- Widget Select Product -->
						<aside class="widget widget-select-product">
							<h3>Select Product</h3>
							<ul>
								<li><input type="checkbox"> Neck Strap <span>158</span></li>
								<li><input type="checkbox"> Pet Food <span>430</span></li>
								<li><input type="checkbox"> Pet Toys <span>279</span></li>
								<li><input type="checkbox"> Pet Outfits <span>365</span></li>
								<li><input type="checkbox"> Pet Cage <span>189</span></li>
								<li><input type="checkbox"> Soap &amp; Brushes <span>763</span></li>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Filter Price -->
						<aside class="widget widget-price-filter">
							<h3>Filter By Price</h3>
							<div class="price-filter">
								<div id="slider-range"></div>
								<div class="price-input">
									<label>Price:</label>
									<span id="amount"></span>
									<label> - </label>
									<span id="amount2"></span>
								</div>
								<a href="#" class="filter">Filter</a>
							</div>
						</aside><!-- Widget Filter Price /- -->
						<!-- Widget Brands -->
						<aside class="widget widget-brands">
							<h3>Brands</h3>
							<ul>
								<li><input type="checkbox"> Pet Store <span>72</span></li>
								<li><input type="checkbox"> Shoppy Pets <span>24</span></li>
								<li><input type="checkbox"> E-Pet <span>10</span></li>
								<li><input type="checkbox"> Healthy Pet food <span>56</span></li>
								<li><input type="checkbox"> Nutro Pet <span>12</span></li>
								<li><input type="checkbox"> Pet Daisy <span>88</span></li>
							</ul>
						</aside><!-- Widget Brands /- -->
						<!-- Widget Best Sellers -->
						<aside class="widget widget-best-seller">
							<h3>Widget Best Sellers</h3>
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-1.jpg" alt="Seller"></a></div>
								<h4>Pet Food <span>$ 32.00</span></h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star fill-color"></i>
								</div>
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-2.jpg" alt="Seller"></a></div>
								<h4>Pet bed <span>$ 16.00</span></h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-3.jpg" alt="Seller"></a></div>
								<h4>Pet Outfit <span>$ 24.00</span></h4>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star fill-color"></i>
								</div>
							</div><!-- Seller Box /- -->
						</aside><!-- Widget Best Sellers /- -->
					</div><!-- Product Filter /- -->
					<!-- Product Box --> 
					<div class="col-md-9 col-sm-8">
						<!-- Section Header -->
						<div class="section-header">
							<h3>Our Best Quality Products</h3>
							<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
						</div><!-- Section Header /- -->
						<!-- Products -->
						<div class="products">
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-1.jpg" alt="Shop">
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
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-2.jpg" alt="Shop">
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
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-3.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
										<span class="new">new</span>
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
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-4.jpg" alt="Shop">
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
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-5.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Pet Comb</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$72.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-6.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Neck Harness with Bell</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$16.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-7.jpg" alt="Shop">
										<span class="sold">Sold Our</span>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Elezabethan Collar</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$60.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-8.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Pet Tablets</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$224.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-9.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Pet Bed</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i><span>$540.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-10.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
									</div>
									<div class="product-content">
										<h2>Pet Soap &amp; Brushes</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$140.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-11.jpg" alt="Shop">
										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Add To Cart</a>
										<div class="wishlist">
											<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>
											<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>
										</div>
										<span class="new">new</span>
									</div>
									<div class="product-content">
										<h2>Pet Woolen Materials</h2>
										<h3><i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i><span>$150.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
							<!-- Product Box -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="product-box">
									<div class="product-image">
										<img src="images\shop\shop-12.jpg" alt="shop">
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
										<i class="fa fa-star"></i><span>$970.00</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->
						</div><!-- Products /- -->
						<div class="section-padding"></div>
						<!-- Pagination -->
						<ul class="pagination">					
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&lt;</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&gt;</span>
								</a>
							</li>					
						</ul><!-- Pagination /- -->
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Product List /- -->


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