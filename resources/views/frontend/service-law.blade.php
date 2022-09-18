@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }})">
        <div class="auto-container">
            <h1>Service Matter</h1>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">home</a></li>
                <li>Service Matter</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Services Detail Section -->
    <section class="services-detail-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="{{ asset('frontend/images/resource/service-matter.jpg') }}" alt="">
                </div>
                <div class="lower-content">
                    <h2>Service Matter</h2>
                    <p>With a view to easing the congestion of pending cases in various High Courts and other Courts in the country, Parliament had enacted the Adminisitrative Tribunals Act, 1985. Administrative Tribunals are located throughout country, wherever the seat of a High Court is located. In addition, circuit sittings are held at Nagpur, Goa, Aurangabad, Jammu, Shimla, Indore, Gwalior, Bilaspur, Ranchi,  Pondicherry, Gangtok, Port Blair, Shillong, Agartala, Kohima, Imphal, Itanagar, Aizwal and Nainital.

The Central Administrative Tribunal has been established for adjudication of disputes with respect to recruitment and conditions of service of persons appointed to public services and posts in connection with the affairs of the Union or other local authorities within the territory of India or under the control of Government of India and for matters connected therewith or incidental thereto. This was done in pursuance of the amendment of Constitution of India by Articles 323A. In addition to Central Government employees, the Government of India has notified 45 other organizations to bring them within the jurisdiction of the Central Administrative Tribunal. The provisions of the Administrative Tribunals Act, 1985 do not, however, apply to members of paramilitary forces, armed forces of the Union, officers or employees of the Supreme Court, or to persons appointed to the Secretariat Staff of either House of Parliament or the Secretariat staff of State/Union Territory Legislatures.</p>
                    
                    <div class="btn-box">
                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Free Consultation <i class="arrow flaticon-right"></i></span></a>
                    </div>
                    <!-- Consult Form -->
                    <div class="consult-form">
                        <div class="sec-title">
                            <h2>Consult Now</h2>
                        </div>
                        <form method="post" action="">
                            <div class="row clearfix">
                            
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                
                                <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Submit now <i class="arrow flaticon-right"></i></span></button>
                                </div>
                                
                            </div>
                        </form>
                        <!-- End Consult Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Detail Section -->
    
    
    
    
    
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