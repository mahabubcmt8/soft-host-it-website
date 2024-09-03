@extends('frontend.layouts.app')

@section('content')
<style>
    .domain .card {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        border: none;
        border-radius: 20px;
        transition: transform 0.5s ease;
        border-bottom: 10px solid #72a6fa;
    }
    .domain .card:hover {
        transform: scale(1.05);
        background-image: linear-gradient(120deg, #77a7f5 0%, #c2e9fb 100%);
    }
    h1{
        font-weight: 700;
    }
    h1 span{
        color: green;
    }
    .why-us .card {
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        border: none;
        transition: transform 0.5s ease;
    }
    .why-us .card:hover {
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    }
</style>
<div class="row my-5" style="padding-top: 250px;padding-bottom: 250px; background:#111204">
    <div class="col-md-12">
        <h3 id="typed-domain" class="header-desc text-white typed text-center"></h3><br>
        <div class="search-box">
            <input type="text" placeholder="Search your domain..." class="search-input text-center">
            <a href="#" class="search-btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>
</div>
<div class="container">

    <div class="row justify-content-center domain" style="padding-bottom: 100px; display: flex; justify-content: space-around;">
        <div class="col-md-10">
            <h1 class="text-center p-5 animated-text">Consider These <span>Popular Domain Extensions</span></h1>
        </div>
        <div class="col-12 col-md-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body d-flex flex-column">
                    <h2 class="text-center"><strong>.com</strong></h2>
                    <p class="text-center">The most popular and professional extension for any kind of website.</p>
                    <h5 class="text-center mt-auto" style="font-weight: 600">
                        Starting at <br>
                        ৳ 1450 BDT/ year
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body d-flex flex-column">
                    <h2 class="text-center"><strong>.net</strong></h2>
                    <p class="text-center">Grow your network, and your business, with .net domain.</p>
                    <h5 class="text-center mt-auto" style="font-weight: 600">
                        Starting at <br>
                        ৳ 1500 BDT/ year
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body d-flex flex-column">
                    <h2 class="text-center"><strong>.org</strong></h2>
                    <p class="text-center">Brand your site as an organization for greater good.</p>
                    <h5 class="text-center mt-auto" style="font-weight: 600">
                        Starting at <br>
                        ৳ 1500 BDT/ year
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body d-flex flex-column">
                    <h2 class="text-center"><strong>.xyz</strong></h2>
                    <p class="text-center">Get personal. Show off what you're all about to your visitors.</p>
                    <h5 class="text-center mt-auto" style="font-weight: 600">
                        Starting at <br>
                        ৳ 500 BDT/ year
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5 why-us">
        <div class="col-md-12">
            <h1 class="text-center p-5 animated-text"><span>Why Us?</span></h1>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('frontend/images/why-us/send.png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                    <h3 class="text-center">Forwarding & Masking</h3>
                    <p>Any domain name you own can be pointed to your website.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('frontend/images/why-us/dns.png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                    <h3 class="text-center">Total DNS Control</h3>
                    <p>From a single control panel, you can manage all of your DNS records.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('frontend/images/why-us/lock.png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                    <h3 class="text-center">Domain Locking</h3>
                    <p>Domain locking features stops you from unwanted transfer.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let textLength2 = 0;
    let text = 'Search Your Domain Name Here...';

    function type2() {
        let textChar = text.charAt(textLength2++);
        let paragraph = document.getElementById("typed-domain");
        let charElement = document.createTextNode(textChar);
        paragraph.appendChild(charElement);
        if (textLength2 < text.length) {
            setTimeout(type2, 50); // Call type2() instead of type
        } else {
            setTimeout(resetAndType, 1000); // Delay before restarting the animation
        }
    }

    function resetAndType() {
        let paragraph = document.getElementById("typed-domain");
        paragraph.textContent = ''; // Clear the paragraph
        textLength2 = 0; // Reset textLength
        type2(); // Restart the typing animation
    }

    // Start the typing effect
    type2();
</script>
@endSection
