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
        Schema::create('penerima_p_k_h_s', function (Blueprint $table) {
            $table->id();
            $table->string('kepala_id');
            $table->string('perumahan_id');
            $table->string('aset_id');
            $table->enum('status', ['S', 'B'])->default('B');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_p_k_h_s');
    }
};
