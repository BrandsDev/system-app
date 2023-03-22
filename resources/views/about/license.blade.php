@extends('skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Breadcrumb -->
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">About Us</li>
							<li class="breadcrumb-item active" aria-current="page">License</li>
						</ol>
					</nav>
				</div>
			</div>

			<!-- Contents -->

			<div class="row">
				<div class="col-12">
					<h1>License FAQs</h1>
					<h3>What are the Requirements of the License?</h3>
					<ul>
						<li>To use our templates, you must:</li>
						<ul>
							<li>Acknowledge our company as the original creator of the templates.</li>
							<li>Keep the copyright notice intact in the source code.</li>
							<li>Purchase a license if you want to use our templates for commercial projects.</li>
						</ul>
					</ul>
					<h3>What are the Permissions of the License?</h3>
					<ul>
						<li>Our license permits you to:</li>
						<ul>
							<li>Use the templates for personal or commercial projects.</li>
							<li>Modify the templates according to your needs.</li>
							<li>Distribute the modified templates under the same license.</li>
						</ul>
					</ul>
					<h3>What are the Prohibitions of the License?</h3>
					<ul>
						<li>Our license forbids you to:</li>
						<ul>
							<li>Sell or redistribute our templates without proper attribution.</li>
							<li>Use our templates for illegal or immoral purposes.</li>
							<li>Claim our templates as your own work.</li>
						</ul>
					</ul>
					<h3>What are the Non-Requirements of the License?</h3>
					<ul>
						<li>Our license does not require you to:</li>
						<ul>
							<li>Use our templates exclusively.</li>
							<li>Include any specific attribution format.</li>
							<li>Notify us about the use of our templates.</li>
						</ul>
					</ul>
					<p>By using our templates, you agree to the terms and conditions of our license. If you have any questions or concerns, please do not hesitate to contact us.</p>
					<h2>Conclusion</h2>
					<p>
						We aim to provide high-quality templates to help you create stunning websites and digital projects. We hope this guide has clarified the terms and conditions of our license. If you have any questions or suggestions,
						feel free to get in touch with our team. Thank you for choosing our templates!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p>Have questions or suggestions? <a href="{{ url('/contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection