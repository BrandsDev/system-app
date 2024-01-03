@extends('frontend.template.skeleton.body')
@section('content')
		<section>
			<!-- Header Banner -->
			@foreach ($templates as $template)
			<div class="row align-items-center p-5 mb-4 bg-light rounded-3">
				<!-- <div class="col-10 col-sm-8 col-lg-6">
					<img src="{{ asset('template/image/' . $template->image) }}" alt="{{ $template->alt_img_text }}" width="700" height="500" class="d-block mx-lg-auto img-fluid"  loading="lazy">
				</div> -->
				<div class="col-lg-8">
					<h1 class="display-5 fw-bold lh-1 mb-3">{{ \Illuminate\Support\Str::limit($template->name, 100, '...') }}</h1>
					<p class="fs-4">Revolutionize your blogging journey with BlogForge 10! A cutting-edge, SEO-optimized Laravel 10 and PHP 8.2 application. Crafted with HTML5, CSS3, and Bootstrap 5.2, BlogForge 10 provides an intuitive admin panel for adding, editing, and featuring blogs. Manage categories, tags, comments, and social links securely. Download now and embark on a new era of dynamic blogging.</p>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start">
						<a class="btn btn-primary btn-lg px-4 me-md-2" href="{{ route('template.detail', $template->slug) }}">Explore BlogForge 10</a>
						<a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('template.blog') }}">Read Blogs</a>
					</div>
				</div>
			</div>
			@endforeach
			<!-- Header Banner End -->
		</section>

		<section>
			<aside>
				<div class="row">
					<div class="col-12">
						<p class="text-center">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
					</div>
				</div>
			</aside>
		</section>
@endsection