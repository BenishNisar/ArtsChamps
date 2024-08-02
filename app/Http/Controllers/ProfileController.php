<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $profile = DB::select('SELECT users.id, users.firstname,
            profile.profile_id, profile.profile_img, profile.banner_img, profile.user_id
            FROM profile
            INNER JOIN users ON users.id = profile.user_id');
        return view('Dashboard.admin.profile.index', compact('profile'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.profile.add', compact('users'));
    }
    public function store(Request $req)
    {
        // Validate the input
        $req->validate([
            'profile_img' => 'required|image',
            'banner_img' => 'required|image',
            'user_id' => 'required|exists:users,id'
        ]);


        $img = $req->file('profile_img');
        $imageName = time(). $img->getClientOriginalName();
        $img->move('profile_images/',$imageName);
        $profileimgpath = "profile_images/".$imageName;

        $img = $req->file('banner_img');
        $imageName = time(). $img->getClientOriginalName();
        $img->move('banner_images/',$imageName);
        $bannerimgpath = "banner_images/".$imageName;

        
        // Insert into the database
        DB::insert('INSERT INTO profile (profile_img, banner_img, user_id) VALUES (?, ?, ?)', [
            $profileimgpath,
            $bannerimgpath,
            $req->user_id
        ]);

        // Flash message to session
        session()->flash('status', 'Record Inserted');

        // Redirect to another route
        return redirect('dashboard/admin/profile');
    }


    public function edit($id)
    {
        $profile = DB::select('SELECT * FROM profile WHERE profile_id = ?', [$id]);

        if (!$profile) {
            return redirect('dashboard/admin/profile')->with('error', 'Profile not found');
        }

        $profile = $profile[0];

        return view('Dashboard.admin.profile.edit', compact('profile'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'profile_img' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'banner_img' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profile = DB::select('SELECT * FROM profile WHERE profile_id = ?', [$id]);
        $profile = $profile[0] ?? null;

        if (!$profile) {
            return redirect('dashboard/admin/profile')->with('error', 'Profile not found');
        }

        $profileImgPath = $profile->profile_img;
        $bannerImgPath = $profile->banner_img;

        if ($req->hasFile('profile_img')) {
            $profileImgPath = $req->file('profile_img')->store('public/profile');
        }

        if ($req->hasFile('banner_img')) {
            $bannerImgPath = $req->file('banner_img')->store('public/profile');
        }

        DB::update('UPDATE profile SET profile_img = ?, banner_img = ? WHERE profile_id = ?', [
            $profileImgPath,
            $bannerImgPath,
            $id
        ]);

        session()->flash('status', 'Record Updated');
        return redirect('dashboard/admin/profile');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM profile WHERE profile_id = ?', [$id]);

        session()->flash('status', 'Record Deleted');
        return redirect('dashboard/admin/profile');
    }
}
