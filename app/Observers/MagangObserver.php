<?php

namespace App\Observers;

use App\Models\Magang;
use App\Models\Divisi;

class MagangObserver
{
    /**
     * Handle the Magang "retrieved" event.
     */
    public function retrieved(Magang $magang)
    {
        // Pastikan magang sudah ada di database dan statusnya adalah "on going"
        if ($magang->exists && $magang->StatusMagang === 'on going' && $magang->TanggalBerakhirMagang < now()) {
            // Ubah status magang menjadi "completed"
            $magang->update(['StatusMagang' => 'completed']);

            // Kurangi KuotaTerisi untuk divisi yang bersangkutan
            $this->updateKuotaTerisi($magang);
        }
    }

    /**
     * Handle the Magang "updated" event.
     */
    public function updated(Magang $magang)
    {
        // Jika status magang diubah menjadi "on going"
        if ($magang->isDirty('StatusMagang') && $magang->StatusMagang === 'on going') {
            // Tambah KuotaTerisi untuk divisi yang bersangkutan
            $this->updateKuotaTerisi($magang);
        }

        // Jika status magang diubah menjadi "completed" atau "terminated"
        if ($magang->isDirty('StatusMagang') && in_array($magang->StatusMagang, ['completed', 'terminated'])) {
            // Kurangi KuotaTerisi untuk divisi yang bersangkutan
            $this->updateKuotaTerisi($magang);
        }

        // Jika tanggal berakhir magang diubah
        if ($magang->isDirty('TanggalBerakhirMagang')) {
            // Periksa apakah tanggal berakhir telah terlewati
            if ($magang->StatusMagang === 'on going' && $magang->TanggalBerakhirMagang < now()) {
                // Ubah status magang menjadi "completed"
                $magang->update(['StatusMagang' => 'completed']);

                // Kurangi KuotaTerisi untuk divisi yang bersangkutan
                $this->updateKuotaTerisi($magang);
            }
        }
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