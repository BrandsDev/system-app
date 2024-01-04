<!DOCTYPE html>
<html lang="en-US">
	<head>
		@yield('tiny-head')

		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		@vite(['resources/css/bootstrap.min.css', 'resources/js/fontawesome-6.4.0.js'])

		<title>Download Free HTML Website Templates | Responsive & SEO Friendly</title>

		<link rel="favicon" sizes="48x48" href="{{ asset('template/favicon.png') }}" />
		<!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/template/favicon.png') }}" />
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/template/favicon.png') }}" />
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/template/favicon.png') }}" /> -->

		<!-- Custom Head -->
		@yield('custom-head')

		<!-- HTML Meta Tags -->
		@include('administration.template.skeleton.meta')
		<meta name="robots" content="noindex, nofollow">
		

		<!-- Schema -->
		@include('administration.template.skeleton.schema')

	</head>
	<body>

		<!-- Navigation -->
		@include('administration.template.skeleton.top-navigation')
		<!-- Alert -->
		<section>
			<div class="row">
				<div class="col-lg-12">
					@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				    @elseif(session()->has('update'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{ session('error') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				    @elseif(session()->has('delete'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{ session('error') }}
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
		</section>
		<!-- End Alert -->

		<!-- Content -->
		@yield('content')
		<!-- End Content -->

		<!-- Footer -->
		@include('administration.template.skeleton.footer')

		

		<!-- Scripts -->
		@include('administration.template.skeleton.scripts')

		<!-- Custom Scripts -->
		@yield('custom-scripts')

	</body>
</html>
