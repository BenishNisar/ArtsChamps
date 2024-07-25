@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/usersnotification/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Notification</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/usersnotification/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="type" class="form-label">Notification Id</label>
                            <input type="number" class="form-control" id="type" name="type" placeholder="Enter the type" required>
                            <div class="invalid-feedback">
                                Valid type is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Users Id</label>
                            <input type="number" class="form-control" id="message" name="message" placeholder="Enter the message" required>
                            <div class="invalid-feedback">
                                Valid message is required.
                            </div>
                        </div>




                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
