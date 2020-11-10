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
        $data_induk = Data_induk::all();
        $provinces = DB::table("indoregion_provinces")->get();
        
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
       
        return view('Pengguna.index',compact('data','data_induk','provinces','regencies','districts','villages'));
        
    }
    public function GetSubCatAgainstMainCatEdit(Request $request){
        if($request->has('cat_id')){
            $parentId = $request->get('cat_id');
            $data = Category::where('parent_id',$parentId)->get();
            return ['success'=>true,'data'=>$data];
        }
    }


    public function tambah_pengguna(Request $request)
    {
        $data = $request->validate([
            'nama' => 'max:255',
            'tgl_lahir'=>'max:255',
            'alamat'=>'max:255',
            'role'=>'required',
            'pangkat'=> 'max:255',
            'golongan' => 'max:255',
            'email' => 'required|unique:users',
            
        ]);
        
        
        if ($data) {

            User::create([
                'nama' => $data['nama'],
                'tgl_lahir' => $data['tgl_lahir'],
                'alamat' => $data['alamat'],
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
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
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
