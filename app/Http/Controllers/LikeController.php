<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(){
        $likes=DB::select('select * from likes');
        return view('dashboard.admin.like.index',compact('likes'));
    }



}
