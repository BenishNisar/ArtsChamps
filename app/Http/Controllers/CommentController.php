<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment=DB::select('select * from comment');
        return view('dashboard.admin.comment.index',compact('comment'));
    }
}
