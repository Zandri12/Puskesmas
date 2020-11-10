<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email','role','alamat','password','tgl_lahir',
        'jenis_kelamin','tempat_lahir','nama_ibu_kandung','RT',
        'RW','nama_provinsi','nama_kabupaten','nama_kecamatan','nama_dusun','nama_desa',
        'kode_pos','agama','status_perkawinan','kewarganegaraan','NIP','no_hp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
