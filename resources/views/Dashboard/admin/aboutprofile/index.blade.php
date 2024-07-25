@extends('Layout.Dashboard_layout')

<style>
    .bg-green{
        background-color: #00d25b;
    }
    .btn-green{
        background-color: #00d25b;
        color: white;
    }
    button.bg-green{
        background-color: #00d25b;
        color: white;
    }
    .bg-green th{
        color: white !important;
    }
    tbody tr{
        color: white !important;
    }
</style>
@section('AdminContent')
    <div class="container mt-5 ">
        <h3>Users Table</h3>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="row justify-content-between" >
                    <div class="col-md-3" >
                        <div class="form-group" >
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
                                <button class="btn btn-success">
                                    <a href="{{ url('dashboard/admin/aboutprofile/add') }}" class="text-white">Add User</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-class" id="table-id">
            <thead class="bg-green">
                <tr>
                    <th>Profile id</th>
                    <th>About id</th>
                    <th>Bio</th>

                    <th>Country</th>
                    <th>Location</th>
                    <th>Profile Image</th>
                    <th>Banner Image</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutprofile as $item)
                    <tr>
                        <td>{{ $item->profile_id }}</td>
                        <td>{{ $item->about_id }}</td>
                        <td>{{ $item->bio }}</td>

                        <td>{{ $item->country }}</td>
                        <td>{{ $item->location }}</td>
                        <td>
                            <img src="{{ asset('dashboard_assets/images/' . $item->profile_img) }}" width="50px" height="50px">
                        </td>
                        <td>
                            <img src="{{ asset('dashboard_assets/images/' . $item->banner_img) }}" width="50px" height="50px" alt="">
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <!-- JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class="rows_count">Showing 11 to 20 of 91 entries</div>
    </div>
@endsection
