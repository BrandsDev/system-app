		<nav class="navbar navbar-expand-lg navbar-light border border-start-0 border-end-0">
			<div class="container">
				<a href="{{ url('/') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
					<svg class="bi me-2" width="0" height="32"><use xlink:href="#bootstrap" /></svg>
					<img src="https://getbootstrap.com//docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="40" height="34" class="d-inline-block align-text-top" />
					<span class="fs-2">Bootstrap</span>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="col-lg-6"></div>
				<div class="col-lg-6 collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="{{ url('/why-our-themes') }}" class="nav-link">Why Our Templates?</a></li>
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
						<li class="nav-item"><a href="{{ url('/hire-us') }}" class="nav-link">Hire Us</a></li>
					</ul>
				</div>
			</div>
		</nav>