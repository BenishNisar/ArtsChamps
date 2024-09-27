<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{


    public function index()
    {
        // Retrieve all records from the 'notification' table
        $notifications = Notification::all();
        return view('Dashboard.admin.notification.index', compact('notifications'));
    }

    public function add()
    {
        return view('dashboard.admin.notification.add');
    }

    public function store(Request $req)
    {
        $req->validate([
            'type' => 'required|min:3',
            'message' => 'required|min:3',
            'is_read' => 'required|boolean', // Validate as boolean
            'created_at' => 'required|date'
        ]);

        Notification::create([
            'type' => $req->type,
            'message' => $req->message,
            'is_read' => $req->is_read,
            'created_at' => $req->created_at
        ]);

        session()->flash('status', 'Record Inserted');
        return redirect('dashboard/admin/notification');
    }

    public function edit($id)
    {
        $notification = Notification::find($id);

        if (empty($notification)) {
            return redirect('dashboard/admin/notification')->with('error', 'Record not found');
        }

        return view('dashboard.admin.notification.edit', compact('notification'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'type' => 'required|min:3',
            'message' => 'required|min:3',
            'is_read' => 'required|boolean', // Validate as boolean
            'created_at' => 'required|date'
        ]);

        $notification = Notification::find($id);

        if ($notification) {
            $notification->update([
                'type' => $req->type,
                'message' => $req->message,
                'is_read' => $req->is_read,
                'created_at' => $req->created_at
            ]);

            session()->flash('status', 'Record Updated');
        } else {
            return redirect('dashboard/admin/notification')->with('error', 'Record not found');
        }

        return redirect('dashboard/admin/notification');
    }

    public function delete($id)
    {
        $notification = Notification::find($id);

        if ($notification) {
            $notification->delete();
            session()->flash('status', 'Record Deleted');
        } else {
            return redirect('dashboard/admin/notification')->with('error', 'Record not found');
        }

        return redirect('dashboard/admin/notification');
    }

    // In NotificationController.php


}
