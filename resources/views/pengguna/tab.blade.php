@extends('layouts.default')

@section('welcome')

<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
        <h4>Data Lengkap Pengguna</h4>
            
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Lengkap Pengguna</a></li>
        </ol>
    </div>
</div>
@endsection
@section('content')

<div class="row">
    <div class="col-sm-4">
        <div class="card">
          
            <div class="card-body">
                <div class="basic-list-group">
                    <ul class="list-group">
                       <img src="{{url('images/user',$data->image)}}" width="100%" height="130%" alt="">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Lengkap {{$data->nama}}</h4>
            </div>
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home8">
                            <span>
                                <i class="ti-user"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile8">
                            <span>
                                <i class="ti-home"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages8">
                            <span>
                                <i class="ti-agenda"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#employee8">
                            <span>
                                <i class="ti-bookmark"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pangkat">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#contact8">
                            <span>
                                <i class="fa fa-phone"></i>
                            </span>
                        </a>
                    </li>
                </li>
                
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                    <div class="tab-pane fade show active" id="home8" role="tabpanel">
                        <div class="pt-4">
                            <h4>Identitas</h4>
                            <br>
                            <table class="table table-responsive-md">
                                <tbody>
                                   <tr>
                                       <td>Nama</td>
                                       <td>:</td>
                                       <td> {{$data->nama}}</td>
                                   </tr>
                                   <tr>
                                        <td>Jenis Kelammin</td>
                                        <td>:</td>
                                        <td> {{$data->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td> {{$data->nomor_induk_pegawai}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>:</td>
                                        <td> {{$data->tempat_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td> {{$data->tgl_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu Kandung</td>
                                        <td>:</td>
                                        <td> {{$data->nama_ibu_kandung}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile8" role="tabpanel">
                        <div class="pt-4">
                            <h4>Alamat</h4>
                            <table class="table table-responsive-md">
                                <tbody>
                                   <tr>
                                       <td>Nama Provinsi</td>
                                       <td>:</td>
                                       <td> {{$data->nama_provinsi}}</td>
                                   </tr>
                                   <tr>
                                        <td>Nama Kabupaten</td>
                                        <td>:</td>
                                        <td> {{$data->nama_kabupaten}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kecamatan</td>
                                        <td>:</td>
                                        <td> {{$data->nama_kecamatan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Dusun/Kelurahan</td>
                                        <td>:</td>
                                        <td> {{$data->nama_dusun}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Desa</td>
                                        <td>:</td>
                                        <td> {{$data->nama_desa}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="messages8" role="tabpanel">
                        <div class="pt-4">
                            <h4>Data Pribadi</h4>
                            <table class="table table-responsive-md">
                                <tbody>
                                   <tr>
                                       <td>Agama</td>
                                       <td>:</td>
                                       <td> {{$data->agama}}</td>
                                   </tr>
                                   <tr>
                                        <td>Status Perkawinan</td>
                                        <td>:</td>
                                        <td> {{$data->status_perkawinan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Kewarganegaraan</td>
                                        <td>:</td>
                                        <td> {{$data->kewarganegaraan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade" id="employee8" role="tabpanel">
                        <div class="pt-4">
                            <h4>Kepegawaian</h4>
                            <table class="table table-responsive-md">
                                <tbody>
                                   <tr>
                                       <td>NIP</td>
                                       <td>:</td>
                                       <td> {{$data->nomor_induk_pegawai}}</td>
                                   </tr>
                                   <tr>
                                        <td>Status Perkawinan</td>
                                        <td>:</td>
                                        <td> {{$data->status_perkawinan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Diklat Kepemimpinan</td>
                                        <td>:</td>
                                        <td> {{$data->diklat_kepemimpinan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pangkat" role="tabpanel">
                        <div class="pt-4">
                            <h4>Realisasi Pangkat Terakhir</h4>
                            <table class="table table-responsive-md">
                                <tbody>
                                   <tr>
                                       <td>Nomor SK</td>
                                       <td>:</td>
                                       <td> {{$data->nomor_sk}}</td>
                                   </tr>
                                   <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td> {{$data->tanggal}}</td>
                                    </tr>
                                    <tr>
                                        <td>TMT SK Pengangkat</td>
                                        <td>:</td>
                                        <td> {{$data->tmt_sk_pangkat}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pejabat yang Mengangkat</td>
                                        <td>:</td>
                                        <td> {{$data->mengangkat}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact8" role="tabpanel">
                        <div class="pt-4">
                            <h4>Kontak</h4>
                            <table class="table table-responsive-md">
                                <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td> {{$data->email}}</td>
                                    </tr>
                                   <tr>
                                       <td>No Hp</td>
                                       <td>:</td>
                                       <td> {{$data->no_hp}}</td>
                                   </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection