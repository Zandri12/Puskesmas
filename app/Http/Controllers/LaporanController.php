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
            
            'user_id' => 'max:255',
            'file'=> 'max:255',
            'kategori_id' => 'max:255',
            
        ]);
        if($request->file('file') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('file');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            // $kat = $file->getClientOriginalName();
            $kat = $file->getClientOriginalName();
            $kategori = $request->kategori_id;
            $ok = $kategori;

            $fileName =$ok.'-'.rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('file')->move("files/user/".$ok, $fileName);
            $gambar = $fileName;
        
        
        
        if ($data) {

            Laporan::create([
               
                'user_id' => $data['user_id'],
                'kategori_id' => $data['kategori_id'],
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
    public function store(Request $request)
    {
        //
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
    public function destroy(Laporan $laporan)
    {
        //
    }
}
