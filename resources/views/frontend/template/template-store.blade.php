@extends('frontend.template.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Header Banner End -->
			<div class="mt-3"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-12">
					<h2>Freshen up your website with our Latest <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> Templates</h2>

					<p>Looking for the latest and greatest <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> website templates? Look no further than our collection of expertly crafted designs. Our templates are fully responsive and optimized for search engine performance, ensuring that your website will look great and be easy to find. Whether you're building a personal blog or a professional business website, our templates have everything you need to create a stunning online presence. So why wait? Browse our collection today and start building your dream website!</p>
				</div>
				<!-- <div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ url('/template') }}">View all</a>
						</div>
					</div>
				</div> -->
			</div>

			<div class="mt-3"></div>

			<!-- Template Section -->
			<div class="row">
				@foreach ($templates as $template)
				<div class="col-lg-6">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="{{ route('template.detail', $template->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('template/image/' . $template->image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">	
										<ul class="list-group text-end">
											<li class="list-group-item d-flex justify-content-between align-items-start">
												<div class="ms-2 me-auto">
													<div>
														<p class="card-title">
															<a href="{{ route('template.detail', $template->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">{{ \Illuminate\Support\Str::limit($template->name, 100, '...') }}</a>
														</p>
													</div>												
												</div>
												@if($template->sale_price)

												<span class="fw-bold fs-5 text-success">৳ {{ $template->sale_price }}</span> | <span class="list-group-item fw-bold text-decoration-line-through text-muted">৳ {{ $template->regular_price }}</span>

												@else

												<span class="fw-bold fs-5 text-success">৳ {{ $template->regular_price }}</span>

												@endif
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-start">
												<span>by {{ $template->seller_name }}</span>
											</li>
										</ul>
										<!-- <p class="card-text">
											<small><i>by</i> {{ $template->seller_name }}</small><br>
											<small><i>in</i> <a href="{{ url('/' . $template->slug) }}" target="_blank" class="link-dark">{{ $template->category_name }}</a></small>
										</p> -->
									</div>
									<div class="card-body">
										<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
											<!-- <a href="{{ route('template.detail',$template->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a> -->
											<!-- <a href="" target="_blank" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Add to Cart</a> -->
											<!-- <a href="" target="_blank" type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Buy Now</a> -->
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
					<p class="text-center">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection