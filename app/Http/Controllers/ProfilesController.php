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
        $data['image'] = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;
        $iscreate = Profile::create([
            'Nom' => $data['nom'],
            'Prenom' => $data['prenom'],
            'Email' => $data['email'],
            'password' => bcrypt($data['password']),
            'image' => $data['image'],
        ]);

        if ($iscreate) {
            return to_route('T.profiles')->with('success', 'Profile created successfully');
        } else {
            return to_route('T.profiles')->with('error', 'Profile not created');
        }
    }
    public function Delete($id)
    {
        $profile = Profile::FindorFail($id);
        $profile->delete();
        return to_route('T.profiles')->with('success', 'Profile deleted successfully');
    }
}
