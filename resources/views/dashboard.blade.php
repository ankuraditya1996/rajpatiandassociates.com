@extends('intern.main_master')
@section('intern')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>Congratulations 🎉 {{ Auth::user()->name }}</h5>
                                    <p class="card-text font-small-3">You have successfully logged In, Welcome to <br> Rajpati & Asscoiates Intern Dashboard.<br> <i>There is no better way to exerise the <br> imagination that the study of law !!</i></p>
                                    <img src="{{ asset('backend/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Your Articles</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">Way to Your Own</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">0</h4>
                                                    <p class="card-text font-small-3 mb-0">No Of Artical Submitted</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">0</h4>
                                                    <p class="card-text font-small-3 mb-0">No. Of Articles Approved</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">0</h4>
                                                    <p class="card-text font-small-3 mb-0">No. Of Articles Unapproved</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>



                    <div class="row match-height">
                        <!-- Developer Meetup Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="{{ asset('backend/app-assets/images/illustration/email.svg') }}" alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">WED</h6>
                                            <h3 class="mb-0">05</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">Online Quiz</h4>
                                            <p class="card-text mb-0">Test yourself, and see where you stand</p>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Wed, Oct 05, 2022</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Online</h6>
                                            <small>TFM(Test From Home)</small>
                                        </div>
                                    </div>
                                    <div class="avatar-group">
                                        <div class="d-grid col-lg-6 col-md-12 mb-1 mb-lg-0">
                                            <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Get Enrolled Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Developer Meetup Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>

@endsection