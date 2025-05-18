<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
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
    public function store(ProfileRequest $request)
    {

        $data = $request->validated();

        $iscreate = Profile::create([
            'Nom' => $data['nom'],
            'Prenom' => $data['prenom'],
            'Email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($iscreate) {
            return to_route('T.profiles')->with('success', 'Profile created successfully');
        } else {
            return to_route('T.profiles')->with('error', 'Profile not created');
        }
    }
}
