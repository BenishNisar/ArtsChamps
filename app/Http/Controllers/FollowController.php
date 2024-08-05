<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FollowController extends Controller
{
     // Method to follow a user
     public function follow($id)
     {
         $userId = Auth::id(); // Get the ID of the currently authenticated user

         // Check if the user is not trying to follow themselves
         if ($userId === (int)$id) {
             return redirect()->back()->with('error', 'You cannot follow yourself.');
         }

         // Check if the follow relationship already exists
         $exists = DB::table('follows')
             ->where('user_id', $userId)
             ->where('followed_id', $id)
             ->exists();

         if ($exists) {
             return redirect()->back()->with('error', 'You are already following this user.');
         }

         // Create a new follow record
         DB::table('follows')->insert([
             'user_id' => $userId,
             'followed_id' => $id,
             'created_at' => now(),
         ]);

         return redirect()->back()->with('status', 'You are now following this user.');
     }

     // Method to unfollow a user
     public function unfollow($id)
     {
         $userId = Auth::id(); // Get the ID of the currently authenticated user

         // Delete the follow record
         DB::table('follows')
             ->where('user_id', $userId)
             ->where('followed_id', $id)
             ->delete();

         return redirect()->back()->with('status', 'You have unfollowed this user.');
     }
     public function friends()
     {
        $userId = Auth::id();

    // Get the list of friends
    $friends = DB::table('follows')
        ->join('users', 'follows.followed_id', '=', 'users.id')
        ->where('follows.user_id', $userId)
        ->select('users.id', 'users.firstname', 'users.lastname', 'users.profile_img')
        ->get();


    $followingCount = DB::table('follows')
        ->where('user_id', $userId)
        ->count();


    $followersCount = DB::table('follows')
        ->where('followed_id', $userId)
        ->count();



    return view('profile', compact('friends', 'followingCount', 'followersCount',));
     }


     public function showGallery()
     {
         $gallery = DB::select('select * from gallery where user_id = ? order by gallery_id desc', [Auth::id()]);

         return view('profile', compact('gallery'));
     }




}
