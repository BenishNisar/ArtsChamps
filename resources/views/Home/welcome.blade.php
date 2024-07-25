

@extends('Layout.layout')

@section('ArtsChampsContent')

 <!---------------------------MOdal Section  satrts------------------->

 <div class="modal fade" id="modalview">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">

        <div class="modal-content">


            <div class="modal-header">
                <div class="modal-title h4">Messages</div>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">


                <ul class="list-unstyled">


                 <a href="#" class="text-decoration-none">
                    <li class="media hover-media">

                            <img src="{{asset('assets/img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                            </div>

                    </li>
                </a>
                <hr class="my-3">



                <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                                <img src="{{asset('assets/img/avatar-fat.jpg')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                        <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                        </li>
                    </a>


                    <hr class="my-3">


                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                                <img src="{{asset('assets/img/avatar-mdo.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                <div class="media-body text-dark">
                                        <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                </div>

                        </li>
                    </a>

                    <hr class="my-3">


                    <a href="#" class="text-decoration-none">
                            <li class="media hover-media">

                                    <img src="{{asset('assets/img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                    <div class="media-body text-dark">
                                            <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                            <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    </div>

                            </li>
                        </a>
                        <hr class="my-3">



                        <a href="#" class="text-decoration-none">
                                <li class="media hover-media">

                                        <img src="{{asset('assets/img/avatar-fat.jpg')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                        <div class="media-body text-dark">
                                                <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                        </div>

                                </li>
                            </a>


                            <hr class="my-3">


                            <a href="#" class="text-decoration-none">
                                <li class="media hover-media">

                                        <img src="{{asset('assets/img/avatar-mdo.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                        <div class="media-body text-dark">
                                                <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                        </div>

                                </li>
                            </a>


                            <hr class="my-3">
                            <a href="#" class="text-decoration-none">
                                    <li class="media hover-media">

                                            <img src="{{asset('assets/img/avatar-dhg.png')}}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                            <div class="media-body text-dark">
                                                    <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                                    <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                            </div>

                                    </li>
                                </a>
                                <hr class="my-3">



                                <a href="#" class="text-decoration-none">
                                        <li class="media hover-media">

                                                <img src="img/avatar-fat.jpg" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                                <div class="media-body text-dark">
                                                        <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                                </div>

                                        </li>
                                    </a>


                                    <hr class="my-3">


                                    <a href="#" class="text-decoration-none">
                                        <li class="media hover-media">

                                                <img src="img/avatar-mdo.png" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                                                <div class="media-body text-dark">
                                                        <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                                        <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                                </div>

                                        </li>
                                    </a>




                </ul>





            </div>
        </div>


    </div>


</div>

<!-------------------------------MOdal Ends---------------------------->



<!-------------------------------------------Start Grids layout for lg-xl-3 columns and (xs-lg 1 columns)--------------------------------->


<div class="container">
    <div class="row">


        <!--------------------------left columns  start-->

        <div class="col-12 col-lg-3">

            <div class="left-column">



                <div class="card card-left1 mb-4" >
                    <img src="{{asset('assets/img/Artsbanner.png')}}" alt="" class="card-img-top img-fluid">
                    <div class="card-body text-center ">
                        <img src="{{asset('assets/img/profilelogo.png')}}" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                        <h5 class="card-title">{{ Auth::user()->firstname }}{{ Auth::user()->lastname }}</h5>
                        <p class="card-text text-center mb-2">  {{ $about ? $about->bio : 'No bio available' }}</p>
                        <ul class="list-unstyled nav justify-content-center">
                           <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Friends <br> <strong>12M</strong></li></a>
                          <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Enimes <br> <strong>1</strong></li></a>
                        </ul>

                    </div>




                </div>


 <div class="card shadow-sm card-left2 mb-4">

                    <div class="card-body">

                          <!-- Button to trigger modal -->
<a href="#" class="ml-1 mb-2" data-toggle="modal" data-target="#editModal">Edit</a>

<!-- Modal Structure -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Bio Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="work">Work</label>
                        <input type="text" class="form-control" id="work" name="work" value="{{ $about ? $about->work : 'No Bio available' }}">
                    </div>
                    <div class="form-group">
                        <label for="art_style">Art Style</label>
                        <input type="text" class="form-control" id="art_style" name="art_style" value="{{ $about ? $about->art_style : 'No Bio available' }}">
                    </div>
                    <div class="form-group">
                        <label for="live">Live</label>
                        <input type="text" class="form-control" id="live" name="live" value="{{ $about ? $about->live : 'No Bio available' }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $about ? $about->location : 'No Bio available' }}">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" value="{{ $about ? $about->bio : 'No Bio available' }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>



        </div>
    </div>
</div>

</div>
</div>




                <div class="card shadow-sm card-left3 mb-4">

                    <div class="card-body">
                        <h5 class="card-title">Photos<small class="ml-2"><a href="#">.Edit </a></small></h5>

                        <div class="row">
                            <div class="col-6 p-1">
                                <a href="#" data-lightbox="id" ><img src="{{asset('assets/img/left1.jpg')}}" alt="img" class="img-fluid my-2"></a>
                                <a href="#"data-lightbox="id"><img src="{{asset('assets/img/left2.jpg')}}" alt="img" class="img-fluid my-2"></a>
                                <a href="#"data-lightbox="id"><img src="{{asset('assets/img/left3.jpg')}}" alt="img" class="img-fluid my-2"></a>

                            </div>


                            <div class="col-6 p-1">
                                    <a href="#"data-lightbox="id"><img src="{{asset('assets/img/left4.jpg')}}" alt="img" class="img-fluid my-2"></a>
                                    <a href="#"data-lightbox="id"><img src="{{asset('assets/img/left5.jpg')}}" alt="img" class="img-fluid my-2"></a>
                                    <a href="#"data-lightbox="id"><img src="{{asset('assets/img/left6.jpg')}}" alt="img" class="img-fluid my-2"></a>

                                </div>

                        </div>

                    </div>







                    </div>












            </div>





        </div>








<!--------------------------Ends Left columns-->





<!---------------------------------------Middle columns  start---------------->




        <div class="col-12 col-lg-6" >


            <div class="middle-column">


                <div class="card" >


                    <div class="card-header bg-transparent">
                        <div class="container mt-4">
                            <!-- Post Form -->
                            <form action="{{ url('/post/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <ul class="list-unstyled" style="margin-bottom: 0;">
                                    <li class="media post-form w-shadow">
                                        <div class="media-body">
                                            <div class="form-group post-input">
                                                <textarea class="form-control" id="postForm" rows="4" cols="55" name="content"
                                                    placeholder="What's on your mind?">{{ old('content', $post->content ?? 'No information available') }}</textarea>
                                            </div>
                                            <div class="row post-form-group">
                                                <div class="col-md-12 d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <label class="btn btn-link post-form-btn btn-sm" for="fileInput">
                                                            {{-- <img src="{{ old('post_img', $post->post_img ?? 'No information available') }}" alt="post form icon"> --}}
                                                            <span>Photo/Video</span>
                                                        </label>
                                                        <input type="file" name="post_img" id="fileInput" style="display: none;" multiple>

                                                        <button type="button" class="btn btn-link post-form-btn btn-sm">
                                                            <img src="{{ asset('assets/images/icons/theme/tag-friend.png') }}" alt="post form icon">
                                                            <span>Tag Friends</span>
                                                        </button>
                                                        <button type="button" class="btn btn-link post-form-btn btn-sm">
                                                            <img src="{{ asset('assets/images/icons/theme/check-in.png') }}" alt="post form icon">
                                                            <span>Check In</span>
                                                        </button>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Publish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <!-- Display Posts -->
                            @foreach ($posts as $post)
                            <div class="card post-card mb-4">
                                <div class="card-body">
                                    <p class="post-content">{{ $post->content }}</p>
                                    @if ($post->post_img)
                                    <img src="{{ asset($post->post_img) }}" alt="Post Image" class="post-img">
                                    @endif
                                                                </div>
                                <div class="card-footer post-meta">
                                    <small>Posted on {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y, H:i') }}</small>
                                </div>
                            </div>
                        @endforeach


                        </div>

                    </div>








                    <div class="card-body">
                        <div class="container">
                            <div class="posts-section mb-5">
                                <div class="post border-bottom p-3 bg-white w-shadow">
                                    <div class="media text-muted pt-3">

                                        <div class="media-body pb-3 mb-0 small lh-125">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <a href="#" class="text-gray-dark post-user-name">John Michael</a>
                                                <div class="dropdown">
                                                    <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left post-dropdown-menu" style="width: 300px">
                                                        <a href="#" class="dropdown-item" aria-describedby="savePost">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <i class='bx bx-bookmark-plus post-option-icon'></i>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <span class="fs-9">Save post</span>
                                                                    <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item" aria-describedby="hidePost">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <i class='bx bx-hide post-option-icon'></i>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <span class="fs-9">Hide post</span>
                                                                    <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <i class='bx bx-time post-option-icon'></i>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <span class="fs-9">Snooze  for 30 days</span>
                                                                    <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="dropdown-item" aria-describedby="reportPost">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <i class='bx bx-block post-option-icon'></i>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <span class="fs-9">Report</span>
                                                                    <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                                            <img src="{{asset('assets/users/user-1.jpg')}}" alt="Online user" width="400px" height="400px" class="mr-3 post-user-image">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" class="post-card-buttons"><i class='bx bxs-like mr-2'></i> Like</a>
                                            <a href="javascript:void(0)" class="post-card-buttons ml-3"><i class='bx bx-message-rounded mr-2'></i> Comment</a>
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
                                    <div class="border-top pt-3 hide-comments" style="display: none;">
                                        <div class="row bootstrap snippets">
                                            <div class="col-md-12">
                                                <div class="comment-wrapper">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">
                                                            <ul class="media-list comments-list">
                                                                <li class="media comment-form">
                                                                    <a href="#" class="pull-left">
                                                                        <img src="assets/images/users/user-4.jpg" alt="" class="img-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <form action="" method="" role="form">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control comment-input" placeholder="Write a comment...">
                                                                                        <div class="input-group-btn">
                                                                                            <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Emoji"><i class='bx bxs-smiley-happy'></i></button>
                                                                                            <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach Image"><i class='bx bx-camera'></i></button>
                                                                                            <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Record Audio"><i class='bx bx-microphone'></i></button>
                                                                                            <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach File"><i class='bx bx-file-blank'></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </li>
                                                                <!-- Additional comments can be added here -->
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




<hr>

<div class="card-body">

    <div class="container">
        <div class="posts-section mb-5">
            <div class="post border-bottom p-3 bg-white w-shadow">
                <div class="media text-muted pt-3">

                    <div class="media-body pb-3 mb-0 small lh-125">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <a href="#" class="text-gray-dark post-user-name">John Michael</a>
                            <div class="dropdown">
                                <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left post-dropdown-menu" style="width: 300px">
                                    <a href="#" class="dropdown-item" aria-describedby="savePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-bookmark-plus post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Save post</span>
                                                <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="hidePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-hide post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Hide post</span>
                                                <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-time post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Snooze  for 30 days</span>
                                                <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="reportPost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-block post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Report</span>
                                                <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                        <img src="{{asset('assets/users/user-1.jpg')}}" alt="Online user" width="400px" height="400px" class="mr-3 post-user-image">
                    </div>
                </div>
                <div class="mt-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="d-flex">
                        <a href="javascript:void(0)" class="post-card-buttons"><i class='bx bxs-like mr-2'></i> Like</a>
                        <a href="javascript:void(0)" class="post-card-buttons ml-3"><i class='bx bx-message-rounded mr-2'></i> Comment</a>
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
                <div class="border-top pt-3 hide-comments" style="display: none;">
                    <div class="row bootstrap snippets">
                        <div class="col-md-12">
                            <div class="comment-wrapper">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <ul class="media-list comments-list">
                                            <li class="media comment-form">
                                                <a href="#" class="pull-left">
                                                    <img src="assets/images/users/user-4.jpg" alt="" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <form action="" method="" role="form">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control comment-input" placeholder="Write a comment...">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Emoji"><i class='bx bxs-smiley-happy'></i></button>
                                                                        <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach Image"><i class='bx bx-camera'></i></button>
                                                                        <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Record Audio"><i class='bx bx-microphone'></i></button>
                                                                        <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach File"><i class='bx bx-file-blank'></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <!-- Additional comments can be added here -->
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
<hr>

<div class="card-body">
    <div class="container">
        <div class="posts-section mb-5">
            <div class="post border-bottom p-3 bg-white w-shadow">
                <div class="media text-muted pt-3">

                    <div class="media-body pb-3 mb-0 small lh-125">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <a href="#" class="text-gray-dark post-user-name">John Michael</a>
                            <div class="dropdown">
                                <a href="#" class="post-more-settings" role="button" data-toggle="dropdown" id="postOptions" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left post-dropdown-menu" style="width: 300px">
                                    <a href="#" class="dropdown-item" aria-describedby="savePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-bookmark-plus post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Save post</span>
                                                <small id="savePost" class="form-text text-muted">Add this to your saved items</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="hidePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-hide post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Hide post</span>
                                                <small id="hidePost" class="form-text text-muted">See fewer posts like this</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="snoozePost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-time post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Snooze  for 30 days</span>
                                                <small id="snoozePost" class="form-text text-muted">Temporarily stop seeing posts</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item" aria-describedby="reportPost">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class='bx bx-block post-option-icon'></i>
                                            </div>
                                            <div class="col-md-10">
                                                <span class="fs-9">Report</span>
                                                <small id="reportPost" class="form-text text-muted">I'm concerned about this post</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block">3 hours ago <i class='bx bx-globe ml-3'></i></span>
                        <img src="{{asset('assets/users/user-1.jpg')}}" alt="Online user" width="400px" height="400px" class="mr-3 post-user-image">
                    </div>
                </div>
                <div class="mt-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatem veritatis harum, tenetur, quibusdam voluptatum, incidunt saepe minus maiores ea atque sequi illo veniam sint quaerat corporis totam et. Culpa?</p>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="d-flex">
                        <a href="javascript:void(0)" class="post-card-buttons"><i class='bx bxs-like mr-2'></i> Like</a>
                        <a href="javascript:void(0)" class="post-card-buttons ml-3"><i class='bx bx-message-rounded mr-2'></i> Comment</a>
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
                <div class="border-top pt-3 hide-comments" style="display: none;">
                    <div class="row bootstrap snippets">
                        <div class="col-md-12">
                            <div class="comment-wrapper">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <ul class="media-list comments-list">
                                            <li class="media comment-form">
                                                <a href="#" class="pull-left">
                                                    <img src="assets/images/users/user-4.jpg" alt="" class="img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <form action="" method="" role="form">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control comment-input" placeholder="Write a comment...">
                                                                    <div class="input-group-btn">
                                                                        <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Emoji"><i class='bx bxs-smiley-happy'></i></button>
                                                                        <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach Image"><i class='bx bx-camera'></i></button>
                                                                        <button type="button" class="btn comment-form-btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Record Audio"><i class='bx bx-microphone'></i></button>
                                                                        <button type="button" class="btn comment-form-btn" data-toggle="tooltip" data-placement="top" title="Attach File"><i class='bx bx-file-blank'></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <!-- Additional comments can be added here -->
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








</div>









</div>








</div>













<br> <br> <br><br> <br> <br>

<!------------------------Middle column Ends---------------->








<!---------------------------Statrs Right Columns----------------->



<div class="col-12 col-lg-3">


<div class="right-column">

    <div class="card shadow-sm mb-4" >
        <div class="card-body">
            <h6 class="card-title">Sponsored</h6>
            <img src="{{asset('assets/img/right1.jpg')}}" alt="card-img" class="card-img mb-3">
            <p class="card-text text-justify"> <span class="h6">It might be time to visit Iceland.</span> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice.  What are you waiting for?</p>
            <a href="#" class="btn btn-outline-info card-link btn-sm">Buy a ticket</a>


        </div>

    </div>


    <div class="card shadow-sm mb-4">

        <div class="card-body">

                <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small> </a> </h6>
                <div class="row no-gutters d-none d-lg-flex">
                    <div class="col-6 p-1">
                      <img src="{{asset('assets/img/avatar-dhg.png')}}" alt="img" width="80px" height="80px" class="rounded-circle mb-4">
            <img src="{{asset('assets/img/avatar-fat.jpg')}}" alt="img" width="80px" height="80px" class="rounded-circle">



                    </div>
                    <div class="col-6 p-1 text-left">
                        <h6>Jacob Thornton @fat</h6>
                        <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>

                        <h6>Mark otto</h6>
                        <a href="#" class="btn btn-outline-info  btn-sm"><i class="fas fa-user-friends"></i>Follow </a>

                    </div>

                </div>

        </div>

        <div class="card-footer">

            <p class="lead" style="font-size:18px;">Dave really likes these nerds, no one knows why though.</p>
        </div>



    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <p>&copy; 2018 Bootstrap



                    <a href="#">About</a>
                    <a href="#">Help</a>
                    <a href="#">Terms</a>
                    <a href="#">Privacy</a>
                    <a href="#">Cookies</a>
                    <a href="#">Ads </a>
                    <a href="#">Info</a>
                    <a href="#">Brand</a>
                <a href="#">Blog</a>
                    <a href="#">Status</a>
                    <a href="#">Apps</a>
                    <a href="#">Jobs</a>
                    <a href="#">Advertise</a>














            </p>
        </div>

    </div>









</div>























  </div>





</div>


@endsection
