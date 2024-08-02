<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendMessageController extends Controller
{

  // Function to display messages
        public function index()
        {
            $userId = Auth::id();

            $messages = DB::select('
                SELECT m.user_id, m.sender_message, m.created_at, m.message_text,
                       rm.rec_message, rm.user_id AS receiver_id
                FROM message AS m
                INNER JOIN receiver_message AS rm ON rm.message_id = m.message_id
                WHERE m.user_id = ?
                OR rm.user_id = ?
            ', [$userId, $userId]);


            $messages = collect($messages);

            $users = DB::table('users')->select('id', 'firstname')->get();

            return view('Home.messages', compact('messages', 'users'));
        }

        // Function to store a new message
        public function store(Request $request)
        {
            // Validate the request
            $request->validate([
                'message_text' => 'required|string',
                'receiver_id' => 'required|integer|exists:users,id',
            ]);

            // Get the current authenticated user ID
            $userId = Auth::id();

            // Insert the new message into the message table
            $messageId = DB::table('message')->insertGetId([
                'user_id' => $userId,
                'message_text' => $request->input('message_text'),
                'sender_message' => $request->input('message_text'),
                'created_at' => now(),
            ]);

            // Insert the new message into the receiver_message table
            DB::table('receiver_message')->insert([
                'message_id' => $messageId,
                'user_id' => $request->input('receiver_id'),
                'rec_message' => $request->input('message_text'),
            ]);

            return redirect()->route('messages.index');
            // Return JSON response
            // return response()->json([
            //     'message_id' => $messageId,
            //     'message_text' => $request->input('message_text'),
            //     'receiver_id' => $request->input('receiver_id'),
            //     'sender_message' => $request->input('message_text')
            // ]);

        }
    }



