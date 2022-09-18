@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});padding: 144px 0px 89px;">
        <div class="auto-container">
            <h1>Offline  Internship</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Offline Internship</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    
    
    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container" style="background: -webkit-linear-gradient(360deg,#949494 10%,#efefef 360%); background: linear-gradient(360deg,#949494 10%,#efefef 360%);border-radius: 17px;padding: 20px;">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Apply for Offline Internship</h2>
            </div>
            <!-- Contact Form -->
            <div class="contact-form">
                
                <!--Contact Form-->
                <form  method="post" id="contact-form" action="{{ route('offline.internship.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                    
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="text" name="first_name" placeholder="First Name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="text" name="last_name" placeholder="Last Name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                            <input type="text" name="address" placeholder="Address">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                            <input type="text" name="qualification" placeholder="Highest Qualification">
                            @error('qualification')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                            <input type="file" value="resume" class="form-control">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <input type="submit" class="theme-btn btn-style-two" value="Submit Now">
                        </div>
                    </div>
                </form>
                
                <!--End Contact Form -->
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->
    
    
    
    <!-- Clients Section -->
    
    <!-- End Clients Section -->
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="{{ asset('frontend/images/resource/cta.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h2>Speak With Our <br> Experts Today!</h2>
                    <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Get a quote <i class="arrow flaticon-right"></i></span></a>
                </div>
                <div class="hammer-image">
                    <img src="{{ asset('frontend/images/resource/hammer.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->

@endsection