		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand" href="{{ route('template.home') }}">
						<font class="fw-bold fs-2">{codephics}</font>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
						<ul class="navbar-nav">
							<!-- <li class="nav-item"><a href="{{ route('template.why-our-solutions') }}" class="nav-link">Why Our Solution?</a></li> -->
							<!-- <li class="nav-item"><a href="{{ route('template.store') }}" class="nav-link">Templates</a></li> -->
							<li class="nav-item"><a href="{{ url('/qr-code-generator') }}" class="nav-link">QR Code Gen</a></li>
							<li class="nav-item"><a href="{{ route('template.blog') }}" class="nav-link">Blog</a></li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									About
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="{{ route('template.overview') }}">Overview</a></li>
									<li><a class="dropdown-item" href="{{ route('template.brand') }}">Brand</a></li>
									<li><a class="dropdown-item" href="{{ route('template.license') }}">License</a></li>
									<li><a class="dropdown-item" href="{{ route('template.contact-us') }}">Contact Us</a></li>
								</ul>
							</li>
							<li class="nav-item"><a href="{{ route('template.hire-us') }}" class="nav-link">Hire Us</a></li>
							<!-- <li class="nav-item"><a href="{{ url('/fix-errors') }}" class="nav-link">Fix Errors</a></li> -->
						</ul>
					</div>
				</div>
			</nav>
		</header>
