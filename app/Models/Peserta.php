<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'pesertas';
    protected $primaryKey = 'ID_Peserta';

    protected $fillable = [
        'NISN_NIM', 'Nama', 'Tingkat', 'Sekolah_Universitas',
        'Jenis_Kelamin', 'Alamat', 'Jurusan', 'Kelas_Semester',
        'NoHP', 'Email', 'Surat_Resmi_Sekolah'
    ];

    public function registrasi()
    {
        return $this->hasMany(Registrasi::class, 'ID_Peserta');
    }
}
