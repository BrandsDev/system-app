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
                    <li class="breadcrumb-item"><a href="{{ route('template.manage-sub-subcategories') }}">Manage Sub Subcategories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Sub Subcategory</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Add Sub Subcategory</h1>
        </div>
    </div>

    @if(session()->has('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        </div>
    </div>
    @endif

    <form class="needs-validation" method="POST" action="{{ route('template.new-sub-subcategory.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="subcategory_name" class="form-label">Subcategory Name *</label>
                            <input class="form-control" list="datalistSubcategory" name="subcategory_name" id="subcategory_name" placeholder="Subcategory Name" />
                            <datalist id="datalistSubcategory">
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->subcategory_name }}">{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_subcategory_name" class="form-label">Sub Subcategory Name *</label>
                            <input type="text" class="form-control" name="sub_subcategory_name" id="sub_subcategory_name" placeholder="Sub Subcategory Name" />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Sub Category Slug *</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Sub Subcategory Slug" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="custom-textarea" name="description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" name="meta_title" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Category Icon *</label>
                            <input class="form-control" type="file" name="icon" id="icon" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Category Thumb *</label>
                            <input class="form-control" type="file" name="thumb" id="thumb" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="cover" class="form-label">Category Cover *</label>
                            <input class="form-control" type="file" name="cover" id="cover" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="og_image" class="form-label">Category OG *</label>
                            <input class="form-control" type="file" name="og_image" id="og_image" />
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