<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    protected $fillable = [
        'nomor_anggota',
        'nik',
        'nama_anggota',
        'no_hp',
        'email'
    ];
}
