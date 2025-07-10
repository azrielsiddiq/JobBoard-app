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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('nomor_telepon');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('status_perkawinan', ['Belum Menikah', 'Menikah']);
            $table->string('pendidikan_terakhir');
            $table->text('pengalaman_kerja');
            $table->string('cv');
            $table->string('portfolio')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
