<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_buku extends Model
{
    use HasFactory;
    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = true;

    protected $fillable = [
        'judul',
        'penulis',
        'sinopsis',
        'kategori',
        'tahun_terbit',
        'gendre',
    ];
}
