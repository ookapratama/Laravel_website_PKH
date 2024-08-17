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
        Schema::create('ket_asets', function (Blueprint $table) {
            $table->id();
            $table->string('have_lemari_es');
            $table->string('have_tv');
            $table->string('have_sepeda');
            $table->string('have_motor');
            $table->string('luas_lahan');
            $table->string('have_ternak');
            $table->string('jumlah_ternak');
            $table->string('have_usaha');
            $table->string('penghasilan_bulanan');
            $table->string('kepala_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_asets');
    }
};
