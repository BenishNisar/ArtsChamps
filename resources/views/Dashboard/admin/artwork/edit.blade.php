@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/artwork/index')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Post</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/artwork/update', $artwork->artwork_id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="user_id" class="form-label">User</label>
                            <select name="users_id" id="user_id" class="form-control" required>
                                <option value="">Select User</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}" {{ old('users_id', $artwork->users_id) == $item->id ? 'selected' : '' }}>{{ $item->firstname }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid user ID is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{ $artwork->title }}" class="form-control" id="title" name="title" placeholder="Enter the title" required>
                            <div class="invalid-feedback">
                                Valid title is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="descripation" class="form-label">Description</label>
                            <input type="text" value="{{ $artwork->descripation }}" class="form-control" id="descripation" name="descripation" placeholder="Enter the description" required>
                            <div class="invalid-feedback">
                                Valid description is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image_path" class="form-label">Image Path</label>
                            <input type="file" class="form-control" id="image_path" name="image_path" required>
                            <div class="invalid-feedback">
                                Valid image path is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="text" value="{{ $artwork->created_at }}" class="form-control" id="created_at" name="created_at" placeholder="Enter the creation date" required>
                            <div class="invalid-feedback">
                                Valid creation date is required.
                            </div>
                        </div>

                        <button class="btn btn-success mt-3 w-100" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
