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
        <p><strong>Followers:</strong> {{ $user->followers_count }}</p>
        <p><strong>Following:</strong> {{ $user->following_count }}</p>
        <p><strong>Friends:</strong> {{ $user->friends_count }}</p>
    </div>


            </div>

            <div class="col-md-4 mt-5">
                <button class="btn btn-icon" style="background-color: #d8dadf; color: black;">
                    <i class="fa fa-user-plus text-dark"></i> Following
                </button>
                <button class="btn btn-icon" style="background-color: #d8dadf; color: black;">
                    <i class="fa fa-envelope"></i> Message
                </button>
                <button class="btn btn-icon" style="background-color: #d8dadf; color: ;">
                    <i class="fa fa-search"></i> Search
                </button>
            </div>



<hr class="mt-3" style="color:black;">

<div class="col-md-6">
    <div class="nav-links" >
        <a href=""><span>Post</span></a>
        <a href=""><span>About</span></a>

        <a href=""><span>Gallery</span></a>
        <a href=""><span>Videos</span></a>
    </div>
</div>




        </div>
    </div >
    </header>

    <div class="row " >
        <!-- About Section -->
        <div class="col-md-4" >
            <section class="about"style="margin-top: 110px;" >
                <h5 class="mb-3 card-title">About <small><a href="#" class="ml-1" data-toggle="modal" data-target="#editModal"></a></small></h5>
                <p class="card-text"><i class="fas fa-calendar-week mr-2"></i> Went to <a href="#" class="text-decoration-none">{{ $about[0]->work ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-user-friends mr-2"></i> Become a friend with <a href="#" class="text-decoration-none">{{ $about[0]->art_style ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-home mr-2"></i> Live in <a href="#" class="text-decoration-none">{{ $about[0]->live ?? 'No Bio available' }}</a></p>
                <p class="card-text"><i class="fas fa-map-marker mr-2"></i> From <a href="#" class="text-decoration-none">{{ $about[0]->location ?? 'No Bio available' }}</a></p>
            </section>
        </div>

        <!-- Posts Section -->
        <div class="col-md-8">
            <section class="posts">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Recent Posts</h2>
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
                                                    <p> {{ $post->content }}</p>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mt-3">
                                                    <div class="d-flex">
                                                        {{-- <a href="javascript:void(0)" id="likebtn" data-id="{{ $post->post_id }}" data-lstatus="{{ $post->lstatus }}" class="post-card-buttons">
                                                            <i class='bx bxs-like mr-2 @if ($post->lstatus == 1) text-dark fw-bold @else text-primary @endif'></i> Like
                                                        </a> --}}
                                                        <a href="javascript:void(0)" id="commentbtn" data-id="{{ $post->post_id }}" class="post-card-buttons ml-3">
                                                            <i class='bx bx-message-rounded mr-2'></i> Comment
                                                        </a>

                                                        <div class="dropdown dropup share-dropup ml-3">
                                                            <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                                                        <div class="dropdown dropup billing-dropup ml-3">
                                                            <a href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </div>
</div>

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
</script>
</body>
</html>
