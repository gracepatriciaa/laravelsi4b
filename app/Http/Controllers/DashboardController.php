<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index () {
        $mahasiswaprodi = DB::select(" select prodis.nama, count(*) as jumlah 
            from mahasiswas 
            join prodis on mahasiswas.prodi_id = prodis.id 
            group by prodis.nama ");
        return view('dashboard')-> with('mahasiswaprodi', $mahasiswaprodi);
    }
}
