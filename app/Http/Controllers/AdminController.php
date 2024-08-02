<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch data from the database
        $users = DB::select('select * from users');
        $posts = DB::select('select * from post'); // Ensure table name is correct
        $roles = DB::select('select * from roles');
        $about = DB::select('select * from about');
        $profile = DB::select('select * from profile');
        $gallery = DB::select('select * from gallery');

        // Return the view with data
        return view('Dashboard.admin.dashboard', compact('users', 'posts', 'roles','about','profile','gallery'));
    }
}
