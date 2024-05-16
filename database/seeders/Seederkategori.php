<?php

namespace Database\Seeders;

use App\Models\M_kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Seederkategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = [
            (object) ['name' => 'Sejarah'],
            (object) ['name' => 'Biografi'],
            (object) ['name' => 'Pendidikan'],
            (object) ['name' => 'Komedi'],
            (object) ['name' => 'Drama'],
            (object) ['name' => 'Sains'],
            (object) ['name' => 'Teknologi'],
            (object) ['name' => 'Seni & Budaya'],
            (object) ['name' => 'Bisnis & Keuangan'],
            (object) ['name' => 'Pengembangan Diri']
        ];
        foreach ($categories as $category) {
            DB::table('tb_kategori')->insert([
                'kategori' => $category->name,
                'deskripsi' => $faker->paragraph(),
            ]);
        }
    }
    public function down()
    {
        // Hapus data  yang dimasukkan oleh seeder
        M_kategori::truncate();
    }
}
