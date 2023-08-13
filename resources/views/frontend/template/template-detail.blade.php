@extends('frontend.template.skeleton.body')

@section('custom-head')
<!-- Custom CSS -->
<style>
/* Define a custom class to remove card border */
.no-border-card {
  border: none;
}
</style>
@endsection
@section('content')
			<!-- Breadcrumb -->
			<div class="row mb-3">
				<div class="col-12">
					<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('template.store') }}">Templates</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $template->name }}</li>
              </ol>
          </nav>
				</div>
			</div>

			<!-- Header Short Description -->
			<div class="row mb-3">
				<div class="col-md-8 mb-3">
					<form class="needs-validation" novalidate>
						<div class="row g-3">
							<div class="col-sm-12">
								<img src="{{ asset('template/image/' . $template->image) }}" alt="" width="100%" height="100%" class="d-inline-block rounded-3 align-text-top" />
							</div>
						</div>
					</form>

					<ul class="nav nav-pills mt-3 mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active mb-3" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
								Description
							</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link mb-3" id="pills-changelog-tab" data-bs-toggle="pill" data-bs-target="#pills-changelog" type="button" role="tab" aria-controls="pills-changelog" aria-selected="false">
								Change Log
							</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
							{!! $template->long_description !!}
						</div>
						<div class="tab-pane fade" id="pills-changelog" role="tabpanel" aria-labelledby="pills-changelog-tab">
							{!! $template->change_log !!}
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h1>{{ $template->name }}</h1>
					<p>{!! $template->short_description !!}</p>
					<span class="text-primary">Grab it now!</span>
					<span class="badge bg-primary rounded-pill">Free</span>
					<div class="d-grid mt-3 gap-2">
						<div class="btn-group" role="group" aria-label="Basic mixed styles example">
							<button type="button" class="btn btn-outline-primary">Live Preview</button>
						</div>
						<div class="btn-group" role="group" aria-label="Basic mixed styles example">
							<button type="button" class="btn btn-primary position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML"><i class="fa-solid fa-download"></i> HTML</button>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github"><i class="fa-solid fa-download"></i> Github</button>
						</div>
					</div>

					<!-- <ul class="list-group list-group-flush mt-3">
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							Reviewed by the Bootstrap team
						</li>
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							6 months technical support
						</li>
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							100% money back guarantee
						</li>
					</ul> -->

					<ul class="list-group list-group-flush mt-3">
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Bootstrap
							<span class="text-muted">{{ $template->bootstrap_v }}</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Released
							<span class="text-muted">{{ $template->created_at }}</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Updated
							<span class="text-muted">{{ $template->updated_at }}</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Version
							<span class="text-muted">{{ $template->version }}</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Category
							<a href="{{ url('/' . $template->slug) }}" class="link-dark">{{ $template->category_name }}</a>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Questions?
							<a href="mailto:support@ilannoor.com" class="btn btn-outline-primary btn-sm">Contact Seller</a>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center p-3 bg-light">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0 card shadow rounded-4">
									<img src="{{ asset('template/seller/image/' . $template->image) }}" alt="..." width="69" height="69">
								</div>
								<div class="flex-grow-1 ms-3">
									<div class="ms-2 me-auto">
										<div class="fw-bold">Created by</div>
										{{ $template->seller_name }}
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<!-- HR -->
			<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>

			<!-- Related Template Margin -->
			<div class="mt-3"></div>

			<!-- Related Template -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h2>More <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, Bootstrap5, SEO Friendly Website Templates</h2>

					<p>Browse through our extensive collection of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, CSS3, Bootstrap3, and SEO-friendly website templates to find the perfect design for your next project. Our templates are designed with the latest coding standards and are fully responsive, ensuring that your website looks great on any device. With a variety of styles and layouts to choose from, you're sure to find the perfect template to fit your needs. Download and customize your template today to get your website up and running in no time!</p>
				</div>
				<div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ route('template.store') }}">View all</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-3"></div>

			<!-- Template Section -->
			<div class="row">
				@foreach ($relatedTemplate as $template)
				<div class="col-lg-6">
					<article>
						<figure>
							<div class="card shadow mb-5 rounded-3 no-border-card">
								<a href="{{ route('template.detail', $template->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('template/image/' . $template->image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">	
										<ul class="d-flex list-unstyled mt-auto">
							              <li class="me-auto">
							                <a href="{{ route('template.detail', $template->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">{{ \Illuminate\Support\Str::limit($template->name, 100, '...') }}</a>
							              </li>
							              <li class="d-flex align-items-center">
							                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
							                <small>
							                	@if($template->sale_price)

												<span class="fw-bold fs-5 text-success">৳ {{ $template->sale_price }}</span> | <span class="list-group-item fw-bold text-decoration-line-through text-muted">৳ {{ $template->regular_price }}</span>

												@elseif($template->regular_price)

												<span class="fw-bold fs-5 text-success">৳ {{ $template->regular_price }}</span>

												@else

												<span>Free</span>

												@endif
							                </small>
							              </li>
							            </ul>
							            <ul class="d-flex list-unstyled mt-auto">
							              <li class="me-auto">
							                <small><a href="{{ route('template.store') }}" class="link-dark">{{ $template->category_name }}</a></small>
							              </li>
							              <li class="d-flex align-items-center">
							                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
							                <small>{{ $template->seller_name }}</small>
							              </li>
							            </ul>
							        </div>
								</figcaption>
						</figure>
					</article>
				</div>
				@endforeach
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

			<!-- Books Section -->
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
					<p class="text-center">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		
		@endsection