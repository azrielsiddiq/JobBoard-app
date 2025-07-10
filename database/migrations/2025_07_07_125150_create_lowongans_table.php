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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->enum('tipe', ['Full-time', 'Part-time'])->index();
            $table->unsignedInteger('gaji');
            $table->enum('level', ['Intern', 'Junior', 'Mid', 'Senior'])->index();
            $table->text('kualifikasi');
            $table->text('tanggung_jawab');
            $table->boolean('status')->default(true);
            $table->date('tanggal_diposting');
            $table->date('tanggal_berakhir')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
