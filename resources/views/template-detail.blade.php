@extends('skeleton.body')
@section('content')
		<main class="container p-3 py-5">
			<!-- Large Header Banner -->
			<div class="row">
				<div class="col-12">
					<h1>Hyper – Admin & Dashboard Template (Dark/Light)</h1>
				</div>
			</div>

			<div class="row g-5">
				<div class="col-md-5 col-lg-4 order-md-last">
					<p>
						<span class="text-primary">Grab it now!</span>
						<span class="badge bg-primary rounded-pill">Free</span>
					</p>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-sm bg-light">
							<div>
								<p class="my-0">Hyper</p>
								<small class="text-muted"><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> & Wordpress Template (Dark/Light)</small>
							</div>
							<span class="text-muted">0 ৳</span>
						</li>
					</ul>

					<div class="d-grid gap-2">
						<div class="btn-group" role="group" aria-label="Basic mixed styles example">
							<button type="button" class="btn btn-outline-primary">Live Preview</button>
						</div>
						<div class="btn-group" role="group" aria-label="Basic mixed styles example">
							<button type="button" class="btn btn-primary position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML"><i class="fa-solid fa-download"></i> HTML</button>
							<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress"><i class="fa-solid fa-download"></i> Wordpress</button>
						</div>
					</div>

					<ul class="list-group list-group-flush mt-3">
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							Reviewed by the Bootstrap team
						</li>
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							6 months technical support
						</li>
						<li class="list-group-item bg-light">
							<input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked disabled />
							100% money back guarantee
						</li>
					</ul>

					<ul class="list-group list-group-flush mt-3">
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Bootstrap
							<span class="text-muted">v5.2.0</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Released
							<span class="text-muted">4 years ago</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Updated
							<span class="text-muted">5 days ago</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Version
							<span class="text-muted">5.0.0</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Category
							<a href="#">Admin & Dashboard</a>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center bg-light">
							Questions?
							<button type="button" class="btn btn-outline-primary btn-sm">Contact Seller</button>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center p-3 bg-light">
							<div class="d-flex align-items-center">
								<div class="flex-shrink-0">
									<img src="img/seller-logo.png" alt="..." width="69" height="69" />
								</div>
								<div class="flex-grow-1 ms-3">
									<div class="ms-2 me-auto">
										<div class="fw-bold">Created by</div>
										Bootstrap
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-7 col-lg-8">
					<form class="needs-validation" novalidate>
						<div class="row g-3">
							<div class="col-sm-12">
								<img src="img/product/hyper-shot-1200x900-3.png" alt="" width="100%" height="100%" class="d-inline-block rounded-3 align-text-top" />
							</div>
						</div>
						<div class="row g-3">
							<ul class="nav nav-pills mb-3 border border-start-0 border-top-0 border-end-0" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active mb-3" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
										Description
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link mb-3" id="pills-changelog-tab" data-bs-toggle="pill" data-bs-target="#pills-changelog" type="button" role="tab" aria-controls="pills-changelog" aria-selected="false">
										Changelog
									</button>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
									<p>
										<strong>Hyper</strong> is a fully-featured dashboard and admin template that comes with tones of well-designed UI elements, components, widgets, and pages. The super clean and flexible layout would
										enable you to easily build web applications. It can be used to create a saas-based interface, custom admin panels, dashboard, CRM, CMS, e-commerce panel, etc.
									</p>

									<h2>Features:</h2>

									<ol>
										<li>Built using the latest bootstrap (v5.2)</li>
										<li>Easy customizations with extensive use of SCSS variables</li>
										<li>Fully responsive and works across all modern/supported browsers, devices</li>
										<li>Documentation on all available components, widgets, etc</li>
										<li>Easy development and tooling with Gulp workflow</li>
										<li>Landing Page included</li>
									</ol>

									<h2>Multiple Demos/Layout Options:</h2>

									<p>
										3 Pre-built layout options to cater needs of modern web applications. The flexible layout system, build automation (gulp-based build tools), and ready-to-use UI elements enable the development of
										modern web applications with great speed.
									</p>

									<h2>Components:</h2>

									<ul>
										<li>All Bootstrap components</li>
										<li>Icons</li>
										<li>Multiple widgets</li>
										<li>Toast Notifications</li>
										<li>Charts included using Chart.js, Brite Charts and Apex</li>
										<li>Select2, Date Range Picker, Input Mask included</li>
										<li>Bootstrap form wizard</li>
										<li>Timepickers</li>
										<li>Spinner</li>
										<li>Max Length Validator</li>
										<li>Advanced Datatables</li>
										<li>Dragula –&nbsp;Simple Drag and Drop</li>
										<li>Multiple File Uploads</li>
										<li>WYSIWYG Editors (Quill Js and SimpleMDE)</li>
										<li>Google and Vector Maps</li>
									</ul>

									<h3>Layouts:</h3>

									<ul>
										<li>Vertical Layout (With different sidebar themes including default, light, dark, etc)</li>
										<li>Horizontal Layout</li>
										<li>Detached Sidebar Layout</li>
										<li>Boxed (Fixed width) for Vertical and Horizontal</li>
									</ul>

									<h3>Apps:</h3>

									<ul>
										<li>Calendar</li>
										<li>Projects (List page, Detail Page, Create Project Page, Gantt)</li>
										<li>Tasks (List Page, Detail Modal, Add Task Modal, Kanban Board)</li>
										<li>Ecommerce (Product listing, product detail, order listing, order detail, shopping cart, checkout, seller listing, etc)</li>
										<li>Email (Inbox, Email details page, compose, etc)</li>
										<li>Chat</li>
										<li>Social Feed</li>
										<li>File Manager</li>
									</ul>

									<h3>Pages:</h3>

									<ul>
										<li>Sample Dashboards</li>
										<li>Profile</li>
										<li>Invoice</li>
										<li>FAQ</li>
										<li>Timeline</li>
										<li>Pricing</li>
										<li>Maintenance</li>
										<li>Login (Two variations)</li>
										<li>Register&nbsp;(Two variations)</li>
										<li>Logout&nbsp;(Two variations)</li>
										<li>Recover Password&nbsp;(Two variations)</li>
										<li>Lock Screen&nbsp;(Two variations)</li>
										<li>Confirm Mail&nbsp;(Two variations)</li>
										<li>Error 404</li>
										<li>Error 500</li>
									</ul>

									<h3>Documentation:</h3>

									<p>Each component is well explained with examples, code blocks, and other required details. &nbsp;</p>

									<h4>Design Files and Assets:</h4>

									<p>To get the design files (PSDs and Sketch files) of the template, contact us at support@coderthemes.com. These are provided as complimentary with Hyper.</p>

									<h4><strong>Django, Laravel, and Angular Samples: </strong></h4>

									<p>
										We have created Angular, Laravel, and Django samples with Hyper integrated into them as well. To get the sample projects, contact us at
										<a href="mailto:support@coderthemes.com">support@coderthemes.com</a>. These are provided as complimentary with Hyper.
									</p>

									<h4>ReactJS Version</h4>

									<p>ReactJS version is available <a title="Hyper React" href="https://themes.getbootstrap.com/product/hyper-react-admin-dashboard-template/" target="_blank" rel="noopener">here</a></p>

									<h4>Support and Free Updates</h4>

									<p>
										We are committed to our customers and support is of utmost priority. If you have any questions or issues with hyper, please feel free to contact us anytime by filling out the support form on our
										<a href="https://coderthemes.com/#contact" target="_blank" rel="noopener noreferrer">website</a> or via email at
										<a title="support@coderthemes.com" href="mailto:support@coderthemes.com" target="_blank" rel="noopener noreferrer">support@coderthemes.com</a>. We have also planned to add tons of updates and
										improvements which you will receive free of cost. &nbsp;
									</p>
								</div>
								<div class="tab-pane fade" id="pills-changelog" role="tabpanel" aria-labelledby="pills-changelog-tab">
									<p><strong>v5.0 – 7 Sep 2022</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.2.0</li>
										<li>Added: Starter Kit</li>
										<li>Added: New layout with hoverable sidebar menu</li>
										<li>Added: New layout with compact sidebar menu</li>
										<li>Added: Custom Tooltip and Pop Hover</li>
										<li>Added: Utility Page</li>
										<li>Added: Remix Icons</li>
										<li>Improved: Gulp flow to have flexibility</li>
										<li>Removed: Dripicons Icons</li>
									</ul>

									<p><strong>v4.6.0 – 23 Feb 2022</strong></p>

									<ul>
										<li>Improved: Light and dark mode. No need for separate file in order load the dark or light mode.</li>
										<li>Added: Wallet Dashboard</li>
										<li>Added: CRM Full App</li>
									</ul>

									<ul>
										<li>Projects page</li>
										<li>Order List</li>
										<li>Clients List</li>
										<li>Management</li>
									</ul>

									<p><strong>v4.5.0 – 07 December 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.1.3</li>
										<li>Added: Full Layout Mode</li>
										<li>Updated: All plugins to the latest</li>
									</ul>

									<p><strong>v4.4.0 – 28 August 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.1.0</li>
										<li>Updated: Offcanvas Page, Accordions and Badges</li>
										<li>Added: Placeholders Page</li>
									</ul>

									<p><strong>v4.3.0 – 21 July 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.0.2</li>
										<li>Updated: Datatables to Bootstrap v5</li>
										<li>Added: Treeview component</li>
										<li>Added: Vanilla JS-based version</li>
									</ul>

									<p><strong>v4.2.0 – 22 May 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.0.1</li>
										<li>Improved: Auth pages layouting</li>
									</ul>

									<p><strong>v4.1.0 –&nbsp;13 Apr 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.0.0-beta3</li>
										<li>Added: Menu toggle button for condensed menu</li>
										<li>Added: Offcanvas functionality</li>
									</ul>

									<p><strong>v4.0.0 – 18 Mar 2021</strong></p>

									<ul>
										<li>Updated: Bootstrap to v5.0.0-beta2</li>
										<li>Added: RTL Support</li>
										<li>Updated: All plugins to the latest</li>
										<li>Removed: Summernote Editor (Due to no support for bootstrap 5)</li>
										<li>Added: Quill Js Editor</li>
										<li>Updated: Material design icons 5.5.55 to v5.8.55</li>
										<li>Removed: Metis Menu support and replaced it with bootstrap’s native dropdown-based menu</li>
									</ul>

									<p><strong>v3.4.0 – 23 Sep 2020</strong></p>

									<ul>
										<li>Updated: Bootstrap to v4.5.2</li>
										<li>Updated: All plugins to the latest</li>
										<li>Added: File Manager Page</li>
										<li>Added: Calendar List view option</li>
										<li>Updated: Modals &amp; Rating Page</li>
										<li>Updated: Material design icons 4.4.95 to v5.5.55</li>
										<li>Added: Added color option for Checkbox &amp; Radio</li>
										<li>Fixed: Date range Picker time shows text issue</li>
									</ul>

									<p><strong>v3.3.0 – 16 May 2020</strong></p>

									<ul>
										<li>Updated: Bootstrap to <strong>v4.5.0</strong></li>
										<li>Improved: Search in topbar with auto-complete/suggestions dropdown</li>
										<li>Added: Added a dropdown for apps in the topbar</li>
										<li>Fixed: Datatables arrow direction issue</li>
										<li>Updated: Apex chart, Summernote to the latest version</li>
										<li>Added: Show/Hide Password Input Field</li>
										<li>Added: Disabled support on the custom switch</li>
									</ul>

									<p><strong>v3.2.0 – 25 Feb 2020</strong></p>

									<ul>
										<li>Improved: customization of layout, theme, left sidebar, etc</li>
										<li>Improved: Control the logo through HTML and CSS only. Removed the js-based manipulation</li>
										<li>Updated: Apexcharts to v3.15.6</li>
										<li>Updated: Summernote to 0.8.15</li>
										<li>Added: New vector map examples</li>
									</ul>

									<p><strong>v3.1.0 –&nbsp;23 Dec 2019</strong></p>

									<ul>
										<li>Updated: Bootstrap to the latest (v4.4.1)</li>
										<li>Added: Simple bar scroll</li>
										<li>Removed: Slimscroll</li>
										<li>Updated: Chartjs to 2.9.3</li>
										<li>Updated: Select2 to v4.0.12</li>
										<li>Updated: Jquery to v3.4.1</li>
										<li>Updated: Popper.js to 1.16.0</li>
										<li>Updated: Summernote to 0.8.12</li>
										<li>Updated: Rate.it to v1.1.3</li>
										<li>Updated: Jquery mask plugin to v1.14.16</li>
										<li>Updated: Apexcharts to v3.10.1</li>
									</ul>

									<p><strong>v3.0.0 –&nbsp;19 Oct 2019&nbsp;</strong></p>

									<ul>
										<li>Added: Two more color schemes (Creative, Modern)</li>
										<li>Added: Analytics Dashboard</li>
										<li>Added: Chat App</li>
										<li>Added: Projects Calendar – Gantt</li>
										<li>Added: Create Project Page</li>
										<li>Added: Social Feed Page</li>
										<li>Added: Tasks List &amp; Task Details Page</li>
										<li>Added: Profile 2 Page</li>
										<li>Added: Timeline Page</li>
										<li>Added: One Page Landing Page</li>
										<li>Added: Base UI Components Pages</li>
										<li>Added: Extended UI Pages</li>
										<li>Added: Unicons Icons</li>
										<li>Updated: Apexcharts to the latest version</li>
										<li>Improved: Dashboard Analytics charts</li>
									</ul>

									<p><strong>v2.0.0 –&nbsp;21 May 2019</strong></p>

									<ul>
										<li>Added: Webpack-based version</li>
										<li>Improved: Layout support and added javascript API to manage the layout and other customization</li>
										<li>Updated: Gulp 4-based build flow</li>
										<li>Improved: Left side menu – up to 3 level support</li>
										<li>Added: New Green color-based theme</li>
										<li>Added: Email application pages</li>
										<li>Added: Dark left sidebar style</li>
										<li>Added: Preloader</li>
										<li>Improved: More data tables examples</li>
										<li>Fixed Bug – When dropdown is at bottom of the page, the dropdown items were not being displayed</li>
										<li>Updated: Metismenu, Jquery, chartjs, apexcharts, britecharts, etc to the latest version</li>
									</ul>

									<p><strong>v1.5.0 –&nbsp;26 Feb 2019</strong></p>

									<ul>
										<li>Updated: Bootstrap to the latest (v4.3.1)</li>
										<li>Added: New layout having detached sidebar</li>
										<li>Added: New Project management Dashboard</li>
										<li>Improved: Scrollable Left sidebar</li>
										<li>Added: Bootstrap Datepicker</li>
										<li>Added: New apex radar chart</li>
										<li>Updated: Multiple plugins including Apexchats, Datatables, Moment, Popper.js, Britecharts, Chartjs, Material Design Icons, etc to the latest</li>
									</ul>

									<p><strong>Version 1.4.0 –&nbsp;10 Jan 2019</strong></p>

									<ul>
										<li>Upgraded to the latest bootstrap (v4.2.1)</li>
										<li>Added new dark color-based layout</li>
										<li>Added new dashboard for CRM use case</li>
										<li>Added a new page to demo spinners from the latest bootstrap</li>
										<li>Added demo for bootstrap-based toast</li>
										<li>Added multiple new widgets including chat, todo, statistical, etc</li>
										<li>Added sparkline chart support</li>
										<li>Added typeahead input control</li>
										<li>Added a dropdown selection in the navbar to allow the selection of language</li>
										<li>Improved scss to control the height of top navbar using variables</li>
										<li>Upgraded apex chart, material design, etc to the latest version</li>
										<li>Bug Fix – Topbar shows the logo in horizontal view on small screen</li>
									</ul>

									<p><strong>Version 1.3.0 – 25 Sep 2018</strong></p>

									<ul>
										<li>Added new e-commerce app-related pages including product listing, product detail, order list, order detail, shopping cart, checkout, seller listing, etc</li>
										<li>Added new widgets including beautiful charts in it</li>
										<li>Added boxed (fixed-width) layouts having verticle as well as horizontal menu support</li>
										<li>Changed icons of data tables to have better visibility around filtering</li>
										<li>Added new apex chart called “candlestick” (most favorite chart of crypto trade platform)</li>
										<li>Fixed issue with a scroll in the right sidebar</li>
										<li>Upgraded apex chart version</li>
									</ul>

									<p><strong>Version 1.2.0 – 3 Sep 2018</strong></p>

									<ul>
										<li>Added more form components including time picker, touch spin, max length, WYSIWYG editors, etc</li>
										<li>Added beautiful apex charts having many more examples and variations of charts (60+)</li>
										<li>Added more variations of modals, alerts</li>
										<li>Added variations of authentication-related pages (login, signup, recover password, etc)</li>
										<li>Fixed issue of toggle side menu in collapsed layout for the small device having width 768px</li>
									</ul>

									<p><strong>Version 1.1.0</strong> – 10 Aug 2018</p>

									<ul>
										<li>Upgraded to Bootstrap v4.1.3</li>
										<li>Added multiple layout options including support for horizontal nav, collapsed (mini), light sidenav, etc</li>
										<li>Added more sample apps and pages including project list page, project detail page, task board, task detail dialog, etc</li>
										<li>Added new components including Dragula, file upload, etc</li>
										<li>Improved form control input style</li>
										<li>Separated font icons related to styles from the main style file (app.css)</li>
										<li>Improved the top right menu item.</li>
										<li>Added more examples of google maps (with custom styles)</li>
									</ul>

									<p><strong>Version 1.0.0 – </strong>16 July 2018</p>
									<p>– First Release</p>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<!-- Header Banner End -->
			<div class="mt-3 border-top border-start-0 border-bottom-0 border-end-0"></div>
			<!-- Latest Item -->
			<div class="row border-top-0 border-start-0 border-bottom-0 border-end-0">
				<div class="col-lg-10">
					<h2>More <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, Bootstrap5, SEO Friendly Website Templates</h2>

					<p>Browse through our extensive collection of <abbr title="HyperText Markup Language" class="initialism">HTML5</abbr>, CSS3, Bootstrap3, and SEO-friendly website templates to find the perfect design for your next project. Our templates are designed with the latest coding standards and are fully responsive, ensuring that your website looks great on any device. With a variety of styles and layouts to choose from, you're sure to find the perfect template to fit your needs. Download and customize your template today to get your website up and running in no time!</p>
				</div>
				<div class="col-lg-2 align-self-center">
					<div class="row">
						<div class="col-12 col-sm-12">
							<a type="button" class="btn btn-outline-secondary float-end" href="/system/site-templates.html">View all</a>
						</div>
					</div>
				</div>
			</div>

			<div class="mt-3"></div>
			
			<div class="row">
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Contact Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Sigup Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-lg-4">
					<article>
						<figure>
							<div class="card shadow p-2 mb-5 bg-body rounded">
								<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
									<img src="administrative/www/digital-marketplace/free/html/login/form/centered/centered-html-bootstrap-5-login-form-sample.png" class="card-img-top" alt="..." />
								</a>
								<figcaption>
									<div class="card-body">
										<p class="card-title lead">
											<a href="/system/product-detail.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
												Centered HTML Bootstrap 5 Signup/Login Form
											</a>
										</p>
										<p class="card-text">
											<small><i>by</i> in <a href="#" target="_blank" class="link-dark">Category</a></small>
										</p>
									</div>
									<div class="card-body">
										<div class="btn-group" role="group" aria-label="Basic mixed styles example">
											<a href="/system/product-detail.html" target="_self" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download HTML">Details</a>
											<a href="" target="_blank" type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Download Wordpress">Live Preview</a>
										</div>
									</div>
								</figcaption>
							</div>
						</figure>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="text-center">Have questions or suggestions? <a href="{{ url('/contact-us') }}">Contact Us</a></p>
				</div>
			</div>
		</main>
		
		@endsection