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
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
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
                            <th>Pangkat</th>
                            <th>Golongan</th>
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
                            <td>{{$data['pangkat']}}</td>
                            <td>{{$data['golongan']}}</td>
                            <td>{{$data['role']}}</td>
                            <td></td>
                            <td>
                                <button type="button" class="mr-1 shadow btn btn-warning btn-xs sharp"
                                    data-toggle="modal" data-id="{{ $data['id'] }}"
                                    data-nama="{{$data['nama']}}"
                                    data-tgl_lahir="{{$data['tgl_lahir']}}" 
                                    data-alamat="{{$data['alamat']}}"
                                    data-email="{{$data['email']}}"
                                    data-role="{{$data['role']}}"
                                    data-pangkat="{{$data['pangkat']}}"
                                    data-golongan="{{$data['golongan']}}"data-target="#editModal"><i class="fa fa-pencil"></i></button>
                                <a href="/pengguna/delete/{{$data['id']}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
                        <label>Nama Pengguna</label>
                        <input type="text"
                            class="form-control input-rounded @error('nama') is-invalid @enderror"
                            name="nama" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-0">
                            <label>Jenis Kelamin</label>
                            <hr>
                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <textarea name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control input-rounded @error('lahir') is-invalid @enderror" name="tgl_lahir"
                           >
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu Kandung Pengguna</label>
                        <input type="text"
                            class="form-control input-rounded @error('nama_ibu_kandung') is-invalid @enderror"
                            name="nama_ibu_kandung" placeholder="Nama Ibu Kandung Pengguna">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>RT</label>
                            <input type="text" name="RT" class="form-control" placeholder="RT....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>RW</label>
                            <input type="text" name="RW" class="form-control" placeholder="RW....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Propinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" placeholder="Nama Propinsi....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kabupaten</label>
                            <input type="text" name="nama_kabupaten" class="form-control" placeholder="Nama Kabupaten....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="form-control" placeholder="Nama Kecamatan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Dusun</label>
                            <input type="text" name="nama_dusun" class="form-control" placeholder="Nama Dusun....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Desa/Kelurahan</label>
                            <input type="text" name="nama_desa" class="form-control" placeholder="Nama Desa/Kelurahan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos....">
                        </div>
                    </div>
                  <div class="form-group">
                    <label>Agama</label>
                        <select name="agama" class="form-control @error('agama') is-invalid @enderror"  id="agama">
                            <option selected>Pilih Agama...</option>
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konguchu">Konguchu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror"  id="status_perkawinan">
                                <option selected>Pilih...</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text"
                            class="form-control input-rounded @error('kewarganegaraan') is-invalid @enderror"
                            name="kewarganegaraan" placeholder="kewarganegaraan...">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text"
                            class="form-control input-rounded @error('NIP') is-invalid @enderror"
                            name="NIP" placeholder="NIP Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text"
                            class="form-control input-rounded @error('no_hp') is-invalid @enderror"
                            name="no_hp" placeholder="No Hp Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                            class="form-control input-rounded @error('email') is-invalid @enderror"
                            name="email" placeholder="Email Pengguna">
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-0">
                            <label>Hak Akses</label>
                            <hr>
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="1"> Admin</label>
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="2"> Co-Admin</label>
                            <label class="radio-inline mr-3"><input type="radio" name="role" value="3"> Operator</label>
                        </div>
                    </div>
                    <div class="form-group">
                          <label>Data Induk</label>
                        <div class="row">
                            <div class="col-sm-6"> 
                                 
                                <select name="pangkat" class="" id="pangkat">
                                    <option selected>Pilih Pangkat...</option>
                                    @foreach ($data_induk as $data_induk)
                                    <option value="{{$data_induk['pangkat']}}">{{$data_induk['pangkat']}}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select name="golongan" class="" id="golongan">
                                    <option selected>Pilih Golongan...</option>
                                    @foreach ($data_induk as $data_induk)
                                    <option value="{{$data_induk['golongan']}}">{{$data_induk['golongan']}}</option>
                                    @endforeach
                                </select>
                            </div>
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
                <form method="POST" action="{{route('tambah_pengguna')}}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text"
                            class="form-control input-rounded @error('nama') is-invalid @enderror"
                            name="nama" id="nama" placeholder="Nama Pengguna">
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" class="form-control input-rounded @error('lahir') is-invalid @enderror" name="tgl_lahir"
                           >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"
                            class="form-control input-rounded @error('Email') is-invalid @enderror"
                            name="email" id="email" placeholder="Email Pengguna">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Hak Akses</label>
                            </div>
                            <select name="role" class="" id="role">
                                <option selected>Pilih...</option>
                                <option value="1">Admin</option>
                                <option value="2">Co-Admin</option>
                                <option value="3">Operator</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                          <label>Data Induk</label>
                        <div class="row">
                            <div class="col-sm-6">  
                                <select name="pangkat" class="" id="pangkat">
                                    <option selected>Pilih Golongan...</option>
                                    @foreach ($data_induk as $data_induk)
                                    <option value="{{$data_induk['pangkat']}}">{{$data_induk['pangkat']}}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select name="golongan" class="" id="golongan">
                                    <option selected>Pilih Golongan...</option>
                                    @foreach ($data_induk as $data_induk)
                                    <option value="{{$data_induk['golongan']}}">{{$data_induk['golongan']}}</option>
                                    @endforeach
                                </select>
                            </div>
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

<script>
    $(function () {
        var 
        nama_provinsi = $('select[name="nama_provinsi"]'),
            kabupaten = $('select[name="kabupaten"]');

        loader.hide();
        kabupaten.attr('disabled','disabled')

        kabupaten.change(function(){
            var id = $(this).val();
            if(!id){
                kabupaten.attr('disabled','disabled')
            }
        })

        nama_provinsi.change(function() {
            var id= $(this).val();
            if(id){
                loader.show();
                kabupaten.attr('disabled','disabled')

                $.get('{{url('/dropdown-data?cat_id=')}}'+id)
                    .success(function(data){
                        var s='<option value="">---select--</option>';
                        data.forEach(function(row){
                            s +='<option value="'+row.id+'">'+row.name+'</option>'
                        })
                        kabupaten.removeAttr('disabled')
                        kabupaten.html(s);
                        loader.hide();
                    })
            }

        })
    })
</script>
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
                var pangkat = button.data('pangkat')
                var golongan = button.data('golongan')
                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #nama').val(nama);
                modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
                modal.find('.modal-body #alamat').val(alamat);
                modal.find('.modal-body #email').val(email);
                modal.find('.modal-body #role').val(role);
                modal.find('.modal-body #pangkat').val(pangkat);
                modal.find('.modal-body #golongan').val(golongan);
            })
        })
</script>

@endsection

