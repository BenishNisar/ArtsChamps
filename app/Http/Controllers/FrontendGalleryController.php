<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontendGalleryController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $about = DB::select('
            SELECT users.id, users.firstname, about.about_id, about.bio,
            about.date_of_birth, about.work, about.live,
            about.location, about.social_media, about.art_style, about.rating,about.photos
            FROM about
            INNER JOIN users ON about.user_id = users.id
            WHERE users.id = ?', [$userId]);

        $about = !empty($about) ? $about[0] : null;



        $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);
        // $gallery=DB::select('select users.id,gallery.gallery_img from gallery inner join users on gallery.user_id=users.id');
        $gallery=DB::select('select * from gallery where user_id = ? order by gallery_id desc',[Auth()->user()->id]);

        return view('Home.gallery', compact('about','profile','gallery'));
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
            'work' => 'required|string|min:3',
            'art_style' => 'required|string|min:3',
            'live' => 'required|string|min:3',
            'location' => 'required|string|min:3',
            'bio' => 'required|string|min:3',

        ]);

        // Check if the record exists
        $about = DB::table('about')->where('user_id', $userId)->first();

        if ($about) {
            // Update the record
            DB::table('about')->where('user_id', $userId)->update($validatedData);
        } else {
            // Insert a new record
            $validatedData['user_id'] = $userId;
            DB::table('about')->insert($validatedData);
        }

        return redirect()->route('home')->with('status', 'Profile updated successfully');
    }








    function likePost(Request $req){


        Db::insert('insert into likes(post_id,created_at,user_id) values(?,?,?)',[$req->post_id,now(),Auth()->user()->id]);

        return response()->json(['success' => true,'message' => 'Post Liked']);

    }


    // gallery


    public function uploadImage(Request $request)
    {

        $request->validate([
            'gallery_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imageName = time() . '.' . $request->gallery_img->extension();
        $request->gallery_img->move(public_path('gallery_images'), $imageName);
        $imgPath = 'gallery_images/' . $imageName;


        DB::table('gallery')->insert([
            'user_id' => Auth::user()->id,
            'gallery_img' => $imgPath,
            'created_at' => now(),
        ]);

        
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }





}
