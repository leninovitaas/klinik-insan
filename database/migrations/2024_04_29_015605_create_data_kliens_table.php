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
        Schema::create('data_kliens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_wali');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('paket');
            $table->string('jenis_kelamin');
            //Waktu Pembuatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kliens');
    }
};
