<?php

namespace Database\Seeders;

use App\Models\M_buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class SeederBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tb_buku')->insert([
                'judul' => 'Judul Buku ' . $i,
                'penulis' => 'Penulis ' . $i,
                'sinopsis' => 'Sinopsis buku ' . $i,
                'gendre' => 'Gendre ' . $i, 
                'kategori' => 'Kategori ' . $i,
                'tahun_terbit' => Carbon::now()->subYears(rand(1, 20))->format('Y-m-d'), // Format tahun-bulan-tanggal
                'created_at' => now(),
                // 'updated_at' => now(),
            ]);
        }
    }
    public function down()
    {
        // Hapus data  yang dimasukkan oleh seeder
        M_buku::truncate();
    }
}
