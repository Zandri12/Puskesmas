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
                <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#tambahdata"><span
                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                </span>Tambah Data
            </button>
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
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>User Id</th>
                                <th>Kategori</th>
                                <th>download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data['file']}}</td>
                                <td>{{$data['user_id']}}</td>
                                <td>{{$data['kategori_id']}}</td>
                                <td><a href="#" class="shadow btn btn-success btn-xs sharp"><i class="fa fa-download"></i></a>
                                    <a href="#" class="shadow btn btn-success btn-xs sharp"><i class="fa fa-download"></i></a></td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>User Id</th>
                                <th>Kategori</th>
                                <th>download</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
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

                <form method="POST" action="{{route('tambah_laporan')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="file"
                            class="form-control"
                            name="file">


                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded" name="kategori_id"
                            placeholder="Kategori">
                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded" name="user_id"
                            placeholder="User">
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

