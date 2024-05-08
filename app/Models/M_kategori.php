<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_kategori extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'kategori',
        'deskripsi',
    ];
}
