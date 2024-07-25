<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = DB::select('select users.id,users.firstname,about.about_id,about.bio,about.date_of_birth,
        about.social_media,about.art_style,about.rating
         from about inner join users on about.user_id=users.id');
        return view('Dashboard.admin.about.index', compact('about'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.about.add',compact('users'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'bio' => 'required|string|min:3',
            'user_id'=>'required',
            'date_of_birth' => 'required|date',
            'social_media' => 'required|string',
            'art_style' => 'required|string',
            'rating' => 'required|numeric',
            'join_date' => 'required|date',
            'country' => 'required|string',
            'live' => 'required|string',
            'location' => 'required|string',
            'work' => 'required|string',
            'photos' => 'required|image',
        ]);

        DB::insert('insert into about (bio,user_id, date_of_birth, social_media, country, live, location, art_style, join_date, work, photos, rating) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)', [
            $req->bio,

            $req->user_id,
            $req->date_of_birth,
            $req->social_media,
            $req->country,
            $req->live,
            $req->location,
            $req->art_style,
            $req->join_date,
            $req->work,
            $req->photos->store('photos'), // Store the uploaded photo
            $req->rating
        ]);

        session()->flash('status', 'Record inserted successfully');
        return redirect('dashboard/admin/about');
    }

    public function edit($about_id)
    {
        $about = DB::select('select * from about where about_id = ?', [$about_id]);

        if (empty($about)) {
            return redirect('dashboard/admin/about')->with('error', 'Record not found');
        }

        $about = $about[0];
        $users = DB::table('users')->select('id', 'firstname')->get(); // Fetch users
        return view('Dashboard.admin.about.edit', compact('about', 'users'));
    }

    public function update(Request $request)
{
    $userId = Auth::user()->id;

    $request->validate([
        'bio' => 'required|string|min:3',
        'date_of_birth' => 'required|date',
        'social_media' => 'required|string',
        'art_style' => 'required|string',
        'rating' => 'required|numeric',
        'join_date' => 'required|date',
        'country' => 'required|string',
        'live' => 'required|string',
        'location' => 'required|string',
        'work' => 'required|string',
        'photos' => 'sometimes|image',
    ]);

    $about = DB::table('about')->where('user_id', $userId)->first();

    if ($about) {
        $data = $request->except(['photos']);
        $data['photos'] = $request->hasFile('photos') ? $request->file('photos')->store('photos') : $about->photos;

        DB::table('about')->where('user_id', $userId)->update($data);
    } else {
        $data = $request->all();
        $data['user_id'] = $userId;
        $data['photos'] = $request->hasFile('photos') ? $request->file('photos')->store('photos') : null;

        DB::table('about')->insert($data);
    }

    return redirect()->route('home')->with('status', 'Record updated successfully');
}


    public function delete($id)
    {
        DB::delete('delete from about where about_id = ?', [$id]);

        session()->flash('status', 'Record deleted successfully');
        return redirect('dashboard/admin/about');
    }
}
