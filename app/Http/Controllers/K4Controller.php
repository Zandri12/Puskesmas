<?php

namespace App\Http\Controllers;

use App\k4;
use DB;
use Illuminate\Http\Request;

class K4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function tambah(Request $request)
    {
        $data = $request->validate([
            'nama_nagari' => 'max:255',
            'nama_jorong' => 'max:255',
            'bulan' => 'max:255',
            'na_ibu'=>'max:255',
            'umur'=>'max:255',
            'alamat' => 'max:255',
            'na_suami'=>'max:255',
            'tglk4' => 'max:255',
            'masalah' => 'max:255',
           
            
        ]);
        
        
        if ($data) {

            k4::create([
                'nama_nagari' => $data['nama_nagari'],
                'nama_jorong' => $data['nama_jorong'],
                'bulan' => $data['bulan'],
                'na_ibu' => $data['na_ibu'],
                'umur' => $data['umur'],
                'alamat' => $data['alamat'],
                'na_suami' => $data['na_suami'],
                'tglk4' => $data['tglk4'],
                'masalah' => $data['masalah'],
                
                
               
            ]);
            return redirect('/laporan/lkg')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request,$id)
    {
        DB::table('k4s')->where('id',$request->id)->update([
            'nama_nagari' => $request->nama_nagari,
            'nama_jorong' => $request->nama_jorong,
            'bulan' => $request->bulan,
            'na_ibu' => $request->na_ibu,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'na_suami' => $request->na_suami,
            'tglk4' => $request->tglk4,
            'masalah' => $request->masalah
           
        ]);
            return redirect('/laporan/lkg')->with(['success' => 'Data Berhasil Diubah!!']);
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
     * @param  \App\k4  $k4
     * @return \Illuminate\Http\Response
     */
    public function show(k4 $k4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\k4  $k4
     * @return \Illuminate\Http\Response
     */
    public function edit(k4 $k4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\k4  $k4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, k4 $k4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\k4  $k4
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $data = k4::find($id);
        $data->delete();
        return redirect()->back()->with(['warning' => 'Data Berhasil Dihapus!!']);
    }
}
