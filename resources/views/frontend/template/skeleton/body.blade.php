<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		@vite(['resources/css/bootstrap.min.css'])

		<title>Download Free HTML Website Templates | Responsive & SEO Friendly</title>
		
		@vite(['resources/js/fontawesome-6.4.0.js'])

		<link rel="apple-touch-icon" sizes="180x180" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-16x16.png" />

		<!-- Custom Head -->
		@yield('custom-head')

		<!-- HTML Meta Tags -->
		@include('frontend.template.skeleton.meta')
		

		<!-- Schema -->
		@include('frontend.template.skeleton.schema')

	</head>
	<body>

		<!-- Navigation -->
		@include('frontend.template.skeleton.navigation')

		<main class="container p-3 py-5">
			<div class="row">
				<div class="col-lg-12">
					@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				    @elseif(session()->has('error'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{ session('error') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				    @endif
				</div>
			</div>
			<!-- Content -->
			@yield('content')
		</main>

		<!-- Footer -->
		@include('frontend.template.skeleton.footer')

		<!-- Scripts -->
		@include('frontend.template.skeleton.scripts')

		<!-- Custom Scripts -->
		@yield('custom-scripts')

	</body>
</html>
