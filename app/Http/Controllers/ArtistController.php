<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{
    public function artistlogin()
    {
        return view('dashboard.artist.artistauth.artistlogin');
    }

    public function artistloginstore(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');

        $user = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if (Auth::attempt($user)) {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            if ($user->role_id == 2) {
                Auth::login($user);
                return redirect()->intended('artistdashboard/');
            } else {
                return redirect('/artistlogin');
            }
        }

        session()->flash('status1', 'Incorrect Email & Password');
        return redirect('/artist/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/artist/login');
    }
    public function artistdashboard()
    {
        return view('dashboard.artist.artistdashboard');
    }

}
