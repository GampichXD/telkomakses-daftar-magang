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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->bigIncrements('ID_Peserta');
            $table->string('NISN_NIM', 20)->unique();
            $table->string('Nama', 255);
            $table->enum('Tingkat', ['siswa', 'mahasiswa']);
            $table->string('Sekolah_Universitas', 255);
            $table->enum('Jenis_Kelamin', ['laki-laki', 'perempuan']);
            $table->text('Alamat');
            $table->string('Jurusan', 255)->nullable();
            $table->string('Kelas_Semester', 50)->nullable();
            $table->string('NoHP', 15)->nullable();
            $table->string('Email', 255)->nullable()->unique();
            $table->string('Surat_Resmi_Sekolah', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
