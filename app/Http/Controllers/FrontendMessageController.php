<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontendMessageController extends Controller
{

    public function index()
    {


        $messages=DB::select('select * from message where active = ?', [Auth()->user()->id]);
        $messages= $messages[0];
 return view('Home.messages',compact('messages'));
    }

}
