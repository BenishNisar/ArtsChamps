<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $gallery =DB::select('select * from gallery');
        return view('dashboard.admin.gallery.index', compact('gallery'));
    }

    public function add()
    {
        return view('dashboard.admin.gallery.add');
    }


    public function store(Request $req)
{
    // Validate the request
    $validated = $req->validate([
        'created_at' => 'required|date',
        'gallery_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
    ]);

    // Handle file upload
    $galleryImgPath = null;
    if ($req->hasFile('gallery_img')) {
        $file = $req->file('gallery_img');
        $galleryImgPath = $file->store('gallery_images', 'public');
    }

    // Insert data into the gallery table
    DB::insert(
        'insert into gallery (created_at, gallery_img) values (?, ?)',
        [$validated['created_at'], $galleryImgPath]
    );

    // Set flash message and redirect
    session()->flash('status', 'Record Inserted');
    return redirect('dashboard/admin/gallery');
}


public function edit($gallery_id)
{
    $gallery = DB::select('select * from gallery where gallery_id = ?', [$gallery_id]);

    if (empty($gallery)) {
        return redirect('dashboard/admin/gallery')->with('error', 'Record not found');
    }

    $gallery = $gallery[0];
    return view('Dashboard.admin.gallery.edit', compact('gallery'));
}
public function update($gallery_id, Request $req)
{
    $req->validate([
        'created_at' => 'required|date',
        'gallery_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed

    ]);

    // Update the record
    DB::update('update gallery set created_at = ?, gallery_img = ? where gallery_id = ?', [
        $req->created_at,
        $req->hasFile('gallery_img') ? $req->photos->store('photos') : $gallery->photos // Update photo only if a new one is uploaded

    ]);

    session()->flash('status', 'Record updated successfully');
    return redirect('dashboard/admin/gallery');
}
public function delete($id)
{
    DB::delete('delete from gallery where gallery_id = ?', [$id]);

    session()->flash('status', 'Record deleted successfully');
    return redirect('dashboard/admin/gallery');
}


    }







