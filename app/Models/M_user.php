<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_user extends Model
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    public $timestamps = true;
    protected $fillable = [
        'username',
        'password',
        'role',
    ];
}
