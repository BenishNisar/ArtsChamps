<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UseraboutController extends Controller
{

    public function index()
    {
        $user_about = DB::select('
            SELECT users.id,users.firstname,about.bio,about.country,about.art_style,about.join_date,
            about.work,about.photos,about.rating
         from user_about inner join users on users.id=user_about.user_id
inner join about on about.about_id=user_about.about_id

        ');

        return view('dashboard.admin.user_about.index', compact('user_about'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.user_about.add',compact('users'));
    }

    public function store(Request $req)
    {
        $user_id = $req->input('user_id');
        $about_id = $req->input('about_id');

        DB::insert('INSERT INTO user_about (user_id, about_id) VALUES (?, ?)', [$user_id, $about_id]);

        session()->flash('status', 'Record Inserted');

        return redirect('dashboard/admin/user_about');
    }

    function delete($id) {
        // Find related records and delete them
        DB::table('related_table')->where('user_about_id', $id)->delete();

        // Now delete the record from user_about
        DB::table('user_about')->where('id', $id)->delete();

        session()->flash('status', 'Record Deleted');
        return redirect('dashboard/admin/user_about');
    }



}
