<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		@vite(['resources/css/bootstrap.min.css', 'resources/js/fontawesome-6.4.0.js'])

		<title>{{ $page->meta_title }}</title>

		<link rel="favicon" sizes="48x48" href="{{ asset('template/favicon.png') }}" />
		<!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/template/favicon.png') }}" />
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/template/favicon.png') }}" />
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/template/favicon.png') }}" /> -->

		<!-- Custom Head -->
		@yield('custom-head')
		<!-- End Custom Head -->

		<!-- HTML Meta Tags -->
		@include('frontend.template.skeleton.meta', ['page' => $page])
		<!-- End HTML Meta Tags -->

		<!-- Schema -->
		@include('frontend.template.skeleton.schema')
		<!-- End Schema -->

	</head>
	<body>

		<!-- Navigation -->
		@include('frontend.template.skeleton.navigation')
		<!-- End Navigation -->

		<main class="container p-3 py-5">
			<!-- Alert -->
			<section>
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
			</section>
			<!-- End Alert -->

			<!-- Content -->
			@yield('content')
			<!-- End Content -->
		</main>

		<!-- Footer -->
		@include('frontend.template.skeleton.footer')
		<!-- End Footer -->

		<!-- Scripts -->
		@include('frontend.template.skeleton.scripts')

		<!-- Custom Scripts -->
		@yield('custom-scripts')
		<!-- End Custom Scripts -->
		<!-- End Scripts -->

	</body>
</html>
