<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $mahasiswaprodi = DB::select("SELECT rutes.nama, COUNT(*) as jumblah 
        //     FROM pemesanans
        //     JOIN prodis on mahasiswas.prodi_id = prodis.id
        //     GROUP BY prodis.nama ");
        return view('dashboard');
    }
}
