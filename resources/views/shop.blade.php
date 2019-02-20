@include('layouts.header')
	

		
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
							<h3>Selecciona un producto</h3>
							<ul>

								@foreach($categorias as $categoria)
									<li><input type="checkbox" id="categoria{{$categoria->id}}" name="chek[]" class="categochek"> {{$categoria->nombre}}</li>
									@endforeach


							</ul>
						</aside><!-- Widget Select Product /- -->


						<!-- Widget Best Sellers -->
						{{--<aside class="widget widget-best-seller">--}}
							{{--<h3>Lo mas vendido</h3>--}}
							{{--<!-- Seller Box -->--}}
							{{--<div class="seller-box">--}}
								{{--<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-1.jpg" alt="Seller"></a></div>--}}
								{{--<h4>Pet Food <span>$ 32.00</span></h4>--}}
								{{--<div class="rating">--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star fill-color"></i>--}}
								{{--</div>--}}
							{{--</div><!-- Seller Box /- -->--}}
							{{--<!-- Seller Box -->--}}
							{{--<div class="seller-box">--}}
								{{--<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-2.jpg" alt="Seller"></a></div>--}}
								{{--<h4>Pet bed <span>$ 16.00</span></h4>--}}
								{{--<div class="rating">--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
								{{--</div>--}}
							{{--</div><!-- Seller Box /- -->--}}
							{{--<!-- Seller Box -->--}}
							{{--<div class="seller-box">--}}
								{{--<div class="product-img"><a href="#" title="Product"><img src="images\shop\seller-3.jpg" alt="Seller"></a></div>--}}
								{{--<h4>Pet Outfit <span>$ 24.00</span></h4>--}}
								{{--<div class="rating">--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star"></i>--}}
									{{--<i class="fa fa-star fill-color"></i>--}}
								{{--</div>--}}
							{{--</div><!-- Seller Box /- -->--}}
						{{--</aside><!-- Widget Best Sellers /- -->--}}
						{{----}}



					</div><!-- Product Filter /- -->
					<!-- Product Box --> 
					<div class="col-md-9 col-sm-8">
						<!-- Section Header -->
						<div class="section-header">
							<h3>Nuestro mejores productos</h3>
							<p>encuentra la comida ideal para tu engreido</p>
						</div><!-- Section Header /- -->
						<!-- Products -->
						<div class="products">
							<!-- Product Box -->

							@foreach($productos as $producto)
							<div class="col-md-4 col-sm-6 col-xs-12 cat-{{$producto->id_categoria}}  categoria-prod">
								<div class="product-box">
									<div class="product-image">
										<img src="../../../../uploads/{{$producto->imagen}}" alt="{{$producto->nombre}}">


										<a class="cart" href="#"><i><img src="images\icon\addtocart.png" alt="Add To Cart"></i>Agregar Al carrito</a>



										{{--<div class="wishlist">--}}
											{{--<a href="#"><img src="images\icon\like-icon.png" alt="like icon"></a>--}}
											{{--<a href="#"><img src="images\icon\wishlist.png" alt="wishlist"></a>--}}
										{{--</div>--}}
										{{----}}

									</div>
									<div class="product-content">
										<h2>{{$producto->nombre}}</h2>
										<h3>

											<A href="#"><i class="fa fa-paw"> saber mas</i></A>
										{{--<i class="fa fa-star"></i>--}}
										{{--<i class="fa fa-star"></i>--}}
										{{--<i class="fa fa-star"></i>--}}
										{{--<i class="fa fa-star-half-o"></i>--}}


											<span>S/. {{$producto->precio}}</span></h3>
									</div>
								</div>
							</div><!-- Product Box /- -->


								@endforeach



						</div><!-- Products /- -->
						<div class="section-padding"></div>


						{{----}}
						{{----}}
						{{--<!-- Pagination -->--}}
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
						{{--</ul><!-- Pagination /- -->--}}
						{{----}}
						{{----}}

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


<script>

    $(document).ready(function() {





        $('.categochek').change(function() {



            $('input[type=checkbox]').each(function () {
                if(this.checked){

                    str=$(this).attr('id').replace('categoria', '');

                    stral='.cat-'+str;

                    $(stral).css('display','block');




                }else{
                    str=$(this).attr('id').replace('categoria', '');

                    stral='.cat-'+str;

                    $(stral).css('display','none');


				}
            });






          if($('input[name="chek[]"]:checked').length == 0){


              $('.categoria-prod').css('display','block');
		  }




        });



    });




</script>
</body>
</html>