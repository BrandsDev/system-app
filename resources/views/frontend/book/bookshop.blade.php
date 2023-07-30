@extends('frontend.book.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Header Banner End -->
			<div class="mt-3"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-12">
					<h2>হিফজ শুরুর পূর্বেই এই বইগুলো সংগ্রহ করুন</h2>

					<p>আপনি হিফজ শুরুর পূর্বেই উপযুক্ত প্রস্তুতি নিতে চান? এই পথে আপনার সহায়তা করতে আমরা আপনাকে বইগুলোর সংগ্রহ করার জন্য উদ্বুদ্ধ করছি। আমাদের একটি বিশেষ সম্প্রদায়ে এই বইগুলো সংগ্রহ করে নিয়ে গেলে আপনি শুরুতে নিজেকে একটি সুষ্ঠু আধার দিতে পারেন। এই বইগুলো আপনাকে মূল্যবান তথ্য, পথনির্দেশিকা এবং প্রাথমিক বিষয়গুলি সরবরাহ করবে। আপনি সম্পূর্ণ পরিষ্কার ধারণা পেতে এই বইগুলো অবশ্যই সংগ্রহ করতে পারেন। তাই, এই বইগুলো আমাদের ওয়েবসাইট থেকে অর্ডার করুন এবং হিফজ পথে আগ্রহী চলে যান।</p>
				</div>
				<!-- <div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="{{ url('/books') }}">View all</a>
						</div>
					</div>
				</div> -->
			</div>

			<div class="mt-3"></div>

			<!-- Books Section -->
			<div class="row">
				@foreach ($books as $book)
				<div class="col-lg-3">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="{{ route('book.detail',$book->slug) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
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
					<p class="text-center">Have questions or suggestions? <a href="{{ route('book.contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection