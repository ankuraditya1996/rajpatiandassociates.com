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
    @foreach($vacancyfrontview as $item)
    <tr>
      <th scope="row">{{ $item->job_title }}</th>
      <td>{{ $item->job_discription }}</td>
      <td>{{ $item->last_date }}</td>
      <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ApplyNow">Apply Now</button></td>
    </tr>
     @endforeach
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

    <!-- Apply Now Model -->
    <div class="modal fade" id="ApplyNow">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title">Apply Now</h5>
              <button class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form method="post" action="{{ route('job.application.store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="title">Full Name</label>
                      <input name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="title">Phone Number</label>
                      <input  name="phone_number" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="title">Applying For : </label>
                      <select name="applying_for">
                        <option value="Selected Nothing">Select</option>
                        @foreach($vacancyfrontview as $item)
                        <option value="{{ $item->job_title }}">{{ $item->job_title }}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="image">Upload Your CV</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image">
                        <label for="image" class="custom-file-label">Choose File</label>
                      </div>
                      <small class="form-text text-muted">Max Size 3mb</small>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    <!-- //Apply Now Model -->
@endsection