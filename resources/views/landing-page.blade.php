<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PASKAS DIY| Gerakan Infaq Beras</title>
	{{-- Bootstrap --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	{{-- OwlCarousel --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
	{{-- CustomCss --}}
	<style>
		.outer-box {
			width: 100vw;
			height: 100vh;
		}
	</style>
</head>
<body>
	<nav class="nav nav-header fixed-top">
		<div class="row w-100">
			<div class="col-6">asd</div>
			<div class="col-6">asd</div>
		</div>
	</nav>
	<div class="outer-box">
		<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
	</div>
	{{-- Bootstrap --}}
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> --}}
	{{-- OwlCarousel --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
							items:1
					},
					600:{
							items:3
					},
					1000:{
							items:5
					}
				}
			});
		});
	</script>
</body>
</html>