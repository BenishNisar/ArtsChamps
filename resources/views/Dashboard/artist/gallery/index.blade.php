@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <h3>Role Table</h3>
    <div class="header_wrap">
        <div class="num_rows">
            <div class="row justify-content-between">
                <div class="col-md-3">
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

    <table class="table table-striped table-class" id="table-id">
        <thead class="bg-green">
            <tr>
                <th>#</th>
                <th>Gallery Image</th>
                <th>Created At</th>
                <th>Arts Name </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gallery as $item)
            <tr>
                <td>{{ $item->gallery_id }}</td>

                <td><img src="{{ asset($item->gallery_img) }}" alt="Gallery Image" style="width: 100px; height: auto;"></td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->firstname }}</td>
                <td>
                    <a href="{{ url('/dashboard/admin/gallery/edit', $item->gallery_id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/dashboard/admin/gallery/delete', $item->gallery_id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination-container'>
        <nav>
            <ul class="pagination"></ul>
        </nav>
    </div>
    <div class="rows_count">Showing 11 to 20 of 91 entries</div>
</div>
@endsection
