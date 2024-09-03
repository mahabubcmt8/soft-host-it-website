@extends('frontend.layouts.app')
@section('content')
    <style>
        body {
            background: #ccc;
        }

        .newsCard {
            position: relative;
            width: 100%;
            height: 400px;
            background-color: #fff;
            color: #fff;
            overflow: hidden;
            border-radius: 6px;
        }

        figure img {
            display: block;
            /* object-fit: cover !important; */
            /* object-position: center center !important; height: 100%; */
            width: 100%;
        }

        .overlay {
            background: rgb(40, 26, 54);
            background: -moz-linear-gradient(0deg, rgba(40, 26, 54, 1) 0%, rgba(89, 59, 116, 0) 100%);
            background: -webkit-linear-gradient(0deg, rgba(40, 26, 54, 1) 0%, rgba(89, 59, 116, 0) 100%);
            background: linear-gradient(0deg, rgba(40, 26, 54, 1) 0%, rgba(89, 59, 116, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#281a36", endColorstr="#593b74", GradientType=1);
            s display: block;
            position: absolute;
            height: 200px;
            width: 100%;
            bottom: 0;
            z-index: 3;
        }

        .newsCaption {
            position: absolute;
            top: auto;
            bottom: 31px;
            left: 0;
            width: 100%;
            height: 35%;
            z-index: 10;
            padding: 15px;
            -webkit-transform: translateY(80%);
            transform: translateY(80%);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.4s;
            transition: -webkit-transform 0.4s;
            transition: transform 0.4s;
            transition: transform 0.4s, -webkit-transform 0.4s;
        }

        .newsCaption i {
            font-size: 24px;
        }

        .newsCaption-title {
            margin-top: 0px;
        }

        .newsCaption-content {
            margin: 0;
        }

        .newsCaption-link {
            color: #fff;
            text-decoration: underline;
            opacity: .8;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transition-duration: 0.15s;
            transition-duration: 0.15s;
            -webkit-transition-timing-function: cubic-bezier(0.39, 0.58, 0.57, 1);
            transition-timing-function: cubic-bezier(0.39, 0.58, 0.57, 1);
        }

        .news-Slide-up:hover .overlay {
            background: rgb(64, 10, 111);
            background: -moz-linear-gradient(0deg, rgba(64, 10, 111, 1) 0%, rgba(89, 59, 116, 0) 100%);
            background: -webkit-linear-gradient(0deg, rgba(64, 10, 111, 1) 0%, rgba(89, 59, 116, 0) 100%);
            background: linear-gradient(0deg, rgba(64, 10, 111, 1) 0%, rgba(89, 59, 116, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#400a6f", endColorstr="#593b74", GradientType=1);
        }

        .news-Slide-up:hover .newsCaption {

            -webkit-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition: -webkit-transform 0.4s;
            transition: -webkit-transform 0.4s;
            transition: transform 0.4s,
                transition: transform 0.4s, -webkit-transform 0.4s;
        }
    </style>
    <div class="container mt-5">
        <div class="row" style="padding-top: 150px;padding-bottom: 150px;">
            <!-- CARD 1-->
            <div class="col-lg-4">
                <a href='https://amarhisab.com/' target="_blank" class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/Amar-Hisab.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>Amar Hisab</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Bangla online accounting software | Income and Expenditure
                                    software | small business accounting software: Amar Hisab </p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card1-->


            <!-- CARD 2-->
            <div class="col-lg-4">
                <a href='https://bhisab.com/' target="_blank" class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/Bhisab.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>Bhisab</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Online Accounting Billing Inventory Management System Dhaka,
                                    Khulna - Bangladesh- Purchase, Sales, stock management software, Billing Software, POS
                                    Software, small business inventory software: bHisab </p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card2-->

            <!-- CARD 3-->
            <div class="col-lg-4">
                <a href='https://babsaye.com/' target="_blank' class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/Brick-Field-2.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>Online Brick field management software</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Online Brick field management software</p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card3-->
            <div class="col-lg-4 mt-5">
                <a href='https://t-hisab.com/' target="_blank' class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/T-Hisab.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>T-hisab</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Travel Air | Travel Agency Management Software Bangladesh || Travel & Tours Management System | Dhaka | Bangladesh</p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card3-->
            <div class="col-lg-4 mt-5">
                <a href='javascript:void(0)' target="_blank' class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/Dealer2.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>Delarship Management Software</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Online Delarship Management Software</p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card3-->
            <div class="col-lg-4 mt-5">
                <a href='javascript:void(0)' target="_blank' class="url-box">
                    <figure class='newsCard news-Slide-up '>
                        <img src="{{ asset('frontend/images/softbanner/Electronics2.png') }}" />
                        <div class='newsCaption px-4'>
                            <div class="d-flex align-items-center justify-content-between cnt-title">
                                <h5 class='newsCaption-title text-white m-0'>Electronics Management Software</h5> <i
                                    class="fas fa-arrow-alt-circle-right "></i>
                            </div>
                            <div class='newsCaption-content d-flex '>
                                <p class="col-10 py-3 px-0">Online Electronics Shop Management Software in Bangladesh - Purchase, Sales, Stock, Expiry date</p>
                            </div>
                        </div>
                        <span class="overlay"></span>
                    </figure>
                </a>
            </div> <!-- end card3-->

        </div>
    </div>
@endsection
