<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function index()
    {
        $usernotifications = DB::select('
            SELECT users.user_name, notification.type, notification.message, notification.created_at, notification.notification_id, user_notification.isread
            FROM user_notification
            INNER JOIN notification ON user_notification.notification_id = notification.notification_id
            INNER JOIN users ON user_notification.user_id = users.user_id
        ');

        return view('dashboard.admin.usersnotification.index', compact('usernotifications'));
    }

    public function add()
    {
        return view('dashboard.admin.usersnotification.add');
    }

    public function store(Request $req)
    {
        $req->validate([
            'notification_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        $notification_id = $req->input('notification_id');
        $user_id = $req->input('user_id');

        DB::insert('INSERT INTO user_notification (notification_id, user_id) VALUES (?, ?)', [$notification_id, $user_id]);

        session()->flash('status', 'Record Inserted');

        return redirect('dashboard/admin/usersnotification');
    }
}
