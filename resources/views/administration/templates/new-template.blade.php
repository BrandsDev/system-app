@extends('administration.skeleton.body')
@section('content') @section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('manage-templates') }}">Templates</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Templates</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Add Template</h1>
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

    <form class="needs-validation" method="POST" action="{{ route('new-template.store') }}" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Slug" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category</label>
                            <input class="form-control" list="datalistCategory" name="category_name" placeholder="Search Category" required />
                            <datalist id="datalistCategory">
                                @foreach($categories as $category)
                                <option value="{{ $category->category_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_category_name" class="form-label">Sub Category</label>
                            <input class="form-control" list="datalistSubCategory" name="subcategory_name" placeholder="Search Sub Category" required />
                            <datalist id="datalistSubCategory">
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->subcategory_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_sub_category_name" class="form-label">Sub Sub Category</label>
                            <input class="form-control" list="datalistSubSubCategory" name="sub_subcategory_name" placeholder="Search Sub Sub Category" />
                            <datalist id="datalistSubSubCategory">
                                @foreach($sub_subcategories as $sub_subcategory)
                                <option value="{{ $sub_subcategory->sub_subcategory_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="sale_price" class="form-label">SKU</label>
                            <input type="text" class="form-control" name="sku" placeholder="SKU" required />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="sale_price" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" name="sale_price" placeholder="0.00" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="regular_price" class="form-label">Regular Price</label>
                            <input type="text" class="form-control" name="regular_price" placeholder="0.00" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="commission" class="form-label">Commission</label>
                            <input type="text" class="form-control" name="commission" placeholder="0.00" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="bootstrap_v" class="form-label">Bootstrap Version</label>
                            <input type="text" class="form-control" name="bootstrap_v" placeholder="Bootstrap Version" required />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="released" class="form-label">Released</label>
                            <input type="text" class="form-control" name="released" placeholder="DD/MM/YYYY" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="updated" class="form-label">Updated</label>
                            <input type="text" class="form-control" name="updated" placeholder="DD/MM/YYYY" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="version" class="form-label">Version</label>
                            <input type="text" class="form-control" name="version" placeholder="Version" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="seller_name" class="form-label">Seller Name</label>
                            <input type="text" class="form-control" name="seller_name" placeholder="Seller Name" required />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="seller_email" class="form-label">Seller Email</label>
                            <input type="email" class="form-control" name="seller_email" placeholder="Seller Email" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea id="custom-textarea" name="short_description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea id="custom-textarea" name="long_description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="change_log" class="form-label">Change Log</label>
                            <textarea id="custom-textarea" name="change_log"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="youtube_iframe" class="form-label">Youtube Iframe</label>
                            <textarea class="form-control" id="youtube_iframe" rows="5" name="youtube_iframe"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="header_content" class="form-label">Header Content</label>
                            <textarea class="form-control" id="header_content" rows="5" name="header_content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" id="meta_title" rows="2" name="meta_title"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta_description" rows="2" name="meta_description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="order_type" class="form-label">Order Type</label>
                            <input class="form-control" list="datalistOrderType" name="order_type" value="{{ old('order_type', '0') }}" placeholder="Pre-Order" />
                            <datalist id="datalistOrderType">
                                <option value="1">Normal</option>
                                <option value="0">Pre-Order</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="is_featured" value="0" id="featuredCheckDefault">
                                  <label class="form-check-label" for="featuredCheckDefault">Featured?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="live_preview_link" class="form-label">Live Preview Link</label>
                            <input type="text" class="form-control" name="live_preview_link" placeholder="Live Preview Link" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="downloadable_link" class="form-label">Downloadable Link</label>
                            <input type="text" class="form-control" name="downloadable_link" placeholder="Downloadable Link" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="image" multiple />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="og" class="form-label">OG Image</label>
                            <input class="form-control" type="file" name="og" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload File</label>
                            <input class="form-control" type="file" name="file" multiple />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" list="datalistStatus" name="status" value="{{ old('status', '0') }}" placeholder="Draft"/>
                            <datalist id="datalistStatus">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="custom-textarea" name="comment" rows="3"></textarea>
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
@endsection

@endsection