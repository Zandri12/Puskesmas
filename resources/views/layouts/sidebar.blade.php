<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="" href="{{route('home')}}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Beranda</span>
                </a>
            </li>



            <li><a  href="javascript:void()" aria-expanded="false">
                <i></i>
                    <span class="nav-text"></span>
                </a>
               
            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings-3"></i>
                    <span class="nav-text">Pengaturan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('profil')}}">Profil Puskesmas</a></li>
                    
                </ul>
            </li>
            @if (Auth::user()->role == 1)
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-user-1"></i>
                <span class="nav-text">Pengguna</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('semua_pengguna')}}">Semua Pengguna</a></li>
                <li><a href="{{route('data_induk')}}">Data Induk</a></li>
                <li><a class="flaticon-381-lock-2" data-target="#info" data-toggle="modal" href="#"> Impor Data</a></li>
                <li><a class="flaticon-381-lock-2" data-target="#info" data-toggle="modal" href="#"> Ekspor Data</a></li>

            </ul>
        </li>
            @endif
           
            <li><a class="flaticon-381-lock-2" href="#" data-target="#info" data-toggle="modal" aria-expanded="false">
                <i  class="flaticon-381-user-9"></i>
                <span class="nav-text">Data Pasien</span>
            </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notebook-3"></i>
                    <span class="nav-text">Laporan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('semua_laporan')}}">Semua Laporan</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="#">Laporan LB1</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                           
                            <span class="nav-text">Laporan Kesga Gizi KB Imunisasi..</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('lkg')}}">Identitas K1 K4</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
          
            <li><a class="flaticon-381-lock-2" href="#" data-target="#info" data-toggle="modal" aria-expanded="false">
                <i class="flaticon-381-file-2"></i>
                <span class="nav-text">Pustu</span>
            </a>
            </li>
            <li><a href="{{route('ganti_sandi_index')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-key"></i>
                    <span class="nav-text">Atur Ulang Sandi</span>
                </a>
            </li>
            <li><a href="{{route('ganti_sandi_index')}}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-key"></i>
                <span class="nav-text">Ekspor Database</span>
            </a>
        </li>
        </ul>
    
       
        <div class="copyright">
            <p><strong>Puskesmas Bungo</strong> © 2020 All Rights Reserved</p>
            <p>Dibuat Oleh <a href="https://github.com/Zandri12">Syukriatul Zandri</a></p>
        </div>
    </div>
</div>
<div class="modal fade" id="info">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Hubungi Developer untuk membuka akses!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>