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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('no_telpon', 20);
            $table->string('nama_pb');
            $table->string('email');
            $table->string('nama');
            $table->date('tanggal');
            $table->boolean('status')->default(false);
            $table->foreignId('waktu_akhir_id')->constrained('waktu');
            $table->foreignId('waktu_awal_id')->constrained('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
