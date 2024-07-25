@extends('Layout.Dashboard_layout')

<style>
    .bg-green {
        background-color: #00d25b;
    }
    .btn-green {
        background-color: #00d25b;
        color: white;
    }
    button.bg-green {
        background-color: #00d25b;
        color: white;
    }
    .bg-green th {
        color: white !important;
    }
    tbody tr {
        color: white !important;
    }
    table {
        width: 100%;
        table-layout: auto;
    }
    .container {
        max-width: 1200px; /* Adjust max-width to your preference */
        margin: auto;
    }
    .pagination-container {
        margin-top: 20px;
    }
    .rows_count {
        margin-top: 10px;
    }
    @media (max-width: 768px) {
        table {
            font-size: 0.8em; /* Adjust font size for smaller screens */
        }
    }
</style>

@section('AdminContent')
    <div class="container mt-5">
        <h3>Users Table</h3>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <div class="form-group">
                            <!-- Show Numbers Of Rows -->
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
                                <button class="btn btn-success"><a style="text-decoration: none;" href="{{ url('dashboard/admin/users/add') }}" class="text-white">Add User</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table with initial columns -->
        <table class="table table-striped table-class" id="table-id1">
            <thead class="bg-green">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role Name</th>
                    <th>Status</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
          <td>{{ $item->firstname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role_name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ url('/dashboard/admin/users/edit') }}/{{ $item->id }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('/dashboard/admin/users/delete') }}/{{ $item->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <!-- Pagination -->
        <div class="pagination-container">
            <nav>
                <ul class="pagination" id="pagination">

                </ul>
            </nav>
        </div>

        <div class="rows_count" id="rows_count">Showing 1 to 5 of {{ count($users) }} entries</div>
    </div> <!-- End of Container -->
@endsection
