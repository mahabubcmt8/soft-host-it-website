@extends('frontend.layouts.app')
@section('content')
    <!-- ====================== About ====================== -->
    <div class="about py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mt-5">About Us</h5>
                    <h2 class="text-white">softhostit.com</h2>
                    <p class="mt-3">We have been providing Online Accounting Software, Web Design & Development, Web Application, Domain Registration, & Web Hosting service With 7 years experience. We aim to providing professional quality IT service in all over the Bangladesh. Already we have been developed more than 150 websites design & development , and Web application. Now a day’s information technology is unavoidable part of our daily life. Life is busy we have to make it easy by using technology. If we want to develop our country we have to use technology as much as we can. So we want to contribute in our IT.</p><br><br>
                    <a href="contact.html">Contact US</a>
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <img src="{{ asset('frontend/images/ceo.png') }}" alt="" class="pt-5">
                    <h1 class="text-white f-600">Palsah Hossain</h1>
                    <h2 class="text-white f-600">Soft Host IT, <span style="color: #B9FD50;">CEO</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================== Company ====================== -->
     <div class="company py-5" style="background-color: #111204;">
        <div class="container">
            <h2 class="text-white f-600">Company</h2>
            <p class="text-white" style="opacity: 60%;">Company
                Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit.Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit. Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit. Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit.  </p>
        </div>
     </div>

      <!-- ====================== Team ====================== -->
      <div class="team py-5" style="background-color: #111204;">
        <div class="container">
            <h2 class="text-white f-600">Team</h2>
            <p class="text-white" style="opacity: 60%;">Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit.Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit. Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit. Commodo diam vulputate dui proin quis enim nibh. Non integer ac libero facilisis hendrerit a at. Nisi sem ut sed sed faucibus at eu elit. Morbi aliquam porttitor mattis consequat neque, tellus blandit.   </p>
            <br><br>
            <a href="{{ route('frontend.index') }}" class="gotohome">Go To Home</a>
        </div>
     </div>
@endsection
