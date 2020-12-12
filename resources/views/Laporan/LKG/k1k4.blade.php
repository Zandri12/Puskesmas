@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Laporan Kesga Gizi KB Imunisasi</h4>
           
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        <li class="breadcrumb-item active"><a href="{{route('lkg')}}">Laporan Kesga Gizi KB Imunisasi</a></li>
        </ol>
    </div>
</div>
@endsection
@section('content')
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
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">No</th>
                                <th scope="col">Nama Nagari</th>
                                <th scope="col">Nama Jorong</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Suami</th>
                                <th scope="col">Hamil Ke</th>
                                <th scope="col">HPHT</th>
                                <th scope="col">Usia Kehamilan</th>
                                <th scope="col">Jenis Resiko</th>
                                <th scope="col">DPT Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                        @endphp
                         @foreach ($data as $data)
                            <tr>
                               
                                <td>
                                    {{-- <a href="/laporan/lkg/ubah_k1/{{$data['id']}}"
                                    class="shadow btn btn-warning btn-xs sharp"><i class="fa fa-pencil"></i></a> --}}
                                    <a href="/laporan/lkg/hapus_k1/{{$data['id']}}"
                                    class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    <form method="POST" action="/laporan/lkg/ubah_k1/{{$data['id']}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <button type="submit" class="mr-1 shadow btn btn-warning btn-xs sharp"><i class="fa fa-pencil"></i></button>
                                </td>
                                <td>{{$no++}}</td>
                                <td>
                                    <input align="center" style="border: none" name="nama_nagari" type="text" value="{{$data['nama_nagari']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="nama_jorong" type="text" value="{{$data['nama_jorong']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="bulan" type="text" value="{{$data['bulan']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="na_ibu" type="text" value="{{$data['na_ibu']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="umur" type="number" value="{{$data['umur']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="alamat" type="text" value="{{$data['alamat']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="na_suami" type="text" value="{{$data['na_suami']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="hamil_ke" type="number" value="{{$data['hamil_ke']}}">
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="HPHT" type="text" value="{{$data['HPHT']}}">    
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="usia_kehamilan" type="text" value="{{$data['usia_kehamilan']}}">    
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="jr" type="text" value="{{$data['jr']}}">    
                                </td>
                                <td>
                                    <input align="center" style="border: none" name="DPT" type="text" value="{{$data['DPT']}}">    
                                </td>
                            
                                </form>
                               
                           </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">Aksi</th>
                                <th scope="col">No</th>
                                <th scope="col">Nama Nagari</th>
                                <th scope="col">Nama Jorong</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Suami</th>
                                <th scope="col">Hamil Ke</th>
                                <th scope="col">HPHT</th>
                                <th scope="col">Usia Kehamilan</th>
                                <th scope="col">Jenis Resiko</th>
                                <th scope="col">DPT Buku</th>
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
            {{-- <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div> --}}
            <div class="modal-body">

                <form method="POST" action="{{route('tambahk1')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Nama Nagari" name="nama_nagari">
                   </div>
                   <div class="form-group">
                    <input type="text"   class="form-control input-rounded" placeholder="Nama Jorong" name="nama_jorong">
                   </div>
                   <div class="form-group">
                    <select name="bulan"class="form-control @error('bulan') is-invalid @enderror"  id="bulan">
                        <option selected="selected">Bulan</option>
                        <?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>
                   </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text"   class="form-control input-rounded" placeholder="Nama Ibu" name="na_ibu">
                            </div> 
                            <div class="col-sm-6 mt-2 mt-sm-0">
                              
                                    <input type="number" placeholder="Umur" class="form-control input-rounded"  name="umur">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Alamat" name="alamat">
                   </div>

                   <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <input type="text"   class="form-control input-rounded" placeholder="Nama Suami" name="na_suami">
                        </div> 
                        <div class="col-sm-6 mt-2 mt-sm-0">
                          
                                <input type="number" placeholder="Hamil Ke" class="form-control input-rounded"  name="hamil_ke">
                        </div>
                    </div>
                   </div>

                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="HPHT" name="HPHT">
                   </div>
                   <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Usia Kehamilan" name="usia_kehamilan">
                  </div> 
                  <div class="form-group">
                    <input type="text"   class="form-control input-rounded" placeholder="Jenis Resiko" name="jr">
                  </div>
                <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="DPT Buku" name="DPT">
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


<div class="col-xl-12 col-xxl-6">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#tambahdatak4"><span
                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
            </span>Tambah Data
        </button>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
           
        
            <div class="card-body">
                <div class="table-responsive">
                   
                    <table id="example11" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Nama Nagari</th>
                                <th scope="col">Nama Jorong</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Suami</th>
                                <th scope="col">Tanggal K4</th>
                                <th scope="col">Masalah</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                        @endphp
                          @foreach ($datas as $datas)
                           <tr>
                               <td>{{$no++}}</td>
                               <td>
                                <a href="/laporan/lkg/hapus_k4/{{$datas['id']}}"
                                class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                <form method="POST" action="/laporan/lkg/ubah_k4/{{$datas['id']}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <button type="submit" class="mr-1 shadow btn btn-warning btn-xs sharp"><i class="fa fa-pencil"></i></button>
                               </td>
                            <td>

                                <input align="center" style="border: none" name="nama_nagari" type="text" value="{{$datas['nama_nagari']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="nama_jorong" type="text" value="{{$datas['nama_jorong']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="bulan" type="text" value="{{$datas['bulan']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="na_ibu" type="text" value="{{$datas['na_ibu']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="umur" type="number" value="{{$datas['umur']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="alamat" type="text" value="{{$datas['alamat']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="na_suami" type="text" value="{{$datas['na_suami']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="tglk4" type="date" value="{{$datas['tglk4']}}">
                            </td>
                            <td>
                                <input align="center" style="border: none" name="masalah" type="text" value="{{$datas['masalah']}}">
                            </td>
                        </form>
                      
                           </tr>
                           @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Nama Nagari</th>
                                <th scope="col">Nama Jorong</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nama Suami</th>
                                <th scope="col">Tanggal K4</th>
                                <th scope="col">Masalah</th>
                            </tr>
                        </tfoot>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahdatak4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{route('tambahk4')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Nama Nagari" name="nama_nagari">
                   </div>
                   <div class="form-group">
                    <input type="text"   class="form-control input-rounded" placeholder="Nama Jorong" name="nama_jorong">
                   </div>
                   <div class="form-group">
                    <select name="bulan"class="form-control @error('bulan') is-invalid @enderror"  id="bulan">
                        <option selected="selected">Bulan</option>
                        <?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>
                   </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <input type="text"   class="form-control input-rounded" placeholder="Nama Ibu" name="na_ibu">
                            </div> 
                            <div class="col-sm-6 mt-2 mt-sm-0">
                              
                                    <input type="number" placeholder="Umur" class="form-control input-rounded"  name="umur">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Alamat" name="alamat">
                   </div>

                   <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <input type="text"   class="form-control input-rounded" placeholder="Nama Suami" name="na_suami">
                        </div> 
                        <div class="col-sm-6 mt-2 mt-sm-0">
                          
                                <input type="date" placeholder="Hamil Ke" class="form-control input-rounded"  name="tglk4">
                        </div>
                    </div>
                   </div>

                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Masalah" name="masalah">
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

