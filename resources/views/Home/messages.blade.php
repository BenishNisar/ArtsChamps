@extends('Layout.layout')

<style>
    .messenger {
        display: flex;
        flex-direction: column;
        height: 100vh;
        background-color: #f0f2f5;
    }

    .header {
        background-color: #fff;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .contact-profile {
        display: flex;
        align-items: center;
    }

    .profile-picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .contact-details {
        display: flex;
        flex-direction: column;
    }

    .contact-name {
        font-size: 16px;
        font-weight: bold;
    }

    .header-icons .header-icon {
        width: 24px;
        height: 24px;
        margin-left: 10px;
        cursor: pointer;
    }


    .messages {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        background-color: #e5ddd5;
    }

    .message-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .message-profile-picture {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .message-content {
        flex: 1;
    }

    .message-text {
        margin: 0;
        font-size: 14px;
        color: #333;
    }

    .message-time {
        font-size: 12px;
        color: #999;
    }

    .message-input {
        background-color: #fff;
        padding: 10px;
        box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.1);
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .form-control {
        flex: 1;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 10px;
        margin-right: 10px;
    }

    .send-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .send-button img {
        width: 24px;
        height: 24px;
    }
</style>

@section('ArtsChampsContent')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a style="text-decoration: none;" href="">
            <div style="background-color: white; padding: 20px;">
                @forelse ($messages as $message)
                    <div class="contact-profile mt-2">
                        <img src="{{ asset($message->profile_img) }}" alt="Profile Picture" class="profile-picture">
                        <div>
                            <span style="font-weight: bold; font-size: 16px;">{{ $message->firstname }} {{ $message->lastname }}</span>
                            <p class="message-text">{{ $message->message_text }}</p>
                            <p class="message-time">{{ \Carbon\Carbon::parse($message->created_at)->format('H:i') }}</p>
                        </div>
                    </div>
                @empty
                    <p>No messages found.</p>
                @endforelse
            </div>
        </a>
        </div>

        <div class="col-md-6">
            <div class="messenger">
                <div class="header">
                    <div class="contact-profile">
                        <img src="{{ asset(Auth::user()->profile_img) }}" alt="Profile Picture" class="profile-picture">
                        <div class="contact-details">
                            <span class="contact-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                        </div>
                        <div class="header-icons"  style="margin-left:260px">
                            <img src="{{ asset('assets/img/phone.png') }}" alt="Call" class="header-icon ml-auto">

                            <img src="{{ asset('assets/img/videocam.png') }}" alt="Video Call" class="header-icon">
                            <img src="{{ asset('assets/img/info.png') }}" alt="Info" class="header-icon">
                        </div>
                    </div>
                </div>
                <div class="messages">
                    <ul id="messages-content">
                        @forelse ($messages as $message)
                            <li class="message-item">
                                <img src="{{ asset($message->profile_img) }}" alt="Profile Picture" class="message-profile-picture">
                                <div class="message-content">
                                    <p class="message-text">{{ $message->message_text }}</p>
                                    <p class="message-time">{{ $message->created_at->format('H:i') }}</p>
                                </div>
                            </li>
                        @empty
                            <p>No messages found.</p>
                        @endforelse
                    </ul>
                </div>
                <div class="message-input">
                    <form id="messageForm" action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="message_text" id="message_text" class="form-control" placeholder="Type a message..." required>
                            <input type="hidden" name="receiver_id" value="1"> <!-- Replace 1 with actual receiver ID -->
                            <button type="submit" class="btn send-button">
                                <img src="{{ asset('assets/img/m-send.png') }}" alt="Send">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
