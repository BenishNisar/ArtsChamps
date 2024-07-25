<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    function register(){

        return view('Home.register');

    }

    function registerstore(Request $req){

        $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required | date',
            'phone' => 'required',
            'gender' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
            'conpassword' => 'required | same:password',
        ]);

        // Db::select('select * from roles where role_name = ?',[]);

        Db::insert('insert into users(firstname,lastname,phone,dob,gender,role_id,email,password)
        values(?,?,?,?,?,?,?,?)',[$req->fname,$req->lname,$req->phone,$req->dob,$req->gender,4,
         $req->email,Hash::make($req->password)]);

         session()->flash('status','You are Registered !!');
        return redirect('/login');


    }

    function login(){

        return view('Home.login');

    }

    function loginstore(Request $req){

        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $req->only('email', 'password');

        $user = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(Auth::attempt($user)){

            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);

            return redirect('/');
        }

        session()->flash('status1','Incorrect Email & Password');

        return redirect('/login');
    }

    function logout(){

        Auth::logout();
        return redirect('/login');
    }

}
