@extends('frontend.main_master')
@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/images/background/1.jpg') }});padding: 144px 0px 89px;">
        <div class="auto-container">
            <h1>Vacancy</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Vacancy</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    
    
    
    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Current Openings</h2>
            </div>
            <!-- Contact Form -->
            <table class="table table-bordered table-hover">
  <thead>
    <tr style="background-color: dimgrey;">
      <th scope="col" style="color:white;">Job Title</th>
      <th scope="col" style="color:white;">Description</th>
      <th scope="col" style="color:white;">Date</th>
      <th scope="col" style="color:white;">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Legal Advisor</th>
      <td>Full time legal advisor</td>
      <td>03/02/2022</td>
      <td><button type="button" class="btn btn-danger">Apply Now</button></td>
    </tr>
  </tbody>
</table>
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