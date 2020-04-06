<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	<title>Peace Mass Transit - @yield('page')</title>
	@include('layouts.css')

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
@if (Request::is('/'))    
<body class="home">
@elseif (Request::is('contact'))
<body onload="initialize()">
@else
<body>
@endif
	<!-- Preloader -->
	{{-- @include('_partials.preloader') --}}
	<!-- //Preloader -->

	<!-- Header -->
	@include('_partials.header')
	<!-- //Header -->

	<!-- Main -->
	<main class="main" role="main" id="app">
		@include('_partials.banner')
		@yield('content')
	</main>
	<!-- //Main -->

	<!-- Footer -->
	@include('_partials.footer')
	<!-- //Footer -->

	<!-- jQuery -->
	@include('layouts.js')
	@yield('javascript')
</body>

<!-- Mirrored from themeenergy.com/themes/html/transfers/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 09:17:32 GMT -->

</html>