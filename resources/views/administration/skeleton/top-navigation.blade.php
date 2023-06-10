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
				<li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Templates
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('manage-categories') }}">Category</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-subcategories') }}">Sub Category</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-sub-subcategories') }}">Sub Sub Category</a></li>
						<li><a class="dropdown-item" href="{{ route('new-template') }}">Add Template</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-templates') }}">Manage Templates</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Blogs
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('manage-blog-categories') }}">Blog Category</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-blog-subcategories') }}">Blog Sub Category</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-blog-sub-subcategories') }}">Blog Sub Sub Category</a></li>
						<li><a class="dropdown-item" href="{{ route('new-blog') }}">Add Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('manage-blogs') }}">Manage Blogs</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="{{ url('/') }}" class="nav-link" target="_blank">Visit Site</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a></li>
						<li>
							<!-- Authentication -->
	                        <form method="POST" action="{{ route('logout') }}">
	                            @csrf

	                            <x-dropdown-link :href="route('logout')"
	                                    onclick="event.preventDefault();
	                                                this.closest('form').submit();">
	                                {{ __('Log Out') }}
	                            </x-dropdown-link>
	                        </form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>