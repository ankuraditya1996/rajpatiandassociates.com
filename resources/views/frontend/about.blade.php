@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }})">
        <div class="auto-container">
            <h1>What We Do?</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>What We Do</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Services Section Two -->
    <section class="services-section-two style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered" style="margin-top: 50px">
                <h2>What We Do?</h2>
            </div>
            <div class="row clearfix">
                
                                        <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon flaticon-auction"></div>
                                <h5><a href="#">ALL INDIA LEGAL SERVICES</a></h5>
                                <div class="text"><p>We provide the all India Legal Services including the litigation matter through the our expert Advocate team. Team Leader- Pramod Rajpati, Advocate</p></div>
                                
                            </div>
                        </div>
                                                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon flaticon-auction"></div>
                                <h5><a href="#">OUR EXPERT ADVOCATE TEAM</a></h5>
                                <div class="text"><p>Our expert Advocates Team working 24 x 7 hours and doing legal advice and documentation for Litigation and others.</p></div>
                                
                            </div>
                        </div>
                                                <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon flaticon-auction"></div>
                                <h5><a href="#">FEE STRUCTURE</a></h5>
                                <div class="text"><p>`For the Legal Advice from our expert Advocates team to Pay Only 1500/- ( For each Matter )</p></div>
                                
                            </div>
                        </div>
                                        <!-- Services Block Two -->
            
                
                <!-- Services Block Two -->
            
                
                <!-- Services Block Two -->
            
                
            </div>
        </div>
    </section>
    <!-- End Services Section Two -->
    
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