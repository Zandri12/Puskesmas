<?php

namespace App\Http\Controllers;

use App\Data_induk;

use Illuminate\Http\Request;

class DataIndukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_induk_index()
    {
        $data = Data_induk::all();
        return view('Pengguna.data_induk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $data = $request->validate([
            'pangkat' => 'max:255',
            'golongan'=>'max:255 | required|unique:data_induks',
            
        ]);
        
        
        if ($data) {

            data_induk::create([
                'pangkat' => $data['pangkat'],
                'golongan' => $data['golongan'],
                
               
            ]);
            return redirect('/pengguna/data_induk')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
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
     * @param  \App\Data_induk  $data_induk
     * @return \Illuminate\Http\Response
     */
    public function show(Data_induk $data_induk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data_induk  $data_induk
     * @return \Illuminate\Http\Response
     */
    public function edit(Data_induk $data_induk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data_induk  $data_induk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data_induk $data_induk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data_induk  $data_induk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data_induk $data_induk)
    {
        //
    }
}
