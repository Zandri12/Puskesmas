@extends('layouts.default')

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
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pengaturan</h4>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-responsive-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th aria-readonly="false"><a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></th>
                            <th>Nama Pengaturan</th>
                            <th>Data pengaturan</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $a = 1;
                        @endphp
                        @foreach ($data as $datas)
                        <tr>
                            <th>{{$a++}}</th>
                        <td><a  href="/Pengaturan/profile/edit/{{$datas['id']}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                <a href="/Pengaturan/profile/delete/{{$datas['id']}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                            <td>{{$datas['nama_pengaturan']}}</td>
                            <td><span class="badge badge-primary">{{$datas['data_pengaturan']}}</span>
                            </td>
                        </tr>
                        @endforeach
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

                <form method="POST" action="{{route('tambah_profil')}}">
                    @csrf
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded @error('nama_pengaturan') is-invalid @enderror" name="nama_pengaturan" placeholder="Nama Pengaturan">
                       
                            
                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded" name="data_pengaturan" placeholder="Data Pengaturan">
                    </div>
                

            </div>
            <div class="modal-footer">
                <button type="submit" id="toastr-info-top-right" class="btn btn-primary">Simpan Perubahan</button>
            </form>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
@endsection