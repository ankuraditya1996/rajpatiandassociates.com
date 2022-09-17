<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Sign Up | Intern</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend/panel/assets/images/favicon.png') }}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('frontend/panel/assets/css/preloader.min.css') }}" type="text/css">

        <!-- Bootstrap Css -->
        <link href="{{ asset('frontend/panel/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('frontend/panel/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('frontend/panel/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
        <style>
            .auth-bg{
                background-image:url('{{ asset('frontend/panel/assets/images/membersignup.png') }}');
                background-position:center;
                background-size:cover;
                background-repeat:no-repeat;
            }
                .auth-bg .bg-overlay{opacity:.9}
        </style>
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column ">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="{{ url('/') }}" class="d-block auth-logo">
                                            <img src="{{ asset('frontend/panel/assets/images/logo.png') }}" alt=""> <span class="logo-txt"></span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Intern Sign Up</h5>
                                            <br>
                                            <x-jet-validation-errors class="mb-4" />
                                        </div>

                                        <form method="POST" action="{{ route('register') }}">
                                         @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Full Name <span></span></label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email <span></span></label>
                                                <input type="email" class="form-control"id="email" placeholder="Enter Email" name="email" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Mobile <span></span></label>
                                                <input type="text" class="form-control" id="phone" placeholder="Enter Mobile" name="phone" required="">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password  <span></span></label>
                                                    </div>
                                                </div>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input id="password" type="password" class="form-control" placeholder="Enter Password" aria-label="Password" aria-describedby="password-addon" name="password" required="">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                             <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Confirm Password  <span></span></label>
                                                    </div>
                                                </div>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input id="password_confirmation" type="password" class="form-control" placeholder="Enter Confirm Password" aria-label="Password" aria-describedby="password-addon"name="password_confirmation" required="">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="mb-3">
                                                <button class="btn w-100 waves-effect waves-light" type="submit" style="background: rgba(0,32,76,1);color:white"> Register</button>
                                            </div>
                                            <p><center>OR</center></p>
                                            <div class="mb-3">
                                                <a href="{{ route('login') }}" class="btn w-100 waves-effect waves-light" style="background: rgba(0,32,76,1);color:white">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay " style="background: rgb(62 118 195 / 80%);"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                                
                                            </div>
                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-white">
                                                        
                                                        <div class="mt-4 pt-3 pb-5">
                                                            <div class="d-flex align-items-start">
                                                                <div class="flex-shrink-0">
                                                                   
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{ asset('frontend/panel/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/panel/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/panel/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('frontend/panel/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('frontend/panel/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('frontend/panel/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('frontend/panel/assets/libs/pace-js/pace.min.js') }}"></script>
        <!-- password addon init -->
        <script src="{{ asset('frontend/panel/assets/js/pages/pass-addon.init.js') }}"></script>

    </body>

</html>