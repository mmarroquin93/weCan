@include('layouts.header')

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1519860001424757&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>




			<!-- Blog List -->
		<div class="container-fluid no-padding blog-list">	
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Blog Area -->
					<div class="col-md-9 col-sm-9 col-xs-12 blog-area">
						<div class="section-title">
							<h3>Encuentra las mejores noticias</h3>
							<p>Tips, historias y más</p>
						</div>



						@foreach($tag->post as $posts)
						<article>
							<div class="entry-cover">
								<a href="../../../../blog/{{$posts->url}}"><img src="../../../uploads/{{$posts->imagenprincipal}}" alt="blog-1"></a>
								<a href="../../../../blog/{{$posts->url}}" class="read-more">Leer más </a>
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>{{date('M', strtotime($posts->created_at)) }}</span>
										<span>{{date('d', strtotime($posts->created_at)) }}</span>
									</div>
									<div class="post-comment">
										{{--<i><img src="images\icon\comment.png" alt="Comment"></i>--}}
										{{--<a href="#">17</a>--}}
									</div>
									<div class="post-like">
										{{--<i><img src="images\icon\blog-like.png" alt="Comment"></i>--}}
										{{--<a href="#">13</a>--}}
									</div>							
									<div class="post-share pull-right">
										{{--<a href="#"><i class="fa fa-reply"></i>Reply</a>--}}
										<div class="fb-share-button" data-href="https://wecan.com.pe/blog/{{$posts->url}}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwecan.com.pe%2Fblog%2FHola-Mundo&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
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
										<i><img src="../../../images\icon\tags.png" alt="Tags"></i>
										@foreach($posts->tag as $tags)
											<a href="../../../blog/tag/{{$tags->url}}">{{$tags->nombre}}</a>
										@endforeach

									</div>
								</div>
							</div><!-- Post Content /- -->
						</article>
						@endforeach
						<div class="section-padding"></div>
						<!-- Pagination -->



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
								<input type="search" id="aa-search-input" class="aa-input-search" placeholder="Buscar post" name="search" autocomplete="off" />
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
								<li><a href="../../../blog/categoria/{{$categoria->url}}"> {{$categoria->nombre}}</a></li>

									@endforeach
							</ul>
						</aside><!-- Widget Categories /- -->
						<!-- Widget Recent Post -->
						<aside class="widget widget-recent-post">
							<div class="widget-title">
								<h3>Post Recientes</h3>
							</div>

							@foreach($post as $posts)
							<div class="recent-post-box">
								<div class="recent-img">
									<a href="../../../blog/{{$posts->url}}"><img src="../../../uploads/{{$posts->imagenprincipal}}" alt="recent-1" style="height: 70px;width: 82px"></a>
								</div>
								<div class="recent-title">
									<a href="#">{{$posts->titulo}}</a>
									<p><span><i class="fa fa-calendar"></i></span>{{date('M', strtotime($posts->created_at)) }} {{date('d', strtotime($posts->created_at)) }}, {{date('Y', strtotime($posts->created_at)) }} </p>
								</div>
							</div>
							@endforeach

						</aside><!-- Widget Recent Post /- -->


						<!-- Widget Tags -->
						<aside class="widget widget-tags">
							<div class="widget-title">
								<h3>Tags</h3>
							</div>
							<div class="tags-content">
								@foreach($tagss as $tages)

@if($tages->url == $url)
										<a href="../../../blog/tag/{{$tages->url}}" title="{{$tages->nombre}}" style="    background-color: #313131;    color: #fff;">{{$tages->nombre}}</a>
	@else
										<a href="../../../blog/tag/{{$tages->url}}" title="{{$tages->nombre}}">{{$tages->nombre}}</a>
	@endif


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
							<p class="copyright">copyrights &copy; 2019 C.H.P </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</div><!-- Main Container -->
	<!-- JQuery v1.11.3 -->
	<script src="../../../js\jquery.min.js"></script>

	<!-- Library - Modernizer -->
	<script src="../../../libraries\modernizr\modernizr.js"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="../../../libraries\bootstrap\bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="../../../js\jquery.easing.min.js"></script>

	<!-- Library - jQuery.appear -->
	<script src="../../../libraries\appear\jquery.appear.js"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="../../../libraries\owl-carousel\owl.carousel.min.js"></script>
	
	<!-- jQuery For Number Counter -->	
	<script src="../../../libraries\number\jquery.animateNumber.min.js"></script>

	<!-- Library - Google Map API -->
	<script src="../../../https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Price Filter -->
	<script src="../../../libraries\price-filter\jquery-ui.min.js"></script>
	
	<!-- Library - Theme JS -->
	<script src="../../../js\functions.js"></script>



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
                        return '<div class="recent-post-box" style="display: inline-block;\n' +
                            '    margin-top: 20px;\n' +
                            '    padding-bottom: 20px;\n' +
                            '    width: 100%;\n' +
                            '    position: relative;"><a href="../../../../blog/'+suggestion.url +'">\n' +
                            '                            <div class="recent-img">\n' +
                            '                            <a href="../../../../blog/'+suggestion.url +'"><img src="../../../uploads/'+suggestion.imagenprincipal +'" alt="recent-2" style="height: 70px;width: 82px"></a>\n' +
                            '                            </div>\n' +
                            '                            <div class="recent-title">\n' +
                            '                            <a href="../../../../blog/'+suggestion.url +'">'+suggestion.titulo +'</a>\n' +
                            '                        <p>'+suggestion.descripcion.substr(0, 100) +'</p>\n' +
                            '                        </div>\n' +
                            '                       </a> </div>\n';






                        // '<a href="../../../../blog/'+suggestion.url+'" >'+'<span>'+
                        // suggestion._highlightResult.titulo.value + '</span><span>' +
                        // suggestion._highlightResult.descripcion.value + '</span></a>'


                    }
                }
            });
	</script>


</body>
</html>