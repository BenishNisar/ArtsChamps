<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $about = DB::select('
            SELECT users.id, users.firstname, about.about_id, about.bio, about.date_of_birth, about.work, about.live,
            about.location, about.social_media, about.art_style, about.rating
            FROM about
            INNER JOIN users ON about.user_id = users.id
            WHERE users.id = ?', [$userId]);

        $about = !empty($about) ? $about[0] : null;
        $posts = DB::table('post')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Home.welcome', compact('about', 'posts'));
    }

    public function showProfile()
    {
        return $this->index(); // This method seems redundant if it does the same thing as index()
    }

    public function update(Request $request)
    {
        $userId = Auth::user()->id;

        // Validate the request data
        $validatedData = $request->validate([
            'bio' => 'nullable|string|min:3',
            'date_of_birth' => 'nullable|date',
            'social_media' => 'nullable|string',
            'art_style' => 'nullable|string',
            'rating' => 'nullable|numeric',
            'join_date' => 'nullable|date',
            'country' => 'nullable|string',
            'live' => 'nullable|string',
            'location' => 'nullable|string',
            'work' => 'nullable|string',
            'photos' => 'sometimes|image',
        ]);

        // Check if the record exists
        $about = DB::table('about')->where('user_id', $userId)->first();

        if ($about) {
            // Update the record
            $data = $validatedData;
            if ($request->hasFile('photos')) {
                $data['photos'] = $request->file('photos')->store('photos');
            }

            DB::table('about')->where('user_id', $userId)->update($data);
        } else {
            // Insert a new record
            $data = $validatedData;
            $data['user_id'] = $userId;
            if ($request->hasFile('photos')) {
                $data['photos'] = $request->file('photos')->store('photos');
            }

            DB::table('about')->insert($data);
        }

        return redirect()->route('home')->with('status', 'Profile updated successfully');
    }

    public function storePost(Request $req)
    {
        $userId = Auth::user()->id;

        // Validate the request data
         $req->validate([
            'content' => 'required|string|max:255',
            'post_img' => 'required|image',
        ]);



        if ($req->hasFile('post_img')) {

            $img = $req->file('post_img');
            $imageName = time(). $img->getClientOriginalName();
            $img->move('posts/',$imageName);
            $imgpath = "posts/".$imageName;
            // $imgpath ="storage/app/posts/".$imageName;

            // $img->storeAs('posts',$imageName);

            // $imgname = $request->file('post_img')->store('posts');
        }

        // $data['user_id'] = $userId;
        // $data['created_at'] = now(); // Optionally set the creation time

        // // Insert the post into the database
        // DB::table('post')->insert($data);
        Db::insert('insert into post(content,created_at,post_img,user_id) values(?,?,?,?)',[$req->content,now(),$imgpath,$userId]);

        return redirect()->route('home')->with('status', 'Post created successfully');
    }
}
