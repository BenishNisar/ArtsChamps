<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = DB::select('select * from profile');
        return view('Dashboard.admin.profile.index', compact('profile'));
    }

    public function add()
    {
        return view('Dashboard.admin.profile.add');
    }

    public function store(Request $req)
    {

            $req->validate([
                'profile_img' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Adjust size and types as needed
                'banner_img' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Adjust size and types as needed
            ]);



        DB::insert('insert into profile (profile_img, banner_img) values (?, ?)', [$req->profile_img, $req->banner_img]);

        session()->flash('status', 'Record Inserted');

        return redirect('dashboard/admin/profile');
    }

    public function edit($id)
    {
        $profile = DB::select('select * from profile where profile_id = ?', [$id]);

        if (!$profile) {
            return redirect('dashboard/admin/profile')->with('error', 'Profile not found');
        }

        $profile = $profile[0];

        return view('Dashboard.admin.profile.edit', compact('profile'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'profile_img' => 'required|min:3',
            'banner_img' => 'required|min:3'
        ]);

        DB::update('update profile set profile_img = ?, banner_img = ? where profile_id = ?', [$req->profile_img, $req->banner_img, $id]);

        session()->flash('status', 'Record Updated');

        return redirect('dashboard/admin/profile');
    }

    public function delete($id)
    {
        DB::delete('delete from profile where profile_id = ?', [$id]);

        session()->flash('status', 'Record Deleted');

        return redirect('dashboard/admin/profile');
    }
}
