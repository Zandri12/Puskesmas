<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class k1 extends Model
{
    protected $table = 'k1s';
    protected $fillable = [
        'nama_nagari','token','na_ibu','umur','alamat','na_suami',
        'hamil_ke','usia_kehamilan','jr','DPT'
    ];
}
