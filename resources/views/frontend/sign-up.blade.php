@extends('frontend.layouts.app') <div class="header" id="header">
    <div class="container">
        <!-- ====================== login ====================== -->
         <section id="signup" class="signup" style="padding-top: 150px; padding-bottom: 150px;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="f-900" style="color: #B9FD50;">Welcome To</h3>
                        <h1 class="text-white f-900">Soft Host IT</h1>
                        <br><br>
                        <form action="" method="">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="" id="" placeholder="Full Name">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" name="" id="" placeholder="Email Or Mobile No">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="password" name="" id="" placeholder="Password">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="password" name="" id="" placeholder="Confirm Password">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="login-btn">Login</button>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <p class="text-white">If You have any account in Soft Host IT <br> Please <a href="login.html" style="color: #B9FD50; text-decoration: none;">Sign-In</a> Now !</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </section>
    </div>
</div>
@section('content')
@endsection
