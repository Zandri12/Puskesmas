<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 06:24:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @php
    $title = App\Profile::first();
   
    @endphp
    @if ($title == null)
    <title>Puskesmas</title>
    @else
    <title>{{$title->data_pengaturan}} </title>
    @endif
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('template/images/favicon.png')}}">
    <link href="{{ asset ('template/css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
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
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Ganti Sandi</h4>
                                    <form method="POST" action="{{ route('ganti.sandi') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Sandi Saat Ini</strong></label>
                                            <input type="password"  placeholder="Sandi Saat Ini" id="password" name="current_password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Sandi Baru</strong></label>
                                            <input type="password" placeholder="Sandi Baru" name="new_password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Konfirmasi Sandi</strong></label>
                                            <input type="password" placeholder="Konfirasi Sandi Baru" name="new_confirm_password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Ubah Sandi</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <a class="text-primary" href="/home">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset ('template/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset ('template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset ('template/js/custom.min.js')}}"></script>
    <script src="{{ asset ('template/js/deznav-init.js')}}"></script>

</body>


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 06:24:48 GMT -->
</html>