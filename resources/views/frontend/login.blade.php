@extends('frontend.layouts.app')
@section('content')
<div class="header" id="header">
    <div class="container">
        <!-- ====================== login ====================== -->
         <section id="login" class="login" style="padding-top: 150px; padding-bottom: 150px;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="f-900" style="color: #B9FD50;">Welcome To</h3>
                        <h1 class="text-white f-900">Soft Host IT</h1>
                        <br><br>
                        <form action="" method="">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="email" id="email" placeholder="Email Or Mobile No">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="password" name="email" id="email" placeholder="Password">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="login-btn">Login</button>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <p class="text-white">If You Don’t have any account in Soft Host IT <br> Please <a href="{{ route('frontend.register') }}" style="text-decoration: none; color:#B9FD50">Sing-up</a> Now !</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </section>
    </div>
</div>
@endsection
