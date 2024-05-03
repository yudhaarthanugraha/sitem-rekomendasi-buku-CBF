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
        Schema::create('tb_preferensi_buku', function (Blueprint $table) {
            $table->id('id_pref')->unique();
            $table->integer('id_user');
            $table->string('gendre_preferensi');
            $table->string('kategori_preferensi');
            $table->string('penulis_preferensi');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_preferensi_buku');
    }
};
