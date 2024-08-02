@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/dashboard/admin/gallery') }}" class="btn btn-success">&lt;&lt; Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Add New Gallery Item</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/gallery/update') }}/{{ $gallery->gallery_id }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" class="form-control" id="created_at" name="created_at"
 value="{{ $gallery->created_at }}"
                            required>
                            @error('created_at')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User</label>
                            <select name="user_id" id="user_id" class="form-control"
                            required>
                                <option value="">Select User</option>
                                @foreach ($users as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $gallery->user_id ? 'selected' : '' }}>{{ $item->firstname }}"</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid user ID is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="gallery_img" class="form-label">Gallery Image</label>
                            <input type="file" class="form-control" id="gallery_img" name="gallery_img"

                            values="{{ $gallery-> gallery_img}}"
                            required>
                            @error('gallery_img')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
