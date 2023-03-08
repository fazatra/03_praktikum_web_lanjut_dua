<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(){
        
        return view('profile')
            ->with('rfull_name', 'Muhammad Farhan Riza Putra')
            ->with('rname', 'Farhan')
            ->with('rnim', '2141720197')
            ->with('rabsen', '19')
            ->with('rbio', 'Every Day is Holiday')
            ;
    }

}
