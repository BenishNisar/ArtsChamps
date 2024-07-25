<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendDashboardController extends Controller
{
    function dashboard(){
        return view('Home.dashboard');
    }
}
