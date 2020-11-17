@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Profil Puskesmas</h4>
            
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil Pegguna</a></li>
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
                            <th>
                                Aksi
                            </th>
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
                            <td>
                                <button type="button" class="mr-1 shadow btn btn-warning btn-xs sharp"
                                    data-toggle="modal" data-id="{{ $datas['id'] }}"
                                    data-nama_pengaturan="{{$datas['nama_pengaturan']}}"
                                    data-data_pengaturan="{{$datas['data_pengaturan']}}" data-target="#editModal"><i
                                        class="fa fa-pencil"></i>
                                </button>
                                <a href="/Pengaturan/profile/delete/{{$datas['id']}}"
                                    class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a></td>
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
                        <input type="text"
                            class="form-control input-rounded @error('nama_pengaturan') is-invalid @enderror"
                            name="nama_pengaturan" placeholder="Nama Pengaturan">


                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded" name="data_pengaturan"
                            placeholder="Data Pengaturan">
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
<div class="modal fade" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('update_profil','data')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="text"
                            class="form-control input-rounded @error('nama_pengaturan') is-invalid @enderror"
                            name="nama_pengaturan" id="nama_pengaturan" placeholder="Nama Pengaturan">
                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="text" class="form-control input-rounded" name="data_pengaturan"
                            placeholder="Data Pengaturan" id="data_pengaturan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
            $('#editModal').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var nama_pengaturan = button.data('nama_pengaturan')
                var data_pengaturan = button.data('data_pengaturan')
                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #nama_pengaturan').val(nama_pengaturan);
                modal.find('.modal-body #data_pengaturan').val(data_pengaturan);
            })
        })
</script>
@endsection

