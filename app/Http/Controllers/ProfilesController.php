<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function TousLesProfiles()
    {
        $Profiles = Profile::paginate(5);
        return view('Tp', ['Profiles' => $Profiles]);
    }
    public function AfficherUnProfile($id)
    {
        $profile = Profile::FindorFail($id);
        return view('detaille', ['profile' => $profile]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:profiles',
            'password' => 'required',
        ]);
        $iscreate = Profile::create([
            'Nom' => $request->nom,
            'Prenom' => $request->prenom,
            'Email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($iscreate) {
            return to_route('T.profiles')->with('success', 'Profile created successfully');
        }else{
            return to_route('T.profiles')->with('error', 'Profile not created');
        }
    }
}
