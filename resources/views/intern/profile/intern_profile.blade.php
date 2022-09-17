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
                            <h2 class="content-header-title float-start mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile Setting</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link active" href="page-account-settings-account.html">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link" href="page-account-settings-security.html">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Security</span>
                                </a>
                            </li>
                        </ul>

                        <!-- profile -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <!-- header section -->

                                <form method="POST" action="{{ route('user.profile.store') }}" class="mt-2 pt-50" enctype="multipart/form-data">
                                    @csrf
                                <div class="d-flex">
                                    <a href="#" class="me-25">
                                        <img src="{{ (!empty($user->profile_photo_path))? url('upload/intern_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                        <div>
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                            <input type="file" id="account-upload" name="profile_photo_path" hidden accept="image/*" />
                                            <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                            <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                    
                                    <br>

                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                                             <span class="form-label" >You can not change your email id without ADMIN permission</span> 
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control account-number-mask" name="phone" value="{{ $user->phone }}" />
                                        </div>
                                      
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                        </div>

                        <!-- deactivate account  -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Delete Account</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <div class="alert alert-warning">
                                    <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
                                    <div class="alert-body fw-normal">
                                        Once you delete your account, there is no going back. Please be certain.
                                    </div>
                                </div>

                                <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" data-msg="Please confirm you want to delete account" />
                                        <label class="form-check-label font-small-3" for="accountActivation">
                                            I confirm my account deactivation
                                        </label>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-danger deactivate-account mt-1">Deactivate Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ profile -->
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection