@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }})">
        <div class="auto-container">
            <h1>Publication</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Publication</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    
                    <!-- Case Block -->
                    <div class="case-block col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <div class="tag">Book Publication</div>
                                <a href="publication.html"><img src="{{ asset('frontend/images/resource/coming-soon.jpg') }}" alt=""></a>
                            </div>
                            <div class="lower-content">
                                
                                <a href="publication.html" class="theme-btn btn-style-three"><span class="txt">Read more <i class="arrow flaticon-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Case Study Section -->
    
    
    
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