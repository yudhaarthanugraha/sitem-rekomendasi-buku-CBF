<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pinjam_buku extends Model
{
    use HasFactory;
    protected $table = 'tb_buku_dipinjam';
    public $timestamps = false;
    protected $primaryKey = 'id_pinjam';
    protected $fillable = [
        'id_user',
        'id_buku',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];
}
