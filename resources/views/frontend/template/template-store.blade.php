@extends('frontend.template.skeleton.body')
@section('content')
        <!-- Breadcrumb -->
        <section>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Template Store</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Content -->
        <section>
			<div class="mt-3"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-12">
					<h1>Unleash the Potential of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr> and Bootstrap 5</h1>

					<p>Harness the power of <abbr title="HyperText Markup Language" class="initialism"><strong>HTML5</strong></abbr><strong>, Bootstrap 5, and SEO-Friendly website templates</strong> to create responsive and visually appealing web pages. Our templates are optimized for search engines, ensuring your content reaches a wider audience. Dive into our diverse range of templates, each tailored to meet different needs and industries.</p>
				</div>
			</div>

			<div class="mt-3"></div>

			<!-- Template Section -->
			<div class="row">
				@foreach ($templates as $template)
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
							</div>
						</figure>
					</article>
				</div>
				@endforeach
			</div>
        </section>
        <!-- End Content -->

        <!-- Questions or Suggestions -->
        <section>
            <div class="row">
                <div class="col-12">
                    <p class="text-center mt-3">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
                </div>
            </div>
        </section>
        <!-- End Questions or Suggestions -->
		
		@endsection