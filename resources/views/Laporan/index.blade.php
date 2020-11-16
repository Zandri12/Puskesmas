@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Laporan</h4>
           
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item active"><a href="{{route('semua_pengguna')}}">Semua Laporan</a></li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12 col-xxl-6">
        <div class="card">
            <div class="card-body">
               
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-xxl-6">
        <div class="card">
            <div class="card-body">
               
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-body">
               
            </div>
        </div>
    </div>
</div>
@endsection

