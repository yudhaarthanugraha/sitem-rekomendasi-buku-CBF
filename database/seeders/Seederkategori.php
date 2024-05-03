<?php

namespace Database\Seeders;

use App\Models\M_kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Seederkategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 4; $i++) {
            DB::table('tb_kategori')->insert([
                'kategori' => 'kategori' . $i,
                'deskripsi' => 'deskripsi ' . $i,
            ]);
        }
    }
    public function down()
    {
        // Hapus data  yang dimasukkan oleh seeder
        M_kategori::truncate();
    }
    
}
