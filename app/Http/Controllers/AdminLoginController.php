<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;



class AdminLoginController extends Controller
{

public function adminlogin(){

    return view('dashboard.admin.auth.adminlogin');
}


function adminloginstore(Request $req){

    $req->validate([
        'email' => 'required',
        'password' => 'required',
    ]);


    $credentials = $req->only('email', 'password');

    $user = [
        'email' => $req->email,
        'password' => $req->password,
    ];

    // Db::select('select ');

    if(Auth::attempt($user)){
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if($user->role_id==1){


            Auth::login($user);

            return redirect('/dashboard');
        }
        else{
            return redirect('/login');
        }
    }

    session()->flash('status1','Incorrect Email & Password');

    return redirect('/admin/login');
}

function logout(){

    Auth::logout();
    return redirect('/login');
}


}
