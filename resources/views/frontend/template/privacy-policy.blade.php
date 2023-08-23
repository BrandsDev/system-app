@extends('frontend.template.skeleton.body')
@section('content')
        <!-- Breadcrumb -->
        <section>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('template.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
						<h1>Privacy Policy</h1>

						<p>At our company, we are committed to protecting the privacy and security of our clients' personal information. This Privacy Policy outlines the types of information we collect, how we use it, and the measures we take to keep it safe.</p>

						<h2>Information We Collect</h2>

						<p>We collect personal information such as your name, email address, phone number, and other contact details when you use our services. We may also collect other information such as your IP address, browser type, and device information.</p>

						<h3>How We Use Your Information</h3>

						<p>We use your personal information to provide you with the services you have requested, such as website development, technical SEO, on-page SEO, off-page SEO, WordPress installation and setup, website maintenance, copywriting, and creative content and graphics design. We may also use your information for marketing purposes, such as sending you newsletters or promotional offers. However, we will always give you the option to opt-out of these communications.</p>

						<h3>How We Protect Your Information</h3>

						<p>We take security seriously and have implemented measures to protect your personal information from unauthorized access, use, and disclosure. We use encryption, firewalls, and other security technologies to safeguard your information. We also limit access to your information to only those employees who need it to perform their job functions.</p>

						<h3>Sharing Your Information</h3>

						<p>We will never sell or rent your personal information to third parties. We may share your information with our trusted partners who provide services on our behalf, such as web hosting, payment processing, or customer support. We require these partners to protect your information in accordance with our Privacy Policy and applicable laws and regulations.</p>

						<h4>Your Rights and Choices</h4>

						<p>You have the right to access, correct, and delete your personal information. You can also object to the processing of your information or restrict the use of your information. To exercise these rights, please contact us using the information provided below.</p>

						<h4>Changes to Our Privacy Policy</h4>

						<p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal obligations. We encourage you to review this page periodically for the latest information.</p>

						<h4>Contact Us</h4>

						<p>If you have any questions or concerns about our Privacy Policy, please contact us at: Email: [insert email address] Phone: [insert phone number] Address: [insert address]</p>
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