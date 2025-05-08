<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    public function TousLesProfiles()
    {
        $Profiles= Profile::all();
        return view('Tp',['Profiles'=>$Profiles]);
    }
}
