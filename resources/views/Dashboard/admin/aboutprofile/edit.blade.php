@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/usersprofile/index')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            <div class="invalid-feedback">
                                Valid password is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" class="form-control" id="created_at" name="created_at" required>
                            <div class="invalid-feedback">
                                Valid date is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role_id" class="form-label">Role ID</label>
                            <input type="number" class="form-control" id="role_id" name="role_id" placeholder="Enter role ID" required>
                            <div class="invalid-feedback">
                                Valid role ID is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-control" id="status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <div class="invalid-feedback">
                                Valid status is required.
                            </div>
                        </div>
                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
