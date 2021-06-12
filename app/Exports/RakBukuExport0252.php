<?php

namespace App\Exports;

use App\Models\RakBukuModel252;
use Maatwebsite\Excel\Concerns\FromCollection;

class RakBukuExport0252 implements FromCollection
{
    public function collection()
    {
        return RakBukuModel252::select('*', 'rak_buku.id AS idRak', 'buku.id AS idBuku', 'jenis_buku.id AS idJenis')->join('buku', 'buku.id', 'rak_buku.id_buku')->join('jenis_buku', 'jenis_buku.id', 'rak_buku.id_jenis_buku')->get();
    }
}
