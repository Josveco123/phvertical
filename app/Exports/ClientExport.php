<?php

namespace App\Exports;

use App\Models\Visita;
use Illuminate\Contracts\View\view;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ClientExport implements FromView, ShouldAutoSize
{

    public function view(): view
    {
        return view('export.visitaExport', ['visitas'=> Visita::all()]);
    }
}
