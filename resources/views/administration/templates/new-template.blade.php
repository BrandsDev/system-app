@extends('administration.skeleton.body') @section('content')

@section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('templates') }}">Templates</a></li>
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

    <form method="POST" action="{{ route('new-template.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input class="form-control" list="datalistOptions" name="category" id="category" placeholder="Search Category" />
                            <datalist id="datalistOptions">
                                <option value="Francisco"> </option>
                                <option value="York"> </option>
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub-category" class="form-label">Sub Category</label>
                            <input class="form-control" list="datalistOptions" name="sub-category" id="sub-category" placeholder="Search Sub Category" />
                            <datalist id="datalistOptions">
                                <option value="Francisco"> </option>
                                <option value="York"> </option>
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub-sub-category" class="form-label">Sub Sub Category</label>
                            <input class="form-control" list="datalistOptions" name="sub-sub-category" id="sub-sub-category" placeholder="Search Sub Sub Category" />
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
                            <input type="text" class="form-control" name="sale-price" id="sale-price" placeholder="Sale Price" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="regular-price" class="form-label">Regular Price</label>
                            <input type="text" class="form-control" name="regular-price" id="regular-price" placeholder="Regular Price" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="commission" class="form-label">Commission</label>
                            <input type="text" class="form-control" name="commission" id="commission" placeholder="Commission" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="bootstrap-v" class="form-label">Bootstrap Version</label>
                            <input type="text" class="form-control" name="bootstrap-v" id="bootstrap-v" placeholder="Bootstrap Version" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="released" class="form-label">Released</label>
                            <input type="text" class="form-control" name="released" id="released" placeholder="Released" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="updated" class="form-label">Updated</label>
                            <input type="text" class="form-control" name="updated" id="updated" placeholder="Updated" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="version" class="form-label">Version</label>
                            <input type="text" class="form-control" name="version" id="version" placeholder="Version" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="seller-name" class="form-label">Seller Name</label>
                            <input type="text" class="form-control" name="seller-name" id="seller-name" placeholder="Seller Name" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="seller-email" class="form-label">Seller Email</label>
                            <input type="email" class="form-control" name="seller-email" id="seller-email" placeholder="Seller Email" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="short-description" class="form-label">Short Description</label>
                            <textarea id="custom-textarea" name="short-description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="long-description" class="form-label">Long Description</label>
                            <textarea id="custom-textarea" name="long-description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="change-log" class="form-label">Change Log</label>
                            <textarea id="custom-textarea" name="change-log"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="youtube-iframe" class="form-label">Youtube Iframe</label>
                            <textarea class="form-control" id="youtube-iframe" rows="2" name="youtube-iframe"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="header-content" class="form-label">Header Content</label>
                            <textarea class="form-control" id="header-content" rows="2" name="header-content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="meta-title" class="form-label">Meta Title</label>
                            <textarea class="form-control" id="meta-title" rows="2" name="meta-title"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="meta-description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta-description" rows="2" name="meta-description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="live-preview-link" class="form-label">Live Preview Link</label>
                            <input type="text" class="form-control" name="live-preview-link" id="live-preview-link" placeholder="Live Preview Link" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="downloadable-link" class="form-label">Downloadable Link</label>
                            <input type="text" class="form-control" name="downloadable-link" id="downloadable-link" placeholder="Downloadable Link" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="upload-image" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="upload-image" id="upload-image">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="upload-file" class="form-label">Upload File</label>
                            <input class="form-control" type="file" name="upload-file" id="upload-file" multiple>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="add-template-comment" class="form-label">Comment</label>
                            <textarea class="form-control" name="add-template-comment" id="add-template-comment" rows="3" name="add-template-comment"></textarea>
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
  plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
  toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
  tinycomments_mode: 'embedded',
  tinycomments_author: 'Author name',
  mergetags_list: [
    { value: 'First.Name', title: 'First Name' },
    { value: 'Email', title: 'Email' },
  ]
});
</script>
@endsection

@endsection
