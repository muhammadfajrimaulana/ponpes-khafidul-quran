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
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
            $table->string('kode_santri')->unique(); // Untuk kartu santri
            $table->string('kode_sandi');            // Password untuk akses kartu
            $table->string('angkatan');              // Filter per angkatan
            $table->enum('status', ['aktif', 'alumni'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santris');
    }
};
