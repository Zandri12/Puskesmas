<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::all();
        return view('Laporan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
       
        $data = $request->validate([
            
            'kode' => 'max:255',
            'file'=> 'max:255',
            'nama_file' => 'max:255',
            
        ]);
        if($request->file('file') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('file');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            // $kat = $file->getClientOriginalName();
            $kat = $file->getClientOriginalName();
            $kategori = $request->kode;
            $ok = $kategori;
            $fileName =$kat.'-'.rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('file')->move("files/user/".$ok, $fileName);
            $gambar = $fileName;
        
        
        
        if ($data) {

            Laporan::create([
               
                'kode' => $data['kode'],
                'nama_file' => $data['nama_file'],
                'file' => $gambar,
              
               
            ]);
        }
            return redirect('/laporan')->with(['success' => 'Data Berhasil Disimpan!!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function download($kode,$file)
    {
       return response()->download('files/user/'.$kode.'/'.$file);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Laporan::find($id);
        $data->delete();
        return redirect()->back()->with(['warning' => 'Data Berhasil Dihapus!!']);
    }
}
