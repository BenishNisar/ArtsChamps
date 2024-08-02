@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('messages.index') }}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Messages</h5>
                </div>

                <form action="{{ route('messages.update', $message->message_id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            <option value="">Select User</option>
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $message->user_id ? 'selected' : '' }}>
                                    {{ $item->firstname }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Valid user ID is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="sender_message" class="form-label">Sender Message</label>
                        <input type="text" class="form-control" value="{{ $message->sender_message }}"
                        id="sender_message" name="sender_message" placeholder="Enter the message" required>
                        <div class="invalid-feedback">
                            Valid message is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message_text" class="form-label">Message Text</label>
                        <input type="text" class="form-control" id="message_text" name="message_text"  value="{{ $message->message_text }}"  placeholder="Enter recipient" required>
                        <div class="invalid-feedback">
                            Valid recipient is required.
                        </div>
                    </div>

                    <button class="btn btn-success mt-3 w-100" name="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
<br><br>

@endsection
