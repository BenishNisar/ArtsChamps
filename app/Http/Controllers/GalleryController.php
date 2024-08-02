<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GalleryController extends Controller
{

    public function index()
    {
        $gallery = DB::table('gallery')
            ->join('users', 'gallery.user_id', '=', 'users.id')
            ->select('gallery.gallery_id', 'gallery.created_at', 'gallery.gallery_img', 'users.firstname')
            ->get();

        return view('dashboard.admin.gallery.index', compact('gallery'));
    }

    public function add()
    {
        $users = DB::table('users')->select('id', 'firstname')->get();
        return view('dashboard.admin.gallery.add', compact('users'));
    }

    public function store(Request $req)
    {
        // Validate the request
        $req->validate([
            'gallery_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id'
        ]);

        // Handle file upload
        $galleryImgPath = null;
        if ($req->hasFile('gallery_img')) {
            $img = $req->file('gallery_img');
            $imageName = time(). $img->getClientOriginalName();
            $img->move('gallery_images/',$imageName);
            $imgpath = "gallery_images/".$imageName;

        }

        // Insert data into the gallery table
        DB::table('gallery')->insert([
            'created_at' => $req->created_at,
            'gallery_img' => $imgpath,
            'user_id' => $req->user_id
        ]);

        // Set flash message and redirect
        session()->flash('status', 'Record Inserted');
        return redirect('dashboard/admin/gallery');
    }

    public function edit($id)
    {
        $gallery = DB::table('gallery')->where('gallery_id', $id)->first();

        if (!$gallery) {
            return redirect('dashboard/admin/gallery')->with('error', 'Record not found');
        }

        $users = DB::table('users')->select('id', 'firstname')->get();

        return view('dashboard.admin.gallery.edit', compact('gallery', 'users'));
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'created_at' => 'required|date',
            'gallery_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id'
        ]);

        $gallery = DB::table('gallery')->where('gallery_id', $id)->first();

        if (!$gallery) {
            return redirect('dashboard/admin/gallery')->with('error', 'Record not found');
        }

        $galleryImgPath = $gallery->gallery_img;

        if ($req->hasFile('gallery_img')) {
            $galleryImgPath = $req->file('gallery_img')->store('gallery_images', 'public');
        }

        DB::table('gallery')->where('gallery_id', $id)->update([
            'created_at' => $req->created_at,
            'gallery_img' => $galleryImgPath,
            'user_id' => $req->user_id
        ]);

        session()->flash('status', 'Record updated successfully');
        return redirect('dashboard/admin/gallery');
    }

    public function delete($gallery_id)
    {
        DB::table('gallery')->where('gallery_id', $gallery_id)->delete();

        session()->flash('status', 'Record deleted successfully');
        return redirect('dashboard/admin/gallery');
    }
    }







