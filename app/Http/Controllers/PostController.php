<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    // Display a listing of the posts
    public function index()
    {

        if(Auth::user()->role_id == 1){

            $posts = DB::select('select users.id, users.firstname, post.post_id, post.content, post.created_at, post.post_img from post inner join users on post.user_id = users.id');
        }
        else if(Auth::user()->role_id == 2){
            $posts = DB::select('select users.id, users.firstname, post.post_id, post.content, post.created_at, post.post_img from post
             inner join users on post.user_id = users.id where post.user_id = ?',[Auth::user()->id]);
        }

        return view('dashboard.admin.post.index', compact('posts'));
    }

    // Show the form for creating a new post
    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.post.add', compact('users'));
    }

    // Store a newly created post in the database
    public function store(Request $req)
    {
        // Validate the input
        $req->validate([
            'content' => 'required|min:3',
            'created_at' => 'required|date',
            'post_img' => 'required|image',
            'user_id' => 'required|exists:users,id'
        ]);

        // Store the image file and get the path
        $path = $req->file('post_img')->store('public/images');

        // Insert into database
        DB::insert('insert into post (content, created_at, post_img, user_id) values (?, ?, ?, ?)', [
            $req->content,
            $req->created_at,
            $path,
            $req->user_id
        ]);

        // Flash message to session
        session()->flash('status', 'Record Inserted');

        // Redirect to another route
        return redirect('dashboard/admin/post');
    }

    // Show the form for editing the specified post
    public function edit($id)
    {
        $post = DB::select('select * from post where post_id = ?', [$id]);

        if (empty($post)) {
            return redirect('dashboard/admin/post')->with('error', 'Record not found');
        }

        $post = $post[0];
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.post.edit', compact('post', 'users'));
    }

    // Update the specified post in the database
    public function update($id, Request $req)
    {
        // Validate the input
        $req->validate([
            'content' => 'required|min:3',
            'created_at' => 'required|date',
            'post_img' => 'sometimes|image' // Optional field
        ]);

        $path = $req->file('post_img') ? $req->file('post_img')->store('public/images') : null;

        // Update the post
        DB::update('update post set content = ?, created_at = ?, post_img = ? where post_id = ?',
        [
            $req->content,
            $req->created_at,
            $path,
            $id
        ]);

        // Flash message to session
        session()->flash('status', 'Record Updated');

        // Redirect to another route
        return redirect('dashboard/admin/post');
    }

    // Remove the specified post from the database
    public function delete($id)
    {
        DB::delete('delete from post where post_id = ?', [$id]);

        // Flash message to session
        session()->flash('status', 'Record Deleted');

        // Redirect to another route
        return redirect('dashboard/admin/post');
    }
}
