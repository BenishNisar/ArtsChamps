@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('dashboard/admin/profile/') }}" class="btn btn-success">&lt;&lt; Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Profile Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('dashboard/admin/profile/store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="profile_img" class="form-label">Profile Img</label>
                            <input type="file" class="form-control" id="profile_img" name="profile_img" required>
                            @error('profile_img')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="invalid-feedback">
                                Valid profile image is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="banner_img" class="form-label">Banner Img</label>
                            <input type="file" class="form-control" id="banner_img" name="banner_img" required>
                            @error('banner_img')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="invalid-feedback">
                                Valid banner image is required.
                            </div>
                        </div>
                     <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
