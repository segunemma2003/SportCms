@extends('pages.layouts.masters')
@section('title', 'indexx')
@section('content')
@include('pages.layouts.slider-holder')


  
	<!-- Page Heading & Breadcrumbs  -->

	<!-- Page Heading banner -->
	
	<div class="bring-forward" data-appear-top-offset="0" data-parallax="scroll" data-image-src="{{asset ('main/images/parallax-bg/news.jpg') }}"> 
		<div class="container">
			<h2 class="ptitle">Club News</h2>
		</div>
	</div>
	
  <!-- Page Heading banner -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog Detail -->
		<div class="page-theme-padding white-bg">	
		  <div class="container">	
			<div class="row">
			  <!-- Blog Content -->
					
					<!-- Aside -->
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
						
						<!-- Search Bar -->
						<div class="aside-search-bar">
							<input class="form-control" type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</div>


						<!-- Aside Widget -->
						<div class="aside-widget">
							<h3><span>Other News</span></h3>
							<div class="Popular-news">
								<ul>
								@foreach ($pass as $pass)	
 <!-- while(!$rsNewsList->atEnd()) { -->
								    <li>
									    <img src="/storage/upload/{{$pass->title_image}}>" alt="" width="60" height="48">
									    <h5><a href="{{route('show', $pass->id)}}">{{$pass->title}}</a></h5>
									    <span class="red-color"><i class="fa fa-clock-o"></i>{{$pass->created_at->diffForhumans()}}</span>
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

@endsection