<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = DB::select('
            SELECT users.id, users.firstname, message.message_id, message.sender_message,
            message.created_at, message.message_text
            FROM message
            INNER JOIN users ON message.user_id = users.id');
            $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);


        return view('dashboard.admin.messages.index', compact('messages','profile'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.messages.add', compact('users'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'user_id' => 'required',
            'sender_message' => 'required|string',
            'message_text' => 'required|string',
        ]);

        DB::insert('
            INSERT INTO message (user_id, sender_message, created_at, message_text)
            VALUES (?, ?, NOW(), ?)', [
            $req->user_id,
            $req->sender_message,
            $req->message_text
        ]);

        session()->flash('status', 'Record inserted successfully');
        return redirect('dashboard/admin/messages');
    }

    public function edit($id)
    {
        $message = DB::table('message')->where('message_id', $id)->first();
        if (!$message) {
            return redirect('dashboard/admin/messages')->with('error', 'Message not found');
        }

        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('Dashboard.admin.messages.edit', compact('message', 'users'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'user_id' => 'required',
            'sender_message' => 'required|string',
            'message_text' => 'required|string'
        ]);

        $updateData = [
            'user_id' => $req->user_id,
            'sender_message' => $req->sender_message,
            'message_text' => $req->message_text,
        ];

        DB::table('message')->where('message_id', $id)->update($updateData);

        session()->flash('status', 'Record Updated');
        return redirect('dashboard/admin/messages');
    }


    public function delete($id)
    {
        DB::table('message')->where('message_id', $id)->delete();
        session()->flash('status', 'Record Deleted');
        return redirect('dashboard/admin/messages');
    }
}
