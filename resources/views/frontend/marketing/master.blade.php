<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Marketing Mestroz</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="author" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700'>
	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{asset('marketing/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/css/blog.style.css')}}">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{asset('marketing/css/headers/header-v8.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/css/footers/footer-v8.css')}}">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{asset('marketing/plugins/animate.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/plugins/fancybox/source/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" href="{{asset('marketing/plugins/font-awesome/css/font-awesome.min.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('marketing/plugins/login-signup-modal-window/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/plugins/master-slider/masterslider/style/masterslider.css')}}">
	<link rel="stylesheet" href="{{asset('marketing/plugins/master-slider/masterslider/skins/default/style.css')}}">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{asset('marketing/css/theme-colors/default.css')}}" id="style_color">
	<link rel="stylesheet" href="{{asset('marketing/css/theme-skins/dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{asset('marketing/css/custom.css')}}">
	
	<style>
.dropdown{
	display: none;
	position: absolute;
	/*background-color: #f1f1f1;*/`
	/* min-width: 160px; */
	z-index: 1;
}
.dropdown-menu li a {
    color: black;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-menu {
  display: block;
}

.top-date {
  background-color: transparent;
  font-family: Lato, sans-serif;
  font-size: 12px;
  font-weight: 400;
  color: #fff;
}
</style>


</head>

<body class="header-fixed header-fixed-space-v2">
	@include('includes.partials.messages')
<div class="wrapper">
	<!--=== Header v8 ===-->
	<div class="header-v8 header-sticky">
		<!-- Topbar blog -->
		<div class="blog-topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-8">
						<div class="topbar-time top-date">
							{{ date('Y-m-d H:i:s') }}
						</div>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</div>
		<!-- End Topbar blog -->

		<!-- Navbar -->
		@include('frontend.marketing.layouts.navbar')
	</div>
</div>

<!-- Body section starts -->
@yield('section')
<!-- Body section ends -->

<div class="footer-v8">
	<footer class="copyright">
			<div class="container">
				<ul class="list-inline terms-menu">
					<li>
						{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}} &copy; All Rights Reserved.
					</li>
					{{-- <li class="home"><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy and Policy</a></li> --}}
				</ul>
			</div><!--/end container-->
	</footer>
</div>
<!--=== End Footer v8 ===-->

<!-- JS Global Compulsory -->
<script src="{{asset('marketing/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('marketing/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('marketing/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('marketing/plugins/back-to-top.js')}}"></script>
<script src="{{asset('marketing/plugins/smoothScroll.js')}}"></script>
<script src="{{asset('marketing/plugins/counter/waypoints.min.js')}}"></script>
<script src="{{asset('marketing/plugins/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('marketing/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('marketing/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('marketing/plugins/master-slider/masterslider/masterslider.js')}}"></script>
<script src="{{asset('marketing/plugins/master-slider/masterslider/jquery.easing.min.js')}}"></script>
<script src="{{asset('marketing/plugins/modernizr.js')}}"></script>
<script src="{{asset('marketing/plugins/login-signup-modal-window/js/main.js')}}"></script> <!-- Gem jQuery -->
<!-- JS Customization -->
<script src="{{asset('marketing/js/custom.js')}}"></script>
<!-- JS Page Level -->
<script src="{{asset('marketing/js/app.js')}}"></script>
<script src="{{asset('marketing/js/plugins/fancy-box.js')}}"></script>
<script src="{{asset('marketing/js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('marketing/js/plugins/master-slider-showcase1.js')}}"></script>
<script src="{{asset('marketing/js/plugins/style-switcher.js')}}"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		App.initCounter();
		FancyBox.initFancybox();
		OwlCarousel.initOwlCarousel();
		OwlCarousel.initOwlCarousel2();
		StyleSwitcher.initStyleSwitcher();
		MasterSliderShowcase1.initMasterSliderShowcase1();
	});
</script>

{{-- <script src="{{asset('marketing/plugins/respond.js')}}"></script>
<script src="{{asset('marketing/plugins/html5shiv.js')}}"></script>
<script src="{{asset('marketing/plugins/placeholder-IE-fixes.js')}}"></script> --}}

{{-- <script>
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 1200) {
			$(".dontfixme").addClass("fixme");
    	}	
	});
</script> --}}

<script>
	var fixmeTop = $('.fixme').offset().top;
	$(window).scroll(function() {
		var currentScroll = $(window).scrollTop();
		if (currentScroll >= fixmeTop) {
			$('.fixme').css({
				position: 'fixed',
				top: '0'
			});
		} else {
			$('.fixme').css({
				position: 'static'
			});
		}
	});
</script>
</body>
</html>
