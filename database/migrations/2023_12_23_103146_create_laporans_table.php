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

        Schema::create('kategori_laporans', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
        });

        Schema::create('laporans', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('kategori_id')->constrained('kategori_laporans');
            $table->string('judul');
            $table->text('isi');
            $table->text('lampiran')->default(null)->nullable();
            $table->boolean('status')->default(false);
            $table->text('tanggapan')->nullable();
            $table->boolean('publish')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
