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

        <!-- Content -->
        <section>
            <div class="my-5 text-center">
                <img class="qr-code d-block mx-auto mb-4" src="https://chart.googleapis.com/chart?cht=qr&chl=Generate+QR+Code&chs=540x540&chld=L|0" alt="" width="320" height="320" />
            </div>

            <div class="row">
                <div class="col"></div>
                <div class="col-md-4 col-lg-5 bg-white">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="url" class="form-label fw-bold">Enter URL:</label>
                            <input type="text" class="form-control" id="url" placeholder="Enter URL Here" />
                        </div>
                        <div class="col-12">
                            <!-- Hidden Download Button -->
                            <a id="downloadButton" href="#" style="display: none" download="qrcode.png">
                              <button class="w-100 btn btn-success btn-lg">Download QR Code</button>
                            </a>
                        </div>
                        <div class="col-12">
                            <button type="button" id="generate" class="w-100 btn btn-primary btn-lg">Generate QR Code</button>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </section>
        <!-- End Content -->

        <!-- Questions or Suggestions -->
        <section>
            <div class="row">
                <div class="col-12">
                    <p class="text-center mt-3">Have questions or suggestions? <a href="{{ route('template.contact-us') }}">Contact Us</a></p>
                </div>
            </div>
        </section>
        <!-- End Questions or Suggestions -->

        @section('custom-scripts')
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         
            <script>
                // Function to HTML encode the text
                function htmlEncode(value) {
                    return $('<div/>').text(value).html();
                }

                $(document).ready(function () {
                    $('#generate').click(function () {
                        // Generate the link that would be used to generate the QR Code
                        let finalURL = 'https://chart.googleapis.com/chart?cht=qr&chl=' + htmlEncode($('#url').val()) + '&chs=540x540&chld=L|0';

                        // Replace the src of the image with the QR code image
                        $('.qr-code').attr('src', finalURL);

                        // Show the download button
                        $('#downloadButton').css('display', 'block');

                        // Set the download button's href attribute to the QR code image URL
                        $('#downloadButton').attr('href', finalURL);
                    });

                    $('#downloadButton').click(function () {
                        // Create an anchor element
                        var downloadLink = document.createElement('a');
                        downloadLink.href = $('#downloadButton').attr('href');
                        downloadLink.download = 'qrcode.png';

                        // Simulate a click on the anchor to trigger the download
                        downloadLink.click();
                    });
                });
            </script>


        @endsection

@endsection