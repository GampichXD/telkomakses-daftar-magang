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
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id('ID_Registrasi');; // Laravel otomatis buat kolom `id`
            $table->unsignedBigInteger('ID_Peserta'); 
            $table->unsignedBigInteger('ID_Divisi');

            // Pastikan foreign key refer ke `id`, bukan `ID_Peserta` atau `ID_Divisi`
            $table->foreign('ID_Peserta')->references('ID_Peserta')->on('pesertas')->onDelete('cascade');
            $table->foreign('ID_Divisi')->references('ID_Divisi')->on('divisis')->onDelete('cascade');

            $table->string('SuratPengajuan', 255)->nullable();
            $table->date('TanggalMulai');
            $table->date('TanggalBerakhir');
            $table->enum('StatusRegistrasi', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasis'); // Perbaiki nama tabel yang dihapus
    }
};
