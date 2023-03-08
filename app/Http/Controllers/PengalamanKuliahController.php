<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanKuliahController extends Controller
{
    //
    public function pengalaman(){
        
        return view('pengalaman')
        //Farhan
            ->with('full_nameF', 'Muhammad Farhan Riza Putra')
            ->with('nameF', 'Farhan')
            ->with('pengalamanF', 'Lelah letih')
        //Naresh
            ->with('full_nameN', 'Naresh Pratista')
            ->with('nameN', 'Naresh')
            ->with('pengalamanN', 'Senang, Gembira, Sederhana')
        //Khafabi
            ->with('full_nameK', 'Abdullah Khafabi')
            ->with('nameK', 'Bibi')
            ->with('pengalamanK', 'Pusying...');
    }

}
