<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        // Retrieve all records from the 'notification' table
        $notifications = DB::select('select * from notification');
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
            'is_read' => 'required',
            'created_at' => 'required|date'
        ]);

        DB::insert('insert into notification (type, message, isread, created_at) values (?, ?, ?, ?)', [
            $req->type,
            $req->message,
            $req->is_read,
            $req->created_at
        ]);
            session()->flash('status','Recored Inserted');

            return redirect('dashboard/admin/notification');
            }

            public function edit($id)
            {
                $notification = DB::select('select * from notification where notification_id = ?', [$id]);

                if (empty($notification)) {
                    return redirect('dashboard/admin/notification')->with('error', 'Record not found');
                }

                $notification = $notification[0];

                return view('dashboard.admin.notification.edit', compact('notification'));
            }
            public function update($id, Request $req)
            {
                $req->validate([
                    'type' => 'required|min:3',
                    'message' => 'required|min:3',
                    'is_read' => 'required',
                    'created_at' => 'required|date'
                ]);

                DB::update('update notification set type = ?, message = ?, isread = ?, created_at = ? where notification_id = ?', [
                    $req->type,
                    $req->message,
                    $req->is_read,
                    $req->created_at,
                    $id
                ]);

                session()->flash('status', 'Record Updated');

                return redirect('dashboard/admin/notification');
            }

            public function delete($id)
            {
                DB::delete('delete from notification where notification_id = ?', [$id]);

                session()->flash('status', 'Record Deleted');

                return redirect('dashboard/admin/notification');
            }











        }





