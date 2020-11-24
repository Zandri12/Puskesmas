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
                <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target="#kode_files"><span
                    class="btn-icon-left text-warning"><i class="fa fa-plus color-warning"></i>
                </span>Kode File
            </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-xxl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if (Auth::user()->role == 1)
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th>Nama Nagari</th>
                                <th>Jorong</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
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
                                <td>
                                    @if ($data['jenis_file'] == 1)

                                    <p>Laporan Kesga Gizi KB Imunisasi</p>
                                    @endif
                                    @if($data['jenis_file'] == 2)
                                    <p>Laporan LB 1 Diare,PTP,P2P</p>
                                    @endif
                                    @if($data['jenis_file'] == 3)
                                    <p>PROMKES</p>
                                    @endif
                                    @if($data['jenis_file'] == 4)
                                    <p>KEMATIAN</p>
                                    @endif
                                
                                </td>
                                <td>
                                    @if ($data['nagari'] == 1)

                                    <p>Nagari STP</p>
                                    @endif
                                    @if($data['nagari'] == 2)
                                    <p>Sei Kamuyang</p>
                                    @endif
                                    @if($data['nagari'] == 3)
                                    <p>Andaleh</p>
                                    @endif
                                    @if($data['nagari'] == 4)
                                    <p>Mungo</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($data['jorong'] == 1)

                                    <p>Lakuak Dama</p>
                                    @endif
                                    @if($data['jorong'] == 2)
                                    <p>Sikabu Kabu</p>
                                    @endif
                                    @if($data['jorong'] == 3)
                                    <p>Tj.Haro Selatan</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 4)
                                    <p>Tj.Haro Utara</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 5)

                                    <p>Bukik Kanduang</p>
                                    @endif
                                    @if($data['jorong'] == 6)
                                    <p>Padang Panjang</p>
                                    @endif
                                    @if($data['jorong'] == 7)
                                    <p>BTG Tabik</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 8)
                                    <p>VI KP</p>
                                    @endif
                                    @if($data['jorong'] == 9)
                                    <p>Tj.Haro Utara</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 10)

                                    <p>RAGE</p>
                                    @endif
                                    @if($data['jorong'] == 11)
                                    <p>XII KP</p>
                                    @endif
                                    @if($data['jorong'] == 12)
                                    <p>SBD</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 13)
                                    <p>TBG</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 14)

                                    <p>MD KDK</p>
                                    @endif
                                    @if($data['jorong'] == 15)
                                    <p>VIII KP</p>
                                    @endif
                                    @if($data['jorong'] == 16)
                                    <p>Tarok</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 17)
                                    <p>TB Buruak</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 18)

                                    <p>KP Koto</p>
                                    @endif
                                    @if($data['jorong'] == 19)
                                    <p>KP Tangah</p>
                                    @endif
                                    @if($data['jorong'] == 20)
                                    <p>Tj.Baruah</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 21)
                                    <p>G.Gandang</p>
                                  
                                    
                                    @endif
                                    @if($data['jorong'] == 22)
                                    <p>P.Gadang</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 23)

                                    <p>Bl.Bukik</p>
                                    @endif
                                    @if($data['jorong'] == 24)
                                    <p>Pancuran Tinggi</p>
                                    @endif
                                    @if($data['jorong'] == 25)
                                    <p>Mustika 1</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 26)
                                    <p>Mustika 2</p>
                                  
                                    @endif
                                    @if($data['jorong'] == 27)
                                    <p>BA</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 28)

                                    <p>BB</p>
                                    @endif
                                    @if($data['jorong'] == 29)
                                    <p>TT</p>
                                    @endif
                                    @if($data['jorong'] == 30)
                                    <p>Batu Labi</p>
                                    
                                    @endif
                                    @if($data['jorong'] == 31)
                                    <p>BGS</p>
                                  
                                    @endif
                                    @if($data['jorong'] == 32)
                                    <p>Talaweh</p>
                                  
                                    @endif
                                    @if ($data['jorong'] == 33)

                                    <p>KTB</p>
                                    @endif
                                    @if($data['jorong'] == 34)
                                    <p>LL/IBB</p>
                                    @endif
                                    @if($data['jorong'] == 35)
                                    <p>Bt Nan Gadang</p>
                                    
                                    @endif
                                    @if ($data['jorong'] == 36)

                                    <p>Zipur</p>
                                    @endif
                                    @if($data['jorong'] == 37)
                                    <p>Akasia</p>
                                    @endif
                                    @if($data['jorong'] == 38)
                                    <p>Zamrud</p>
                                    
                                    @endif
                                </td>
                                <td>{{$data['created_at']->diffForHumans()}}</td>
                                <td align="center">
                                <a href="/laporan/download/{{$data['jenis_file']}}/{{$data['nagari']}}/{{$data['jorong']}}/{{$data['file']}}" class="shadow btn btn-success btn-xs sharp"><i class="fa fa-download"></i></a>
                                    <a href="/laporan/delete/{{$data['id']}}" class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th>Nama Nagari</th>
                                <th>Jorong</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                    @if (Auth::user()->role == 3)
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
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
                                <td>{{$data['created_at']->diffForHumans()}}</td>
                                <td align="center">
                                
                                    <a href="/laporan/delete/{{$data['id']}}" class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Waktu</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                   
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
                       
                        <input type="file"
                            class="form-control" name="file">
                           
                    </div>
                    <div class="form-group">
                         <input type="text"   class="form-control input-rounded" placeholder="Kode" name="kode">
                    </div>
                   
                    <div class="form-group" align="center">
                        <select id="jenis_file" name="jenis_file" class="">
                            <option selected>Pilih Jenis Laporan...</option>
                            <option value="1">Laporan Kesga Gizi KB Imunisasi</option>
                            <option value="2">Laporan LB 1 Diare,PTP,P2P</option>
                            <option value="3">PROMKES</option>
                            <option value="4">KEMATIAN</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select id="nagari" name="nagari" class="">
                                    <option selected>Pilih Nama Nagari</option>
                                    <option value="1">Nagari STP</option>
                                    <option value="2">Sei Kamuyang</option>
                                    <option value="3">Andaleh</option>
                                    <option value="4">Mungo</option>
                                </select>
                            </div> 
                            <div class="col-sm-6 mt-2 mt-sm-0">
                                <select id="jorong" name="jorong" class="">
                                    <option selected>Pilih Nama Jorong</option>
                                    <option value="1">Lakuak Dama</option>
                                    <option value="2">Sikabu Kabu</option>
                                    <option value="3">Tj.Haro Selatan</option>
                                    <option value="4">Tj.Haro Utara</option>
                                    <option value="5">Bukik Kanduang</option>
                                    <option value="6">Padang Panjang</option>
                                    <option value="7">BTG Tabik</option>
                                    <option value="8">VI KP</option>
                                    <option value="9">Tj.KLG</option>
                                    <option value="10">RAGE</option>
                                    <option value="11">XII KP</option>
                                    <option value="12">SBD</option>
                                    <option value="13">TBG</option>
                                    <option value="14">MD KDK</option>
                                    <option value="15">VIII KP</option>
                                    <option value="16">Tarok</option>
                                    <option value="17">TB Buruak</option>
                                    <option value="18">KP Koto</option>
                                    <option value="19">KP Tangah</option>
                                    <option value="20">Tj.Baruah</option>
                                    <option value="21">G.Gandang</option>
                                    <option value="22">P.Gadang</option>
                                    <option value="23">Bl.Bukik</option>
                                    <option value="24">Pancuran Tinggi</option>
                                    <option value="25">Mustika 1</option>
                                    <option value="26">Mustika 2</option>
                                    <option value="27">BA</option>
                                    <option value="28">BB</option>
                                    <option value="29">TT</option>
                                    <option value="30">Batu Labi</option>
                                    <option value="31">BGS</option>
                                    <option value="32">Talaweh</option>
                                    <option value="33">KTB</option>
                                    <option value="34">LL/IBB</option>
                                    <option value="35">Bt Nan Gadang</option>
                                    <option value="36">Zipur</option>
                                    <option value="37">Akasia</option>
                                    <option value="38">Zamrud</option>
                                   
                                </select>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <input type="text"   class="form-control input-rounded" placeholder="Nama Posyandu" name="nama_posyandu">
                   </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-rounded" name="nama_bidan"
                            placeholder="Nama Bidan">
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
<div class="modal fade" id="kode_files">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kode File</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Kode File</h4>
                <ol>
                    <li>1. Laporan Kesga Gizi KB Imunisasi</li>
                    <li>2. Laporan LB 1 Diare,PTP,P2P</li>
                    <li>3. PROMKES</li>
                    <li>4. KEMATIAN</li>
                </ol>
                <hr>
                <h4>Kode Nagari</h4>
                <hr>
                <ol>
                    <li>1. Nagari STP</li>
                    <li>2. Sei Kumayang</li>
                    <li>3. Andaleh</li>
                    <li>4. Mungo</li>
                </ol>
                <hr>
                <h4>Kode Jorong</h4>
                <ol>
                    <li>1. Lakuak Dama</li>
                    <li>2. Sikabu Kabu</>
                    <li>3. Tj.Haro Selatan</>
                    <li>4. Tj.Haro Utara</>
                    <li>5. Bukik Kanduang</>
                    <li>6. Padang Panjang</>
                    <li>7. BTG Tabik</>
                    <li>8. VI KP</>
                    <li>9. Tj.KLG</>
                    <li>1. RAGE</>
                    <li>11. XII KP</>
                    <li>12. SBD</>
                    <li>13. TBG</>
                    <li>14. MD KDK</>
                    <li>15. VIII KP</>
                    <li>16. Tarok</>
                    <li>17. TB Buruak</>
                    <li>18. KP Koto</>
                    <li>19. KP Tangah</>
                    <li>20. Tj.Baruah</>
                    <li>21. G.Gandang</>
                    <li>22. P.Gadang</>
                    <li>23. Bl.Bukik</>
                    <li>24. Pancuran Tinggi</>
                    <li>25. Mustika 1</>
                    <li>26. Mustika 2</>
                    <li>27. BA</>
                    <li>28. BB</>
                    <li>29. TT</>
                    <li>30. Batu Labi</>
                    <li>31. BGS</>
                    <li>32. Talaweh</>
                    <li>33. KTB</>
                    <li>34. LL/IBB</>
                    <li>35. Bt Nan Gadang</>
                    <li>36. Zipur</>
                    <li>37. Akasia</>
                    <li>38. Zamrud</>
                </ol>
               
            <div class="modal-footer">
              
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection

