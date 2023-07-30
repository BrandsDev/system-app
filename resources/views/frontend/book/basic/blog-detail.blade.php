@extends('frontend.book.skeleton.body')
@section('content')
	<!-- Body -->
	<main class="container p-3 py-5">
		<!-- Breadcrumb -->
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blog</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- Content -->
		<div class="row g-5">
			<div class="col-md-8">
				<h1>{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}</h1>

				<img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" alt="" class="img-fluid mt-3" />

				<article class="blog-post">
					<p class="blog-post-meta mt-3">{{ $blog->created_at }} <a href="#">{{ $blog->author }}</a></p>
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
						<h4>About</h4>
						<p>
							Download our free website templates with <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>, <abbr title="Cascading Style Sheet" class="initialism">CSS</abbr>, and Bootstrap components to build high-quality, responsive websites quickly and easily. Our templates are optimized for mobile devices, customizable to meet your needs, and will save you time and effort in web development. Start creating professional websites today!
							<br>
							<a href="/system">Download Now!</a>
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
				<h2>প্রাসঙ্গিক ব্লগ</h2>

				<!-- <p>আপনি হিফজ শুরুর পূর্বেই উপযুক্ত প্রস্তুতি নিতে চান? এই পথে আপনার সহায়তা করতে আমরা আপনাকে বইগুলোর সংগ্রহ করার জন্য উদ্বুদ্ধ করছি। আমাদের একটি বিশেষ সম্প্রদায়ে এই বইগুলো সংগ্রহ করে নিয়ে গেলে আপনি শুরুতে নিজেকে একটি সুষ্ঠু আধার দিতে পারেন। এই বইগুলো আপনাকে মূল্যবান তথ্য, পথনির্দেশিকা এবং প্রাথমিক বিষয়গুলি সরবরাহ করবে। আপনি সম্পূর্ণ পরিষ্কার ধারণা পেতে এই বইগুলো অবশ্যই সংগ্রহ করতে পারেন। তাই, এই বইগুলো আমাদের ওয়েবসাইট থেকে অর্ডার করুন এবং হিফজ পথে আগ্রহী চলে যান।</p> -->
			</div>
			<div class="col-lg-2 align-self-center">
				<div class="row">
					<div class="col-12 col-sm-12">
						<a type="button" class="btn btn-outline-secondary float-end" href="{{ url('/blogs') }}">View all</a>
					</div>
				</div>
			</div>
		</div>

		<!-- HR -->
		<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>

		<div class="mt-3"></div>

		<!-- Related Blogs -->
		<div class="row">
			@foreach ($relatedBlog as $blog)
			<div class="col-lg-3">
				<article>
					<figure>
						<div class="card shadow p-2 mb-5 bg-body rounded">
							<a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
								<img src="{{ asset('blog/image/featured/' . $blog->featured_image) }}" class="card-img-top" alt="...">
							</a>
							<figcaption>
								<div class="card-body">
									<p class="card-title lead">
										<a href="{{ route('blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
											{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}
										</a>
										<p class="card-text">
											<small><i>by</i> {{ $blog->author }}</small><br>
											<small><i>in</i> <a href="{{ url('/' . $blog->slug) }}" target="_blank" class="link-dark">{{ $blog->category_name }}</a></small>
										</p>
									</p>
								</div>
								<div class="card-body">
									<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
										<a href="{{ route('blog.detail',$blog->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
									</div>
								</div>
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