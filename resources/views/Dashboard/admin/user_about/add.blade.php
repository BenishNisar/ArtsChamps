@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/user_about/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/user_about/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
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
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">About_id</label>
                            <input type="text" class="form-control" id="about_id" name="about_id" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>
@endsection
