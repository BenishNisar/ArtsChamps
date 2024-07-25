<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

   function index(){
            $users = DB::table('users')
                ->join('roles', 'users.role_id', '=', 'roles.role_id')
                ->select('users.id', 'users.firstname', 'users.email', 'users.password',
                         'users.created_at', 'users.status', 'roles.role_name')
                ->get();

            return view('Dashboard.admin.users.index', compact('users'));
        }

        function add(){
            $roles = Db::select('select * from roles');
            return view('Dashboard.admin.users.add', compact('roles'));
        }



        

        function store(Request $req){
            $req->validate([
                'firstname' => 'required|min:3',
                'lastname' => 'required|min:3',
                'dob' => 'required|date',
                'phone' => 'required',
                'gender' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'role_id' => 'required|integer',
                'status' => 'required',
            ]);

            DB::table('users')->insert([
                'firstname' => $req->firstname,
                'lastname' => $req->lastname,
                'dob' => $req->dob,
                'phone' => $req->phone,
                'gender' => $req->gender,
                'email' => $req->email,
                'password' => bcrypt($req->password), // Hash the password
                'created_at' => now(), // Current timestamp
                'role_id' => $req->role_id,
                'status' => $req->status
            ]);

            session()->flash('status', 'Record Inserted');
            return redirect('dashboard/admin/users');
        }

        function edit($id){
            $user = DB::table('users')->where('id', $id)->first();
            if (!$user) {
                return redirect('dashboard/admin/users')->with('error', 'User not found');
            }

            $roles = DB::select('select * from roles');
            return view('Dashboard.admin.users.edit', compact('user', 'roles'));
        }

        function update($id, Request $req){
            $req->validate([
                'firstname' => 'required|min:3',
                'lastname' => 'required|min:3',
                'dob' => 'required|date',
                'phone' => 'required',
                'gender' => 'required',
                'email' => 'required|email',
                'password' => 'nullable|min:6',
                'role_id' => 'required|integer',
                'status' => 'required|string',
            ]);

            $updateData = [
                'firstname' => $req->firstname,
                'lastname' => $req->lastname,
                'dob' => $req->dob,
                'phone' => $req->phone,
                'gender' => $req->gender,
                'email' => $req->email,
                'role_id' => $req->role_id,
                'status' => $req->status,

            ];

            if ($req->filled('password')) {
                $updateData['password'] = bcrypt($req->password); // Hash the password
            }

            DB::table('users')->where('id', $id)->update($updateData);

            session()->flash('status', 'Record Updated');
            return redirect('dashboard/admin/users');
        }

        function delete($id){
            DB::table('users')->where('id', $id)->delete();

            session()->flash('status', 'Record Deleted');
            return redirect('dashboard/admin/users');
        }
    }








