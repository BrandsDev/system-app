@extends('administration.skeleton.body') @section('content')
<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('templates') }}">Templates</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Templates</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Edit Template</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="Slug" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input class="form-control" list="datalistOptions" id="category" placeholder="Search Category" />
                        <datalist id="datalistOptions">
                            <option value="Francisco"> </option>
                            <option value="York"> </option>
                        </datalist>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="sub-category" class="form-label">Sub Category</label>
                        <input class="form-control" list="datalistOptions" id="sub-category" placeholder="Search Sub Category" />
                        <datalist id="datalistOptions">
                            <option value="Francisco"> </option>
                            <option value="York"> </option>
                        </datalist>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="sub-sub-category" class="form-label">Sub Sub Category</label>
                        <input class="form-control" list="datalistOptions" id="sub-sub-category" placeholder="Search Sub Sub Category" />
                        <datalist id="datalistOptions">
                            <option value="Francisco"> </option>
                            <option value="York"> </option>
                        </datalist>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="sale-price" class="form-label">Sale Price</label>
                        <input type="text" class="form-control" id="sale-price" placeholder="Sale Price" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="regular-price" class="form-label">Regular Price</label>
                        <input type="text" class="form-control" id="regular-price" placeholder="Regular Price" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="commission" class="form-label">Commission</label>
                        <input type="text" class="form-control" id="commission" placeholder="Commission" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label for="bootstrap-v" class="form-label">Bootstrap Version</label>
                        <input type="text" class="form-control" id="bootstrap-v" placeholder="Bootstrap Version" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label for="released" class="form-label">Released</label>
                        <input type="text" class="form-control" id="released" placeholder="Released" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label for="updated" class="form-label">Updated</label>
                        <input type="text" class="form-control" id="updated" placeholder="Updated" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label for="version" class="form-label">Version</label>
                        <input type="text" class="form-control" id="version" placeholder="Version" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="seller-name" class="form-label">Seller Name</label>
                        <input type="text" class="form-control" id="seller-name" placeholder="Seller Name" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="seller-email" class="form-label">Seller Email</label>
                        <input type="email" class="form-control" id="seller-email" placeholder="Seller Email" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="short-description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="short-description" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="long-description" class="form-label">Long Description</label>
                        <textarea class="form-control" id="long-description" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="change-log" class="form-label">Change Log</label>
                        <textarea class="form-control" id="change-log" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="youtube-iframe" class="form-label">Youtube Iframe</label>
                        <textarea class="form-control" id="youtube-iframe" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="header-content" class="form-label">Header Content</label>
                        <textarea class="form-control" id="header-content" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="meta-title" class="form-label">Meta Title</label>
                        <textarea class="form-control" id="meta-title" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="meta-description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta-description" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="live-preview-link" class="form-label">Live Preview Link</label>
                        <input type="text" class="form-control" id="live-preview-link" placeholder="Live Preview Link" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="downloadable-link" class="form-label">Downloadable Link</label>
                        <input type="text" class="form-control" id="downloadable-link" placeholder="Downloadable Link" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="upload-image" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="upload-file">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="upload-file" class="form-label">Upload File</label>
                        <input class="form-control" type="file" id="upload-file" multiple>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <button type="button" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-secondary">Save & Add Another</button>
        </div>
    </div>
</main>

@endsection
