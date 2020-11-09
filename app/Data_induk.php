<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_induk extends Model
{
    protected $table = 'data_induks';
    protected $fillable = [
        'pangkat','golongan'
    ];
}
