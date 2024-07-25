@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container m">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/socialmedia/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/socialmedia/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User_id</label>
                            <select name="id" id="" class="form-control">
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
                            <label for="name" class="form-label">Social_Link</label>
                            <input type="text" class="form-control" id="social_link" name="social_link" placeholder="Enter your name" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Social_Name</label>
                            <input type="text" class="form-control" id="social_name" name="social_name" placeholder="Enter your name" required>
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


@endsection
