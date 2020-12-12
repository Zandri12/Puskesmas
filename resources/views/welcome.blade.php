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
    <link rel="icon"  sizes="16x16" href="{{ asset ('template/images/puskesmass.png')}}">
    <link href="{{ asset ('template/css/style.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <meta name="viewport" content="width=device-width,initial-scale=1">
                                    @php
                                    $title = App\Profile::first();
                                   
                                    @endphp
                                    @if ($title == null)
                                    <h4 class="text-center mb-4">Puskesmas</h4>
                                    <img src="{{ asset ('template/images/puskesmass.png')}}" alt="">
                                    <div align="center"><img  width="20%" height="20%" src="{{ asset ('template/images/puskesmass.png')}}" alt=""></div>
                                    @else
                                    <h4 class="text-center mb-4">{{$title->data_pengaturan}} </h4>
                                    <div align="center"><img  width="20%" height="20%" src="{{ asset ('template/images/puskesmass.png')}}" alt=""></div>
                                    @endif
                                  
                                    @if (Route::has('login'))
                                    
                                    @auth
									<div align="center">
                                        <a href="{{ url('/home') }}" style="color:purple;" >
                                            <i class="flaticon-user"></i>
                                            Beranda
                                        </a>
                                    </div>
                                    @else
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input id="myInput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <input type="checkbox"  onclick="myFunction()">  Perlihatkan Sandi
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                    
								 @endauth
                                  
                                @endif
                                    
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
    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>

</body>


<!-- Mirrored from mediqu.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 06:24:48 GMT -->
</html>