<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtPostController extends Controller
{
    public function index()
    {



            $posts = DB::select('select users.id, users.firstname, post.post_id, post.content, post.created_at, post.post_img from post inner join users on post.user_id = users.id');


        return view('dashboard.artist.post.index', compact('posts'));
    }
}
