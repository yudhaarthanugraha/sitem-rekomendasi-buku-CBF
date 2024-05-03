<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('tb_buku_dipinjam', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('id_user')->unique();
            $table->string('id_buku');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_buku_dipinjam');
    }
};
