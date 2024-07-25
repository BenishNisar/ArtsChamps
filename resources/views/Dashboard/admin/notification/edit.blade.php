@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/notification/index')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Notification</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/notification/update') }}/{{ $notification->notification_id }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type"  value="{{ $notification->type }}" placeholder="Enter the type" required>
                            <div class="invalid-feedback">
                                Valid type is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input type="text" class="form-control" id="message" name="message"  value="{{ $notification->message }}" placeholder="Enter the message" required>
                            <div class="invalid-feedback">
                                Valid message is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="is_read" class="form-label">Is Read</label>
                            <input type="text" class="form-control" id="is_read" name="is_read"  value="{{ $notification->isread }}" placeholder="Enter if read" required>
                            <div class="invalid-feedback">
                                Valid read status is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Created At</label>
                            <input type="date" class="form-control" id="created_at" name="created_at"  value="{{ $notification->created_at }}" placeholder="Enter created at date" required>
                            <div class="invalid-feedback">
                                Valid date is required.
                            </div>
                        </div>



                        </div>
                        <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br><br>

@endsection
