@extends('frontend.skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<div class="my-5 text-center">
				<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" />
				<h1>Contact Us</h1>
				<div class="col-lg-6 mx-auto">
					<p>
						if you have any questions or need more information about our services, please don't hesitate to contact us. Our team is always ready to assist you and provide you with the support you need. You can reach out to us by
						phone, email, or through our contact form. We look forward to hearing from you!
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col-md-4 col-lg-5 bg-white">
					<form class="needs-validation" novalidate>
						<div class="row g-3">
							<div class="col-sm-12">
								<label for="firstName" class="form-label fw-bold">Your name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="firstName" placeholder="I am?" value="" required />
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>

							<div class="col-12">
								<label for="email" class="form-label fw-bold">Your email address <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="email" placeholder="you@example.com" required />
								<div class="invalid-feedback">
									Please enter a valid email address for shipping updates.
								</div>
							</div>
							<div class="col-12">
								<label for="exampleFormControlTextarea1" class="form-label fw-bold">Tell us about your thoughts<span class="text-danger">*</span></label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="I want to tell." required></textarea>
							</div>
							<div class="col-12">
								<button class="w-100 btn btn-primary btn-lg" type="submit">Let's Start Discussion</button>
							</div>
							<div class="col-12">
								<p class="text-center">You'll hear from us within 1-2 business days.</p>
							</div>
							<div class="col-12">
								<p class="text-center">Got project for us? <a href="{{ url('/hire-us') }}">Yes!</a></p>
							</div>
						</div>
					</form>
				</div>
				<div class="col"></div>
			</div>
		</main>
		
		@endsection