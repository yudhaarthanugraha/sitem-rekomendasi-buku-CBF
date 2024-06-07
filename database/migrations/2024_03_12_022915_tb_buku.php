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
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->id('id_buku')->unique();
            $table->string('judul');
            $table->string('penulis');
            $table->date('tahun_terbit');
            $table->string('gendre');
            $table->text('sinopsis');
            $table->string('kategori');
            $table->string('kode_buku');
            $table->string('gambar')->nullable();
            $table->boolean('status_pinjaman')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_buku');
    }
};
