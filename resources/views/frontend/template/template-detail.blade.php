@extends('frontend.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Large Header Banner -->
			<div class="row">
				<div class="col-12">
					<h1>{{ $template->name }}</h1>
				</div>
			</div>

			<div class="row g-5">
				<div class="col-md-5 col-lg-4 order-md-last">
					<p>
						<span class="text-primary">Grab it now!</span>
						<span class="badge bg-primary rounded-pill">Free</span>
					</p>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-sm bg-light">
							<div>
								<p class="my-0">{{ $template->name }}</p>
								<p class="text-muted">{!! $template->short_description !!}</p>
							</div>
							<span class="text-muted">0 ৳</span>
						</li>
					</ul>

					<div class="d-grid gap-2">
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
							<span class="text-muted">4 years ago</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Updated
							<span class="text-muted">5 days ago</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Version
							<span class="text-muted">{{ $template->version }}</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Category
							<a href="#">Admin & Dashboard</a>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Questions?
							<button type="button" class="btn btn-outline-primary btn-sm">Contact Seller</button>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center p-3 bg-light">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0">
									<img src="img/seller-logo.png" alt="..." width="69" height="69" />
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
				<div class="col-md-7 col-lg-8">
					<form class="needs-validation" novalidate>
						<div class="row g-3">
							<div class="col-sm-12">
								<img src="{{ asset('template/image/' . $template->image) }}" alt="" width="100%" height="100%" class="d-inline-block rounded-3 align-text-top" />
							</div>
						</div>
						<div class="row g-3">
							<ul class="nav nav-pills mb-3 border border-start-0 border-top-0 border-end-0" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active mb-3" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
										Description
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link mb-3" id="pills-changelog-tab" data-bs-toggle="pill" data-bs-target="#pills-changelog" type="button" role="tab" aria-controls="pills-changelog" aria-selected="false">
										Changelog
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
					</form>
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