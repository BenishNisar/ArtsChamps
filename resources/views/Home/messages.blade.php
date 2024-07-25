@extends('Layout.layout')
@section('ArtsChampsContent')

<!-- Trigger Button -->



<div class="messenger">
    <div class="container-fluid newsfeed d-flex" id="wrapper">
        <div class="row newsfeed-size">
            <div class="col-md-12 message-right-side">

                <div class="row message-right-side-content">
                    <div class="col-md-12">
                        <div id="message-frame">
                            <div class="message-sidepanel">
                                <div class="message-profile">
                                    <div class="wrap">
                                        <img src="{{asset ('assets/users/profilelogo.png') }}" class="online conv-img" alt="Conversation user" />
                                        <p>Arthur Minasyan</p>
                                        <i class='bx bx-chevron-down expand-button'></i>
                                        <div id="status-options">
                                            <ul id="set-online-status">
                                                <li id="status-online" class="messenger-user-active"><span class="status-circle"></span>
                                                    <p>Online</p>
                                                </li>
                                                <li id="status-away"><span class="status-circle"></span>
                                                    <p>Away</p>
                                                </li>
                                                <li id="status-busy"><span class="status-circle"></span>
                                                    <p>Busy</p>
                                                </li>
                                                <li id="status-offline"><span class="status-circle"></span>
                                                    <p>Offline</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="expanded">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="text-dark fs-9"><i class='bx bx-search text-primary mr-3'></i> Search in Conversation</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="text-dark fs-9"><i class='bx bx-pencil text-primary mr-3'></i> Edit Nicknames</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="text-dark fs-9"><i class='bx bxs-color-fill text-primary mr-3'></i> Change Color</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a href="javascript:void(0)" class="text-dark fs-9"><i class='bx bx-bell text-primary mr-3'></i> Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="message-search position-relative d-flex">
                                    <label for=""><i class='bx bx-search'></i></label>
                                    <input type="text" class="form-control search-input" placeholder="Search for conversations..." />
                                    <button type="button" class="btn btn-create-conversation" data-toggle="modal" data-target="#newConversation"><i class='bx bx-pencil'></i></button>
                                </div>
                                <div class="message-contacts">
                                    <ul class="conversations">
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status online"></span>
                                                <img src="{{asset('assets/users/user-5.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">3</span>
                                                <div class="meta">
                                                    <p class="name">Ruth D. Greene</p>
                                                    <p class="preview">Great, I’ll see you tomorrow!.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact messenger-user-active">
                                            <div class="wrap">
                                                <span class="contact-status busy"></span>
                                                <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user" />
                                                <div class="meta">
                                                    <p class="name">Susan P. Jarvis</p>
                                                    <p class="preview">This party is going to have a DJ, food, and drinks.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status away"></span>
                                                <img src="{{asset('assets/users/user-7.png')}}" alt="Conversation user" />
                                                <div class="meta">
                                                    <p class="name">Kimberly R. Hatfield</p>
                                                    <p class="preview"><span>You:</span> Yeah, I will be there.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status online"></span>
                                                <img src="{{asset('assets/users/user-8.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">1</span>
                                                <div class="meta">
                                                    <p class="name">Joe S. Feeney</p>
                                                    <p class="preview">I would really like to bring my friend Jake, if that would be OK.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status busy"></span>
                                                <img src="{{asset('assets/users/user-9.png')}}" alt="Conversation user" />
                                                <div class="meta">
                                                    <p class="name">William S. Willmon</p>
                                                    <p class="preview"><span>You:</span> Sure, what can I help you with?</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status"></span>
                                                <img src="{{asset('assets/users/user-10.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">4</span>
                                                <div class="meta">
                                                    <p class="name">Sean S. Smith</p>
                                                    <p class="preview">Which of those two is best?</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status"></span>
                                                <img src="{{asset('assets/users/user-11.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">1</span>
                                                <div class="meta">
                                                    <p class="name">Michelle R. Alvarado</p>
                                                    <p class="preview">You'll need to make an appointment.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status busy"></span>
                                                <img src="{{asset('assets/users/user-12.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">2</span>
                                                <div class="meta">
                                                    <p class="name">Irwin M. Speller</p>
                                                    <p class="preview">Sure. Here you go.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status"></span>
                                                <img src="{{asset('assets/users/user-5.png')}}" alt="Conversation user" />
                                                <span class="unread-messages">1</span>
                                                <div class="meta">
                                                    <p class="name">Karen E. Nagata</p>
                                                    <p class="preview">Would you like to exchange it?</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="contact">
                                            <div class="wrap">
                                                <span class="contact-status"></span>
                                                <img src="{{asset('assets/users/user-8.png')}}" alt="Conversation user" />
                                                <div class="meta">
                                                    <p class="name">Jonathan Sidwell</p>
                                                    <p class="preview"><span>You:</span> Certainly. This will take only a few seconds.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12 messenger-top-section">
                                        <div class="contact-profile d-flex align-items-center justify-content-between">
                                            <div class="messenger-top-luser df-aic">
                                                <img src="{{asset('assets/users/user-6.png')}}" class="messenger-user" alt="Convarsation user image" />
                                                <a href="#" class="message-profile-name">Susan P. Jarvis</a>
                                            </div>
                                            <div class="social-media messenger-top-ricon df-aic">
                                                <img src="{{asset('assets/img/phone.png')}}" data-toggle="modal" data-target="#callModal" class="msg-top-more-info" alt="Messenger icons">
                                                <img src="{{asset('assets/img/videocam.png')}}" class="msg-top-more-info" alt="Messenger icons">
                                                <img src="{{asset('assets/img/info.png')}}" class="msg-top-more-info" alt="Messenger icons">
                                                <span class="dropdown">
                                                    <a href="#" role="button" id="message-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class='bx bx-dots-vertical-rounded'></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right fs-9" aria-labelledby="message-options">
                                                        <a href="#" class="dropdown-item">Mute</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">Delete</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">Mark as Unread</a>
                                                        <a href="#" class="dropdown-item">Something's wrong</a>
                                                        <a href="#" class="dropdown-item">Ignore Messages</a>
                                                        <a href="#" class="dropdown-item">Block Messages</a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="max-height: 532px;">
                                        <div class="messages">
                                            <ul class="messages-content">
                                                <li class="message-receive">
                                                    <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user image" />
                                                    <p>Are you going to the party on Saturday?</p>
                                                </li>
                                                <li class="message-reply">
                                                    <p>I was thinking about it. Are you?</p>
                                                </li>
                                                <li class="message-receive">
                                                    <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user image" />
                                                    <p>Yeah, I heard it's going to be a lot of fun.</p>
                                                </li>
                                                <li class="message-reply">
                                                    <p>Really? Well, what time does it start?</p>
                                                </li>
                                                <li class="message-receive">
                                                    <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user image" />
                                                    <p>It starts at 8:00 pm, and I really think you should go.</p>
                                                </li>
                                                <li class="message-reply">
                                                    <p>Well, who else is going to be there?</p>
                                                </li>
                                                <li class="message-receive">
                                                    <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user image" />
                                                    <p>Everybody from school.</p>
                                                </li>
                                                <li class="message-reply">
                                                    <p>How do you know it's going to be so fun?</p>
                                                </li>
                                                <li class="message-receive">
                                                    <img src="{{asset('assets/users/user-6.png')}}" alt="Conversation user image" />
                                                    <p>This party is going to have a DJ, food, and drinks.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="message-input">
                                            <div class="wrap">
                                                <form class="d-inline form-inline">
                                                    <div class="d-flex align-items-center justify-content-between messenger-icons">
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{asset('assets/img/m-camera.png')}}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{asset('assets/img/m-photo.png')}}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{asset('assets/img/m-gamepad.png')}}" alt="Messenger icons">
                                                        </button>
                                                        <button type="button" class="btn search-button">
                                                            <img src="{{asset('assets/img/m-microphone.png')}}" alt="Messenger icons">
                                                        </button>
                                                        <div class="input-group messenger-input">
                                                            <input type="text" class="form-control search-input" placeholder="Type a message..." aria-label="Type a message..." aria-describedby="button-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn search-button" type="button" id="button-addon2 send-message">
                                                                    <img src="{{asset('assets/img//m-smile.png')}}" alt="Messenger icons">
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn search-button" id="send-message">
                                                            <img src="{{asset('assets/img/m-send.png')}}" alt="Messenger icons">
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="modal-body new-msg-body">
                    <form action="" method="" class="new-msg-form">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control search-input" id="recipient-name" placeholder="Add recipient...">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control search-input" rows="5" id="message-text" placeholder="Type a message..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer new-msg-footer">
                    <button type="button" class="btn btn-primary btn-sm">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Call modal -->
    <div id="callModal" class="modal fade call-modal" tabindex="-1" role="dialog" aria-labelledby="callModalLabel" aria-hidden="true">
        <div class="modal-dialog call-modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <div class="call-status">
                        <h1 id="callModalLabel" class="modal-title mr-3">Connected</h1>
                        <span class="online-status bg-success"></span>
                    </div>
                    <div class="modal-options d-flex align-items-center">
                        <button type="button" class="btn btn-quick-link" id="minimize-call-window">
                            <i class='bx bx-minus'></i>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row h-100">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <div class="call-user text-center">
                                <div class="call-user-img-anim">
                                    <img src="{{asset('assets/img/user-1.jpg')}}" class="call-user-img" alt="Call user image">
                                </div>
                                <p class="call-user-name">Name Surename</p>
                                <p class="text-muted call-time">05:28</p>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4 d-flex align-items-center justify-content-between call-btn-list">
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Disable microphone"><i class='bx bxs-microphone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Enable camera"><i class='bx bxs-video-off'></i></a>
                            <a href="#" class="btn call-btn drop-call" data-toggle="tooltip" data-placement="top" data-title="End call"><i class='bx bxs-phone'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Share Screen"><i class='bx bx-laptop'></i></a>
                            <a href="#" class="btn call-btn" data-toggle="tooltip" data-placement="top" data-title="Dark mode"><i class='bx bx-moon'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END call modal -->



</div>

@endsection
