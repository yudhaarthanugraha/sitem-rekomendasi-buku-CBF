<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;

class SeederBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $genres = [
            (object) ['nama' => 'Horor'],
            (object) ['nama' => 'Romance'],
            (object) ['nama' => 'Edukasi'],
            (object) ['nama' => 'Fantasi'],
            (object) ['nama' => 'Fiksi Ilmiah'],
            (object) ['nama' => 'Misteri'],
            (object) ['nama' => 'Sejarah'],
            (object) ['nama' => 'Biografi'],
            (object) ['nama' => 'Komedi'],
            (object) ['nama' => 'Drama'],
            // Tambahkan genre lainnya sesuai kebutuhan
        ];

        for ($i = 1; $i <= 10; $i++) {
            $randomGenreIndex = array_rand($genres);
            $genre = $genres[$randomGenreIndex]->nama;

            // Simpan data buku beserta nama file gambar ke dalam database
            DB::table('tb_buku')->insert([
                'judul' => $faker->sentence,
                'penulis' => $faker->name,
                'sinopsis' => $faker->paragraph,
                'gendre' => $genre,
                'kategori' => $faker->word,
                'kode_buku' => '0879689' . $i,
                // 'gambar' => $filename,
                'status_pinjaman' => 0,
                'tahun_terbit' => $faker->dateTimeBetween('-20 years', 'now')->format('Y-m-d'),
                'created_at' => now(),
            ]);
        }
    }
}
