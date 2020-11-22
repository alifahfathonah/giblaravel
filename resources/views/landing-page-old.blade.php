<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
	<meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
	<meta name="author" content="ThemeSelect">
	<title>GIB | Dashboard</title>
	<link rel="apple-touch-icon" href="/chameleon/theme-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="/chameleon/theme-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
	<!-- BEGIN VENDOR CSS-->
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/css/vendors.css">
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/vendors/css/charts/chartist.css">
	<!-- END VENDOR CSS-->
	<!-- BEGIN CHAMELEON  CSS-->
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/css/app-lite.css">
	<!-- END CHAMELEON  CSS-->
	<!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/css/core/menu/menu-types/vertical-menu.css">
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" type="text/css" href="/chameleon/theme-assets/css/pages/dashboard-ecommerce.css">
	{{-- OwlCarousel --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	<style>
		.carousel-outer {
			height: 100vh;
			min-height: 350px;
			}
		.slider-item-box {
			position: relative;
		}
		.slider-inside-box {
			position: absolute;
		}
		.slider-inside {
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.slider-bg {
			height: 100vh;
			background-color: gray;
			background-position: center;
			background-size: cover;
		}
	</style>
	<!-- END Custom CSS-->
  </head>
  <body>

	<nav class="container-md header-navbar navbar-expand-sm navbar navbar-without-dd-arrow fixed-top" style="">
	  <div class="navbar-wrapper">
		<div class="navbar-container content">
		  <div class="p-1">
				<ul class="nav navbar-nav mr-auto float-left">
					<li class="nav-item mr-auto">
						<a class="navbar-brand" href="{{ route('dashboard') }}">
							<img class="brand-logo custom-sidebar-logo" alt="Paskas logo" src="https://infaqberasjogja.com/wp-content/uploads/2020/05/4-o.png" style="width: 150px"/>
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav float-right p-2 pt-3">         
					<a href="{{ route('login') }}" class="btn btn-xl btn-warning mr-2"><i class="ft-user"></i> Sign In</a>
				</ul>
				</div>
			</div>
	  </div>
	</nav>

	

	<header>
			<div class="owl-carousel owl-theme carousel-outer">
				<div class="item slider-item-box">
					<div class="slider-inside-box">
						<div class="row">
							<div class="col-12 col-xl-6">
								<div class="slider-inside">
									<h1>HOLA!</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-bg" style="background-image: url('https://images.alphacoders.com/963/963895.jpg');"></div>
				</div>
				<div class="item slider-item-box">
					<div class="slider-bg" style="background-image: url('https://images5.alphacoders.com/492/492784.jpg');"></div>
				</div>
			</div>
	</header>
	
	<!-- BEGIN VENDOR JS-->
	<script src="/chameleon/theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<script src="/chameleon/theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN CHAMELEON  JS-->
	<script src="/chameleon/theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
	<script src="/chameleon/theme-assets/js/core/app-lite.js" type="text/javascript"></script>
	<!-- END CHAMELEON  JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<script src="/chameleon/theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL JS-->
	{{-- OwlCarousel --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				loop:true,
				autoplay: true,
				margin:10,
				nav:false,
				items: 1,
				dots: false,
			});
		});
	</script>
  </body>
</html>