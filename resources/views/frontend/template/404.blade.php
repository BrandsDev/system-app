@extends('frontend.template.skeleton.body')
@section('content')
    <!-- Header Banner -->
    <div class="row">
      <div class="col-lg-12">
        <h1>404 Error</h1>
        <p>Sorry, the page you are looking for cannot be found.</p>
        <p>Please check the URL or return to the <a href="{{ url('/template') }}">homepage</a>.</p>
      </div>
    </div>

  @endsection