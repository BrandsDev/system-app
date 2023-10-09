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
						                                                            <a class="nav-link custom-margin" href="{{ route('subSubcategory.show', ['category' => $category->slug, 'subcategory' => $subcategory->slug, 'subSubcategory' => $subSubcategory->slug]) }}">{{ $subSubcategory->sub_subcategory_name }}</a>
						                                                        </li>
						                                                    @endforeach
						                                                </ul>
						                                            </div>
						                                        @else
						                                            <a class="nav-link ms-3" href="{{ route('subcategory.show', ['category' => $category->slug, 'subcategory' => $subcategory->slug]) }}">{{ $subcategory->subcategory_name }}</a>
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
                    	<img src="{{ asset('template/image/category/cover/' . $page->cover) }}" class="card-img-top" alt="{{ $page->cover_alt_text }}">
                    </div>
                    <div class="mb-3">
	                    <nav aria-label="breadcrumb">
						    <ol class="breadcrumb">
	                            <li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
	                            <li class="breadcrumb-item"><a href="{{ route('template.store') }}">Templates</a></li>
						        @foreach ($breadcrumbs as $breadcrumb)
						            <li class="breadcrumb-item"><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
						        @endforeach
						    </ol>
						</nav>
                    </div>
                    <div class="mb-3">
                        <h1 class="fs-3">{{ $page->title }}</h1>
						<p>{!! $page->description !!}</p>
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
                    </div>
                </div>
            </div>
            <!-- End Templates -->
        </div>

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