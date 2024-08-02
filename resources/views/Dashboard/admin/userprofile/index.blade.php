@extends('Layout.Dashboard_layout')


@section('AdminContent')
    <div class="container mt-5 ">
        <h3>Users Table</h3>
        <div class="header_wrap">
            <div class="num_rows">
                <div class="row justify-content-between" >
                    <div class="col-md-3" >
                        <div class="form-group" > <!--		Show Numbers Of Rows 		-->
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
                               
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <table class="table table-striped table-class"   id= "table-id">
            <thead class="bg-green ">
                <tr>


                    <th>First_Name</th>
                    <th>Profile id</th>




                </tr>
            </thead>
            <tbody>

@foreach ($userprofile as $item)
<tr class="">
    <td>{{ $item->firstname }}</td>
    <td>{{ $item->profile_id }}</td>


</tr>
@endforeach


            <tbody>
        </table>

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination">
                    <!--	Here the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>
        <div class="rows_count">Showing 11 to 20 of 91 entries</div>

    </div> <!-- 		End of Container -->


    </div>

    </div>
    </div>
@endsection
