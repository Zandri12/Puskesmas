<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class k1 extends Model
{
    protected $table = 'k1s';
    protected $fillable = [
        'nama_nagari','nama_jorong','bulan','token','na_ibu','umur','alamat','na_suami',
        'hamil_ke','usia_kehamilan','jr','DPT','HPHT'
    ];
}
