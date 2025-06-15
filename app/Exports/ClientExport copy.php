<?php

namespace App\Exports;

use App\Models\Visita;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ClientExport implements FromCollection, ShouldAutoSize
{

    public function headings(): array
    {
        return ['Nombre', 'razon Social', 'WhatsApp', 'Ciudad', 'Fecha de Visita'];
    }

    public function collection()
    {
        return Visita::select('nombre', 'razon_social', 'whatsapp', 'ciudad', 'fecha_visita')->get();
    }
}
