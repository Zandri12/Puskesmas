<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class k4 extends Model
{
    protected $table = 'k4s';
    protected $fillable = [
        'nama_nagari','token','na_ibu','umur','alamat','na_suami',
        'tglk4','masalah'
    ];
}
