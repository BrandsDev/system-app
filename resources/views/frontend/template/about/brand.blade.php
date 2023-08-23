@extends('frontend.template.skeleton.body')
@section('content')
		<!-- Breadcrumb -->
		<section>
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
							<li class="breadcrumb-item active" aria-current="page">Brand</li>
						</ol>
					</nav>
				</div>
			</div>
		</section>
		<!-- End Breadcrumb -->

		<!-- Content -->
		<section>
			<div class="row">
				<div class="col-12">
					<article>
						<h1>Brand Guidelines for Our Company: Your Partner in Web Development</h1>

						<p>At our company, we take our brand seriously. We know that our brand is more than just a logo and a color scheme. It's the way we communicate with our clients and the world, and it's how we represent ourselves as a <strong>leader in web development</strong>.</p>

						<h2>Our Brand Values</h2>

						<p>At our company, we are committed to the following brand values:</p>

						<ul>
							<li><strong>Excellence:</strong> We strive for excellence in everything we do, from the quality of our web development services to our communication with clients.</li>
							<li><strong>Innovation:</strong> We are always looking for new and better ways to help our clients succeed online, whether through cutting-edge technology or creative solutions.</li>
							<li><strong>Collaboration:</strong> We believe that collaboration is key to success, both within our team and with our clients.</li>
							<li><strong>Integrity:</strong> We are committed to honesty, transparency, and ethical business practices.</li>
						</ul>

						<h3>Our Logo</h3>

						<p>Our logo is an important representation of our brand, and we ask that it be used consistently and appropriately. The <b>logo</b> should not be altered in any way, and should always be displayed in its original colors and proportions.</p>

						<p>We also request that our logo never be used in a way that implies endorsement or partnership without our prior approval.</p>

						<div class="row border">
							<div class="col text-center bg-light p-5">
								<img src="http://localhost/system/img/about/bootstrap-logo.svg" alt="" width="256" height="204" />
							</div>
						</div>
						<div class="row border">
							<div class="col">
								<p class="mt-3">Our <b>logo</b> mark is also available in black and white. All rules for our primary logo apply to these as well.</p>
							</div>
						</div>
						<div class="row border">
							<div class="col text-center bg-light p-5">
								<img src="http://localhost/system/img/about/bootstrap-logo-black.svg" alt="" width="128" height="102" />
							</div>
							<div class="col text-center bg-dark p-5">
								<img src="http://localhost/system/img/about/bootstrap-logo-white.svg" alt="" width="128" height="102" />
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-12">
								<h3>Our Name</h3>
								<p>Bootstrap should always be referred to as just Bootstrap. No Twitter before it and no capital s.</p>
							</div>
							<div class="col-4 p-4 text-center bg-light">
								<p class="fs-3 fst-italic border-bottom">Bootstrap</p>
								<p class="text-success fw-bold">Correct</p>
							</div>
							<div class="col-4 p-4 text-center bg-light">
								<p class="fs-3 fst-italic border-bottom">BootStrap</p>
								<p class="text-danger fw-bold">Incorrect</p>
							</div>
							<div class="col-4 p-4 text-center bg-light">
								<p class="fs-3 fst-italic border-bottom">Twitter Bootstrap</p>
								<p class="text-danger fw-bold">Incorrect</p>
							</div>
						</div>

						<h4 class="mt-3">Our Color Scheme</h4>

						<p>Our color scheme is an important part of our brand identity. Our primary colors are blue (#0065A4) and green (#66A023), and we ask that these colors be used consistently in all branding materials.</p>

						<p>Other colors may be used in a complementary way, but should not detract from the overall impact of our primary colors.</p>

						<h4>Our Tone of Voice</h4>

						<p>Our tone of voice is friendly, approachable, and professional. We strive to communicate clearly and effectively with our clients, while maintaining a positive and engaging attitude.</p>

						<p>We also recognize the importance of SEO-friendly content, and strive to incorporate relevant keywords and phrases in our content without sacrificing the quality or readability of our writing.</p>

						<h4>Get Involved</h4>

						<p>We invite our partners and clients to use our branding materials in a way that accurately represents our brand values and identity. If you have any questions about our brand guidelines, please don't hesitate to contact us.</p>
					</article>
				</div>
			</div>
		</section>
		<!-- End Content -->

		<!-- Questions or Suggestions -->
		<section>
			<div class="row">
				<div class="col-12">
					<p>Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</section>
		<!-- End Questions or Suggestions -->
		
		@endsection