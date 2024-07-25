<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function index()
    {
        $userprofile = DB::select('
            SELECT users.id,users.firstname,profile.profile_id,profile.profile_img,profile.banner_img
            FROM users_profile
            INNER JOIN users ON users_profile.user_id = users.id inner join
            profile on users_profile.profile_id=profile.profile_id
        ');

        return view('dashboard.admin.userprofile.index', compact('userprofile'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.userprofile.add',compact('users'));
    }

    public function store(Request $req)
    {
        $user_id = $req->input('user_id');
        $profile_id = $req->input('profile_id');

        DB::insert('INSERT INTO users_profile (user_id, profile_id) VALUES (?, ?)', [$user_id, $profile_id]);

        session()->flash('status', 'Record Inserted');

        return redirect('dashboard/admin/userprofile');
    }





}
