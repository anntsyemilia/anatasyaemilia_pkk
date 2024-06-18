<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = "penduduks";

    protected $fillable = [
        'id',
        'nik',
        'nama',
        'alamat',
        'email',
        'telepon',
        'tanggal_lahir',
    ];
}
