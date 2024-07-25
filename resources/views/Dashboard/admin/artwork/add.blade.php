@extends('Layout.Dashboard_layout')

@section('AdminContent')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/dashboard/admin/artwork/') }}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/artwork/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <select name="users_id" id="user_id" class="form-control" required>
                            <option value="">Users</option>
                            @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Valid user ID is required.
                        </div>

                            <label for="title" class="form-label">Title</label>
                            <input type="text" required class="form-control" id="title" name="title" placeholder="Enter title">
                            @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <label for="description" class="form-label">Description</label>
                            <textarea required class="form-control" id="descripation" name="descripation" placeholder="Enter description"></textarea>
                            @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <label for="image_path" class="form-label">Image Path</label>
                            <input type="file" required class="form-control" id="image_path" name="image_path">
                            @error('image_path')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <label for="created_at" class="form-label">Created At</label>
                            <input type="datetime-local" required class="form-control" id="created_at" name="created_at">
                            @error('created_at')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
