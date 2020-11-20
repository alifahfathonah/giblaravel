{{-- <x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Dashboard') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<x-jet-welcome />
			</div>
		</div>
	</div>
</x-app-layout> --}}


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
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	<style>
		.carousel-item {
			height: 100vh;
			min-height: 350px;
			background: no-repeat center center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
		<div class="carousel-caption d-none d-md-block">
			<h1>YOMAN</h1>
		  <h2 class="display-4">First Slide</h2>
		  <p class="lead">This is a description for the first slide.</p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
		<div class="carousel-caption d-none d-md-block">
		  <h2 class="display-4">Second Slide</h2>
		  <p class="lead">This is a description for the second slide.</p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
		<div class="carousel-caption d-none d-md-block">
		  <h2 class="display-4">Third Slide</h2>
		  <p class="lead">This is a description for the third slide.</p>
		</div>
	  </div>
	</div>
	{{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
	</a> --}}
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
  </body>
</html>