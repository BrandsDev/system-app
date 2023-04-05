@extends('administration.skeleton.body')
@section('content')
<main class="container p-3 py-5">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Templates</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Content -->
        <div class="row g-5">
            <div class="col-md-8">
                <div class="row">
                  <div class="col">
                        <h1>Add Template</h1>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
	</main>
@endsection