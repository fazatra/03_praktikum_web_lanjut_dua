<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(){
        
        return view('profile')
        //Farhan
            ->with('full_nameF', 'Muhammad Farhan Riza Putra')
            ->with('lahirF', 'Surabaya')
            ->with('nimF', '2141720197')
            ->with('absenF', '19')
            ->with('bioF', 'Every Day is Holiday')
        //Naresh
            ->with('full_nameN', 'Naresh Pratista')
            ->with('lahirN', 'Jakarta')
            ->with('nimN', '2141720057')
            ->with('absenN', '20')
            ->with('bioN', 'Kejar akhirat dunia kau dapat')
        //Khafabii
            ->with('full_nameK', 'Abdullah Khafabi')
            ->with('lahirK', 'Gresik')
            ->with('nimK', '2041720050')
            ->with('absenK', '2')
            ->with('bioK', 'Always Safety');

    }

}
