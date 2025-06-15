<?php

namespace App\Http\Controllers;

use App\Exports\ClientExport;
use Maatwebsite\Excel\Facades\Excel;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function export()
    {
        return Excel::download(new ClientExport, 'client.xlsx');
    }
}
