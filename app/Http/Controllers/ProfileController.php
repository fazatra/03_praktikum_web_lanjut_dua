<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function profile(){

            $profile1 = Profile::where('id', 7)->get();
            $profile2 = Profile::where('id', 8)->get();
            $profile3 = Profile::where('id', 9)->get();
        return view('profile', compact('profile1', 'profile2', 'profile3'));

    }

}
