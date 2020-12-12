<?php

namespace App\Http\Controllers;

use App\k1;
use App\k4;
use DB;
use Illuminate\Http\Request;

class K1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = k1::all();
        $datas = k4::all();
        return view('Laporan.LKG.k1k4',compact('data','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'hamil_ke' => 'max:255',
            'HPHT' => 'max:255',
            'usia_kehamilan'=>'max:255',
            'jr' => 'max:255',
            'DPT'=>'max:255',
            
        ]);
        
        
        if ($data) {

            k1::create([
                'nama_nagari' => $data['nama_nagari'],
                'nama_jorong' => $data['nama_jorong'],
                'bulan' => $data['bulan'],
                'na_ibu' => $data['na_ibu'],
                'umur' => $data['umur'],
                'alamat' => $data['alamat'],
                'na_suami' => $data['na_suami'],
                'hamil_ke' => $data['hamil_ke'],
                'HPHT' => $data['HPHT'],
                'usia_kehamilan' => $data['usia_kehamilan'],
                'jr' => $data['jr'],
                'DPT' => $data['DPT'],
                
               
            ]);
            return redirect('/laporan/lkg')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request,$id)
    {
        DB::table('k1s')->where('id',$request->id)->update([
            'nama_nagari' => $request->nama_nagari,
            'nama_jorong' => $request->nama_jorong,
            'bulan' => $request->bulan,
            'na_ibu' => $request->na_ibu,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'na_suami' => $request->na_suami,
            'hamil_ke' => $request->hamil_ke,
            'HPHT' => $request->HPHT,
            'usia_kehamilan' => $request->usia_kehamilan,
            'jr' => $request->jr,
            'DPT' => $request->DPT
           
        ]);
            return redirect('/laporan/lkg')->with(['success' => 'Data Berhasil Diubah!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\k1  $k1
     * @return \Illuminate\Http\Response
     */
    public function show(k1 $k1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\k1  $k1
     * @return \Illuminate\Http\Response
     */
    public function edit(k1 $k1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\k1  $k1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, k1 $k1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\k1  $k1
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $data = k1::find($id);
        $data->delete();
        return redirect()->back()->with(['warning' => 'Data Berhasil Dihapus!!']);
    }
}
