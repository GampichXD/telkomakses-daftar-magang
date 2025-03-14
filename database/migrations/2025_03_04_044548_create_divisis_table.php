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
        Schema::create('divisis', function (Blueprint $table) {
            $table->bigIncrements('ID_Divisi');
            $table->string('Divisi', 255);
            $table->text('Deskripsi')->nullable();
            $table->string('Images',255);
            $table->integer('TotalKuota');
            $table->integer('KuotaTerisi')->default(0);
            $table->integer('KuotaTersisa')->storedAs('TotalKuota - KuotaTerisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisis');
    }
};
