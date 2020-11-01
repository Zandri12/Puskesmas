@extends('layouts.default')

@section('content')
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Perbarui {{$data->nama_pengaturan}}</h4>
            </div>
            
            <div class="card-body">
                <form method="POST" action="/Pengaturan/profile/update/{{$data->id}}">
                    @csrf
                        <div class="form-group">
                            <label>Nama Pengaturan</label>
                            <input type="text" value="{{$data->nama_pengaturan}}" class="form-control input-rounded @error('nama_pengaturan') is-invalid @enderror" name="nama_pengaturan" placeholder="Nama Pengaturan">
                        
                                
                        </div>
                        <div class="form-group">
                            <label>Data Pengaturan</label>
                            <input type="text" value="{{$data->data_pengaturan}}" class="form-control input-rounded" name="data_pengaturan" placeholder="Data Pengaturan">
                        </div>
                        <div class="card-body">
                            <button type="submit"  class="btn btn-info">Simpan</button>
                            
                           <a href="{{route('profil')}}" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
@endsection