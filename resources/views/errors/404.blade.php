﻿@include('layouts.header')


		<!-- Error Section -->
		<div class="container-fluid no-padding error-section">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<h2>Wow,<span>La pagina que buscabas ya no existe</span></h2>
				<img src="images\icon\error.jpg" alt="error-img">
				<div class="error-box">
					<a href="{{ url('/') }}" title="Go To Home">Ir al Inicio</a>
					<a href="{{ URL::previous() }}" title="Go To Previous Page">Pagina Anterior</a>
				</div>
			</div>
			<div class="section-padding"></div>
		</div><!-- Error Section /- -->

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
	<!-- Main Container -->
	<a id="top"></a>
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