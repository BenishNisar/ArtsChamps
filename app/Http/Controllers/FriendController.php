<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index(){
        $friend=DB::select('select * from friends');
        return view('dashboard.admin.friend.index', compact('friend'));
    }
}
