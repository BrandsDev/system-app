@extends('frontend.template.skeleton.body')
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

		<section>
			<div class="row">
				<div class="col-12">
					{!! $page->long_description !!}
				</div>
			</div>
		</section>
	
	@endsection