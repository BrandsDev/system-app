<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route('book.home') }}">
			<img src="{{ Vite::asset('public/book/image/logo.png') }}" alt="Logo" width="50" height="50" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
			<ul class="navbar-nav">
				<li class="nav-item"><a href="{{ route('book.dashboard') }}" class="nav-link">Dashboard</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Categories
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('book.manage-categories') }}">Categories</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-subcategories') }}">Subcategories</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-sub-subcategories') }}">Sub Subcategories</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Book
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('book.new-book') }}">Add Book</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-books') }}">Manage Books</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('book.new-publisher') }}">Add Publisher</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-publishers') }}">Manage Publishers</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('book.new-author') }}">Add Author</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-authors') }}">Manage Authors</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Streaming
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('book.new-audio') }}">Add Audio</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-audios') }}">Manage Audio's</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="{{ route('book.new-audio-playlist') }}">Add Audio Playlist</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-audio-playlists') }}">Manage Audio Playlists</a></li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Blog
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="{{ route('book.new-blog') }}">Add Blog</a></li>
						<li><a class="dropdown-item" href="{{ route('book.manage-blogs') }}">Manage Blogs</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="{{ route('book.home') }}" class="nav-link" target="_blank">Visit Site</a></li>
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