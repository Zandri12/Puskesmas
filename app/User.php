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
        'jenis_kelamin','tempat_lahir','nama_ibu_kandung','rukun_tetangga',
        'rukun_warga','nama_provinsi','nama_kabupaten','nama_kecamatan','nama_dusun','nama_desa',
        'kode_pos','agama','status_perkawinan','kewarganegaraan','nomor_induk_pegawai','nomor_sk',
        'no_hp','tanggal','mengangkat','tmt_jabatan','tmt_sk_pangkat','jabatan','diklat_kepemimpinan','asal_slta','jurusan_slta',
        'tanggal_tamat_slta','universitas','jurusan_universitas','tanggal_tamat_universitas','pangkat',
        'golongan','image'
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
