<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    // Tentukan nama primary key
    protected $primaryKey = 'ID_Divisi';

    // Tentukan tipe data primary key (jika bukan auto-increment integer)
    protected $keyType = 'integer'; // Ubah ke 'string' jika ID_Divisi bukan integer
    protected $fillable = [
        'Divisi',
        'Deskripsi',
        'Images',
        'TotalKuota',
        'KuotaTerisi',
    ];

    protected $appends = ['KuotaTersisa'];

    // Accessor untuk menghitung KuotaTersisa
    public function getKuotaTersisaAttribute()
    {
        return $this->TotalKuota - $this->KuotaTerisi;
    }
}