@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/messages/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Messages</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/messages/store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="user_id" class="form-label">User ID</label>
                            <select name="user_id" id="user_id" class="form-control" required>
                                <option value="">Select User</option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid user ID is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input type="text" class="form-control" id="message" name="message" placeholder="Enter the message" required>
                            <div class="invalid-feedback">
                                Valid message is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" class="form-control" id="created_at" name="created_at" required>
                            <div class="invalid-feedback">
                                Valid date is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="recipient" class="form-label">Recipient</label>
                            <input type="text" class="form-control" id="recipient" name="recipient" placeholder="Enter recipient" required>
                            <div class="invalid-feedback">
                                Valid recipient is required.
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
