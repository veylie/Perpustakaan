<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id_lokasi',
        'id_kategori',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_penerbit',
        'keterangan',
        'stock',
    ];

    public function lokasi()
    {
        return $this->belongsTo(location::class, 'id_lokasi', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Category::class, 'id_kategori', 'id');
    }
}
