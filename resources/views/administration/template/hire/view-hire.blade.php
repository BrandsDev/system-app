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
                    <li class="breadcrumb-item"><a href="{{ route('template.manage-hires') }}">Manage Hires</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Hire</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content -->

    <div class="row">
        <div class="col-md-12">
            <h1>View Hire</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <input type="text" readonly class="form-control-plaintext" value="{{ $hire->name }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <input type="text" readonly class="form-control-plaintext" value="{{ $hire->email }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="budget" id="below" value="below" autocomplete="off" @if($hire->budget == 'below') checked @endif disabled />
                            <label class="btn btn-outline-primary btn-lg" for="below">Below $15,000</label>

                            <input type="radio" class="btn-check" name="budget" id="above" value="above" autocomplete="off" @if($hire->budget == 'above') checked @endif disabled />
                            <label class="btn btn-outline-primary btn-lg" for="above">Above $15,000</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        {!! $hire->details !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
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