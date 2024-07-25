@extends('Layout.Dashboard_layout')

@section('AdminContent')
<br>
<div class="container mt-5">
    <h3>Social Media Table</h3>


        <div class="header_wrap">
            <div class="num_rows">
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <div class="form-group"> <!--		Show Numbers Of Rows 		-->
                            <select class  ="form-control" name="state" id="maxRows">

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
                                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                                class="form-control">
                                <button class="btn  btn-success"><a style="text-decoration: none;" href="{{url('dashboard/admin/socialmedia/add')}}" class="text-white">Add Role</a></button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    <!-- Existing HTML for search and pagination -->

    @if (session()->has('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session()->get('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-striped table-class" id="table-id">
        <thead class="bg-green">
            <tr>
                <th>Social ID</th>
                <th>User ID</th>
                <th>Social Name</th>
                <th>Social Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($social as $item)
            <tr>
                <td>{{ $item->social_id }}</td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->social_name }}</td>
                <td>{{ $item->social_link }}</td>
                <td>
                    <a href="{{ url('/dashboard/admin/socialmedia/edit') }}/{{ $item->social_id }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/dashboard/admin/socialmedia/delete') }}/{{ $item->social_id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Existing pagination and row count HTML -->
</div>
@endsection
