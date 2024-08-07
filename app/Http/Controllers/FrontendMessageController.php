<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FrontendMessageController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Get the latest message ID for each conversation
        $latestMessages = DB::table('message as m')
            ->select('m.user_id', 'm.message_text', 'm.created_at', 'u.profile_img', 'u.firstname', 'u.lastname')
            ->join('users as u', 'm.user_id', '=', 'u.id')
            ->where(function ($query) use ($userId) {
                $query->where('m.user_id', $userId)
                      ->orWhere('m.recipient_id', $userId);
            })
            ->orderBy('m.created_at', 'desc')
            ->get()
            ->groupBy('user_id')
            ->map(function ($group) {
                return $group->first(); // Get the most recent message for each user
            });

        // Format the dates
        $messages = $latestMessages->map(function ($message) {
            $message->created_at = Carbon::parse($message->created_at);
            return $message;
        });

        return view('Home.messages', compact('messages'));
    }


    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'message_text' => 'required|string',
        'receiver_id' => 'required|integer|exists:users,id',
    ]);

    $userId = Auth::id();

    // Insert the message and get the message ID
    DB::table('message')->insert([
        'user_id' => $userId,
        'recipient_id' => $request->input('receiver_id'),
        'message_text' => $request->input('message_text'),
        'sender_message' => $request->input('message_text'), // Add this line
        'created_at' => now(),
    ]);

    return redirect()->route('messages.index');
}

}
