@extends('intern.main_master')
@section('intern')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Coming soon page-->
                <div class="misc-wrapper"><a class="brand-logo" href="{{ url('/dashboard') }}">
                    <div class="misc-inner p-2 p-sm-3">
                        <div class="w-100 text-center">
                            <h2 class="mb-1">We are launching soon 🚀</h2>
                            <p class="mb-3">We're creating something awesome. Please subscribe to get notified when it's ready!</p>
                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/pages/coming-soon.svg') }}" alt="Coming soon page" />
                        </div>
                    </div>
                </div>
                <!-- / Coming soon page-->
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection