<?php
 namespace App\Http\Controllers;
 use Hash;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Http\Request;
 use App\Models\User;


 class UserController extends Controller
 {
     public function index()
     {
         $users = DB::select('
             SELECT users.id, users.firstname, users.lastname, users.email, users.password, users.dob, users.phone,
                    users.gender, users.profile_img, users.role_id, users.created_at, users.updated_at, users.status,
                    users.banner_img, roles.role_id AS role_id, roles.role_name
             FROM users
             INNER JOIN roles ON users.role_id = roles.role_id
         ');


         return view('Dashboard.admin.users.index', compact('users'));
     }

     public function add()
     {
         $roles = DB::select('SELECT * FROM roles');
         return view('Dashboard.admin.users.add', compact('roles'));
     }

     public function store(Request $req)
     {
         $req->validate([
             'firstname' => 'required|min:3',
             'lastname' => 'required|min:3',
             'dob' => 'required|date',
             'phone' => 'required',
             'gender' => 'required',
             'email' => 'required|email',
             'password' => 'required',
            'role_id' => 'required|integer',



         ]);

         DB::table('users')->insert([
           'dob' => $req->dob,
             'phone' => $req->phone,
             'gender' => $req->gender,
             'email' => $req->email,
             'password' => Hash::make($req->password), // Hash the password
             'created_at' => now(), // Current timestamp
             'role_id' => $req->role_id,
             'status' ,
             'updated_at' => now(), // Current timestamp
             'profile_img' => $req->profile_img ?? null, // Handle optional fields
             'banner_img' => $req->banner_img ?? null,   // Handle optional fields
         ]);

         session()->flash('status', 'Record Inserted');
         return redirect('dashboard/admin/users');
     }

     public function edit($id)
     {
         $user = DB::table('users')->where('id', $id)->first();
         if (!$user) {
             return redirect('dashboard/admin/users')->with('error', 'User not found');
         }

         $roles = DB::select('SELECT * FROM roles');
         return view('Dashboard.admin.users.edit', compact('user', 'roles'));
     }

     public function update($id, Request $req)
     {
         $req->validate([
             'firstname' => 'required|min:3',
             'lastname' => 'required|min:3',
             'dob' => 'required|date',
             'phone' => 'required',
             'gender' => 'required',
             'email' => 'required|email',
             'password' => 'required',
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
            'updated_at' => now(), // Current timestamp
         ];

         if ($req->filled('password')) {
             $updateData['password'] = Hash::make($req->password); // Hash the password
         }

         DB::table('users')->where('id', $id)->update($updateData);

         session()->flash('status', 'Record Updated');
         return redirect('dashboard/admin/users');
     }





     public function delete($id)
     {
         DB::table('users')->where('id', $id)->delete();

        session()->flash('status', 'Record Deleted');
         return redirect('dashboard/admin/users');
     }


     public function search(Request $request)
     {
         $query = $request->input('search');

         $users = DB::table('users')
             ->where('firstname', 'like', "%{$query}%")
             ->orWhere('lastname', 'like', "%{$query}%")
             ->get();

         $posts = DB::select('SELECT users.id, users.firstname, post.post_id, post.content, post.created_at, post.post_img
                              FROM post
                              INNER JOIN users ON post.user_id = users.id
                              WHERE post.content LIKE ?', ["%{$query}%"]);

         return view('dashboard.admin.users.search-results', compact('users', 'query', 'posts'));
     }

     public function show($id)
     {
         $user = User::find($id);

         $posts = DB::select('SELECT post.post_id, post.content, post.created_at, post.post_img
                              FROM post
                              WHERE post.user_id = ?', [$id]);

         $about = DB::select('SELECT users.id, users.firstname, about.about_id, about.bio, about.date_of_birth, about.work,
                              about.live, about.location, about.social_media, about.art_style, about.rating, about.photos
                              FROM about
                              INNER JOIN users ON about.user_id = users.id
                              WHERE users.id = ?', [$id]);

         return view('dashboard.admin.profile.profile', compact('user', 'posts', 'about'));
     }


 }
