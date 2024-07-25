@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url('/dashboard/admin/users/') }}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/users/update/' . $user->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">First  Name</label>
                            <input type="text" class="form-control" id="firstname"  value="{{ $user->firstname }}" name="firstname" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Gender</label>
                            <select class="form-select form-control" id="status" value="{{ $user->gender }}" name="gender" required>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="name" name="phone" value="{{ $user->phone }}" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter your email" required>
                            <div class="invalid-feedback">
                                Valid email is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" placeholder="Enter your password" required>
                            <div class="invalid-feedback">
                                Valid password is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" class="form-control" id="created_at"value="{{ $user->created_at }}" name="created_at" required>
                            <div class="invalid-feedback">
                                Valid date is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role_id" class="form-label">Role ID</label>
                            <select name="role_id" value="{{ $user->role_id }}" id="" class="form-control">
                                <option value="">Select Role</option>
                                @foreach ($roles as $item)
                                <option value="{{ $item->role_id }}">{{ $item->role_name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid role ID is required.
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-control" value="{{ $user->status }}" id="status" name="status" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <div class="invalid-feedback">
                                Valid status is required.
                            </div>
                        </div>



                        <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
