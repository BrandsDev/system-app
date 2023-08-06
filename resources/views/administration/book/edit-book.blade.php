@extends('administration.book.skeleton.body')
@section('content') @section('custom-head')
<script src="https://cdn.tiny.cloud/1/m9g2pjluv64jkrzcnksdf4ur6nd9lvyrbatcjua3iazeof63/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

<main class="container p-3 py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('book.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('book.manage-books') }}">Manage Books</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Book</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>Update Book</h1>
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

    <form class="needs-validation" method="POST" action="{{ route('book.update',$book->id) }}" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $book->name }}" placeholder="Name" required />
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $book->slug }}" placeholder="Slug" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category</label>
                            <input class="form-control" list="datalistCategory" name="category_name" value="{{ $book->category_name }}" placeholder="Category" required />
                            <datalist id="datalistCategory">
                                @foreach($categories as $category)
                                <option value="{{ $category->category_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="subcategory_name" class="form-label">Subcategory</label>
                            <input class="form-control" list="datalistSubcategory" name="subcategory_name" value="{{ $book->subcategory_name }}" placeholder="Subcategory" />
                            <datalist id="datalistSubcategory">
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->subcategory_name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="sub_subcategory_name" class="form-label">Sub Subcategory</label>
                            <input class="form-control" list="datalistSubSubcategory" name="sub_subcategory_name" value="{{ $book->sub_subcategory_name }}" placeholder="Sub Subcategory" />
                            <datalist id="datalistSubSubcategory">
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
                            <label for="sku" class="form-label">SKU</label>
                            <input type="text" class="form-control" name="sku" value="{{ $book->sku }}" placeholder="0.00" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="sale_price" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" name="sale_price" value="{{ $book->sale_price }}" placeholder="0.00" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="regular_price" class="form-label">Regular Price</label>
                            <input type="text" class="form-control" name="regular_price" value="{{ $book->regular_price }}" placeholder="0.00" required />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="commission" class="form-label">Commission</label>
                            <input type="text" class="form-control" name="commission" value="{{ $book->commission }}" placeholder="0.00" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input class="form-control" list="datalistPublisher" name="publisher" value="{{ $book->publisher }}" placeholder="Publisher" required />
                            <datalist id="datalistPublisher">
                                @foreach($BookPublishers as $BookPublisher)
                                <option value="{{ $BookPublisher->name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="ranking" class="form-label">Ranking</label>
                            <input type="text" class="form-control" name="ranking" value="{{ $book->ranking }}" placeholder="Ranking" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input class="form-control" list="datalistAuthor" name="author" value="{{ $book->author }}" placeholder="Author" required />
                            <datalist id="datalistAuthor">
                                @foreach($bookAuthors as $bookAuthor)
                                <option value="{{ $bookAuthor->name }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea id="custom-textarea" name="short_description">{{ $book->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="long_description" class="form-label">Long Description</label>
                            <textarea id="custom-textarea" name="long_description">{{ $book->long_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="specification" class="form-label">Specification</label>
                            <textarea id="custom-textarea" name="specification">{{ $book->specification }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="youtube_iframe" class="form-label">Youtube Iframe</label>
                            <textarea class="form-control" id="youtube_iframe" rows="2" name="youtube_iframe">{{ $book->youtube_iframe }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="header_content" class="form-label">Header Content</label>
                            <textarea class="form-control" id="header_content" rows="2" name="header_content">{{ $book->header_content }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <textarea class="form-control" id="meta_title" rows="2" name="meta_title">{{ $book->meta_title }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta_description" rows="2" name="meta_description">{{ $book->meta_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="order_type" class="form-label">Order Type</label>
                            <input class="form-control" list="datalistOrderType" name="order_type" placeholder="@if($book->order_type == 1) Normal @else Pre-Order @endif" />
                            <datalist id="datalistOrderType">
                                <option value="1">Normal</option>
                                <option value="0">Pre-Order</option>
                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="is_featured" value="1" id="featuredCheckDefault" @if($book->is_featured == 1) checked @endif>
                                  <label class="form-check-label" for="featuredCheckDefault">
                                    Featured?
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="image" class="form-label">Book Image</label>
                            <img src="{{ asset('book/image/' . $book->image) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <input class="form-control" type="file" name="image" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="page_images" class="form-label">Page Images</label>
                            <img src="{{ asset('book/image/pages/' . $book->page_images) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <input class="form-control" type="file" name="page_images" multiple />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="og" class="form-label">OG Image</label>
                            <img src="{{ asset('book/image/' . $book->og) }}" class="img-thumbnail" alt="...">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <input class="form-control" type="file" name="og" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input class="form-control" type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" list="datalistStatus" name="status" id="status" placeholder="@if($book->status == 1) Published @else Draft @endif" />
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
                            <textarea class="form-control" name="comment" rows="3">{{ $book->comment }}</textarea>
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
        selector: 'textarea',
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