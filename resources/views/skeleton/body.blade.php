<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

		<title>Download Free HTML Website Templates | Responsive & SEO Friendly</title>

		<script src="https://kit.fontawesome.com/0052e0092b.js" crossorigin="anonymous"></script>

		<link rel="apple-touch-icon" sizes="180x180" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/images/fav/favicon-16x16.png" />

		<!-- HTML Meta Tags -->
		@include('skeleton.meta')
		

		<!-- Schema -->
		@include('skeleton.schema')

	</head>
	<body>

		<!-- Navigation -->
		@include('skeleton.navigation')


		<!-- Content -->
		@yield('content')

		<!-- Footer -->
		@include('skeleton.footer')

		<!-- Scripts -->
		@include('skeleton.scripts')

	</body>
</html>
