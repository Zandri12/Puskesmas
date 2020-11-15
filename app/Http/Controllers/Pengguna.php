<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Data_induk;
use DB;
use Carbon\Carbon;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Pengguna extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function semua_pengguna()
    {
        $data = User::all();
        $data_induk = Data_induk::all();
        $data_induk2 = Data_induk::all();
       
       
       
        return view('Pengguna.index',compact('data','data_induk','data_induk2'));
        
    }
    public function data_lengkap($id)
    {
        $data = User::find($id);
        return view('Pengguna.tab',compact('data'));  
    }


    public function tambah_pengguna(Request $request)
    {
        $data = $request->validate([
            'nama' => 'max:255',
            'jenis_kelamin'=>'max:255',
            'tempat_lahir'=>'max:255',
            'nama_ibu_kandung'=>'max:255',
            'tgl_lahir'=>'max:255',
            'alamat'=>'max:255',
            'rukun_tetangga'=>'max:255',
            'rukun_warga'=>'max:255',
            'nama_provinsi'=>'max:255',
            'nama_kabupaten'=>'max:255',
            'nama_kecamatan'=>'max:255',
            'nama_dusun'=>'max:255',
            'nama_desa'=>'max:255',
            'kode_pos'=>'max:255',
            'agama'=>'max:255',
            'status_perkawinan'=>'max:255',
            'kewarganegaraan'=>'max:255',
            'nomor_induk_pegawai'=>'max:255',
            'nomor_sk'=>'max:255',
            'tanggal'=>'max:255',
            'mengangkat'=>'max:255',
            'tmt_jabatan'=>'max:255',
            'tmt_sk_pangkat'=>'max:255',
            'jabatan'=>'max:255',
            'diklat_kepemimpinan'=>'max:255',
            'asal_slta'=>'max:255',
            'jurusan_slta'=>'max:255',
            'tanggal_tamat_slta'=>'max:255',
            'universitas'=>'max:255',
            'jurusan_universitas'=>'max:255',
            'tanggal_tamat_universitas'=>'max:255',
            'no_hp'=>'max:255',
            'role'=>'required',
            'pangkat'=>'max:255',
            'golongan' => 'max:255',
            'image'=> 'max:255',
            'email' => 'required|unique:users',
            
        ]);
        if($request->file('image') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $gambar = $fileName;
        
        
        
        if ($data) {

            User::create([
                'nama' => $data['nama'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'tempat_lahir' => $data['tempat_lahir'],
                'tgl_lahir' => $data['tgl_lahir'],
                'nama_ibu_kandung' => $data['nama_ibu_kandung'],
                'alamat' => $data['alamat'],
                'rukun_tetangga' => $data['rukun_tetangga'],
                'rukun_warga' => $data['rukun_warga'],
                'nama_provinsi' => $data['nama_provinsi'],
                'nama_kabupaten' => $data['nama_kabupaten'],
                'nama_kecamatan' => $data['nama_kecamatan'],
                'nama_dusun' => $data['nama_dusun'],
                'nama_desa' => $data['nama_desa'],
                'kode_pos' => $data['kode_pos'],
                'agama' => $data['agama'],
                'status_perkawinan' => $data['status_perkawinan'],
                'kewarganegaraan' => $data['kewarganegaraan'],
                'nomor_induk_pegawai' => $data['nomor_induk_pegawai'],
                'nomor_sk' => $data['nomor_sk'],
                'tanggal' => $data['tanggal'],
                'mengangkat' => $data['mengangkat'],
                'tmt_jabatan' => $data['tmt_jabatan'],
                'tmt_sk_pangkat' => $data['tmt_sk_pangkat'],
                'jabatan' => $data['jabatan'],
                'diklat_kepemimpinan' => $data['diklat_kepemimpinan'],
                'asal_slta' => $data['asal_slta'],
                'jurusan_slta' => $data['jurusan_slta'],
                'tanggal_tamat_slta' => $data['tanggal_tamat_slta'],
                'universitas' => $data['universitas'],
                'jurusan_universitas' => $data['jurusan_universitas'],
                'tanggal_tamat_universitas' => $data['tanggal_tamat_universitas'],
                'no_hp' => $data['no_hp'],
                'role' => $data['role'],
                'pangkat' => $data['pangkat'],
                'golongan' => $data['golongan'],
                'email' => $data['email'],
                'image' => $gambar,
                $password = '12312312',
                'password' => Hash::make($password)
               
            ]);
        }
            return redirect('/pengguna')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
    }

    public function update_pengguna(Request $request,$id)
    {
        
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('image')->move("images/user", $fileName);
            $gambar = $fileName;
        
        
        DB::table('users')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'alamat' => $request->alamat,
            'rukun_tetangga' => $request->rukun_tetangga,
            'rukun_warga' => $request->rukun_warga,
            'nama_provinsi' => $request->nama_provinsi,
            'nama_kabupaten' => $request->nama_kabupaten,
            'nama_kecamatan' => $request->nama_kecamatan,
            'nama_dusun' => $request->nama_dusun,
            'nama_desa' => $request->nama_desa,
            'kode_pos' => $request->kode_pos,
            'agama' => $request->agama,
            'status_perkawinan' => $request->status_perkawinan,
            'kewarganegaraan' => $request->kewarganegaraan,
            'nomor_induk_pegawai' => $request->nomor_induk_pegawai,
            'nomor_sk' => $request->nomor_sk,
            'tanggal' => $request->tanggal,
            'mengangkat' => $request->mengangkat,
            'tmt_jabatan' => $request->tmt_jabatan,
            'tmt_sk_pangkat' => $request->tmt_sk_pangkat,
            'jabatan' => $request->jabatan,
            'diklat_kepemimpinan' => $request->diklat_kepemimpinan,
            'asal_slta' => $request->asal_slta,
            'jurusan_slta' => $request->jurusan_slta,
            'tanggal_tamat_slta' => $request->tanggal_tamat_slta,
            'universitas' => $request->universitas,
            'jurusan_universitas' => $request->jurusan_universitas,
            'tanggal_tamat_universitas' => $request->tanggal_tamat_universitas,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'role' => $request->role,
            'pangkat' => $request->pangkat,
            'image' => $gambar,
            'golongan' => $request->golongan

           
        ]);
            return redirect('/pengguna')->with(['success' => 'Data Berhasil Diubah!!']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_pengguna($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with(['warning' => 'Data Berhasil Dihapus!!']);
    }
}
