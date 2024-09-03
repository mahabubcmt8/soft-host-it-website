@extends('frontend.layouts.app')
@section('content')
<style>
    body {
  background: #F2F2F2;
  padding: 0;
  maring: 0;
}
    #price {
  text-align: center;
}

.plan {
  display: inline-block;
  margin: 10px 1%;
  font-family: 'Lato', Arial, sans-serif;
}

.plan-inner {
  background: #fff;
  margin: 0 auto;
  min-width: 450px;
  max-width: 100%;
  position:relative;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.entry-title {
  background: #53CFE9;
  height: 140px;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom: 30px;
}

.entry-title>h3 {
  background: #20BADA;
  font-size: 20px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #20BADA;
  height: 95px;
  width: 95px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 50px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 20px;
  font-weight: 700;
}

.price span {
  position: absolute;
  font-size: 15px;
  bottom: -10px;
  left: 30px;
  font-weight: 400;
}

.entry-content {
  color: #323232;
}

.entry-content ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}

.entry-content li {
  border-bottom: 1px solid #E5E5E5;
  padding: 10px 0;
  transition: 0.5s;
}
.entry-content li:hover{
    background-color: #E5E5E5;
    color: #F80;
    font-weight: 600;
}

.entry-content li:last-child {
  border: none;
}

.btn {
  padding: 3em 0;
  text-align: center;
}

.btn a {
  background: #323232;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  text-decoration: none
}
.hot {
    position: absolute;
    top: -7px;
    background: #F80;
    color: #fff;
    text-transform: uppercase;
    z-index: 2;
    padding: 2px 5px;
    font-size: 9px;
    border-radius: 2px;
    right: 10px;
    font-weight: 700;
}
.basic .entry-title {
  background: #75DDD9;
}

.basic .entry-title > h3 {
  background: #44CBC6;
}

.basic .price {
  background: #44CBC6;
}

.standard .entry-title {
  background: #4484c1;
}

.standard .entry-title > h3 {
  background: #3772aa;
}

.standard .price {
  background: #3772aa;
}

.ultimite .entry-title > h3 {
  background: #DD4B5E;
}

.ultimite .entry-title {
  background: #F75C70;
}

.ultimite .price {
  background: #DD4B5E;
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
    <div class="container">
        <div class="row" style="padding-top: 150px; padding-bottom:150px">
            <div class="col-md-12">
                <h2 class="text-center" style="font-weight: 800; color:green">SMS PACKAGES FOR YOU</h2>
            </div>
            <div id="price" class="mt-5">
                <!--price tab-->
                <div class="plan standard">
                  <div class="plan-inner">
                    <div class="entry-title">
                      <h3>NON MASKING</h3>
                      <div class="price">৳0.40<span>BDT</span>
                      </div>
                    </div>
                    <div class="entry-content">
                      <ul>
                        <li>Setup Charge: (1000 TK)</li>
                        <li>Sender Number : Shared</li>
                        <li>Auto Backup Gateway Routing: Yes</li>
                        <li>Can Send OTP SMS: No</li>
                        <li>Can Change Package: Yes</li>
                        <li>Fast Delivery Speed</li>
                        <li>Delivery Report: Yes</li>
                        <li>Validity :1y to 5Years</li>
                        <li>Dynamic SMS : Yes</li>
                        <li>Group SMS : Yes</li>
                        <li>Online Payment (Bkash Auto):Yes</li>
                      </ul>
                    </div>
                    <div class="btn">
                      <a href="https://portal.softhostit.com/index.php?rp=/store/shared-hosting/shit-1gb">Order Now</a>
                    </div>
                  </div>
                </div>
                <!-- end of price tab-->
                <!--price tab-->
                <div class="plan ultimite">
                  <div class="plan-inner">
                    <div class="entry-title">
                      <h3>MASKING</h3>
                      <div class="price">৳ 0.80<span>BDT</span>
                      </div>
                    </div>
                    <div class="entry-content">
                      <ul>
                        <li>Setup Charge: (3000 TK)</li>
                        <li>Masking Sender ID: Yes</li>
                        <li>Auto Backup Gateway Routing: Yes</li>
                        <li>Can Send OTP SMS: Yes</li>
                        <li>Can Change Package: Yes</li>
                        <li>Super Fast Delivery Speed</li>
                        <li>Delivery Report: Yes</li>
                        <li>Validity :1y to 5Years</li>
                        <li>Dynamic SMS : Yes</li>
                        <li>Group SMS : Yes</li>
                        <li>Online Payment (Bkash Auto):Yes</li>
                      </ul>
                    </div>
                    <div class="btn">
                      <a href="https://portal.softhostit.com/index.php?rp=/store/shared-hosting/shit-2gb-ssd">Order Now</a>
                    </div>
                  </div>
                </div>
                <!-- end of price tab-->
              </div>
        </div>
        <div class="row my-5 why-us">
            <div class="col-md-12">
                <h1 class="text-center p-5 animated-text"><span>Why Us?</span></h1>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('frontend/images/why-us/sms.png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                        <h3 class="text-center">Cheap SMS Rates</h3>
                        <p>We Provide You Lowest Rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('frontend/images/why-us/24-hours-support.png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                        <h3 class="text-center">24/7 Support</h3>
                        <p>We are ensure service 24 hours.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('frontend/images/why-us/sms (1).png')}}" alt="img" width="60px" style="margin-bottom: 10px">
                        <h3 class="text-center">Two-way SMS</h3>
                        <p>You Can Send & Receive SMS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
