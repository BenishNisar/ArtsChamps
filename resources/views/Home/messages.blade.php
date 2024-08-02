@extends('Layout.layout')
@section('ArtsChampsContent')

<div class="messenger">
    <div class="container-fluid newsfeed d-flex" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 message-right-side">
                <div class="row message-right-side-content">
                    <div class="col-md-12">
                        <div id="message-frame">
                            <div class="message-sidepanel">
                                <!-- Sidebar content here -->
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12 messenger-top-section">
                                        <div class="contact-profile d-flex align-items-center justify-content-between">
                                            <div class="messenger-top-luser df-aic">
                                                <img src="{{ asset('assets/users/user-6.png') }}" class="messenger-user" alt="Conversation user image" />
                                                <a href="#" class="message-profile-name"></a>
                                            </div>
                                            <div class="social-media messenger-top-ricon df-aic">
                                                <img src="{{ asset('assets/img/phone.png') }}" class="msg-top-more-info" alt="Messenger icons">
                                                <img src="{{ asset('assets/img/videocam.png') }}" class="msg-top-more-info" alt="Messenger icons">
                                                <img src="{{ asset('assets/img/info.png') }}" class="msg-top-more-info" alt="Messenger icons">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" style="max-height: 532px;">
                                        <div class="messages">
                                            <ul class="messages-content" id="messages-content">
                                                @forelse ($messages as $message)
                                                    <li class="message-receive">
                                                        <img src="{{ asset('assets/users/user-6.png') }}" alt="Conversation user image" />
                                                        <p><strong>From:</strong> {{ $message->sender_message }}</p>
                                                        <p><strong>Message:</strong> {{ $message->message_text }}</p>
                                                    </li>
                                                    <li class="message-reply">
                                                        <p><strong>To:</strong> {{ $message->rec_message }}</p>
                                                    </li>
                                                @empty
                                                    <p>No messages found.</p>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="message-input ">
                                            <div class="wrap">
                                                <form id="messageForm" action="{{ route('messages.store') }}" method="POST" class="d-inline form-inline">
                                                    @csrf
                                                    <div class="d-flex align-items-center justify-content-between messenger-icons">
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{ asset('assets/img/m-camera.png') }}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{ asset('assets/img/m-photo.png') }}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{ asset('assets/img/m-gamepad.png') }}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{ asset('assets/img/m-microphone.png') }}" alt="Messenger icons">
                                                        </button>
                                                        <div class="input-group messenger-input">
                                                            <input type="text" name="message_text" id="message_text" class="form-control search-input" placeholder="Type a message..." aria-label="Type a message..." aria-describedby="button-addon2" required>
                                                            <input type="hidden" name="receiver_id" value="1"> <!-- You can replace 1 with the actual receiver ID -->
                                                            <div class="input-group-append">
                                                                <button class="btn search-button" type="submit" id="button-addon2">
                                                                    <img src="{{ asset('assets/img/m-send.png') }}" alt="Messenger icons">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- New Conversation Modal -->
                            <div class="modal fade" id="newConversation" tabindex="-1" role="dialog" aria-labelledby="newConversationLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header new-msg-header">
                                            <h5 class="modal-title" id="newConversationLabel">Start new conversation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('messages.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="message_text">Message Text</label>
                                                    <input type="text" name="message_text" id="message_text" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="receiver_id">Receiver</label>
                                                    <select name="receiver_id" id="receiver_id" class="form-control" required>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Call Modal -->
                            <div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="callModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header new-msg-header">
                                            <h5 class="modal-title" id="callModalLabel">Call</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Calling functionality is not available at this moment.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Modals -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#messageForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    // Add new message to the message list
                    $('#messages-content').append(`
                        <li class="message-receive">
                            <img src="{{ asset('assets/users/user-6.png') }}" alt="Conversation user image" />
                            <p><strong>From:</strong> You</p>
                            <p><strong>Message:</strong> ${response.message_text}</p>
                        </li>
                        <li class="message-reply">
                            <p><strong>To:</strong> ${response.message_text}</p>
                        </li>
                    `);

                    // Clear the input field
                    $('#message_text').val('');
                }
            });
        });
    });
</script>
@endpush
