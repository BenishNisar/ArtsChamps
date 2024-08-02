@extends('Layout.Dashboard_layout')





@section('AdminContent')
    <div class="container mt-5">
        <h3>Users Table</h3>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select class="form-control" name="state" id="maxRows">
                                <option value="5">5</option>
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
                                <button class="btn btn-success">
                                    <a href="{{ url('dashboard/admin/about/add') }}" class="text-white" style="text-decoration: none;">Add About</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-class" id="table-id1">
            <thead class="bg-green">
                <tr>
                    <th>#</th>
                    <th>Bio</th>
                    <th>User</th>
                    <th>Date Of Birth</th>
                    <th>Art Style</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $item)
                <tr>
                    <td>{{ $item->about_id }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>{{ $item->firstname }}</td>
                    <td>{{ $item->date_of_birth }}</td>
                    <td>{{ $item->art_style }}</td>
                    <td>{{ $item->rating }}</td>
                    <td>
                        <a href="{{ url('/dashboard/admin/about/delete', $item->about_id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination-container">
            <nav>
                <ul class="pagination" id="pagination">
                    <!-- Pagination content will be generated dynamically here -->
                </ul>
            </nav>
        </div>

        <div class="rows_count" id="rows_count">Showing 1 to 5 of {{ count($about) }} entries</div>
    </div>
@endsection
