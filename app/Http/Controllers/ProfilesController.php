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
        $profile = Profile::create([
            'Nom' => $request->nom,
            'Prenom' => $request->prenom,
            'Email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($profile) {
            return redirect()->route('T.profiles')->with('success', 'Profile ajouté avec succès');
        } else {
            return redirect()->route('T.profiles')->with('error', 'Une erreur est survenue, veuillez réessayer');
        }
    }
}
