@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Semua Pengguna</h4>
           
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
        <li class="breadcrumb-item active"><a href="{{route('semua_pengguna')}}">Semua Pengguna</a></li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card-body">

    <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#tambahdata"><span
            class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
        </span>Tambah Data
    </button>

</div>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Pengguna</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Gender</th>
                            <th>Education</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                            <td>Tiger Nixon</td>
                            <td>Architect</td>
                            <td>Male</td>
                            <td>M.COM., P.H.D.</td>
                            <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2011/04/25</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>												
                            </td>												
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahdata">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('tambah_pengguna')}}">
                    @csrf
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="text"
                            class="form-control input-rounded @error('nama') is-invalid @enderror"
                            name="nama" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="date" class="form-control input-rounded @error('lahir') is-invalid @enderror" name="tgl_lahir"
                           >
                    </div>
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="email"
                            class="form-control input-rounded @error('Email') is-invalid @enderror"
                            name="email" placeholder="Email Pengguna">
                    </div>
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-0">
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="1"> Admin</label>
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="2"> Co-Admin</label>
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="3"> Operator</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


@endsection

