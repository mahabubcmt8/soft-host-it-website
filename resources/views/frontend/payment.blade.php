@extends('frontend.layouts.app')

@section('content')
<style>
    .card{
        border-radius: 25px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: 0.5s;
    }
    .card:hover{
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    }
</style>
    <div class="payment-us py-5" style="margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 align-items-stretch">
                    <div class="card text-center h-100" style="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <img src="{{ asset('frontend/images/SSLCommerz-Pay-With-logo-All-Size-01.png')}}" alt="" class="img-fluid" width="100%" style="border: 1px solid #ccc">
                                </div>
                                <div class="col-12 col-md-12">
                                    <img src="{{ asset('frontend/images/Trusted-Website-icon.png') }}" alt="" class="img-fluid" width="100px">
                                    <a href="https://invoice.sslcommerz.com/invoice-form?&refer=5F61F54CEEFDD" class="btn btn-success" target="_blank">
                                    CLICK HERE TO PAYMENT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6  align-items-stretch">
                    <div class="card text-center h-100" style="">
                        <div class="card-body">
                            <img src="{{ asset('frontend/images/ebl.png') }}" alt="" class="img-fluid" width="200px">
                            <ul class="list-group">
                                <li class="list-group-item" style="font-weight: 600">Eastern Bank Ltd</li>
                                <li class="list-group-item" style="font-weight: 600">AC Name : <span style="font-weight: 900">Soft Host IT</span></li>
                                <li class="list-group-item" style="font-weight: 600">A/C : 200 107 019 8601</li>
                                <li class="list-group-item" style="font-weight: 600">Routing No : 095471549</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  align-items-stretch">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="{{ asset('frontend/images/dutch-bangla-bank-softhostit.jpg') }}" alt="" class="img-fluid" width="500px">
                            <ul class="list-group mt-5">
                                <li class="list-group-item" style="font-weight: 600">Dutch Bangla Bank</li>
                                <li class="list-group-item" style="font-weight: 600">AC Name : <span style="font-weight: 900">Soft Host IT</span></li>
                                <li class="list-group-item" style="font-weight: 600">A/C : 120 110 003 1988</li>
                                <li class="list-group-item" style="font-weight: 600">Routing No : 090471544</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 col-12 align-items-stretch">
                    <div class="card text-center h-100" style="">
                        <div class="card-body">
                            <img src="{{ asset('frontend/images/bkash.gif') }}" alt="" class="img-fluid" width="400px">
                            <br><br>
                            <ul class="list-group mt-5">
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3 class="text-danger">Merchant-Payment</h3>
                                </li>
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3>
                                        <a href="https://shop.bkash.com/soft-host-i-trm15670/paymentlink" target="_blank" class="text-dark" style="text-decoration: none">01787247989</a>
                                    </h3>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 align-items-stretch">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="{{ asset('frontend/images/payment_method/rocket.svg') }}" alt="" class="img-fluid" width="200px">
                            <ul class="list-group mt-5">
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3 class="text-danger">Merchant-Payment</h3>
                                </li>
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3>
                                        <a href="javascript:void(0)" class="text-dark" style="text-decoration: none">
                                            01787247989-6
                                        </a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 align-items-stretch">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <img src="{{ asset('frontend/images/payment_method/nogod.svg') }}" alt="" class="img-fluid" width="200px">
                            <ul class="list-group mt-5">
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3 class="text-danger">Personal</h3>
                                </li>
                                <li class="list-group-item" style="font-weight: 600">
                                    <h3>
                                        <a href="javascript:void(0)" class="text-dark" style="text-decoration: none">
                                            01723883106
                                        </a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
