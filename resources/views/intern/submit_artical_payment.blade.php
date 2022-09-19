@extends('intern.main_master')
@section('intern')

 <div class="app-content content ">
     <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Submit Fee</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Submit fee
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                 <section id="card-demo-example">
                      <div class="row match-height">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('backend/upi-qr/upi.jpg') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h4 class="card-title">Summit Fee's</h4>
                                    <p class="card-text">
                                        Make Payment of <strong>&#8377;490</strong>. And don't forget to upload the screenshot.
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#inlineForm" class="btn btn-outline-primary">Submit The Screenshot</a>
                                    <!-- Model -->
                                        <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Submit Screenshot</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <form method="POST" action="{{ route('artical.payment.store') }}" class="mt-2 pt-50" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <label>Name</label>
                                                                <div class="mb-1">
                                                                    <input type="text" placeholder="Full Name" name="name" class="form-control" />
                                                                </div>

                                                                <label>Phone Number</label>
                                                                <div class="mb-1">
                                                                    <input type="text" placeholder="Mobile Number" name="phone_number" class="form-control" />
                                                                </div>

                                                                <label>Refrence Number</label>
                                                                <div class="mb-1">
                                                                    <input type="text" placeholder="Payment Refrence Number" name="refrence_no" class="form-control" />
                                                                </div>

                                                                <label>Email Id</label>
                                                                <div class="mb-1">
                                                                    <input type="email" name="email" placeholder="Email Address" class="form-control" />
                                                                </div>

                                                                <label>Screenshot: </label>
                                                                <div class="mb-1">
                                                                    <input type="file" name="screenshot" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                    <!--//Model -->
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Please read the terms and condition before making the payment.</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                       Steps of making the payment: <br>
                                       Step 1 : Scane the QR code you find in your dashboard. <br>
                                       Step 2 : Make the payment of &#8377;490. <br>
                                       Step 3 : Take a screenshot after making a payment. <br>
                                       Step 4 : Make sure you upload the screenshot on your student dashboard. <br>
                                       Step 5 : Make sure you upload the screenshot with the refrence number shown on your screenshot. <br>
                                    </p>

                                    <p class="card-text">
                                      TERMS OF UPLOADING THE ARTICLE : 
                                      <br>
                                      If you submit the articl and its get rejected because of any reason, not to worry you will get 2 more chances to resubmit the article. Be safe and all the very best.
                                      <br>
                                      If your article get selected you can see your article on our main website. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>
            </div>
      </div>
 </div>

@endsection