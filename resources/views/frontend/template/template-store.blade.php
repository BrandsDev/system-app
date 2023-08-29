@extends('frontend.template.skeleton.body')

@section('custom-head')
<style>
    .custom-margin {
        margin-left: 3rem;
    }
</style>
@endsection

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

        <div class="row">
            <!-- Categories -->
            <!-- Left Side (Hidden on Mobile) -->
            <div class="col-md-3 d-md-block d-none">
                <div class="left-side">
                    <!-- Additional sections under left side -->
                    <div class="mb-3">
                        <p class="fs-3">All Categories</p>
                        <!-- Collapsible Navbar -->
	                    @foreach($categories as $category)
						    <nav class="navbar navbar-expand-md">
						        <div class="collapse navbar-collapse" id="navbarCategories">
						            <ul class="navbar-nav">
						                <li class="nav-item">
						                    @if($category->subcategories && $category->subcategories->count() > 0)
						                        <a class="nav-link" data-bs-toggle="collapse" href="#mainCategory{{ $category->id }}" role="button" aria-expanded="false" aria-controls="mainCategory{{ $category->id }}">{{ $category->category_name }}</a>
						                        <div class="collapse" id="mainCategory{{ $category->id }}">
						                            <ul class="navbar-nav flex-column">
						                                @foreach($category->subcategories as $subcategory)
						                                    <li class="nav-item">
						                                        @if($subcategory->subSubcategories && $subcategory->subSubcategories->count() > 0)
						                                            <a class="nav-link ms-3" data-bs-toggle="collapse" href="#subcategory{{ $subcategory->id }}" role="button" aria-expanded="false" aria-controls="subcategory{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</a>
						                                            <div class="collapse" id="subcategory{{ $subcategory->id }}">
						                                                <ul class="navbar-nav flex-column">
						                                                    @foreach($subcategory->subSubcategories as $subSubcategory)
						                                                        <li class="nav-item">
						                                                            <a class="nav-link custom-margin" href="{{ route('subSubcategory.show', $subSubcategory->slug) }}">{{ $subSubcategory->sub_subcategory_name }}</a>
						                                                        </li>
						                                                    @endforeach
						                                                </ul>
						                                            </div>
						                                        @else
						                                            <a class="nav-link ms-3" href="{{ route('subcategory.show', $subcategory->slug) }}">{{ $subcategory->subcategory_name }}</a>
						                                        @endif
						                                    </li>
						                                @endforeach
						                            </ul>
						                        </div>
						                    @else
						                        <a class="nav-link" href="{{ route('category.show', $category->slug) }}">{{ $category->category_name }}</a>
						                    @endif
						                </li>
						            </ul>
						        </div>
						    </nav>
						@endforeach
                    </div>
                </div>
            </div>
            <!-- End Categories -->
            <!-- Templates -->
            <!-- Right Side (Always Shown) -->
            <div class="col-md-9">
                <div class="right-side">
                    <!-- Additional sections under right side -->
                    <div class="mb-3">
                        <h1>Unleash the Potential of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr> and Bootstrap 5</h1>

						<p>Harness the power of <abbr title="HyperText Markup Language" class="initialism"><strong>HTML5</strong></abbr><strong>, Bootstrap 5, and SEO-Friendly website templates</strong> to create responsive and visually appealing web pages. Our templates are optimized for search engines, ensuring your content reaches a wider audience. Dive into our diverse range of templates, each tailored to meet different needs and industries.</p>

						<div class="row">
							@foreach ($templates as $template)
							<div class="col-md-6">
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
                    </div>
                </div>
            </div>
            <!-- End Templates -->
        </div>

		<div class="row">
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-9">
				<div class="row">
					<div class="col-8 col-sm-12">
						
					</div>
				</div>
			</div>
		</div>

        <!-- Content -->
        <section>
			<div class="mt-3"></div>
	  <div class="row">
	    <div class="col-sm-3">
			
		</div>
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
          	
        </div>
      </div>
    </div>
  </div>

			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				

				<!-- Latest Item -->
				<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
					<div class="col-lg-9">
						
					</div>

					<!-- Template Section -->
					
				</div>
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