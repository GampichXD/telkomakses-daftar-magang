<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    /**
     * Nama tabel yang digunakan oleh model ini.
     *
     * @var string
     */
    protected $table = 'magangs';

        /**
     * Nama kolom primary key.
     *
     * @var string
     */
    protected $primaryKey = 'ID_Magang';
    /**
     * Kolom-kolom yang dapat diisi secara mass assignment.
     *
     * @var array
     */
    protected $fillable = [
        'ID_Peserta',
        'ID_Divisi',
        'TanggalMulaiMagang',
        'TanggalBerakhirMagang',
        'StatusMagang',
    ];

    /**
     * Relasi dengan model Peserta.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'ID_Peserta');
    }

    /**
     * Relasi dengan model Divisi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'ID_Divisi');
    }

    /**
     * Mutator untuk format tanggal mulai magang.
     *
     * @param string $value
     * @return void
     */
    public function setTanggalMulaiMagangAttribute($value)
    {
        $this->attributes['TanggalMulaiMagang'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Mutator untuk format tanggal berakhir magang.
     *
     * @param string $value
     * @return void
     */
    public function setTanggalBerakhirMagangAttribute($value)
    {
        $this->attributes['TanggalBerakhirMagang'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * Accessor untuk format tanggal mulai magang.
     *
     * @param string $value
     * @return string
     */
    public function getTanggalMulaiMagangAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    /**
     * Accessor untuk format tanggal berakhir magang.
     *
     * @param string $value
     * @return string
     */
    public function getTanggalBerakhirMagangAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}
