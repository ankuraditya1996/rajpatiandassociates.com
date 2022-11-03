@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title style-two" style="background-image:url({{ asset('frontend/images/background/1.jpg') }})">
        <div class="auto-container">
            <h1>OUR TEAM</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">home</a></li>
                <li>Our Team</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- case-style-three -->
    <section class="case-style-three bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/partners.jpg') }}" alt="">
                                <div class="link"><a href="{{ route('partner.front.view') }}"><i class="flaticon-link"></i></a></div>
                                <!--<div class="link"><a href="case-details.html"><i class="flaticon-link"></i></a></div>-->
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <p>Our Team</p>
                                    <h4><a href="{{ route('partner.front.view') }}">Partners</a></h4>
                                </div>
                               
                                <!--<div class="link"><a href="#"><i class="flaticon-right"></i>Read More</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/partners.jpg') }}" alt="">
                                <div class="link"><a href="{{ route('associates.front.view') }}"><i class="flaticon-link"></i></a></div>
                                <!--<div class="link"><a href="case-details.html"><i class="flaticon-link"></i></a></div>-->
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <p>Associates</p>
                                    <h4><a href="{{ route('associates.front.view') }}">Our Expert Advocates</a></h4>
                                </div>
                               
                                <!--<div class="link"><a href="#"><i class="flaticon-right"></i>Read More</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/partners.jpg') }}" alt="">
                                <div class="link"><a href="{{ route('hradmin.front.view') }}"><i class="flaticon-link"></i></a></div>
                                <!--<div class="link"><a href="case-details.html"><i class="flaticon-link"></i></a></div>-->
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <p>Human Resource</p>
                                    <h4><a href="{{ route('hradmin.front.view') }}">Administration</a></h4>
                                </div>
                               
                                <!--<div class="link"><a href="#"><i class="flaticon-right"></i>Read More</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{ asset('frontend/images/resource/partners.jpg') }}" alt="">
                                <div class="link"><a href="{{ route('officeass.front.view') }}"><i class="flaticon-link"></i></a></div>
                                <!--<div class="link"><a href="case-details.html"><i class="flaticon-link"></i></a></div>-->
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-notebook"></i></div>
                                    <p>Our Team</p>
                                    <h4><a href="{{ route('officeass.front.view') }}">Office Assistant</a></h4>
                                </div>
                               
                                <!--<div class="link"><a href="#"><i class="flaticon-right"></i>Read More</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-style-three end -->
    
    <!-- Facts Section three -->
    <section class="facts-section-three" style="background-image: url({{ asset('frontend/images/background/1.jpg') }});">
        
        <div class="auto-container">
            <div class="fact-counter-style-three">
                <div class="row">
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-briefcase"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="245">0</span><sup>+</sup>
                                    </div>
                                    <h4>Business Partners </h4>
                                    <div class="text">Indignation & dislike mens who <br> beguiled demoralized.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-balance"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="1879">0</span><sup>+</sup>
                                    </div>
                                    <h4>Cases Done</h4>
                                    <div class="text">Desire that they cannot foresee <br> the pain and trouble.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-trophy-2"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="350">0</span><sup>+</sup>
                                    </div>
                                    <h4>Awards Win</h4>
                                    <div class="text">These cases are perfect simple <br> & easy to distinguish.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
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