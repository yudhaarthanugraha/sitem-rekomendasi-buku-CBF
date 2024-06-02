<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class M_kategori extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'kategori',
        'deskripsi',
    ];

    public function buku(): HasMany
    {
        return $this->hasMany(M_buku::class, 'kategori');
    }

    // public function bukuKategori(): BelongsTo
    // {
    //     return $this->belongsTo(M_buku::class, 'kategori');
    // }
}
