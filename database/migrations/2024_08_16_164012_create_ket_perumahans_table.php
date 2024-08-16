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
        Schema::create('ket_perumahans', function (Blueprint $table) {
            $table->id();
            $table->string('status_penugasan');
            $table->string('status_lahan');
            $table->string('luas_lantai');
            $table->string('jenis_lantai');
            $table->string('jenis_atap');
            $table->string('kondisi_atap');
            $table->string('jumlah_kamar');
            $table->string('peroleh_air');
            $table->string('sumber_penerangan');
            $table->string('watt_listrik');
            $table->string('bahan_energi'); // bahan bakar / energi
            $table->string('guna_wc');
            $table->string('jenis_wc');
            $table->string('akhir_wc');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_perumahans');
    }
};
