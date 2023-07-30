		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ route('book.home') }}">
					<img src="{{ Vite::asset('resources/file_manager/images/logo.png') }}" alt="Logo" width="50" height="50" />
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
					<ul class="navbar-nav">
						<li class="nav-item"><a href="{{ route('book.blog') }}" class="nav-link">Blog</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								About
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{ route('book.overview') }}">Overview</a></li>
								<li><a class="dropdown-item" href="{{ route('book.brand') }}">Brand</a></li>
								<li><a class="dropdown-item" href="{{ route('book.license') }}">License</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
