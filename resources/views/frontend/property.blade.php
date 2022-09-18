@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }})">
        <div class="auto-container">
            <h1>Property Law</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Property Law</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    <!-- Services Detail Section -->
    <section class="services-detail-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="{{ asset('frontend/images/resource/property.jpg') }}" alt="">
                </div>
                <div class="lower-content">
                    <h2>Property Law</h2>
                    <p>We provide legal consultation and case filing as well as follow up services, pertaining to Property Disputes, Wills , Succession, Eviction from house in case an major child is harassing his or her parents. We provide drafting services too pertaining to Wills and Codicils.Intellectual Property Rights is a major field of legal activity for the firm. The firm has assisted some of the major brands including Fortune 500 companies in their intellectual property related disputes and on their brand protection strategy while launching their brands in India. The Firm provide high quality, fast, and low cost patents, trademarks, designs, copyright, and IP litigation services to attorneys, corporate and individuals. We support both, the registration as well as the prosecution and enforcement work for our clients based in India, U.S., U.K., China and neighbouring countries like Bangladesh, Bhutan, Sri Lanka, Nepal, Pakistan and China. The Firm has network of legal associates and firms carrying out its intellectual property related work in these countries.The firm maintains an active watch list for its client throughout the Year to look for any potential infringement of client’s trademark. 

We have assisted various clients in filing and obtaining trademarks and patents, hence assisting them to assure hassle free business ventures.</p>
                    
                    <div class="btn-box">
                        <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Free Consultation <i class="arrow flaticon-right"></i></span></a>
                    </div>
                    <!-- Consult Form -->
                    <div class="consult-form">
                        <div class="sec-title">
                            <h2>Consult Now</h2>
                        </div>
                        <form method="post" action="https://html.designingmedia.com/counsel-law/contact.html">
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