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
							<li class="breadcrumb-item active" aria-current="page">License</li>
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
						<h1>License FAQs</h1>

						<h2>What are the Requirements of the License?</h2>
						<ul>
							<li>To use our <strong>templates</strong>, you must:</li>
							<ul>
								<li>Acknowledge our company as the original creator of the <strong>templates</strong>.</li>
								<li>Keep the copyright notice intact in the source code.</li>
								<li>Purchase a license if you want to use our <strong>templates</strong> for commercial projects.</li>
							</ul>
						</ul>

						<h3>What are the Permissions of the License?</h3>
						<ul>
							<li>Our license permits you to:</li>
							<ul>
								<li>Use the <strong>templates</strong>for personal or commercial projects.</li>
								<li>Modify the <strong>templates</strong> according to your needs.</li>
								<li>Distribute the modified <strong>templates</strong> under the same license.</li>
							</ul>
						</ul>

						<h3>What are the Prohibitions of the License?</h3>
						<ul>
							<li>Our license forbids you to:</li>
							<ul>
								<li>Sell or redistribute our <strong>templates</strong> without proper attribution.</li>
								<li>Use our <strong>templates</strong> for illegal or immoral purposes.</li>
								<li>Claim our <strong>templates</strong> as your own work.</li>
							</ul>
						</ul>

						<h4>What are the Non-Requirements of the License?</h4>
						<ul>
							<li>Our license does not require you to:</li>
							<ul>
								<li>Use our <strong>templates</strong> exclusively.</li>
								<li>Include any specific attribution format.</li>
								<li>Notify us about the use of our <strong>templates</strong>.</li>
							</ul>
						</ul>
						<p>By using our <strong>templates</strong>, you agree to the terms and conditions of our license. If you have any questions or concerns, please do not hesitate to contact us.</p>

						<h4>Conclusion</h4>
						<p>We aim to provide <strong>high-quality templates</strong> to help you create stunning websites and digital projects. We hope this guide has clarified the terms and conditions of our license. If you have any questions or suggestions, feel free to get in touch with our team. Thank you for choosing our templates!</p>
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