<!DOCTYPE html>
<html lang="en-US">
	<head>
		@yield('tiny-head')

		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		<!-- @vite(['resources/css/bootstrap.min.css']) -->
		<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">

		<title>Download Free HTML Website Templates | Responsive & SEO Friendly</title>
		
		<!-- @vite(['resources/js/fontawesome-6.4.0.js']) -->
		<link rel="stylesheet" href="{{ asset('template/js/fontawesome-6.4.0.js') }}">

		<link rel="apple-touch-icon" sizes="180x180" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-16x16.png" />

		<!-- Custom Head -->
		@yield('custom-head')

		<!-- HTML Meta Tags -->
		@include('administration.book.skeleton.meta')
		<meta name="robots" content="noindex, nofollow">
		

		<!-- Schema -->
		@include('administration.book.skeleton.schema')

	</head>
	<body>

		<!-- Navigation -->
		@include('administration.book.skeleton.top-navigation')

		<!-- Content -->
		@yield('content')

		<!-- Footer -->
		@include('administration.book.skeleton.footer')

		

		<!-- Scripts -->
		@include('administration.book.skeleton.scripts')

		<!-- Custom Scripts -->
		@yield('custom-scripts')

	</body>
</html>
