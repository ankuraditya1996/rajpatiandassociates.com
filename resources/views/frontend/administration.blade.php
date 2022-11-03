@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});padding: 144px 0px 89px;">
        <div class="auto-container">
            <h1>HR & Administration</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>HR & Administration</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    
    
    <!-- Team Section -->
    <section class="team-section" style="background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>HR & Administration</h2>
            </div>
            <div class="row clearfix">
                @foreach($hrview as $item)
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                        </div>
                        <div class="lower-box">
                            <h5><a href="#">{{ $item->name }}</a></h5>
                            <div class="designation">{{ $item->designation }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="{{ asset($item->image) }}"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    
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
                                        <span class="count-text" data-speed="5" data-stop="20">0</span><sup>+</sup>
                                    </div>
                                    <h4>Practice Areas</h4>
                                    
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
                                    
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    <br/>
    
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