<?php

namespace App\Http\Controllers;

use App\Profile;
use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::all()->toArray();
        return view('profile.index',compact('data'));
       
    }
    // public function conf()
    // {
    //     $title = Profile::where('id',1)->first();
    //     return view('layouts.default',compact('title'));
    // }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambah_profile(Request $request)
    {
        $data = $request->validate([
            'nama_pengaturan' => 'required|unique:profiles',
            'data_pengaturan' => 'required',
        ]);
        
        
        if ($data) {

            Profile::create([
                'nama_pengaturan' => $data['nama_pengaturan'],
                'data_pengaturan' => $data['data_pengaturan'],
            ]);
            return redirect('/Pengaturan/profile');
        }
    }

    // public function edit_profile($id)
    // {
    //     $data = Profile::findOrfail($id);
    //     return view('profile.edit',compact('data'));
    // }
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request, $id)
    {
       
        DB::table('profiles')->where('id',$request->id)->update([
            'nama_pengaturan' => $request->nama_pengaturan,
            'data_pengaturan' => $request->data_pengaturan
           
        ]);
            return redirect('/Pengaturan/profile');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function delete_profile($id)
    {
        $data = Profile::find($id);
        $data->delete();
        return redirect()->back();
    }
}
