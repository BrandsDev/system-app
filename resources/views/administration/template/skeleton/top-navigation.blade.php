<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route('template.home') }}">
			<img src="{{ Vite::asset('public/template/image/logo.png') }}" alt="Logo" width="50" height="50" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="{{ route('template.dashboard') }}" class="nav-link">Dashboard</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Categories
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('template.manage-categories') }}">Categories</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-subcategories') }}">Subcategories</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-sub-subcategories') }}">Sub Subcategories</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Template
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('template.new-seller') }}">Add Seller</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-sellers') }}">Manage Sellers</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('template.new-template') }}">Add Template</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-templates') }}">Manage Templates</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('template.blog.new-blog') }}">Add Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('template.blog.manage-blog') }}">Manage Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('template.blog.manage-categories') }}">Manage Categories</a></li>
						<li><a class="dropdown-item" href="{{ route('template.blog.manage-subcategories') }}">Manage Subcategories</a></li>
						<li><a class="dropdown-item" href="{{ route('template.blog.manage-sub-subcategories') }}">Manage Sub Subcategories</a></li>
					</ul>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Streaming
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('template.new-audio') }}">Add Audio</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-audios') }}">Manage Audio's</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('template.new-audio-playlist') }}">Add Audio Playlist</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-audio-playlists') }}">Manage Audio Playlists</a></li>
					</ul>
				</li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Pages
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('template.new-page') }}">Add Page</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-pages') }}" class="nav-link">Manage Pages</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-contacts') }}" class="nav-link">Manage Contact</a></li>
						<li><a class="dropdown-item" href="{{ route('template.manage-hires') }}" class="nav-link">Manage Hire</a></li>
					</ul>
				</li>
				
				<li class="nav-item"><a href="{{ route('template.manage-subscriptions') }}" class="nav-link">Subscription</a></li>
				
				<li class="nav-item"><a href="{{ route('template.home') }}" class="nav-link" target="_blank">Visit Site</a></li>
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