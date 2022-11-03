@extends('admin.admin_master')
@section('admin')

<div class="app-content content ">
	<div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    	<div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Add Associates</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Add Associates
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
        	<!-- Basic Tables start -->
               <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('associate.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="first-name">Associate/Advocate Name </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="name" class="form-control" name="name" placeholder="Write Associate / Advocate Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="first-name">Asscoiates/Advocate Designation</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="designation" class="form-control" name="designation" placeholder="Asscoiates Designation">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="contact-info">Associate Image</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- Basic Tables end -->
        </div>
    </div>
</div>

@endsection