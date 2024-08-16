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
        Schema::create('anggota_rumah_tanggas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('hubungan');
            $table->string('jkl');
            $table->string('umur');
            $table->string('status_kawin');
            $table->string('kepemilikan_akta');
            $table->string('kartu_identitas');
            $table->string('status_kehamilan')->nullable();
            $table->string('riwayat_penyakit');
            $table->string('partisipasi_sekolah')->nullable();
            $table->string('jenjang_pendidikan')->nullable(); // jika partisipasi sekolah = belum/masih sekolah
            $table->string('ijazah')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('kedudukan_pekerjaan')->nullable();
            $table->string('kepala_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_rumah_tanggas');
    }
};
