@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/dashboard/admin/userprofile/') }}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/userprofile/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User</label>
                            <select name="user_id" id="user_id" class="form-control" required>
                                <option value="">Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid user is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="profile_id" class="form-label">Profile Id</label>
                            <input type="number" class="form-control" id="profile_id" name="profile_id" placeholder="Enter Profile ID" required>
                            <div class="invalid-feedback">
                                Valid profile ID is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="profile_img" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="profile_img" name="profile_img" required>
                            <div class="invalid-feedback">
                                Profile image is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="banner_img" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="banner_img" name="banner_img" required>
                            <div class="invalid-feedback">
                                Banner image is required.
                            </div>
                        </div>

                        <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
