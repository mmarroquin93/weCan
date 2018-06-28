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
								<li class="active"><a href="index.blade.php">Home</a></li>
								<li><a href="about.blade.php">About Us</a></li>
								<li><a href="services.blade.php">Services</a></li>
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
	
		<!-- Photo Slider -->
		<div id="photo-slider" class="photo-slider container-fluid no-padding">
			<!-- Main Carousel -->
			<div id="main-slider" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images\slider-image\slider-1.jpg" alt="slider-1">
						<div class="slider-content">
							<div class="container">
								<div class="slide-content slide-content-1">
									<h2>Dog cat pat care</h2>
									<h3>We Take Good Care For<span>Your Lovely Pet</span></h3>
									<p>Those were the days. And we know Flipper lives in a world full of wonder <span>flying there-under under the sea. The Love Boat soon will be making</span></p>
									<a href="#" class="btn btn-default" title="Purchase">Purchase</a>
									<a href="#" class="btn btn-default bg" title="Learn More">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="images\slider-image\slider-2.jpg" alt="slider-2">
						<div class="slider-content">
							<div class="container">
								<div class="slide-content slide-content-2">
									<h3>We Take Good Care For Your Lovely Pets</h3>
									<h2>Dog cat <span>pat care</span></h2>
									<p>Those were the days. And we know Flipper lives in a world full of wonder <span>flying there-under under the sea. The Love Boat soon will be making</span></p>
									<a href="#" class="btn btn-default" title="Purchase">Purchase</a>
									<a href="#" class="btn btn-default bg" title="Learn More">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="images\slider-image\slider-3.jpg" alt="slider-3">
						<div class="slider-content">
							<div class="container">
								<div class="slide-content slide-content-3">
									<h2>Dog cat <span>pat care</span></h2>
									<p>Those were the days. And we know Flipper lives in a world full of wonder <span>flying there-under under the sea. The Love Boat soon will be making another</span> </p>
									<a href="#" class="btn btn-default" title="Purchase">Purchase</a>
									<a href="#" class="btn btn-default bg" title="Learn More">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Main Carousel /-  -->
		</div><!-- Photo Slider /- -->
		
		<!-- Intro -->
		<div id="intro" class="intro container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>What We Do</h3>
					<p>They will have to make the best of things its an uphill climb</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="pet-images bgcolor-default">
							<img src="images\intro\intro-1.jpg" alt="intro-1">
							<div class="content-box">
								<h3>Pet wellness <span>We Take Care On Your Pet</span><i><img src="images\icon\intro-icon-1.png" alt="Intro Icon"></i></h3>
								<p> To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
								<a href="#" title="Read More">Read More <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="pet-images bgcolor-green">
							<img src="images\intro\intro-2.jpg" alt="intro-2">
							<div class="content-box">
								<h3>Pet wellness <span>We Take Care On Your Pet</span><i><img src="images\icon\intro-icon-2.png" alt="Intro Icon"></i></h3>
								<p> To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
								<a href="#" title="Read More">Read More <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="pet-images bgcolor-yellow">
							<img src="images\intro\intro-3.jpg" alt="intro-3">
							<div class="content-box">
								<h3>Pet wellness <span>We Take Care On Your Pet</span><i><img src="images\icon\intro-icon-3.png" alt="Intro Icon"></i></h3>
								<p> To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
								<a href="#" title="Read More">Read More <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Intro /- -->
		
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
			<div class="right-image"><img src="images\services\services.jpg" alt="Service"></div>
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
		
		<!-- Why Choose Us -->
		<div class="why-choose-us container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Why Choose Us</h3>
					<p>They will have to make the best of things its an uphill climb</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images\why-choose\why-choose-1.jpg" alt="why choose">
							</div>
							<div class="why-choose-hover">
								<i><img src="images\icon\medal.png" alt="medal"></i>
								<h3>Best In The Industry</h3>
								<p>Rogers are blown out of their into an orbit which freezes his life which freezes his life</p>							
							</div>
							<a href="#">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images\why-choose\why-choose-1.jpg" alt="why choose">
							</div>
							<div class="why-choose-hover">
								<i><img src="images\icon\customer-support.png" alt="Customer Support"></i>
								<h3>Customer Support</h3>
								<p>Come and listen to a story about Jed a poor mountaineer barely kept his family fed buck rogers to</p>							
							</div>
							<a href="#">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images\why-choose\why-choose-1.jpg" alt="why choose">
							</div>
							<div class="why-choose-hover">
								<i><img src="images\icon\home.png" alt="home"></i>
								<h3>Special Care On Pets</h3>
								<p>The mate was a mighty sailin' man the two skipper brave and sure. Five </p>							
							</div>
							<a href="#">Read more</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="why-choose-content">
							<div class="image-box">
								<img src="images\why-choose\why-choose-1.jpg" alt="why choose">
							</div>
							<div class="why-choose-hover">
								<i><img src="images\icon\dogfeek.png" alt="dogfeek"></i>
								<h3>Best Quality Products</h3>
								<p>Mister we could use a man like Herbert Hoover again. They're creepy and they're kooky mysterious and spooky. They're all togethe</p>							
							</div>
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Why Choose Us /- -->
		
		<!-- Testimonial -->
		<div class="testimonial container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12">
						<div class="section-header">
							<h3>Our Client Says</h3>
						</div>
						<div id="main-carousel" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active item-content">
									<p>Since we're together Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless. The powerless in a world of criminals who operate above the law so lets make it.</p>
									<img src="images\icon\quotes.png" alt="quotes">
									<h2>Roslin Miriyam<span>Premium Client</span></h2>
								</div>
								<div class="item item-content">
									<p>Since we're together Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Michael Knight a young loner on a crusade to champion the cause of the innocent. The helpless. The powerless in a world of criminals who operate above the law so lets make it.</p>
									<img src="images\icon\quotes.png" alt="quotes">
									<h2>Roslin Miriyam<span>Premium Client</span></h2>
								</div>
							</div>
							<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
								<i class="fa fa-angle-left"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
								<i class="fa fa-angle-right"></i>
								<span class="sr-only">Next</span>
							</a>
						</div><!-- Main Carousel /-  -->
					</div>
					<div class="col-md-5 col-sm-12">
						<div class="avatar-member">
							<div class="col-md-6 col-sm-3">
								<div class="avatar-images">
									<img src="images\testimonial\avatar-1.jpg" alt="avatar-1">
								</div>
							</div>
							<div class="col-md-6 col-sm-3">
								<div class="avatar-images">
									<img src="images\testimonial\avatar-2.jpg" alt="avatar-2">
								</div>
							</div>
							<div class="col-md-6 col-sm-3">
								<div class="avatar-images">
									<img src="images\testimonial\avatar-3.jpg" alt="avatar-3">
								</div>
							</div>
							<div class="col-md-6 col-sm-3">
								<div class="avatar-images">
									<img src="images\testimonial\avatar-4.jpg" alt="avatar-4">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Testimonial /- -->
		
		<!-- Team -->
		<div class="team container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="section-header">
					<h3>Our Team On Service</h3>
					<p>They will have to make the best of things its an uphill climb</p>
				</div>
				<div class="row">
					<div class="team-thumb">
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images\team\team-member-1.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images\team\team-member-2.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images\team\team-member-3.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="team-member">
								<div class="team-image-box">
									<img src="images\team\team-member-4.jpg" alt="Team Member">
									<div class="team-content"><h3>Dr. John Francis<span>Veterinary Chief</span></h3></div>
								</div>
								<div class="team-social-icon">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>						
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Team /- -->
		
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
								<img src="images\shop\shop-3.jpg" alt="Shop">
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
		
		<!-- Blog -->
		<div id="blog-section" class="blog-section container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>Updates From Our Shop</h3>
					<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<article>
							<div class="entry-cover">
								<a href="single-blog.blade.php"><img src="images\blog\home-blog-1.jpg" alt="blog-1"></a>
								<a href="single-blog.blade.php" class="read-more">Read More</a>
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>Sep</span>
										<span>28</span>
									</div>
									<div class="post-comment">
										<i><img src="images\icon\comment.png" alt="Comment"></i>
										<a href="#">17</a>
									</div>
									<div class="post-like">
										<i><img src="images\icon\blog-like.png" alt="Comment"></i>
										<a href="#">13</a>
									</div>
									<div class="post-share">
										<a href="#"><i><img src="images\icon\share.png" alt="Comment"></i>Share</a>
									</div>
								</div>						
								<h3 class="entry-title"><a href="single-blog.blade.php">Special care on Pets by physician</a></h3>
								<div class="entry-content">
									<p>The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the Minnow would be lost the minnow lost.</p>
								</div>						
								<div class="entry-footer">
									<div class="post-admin">
										<i><img src="images\icon\admin-ic.png" alt="admin-ic"></i>Posted by<a href="#">Admin</a>
									</div>
									<div class="tags">
										<i><img src="images\icon\tags.png" alt="Tags"></i>
										<a href="#">Pets</a>
										<a href="#">Veterinary</a>
										<a href="#">Dog</a>
									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article>
							<div class="entry-cover">
								<a href="single-blog.blade.php"><img src="images\blog\home-blog-2.jpg" alt="blog-2"></a>
								<a href="single-blog.blade.php" class="read-more">Read More</a>
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>oct</span>
										<span>14</span>
									</div>
									<div class="post-comment">
										<i><img src="images\icon\comment.png" alt="Comment"></i>
										<a href="#">28</a>
									</div>
									<div class="post-like">
										<i><img src="images\icon\blog-like.png" alt="Comment"></i>
										<a href="#">22</a>
									</div>
									<div class="post-share">
										<a href="#"><i><img src="images\icon\share.png" alt="Comment"></i>Share</a>
									</div>
								</div>						
								<h3 class="entry-title"><a href="single-blog.blade.php">Regular Pets Oral Health Checkup</a></h3>
								<div class="entry-content">
									<p>The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the Minnow would be lost the minnow lost.</p>
								</div>						
								<div class="entry-footer">
									<div class="post-admin">
										<i><img src="images\icon\admin-ic.png" alt="admin-ic"></i>Posted by<a href="#">Admin</a>
									</div>
									<div class="tags">
										<i><img src="images\icon\tags.png" alt="Tags"></i>
										<a href="#">Pets</a>
										<a href="#">Checkup</a>
										<a href="#">Doctor</a>
									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
					</div>
					<div class="col-md-4 col-sm-6">
						<article>
							<div class="entry-cover">
								<a href="single-blog.blade.php"><img src="images\blog\home-blog-3.jpg" alt="blog-3"></a>
								<a href="single-blog.blade.php" class="read-more">Read More</a>
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>Nov</span>
										<span>09</span>
									</div>
									<div class="post-comment">
										<i><img src="images\icon\comment.png" alt="Comment"></i>
										<a href="#">15</a>
									</div>
									<div class="post-like">
										<i><img src="images\icon\blog-like.png" alt="Comment"></i>
										<a href="#">19</a>
									</div>
									<div class="post-share">
										<a href="#"><i><img src="images\icon\share.png" alt="Comment"></i>Share</a>
									</div>
								</div>						
								<h3 class="entry-title"><a href="single-blog.blade.php">Experts Guidance on Pet Nutrition</a></h3>
								<div class="entry-content">
									<p>The weather started getting rough the tiny ship was tossed if not for the courage of the fearless crew the Minnow would be lost the minnow lost.</p>
								</div>						
								<div class="entry-footer">
									<div class="post-admin">
										<i><img src="images\icon\admin-ic.png" alt="admin-ic"></i>Posted by<a href="#">Admin</a>
									</div>
									<div class="tags">
										<i><img src="images\icon\tags.png" alt="Tags"></i>
										<a href="#">Pets</a>
										<a href="#">Checkup</a>
										<a href="#">Doctor</a>
									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
					</div>
				</div>
			</div><!-- Container -->
			<div class="section-padding"></div>
		</div><!-- Blog /- -->

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