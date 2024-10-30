<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body{
            background-color: #ffff;

        }
        .profile-banner { height: 200px; object-fit: cover; width: 100%; }
        .profile-picture { width: 150px; height: 150px; border-radius: 50%; border: 5px solid white; object-fit: cover; }
        .profile-header { position: relative; padding-top: 100px; padding-bottom: 20px; color: white; background-color: #f8f9fa; }
        .profile-info { padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .btn-primary { background-color: #4267B2; border-color: #4267B2; }
        .btn-primary:hover { background-color: #365899; border-color: #365899; }
        .post { background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; }
        .post-header { display: flex; align-items: center; margin-bottom: 15px; }
        .post-header img { width: 50px; height: 50px; border-radius: 10%; margin-right: 10px; }
        .post-header .post-info { flex-grow: 1; }
        .post-header .post-info .name { font-weight: bold; }
        .post-header .post-info .date { color: #777; }
        .post-content img { max-width: 100%; height: auto; margin-top: 10px; border-radius: 10px; }
        .post-content { margin-top: 15px; }
        .profile-stats { display: flex; gap: 20px; }
        .profile-stats p { margin: 0; }
        .profile-information h1 {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
}

.profile-stats {
    margin-top: 0px;
}

.profile-stats p {
    margin: 5px 0;
}
.nav-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-left:-200px;
}

.nav-links a {
    text-decoration: none;
    color: #636568;
    font-size: 16px;
}

.nav-links span {
    font-weight: bold;
}

.chat-window {
            display: none;
            position: fixed;
            bottom: 0;
            z-index: 10;
            right: 20px;
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .chat-header {
            background-color: white;
            color: black;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chat-body {
            padding: 10px;
        }

        .chat-body .messages {
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 10px;
        }

        .chat-body input[type="text"] {
            width: calc(100% - 60px);
            padding: 5px;
            margin-right: 5px;
        }

        .chat-body button {
            padding: 5px 10px;
        }

        .chat-footer {
            display: flex;
            align-items: center;
            padding: 10px;
            border-top: 1px solid #ccc;
            background-color: #f8f9fa;
            position: fixed;
            bottom: 0px;
                }

        .chat-footer input[type="text"] {
            flex: 1;
            padding: 5px;
            margin-right: 5px;
        }

        .chat-footer button {
            padding: 5px 10px;
        }


        .text-center {
            text-align: center;
        }
        .messagepro {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
        .searchpro {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .col-md-2 span {
            display: block;
            margin-top: 5px;
            font-size: 14px;
        }
        .messg-picture{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        /* sect */

        .section {
            display: none; /* Hide all sections by default */
        }
        .section.active {
            display: block; /* Show the active section */
        }


    </style>
</head>
<body>
<div class="container">
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="row">
               <!-- Banner and Profile Picture Section -->

    <div class="profile-banner col-md-12">
        <img src="{{ asset($user->banner_img) }}" alt="Banner Image" class="profile-banner">



</div>

<div class="col-md-2">
    <img src="{{ asset($user->profile_img) }}" alt="Profile Image" class="profile-picture">

</div>
<div class="col-md-6  mt-5"  >
    <div class="profile-information" >
        <h1  >{{ $user->firstname }} {{ $user->lastname }}</h1>
    </div>

    <div class="profile-stats" >
        {{-- <p><strong>Followers:</strong> {{$followersCount }}</p> --}}
    {{-- <p><strong>Following:</strong> {{ $followingCount }}</p> --}}

        <p><strong>Friends:</strong> {{ $user->friends_count }}</p>
    </div>


            </div>




            <div class="col-md-4 mt-5">
                @if (Auth::check())
                    @php
                        $userId = Auth::id();
                        $isFollowing = DB::table('follows')
                            ->where('user_id', $userId)
                            ->where('followed_id', $user->id)
                            ->exists();
                    @endphp

                    <div class="d-flex justify-content-between align-items-center">
                        @if ($isFollowing)
                            <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="POST" class="mr-2">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-icon" style="background-color: #d8dadf; color: black;">
                                    <i class="fa fa-user-minus text-dark"></i> Unfollow
                                </button>
                            </form>
                        @else
                            <form action="{{ route('follow', ['id' => $user->id]) }}" method="POST" class="mr-2">
                                @csrf
                                <button class="btn btn-icon" style="background-color: #0861f2; color: white;">
                                    <i class="fa fa-user-plus text-light"></i> Follow
                                </button>
                            </form>
                        @endif

                        <button id="messageButton" class="btn btn-icon" style="background-color: #d8dadf; color: black;" onclick="openMessagePage()">
                            <i class="fa fa-message"></i> Message
                        </button>

                     {{-- chatwindow --}}
                     <div id="chatWindow" class="chat-window">
                        <div class="chat-header">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset($user->profile_img) }}" alt="Profile Image" class="messg-picture">
                                <span style="margin-left:7px;">{{ $user->firstname }} {{ $user->lastname }}</span>
                            </div>
                            <button class="btn btn-light btn-sm" style="color: #0a82f2;" onclick="closeMessagePage()">x</button>
                        </div>
                        <div class="chat-body">
                            <div class="messages" id="messages">
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset($user->profile_img) }}" alt="Profile Image" class="messagepro mx-auto d-block">
                                    <span>{{ $user->firstname }} {{ $user->lastname }}</span>
                                </div>
                                <!-- Messages will be appended here -->
                            </div>
                        </div>


                        <footer class="footer">
                            <div class="chat-footer">
                                <input type="text" name="message_text" id="message_text" class="form-control search-input" placeholder="Type a message..." aria-label="Type a message..." aria-describedby="button-addon2" required>
                                <input type="hidden" name="receiver_id" value="1"> <!-- Replace 1 with actual receiver ID -->
                                <div class="input-group-append">
                                    <button class="btn search-button" type="submit" id="button-addon2" onclick="sendMessage()">
                                        <img src="{{ asset('assets/img/m-send.png') }}" alt="Messenger icons">
                                    </button>
                                </div>
                            </div>
                        </footer>
                        </div>

                        <script>
                        function openMessagePage() {
                            window.location.href = 'http://127.0.0.1:8000/Home/messages';
                        }
                        </script>




{{-- search --}}
<button class="btn btn-icon" style="background-color: #d8dadf; color: black;" data-toggle="modal" data-target="#searchModal">
    <i class="fa fa-search"></i> Search
</button>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" style="margin-top:100px;" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <input  style="border-radius: 60px;background-color:#f0f2f5;" type="text" class="form-control" id="searchInput"
                placeholder="Search in.{{ $user->firstname }}. {{ $user->lastname }}. posts,photos,and tags">

                <button type="button" style="margin-left:3px;border:none;   width:45px;height:45px;border-radius:50%;font-size:30px;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="search" id="search">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset($user->profile_img) }}" alt="Profile Image" class="searchpro mx-auto d-block">
                        <h6 class="mt-3" style="color: black;">Looking For Something?</h6>
                        <span style="font-size:15px; ">Search {{ $user->firstname }}. {{ $user->lastname }} for posts, photos and other visible activity.</span>
                    </div>
                    <!-- Messages will be appended here -->
                </div>
            </div>
        </div>
    </div>
</div>



                    </div>
                @else
                    <p>Please <a href="{{ route('login') }}">login</a> to follow users.</p>
                @endif
            </div>




<hr class="mt-3" style="color:black;">

<div class="col-md-6">
    <div class="nav-links" >
        <a href="#" class="nav-link" data-target="posts"><span>Post</span></a>

        <a href="#" class="nav-link" data-target="about"><span>About</span></a>


        <a href="#" class="nav-link" data-target="gallery"><span>Gallery</span></a>

        <a href=""><span>Videos</span></a>
    </div>
</div>




        </div>
    </div >
    </header>

    <div class="row" >
        <!-- About Section -->
        <section class="section about">
        <div class="col-md-4" >
            <section class="about mt-3" >
                <h5 class="mb-3 card-title">About <small><a href="#" class="ml-1" data-toggle="modal" data-target="#editModal"></a></small></h5>
                <p class="card-text"><i class="fas fa-calendar-week mr-2"></i> Went to <a href="#" class="text-decoration-none">{{ $about[0]->work ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-user-friends mr-2"></i> Become a friend with <a href="#" class="text-decoration-none">{{ $about[0]->art_style ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-home mr-2"></i> Live in <a href="#" class="text-decoration-none">{{ $about[0]->live ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-map-marker mr-2"></i> From <a href="#" class="text-decoration-none">{{ $about[0]->location ?? 'No Bio available' }}</a></p>
            </section>
        </div>
    </section>

        <!-- Posts Section -->
        <section class="section posts">
            <div class="col-md-8">
                <section class="posts">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Recent Posts</h2>
                                @if(empty($posts) || count($posts) === 0)
                                <p>No posts available.</p>
                                @else
                                    @foreach($posts as $post)
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="posts-section mb-5">
                                                    <div class="post border-bottom p-3 bg-white w-shadow">
                                                        <div class="media text-muted pt-3">
                                                            <div class="media-body pb-3 mb-0 small lh-125">
                                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                                    <a href="#" class="text-gray-dark post-user-name">{{ $user->firstname }}</a>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                                                            <i class='bx bx-dots-horizontal-rounded'></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left post-dropdown-menu" style="width: 300px">
                                                                            <a href="#" class="dropdown-item">
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <i class='bx bx-bookmark-plus post-option-icon'></i>
                                                                                    </div>
                                                                                    <div class="col-md-10">
                                                                                        <span class="fs-9">Save post</span>
                                                                                        <small class="form-text text-muted">Add this to your saved items</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item">
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <i class='bx bx-hide post-option-icon'></i>
                                                                                    </div>
                                                                                    <div class="col-md-10">
                                                                                        <span class="fs-9">Hide post</span>
                                                                                        <small class="form-text text-muted">See fewer posts like this</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item">
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <i class='bx bx-time post-option-icon'></i>
                                                                                    </div>
                                                                                    <div class="col-md-10">
                                                                                        <span class="fs-9">Snooze for 30 days</span>
                                                                                        <small class="form-text text-muted">Temporarily stop seeing posts</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#" class="dropdown-item">
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <i class='bx bx-block post-option-icon'></i>
                                                                                    </div>
                                                                                    <div class="col-md-10">
                                                                                        <span class="fs-9">Report</span>
                                                                                        <small class="form-text text-muted">I'm concerned about this post</small>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span class="d-block"> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y, H:i') }} <i class='bx bx-globe ml-3'></i></span>
                                                                @if ($post->post_img)
                                                                    <img src="{{ asset($post->post_img) }}" alt="Post Image" width="400px" height="400px" class="mr-3 post-user-image">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <p>{{ $post->content }}</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                                            <div class="d-flex gap-3">
                                                                <a style="text-decoration: none" href="javascript:void(0)" id="commentbtn" data-id="{{ $post->post_id }}" class="post-card-buttons">
                                                                    <i class='bx bx-message-rounded mr-2'></i> Comment
                                                                </a>
                                                                <div class="dropdown dropup share-dropup">
                                                                    <a style="text-decoration: none" href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class='bx bx-share-alt mr-2'></i> Share
                                                                    </a>
                                                                    <div class="dropdown-menu post-dropdown-menu">
                                                                        <a href="#" class="dropdown-item">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <i class='bx bx-share-alt'></i>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <span>Share Now (Public)</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#" class="dropdown-item">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <i class='bx bx-share-alt'></i>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <span>Share...</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#" class="dropdown-item">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <i class='bx bx-message'></i>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <span>Send as Message</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown dropup billing-dropup">
                                                                    <a style="text-decoration: none" href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class='bx bx-money mr-2'></i> Billing
                                                                    </a>
                                                                    <div class="dropdown-menu post-dropdown-menu">
                                                                        <a href="#" class="dropdown-item">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <i class='bx bx-dollar'></i>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <span>Buy Art</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <a href="#" class="dropdown-item">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <i class='bx bx-money'></i>
                                                                                </div>
                                                                                <div class="col-md-10">
                                                                                    <span>Billing Details</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border-top pt-3 hide-comments" id="commentsesction" style="display: none;">
                                                            <div class="row bootstrap snippets">
                                                                <div class="col-md-12">
                                                                    <div class="comment-wrapper">
                                                                        <div class="panel panel-info">
                                                                            <div class="panel-body">
                                                                                <ul class="media-list comments-list">
                                                                                    <li class="media comment-form">
                                                                                        <a href="#" class="pull-left">
                                                                                            <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="" class="img-circle">
                                                                                        </a>
                                                                                        <div class="media-body">
                                                                                            <form action="" method="" role="form">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="input-group">
                                                                                                            <input type="text" class="form-control comment-input" placeholder="Write a comment...">
                                                                                                            <div class="input-group-btn">
                                                                                                                <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Emoji"><i class='bx bxs-smiley-happy'></i></button>
                                                                                                                <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach Image"><i class='bx bx-camera'></i></button>
                                                                                                                <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Record Audio"><i class='bx bx-microphone'></i></button>
                                                                                                                <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach File"><i class='bx bx-file-blank'></i></button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </li>
                                                                                    <br>
                                                                                    <div id="commentsection-inner">
                                                                                        <!-- Additional comments can be added here -->
                                                                                    </div>
                                                                                </ul>
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
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>






        <section class="section gallery">
            <div class="row" id="gallery">
                @if(empty($gallery) || count($gallery) === 0)
                    <p>No Gallery available.</p>
                @else
                    @foreach ($gallery as $image)
                        <div class="col-6 p-1">
                            <a href="{{ asset('assets/gallery/' . $image->gallery_img) }}" data-lightbox="gallery">
                                <img src="{{ asset('assets/gallery/' . $image->gallery_img) }}" alt="img" class="img-fluid my-2">
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>






    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#addFriend').click(function() {
            var userId = $(this).data('user-id');

            $.ajax({
                url: '{{ route("friend.add", ":id") }}'.replace(':id', userId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        $('#addFriend').text('Follow');
                        $('#addFriend').removeClass('btn-primary').addClass('btn-outline-info');
                    }
                }
            });
        });
    });


    // Message
    function openMessagePage() {
            document.getElementById('chatWindow').style.display = 'block';
            document.getElementById('messageButton').style.backgroundColor = '#0a82f2';
            document.getElementById('messageButton').style.color = 'white';
        }

        function closeMessagePage() {
            document.getElementById('chatWindow').style.display = 'none';
        }

        function sendMessage() {
            var input = document.getElementById('message_text');
            var message = input.value;
            if (message.trim() !== '') {
                var messageContainer = document.getElementById('messages');
                var newMessage = document.createElement('div');
                newMessage.textContent = message;
                messageContainer.appendChild(newMessage);
                input.value = '';
                messageContainer.scrollTop = messageContainer.scrollHeight; // Scroll to the bottom
            }
        }
        // section
        $(document).ready(function() {
            $('.nav-link').click(function(e) {
                e.preventDefault();
                var target = $(this).data('target');

                // Hide all sections
                $('.section').removeClass('active');

                // Show the target section
                $('.' + target).addClass('active');
            });
        });
</script>
</body>
</html>
