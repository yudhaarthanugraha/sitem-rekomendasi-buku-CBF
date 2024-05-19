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
        $faker = Faker::create('id_ID');
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

        for ($i = 0; $i < 50; $i++) {
            $randomGenre = $faker->randomElement($genres);
            DB::table('tb_buku')->insert([
                'judul' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'penulis' => $faker->name,
                'kode_buku' => '0879689' . $i, // Menggunakan kode buku yang berbeda untuk setiap entri
                'status_pinjaman' => 0, // Status pinjam default 0
                'kategori' => $faker->word,
                'sinopsis' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'tahun_terbit' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gendre' => $randomGenre->nama, // Menggunakan genre yang dipilih secara acak
                'gambar' => $faker->imageUrl($width = 640, $height = 480, 'books'),
                'created_at' => now(),
            ]);
        }
        // for ($i = 1; $i <= 10; $i++) {
        //     $randomGenreIndex = array_rand($genres);
        //     $genre = $genres[$randomGenreIndex]->nama;

        //     // Simpan data buku beserta nama file gambar ke dalam database
        //     DB::table('tb_buku')->insert([
        //         'judul' => $faker->sentence,
        //         'penulis' => $faker->name,
        //         'sinopsis' => $faker->paragraph,
        //         'gendre' => $genre,
        //         'kategori' => $faker->word,
        //         'kode_buku' => '0879689' . $i,
        //         // 'gambar' => $filename,
        //         'status_pinjaman' => 0,
        //         'tahun_terbit' => $faker->dateTimeBetween('-20 years', 'now')->format('Y-m-d'),
        //         'created_at' => now(),
        //     ]);
        // }
    }
}
