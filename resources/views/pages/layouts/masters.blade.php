<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>@yield('title')</title>
<!-- StyleSheets -->
<link href="{{ asset('main/xtable/assets/css/fresh-bootstrap-table.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('main/css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('main/css/main.css')}}">	
<link rel="stylesheet" href="{{asset('main/css/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('main/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('main/css/transition.css')}}">
<link rel="stylesheet" href="{{asset('main/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('main/style.css')}}">
<link rel="stylesheet" href="{{asset('main/css/color.css')}}">
<link rel="stylesheet" href="{{asset('cdn/css/mystyle.css')}}">
<link rel="stylesheet" href="{{asset('main/css/responsive.css')}}">
<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800|Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- JavaScripts -->
<script src="{{ asset('main/js/vendor/modernizr.js') }}"></script>
<script src="{{ asset('cdn/js/jquery.matchHeight.js') }}"></script>

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#205ED0">

<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#205ED0">

<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#205ED0">

<!-- LayerSlider -->
<!-- LayerSlider stylesheet -->
<link rel="stylesheet" href="{{ asset('layerslider/css/layerslider.css') }}" type="text/css">
 
<!-- External libraries: jQuery & GreenSock -->
<script src="{{ asset('layerslider/js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>
 
<!-- LayerSlider script files -->
<script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
<script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>

<!-- LayerSlider plugin files -->
	<link rel="stylesheet" href="{{ asset('layerslider/plugins/popup/layerslider.popup.css') }}">
	<script src="{{ asset('layerslider/plugins/popup/layerslider.popup.js') }}"></script>



</head>
<body class="mH">

<!-- Wrapper -->
<div class="wrap push">

	<!-- Header -->
	<header class="header style-3">

		<!-- Top bar -->
		
		@include('pages.layouts.topbar')
		
		<!-- Top bar -->

		<!-- Nav -->
		<div class="nav-holder">
			<div class="container">
				<div class="maga-drop-wrap">

					<!-- Logo -->
					<div class="logo">
						<a href="./"><img src="{{ asset('main/images/efc.png') }}" alt=""></a>
					</div>
					<!-- Logo -->

					

					<!-- Nav List -->
                    <div class="site-title">Enyimba Football Club</div>
					<ul class="nav-list pull-right">
 						
                        <li><a href="#">The Club</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Match Centre</a></li>
						<li><a href="#">Fanzone</a></li>
						<li><a href="#">Contact Us</a></li>    
                                                                                      
					</ul>
					<!-- Nav List -->

				</div>
			</div>
		</div>
		<!-- Nav -->

	</header>
	<!-- Header -->

	<!-- Slider Holder -->
	@yield('content')
    @include('pages.layouts.footer')
	   
       <!-- Footer -->
   
   </div>
   <!-- Wrapper -->
   
   <!-- Slide Menu -->
   @include('pages.layouts.mobile-menu')
   
<!-- Slide Menu -->

<!-- Java Script -->
<script src="{{ asset('main/js/vendor/jquery.js') }}"></script>        
<script src="{{ asset('main/js/vendor/bootstrap.min.js') }}"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('main/js/gmap3.min.js') }}"></script>				
<script src="{{ asset('main/js/bigslide.js') }}"></script>		
<script src="{{ asset('main/js/slick.js') }}"></script>	
<script src="{{ asset('main/js/waterwheelCarousel.js') }}"></script>
<script src="{{ asset('main/js/contact-form.js') }}"></script>	
<script src="{{ asset('main/js/countTo.js') }}"></script>		
<script src="{{ asset('main/js/datepicker.js') }}"></script>		
<script src="{{ asset('main/js/rating-star.js') }}"></script>							
<script src="{{ asset('main/js/range-slider.js') }}"></script>				
<script src="{{ asset('main/js/spinner.js') }}"></script>			
<script src="{{ asset('main/js/parallax.js') }}"></script>			   	 
<script src="{{ asset('main/js/countdown.js') }}"></script>	
<script src="{{ asset('main/js/appear.js') }}"></script>		 		
<script src="{{ asset('main/js/prettyPhoto.js') }}"></script>			
<script src="{{ asset('main/js/wow-min.js') }}"></script>						
<script src="{{ asset('main/js/main.js') }}"></script>	



<script type="text/javascript" src="{{ asset('main/xtable/assets/js/bootstrap-table.js') }}"></script>



    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = true;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
    
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                pageSize: 8,
                pageList: [8,10,25,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
                        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
    
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
            
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
            
        });
       
            
    </script>
    
    <script type="text/javascript">

		$(document).ready(function() {

			
			$('#layerslider').layerSlider({
				sliderVersion: '6.5.0b2',
				type: 'popup',
				pauseOnHover: 'disabled',
				skin: 'photogallery',
				globalBGSize: 'cover',
				navStartStop: false,
				hoverBottomNav: true,
				showCircleTimer: false,
				thumbnailNavigation: 'always',
				tnContainerWidth: '100%',
				tnHeight: 70,
				popupShowOnTimeout: 1,
				popupShowOnce: false,
				popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
				popupResetOnClose: 'disabled',
				popupDistanceLeft: 20,
				popupDistanceRight: 20,
				popupDistanceTop: 20,
				popupDistanceBottom: 20,
				popupDurationIn: 750,
				popupDelayIn: 500,
				popupTransitionIn: 'scalefromtop',
				popupTransitionOut: 'scaletobottom',
				skinsPath: 'layerslider/skins/',
				plugins: ["popup"]
			});
		});

	</script>
</body>
</html>