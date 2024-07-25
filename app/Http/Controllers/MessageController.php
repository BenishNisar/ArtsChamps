<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   

        public function index()
        {
            $messages = DB::select('
                SELECT users.id, users.firstname, message.message_id, message.message,
                       message.created_at, message.recipient
                FROM message
                INNER JOIN users ON message.user_id = users.id
            ');

            return view('dashboard.admin.messages.index', compact('messages'));
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
                'message' => 'required|string',
                'created_at' => 'required|date',
                'recipient' => 'required|string',
            ]);

            DB::insert('
                INSERT INTO message (user_id, message, created_at, recipient)
                VALUES (?, ?, ?, ?)', [
                $req->user_id,
                $req->message,
                $req->created_at,
                $req->recipient
            ]);

            session()->flash('status', 'Record inserted successfully');
            return redirect('dashboard/admin/messages');
        }



}
