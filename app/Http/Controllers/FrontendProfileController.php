<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontendProfileController extends Controller
{
    function index(){

        $about = Db::select('select * from about where user_id = ?',[Auth()->user()->id]);

        $about= $about[0];

        return view('Home.profile',compact('about'));

}
public function showProfile()
{

    $userId = Auth::user()->id;


    $about = DB::select('SELECT * FROM about WHERE user_id = ?', [$userId]);


    if (!empty($about)) {
        $about = $about[0];
    } else {
      
        $about = null;
    }

    // Pass the 'about' data to the view
    return view('Home.profile', compact('about'));
}
}
