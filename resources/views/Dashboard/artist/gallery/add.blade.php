@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/dashboard/admin/gallery') }}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Add New Gallery Item</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/gallery/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User_id</label>
                            <select name="user_id" id="" class="form-control">
                                <option value="">Users</option>
                                @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid role ID is required.
                            </div>

                        <div class="mb-3">
                            <label for="gallery_img" class="form-label">Gallery Image</label>
                            <input type="file" class="form-control" id="gallery_img" name="gallery_img" required>
                            @error('gallery_img')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
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
