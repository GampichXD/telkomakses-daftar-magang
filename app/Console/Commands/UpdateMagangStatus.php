<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Magang;
use App\Models\Divisi;

class UpdateMagangStatus extends Command
{
    /**
     * Nama dan signature command.
     *
     * @var string
     */
    protected $signature = 'magang:update-status';

    /**
     * Deskripsi command.
     *
     * @var string
     */
    protected $description = 'Perbarui status magang menjadi completed jika tanggal berakhir telah terlewati.';

    /**
     * Jalankan command.
     */
    public function handle()
    {
        // Ambil semua data magang dengan status "on going"
        $magangs = Magang::where('StatusMagang', 'on going')
                         ->where('TanggalBerakhirMagang', '<', now())
                         ->get();

        foreach ($magangs as $magang) {
            // Ubah status magang menjadi "completed"
            $magang->update(['StatusMagang' => 'completed']);

            // Perbarui KuotaTerisi untuk divisi yang bersangkutan
            $this->updateKuotaTerisi($magang);
        }

        $this->info('Status magang berhasil diperbarui.');
    }

    /**
     * Perbarui nilai KuotaTerisi di tabel Divisi.
     */
    private function updateKuotaTerisi(Magang $magang)
    {
        // Ambil ID_Divisi dari magang
        $divisiId = $magang->ID_Divisi;

        // Hitung jumlah peserta magang dengan status "on going" di divisi tersebut
        $kuotaTerisi = Magang::where('ID_Divisi', $divisiId)
                             ->where('StatusMagang', 'on going')
                             ->count();

        // Perbarui nilai KuotaTerisi di tabel Divisi
        Divisi::where('ID_Divisi', $divisiId)->update(['KuotaTerisi' => $kuotaTerisi]);
    }
}