<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
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
        return view('Pengguna.index',compact('data'));
        
    }


    public function tambah_pengguna(Request $request)
    {
        $data = $request->validate([
            'nama' => 'max:255',
            'tgl_lahir'=>'max:255',
            'alamat'=>'max:255',
            'role'=>'required',
            'email' => 'required|unique:users',
            
        ]);
        
        
        if ($data) {

            User::create([
                'nama' => $data['nama'],
                'tgl_lahir' => $data['tgl_lahir'],
                'alamat' => $data['alamat'],
                'role' => $data['role'],
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
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'role' => $request->role
           
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
    public function destroy($id)
    {
        //
    }
}
