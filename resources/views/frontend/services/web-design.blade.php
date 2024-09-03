@extends('frontend.layouts.app')

@section('content')
<style>
    #header ul{
        list-style-type: none;
        padding-left: 0;
        margin-top: 30px;
        margin-left: 100px;
    }
    #header ul li{
        color : white;
        line-height: 30px;
    }
    .card{
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    }
    .custom-card {
        display: flex;
        flex-direction: column;
    }

    .custom-card-img {
        height: 200px; /* Set the desired height */
        object-fit: cover; /* Ensures the image covers the area while maintaining aspect ratio */
    }

    .custom-card-body {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>

<div class="header" id="header">
    <div class="container">
        <div class="row" style="padding-top: 150px;padding-bottom: 150px">
            <div class="col-md-6">
                <h1 style="color: #B9FD50">Website
                    Design & Development</h1>
                <p class="text-white" style="text-align: justify">We developed any kinds of website along with interactive, strong & user friendly platform which is based on so much easy to update easy to manage contents. We ensure High level security, user right protection and simultaneously updateable together once or more user. You can make any changes of you website anytime and anywhere. Choose your package from our package list & we all so developed customized website as your demands.</p>
                <a href="#package" class="btn" style="background: #B9FD50;font-weight:600">VIEW PACKAGE</a>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; School Website</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; Corporate Website</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; News Portal</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; Personal Website</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; College Website</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; Blog</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; e-Commerce Website</li>
                    <li><i class="fa-regular fa-circle-check"></i>&nbsp;&nbsp; Organization Website</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-md-12">
            <h1 class="py-3 text-center" style="font-weight: 800; color:green">Websites created by us</h1>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web1.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.jahangircircle.org/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web2.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.safebdfoundation.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web3.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.bist.ac.bd/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web4.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.safenews24.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web5.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.daiyanbd.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web7.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.priyojonbazar.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web8.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.hello724.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/web9.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://www.msrahmantraders.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card custom-card">
                <img src="{{ asset('frontend/images/website-list/propertydekho.png') }}" class="card-img-top custom-card-img" alt="...">
                <div class="card-body custom-card-body py-4 text-center">
                  <a href="https://propertydekhobd.com/" target="_blank" class="btn btn-info">VISIT WEBSITE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="package">
    <div class="row py-5">
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-body p-5" style="background: #111204">
                    <h3 class="text-center" style="color: #B9FD50">Business Website</h3>
                    <hr>
                    <h3 class="text-center" style="color: #B9FD50">৳ 15000 BDT</h3>
                    <hr>
                    <a href="javascript:void(0)" class="btn" style="background: #B9FD50;color: #111204">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="card">
                <div class="card-body p-5" style="background: #111204">
                    <h3 class="text-center" style="color: #B9FD50">Ecommerce Website</h3>
                    <hr>
                    <h3 class="text-center" style="color: #B9FD50">৳ 25000 BDT</h3>
                    <hr>
                    <a href="javascript:void(0)" class="btn" style="background: #B9FD50;color: #111204">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center mt-5">
            <div class="card">
                <div class="card-body p-5" style="background: #111204">
                    <h3 class="text-center" style="color: #B9FD50">Bricks Website</h3>
                    <hr>
                    <h3 class="text-center" style="color: #B9FD50">৳ 15000 BDT</h3>
                    <hr>
                    <a href="javascript:void(0)" class="btn" style="background: #B9FD50;color: #111204">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center mt-5">
            <div class="card">
                <div class="card-body p-5" style="background: #111204">
                    <h3 class="text-center" style="color: #B9FD50">Website</h3>
                    <hr>
                    <h3 class="text-center" style="color: #B9FD50">৳ 15000 BDT</h3>
                    <hr>
                    <a href="javascript:void(0)" class="btn" style="background: #B9FD50;color: #111204">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
