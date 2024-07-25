<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SocialController extends Controller
{


    public function index()
    {
        // Ensure that all the columns used in the view are selected
        $social = DB::select('
                SELECT social_media.social_id, social_media.social_name, social_media.social_link,
                 users.firstname
          
            FROM social_media
            INNER JOIN users ON social_media.social_id = users.id
        ');

        return view('dashboard.admin.socialmedia.index', compact('social'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.socialmedia.add', compact('users'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'id' => 'required|integer',
            'social_name' => 'required|min:3',
            'social_link' => 'required|url'
        ]);

        // Insert values ensuring they match the table structure
        DB::insert('
            INSERT INTO social_media (id, social_link, social_name)
            VALUES (?, ?, ?)
        ', [
            $req->input('id'),
            $req->input('social_link'),
            $req->input('social_name')
        ]);

        session()->flash('status', 'Record Inserted');
        return redirect('dashboard/admin/socialmedia');
    }

    public function edit($id)
    {
        $social = DB::select('SELECT * FROM social_media WHERE social_id = ?', [$id]);
        $social = $social[0];

        return view('dashboard.admin.socialmedia.edit', compact('social'));
    }

    public function update($id, Request $req)
    {
        DB::update('
            UPDATE social_media
            SET social_link = ?, social_name = ?
            WHERE social_id = ?
        ', [
            $req->input('social_link'),
            $req->input('social_name'),
            $id
        ]);

        session()->flash('status', 'Record Updated');
        return redirect('dashboard/admin/socialmedia');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM social_media WHERE social_id = ?', [$id]);

        session()->flash('status', 'Record Deleted');
        return redirect('dashboard/admin/socialmedia');
    }






}
