@extends('frontend.book.skeleton.body')
@section('content')
	<main class="container p-3 py-5">
		@foreach($featuredBlogs as $blog)
		<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
			<div class="col-md-12 px-0">
				<h1 class="display-4 fst-italic">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h1>
				{!! $blog->short_description !!}
				<p><a href="{{ route('book.blog.detail',$blog->slug) }}" class="text-white fw-bold">Continue reading...</a></p>
			</div>
		</div>
		@endforeach

		<div class="row">
			@foreach($takeBlogs as $blog)
			<div class="col-md-6">
		      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-primary">{{ $blog->tags }}</strong>
		          <h3 class="mb-0">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h3>
		          <div class="mb-1 text-muted">{{ $blog->created_at }}</div>
		          {!! $blog->short_description !!}
		          <a href="{{ route('book.blog.detail',$blog->slug) }}" class="stretched-link">Continue reading</a>
		        </div>
		        <div class="col-auto d-none d-lg-block">
		          <img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" class="img-fluid rounded-start" width="200" height="250" alt="...">
		        </div>
		      </div>
		    </div>
			@endforeach
		</div>

		<div class="row">
			<div class="col-md-8">
				<h3 class="pb-4 mb-4 fst-italic border-bottom">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h3>

				<article class="blog-post" id="listingBlog">
					<p class="blog-post-meta">{{ $blog->created_at }} <a href="#">{{ $blog->author }}</a></p>
					{!! $blog->long_description !!}
				</article>

				<a href="{{ url('/site-templates') }}">বই কিনতে ভিজিট করুন!</a>

				<!-- <nav class="blog-pagination" aria-label="Pagination">
					<a class="btn btn-outline-primary" href="javascript:prevPage()" id="btn_prev">Older</a>
					<a class="btn btn-outline-secondary" href="javascript:nextPage()" id="btn_next">Newer</a>
				</nav> -->
			</div>

			<div class="col-md-4">
				<div class="position-sticky" style="top: 2rem;">
					<div class="p-4 mb-3 bg-light rounded">
						<h4 class="fst-italic">About</h4>
						<p>
							Download our free website templates with <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>, <abbr title="Cascading Style Sheet" class="initialism">CSS</abbr>, and Bootstrap components to build high-quality, responsive websites quickly and easily. Our templates are optimized for mobile devices, customizable to meet your needs, and will save you time and effort in web development. Start creating professional websites today!
							<br>
							<a href="{{ url('/site-templates') }}">Download Now!</a>
						</p>
					</div>

					<!-- <div class="p-4">
						<h4 class="fst-italic">Archives</h4>
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
						<h4 class="fst-italic">Elsewhere</h4>
						<ol class="list-unstyled">
							<li><a href="#">GitHub</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	@endsection