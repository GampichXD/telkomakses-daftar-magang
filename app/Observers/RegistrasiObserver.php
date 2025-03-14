<?php

namespace App\Observers;

use App\Models\Divisi;
use App\Models\Magang;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class RegistrasiObserver
{
    /**
     * Handle the Registrasi "updated" event.
     */
    public function updated(Registrasi $registrasi)
    {
        // Nonaktifkan logika ini karena sudah ditangani di controller
    }
    public function update(Request $request, $id)
{

}
}