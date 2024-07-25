@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/post/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Post</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/post/update') }}/{{ $post->post_id }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input type="text" required class="form-control" id="content" name="content" value={{ $post->content }} placeholder="Enter content">
                            @error('content')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" required class="form-control" id="created_at" name="created_at"   value={{ $post->created_at }} >
                            @error('created_at')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="post_img" class="form-label">Post Image</label>
                            <input type="file" required class="form-control" id="post_img" name="post_img"  value={{ $post->post_img }} >
                            @error('post_img')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>





                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br><br>

@endsection
