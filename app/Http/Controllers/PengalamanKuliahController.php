<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanKuliahController extends Controller
{
    //
    public function pengalaman(){
        
        return view('pengalaman')
            ->with('rfull_name', 'Muhammad Farhan Riza Putra')
            ->with('rname', 'Farhan')
            ->with('rpengalaman', '"Lelah letih"')

            ;
    }
}
