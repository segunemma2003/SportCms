@extends('pages.layouts.newsmaster')
@section('title','The Official Website of Enyimba Football Club')
@section('content')
	<!-- Main Content -->
	<main class="main-content">
		<!-- Blog Detail -->
		<div class="page-theme-padding white-bg">	
		 <div class="container">
			<div class="row">
			<!-- Blog Content -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
				<!-- Blog detail -->
						<div class="blog-detail-holder">
							<div class="author-header">
								<h2>{!!$postdetails->title!!}</h2>
								<div class="aurhor-img-name pull-left">
									<img src="{{asset('cdn/img/author-avatar.png')}}" alt="">
									<strong>by {{$postdetails->user->name}}</strong>
									<span>on {{$postdetails->created_at->diffForhumans()}}</span>
								</div>
								<div class="share-option pull-right">
									
									<div id="show-social-icon1" class="on-hover-share">
										<ul class="social-icons">
											<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<article> </article>
							<div class="blog-detail">
                            
								<figure class="news-image">
                                
									<img src="/storage/upload/{{$postdetails->title_image}}" alt="" >
                                    
								</figure>
                                <div class="image-desc"><?php //echo($rsNews->getColumnVal("ImageDesc")); ?></div>
                                
								<article>{!!$postdetails->body!!}		  
								</article>
							</div>
							<div class="tags-holder">
<ul class="social-icons pull-right">
				  <li>Share this post</li>
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="youtube" href="#"></a></li>
									<li><a class="pinterest" href="#"></a></li>
								</ul>
							</div>
							<!--<div class="next-prev-option">
								<a href="#" class="prev-blog pull-left">
									<img src="../main/images/blog-detail/prev-img.jpg" alt="">
									<span><i class="fa fa-angle-left"></i>Previous Post</span>
									<h5>...</h5>
									<span class="m-0">...</span>
								</a>
								<a href="#" class="next-blog pull-right">
									<img src="../main/images/blog-detail/next-img.jpg" alt="">
									<span>Next Post<i class="fa fa-angle-right"></i></span>
									<h5>...</h5>
									<span class="m-0">...</span>
								</a>
							</div>-->
							<div class="about-aurthor-holder theme-margin-bottom"> </div>
						</div>
						<!-- Blog Detail -->

						<!-- Blog Grid View -->						<!-- Blog Grid View -->

						<!-- Comment Section -->
						
						<!-- Comment Section -->

						<!-- Leave a Reply  -->
						
						<!-- Leave a Reply  -->

					</div>
					<!-- Blog Content -->

					<!-- Aside -->
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						
						<!-- Search Bar -->
						<div class="aside-search-bar">
							<input class="form-control" type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</div>
						<!-- Search Bar -->

						<!-- Aside Widget -->						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Other News</span></h3>
							<div class="Popular-news">
								<ul>
								@foreach($posts as $post)									
								 	<li>
									 	

										<img src="/storage/upload/{{$post->title_image}}" alt="" width="60" height="48">
									    <h5><a href="{{route('show', $post->id)}}">{{$post->title}}</a></h5>
									    <span class="red-color"><i class="fa fa-clock-o"></i>{{$post->created_at->diffForhumans()}}</span>
								    </li>	
								@endforeach		
									
									
									
								</ul>
							</div>
						</div>
					  <div class="aside-widget">
						  <h3><span>Tweet</span></h3>
						  <div class="twitter-list"> <a class="twitter-timeline"  href="https://twitter.com/EnyimbaFC" data-widget-id="499704007678382081">Tweets by @EnyimbaFC</a>
						    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					      </div>
					  </div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						
						<!-- Aside Widget -->

						<!-- Aside Widget -->
					  <div class="aside-widget">
							<h3><span>Archive</span></h3>
							<div id="calendar" class="calendar"></div>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->						<!-- Aside Widget -->

						<div class="aside-widget">
							<a href="#"></a>
						</div>
						<!-- Aside Widget -->

					</div>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog Detail -->

	</main>
	<!-- Main Content -->
@endsection