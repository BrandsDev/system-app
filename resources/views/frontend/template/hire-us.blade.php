@extends('frontend.template.skeleton.body')
@section('content') @section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
        <!-- Breadcrumb -->
        <section>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Content -->
        <section>
			<div class="my-5 text-center">
				<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" />
				<h1>Got a Project for Us?</h1>
				<div class="col-lg-6 mx-auto">
					<p>We would love to hear from you! If you have a project in mind that you would like us to work on, please don't hesitate to reach out to us. Our team of experts is always ready to take on new challenges and deliver exceptional results. Contact us today and let's discuss how we can help you achieve your goals.</p>
				</div>
			</div>

			<div class="row">
				<div class="col"></div>
				<div class="col-md-4 col-lg-5 bg-white">
					<form class="row g-3 float-end needs-validation" method="POST" action="{{ route('template.front.newHire') }}" novalidate>
						@csrf
						<div class="row g-3">
							<div class="col-sm-12">
								<label for="firstName" class="form-label fw-bold">Your name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="name" placeholder="I am?" required />
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>

							<div class="col-12">
								<label for="email" class="form-label fw-bold">Your email address <span class="text-danger">*</span></label>
								<input type="email" class="form-control" name="email" placeholder="you@example.com" required />
								<div class="invalid-feedback">
									Please enter a valid email address.
								</div>
							</div>
							<div class="col-12">
								<label for="exampleFormControlTextarea1" class="form-label fw-bold">Choose your budget</label>
								<br />
								<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="budget" id="below" value="below" autocomplete="off" checked />
									<label class="btn btn-outline-primary btn-lg" for="below">Below $15,000</label>

									<input type="radio" class="btn-check" name="budget" id="above" value="above" autocomplete="off" />
									<label class="btn btn-outline-primary btn-lg" for="above">Above $15,000</label>
								</div>
							</div>
							<div class="col-12">
								<label for="details" class="form-label fw-bold">Tell us about your project in short <span class="text-danger">*</span></label>
								<textarea class="form-control" name="details" rows="3" placeholder="Something has in my mind." required></textarea>
							</div>
							<div class="col-12">
								<button class="w-100 btn btn-primary btn-lg" type="submit">Let's Start Working Together</button>
							</div>
							<div class="col-12">
								<p class="text-center">You'll hear from us within 3-5 business days.</p>
							</div>
						</div>
					</form>
				</div>
				<div class="col"></div>
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

	@section('custom-scripts')
	<script>
	    tinymce.init({
	        selector: '#custom-textarea',
	        plugins: 'link image code',
	        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code'
	    });
	</script>

	<script>
	    // Example starter JavaScript for disabling form submissions if there are invalid fields
	    (() => {
	      'use strict'

	      // Fetch all the forms we want to apply custom Bootstrap validation styles to
	      const forms = document.querySelectorAll('.needs-validation')

	      // Loop over them and prevent submission
	      Array.from(forms).forEach(form => {
	        form.addEventListener('submit', event => {
	          if (!form.checkValidity()) {
	            event.preventDefault()
	            event.stopPropagation()
	          }

	          form.classList.add('was-validated')
	        }, false)
	      })
	    })()
	</script>
	@endsection

@endsection