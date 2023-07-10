@extends('frontend.book.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Large Header Banner -->
			<div class="row mb-3">
				<div class="col-12">
					<nav aria-label="breadcrumb">
		                <ol class="breadcrumb">
		                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
		                    <li class="breadcrumb-item"><a href="{{ route('manage-blogs') }}">Manage Blogs</a></li>
		                    <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
		                </ol>
		            </nav>
				</div>
			</div>

			<!-- Header Short Description -->
			<div class="row mb-3">
				<div class="col-md-6 mb-3">
					<form class="needs-validation" novalidate>
						<div class="row g-3">
							<div class="col-sm-12">
								<img src="{{ asset('book/image/' . $book->image) }}" alt="" width="100%" height="100%" class="d-inline-block rounded-3 align-text-top" />
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h1>{{ $book->name }}</h1>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-sm bg-light">
							<div>
								<!-- <p class="my-0">{{ $book->name }}</p> -->
								<p class="text-muted">{!! $book->short_description !!}</p>
							</div>
						</li>
						<li class="list-group-item">
							<div>
								<p class="card-text fs-5">
									<small><i>পাবলিকেশন: </i> {{ $book->publisher }}</small><br>
									<small><i>ক্যাটেগরি: </i> <a href="{{ url('/' . $book->slug) }}" target="_blank" class="link-dark">{{ $book->category_name }}</a></small>
								</p>
								<span class="card-text">
									@if($book->sale_price)

									<small class="fw-bold fs-4 text-success">৳ {{ $book->sale_price }}</small> | <small class="fw-bold text-decoration-line-through text-muted">৳ {{ $book->regular_price }}</small>

									@else

									<small class="fw-bold fs-4 text-success">৳ {{ $book->regular_price }}</small>

									@endif										
								</span>
							</div>
						</li>
					</ul>

					<button type="button" class="btn btn-primary position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML"><i class="fa-solid fa-download"></i> Add to Cart</button>
					<button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github"><i class="fa-solid fa-download"></i> Buy Now</button>
					<button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github"><i class="fa-solid fa-download"></i> Easy Order</button>

					<ul class="list-group list-group-flush mt-3">
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							<small><i>ক্যাটেগরি: </i> <a href="{{ url('/' . $book->slug) }}" target="_blank" class="link-dark">{{ $book->category_name }}</a></small>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row g-3">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active mb-3" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
									বিস্তারিত
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link mb-3" id="pills-changelog-tab" data-bs-toggle="pill" data-bs-target="#pills-changelog" type="button" role="tab" aria-controls="pills-changelog" aria-selected="false">
									স্পেসিফিকেশন
								</button>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
								{!! $book->long_description !!}
							</div>
							<div class="tab-pane fade" id="pills-changelog" role="tabpanel" aria-labelledby="pills-changelog-tab">
								{!! $book->change_log !!}
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Header Banner End -->
			<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h2>More <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, Bootstrap5, SEO Friendly Website Templates</h2>

					<p>Browse through our extensive collection of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, CSS3, Bootstrap3, and SEO-friendly website templates to find the perfect design for your next project. Our templates are designed with the latest coding standards and are fully responsive, ensuring that your website looks great on any device. With a variety of styles and layouts to choose from, you're sure to find the perfect template to fit your needs. Download and customize your template today to get your website up and running in no time!</p>
				</div>
				<div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="/system/site-templates.html">View all</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-3"></div>
			
			<div class="row">
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Contact Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Sigup Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Signup/Login Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Github">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="text-center">Have questions or suggestions? <a href="{{ url('/contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection