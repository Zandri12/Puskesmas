@extends('layouts.default')

@section('welcome')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data Induk</h4>
           
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pengguna</a></li>
        <li class="breadcrumb-item active"><a href="{{route('data_induk')}}">Data Induk</a></li>
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
            <h4 class="card-title">Data Induk</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Pangkat</th>
                            <th>Golongan</th>
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
                            <td>{{$data['pangkat']}}</td>
                            <td>{{$data['golongan']}}</td>
                           
                            <td>
                                <button type="button" class="mr-1 shadow btn btn-warning btn-xs sharp"
                                    data-toggle="modal" data-id="{{ $data['id'] }}"
                                    data-pangkat="{{$data['pangkat']}}"
                                    data-golongan="{{$data['golongan']}}" 
                                    data-target="#editModal"><i class="fa fa-pencil"></i></button>
                                <a href="/pengguna//data_induk/delete/{{$data['id']}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                               
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
                <form method="POST" action="{{route('tambah_data_induk')}}">
                    @csrf
                    <div class="form-group">
                       
                        <input type="text"
                            class="form-control input-rounded @error('pangkat') is-invalid @enderror"
                            name="pangkat" placeholder="Pangkat...">
                    </div>
                    <div class="form-group">
                       
                        <input type="text"
                            class="form-control input-rounded @error('golongan') is-invalid @enderror"
                            name="golongan" placeholder="Golongan...">
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
                <form method="POST" action="{{route('update_data_induk','data')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                       
                        <input type="text"
                            class="form-control input-rounded @error('pangkat') is-invalid @enderror"
                            name="pangkat" id="pangkat" placeholder="Pangkat...">
                    </div>
                    <div class="form-group">
                       
                        <input type="text"
                            class="form-control input-rounded @error('golongan') is-invalid @enderror"
                            name="golongan" id="golongan" placeholder="Golongan...">
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
                var pangkat = button.data('pangkat')
                var golongan = button.data('golongan')
                var modal = $(this)

                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #pangkat').val(pangkat);
                modal.find('.modal-body #golongan').val(golongan);
            })
        })
</script>

@endsection

