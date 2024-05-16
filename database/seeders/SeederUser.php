<?php

namespace Database\Seeders;

use App\Models\M_user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        // User admin
        DB::table('tb_user')->insert([
            'username' => 'admin',
            'password' => Hash::make('123'), // default sandi "123"
            'role' => 'admin',
            'created_at' => now(),
        ]);

        // User siswa
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tb_user')->insert([
                'username' => $faker->userName, // Menggunakan Faker untuk nama pengguna acak
                'password' => Hash::make('123'), // Sandi default yang di-hash
                'role' => 'siswa',
                'created_at' => now(),
            ]);
        }
    }
    public function down()
    {
        // Hapus data  yang dimasukkan oleh seeder
        M_user::truncate();
    }
}
