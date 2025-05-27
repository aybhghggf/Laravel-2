<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function Profile(){
        return view('profile');
    }
    public function show(){
        return view('Login');
    }
    public function login( Request $request){
        $data= $request->post();
        $info= [
            'email' => $data['email'],
            'password' => $data['password'],
        ];
        $autentification= Auth::attempt( $info );
        if( $autentification ){
            $request->session()->regenerate();
            return redirect()->route('T.profiles')->with( 'success', 'Vouz avez bien vous connecter' );
        }else{
            return redirect()->back()->with( 'error', 'Vouz avez mal connecter' );
        }
    }
    public function Logout(){
        Session::flush() ;
        Auth::logout();
        return redirect()->route('Login')->with( 'success', 'Vouz avez bien vous deconnecter' );
    }
    public function ShowUpdate($id){
        $profile=Profile::findOrFail( $id );
        return view('Update',compact( 'profile' ));
    }

public function Update(Request $req, Profile $profile)
{
    $data = $req->post();

    $updatedata = [
        'Nom' => $data['nom'],
        'Prenom' => $data['prenom'],
        'Email' => $data['email'],
        'password' => Hash::make($data['password']),
    ];

    $profile->fill($updatedata)->save();

    return redirect()
        ->route('T.profiles')
        ->with('success', 'Vous avez bien modifié votre profil');
}

}
