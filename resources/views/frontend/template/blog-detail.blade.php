@extends('frontend.template.skeleton.body')
@section('content')
	<!-- Body -->
	<main class="container p-3 py-5">
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('template.blog') }}">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- Content -->
		<div class="row g-5">
			<div class="col-md-8">
				<h1>{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h1>

				<img src="{{ asset('template/blog/image/featured/' . $blog->featured_image) }}" alt="" class="img-fluid mt-3" />

				<article class="blog-post">
					<p class="blog-post-meta mt-3">{{ $blog->created_at }} <a href="#">{{ $blog->author }}</a></p>
					{!! $blog->long_description !!}
				</article>

				<!-- <nav class="blog-pagination" aria-label="Pagination">
					<a class="btn btn-outline-primary" href="javascript:prevPage()" id="btn_prev">Older</a>
					<a class="btn btn-outline-secondary" href="javascript:nextPage()" id="btn_next">Newer</a>
				</nav> -->
			</div>

			<div class="col-md-4">
				<div class="position-sticky" style="top: 2rem;">
					<div class="p-4 mb-3 bg-light rounded">
						<h4>About</h4>
						<p>
							Download our free website templates with <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>, <abbr title="Cascading Style Sheet" class="initialism">CSS</abbr>, and Bootstrap components to build high-quality, responsive websites quickly and easily. Our templates are optimized for mobile devices, customizable to meet your needs, and will save you time and effort in web development. Start creating professional websites today!
							<br>
							<a href="{{ route('template.store') }}">Download Now!</a>
						</p>
					</div>

					<!-- <div class="p-4">
						<h4>Archives</h4>
						<ol class="list-unstyled mb-0">
							<li><a href="#">March 2021</a></li>
							<li><a href="#">February 2021</a></li>
							<li><a href="#">January 2021</a></li>
							<li><a href="#">December 2020</a></li>
							<li><a href="#">November 2020</a></li>
							<li><a href="#">October 2020</a></li>
							<li><a href="#">September 2020</a></li>
							<li><a href="#">August 2020</a></li>
							<li><a href="#">July 2020</a></li>
							<li><a href="#">June 2020</a></li>
							<li><a href="#">May 2020</a></li>
							<li><a href="#">April 2020</a></li>
						</ol>
					</div> -->

					<div class="p-4">
						<h4>Elsewhere</h4>
						<ol class="list-unstyled">
							<li><a href="#">GitHub</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<!-- HR -->
		<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>

		<div class="mt-3"></div>

		<!-- Related Blogs -->
		<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
			<div class="col-lg-10">
				<h2><abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, Bootstrap 5, and SEO-Friendly Related Blog</h2>

				<p>Embark on a captivating exploration through the dynamic world of web development with our engaging blog. In our "<abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, Bootstrap 5, and SEO-Friendly Related Blog," we delve into the fascinating realms of modern web design and development. Discover the seamless synergy of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr> and Bootstrap 5, unlocking endless possibilities for creating visually stunning and interactive websites.</p>
			</div>
			<div class="col-lg-2 align-self-center">
				<div class="row">
					<div class="col-12 col-sm-12">
						<a type="button" class="btn btn-outline-secondary float-end" href="{{ route('template.blog') }}">View all</a>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-3"></div>

		<!-- Related Blogs -->
		<div class="row">
			@foreach ($relatedBlog as $blog)
				<div class="col-lg-6">
					<article>
						<figure>
							<div class="card shadow mb-5 rounded-3 no-border-card">
								<a href="{{ route('template.blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('template/blog/image/featured/' . $blog->featured_image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="{{ route('template.blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}
											</a>
											<small>{{ $blog->created_at }}</small>
											<p class="card-text">{!! \Illuminate\Support\Str::limit($blog->short_description, 100, '...') !!}</p>
											<!-- <p class="card-text">
												<small><i>by</i> {{ $blog->author }}</small><br>
												<small><i>in</i> <a href="{{ url('/' . $blog->slug) }}" target="_blank" class="link-dark">{{ $blog->category_name }}</a></small>
											</p> -->
										</p>
									</div>
									<!-- <div class="card-body">
										<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
											<a href="{{ route('template.blog.detail',$blog->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
										</div>
									</div> -->
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				@endforeach
		</div>
		<div class="row">
			<div class="col-12">
				<p class="text-center">Have questions or suggestions? <a href="{{ url('/contact-us') }}">Contact Us</a></p>
			</div>
		</div>
	</main>
	
	@endsection