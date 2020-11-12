<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Data_induk;
use DB;
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
        $data_induk = DB::table('data_induks')->first();
       
       
        return view('Pengguna.index',compact('data','data_induk'));
        
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
            'no_hp'=>'max:255',
            'role'=>'required',
            'pangkat'=> 'max:255',
            'golongan' => 'max:255',
            'email' => 'required|unique:users',
            
        ]);
        
        
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
                'no_hp' => $data['no_hp'],
                'role' => $data['role'],
                'pangkat' => $data['pangkat'],
                'golongan' => $data['golongan'],
                'email' => $data['email'],
                $password = '12312312',
                'password' => Hash::make($password)
               
            ]);
            return redirect('/pengguna')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
    }

    public function update_pengguna(Request $request,$id)
    {
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
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'role' => $request->role,
            'pangkat' => $request->pangkat,
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
