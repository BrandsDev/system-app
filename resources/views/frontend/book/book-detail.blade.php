@extends('frontend.book.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Large Header Banner -->
			<div class="row mb-3">
				<div class="col-12">
					<nav aria-label="breadcrumb">
		                <ol class="breadcrumb">
		                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
		                    <li class="breadcrumb-item"><a href="{{ route('books') }}">Books</a></li>
		                    <li class="breadcrumb-item active" aria-current="page">{{ $book->name }}</li>
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

			<!-- Header Banner End -->
			<div class="mt-3"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h2>হিফজ শুরুর পূর্বেই এই বইগুলো সংগ্রহ করুন</h2>

					<p>আপনি হিফজ শুরুর পূর্বেই উপযুক্ত প্রস্তুতি নিতে চান? এই পথে আপনার সহায়তা করতে আমরা আপনাকে বইগুলোর সংগ্রহ করার জন্য উদ্বুদ্ধ করছি। আমাদের একটি বিশেষ সম্প্রদায়ে এই বইগুলো সংগ্রহ করে নিয়ে গেলে আপনি শুরুতে নিজেকে একটি সুষ্ঠু আধার দিতে পারেন। এই বইগুলো আপনাকে মূল্যবান তথ্য, পথনির্দেশিকা এবং প্রাথমিক বিষয়গুলি সরবরাহ করবে। আপনি সম্পূর্ণ পরিষ্কার ধারণা পেতে এই বইগুলো অবশ্যই সংগ্রহ করতে পারেন। তাই, এই বইগুলো আমাদের ওয়েবসাইট থেকে অর্ডার করুন এবং হিফজ পথে আগ্রহী চলে যান।</p>
				</div>
				<div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ url('/books') }}">View all</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Banner End -->
			<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>

			<div class="mt-3"></div>

			<!-- Books Section -->
			<div class="row">
				@foreach ($relatedBook as $book)
				<div class="col-lg-3">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="{{ route('template.detail',$book->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="{{ asset('book/image/' . $book->image) }}" class="card-img-top" alt="...">
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="{{ route('book.detail',$book->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												{{ \Illuminate\Support\Str::limit($book->name, 100, '...') }}
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> {{ $book->publisher }}</small><br>
											<small><i>in</i> <a href="{{ url('/' . $book->slug) }}" target="_blank" class="link-dark">{{ $book->category_name }}</a></small>
										</p>
										<span class="card-text">
											@if($book->sale_price)

											<small class="fw-bold fs-5 text-success">৳ {{ $book->sale_price }}</small> | <small class="fw-bold text-decoration-line-through text-muted">৳ {{ $book->regular_price }}</small>

											@else

											<small class="fw-bold fs-5 text-success">৳ {{ $book->regular_price }}</small>

											@endif										
										</span>
									</div>
									<div class="card-body">
										<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
											<a href="{{ route('book.detail',$book->slug) }}" target="_self" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Add to Cart</a>
											<a href="" target="_blank" type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Buy Now</a>
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
					<p class="text-center">Have questions or suggestions? <a href="{{ url('/contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection