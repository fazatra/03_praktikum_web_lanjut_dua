<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengalamanKuliah;

class PengalamanKuliahController extends Controller
{
    //
    public function pengalaman()
    {
        $datapengalaman1 = PengalamanKuliah::where('id', 1)->get();
        $datapengalaman2 = PengalamanKuliah::where('id', 2)->get();
        $datapengalaman3 = PengalamanKuliah::where('id', 3)->get();
        return view('pengalaman', compact('datapengalaman1', 'datapengalaman2', 'datapengalaman3'));
    }
}
