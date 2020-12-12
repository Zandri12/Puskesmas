<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 06:24:03 GMT -->
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
    
    <!-- Favicon icon -->
	<link rel="icon"  sizes="16x16" href="{{ asset ('template/images/puskesmass.png')}}">
	<link rel="stylesheet" href="{{ asset ('template/vendor/toastr/css/toastr.min.css')}}">
    <link href="{{ asset ('template/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet')}}">
	<link rel="stylesheet" href="{{ asset ('template/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{ asset ('template/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('template/css/style.css')}}" rel="stylesheet">
    <script src="{{ asset ('template/ajax/jquery-3.4.1.js')}}"></script>
    


	 <!-- Datatable -->
	 <link href="{{ asset ('template/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	{{-- <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet"> --}}


</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/home" class="brand-logo">
                <img class="logo-abbr" src="{{ asset ('template/images/puskesmass.png')}}" alt="">
                {{-- <img class="logo-compact" src="{{ asset ('template/images/logo-text.png')}}" alt="">
				<img class="brand-title" src="{{ asset ('template/images/logo-text.png')}}" alt=""> --}}
				<h2 class="logo-compact">Administrator</h2>
				<h2 class="brand-title">Administrator</h2>
				
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        @include('layouts.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
            @include('layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				@yield('welcome')
               @yield('content')
               <!--Div where the WhatsApp will be rendered-->  
             
            </div>
        </div>
        @include('layouts.wa')
        
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset ('template/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset ('template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset ('template/js/custom.min.js')}}"></script>
	<script src="{{ asset ('template/js/deznav-init.js')}}"></script>
    <!-- Apex Chart -->
    <script type="text/javascript" src="{{ asset ('wa/floating-wpp.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset ('wa/floating-wpp.min.css')}}">
	<script src="{{ asset ('template/vendor/apexchart/apexchart.js')}}"></script>
	
	
	<!-- Dashboard 1 -->
	<script src="{{ asset ('template/js/dashboard/dashboard-1.js')}}"></script>
	 <!-- Datatable -->
	 <script src="{{ asset ('template/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	 <script src="{{ asset ('template/js/plugins-init/datatables.init.js')}}"></script>
	 <!-- Toastr -->
	 <script src="{{ asset ('template/vendor/toastr/js/toastr.min.js')}}"></script>

	 <!-- All init script -->
	 <script src="{{ asset ('template/js/plugins-init/toastr-init.js')}}"></script>
		<script type="text/javascript">
			
			var timeDisplay = document.getElementById("time");


			function refreshTime() {
			var dateString = new Date().toLocaleString("in-Asia", {timeZone: "Asia/Jakarta"});
			var formattedString = dateString.replace(", ", " - ");
			timeDisplay.innerHTML = formattedString;
			}

			setInterval(refreshTime, 1000);
		</script>
	 <script type="text/javascript">
      $('#myDiv').floatingWhatsApp({
    phone: '+6282268916913',
    popupMessage: 'Hello, Ada yang bisa saya bantu?',
    position:'right',
    showPopup: true,
    showOnIE: false,
    headerTitle: 'selamat datang!',
    
});
      </script>

</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 06:24:32 GMT -->
</html>