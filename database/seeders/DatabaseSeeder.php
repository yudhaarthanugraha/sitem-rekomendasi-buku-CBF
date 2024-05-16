<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Panggil seeder lain di sini
        $this->call(SeederBook::class);
        $this->call(Seederkategori::class);
        $this->call(SeederUser::class);
        // Panggil seeder lain jika ada
    }
}
