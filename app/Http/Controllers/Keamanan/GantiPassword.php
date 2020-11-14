<?php

namespace App\Http\Controllers\Keamanan;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Controllers\Controller;

class GantiPassword extends Controller
{
    public function index()
    {
        return view('Password.ganti_password');
    }
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->back()->with(['success' => 'Data Berhasil Diperbarui!!']);
    }

}
