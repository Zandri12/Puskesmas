@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <!-- <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12"> -->
           
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="card-title">Visitors</h4>
                        <div class="dropdown ml-auto">
                            <div class="btn-link" data-toggle="dropdown">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-3 pt-2">
                        <div id="chartStrock"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="card-title">Pengguna</h4>
                        
                    </div>
                    <div class="card-body pt-2">
                        <h4 class="text-dark font-w400">Total Pengguna</h4>
                        <h3 class="text-primary font-w600">Orang</h3>
                        <div class="row mx-0 align-items-center">
                            <div class="col-sm-8 col-md-7  px-0">
                                <div id="chartCircle"></div>
                            </div>
                            <div class="col-sm-4 col-md-5 px-0">
                                <div class="patients-chart-deta">
                                    <div class="col px-0">
                                        <span class="bg-danger"></span>	
                                        <div>
                                            <p>Admin</p>
                                            <h3>64%</h3>
                                        </div>
                                    </div>
                                    <div class="col px-0">
                                        <span class="bg-success"></span>	
                                        <div>
                                            <p>Co-Admin</p>
                                            <h3>73%</h3>
                                        </div>
                                    </div>
                                    <div class="col px-0">
                                        <span class="bg-warning"></span>	
                                        <div>
                                            <p>Operator</p>
                                            <h3>48%</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
