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
            'nama_bidan' => 'max:255',
            'jorong' => 'max:255',
            'nagari' => 'max:255',
            'nama_posyandu' => 'max:255',
            'kode' => 'max:255',
            'file'=> 'max:255',
            'jenis_file' => 'max:255',
            
        ]);
        if($request->file('file') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('file');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            // $kat = $file->getClientOriginalName();
            $kat = $file->getClientOriginalName();
            
            $sip = $request->jenis_file;
            $ng = $request->nagari;
            $jr = $request->jorong;
            $ok = $sip;
            $nagari = $ng;
            $jorong = $jr;
            $fileName =$kat.'-'.rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('file')->move("files/user/".'/'.$ok.'/'.$nagari.'/'.$jorong, $fileName);
            $gambar = $fileName;
        
        
        
        if ($data) {

            Laporan::create([
                'nama_bidan' => $data['nama_bidan'],
                'jorong' => $data['jorong'],
                'nagari' => $data['nagari'],
                'nama_posyandu' => $data['nama_posyandu'],
                'kode' => $data['kode'],
                'jenis_file' => $data['jenis_file'],
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
    public function download($jenis_file,$nagari,$jorong,$file)
    {
       return response()->download('files/user/'.$jenis_file.'/'.$nagari.'/'.$jorong.'/'.$file);
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
