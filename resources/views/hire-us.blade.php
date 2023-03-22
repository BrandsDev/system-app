@extends('skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<div class="my-5 text-center">
				<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" />
				<h1>Got a Project for Us?</h1>
				<div class="col-lg-6 mx-auto">
					<p>
						We would love to hear from you! If you have a project in mind that you would like us to work on, please don't hesitate to reach out to us. Our team of experts is always ready to take on new challenges and deliver
						exceptional results. Contact us today and let's discuss how we can help you achieve your goals.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col-md-4 col-lg-5 bg-white">
					<form class="needs-validation" validate>
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
								<label for="exampleFormControlTextarea1" class="form-label fw-bold">Choose your budget</label>
								<br />
								<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked />
									<label class="btn btn-outline-primary btn-lg" for="btnradio1">Below $20,000</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" />
									<label class="btn btn-outline-primary btn-lg" for="btnradio2">Above $20,000</label>
								</div>
							</div>
							<div class="col-12">
								<label for="exampleFormControlTextarea1" class="form-label fw-bold">Tell us about your project in short <span class="text-danger">*</span></label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Something has in my mind." required></textarea>
							</div>
							<div class="col-12">
								<button class="w-100 btn btn-primary btn-lg" type="submit">Let's Start Working Together</button>
							</div>
							<div class="col-12">
								<p class="text-center">You'll hear from us within 1-2 business days.</p>
							</div>
						</div>
					</form>
				</div>
				<div class="col"></div>
			</div>
		</main>
		
		@endsection