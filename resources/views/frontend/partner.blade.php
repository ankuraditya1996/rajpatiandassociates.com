@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="padding: 144px 0px 89px;">
        <div class="auto-container">
            <h1>TRUSTED PARTNERS</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>TRUSTED PARTNERS</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Clients Section -->
    <section class="clients-section style-two" style="background-image:-webkit-linear-gradient(360deg, #dee1e1 10%, #f4f4f4 360%); background: -moz-linear-gradient(360deg, #dee1e1 10%, #f4f4f4 360%);background: linear-gradient(360deg, #dee1e1 10%, #f4f4f4 360%); ">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 style="padding-top: 10px;">TRUSTED PARTNERS</h2>
                
            </div>
            <div class="inner-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        @foreach($viewpartner as $item)
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" style="box-shadow: 34px -16px teal;">
                                </a>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
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