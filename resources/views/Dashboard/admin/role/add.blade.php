@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/role/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/role/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" required class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
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
