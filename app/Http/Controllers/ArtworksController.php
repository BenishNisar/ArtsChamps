<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtworksController extends Controller
{
    public function index()
    {
        $artworks = DB::table('artwork')
            ->join('users', 'artwork.users_id', '=', 'users.id')
            ->select('artwork.*', 'users.firstname')
            ->get();

        return view('dashboard.admin.artwork.index', compact('artworks'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.artwork.add', compact('users'));
    }

    public function store(Request $req)
    {
        $validated = $req->validate([
            'users_id' => 'required',
            'title' => 'required|string|max:255',
            'descripation' => 'required|string|max:255',
            'image_path' => 'required|image',
        ]);
        $img = $req->file('image_path');
        $imageName = time(). $img->getClientOriginalName();
        $img->move('image_path/',$imageName);
        $imgpath = "image_path/".$imageName;



        DB::table('artwork')->insert([
            'users_id' => $validated['users_id'],
            'title' => $validated['title'],
            'descripation' => $validated['descripation'],
            'image_path' => $imgpath,

        ]);



        session()->flash('status', 'Artwork Created');

        return redirect('dashboard/admin/artwork');
    }

    public function edit($id)
    {
        $artwork = DB::table('artwork')->where('artwork_id', $id)->first();

        if (!$artwork) {
            abort(404, 'Artwork not found');
        }

        $users = DB::table('users')->select('id', 'firstname')->get();

        return view('dashboard.admin.artwork.edit', compact('artwork', 'users'));
    }

    public function update($id, Request $req)
    {
        $validated = $req->validate([
            'users_id' => 'required',
            'title' => 'required|string|max:255',
            'descripation' => 'required|string|max:255',
            'image_path' => 'required|image',
            'created_at' => 'required|date',
        ]);


        $data = [
            'users_id' => $validated['users_id'],
            'title' => $validated['title'],
            'descripation' => $validated['descripation'],
            'created_at' => $validated['created_at'],
        ];
        $img = $req->file('image_path');
        $imageName = time(). $img->getClientOriginalName();
        $img->move('image_path/',$imageName);
        $imgpath = "image_path/".$imageName;
        if ($imgpath) {
            $data['image_path'] =$imgpath;
        }

        DB::table('artwork')->where('artwork_id', $id)->update($data);

        session()->flash('status', 'Record Updated');

        return redirect('dashboard/admin/artwork');
    }

    public function delete($id)
    {
        DB::table('artwork')->where('artwork_id', $id)->delete();

        session()->flash('status', 'Record Deleted');

        return redirect('dashboard/admin/artwork');
    }
}
