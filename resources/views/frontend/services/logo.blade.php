@extends('frontend.layouts.app')

@section('content')
    <style>
        .card {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            border-radius: 15px;
        }
        h1{
            color: green;
            text-transform: uppercase;
            font-weight: 700;
            padding: 20px;
        }
    </style>
    <div id="gallary2">
        <div class="container">
            <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
                <h1 class="text-center">Logos created by us</h1>
                @for ($i = 1; $i <= 47; $i++)
                    <div class="col-md-2 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ asset('frontend/images/all-logo/' . $i . '.png') }}" class="popup-link"
                                    alt="Domain Registration, & Web Hosting, Online business Accounting Billing Inventory Software, Web Design & Development, Web Application Development, Doamin Registration, cheap best web hosting service, POS Software">
                                    <img class="card-img-top" src="{{ asset('frontend/images/all-logo/' . $i . '.png') }}"
                                        alt="Gallery Image {{ $i }}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
<!-- Include Magnific Popup CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#gallary2").magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endsection
