<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'registrasis';
    protected $primaryKey = 'ID_Registrasi';

    protected $fillable = [
        'ID_Peserta',
        'ID_Divisi',
        'SuratPengajuan',
        'TanggalMulai',
        'TanggalBerakhir',
        'StatusRegistrasi',
    ];

// Registrasi.php
public function peserta()
{
    return $this->belongsTo(Peserta::class, 'ID_Peserta');
}

public function divisi()
{
    return $this->belongsTo(Divisi::class, 'ID_Divisi');
}
}
