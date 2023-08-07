@extends('administration.template.skeleton.body')
@section('content') @section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('template.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('template.manage-sellers') }}">Manage Seller's</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Seller</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Update Seller</h1>
        </div>
    </div>

    @if(session()->has('update'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session('update') }}
            </div>
        </div>
    </div>
    @endif

    <form class="needs-validation" method="POST" action="{{ route('template.seller.update',$seller->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $seller->name }}" placeholder="Name" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $seller->slug }}" placeholder="Slug" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input class="form-control" list="datalistGender" name="gender" value="{{ $seller->gender }}" placeholder="{{ $seller->gender }}" required />
                            <datalist id="datalistGender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile" value="{{ $seller->mobile }}" placeholder="Mobile" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $seller->email }}" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="bio" class="form-label">BIO</label>
                            <textarea id="custom-textarea" name="bio">{{ $seller->bio }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address">{{ $seller->address }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description">{{ $seller->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="youtube_iframe" class="form-label">Youtube Iframe</label>
                            <textarea class="form-control" rows="5" name="youtube_iframe">{{ $seller->youtube_iframe }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" rows="5" name="meta_title">{{ $seller->meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" rows="5" name="meta_description">{{ $seller->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">                            
                            <img src="{{ asset('template/seller/image/' . $seller->image) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">                            
                            <img src="{{ asset('template/seller/image/og/' . $seller->og_image) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="og_image" class="form-label">OG</label>
                            <input class="form-control" type="file" name="og_image" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">                            
                            <img src="{{ asset('template/seller/image/cover/' . $seller->cover) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover Image</label>
                            <input class="form-control" type="file" name="cover" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" list="datalistStatus" name="status" placeholder="@if($seller->status == 1) Published @else Draft @endif" />
                            <datalist id="datalistStatus">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Publish</button>
                <button type="submit" class="btn btn-primary">Draft</button>
                <button type="submit" class="btn btn-secondary">Publish & Add Another</button>
            </div>
        </div>
    </form>
</main>

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
@endsection @endsection