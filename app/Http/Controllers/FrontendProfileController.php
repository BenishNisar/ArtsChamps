<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class FrontendProfileController extends Controller
{
    function index(){

        $about = Db::select('select * from about where user_id = ?',[Auth::user()->id]);

        if($about){
            $about= $about[0];
        }

        $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);

        $profile ? $profile[0] : [];

        return view('Home.profile',['about' => $about , 'profile' => $profile]);

}
public function showProfile()
{

    $userId = Auth::user()->id;


    $about = DB::select('SELECT * FROM about WHERE user_id = ?', [$userId]);


    if (!empty($about)) {
        $about = $about[0];
    } else {

        $about = null;
    }

    // Pass the 'about' data to the view
    return view('Home.profile', compact('about'));
}

public function uploadProfileImage(Request $req)
{

    $this->validate($req, [
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($req->hasFile('profile_image')) {


        $img = $req->file('profile_image');
        $imageName = time(). $img->getClientOriginalName();
        $img->move('profile_images/',$imageName);
        $profileimgpath = "profile_images/".$imageName;


        // Update user's profile image path in the database
        $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);

        $user = auth()->user();
        $user->profile_img = $profileimgpath;
        $user->save();

        if(isset($profile[0]->banner_img)){

            $bannerimg = $profile[0]->banner_img;

        }
        else{

            $bannerimg = "NULL";

        }

        DB::insert('INSERT INTO profile (profile_img, banner_img, user_id) VALUES (?, ?, ?)', [
            $profileimgpath,
            $bannerimg,
            Auth::user()->id
        ]);


        return response()->json(['success' => 'Image Uploaded '], 200);

    } else {
        return response()->json(['error' => 'No file uploaded'], 400);
    }
}


public function uploadBannerImage(Request $request)
{

    if ($request->hasFile('banner_image')) {

        $img = $request->file('banner_image');
        $imgname = time() . '_' . $img->getClientOriginalName();
        $bannerimg = $img->move('banner_images', $imgname);
        $bannerimgpath = "banner_images/".$imgname;


        $user = auth()->user();
        $user->banner_img = $bannerimgpath;
        $user->save();

        $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);


        DB::insert('INSERT INTO profile (profile_img, banner_img, user_id) VALUES (?, ?, ?)', [
            $profile[0]->profile_img,
            $bannerimgpath,
            Auth::user()->id
        ]);

        session()->flash('message','Banner Image Updated');
        return response()->json(['success' => 'Image uploaded successfully'], 200);
    } else {
        return response()->json(['error' => 'No file uploaded'], 400);
    }
}



}
