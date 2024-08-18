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
        Schema::create('kepala_rumahs', function (Blueprint $table) {
            $table->id();
            $table->string('kk');
            $table->string('nik');
            $table->string('nama');
            $table->string('jkl');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('pendidikan_terakhir');
            $table->string('pekerjaan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('penghasilan_perbulan');
            $table->string('riwayat_penyakit');
            $table->string('jenis_cacat');
            // $table->string('kabupaten');
            // $table->string('kecamatan');
            $table->integer('jumlah_art');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_rumahs');
    }
};
