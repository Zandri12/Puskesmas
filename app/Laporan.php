<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';
    protected $fillable = [
        'jenis_file','kode','nama_bidan','jorong','nagari','file','nama_posyandu'
    ];
}
