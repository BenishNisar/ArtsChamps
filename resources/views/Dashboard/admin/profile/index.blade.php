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
</style>

@section('AdminContent')
    <div class="container mt-5">
        <h3>Profile Table</h3>
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
        <table class="table table-striped table-class" id="table-id">
            <thead class="bg-green">
                <tr>
                    <th>#</th>

                    <th>First Name</th>
                    <th>Profile Img</th>
                    <th>Banner Img</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profile as $item)
                    <tr>
                        <td>{{ $item->profile_id }}</td>

                        <td>{{ $item->firstname }}</td>
                        <td>

                           <img src="{{ asset( $item->profile_img)  }}" width="100" alt="Profile Image">

                        </td>
                        <td>

                                <img src="{{ asset( $item->banner_img)  }}" width="100" alt="Banner Image">


                        <td>
                            <a href="{{ url('/dashboard/admin/profile/edit/' . $item->profile_id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/dashboard/admin/profile/delete/' . $item->profile_id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <!-- Pagination links will be added here by JavaScript -->
                </ul>
            </nav>
        </div>
        <div class="rows_count">Showing 11 to 20 of 91 entries</div>
    </div> <!-- End of Container -->
@endsection
