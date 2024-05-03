<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_preferensi_buku extends Model
{
    use HasFactory;
    protected $table = 'tb_preferensi_buku';
    protected $primaryKey = 'id_pref';
    public $timestamps = true;
    protected $fillable = [
        'id_user',
        'gendre_preferensi',
        'kategori_preferensi',
        'penulis_preferensi',
    ];
}
