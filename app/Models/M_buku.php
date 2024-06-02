<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class M_buku extends Model
{
    use HasFactory;
    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = true;

    protected $atributes = [
        'status_pinjaman' => 0,
    ];

    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'gendre',
        'sinopsis',
        'kategori',
        'kode_buku',
        'gambar',
        'status_pinjaman'
    ];

    public function kategoriRel(): BelongsTo
    {
        return $this->belongsTo(M_kategori::class, 'kategori');
    }

    // public function kategori(): HasOne
    // {
    //     return $this->hasOne(M_kategori::class, 'kategori');
    // }
}
