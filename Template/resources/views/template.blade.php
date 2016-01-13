<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section("title-website")
		Sistem Informasi Penjualan Kuota Internet
	@show
	</title>
	@section("head")
	<script type="text/javascript" src="{{ asset('gunawandy-template/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('gunawandy-template/bootstrap/js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('gunawandy-template/bootstrap/css/bootstrap3.css') }}">
	@show
	<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      border-radius: 0;

    </style>

    
</head>
<body>

	<div id="back" class="container">
		@section("header")
		
			<h1>Sistem Penjualan Kuota Internet</h1>
		@show
	</div>

	@section("navigation")
		@include("GunawandyTemplate::nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	</div>

	<div class="container">
		<div class="text-center">
			@section("footer")
				Copyright &copy; {{ date("Y") }} by Andy Gunawan. All Right Reserved.
			@show	
		</div>
	</div>
</body>
</html>

