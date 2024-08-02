<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Friend;  // Ensure this import is correct
use App\Models\User;

class FriendController extends Controller
{

    public function index(){
        $friends = DB::select('select * from friend');
        return view('dashboard.admin.friend.index', compact('friends'));
    }

    public function addFriend(Request $request, $userId)
    {
        $friend = new Friend();
        $friend->user_id = auth()->user()->id;
        $friend->friend_id = $userId;
        $friend->save();

        return response()->json(['success' => true]);
    }

    public function showProfile($id)
    {
        $user = User::findOrFail($id);

        // Fetch friends of the user along with their profile details
        $friends = DB::table('users')
                        ->join('friends', 'users.id', '=', 'friends.user_id')
                        ->where('friends.user_id', $id)
                        ->select('users.id,users.firstname,users.lastname,users.profile_img,
                        banner_img,friends.user_id,friends.friend_id')
                        ->get();

        return view('dashboard.admin.profile.profile', compact('user', 'friends'));
    }
}
