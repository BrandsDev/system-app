@extends('frontend.template.skeleton.body')
@section('content')

		<section>
			<!-- Header Banner -->
			@foreach ($templates as $template)
			<div class="row">
				<div class="p-5 mb-4 bg-light rounded-3">
			      <div class="container-fluid py-5">
			        <h1 class="display-5 fw-bold">{{ \Illuminate\Support\Str::limit($template->name, 100, '...') }}</h1>
			        <p class="col-md-8 fs-4">Revolutionize your blogging journey with BlogForge 10! A cutting-edge, SEO-optimized Laravel 10 and PHP 8.1 application. Crafted with HTML5, CSS3, and Bootstrap 5.2, BlogForge 10 provides an intuitive admin panel for adding, editing, and featuring blogs. Manage categories, tags, comments, and social links securely. Download now and embark on a new era of dynamic blogging.</p>

			        <a class="btn btn-primary btn-lg" href="{{ route('template.detail', $template->slug) }}">Explore BlogForge 10</a>
			        <a class="btn btn-secondary btn-lg" href="{{ route('template.blog') }}">Read Blogs</a>
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