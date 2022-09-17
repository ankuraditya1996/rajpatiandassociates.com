@extends('admin.admin_master')
@section('admin')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Account</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Profile Settings</li>
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
                                <span class="fw-bold">Profile Settings</span>
                            </a>
                        </li>
                        <!-- security -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.change.password') }}">
                                <i data-feather="lock" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Security</span>
                            </a>
                        </li>
                        <!-- notification -->
                        <li class="nav-item">
                            <a class="nav-link" href="page-account-settings-notifications.html">
                                <i data-feather="bell" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Notifications</span>
                            </a>
                        </li>
                    </ul>

                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Profile Details</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" class="mt-2 pt-50">
                                @csrf
                                <!-- header section -->
                                <div class="d-flex">
                                    <a href="#" class="me-25">
                                        <img src="{{ (!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                        <div>
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                            <input name="profile_photo_path" type="file" id="account-upload" hidden accept="image/*" />
                                            <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                            <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header section -->
                                <br><br>
                                
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">Full Name</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="name" placeholder="John" value="{{ $adminData->name }}" data-msg="Please enter first name" />
                                        </div>
                                
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="{{ $adminData->email }}" />
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                            <button type="reset" id="type-success" class="btn btn-outline-secondary mt-1">Discard</button>
                                        </div>
                                    </div>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>
                    <!-- deactivate account  -->
                        <div class="card">
                            <div class="card-body py-2 my-25">
                                If you want to check our more product do visit <a href="https://actc.pro" target="_blank">ACTC.PRO</a>
                                <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
                                </form>
                            </div>
                        </div>
                    <!--/ profile -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection