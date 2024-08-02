<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = DB::select('
            SELECT users.id, users.firstname, about.about_id, about.bio, about.date_of_birth, about.social_media,
                   about.art_style, about.rating
            FROM about
            INNER JOIN users ON about.user_id = users.id
        ');
        return view('Dashboard.admin.about.index', compact('about'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.about.add', compact('users'));
    }

    public function edit($id)
    {
        $about = DB::select('SELECT * FROM about WHERE about_id = ?', [$id]);

        if (empty($about)) {
            return redirect('dashboard/admin/about')->with('error', 'Record not found');
        }

        $about = $about[0];
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.about.edit', compact('about', 'users'));
    }


    public function store(Request $req)
    {
        // Validate the input
        $req->validate([
            'user_id' => 'required|integer',
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



        // Insert into database
        DB::insert('insert into about (user_id, bio, date_of_birth, social_media,art_style,rating,join_date,
        country,live,
        location,work,photos

        ) values (?, ?, ?, ?,?,?,?,?,?,?,?,?)', [
            $req->user_id,
            $req->bio,
            $req->date_of_birth,
            $req->social_media,
            $req->art_style,
            $req->rating,
            $req->join_date,
            $req->country,
            $req->live,
            $req->location,
            $req->work,
            $req->photos


        ]);

        // Flash message to session
        session()->flash('status', 'Record Inserted');

        // Redirect to another route
        return redirect('dashboard/admin/about');
    }

    public function update(Request $req)
    {


        $req->validate([
            'user_id' => 'required|integer',
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

        try {
            $data = $req->only([
                'user_id', 'bio', 'date_of_birth', 'social_media', 'country',
                'live', 'location', 'art_style', 'join_date', 'work', 'rating', 'about_id'
            ]);

            if ($request->hasFile('photos')) {
                $data['photos'] = $request->file('photos')->store('photos');
            } else {
                $data['photos'] = null;
            }

            Log::info('Updating about record', $data);

            DB::update('
                UPDATE about
                SET user_id = ?, bio = ?, date_of_birth = ?, social_media = ?, country = ?, live = ?,
                    location = ?, art_style = ?, join_date = ?, work = ?, photos = ?, rating = ?
                WHERE about_id = ?',
                array_values($data)
            );

            session()->flash('status', 'Record Updated');
        } catch (\Exception $e) {
            \Log::error('Error updating about record', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while updating the record.');
        }

        return redirect('dashboard/admin/about');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM about WHERE about_id = ?', [$id]);

        session()->flash('status', 'Record deleted successfully');
        return redirect('dashboard/admin/about');
    }
}
