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
					<div class="col-md-9 col-sm-9 col-xs-12 blog-area single-post">
						<div class="section-title">
							<h3>{{$post->titulo}}</h3>
							<p>{{$post->descripcion}}</p>
						</div>
						<article>
							<div class="entry-cover">
								<img src="../../uploads/{{$post->imagenprincipal}}" alt="blog-1">
							</div>	
							<!-- Post Content -->
							<div class="post-content">
								<div class="post-meta">
									<div class="post-date">
										<span>{{date('M', strtotime($post->created_at)) }}</span>
										<span>{{date('d', strtotime($post->created_at)) }}</span>
									</div>


									<div class="post-comment">
										{{--<i><img src="..\..\images\icon\comment.png" alt="Comment"></i>--}}
										{{--<a href="#">17</a>--}}
									</div>
									<div class="post-like">
										{{--<i><img src="..\..\images\icon\blog-like.png" alt="Comment"></i>--}}
										{{--<a href="#">13</a>--}}
									</div>
									<div class="post-share pull-right">
										<div class="fb-share-button" data-href="https://wecan.com.pe/blog/{{$post->url}}" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwecan.com.pe%2Fblog%2FHola-Mundo&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
									</div>
								</div>

								{!! $post->contenido !!}

								<div class="entry-footer">
									<div class="post-admin" style="text-transform: none;">
										<i><img src="..\..\images\icon\admin-ic.png" alt="admin-ic"></i>Posteado por<a href="#">weCan</a>
									</div>

								</div>
							</div><!-- Post Content /- -->
						</article>
						<!-- About Author -->
						{{--<div class="about-author">--}}
							{{--<div class="author-img">--}}
								{{--<a href="#" title="Selina Carmel"><img alt="author" src="..\..\images\author\author.jpg"></a>--}}
							{{--</div>--}}
							{{--<div class="author-content">--}}
								{{--<a href="#">Selina Carmel</a>--}}
								{{--<p>We've been waiting for you. Where the kisses are hers and hers and his three too Michael Knight a young loner on a crusade to champion the cause of innocent.</p>--}}
								{{--<span class="author-socials">--}}
									{{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
									{{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
									{{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
									{{--<a href="#"><i class="fa fa-google-plus"></i></a>							--}}
								{{--</span>--}}
							{{--</div>--}}
						{{--</div><!-- About Author /- -->				--}}
						<!-- Comment Section -->
						{{--<div class="comment-section">					--}}
							{{--<h3>Comments<span>(3)</span></h3>	--}}
							{{--<!-- Media List -->--}}
							{{--<ul class="media-list">--}}
								{{--<li class="media">--}}
									{{--<div class="media-left">--}}
										{{--<a href="#" title="Larsen Mortin"><img alt="comment" src="..\..\images\comment\comment-1.jpg" class="media-object-1"></a>--}}
									{{--</div>--}}
									{{--<div class="media-body">--}}
										{{--<div class="media-heading">--}}
											{{--<h3>Larsen Mortin<span>July 10, 2015</span></h3>--}}
										{{--</div>--}}
										{{--<a href="#">Reply</a>--}}
										{{--<p>So lets make the most of this beautiful day. Since we're together. It's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Five passengers set sail that day.</p>--}}
									{{--</div>--}}
								{{--</li>--}}
								{{--<li class="media">--}}
									{{--<div class="media-left">--}}
										{{--<a href="#" title="Albert Jonse"><img alt="comment-2" src="..\..\images\comment\comment-2.jpg" class="media-object-1"></a>--}}
									{{--</div>--}}
									{{--<div class="media-body">--}}
										{{--<div class="media-heading">--}}
											{{--<h3>Albert Jonse<span>July 11, 2015</span></h3>--}}
										{{--</div>--}}
										{{--<a href="#">Reply</a>--}}
										{{--<p>Travelled down the road and back again. Your heart is true you're a pal and a confidant. Michael Knight a young loner on a crusade to champion the cause of the innocent.The helpless. The powerless in a world of criminals who operate above the law.Come and knock on our door.</p>--}}
									{{--</div>--}}
								{{--</li>--}}
								{{--<li class="media">--}}
									{{--<div class="media-left">--}}
										{{--<a href="#" title="Milana Rose"><img alt="comment-3" src="..\..\images\comment\comment-3.jpg" class="media-object-1"></a>--}}
									{{--</div>--}}
									{{--<div class="media-body">--}}
										{{--<div class="media-heading">--}}
											{{--<h3>Milana Rose<span>July 10, 2015</span></h3>--}}
										{{--</div>--}}
										{{--<a href="#">Reply</a>--}}
										{{--<p>Those were the days. And we know Flipper lives in a world full of wonder flying there-under under the sea. The Love Boat soon will be making another run. The Love Boat promises something for everyone.</p>--}}
									{{--</div>--}}
								{{--</li>--}}
							{{--</ul><!-- Media List /- -->--}}
							{{--<!-- Leave Comment -->--}}
							{{--<form class="leave-comment">--}}
								{{--<h3>leave your comment</h3>--}}
								{{--<div class="row">--}}
									{{--<div class="form-group col-md-6 col-sm-6 col-xs-12">							--}}
										{{--<input type="text" id="name" class="form-control" placeholder="Your Name*" required="">--}}
									{{--</div>--}}
									{{--<div class="form-group col-md-6 col-sm-6 col-xs-12">--}}
										{{--<input type="email" id="email" class="form-control" placeholder="Your E-Mail*" required="">--}}
									{{--</div>--}}
									{{--<div class="form-group col-md-6 col-sm-6 col-xs-12">--}}
										{{--<input type="text" id="phone" class="form-control" placeholder="Phone">--}}
									{{--</div>--}}
									{{--<div class="form-group col-md-6 col-sm-6 col-xs-12">--}}
										{{--<input type="text" id="subject" class="form-control" placeholder="Subject">--}}
									{{--</div>--}}
									{{--<div class="form-group col-md-12 col-sm-12 col-xs-12">--}}
										{{--<textarea rows="7" class="form-control" name="message" placeholder="Message"></textarea>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<input type="submit" name="post" id="post" value="Post Comment">--}}
							{{--</form>	<!-- Leave Comment /- -->				--}}
						{{--</div><!-- Comment Section /- -->--}}
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
									<li><a href="../../../../blog/categoria/{{$categoria->url}}"> {{$categoria->nombre}}</a></li>

								@endforeach
							</ul>
						</aside><!-- Widget Categories /- -->
						<!-- Widget Recent Post -->
						<aside class="widget widget-recent-post">
							<div class="widget-title">
								<h3>Post Recientes</h3>
							</div>

							@foreach($postes as $posts)
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
						<!-- Recent Post -->
						{{--<aside class="widget widget-archives">--}}
							{{--<div class="widget-title">--}}
								{{--<h3>Archives</h3>						--}}
							{{--</div>--}}
							{{--<ul class="categories-type">--}}
								{{--<li><a href="#" title="June 2015">June 2015</a><span>18</span></li>--}}
								{{--<li><a href="#" title="July 2015">July 2015</a><span>05</span></li>--}}
								{{--<li><a href="#" title="August 2014">August 2014</a><span>12</span></li>--}}
								{{--<li><a href="#" title="September 2014">September 2014</a><span>24</span></li>--}}
							{{--</ul>--}}
						{{--</aside>--}}
						<!-- Widget Tags -->
						<aside class="widget widget-tags">
							<div class="widget-title">
								<h3>Tags</h3>
							</div>
							<div class="tags-content">


									@foreach($tags as $tages)


											<a href="../../../../blog/tag/{{$tages->url}}" title="{{$tages->nombre}}">{{$tages->nombre}}</a>



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
								<li><img src="..\..\images\icon\ftr-location.png" alt="Address">Washington Square Park, <span>NY, United States</span></li>
								<li><img src="..\..\images\icon\ftr-customer.png" alt="Phone"> Customer Support : <span>+ 124 45 76 678</span></li>
								<li><img src="..\..\images\icon\ftr-email.png" alt="Mail"><span>Email :</span><a href="mailto:mail@woodsman.com"> mail@woodsman.com</a></li>
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
								<li><a href="#"><img src="..\..\images\icon\ftr-fb.png" alt="ftr"></a></li>
								<li><a href="#"><img src="..\..\images\icon\ftr-g .png" alt="ftr"></a></li>
								<li><a href="#"><img src="..\..\images\icon\ftr-tumbler.png" alt="ftr"></a></li>
								<li><a href="#"><img src="..\..\images\icon\ftr-dribbble.png" alt="ftr"></a></li>
								<li><a href="#"><img src="..\..\images\icon\ftr-ln.png" alt="ftr"></a></li>
								<li><a href="#"><img src="..\..\images\icon\ftr-tw.png" alt="ftr"></a></li>
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
	<script src="..\..\js\jquery.min.js"></script>

	<!-- Library - Modernizer -->
	<script src="..\..\libraries\modernizr\modernizr.js"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="..\..\libraries\bootstrap\bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="..\..\js\jquery.easing.min.js"></script>

	<!-- Library - jQuery.appear -->
	<script src="..\..\libraries\appear\jquery.appear.js"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="..\..\libraries\owl-carousel\owl.carousel.min.js"></script>
	
	<!-- jQuery For Number Counter -->	
	<script src="..\..\libraries\number\jquery.animateNumber.min.js"></script>

	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	
	<!-- Library - Price Filter -->
	<script src="..\..\libraries\price-filter\jquery-ui.min.js"></script>
	
	<!-- Library - Theme JS -->
	<script src="..\..\js\functions.js"></script>
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