		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img src="{{ Vite::asset('resources/file_manager/images/logo.png') }}" alt="Logo" width="50" height="50" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
						<!-- <li class="nav-item"><a href="{{ url('/why-our-themes') }}" class="nav-link">Why Our Templates?</a></li> -->
						<!-- <li class="nav-item"><a href="{{ url('/fix-errors') }}" class="nav-link">Fix Errors</a></li> -->
						<li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								About
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{ url('/about/overview') }}">Overview</a></li>
								<li><a class="dropdown-item" href="{{ url('/about/brand') }}">Brand</a></li>
								<li><a class="dropdown-item" href="{{ url('/about/license') }}">License</a></li>
							</ul>
						</li>
						<!-- <li class="nav-item"><a href="{{ url('/qr-code-generator') }}" class="nav-link">QR Code Gen</a></li> -->
						<!-- <li class="nav-item"><a href="{{ url('/hire-us') }}" class="nav-link">Hire Us</a></li> -->
					</ul>
				</div>
			</div>
		</nav>
