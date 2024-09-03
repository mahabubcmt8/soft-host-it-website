@extends('frontend.layouts.app')
@section('content')
<style>
    .team-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        /* min-height: 100vh; */
        }
    .box {
        width: 100%;
        max-width: 200px;
        height: 300px;
        margin: 15px;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        transition: 0.3s ease-in-out;
        border-radius: 10px;
        }
        .box:hover {
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
        }
        .box:hover .card-footer {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        }
        .box:hover .imgBx {
        transform: scale(1.3);
        }
        .box .imgBx {
        transition: 0.3s ease-in-out;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        }
        .box .imgBx img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        }
        .box .card-footer {
        font-size: 12px;
        position: absolute;
        bottom: 0;
        z-index: 1;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transform: translateY(100%);
        transition: 0.3s ease-in-out;
        width: 100%;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        }
        .box .card-footer h3 {
            padding: 2.5px 0;
            font-size: 18px;
            font-weight: 600;
            color: #B9FD50;
            text-transform: uppercase;
        }
        .box .card-footer h4 {
            padding: 2.5px 0;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            /* text-transform: uppercase; */
        }
</style>
  <!-- <div style="height: 100px;"></div> -->
  <div class="team py-5" style="margin-top: 150px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">Our Strong Teem Members</h1>
                <h3 class="text-center" style="color: #B9FD50; font-weight: bold;">Soft Host IT</h3>
                <p class="text-center">Our strong team members, with their diverse expertise and unwavering <br> commitment, continually drive our success, enabling us to tackle challenges and <br> achieve remarkable results together.</p>
            </div>
        </div>
        <div class="team-container" style="margin-top: 0 !important; margin-bottom: 0 !important">
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Palash.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Palsah &nbsp; Hossain</h3>
                  <h4>C.E.O</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Nusrat.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Nusrat Jahan Akhi</h3>
                  <h4>C.O.O</h4>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Shahidul.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Sk. Shahidul Islam</h3>
                  <h4>Business Development Manager</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Joyti.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Akid Javed Jyoti</h3>
                  <h4>Marketing Executive</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Zillur1.png') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Zillur Rahman</h3>
                  <h4>Jr. Software Eng.</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Ashik.png') }}" alt="Ashik Hasan">
                </div>
                <div class="card-footer">
                  <h3>Ashik Hasan</h3>
                  <h4>Jr. Software Eng.</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/mahabub.png') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Md Mahabub Alam</h3>
                  <h4>Jr. Software Eng.</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Robi.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Robiul Korim</h3>
                  <h4>Office Manager</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/Mila2.png') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Mila Akter</h3>
                  <h4>Coustommer Relation Manager</h4>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                  <img src="{{ asset('frontend/images/team/ismail.jpg') }}" alt="">
                </div>
                <div class="card-footer">
                  <h3>Ismail Prodhan</h3>
                  <h4>UI/UX Designer</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
