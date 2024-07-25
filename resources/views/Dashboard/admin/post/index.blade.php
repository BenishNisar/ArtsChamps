@extends('Layout.Dashboard_layout')

@section('AdminContent')
    <div class="container mt-5">
        <h3>Post Table</h3>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="state" id="maxRows">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="70">70</option>
                                <option value="100">100</option>
                                <option value="5000">Show ALL Rows</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tb_search">
                            <div class="input-group">
                                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.." class="form-control">
                                <a href="{{ url('dashboard/admin/post/add') }}" class="btn btn-success text-white">Add Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-class" id="table-id">
                <thead class="bg-green">
                    <tr>
                        <th>#</th>
                        <th>Content</th>
                        <th>Created_at</th>
                        <th>Post_Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->post_id }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <img src="{{ $item->post_img }}" alt="Post Image" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>
                                <a href="{{ url('/dashboard/admin/post/edit') }}/{{ $item->post_id }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/dashboard/admin/post/delete') }}/{{ $item->post_id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <!-- Here the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class="rows_count">Showing 11 to 20 of 91 entries</div>
    </div>
@endsection
