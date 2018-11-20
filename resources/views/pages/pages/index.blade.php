@extends('pages.layouts.masters')
@section('title','The Official Website of Enyimba Football Club')
@section('content')
@include('pages.layouts.slider-holder')
	<!-- Slider Holder -->

	<!-- Main Content -->
	<main class="main-content">
		
		<!-- Match Detail -->
		<section class="theme-padding-bottom bg-fixed">
			<div class="container">

				<!-- Add Banners -->
				<div class="add-banners">
					
				</div>
				<!-- Add Banners -->

				<!-- Match Detail Content -->
				<div class="match-detail-content">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="row">

								<!-- Next Matches -->
								
								@include('pages.layouts.next-match')
								
								<!-- Next Matches -->

								<!-- Upcoming Fixture -->
								
                                @include('pages.layouts.upcoming-fixtures')
								
								<!-- Upcoming Fixture -->

								<!-- Latest News -->
								
								<div class="col-xs-12">
									<div class="latest-news-holder">
										<h3><span>Other News</span></h3>

										<!-- latest-news Slider -->
										<div class="tems-container row no-gutters white-bg">

											<!-- Slider -->
											<div class="tem tem-0 col-sm-9">
												<ul id="latest-news-slider" class="latest-news-slider">

												    <li>
													    <img src="" alt="" height="100%" width="100%" vertical-align="text-top">
					
												   
												    
												</ul>
											</div>
											<!-- Slider -->

											<!-- Thumnail -->
											<div class="tem tem-0 col-sm-3 lnt">
												<ul id="latest-news-thumb" class="latest-news-thumb">

												    <li>
													    <p>something</p>
													    <span class="cap-date"></span>
												      </li>
													  
												</ul>
												<ul class="news-thumb-arrows">
													<li class="prev"><span class="fa fa-angle-up"></span></li>
													<li class="next"><span class="fa fa-angle-down"></span></li>
												</ul>
											</div>
											<!-- Thumnail -->

										</div>
										<!-- latest-news Slider -->

									</div>
								</div>
								
								<!-- Latest News -->

							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="row">

								<!-- Last Match -->
								
								@include('pages.layouts.last-match')
								
								<!-- Last Match -->

								<!-- Points Table -->
								
								@include('pages.layouts.points-table')
								
								<!-- Points Detail -->

							</div> 
						</div>
					</div>
				</div>
				<!-- Match Detail Content -->

			</div>
           
          
            
            
		</section>
		<!-- Match Detail -->

		<!-- Player Features And History -->
		<section class="red-section" style=" background: url(cdn/img/bgbg.jpg) no-repeat; background-size: cover;">

			<!-- Red Section Heading -->
			<div class="red-sec-heading">
				<div class="container">
					<h5 class="white-text">Team Stats</h5>
				</div>
			</div>
			<!-- Red Section Heading -->

			<!-- Red saection Content -->
			<div class="container">
				<div class="row">
					
					<!-- Player Featuer -->
					<div class="col-sm-6">
						<div class="theme-padding top-profiler">
							<img class="player-img animate fadeInLeft" data-wow-delay="0.2s" src="{{ asset('cdn/img/ft-player.png') }}" alt="">
							<strong class="number-batch style-1">13</strong>
							
						</div>
					</div>
					<!-- Player Featuer -->

					<!-- Player History -->
					<div class="col-sm-6">
						<ul id="video-slider" class="video-slider">
							<li class="red-sec-widget player-history h-white p-white">
								<h3>Goalscorers</h3>
								<p>Our sharpshooters this season</p>
								<div class="player-video-sec">
									<div class="video video-post">
										<img src="{{ asset('main/images/video-gallery/img-01.jpg') }}" alt="">
										<span class="play-lable fa fa-video-camera"></span>
										<a class="position-center-center play-icon" href="http://www.youtube.com/watch?v=3565788" data-rel="prettyPhoto[video]"><i class="fa fa-video-camera"></i></a>
									</div>
								</div>
							</li>
							
							
						</ul>
					</div>
					<!-- Player History -->

				</div>
			</div>
			<!-- Red saection Content -->
 
		</section>
		<!-- Player Features And History -->

		<!-- Facts Accounter -->
		
		@include('pages.layouts.facts-counter')
		
		<!-- Facts Accounter -->
        
        <!-- Separator -->
			<div class="container text-center">
				<span class="sprater"><i class="fa fa-futbol-o"></i></span>
			</div>
			<!-- Separator -->

		<!-- Gallery And Team -->
		<div class="theme-padding gallery-holder">
			
			<!-- Gallery v-3 -->
			<div class="">
				<div class="container">

					<!-- Main Heading -->
					<h3><span>Meet the Stars</span><a class="view-all pull-right" href="#"> view all<i class="fa fa-angle-double-right"></i></a></h3>
					<!-- Main Heading -->

					

				</div>
			</div>
			<!-- Gallery v-3 -->

			

			<!-- Team -->
			
			@include('pages.layouts.meet-stars')
			
			<!-- Team -->

		</div>
		<!-- Gallery And Team -->

		<!-- Products -->
		
        
		<!-- Products -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	
	

@endsection