@extends('frontend.layouts.app')
@section('content')
<div class="header" id="header">
    <div class="container">
        <!-- ====================== login ====================== -->
         <section id="login" class="login" style="padding-top: 250px; padding-bottom: 250px;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="f-900" style="color: #B9FD50;">Welcome To</h3>
                        <h1 class="text-white f-900">Soft Host IT</h1>
                        <br>
                        <h5 class="text-white">Bright Career Bright Future</h5>
                        <h4 class="text-white">Are You The Next One to Join Us?</h4>
                    </div>
                </div>
            </div>
         </section>
    </div>
</div>
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 d-flex align-items-center">
            <h2>
                Make Your Future Digitalize With <br>
                <span style="color: #111204">
                    <strong>Soft Host IT</strong>
                </span>
                <p style="font-size: 16px; text-align:justify;margin-top:20px">
                    Soft Host IT is a dynamic web, mobile app, and desktop software developing software company in Bangladesh.Soft Host's entire team is full of intuitive people, brilliant minds and the best real-time problem solvers. We all work together hand-in-hand to achieve one goal- transforming the whole world into a “new digital world.”
                </p>
            </h2>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <img src="{{ asset('frontend/images/car-ab.png') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Benefits and Gratitude</h3>
            <p style="font-size: 16px; text-align:justify;margin-top:20px">
                These are some external benefits that Soft Host IT offers to continue a comfortable and feasible work environment. Soft Host IT ensures a comfortable and nurturing environment for every employee so that they can build their comfort zone here and contribute the best output ever.
            </p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/images/career/monitor.gif') }}" alt="" width="100px">
                        <h3 class="ms-3 my-auto">Friendly Working Environment</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/images/career/stethoscope.gif') }}" alt="" width="100px">
                        <h3 class="ms-3 my-auto">Essential Medical Emergency Back-up</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 mt-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/images/career/gift.gif') }}" alt="" width="100px">
                        <h3 class="ms-3 my-auto">Surprise Appreciation Gifts</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-6 mt-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/images/career/award.gif') }}" alt="" width="100px">
                        <h3 class="ms-3 my-auto">Yearly Award Ceremony</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section style="background: #111204">
    <div class="container">
        <div class="row mt-5 py-5">
            <div class="col-md-12">
                <h2 class="text-center my-5" style="color: #B9FD50;">Available Job Right Now</h2>
            </div>
            <div class="col-md-6 my-5">
                <h3 class="text-white">Senior Software Engineer (PHP/Laravel)</h3>
            </div>
            <div class="col-md-6 my-5 d-flex">
                <h3 class="text-white">Experience: 2 Years</h3>
                <a href="{{ route('frontend.career.view') }}" class="btn" style="margin-left: 40px;background:#B9FD50">View Details</a>
            </div>
        </div>
    </div>
</section>
@endsection
