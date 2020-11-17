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
                            <th>Aksi</th>
                            <th>Detail</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu Kandung</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Nama Provinsi</th>
                            <th>Nama Kabupaten</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $d = 1;
                        @endphp
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$d++}}</td>
                            <td><button type="button" class="mr-1 shadow btn btn-warning btn-xs sharp"
                                data-toggle="modal"
                                data-id="{{ $data['id'] }}"
                                data-nama="{{$data['nama']}}"
                                data-jenis_kelamin="{{ $data['jenis_kelamin'] }}"
                                data-tempat_lahir="{{ $data['tempat_lahir'] }}"
                                data-tgl_lahir="{{$data['tgl_lahir']}}"
                                data-nama_ibu_kandung="{{ $data['nama_ibu_kandung'] }}"
                                data-alamat="{{$data['alamat']}}"
                                data-rukun_tetangga="{{ $data['rukun_tetangga'] }}"
                                data-rukun_warga="{{ $data['rukun_warga'] }}"
                                data-nama_provinsi="{{ $data['nama_provinsi'] }}"
                                data-nama_kabupaten="{{ $data['nama_kabupaten'] }}"
                                data-nama_kecamatan="{{ $data['nama_kecamatan'] }}"
                                data-nama_dusun="{{ $data['nama_dusun'] }}"
                                data-nama_desa="{{ $data['nama_desa'] }}"
                                data-kode_pos="{{ $data['kode_pos'] }}"
                                data-agama="{{ $data['agama'] }}"
                                data-status_perkawinan="{{ $data['status_perkawinan'] }}" 
                                data-kewarganegaraan="{{ $data['kewarganegaraan'] }}"
                                data-nomor_induk_pegawai="{{ $data['nomor_induk_pegawai'] }}"
                                data-nomor_sk="{{ $data['nomor_sk'] }}"
                                data-tanggal="{{ $data['tanggal'] }}"
                                data-mengangkat="{{ $data['mengangkat'] }}"
                                data-tmt_jabatan="{{ $data['tmt_jabatan'] }}"
                                data-tmt_sk_pangkat="{{ $data['tmt_sk_pangkat'] }}"
                                data-jabatan="{{ $data['jabatan'] }}"
                                data-diklat_kepemimpinan="{{ $data['diklat_kepemimpinan'] }}"
                                data-asal_slta="{{ $data['asal_slta'] }}"
                                data-jurusan_slta="{{ $data['jurusan_slta'] }}"
                                data-tanggal_tamat_slta="{{ $data['tanggal_tamat_slta'] }}"
                                data-universitas="{{ $data['universitas'] }}"
                                data-jurusan_universitas="{{ $data['jurusan_universitas'] }}"
                                data-tanggal_tamat_universitas="{{ $data['tanggal_tamat_universitas'] }}"
                                data-no_hp="{{ $data['no_hp'] }}"
                                data-email="{{$data['email']}}"
                                data-role="{{$data['role']}}"
                                data-pangkat="{{$data['pangkat']}}"
                                data-golongan="{{$data['golongan']}}"
                                data-image="{{$data['image']}}"
                                data-target="#editModal"><i class="fa fa-pencil"></i></button>
                            <a href="/pengguna/delete/{{$data['id']}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                            <td> <a href="/pengguna/data_lengkap/{{$data['id']}}" class="btn btn-info shadow btn-xs sharp"><i class="fa fa-eye"></i></a></td></td>
                            <td>{{$data['nama']}}</td>
                            <td>{{$data['jenis_kelamin']}}</td>
                            <td>{{$data['tempat_lahir']}}</td>
                            <td>{{$data['tgl_lahir']}}</td>
                            <td>{{$data['nama_ibu_kandung']}}</td>
                            <td>{{$data['alamat']}}</td>
                            <td>{{$data['rukun_tetangga']}}</td>
                            <td>{{$data['rukun_warga']}}</td>
                            <td>{{$data['nama_provinsi']}}</td>
                            <td>{{$data['nama_kabupaten']}}</td>
                            
                                
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
                <form method="POST" action="{{route('tambah_pengguna')}}" enctype="multipart/form-data">
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
                            <input type="text" name="rukun_tetangga" class="@error('rukun_tetangga') is-invalid @enderror form-control" placeholder="RT....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>RW</label>
                            <input type="text" name="rukun_warga" class="@error('rukun_warga') is-invalid @enderror form-control" placeholder="RW....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Propinsi</label>
                            <input type="text" name="nama_provinsi" class="@error('nama_provinsi') is-invalid @enderror form-control" placeholder="Nama Propinsi....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kabupaten</label>
                            <input type="text" name="nama_kabupaten" class="@error('nama_kabupaten') is-invalid @enderror form-control" placeholder="Nama Kabupaten....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" class="@error('nama_kecamatan') is-invalid @enderror form-control" placeholder="Nama Kecamatan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Dusun</label>
                            <input type="text" name="nama_dusun" class="@error('nama_dusun') is-invalid @enderror form-control" placeholder="Nama Dusun....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Desa/Kelurahan</label>
                            <input type="text" name="nama_desa" class="@error('nama_desa') is-invalid @enderror form-control" placeholder="Nama Desa/Kelurahan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="text" name="kode_pos" class="@error('kode_pos') is-invalid @enderror form-control" placeholder="Kode Pos....">
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
                            name="kewarganegaraan" placeholder="Kewarganegaraan...">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text"
                            class="form-control input-rounded @error('nomor_induk_pegawai') is-invalid @enderror"
                            name="nomor_induk_pegawai" placeholder="NIP Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Nomor SK</label>
                        <input type="text"
                            class="form-control input-rounded @error('nomor_sk') is-invalid @enderror"
                            name="nomor_sk" placeholder="Nomor SK Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date"
                            class="form-control input-rounded @error('tanggal') is-invalid @enderror"
                            name="tanggal" placeholder="Tanggal...">
                    </div>
                    <div class="form-group">
                        <label>Mengangkat</label>
                        <input type="text"
                            class="form-control input-rounded @error('mengangkat') is-invalid @enderror"
                            name="mengangkat" placeholder="Mengangkat...">
                    </div>
                    <div class="form-group">
                        <label>TMT Jabatan</label>
                        <input type="date"
                            class="form-control input-rounded @error('tmt_jabatan') is-invalid @enderror"
                            name="tmt_jabatan" placeholder="TMT Jabatan...">
                    </div>
                    <div class="form-group">
                        <label>TMT SK Pangkat</label>
                        <input type="date"
                            class="form-control input-rounded @error('tmt_sk_pangkat') is-invalid @enderror"
                            name="tmt_sk_pangkat" placeholder="TMT SK Pangkat...">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text"
                            class="form-control input-rounded @error('jabatan') is-invalid @enderror"
                            name="jabatan" placeholder="Jabatan...">
                    </div>
                    <div class="form-group">
                        <label>Diklat Kepemimpinan</label>
                        <input type="text"
                            class="form-control input-rounded @error('diklat_kepemimpinan') is-invalid @enderror"
                            name="diklat_kepemimpinan" placeholder="Diklat Kepemimpinan...">
                    </div>

                    <hr>
                    <label> Pendidikan</label>
                    <hr>
                    <label> SLTA</label>
                    <div class="form-group">
                        <label>Asal SLTA</label>
                        <input type="text"
                            class="form-control input-rounded @error('asal_slta') is-invalid @enderror"
                            name="asal_slta" placeholder="Asal SLTA....">
                    </div>
                    <div class="form-group">
                        <label>Jurusan SLTA</label>
                        <input type="text"
                            class="form-control input-rounded @error('jurusan_slta') is-invalid @enderror"
                            name="jurusan_slta" placeholder="Jurusan SLTA....">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Tamat SLTA</label>
                        <input type="date"
                            class="form-control input-rounded @error('tanggal_tamat_slta') is-invalid @enderror"
                            name="tanggal_tamat_slta" >
                    </div>
                    <div class="form-group">
                        <label>Asal Universitas</label>
                        <input type="text"
                            class="form-control input-rounded @error('universitas') is-invalid @enderror"
                            name="universitas" placeholder="Asal Universitas....">
                    </div>
                    <div class="form-group">
                        <label>Jurusan Universitas</label>
                        <input type="text"
                            class="form-control input-rounded @error('jurusan_universitas') is-invalid @enderror"
                            name="jurusan_universitas" placeholder="Jurusan Universitas....">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Tamat Universitas</label>
                        <input type="date"
                            class="form-control input-rounded @error('tanggal_tamat_universitas') is-invalid @enderror"
                            name="tanggal_tamat_universitas" >
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
                    @forelse ($data_induk as $data_induk)
                      <div class="col-sm-6"> 
                         <select name="pangkat" class="">
                            <option selected>Pilih Pangkat...</option>
                         <option value="{{$data_induk['pangkat']}}">{{$data_induk['pangkat']}}</option>
                        </select> 
                         
                          
                      </div>
                      <div class="col-sm-6 mt-2 mt-sm-0">
                          <select name="golongan" class="">
                              <option selected>Pilih Golongan...</option>
                              <option value="{{$data_induk['golongan']}}">{{$data_induk['golongan']}}</option>
                          </select>
                        </div>
                  </div>
                  @empty
                  <div class="col-sm-6"> 
                    <select name="pangkat" class="">
                    
                    <option value="">Pangkat Kosong</option>
                   </select> 
                    
                     
                 </div>
                 <div class="col-sm-6 mt-2 mt-sm-0">
                     <select name="golongan" class="">
                       
                         <option value="">Golongan Kosong</option>
                     </select>
                   </div>
                </div>
                  @endforelse  
                
              </div>
            </div>
            <div class="form-group">
                <input type="file"
                    class="form-control input-rounded @error('image') is-invalid @enderror"
                    name="image" placeholder="No Hp Pengguna...">
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
                <form action="{{route('update_pengguna','data')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" id="nama"
                            class="form-control input-rounded @error('nama') is-invalid @enderror"
                            name="nama" placeholder="Nama Pengguna">
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jenis Kelamin</label>
                            </div>
                            <select name="jenis_kelamin" class="" id="jenis_kelamin">
                                <option selected>Pilih...</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <textarea name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" class="form-control input-rounded @error('lahir') is-invalid @enderror" name="tgl_lahir"
                           >
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu Kandung Pengguna</label>
                        <input type="text"
                            class="form-control input-rounded @error('nama_ibu_kandung') is-invalid @enderror"
                            name="nama_ibu_kandung" id="nama_ibu_kandung" placeholder="Nama Ibu Kandung Pengguna">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Pengguna...."></textarea>
                      
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>RT</label>
                            <input type="text" name="rukun_tetangga" id="rukun_tetangga" class="@error('rukun_tetangga') is-invalid @enderror form-control" placeholder="RT....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>RW</label>
                            <input type="text" name="rukun_warga" id="rukun_warga" class="@error('rukun_warga') is-invalid @enderror form-control" placeholder="RW....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Propinsi</label>
                            <input type="text" name="nama_provinsi" id="nama_provinsi" class="@error('nama_provinsi') is-invalid @enderror form-control" placeholder="Nama Propinsi....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kabupaten</label>
                            <input type="text" name="nama_kabupaten" id="nama_kabupaten" class="@error('nama_kabupaten') is-invalid @enderror form-control" placeholder="Nama Kabupaten....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" id="nama_kecamatan" class="@error('nama_kecamatan') is-invalid @enderror form-control" placeholder="Nama Kecamatan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Dusun</label>
                            <input type="text" name="nama_dusun" id="nama_dusun" class="@error('nama_dusun') is-invalid @enderror form-control" placeholder="Nama Dusun....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nama Desa/Kelurahan</label>
                            <input type="text" name="nama_desa" id="nama_desa" class="@error('nama_desa') is-invalid @enderror form-control" placeholder="Nama Desa/Kelurahan....">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="text" name="kode_pos" id="kode_pos" class="@error('kode_pos') is-invalid @enderror form-control" placeholder="Kode Pos....">
                        </div>
                    </div>
                  <div class="form-group">
                    <label>Agama</label>
                        <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror"  id="agama">
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
                            <select name="status_perkawinan" id="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror"  id="status_perkawinan">
                                <option selected>Pilih...</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Menikah">Menikah</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" id="kewarganegaraan"
                            class="form-control input-rounded @error('kewarganegaraan') is-invalid @enderror"
                            name="kewarganegaraan" placeholder="Kewarganegaraan...">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" id="nomor_induk_pegawai" class="form-control input-rounded @error('nomor_induk_pegawai') is-invalid @enderror"
                            name="nomor_induk_pegawai" placeholder="NIP Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Nomor SK</label>
                        <input type="text" id="nomor_sk"
                            class="form-control input-rounded @error('nomor_sk') is-invalid @enderror"
                            name="nomor_sk" placeholder="Nomor SK Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" id="tanggal"
                            class="form-control input-rounded @error('tanggal') is-invalid @enderror"
                            name="tanggal" placeholder="Tanggal...">
                    </div>
                    <div class="form-group">
                        <label>Mengangkat</label>
                        <input type="text" id="mengangkat"
                            class="form-control input-rounded @error('mengangkat') is-invalid @enderror"
                            name="mengangkat" placeholder="Mengangkat...">
                    </div>
                    <div class="form-group">
                        <label>TMT Jabatan</label>
                        <input type="date" id="tmt_jabatan"
                            class="form-control input-rounded @error('tmt_jabatan') is-invalid @enderror"
                            name="tmt_jabatan" placeholder="TMT Jabatan...">
                    </div>
                    <div class="form-group">
                        <label>TMT SK Pangkat</label>
                        <input type="date" id="tmt_sk_pangkat"
                            class="form-control input-rounded @error('tmt_sk_pangkat') is-invalid @enderror"
                            name="tmt_sk_pangkat" placeholder="TMT SK Pangkat...">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" id="jabatan"
                            class="form-control input-rounded @error('jabatan') is-invalid @enderror"
                            name="jabatan" placeholder="Jabatan...">
                    </div>
                    <div class="form-group">
                        <label>Diklat Kepemimpinan</label>
                        <input type="text" id="diklat_kepemimpinan"
                            class="form-control input-rounded @error('diklat_kepemimpinan') is-invalid @enderror"
                            name="diklat_kepemimpinan" placeholder="Diklat Kepemimpinan...">
                    </div>
                    <label> Pendidikan</label>
                    <hr>
                    <label> SLTA</label>
                    <div class="form-group">
                        <label>Asal SLTA</label>
                        <input type="text"
                            class="form-control input-rounded @error('asal_slta') is-invalid @enderror"
                            name="asal_slta" id="asal_slta" placeholder="Asal SLTA....">
                    </div>
                    <div class="form-group">
                        <label>Jurusan SLTA</label>
                        <input type="text"
                            class="form-control input-rounded @error('jurusan_slta') is-invalid @enderror"
                            name="jurusan_slta" id="jurusan_slta" placeholder="Jurusan SLTA....">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Tamat SLTA</label>
                        <input type="date"
                            class="form-control input-rounded @error('tanggal_tamat_slta') is-invalid @enderror"
                            name="tanggal_tamat_slta" id="tanggal_tamat_slta" >
                    </div>
                    <div class="form-group">
                        <label>Asal Universitas</label>
                        <input type="text"
                            class="form-control input-rounded @error('universitas') is-invalid @enderror"
                            name="universitas" id="universitas" placeholder="Asal Universitas....">
                    </div>
                    <div class="form-group">
                        <label>Jurusan Universitas</label>
                        <input type="text"
                            class="form-control input-rounded @error('jurusan_universitas') is-invalid @enderror"
                            name="jurusan_universitas" id="jurusan_universitas" placeholder="Jurusan Universitas....">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Tamat Universitas</label>
                        <input type="date"
                            class="form-control input-rounded @error('tanggal_tamat_universitas') is-invalid @enderror"
                            name="tanggal_tamat_universitas" id="tanggal_tamat_universitas" >
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" id="no_hp"
                            class="form-control input-rounded @error('no_hp') is-invalid @enderror"
                            name="no_hp" placeholder="No Hp Pengguna...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email"
                            class="form-control input-rounded @error('email') is-invalid @enderror"
                            name="email" placeholder="Email Pengguna">
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
                        @forelse ($data_induk2 as $data_induk2)
                          <div class="col-sm-6"> 
                             <select id="pangkat" name="pangkat" class="">
                                <option selected>Pilih Pangkat...</option>
                             <option value="{{$data_induk2['pangkat']}}">{{$data_induk2['pangkat']}}</option>
                            </select> 
                             
                              
                          </div>
                          <div class="col-sm-6 mt-2 mt-sm-0">
                              <select id="golongan" name="golongan" class="">
                                  <option selected>Pilih Golongan...</option>
                                  <option value="{{$data_induk2['golongan']}}">{{$data_induk2['golongan']}}</option>
                              </select>
                            </div>
                      </div>
                      @empty
                      <div class="col-sm-6"> 
                        <select id="pangkat" name="pangkat" class="">
                        
                        <option value="">Pangkat Kosong</option>
                       </select> 
                        
                         
                     </div>
                     <div class="col-sm-6 mt-2 mt-sm-0">
                         <select id="golongan" name="golongan" class="">
                           
                             <option value="">Golongan Kosong</option>
                         </select>
                       </div>
                    </div>
                    
                      @endforelse  
                    
                  </div>
                  <div class="form-group">
                    <input type="file" id=""
                        class="form-control input-rounded @error('image') is-invalid @enderror"
                        name="image" placeholder="No Hp Pengguna...">
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

<script type="text/javascript">
    $(function () {
            $('#editModal').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var nama = button.data('nama')
                var jenis_kelamin = button.data('jenis_kelamin')
                var tempat_lahir = button.data('tempat_lahir')
                var tgl_lahir = button.data('tgl_lahir')
                var nama_ibu_kandung = button.data('nama_ibu_kandung')
                var alamat = button.data('alamat')
                var rukun_tetangga = button.data('rukun_tetangga')
                var rukun_warga = button.data('rukun_warga')
                var nama_provinsi = button.data('nama_provinsi')
                var nama_kabupaten = button.data('nama_kabupaten')
                var nama_kecamatan = button.data('nama_kecamatan')
                var nama_dusun = button.data('nama_dusun')
                var nama_desa = button.data('nama_desa')
                var kode_pos = button.data('kode_pos')
                var agama = button.data('agama')
                var status_perkawinan = button.data('status_perkawinan')
                var kewarganegaraan = button.data('kewarganegaraan')
                var nomor_induk_pegawai = button.data('nomor_induk_pegawai')
                var nomor_sk = button.data('nomor_sk')
                var tanggal = button.data('tanggal')
                var mengangkat = button.data('mengangkat')
                var tmt_jabatan = button.data('tmt_jabatan')
                var tmt_sk_pangkat = button.data('tmt_sk_pangkat')
                var tmt_sk_pangkat = button.data('jabatan')
                var diklat_kepemimpinan = button.data('diklat_kepemimpinan')
                var asal_slta = button.data('asal_slta')
                var jurusan_slta = button.data('jurusan_slta')
                var tanggal_tamat_slta = button.data('tanggal_tamat_slta')
                var universitas = button.data('universitas')
                var jurusan_universitas = button.data('jurusan_universitas')
                var tanggal_tamat_universitas = button.data('tanggal_tamat_universitas')
                var no_hp = button.data('no_hp')
                var email = button.data('email')
                var role = button.data('role')
                var pangkat = button.data('pangkat')
                var golongan = button.data('golongan')
                var image = button.data('image')
                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #nama').val(nama);
                modal.find('.modal-body #jenis_kelamin').val(jenis_kelamin);
                modal.find('.modal-body #tempat_lahir').val(tempat_lahir);
                modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
                modal.find('.modal-body #nama_ibu_kandung').val(nama_ibu_kandung);
                modal.find('.modal-body #alamat').val(alamat);
                modal.find('.modal-body #rukun_tetangga').val(rukun_tetangga);
                modal.find('.modal-body #rukun_warga').val(rukun_warga);
                modal.find('.modal-body #nama_provinsi').val(nama_provinsi);
                modal.find('.modal-body #nama_kabupaten').val(nama_kabupaten);
                modal.find('.modal-body #nama_kecamatan').val(nama_kecamatan);
                modal.find('.modal-body #nama_dusun').val(nama_dusun);
                modal.find('.modal-body #nama_desa').val(nama_desa);
                modal.find('.modal-body #kode_pos').val(kode_pos);
                modal.find('.modal-body #agama').val(agama);
                modal.find('.modal-body #status_perkawinan').val(status_perkawinan);
                modal.find('.modal-body #kewarganegaraan').val(kewarganegaraan);
                modal.find('.modal-body #nomor_induk_pegawai').val(nomor_induk_pegawai);
                modal.find('.modal-body #nomor_sk').val(nomor_sk);
                modal.find('.modal-body #tanggal').val(tanggal);
                modal.find('.modal-body #mengangkat').val(mengangkat);
                modal.find('.modal-body #tmt_jabatan').val(tmt_jabatan);
                modal.find('.modal-body #tmt_sk_pangkat').val(tmt_sk_pangkat);
                modal.find('.modal-body #jabatan').val(jabatan);
                modal.find('.modal-body #diklat_kepemimpinan').val(diklat_kepemimpinan);
                modal.find('.modal-body #asal_slta').val(asal_slta);
                modal.find('.modal-body #jurusan_slta').val(jurusan_slta);
                modal.find('.modal-body #tanggal_tamat_slta').val(tanggal_tamat_slta);
                modal.find('.modal-body #universitas').val(universitas);
                modal.find('.modal-body #jurusan_universitas').val(jurusan_universitas);
                modal.find('.modal-body #tanggal_tamat_universitas').val(tanggal_tamat_universitas);
                modal.find('.modal-body #no_hp').val(no_hp);
                modal.find('.modal-body #email').val(email);
                modal.find('.modal-body #role').val(role);
                modal.find('.modal-body #pangkat').val(pangkat);
                modal.find('.modal-body #golongan').val(golongan);
                modal.find('.modal-body #image').val(image);
            })
        })
</script>

@endsection

