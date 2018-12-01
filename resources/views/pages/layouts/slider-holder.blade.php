<div class="slider-holder">

<!-- Banner slider -->
		<ul id="main-slides" class="main-slides">

<!-- Itme -->
		<li>
			<div id="animated-slider" class="carousel slide carousel-fade">

<!-- Wrapper for slides -->
			@foreach($post as $postt)
				<div class="carousel-inner" role="listbox">

					<div class=" item active">
								<div class="slide-image"><img src="/storage/upload/{{$postt->title_image}}" alt="" height='800px'></div>


									<div class="position-center-x full-width">
										<div class="container">
											<div class="banner-caption style-1 p-white h-white pull-left">
													<h1 class="animated fadeInUp delay-1s">{{$postt->title}}</h1>
													<p class="animated fadeInUp delay-2s">{{strip_tags($postt->summary)}}</p>

														<a class="btn lg red-btn animated fadeInRight delay-3s" href="#"><i>+</i>Read More</a>
											</div>
										</div>
									</div>


								</div>

<!-- Item -->

<!-- Item -->
							</div>
<!-- Wrapper for slides -->

<!-- Nan Control -->
<a class="slider-nav next" href="{{$post->nextPageUrl()}}" data-slide="prev"><i class="fa fa-long-arrow-right"></i></a>
<a class="slider-nav prev" href="{{$post->previousPageUrl()}}" data-slide="next"><i class="fa fa-long-arrow-left"></i></a>
<!-- Nan Control -->

<!-- Indicators -->
<ul class="carousel-indicators">
@foreach($post as$postw)
<li data-target="#animated-slider" data-slide-to="0" class="active"></li>
<li data-target="#animated-slider" data-slide-to="1"></li>
@endforeach
</ul>
<!-- Indicators -->

</div>
@endforeach
</li>

<li>
<img src="{{ asset('main/images/banner-bgs/img-01.jpg') }}" alt="">
<div class="position-center-center">
<div class="container theme-padding">
<div class="pager-heading match-detail h-white">
	<span class="pull-left"><img src="{{ asset('main/images/team-logos/KAT.png') }}" alt="" width="270px
	" height="280px" class="last-match-logo"></span>
	<div class="vs-match-heading position-center-center">
		<strong class="vs-match-result">2<span>-</span>0</strong><span style="text-align: center"></span>
		<span class="end-time"><i class="fa fa-clock-o"></i>29' Martins Usule</span>
	<span class="end-time"><i class="fa fa-clock-o"></i>68' Usman Bara'u</span>

	</div>
	<span class="pull-right"><img src="{{ asset('main/images/team-logos/ENY.png') }}" alt="" width="280px" height="280px" class="last-match-logo"></span>
</div>
</div>
</div>
</li>


</ul>
<!-- Banner slider -->

<!-- Slides Thmnail -->
<div class="main-slides-thumb">
<div class="container">
<ul id="slides-thmnail" class="slides-thmnail">
<li>
<span><i class="fa fa-sliders"></i>Trending</span>
</li>


<li>
<span><i class="fa fa-bar-chart"></i>Last Result</span>
</li>
</ul>

</div>
</div>
<!-- Slides Thmnail -->

</div>