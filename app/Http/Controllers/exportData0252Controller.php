<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RakBukuExport0252;
use Illuminate\Http\Request;

class exportData0252Controller extends Controller
{
    public function export()
    {
        return Excel::download(new RakBukuExport0252, 'Data_1461900252.xlsx');
    }
}
