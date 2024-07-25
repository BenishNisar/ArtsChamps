<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade

class AboutProfileController extends Controller
{
    public function index()
    {
        $aboutprofile = DB::select('
            SELECT
                profile.profile_id,
                profile.profile_img,
                profile.banner_img,
                about.about_id,
                about.bio,
                about.country,
                about.location
            FROM profile
            INNER JOIN aboutprofile ON profile.profile_id = aboutprofile.profile_id
            INNER JOIN about ON about.about_id = aboutprofile.about_id
        ');

        return view('dashboard.admin.aboutprofile.index', compact('aboutprofile'));
    }

    public function add()
    {
        return view('dashboard.admin.aboutprofile.add');
    }

    public function store(Request $req)
    {
        $profile_id = $req->input('profile_id');
        $about_id = $req->input('about_id');

        DB::insert('INSERT INTO profile_about (profile_id, about_id) VALUES (?, ?)', [$profile_id, $about_id]);

        session()->flash('status', 'Record Inserted');

        return redirect('dashboard/admin/aboutprofile');
    }
}
