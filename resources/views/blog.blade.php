<!DOCTYPE html>
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
								<li class="dropdown active">
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
		

		<!-- Blog List -->
		<div class="container-fluid no-padding blog-list">	
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Blog Area -->
					<div class="col-md-9 col-sm-9 col-xs-12 blog-area">
						<div class="section-title">
							<h3>Updates from Our Shop</h3>
							<p>In a freak mishap ranger and its pilot captain william buck rogers are blown</p>
						</div>

						@foreach($post as $posts)
						<article>
							<div class="entry-cover">
								<a href="../blog/{{$posts->url}}"><img src="../uploads/{{$posts->imagenprincipal}}" alt="blog-1"></a>
								<a href="../blog/{{$posts->url}}" class="read-more">Leer más </a>
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
									<div class="post-share pull-right">
										<a href="#"><i class="fa fa-reply"></i>Reply</a>
										<a href="../blog/{{$posts->url}}"><i><img src="images\icon\share.png" alt="Comment"></i>Share</a>
									</div>
								</div>						
								<h3 class="entry-title"><a href="../blog/{{$posts->url}}">{{$posts->titulo}}</a></h3>
								<div class="entry-content">
									<p> {{$posts->titulo}}</p>
								</div>						
								<div class="entry-footer">
									<div class="post-admin">
										{{--<i><img src="images\icon\admin-ic.png" alt="admin-ic"></i>Posted by<a href="#">Admin</a>--}}
									</div>
									<div class="tags">
										<i><img src="images\icon\tags.png" alt="Tags"></i>
										<a href="#">Pets</a>
										<a href="#">Veterinary</a>
										<a href="#">Dog</a>
										<a href="#">Ear</a>
										<a href="#">Cleaning</a>
										<a href="#">Doctor</a>
									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
						@endforeach
						<div class="section-padding"></div>
						<!-- Pagination -->


					{{ $post->links() }}
						{{--<ul class="pagination">					--}}
							{{--<li>--}}
								{{--<a href="#" aria-label="Previous">--}}
									{{--<span aria-hidden="true">&lt;</span>--}}
								{{--</a>--}}
							{{--</li>--}}
							{{--<li><a href="#">1</a></li>--}}
							{{--<li class="active"><a href="#">2</a></li>--}}
							{{--<li><a href="#">3</a></li>--}}
							{{--<li>--}}
								{{--<a href="#" aria-label="Next">--}}
									{{--<span aria-hidden="true">&gt;</span>--}}
								{{--</a>--}}
							{{--</li>					--}}
						{{--</ul>--}}
						<!-- Pagination /- -->
					</div><!-- Blog Area/- -->			
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-3 col-xs-12 widget-area">
						<!-- Widget Search -->
						<aside class="widget widget-search">
							{{--<div class="input-group">--}}
								{{--<input type="text" required="" class="form-control" placeholder="Search Post Here...">--}}
								{{--<span class="input-group-btn">--}}
									{{--<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>--}}
								{{--</span>--}}
							{{--</div>--}}



							<div class="aa-input-container" id="aa-input-container">
								<input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for players or teams..." name="search" autocomplete="off" />
								<svg class="aa-input-icon" viewBox="654 -372 1664 1664">
									<path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
								</svg>
							</div>



						</aside><!-- Widget Search /- -->
						<!-- Widget Categories -->
						<aside class="widget widget-categories">
							<div class="widget-title">
								<h3>Categorias</h3>
							</div>
							<ul class="categories-type">
								@foreach($categorias as $categoria)
								<li><a href="#"> {{$categoria->nombre}}</a></li>

									@endforeach
							</ul>
						</aside><!-- Widget Categories /- -->
						<!-- Widget Recent Post -->
						<aside class="widget widget-recent-post">
							<div class="widget-title">
								<h3>Recent Post</h3>						
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images\widget\recent\recent-1.jpg" alt="recent-1"></a>
								</div>
								<div class="recent-title">
									<a href="#">Like Robinson Crusoe it is Primitive as can be</a>
									<p><span><i class="fa fa-calendar"></i></span>July 29, 2015</p>
								</div>
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images\widget\recent\recent-2.jpg" alt="recent-2"></a>
								</div>
								<div class="recent-title">
									<a href="#">There's nothing can hold me when I hold you</a>
									<p><span><i class="fa fa-calendar"></i></span>Aug 22, 2015</p>
								</div>
							</div>
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="#"><img src="images\widget\recent\recent-3.jpg" alt="recent-3"></a>
								</div>
								<div class="recent-title">
									<a href="#">Five passengers set sail that day for a three hour</a>
									<p><span><i class="fa fa-calendar"></i></span>Sep 22, 2015</p>
								</div>
							</div>
						</aside><!-- Widget Recent Post /- -->


						<!-- Widget Tags -->
						<aside class="widget widget-tags">
							<div class="widget-title">
								<h3>Popular Tags</h3>						
							</div>
							<div class="tags-content">
								@foreach($tags as $tag)
								<a href="#" title="{{$tag->nombre}}">{{$tag->nombre}}</a>

									@endforeach
							</div>
						</aside><!-- Widget Tags /- -->				
					</div><!-- Widget Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- Blog List /- -->

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



	<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
	<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>

	<script>
        var client = algoliasearch('GR0MC7KRYS', 'c58cda73d80442f706486f4d5be666eb');
        var index = client.initIndex('posts');

        autocomplete('#aa-search-input',
            { hint: false }, {
                source: autocomplete.sources.hits(index, {hitsPerPage: 5}),

                displayKey: 'name',

                templates: {

                    suggestion: function(suggestion) {
                        return '         <div class="recent-post-box" style="padding-bottom: 0px;">\n' +
                            ' <div class="recent-img">\n' +
                            ' <a href="#"><img src="../../../uploads/'+suggestion.imagenprincipal +'" style="width: 82px; height:72px;margin-top: -25%;"></a>' +
                            ' </div>\n' +
                            ' <div class="recent-title" style="margin-top: -10%;">\n' +

                            ' <a href="#">'+suggestion.titulo +'</a></br>'+

                            ' <p style="    margin-bottom: 0px;">'+suggestion.descripcion.substr(0, 100) +'</p></br>'	+
                            ' </div>\n' +
                            ' </div>';



                        // '<a href="../../../../blog/'+suggestion.url+'" >'+'<span>'+
                        // suggestion._highlightResult.titulo.value + '</span><span>' +
                        // suggestion._highlightResult.descripcion.value + '</span></a>'


                    }
                }
            });
	</script>


</body>
</html>