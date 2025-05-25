<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function ShowUpdate(){
        return view('Update');
    }
}
