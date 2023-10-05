@extends('frontend.template.skeleton.body')
@section('content')

		<section>
			<!-- Header Banner -->
			<div class="row">
				<div class="col-lg-6">
					<h1>Download Free <abbr title="HyperText Markup Language" class="initialism">HTML</abbr><br />Website Templates</h1>
					
					<p>If you're a web developer, you know that creating a website from scratch can be a time-consuming process. That's where <strong><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> website templates</strong> come in. These templates provide a pre-designed structure that you can customize with your own content, saving you time and effort.</p>
					
					<p>At our website, we offer a wide selection of <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> website templates that you can download for free. Our templates are designed to be easy to use, even	if you don't have much experience with <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> and <abbr title="Cascading Style Sheet" class="initialism">CSS</abbr>.</p>
				</div>
				<div class="col-lg-6 mt-3">
					<p><strong>Our templates feature:</strong></p>
					
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><strong>Clean, modern</strong> designs</li>
						<li class="list-group-item"><strong>Responsive</strong> layouts that work on any device</li>
						<li class="list-group-item"><strong>Valid, well-structured</strong> <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> and <abbr title="Cascading Style Sheet" class="initialism">CSS</abbr> code</li>
						<li class="list-group-item"><strong>Customizable</strong> components such as menus, sliders and forms</li>
						<li class="list-group-item">
							Compatibility with <strong>popular browsers</strong> such as <a href="https://en.wikipedia.org/wiki/Google_Chrome" target="_blank" rel="no-referrer">Chrome</a>,
							<a href="https://en.wikipedia.org/wiki/Firefox" target="_blank" rel="no-referrer">Firefox</a>, <a href="https://en.wikipedia.org/wiki/UC_Browser" target="_blank" rel="no-referrer">UC</a>, <a href="https://en.wikipedia.org/wiki/Opera_(web_browser)" target="_blank" rel="no-referrer">Opera</a> and <a href="https://en.wikipedia.org/wiki/Safari_(web_browser)" target="_blank" rel="no-referrer">Safari</a> etc.
						</li>
					</ul>
				</div>
				<div class="col-lg-12 mt-3">
					<div class="card">
						<div class="card-body">
							<p>Whether you're <strong>looking for a template</strong> for a personal blog, a portfolio site, or an e-commerce store, we have a design that will suit your needs. Simply download the template, open it in your favorite text editor, and start customizing!</p>

							<p>Here's some examples of our templates below:</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Banner End -->
		</section>

		<div class="mt-3"></div>

		<section>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h2>Freshen up your website with our Latest <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> Templates</h2>

					<p>Looking for the latest and greatest <strong><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> website templates?</strong> Look no further than our collection of expertly crafted designs. Our templates are fully responsive and optimized for search engine performance, ensuring that your website will look great and be easy to find. Whether you're building a personal blog or a professional business website, our templates have everything you need to create a stunning online presence. So why wait? Browse our collection today and start building your dream website!</p>
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

			<!-- Templates Section -->
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
							                <small>
												@if ($template->category_name)
												    @if ($template->category)
												        <a href="{{ route('category.show', ['category' => $template->category->slug]) }}" class="link-dark">
												            {{ $template->category_name }}
												        </a>
												    @endif
												@elseif ($template->subcategory_name)
												    @if ($template->subcategory)
												        <a href="{{ route('subcategory.show', [
												                        'category' => $template->subcategory->category->slug,
												                        'subcategory' => $template->subcategory->slug,
												                    ]) }}" class="link-dark">
												            {{ $template->subcategory_name }}
												        </a>
												    @endif
												@elseif ($template->sub_subcategory_name)
												    @if ($template->sub_subcategory)
												        <a href="{{ route('subSubcategory.show', [
												                        'category' => $template->subcategory->category->slug,
												                        'subcategory' => $template->subcategory->slug,
												                        'subSubcategory' => $template->sub_subcategory->slug,
												                    ]) }}" class="link-dark">
												            {{ $template->sub_subcategory_name }}
												        </a>
												    @endif
												@endif
							                </small>
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
			<!-- Templates Section End -->
		</section>

		<section>
			<!-- Blog Section Start -->

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
										<p class="card-title fs-5">
											<a href="{{ route('template.blog.detail',$blog->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												{{ \Illuminate\Support\Str::limit($blog->title, 100, '...') }}
											</a>
										</p>
										<small>{{ $blog->created_at }}</small>
										<p class="card-text lead">{!! \Illuminate\Support\Str::limit($blog->short_description, 100, '...') !!}</p>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				@endforeach
			</div>
			<!-- Blog Section End -->
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