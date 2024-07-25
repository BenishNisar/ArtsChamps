<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a listing of the posts
    public function index()
    {
        $posts = DB::select('select * from post');
        return view('dashboard.admin.post.index', compact('posts'));
    }

    // Show the form for creating a new post
    public function add()
    {
        return view('dashboard.admin.post.add');
    }

    // Store a newly created post in the database
    public function store(Request $req)
    {
        // Validate the input
        $req->validate([
            'content' => 'required|min:3',
            'created_at' => 'required|date',
            'post_img' => 'required|image' // Assuming post_img is a URL or file path
        ]);

        $img=$req->post_img;
        $imgname=$img->getClientOriginalName();
        $imgname=time().$imgname;

        $img->storeAs('public/posts', $imageName);
        $imgnew="public/posts/".$imgname;


        // Insert into database
        DB::insert('insert into post (content, created_at, post_img) values (?, ?, ?)', [
            $req->content,
            $req->created_at,
            $imgnew
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
        return view('dashboard.admin.post.edit', compact('post'));
    }

    // Update the specified post in the database
    public function update($id, Request $req)
    {
        // Validate the input
        $req->validate([
            'content' => 'required|min:3',
            'created_at' => 'required|date',
            'post_img' => 'sometimes|required|' // Optional field
        ]);

        // Update the post
        DB::update('update post set content = ?, created_at = ?, post_img = ? where post_id = ?', [
            $req->content,
            $req->created_at,
            $req->post_img,
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
