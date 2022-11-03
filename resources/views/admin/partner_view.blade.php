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
                        <h2 class="content-header-title float-start mb-0">Our Partners</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Our Partners
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
        	<!-- Basic Tables start -->
                <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Our Partners</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Please find the our partners.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company/Individual Name</th>
                                        <th>Company/Individual Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($viewpartner as $item)
                                    <tr>
                                       <td>{{ $item->id }}</td>
                                       <td>{{ $item->name }}</td>
                                       <td><img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"></td>
                                       <td>
                                        <a href="{{ route('partner.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i data-feather='delete'></i></a>
                                       </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
    </div>
</div>

@endsection