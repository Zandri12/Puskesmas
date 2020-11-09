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
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
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
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Hak Akses</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $d = 1;
                        @endphp
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$d++}}</td>
                            <td>{{$data['nama']}}</td>
                            <td>{{$data['tgl_lahir']}}</td>
                            <td>{{$data['alamat']}}</td>
                            <td>{{$data['email']}}</td>
                            <td>{{$data['role']}}</td>
                            <td></td>
                            <td>
                                <button type="button" class="mr-1 shadow btn btn-warning btn-xs sharp"
                                    data-toggle="modal" data-id="{{ $data['id'] }}"
                                    data-nama="{{$data['nama']}}"
                                    data-tgl_lahir="{{$data['tgl_lahir']}}" 
                                    data-alamat="{{$data['alamat']}}"
                                    data-email="{{$data['email']}}"
                                    data-role="{{$data['role']}}"data-target="#editModal"><i class="fa fa-pencil"></i></button>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                <a href="#" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-eye"></i></a>
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
<div class="modal fade" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('update_pengguna','data')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="text"
                            class="form-control input-rounded @error('nama') is-invalid @enderror"
                            name="nama" id="nama" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group">
                        {{-- <label>Data Pengaturan</label> --}}
                        <input type="date" id="tgl_lahir" class="form-control input-rounded @error('lahir') is-invalid @enderror" name="tgl_lahir"
                           >
                    </div>
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <input type="email"
                            class="form-control input-rounded @error('Email') is-invalid @enderror"
                            name="email" id="email" placeholder="Email Pengguna">
                    </div>
                    <div class="form-group">
                        {{-- <label>Nama Pengaturan</label> --}}
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-0">
                            
                            <label class="radio-inline mr-3 role"><input type="radio" name="role" value="1"> Admin</label>
                            <label class="radio-inline mr-3 role"><input type="radio" name="role" value="2"> Co-Admin</label>
                            <label class="radio-inline mr-3 role"><input type="radio" name="role" value="3"> Operator</label>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
            $('#editModal').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var nama = button.data('nama')
                var tgl_lahir = button.data('tgl_lahir')
                var alamat = button.data('alamat')
                var email = button.data('email')
                var role = button.data('role')
                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #nama').val(nama);
                modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
                modal.find('.modal-body #alamat').val(alamat);
                modal.find('.modal-body #email').val(email);
                modal.find('.modal-body .role').val(role);
            })
        })
</script>

@endsection

