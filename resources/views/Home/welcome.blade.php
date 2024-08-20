

@extends('Layout.layout')
<style>
        #countrySelect {
        width: 100%; /* Ensure the dropdown uses the full width of its container */
    }
    .price-display {
            font-size: 1.25rem; /* Larger font size */
            font-weight: bold;  /* Bold text */
            color: #333;        /* Dark grey color for better readability */
            margin-bottom: 1rem; /* Space below the price */
        }

        .price-value {
            color: #e74c3c; /* Red color to highlight the price */
            font-size: 1.5rem; /* Slightly larger font size for emphasis */
            font-weight: 700; /* Extra bold text */
        }
        .wallet-link {
    display: flex; /* Align items in a row */
    align-items: center; /* Center items vertically */
    text-decoration: none; /* Remove underline from link */
    color: #333; /* Default text color */
    background-color: #fff; /* Background color for the container */
    border: 1px solid #ddd; /* Border around the container */
    border-radius: 8px; /* Rounded corners */
    padding: 10px; /* Padding inside the container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow effect */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

.wallet-link:hover {
    background-color: #f5f5f5; /* Change background on hover */
}

.wallet-image {
    width: 50px; /* Set a specific width */
    height: 50px; /* Set a specific height */
    margin-right: 10px; /* Space between image and text */
}

.wallet-details {
    display: flex;
    flex-direction: column; /* Stack items vertically */
}

.wallet-details h6 {
    margin: 0; /* Remove margin */
    font-size: 1rem; /* Adjust font size */
}

.price {
    font-size: 1.2rem; /* Slightly larger font size for price */
    color: #e74c3c; /* Red color for emphasis */
    margin: 0; /* Remove margin */
}

    .post-user-image {
        cursor: pointer; /* Ensures the cursor changes to a pointer */
    }



</style>


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
                    @if ($profile)
                    <img src="{{asset(Auth::user()->banner_img)}}" width="100px" height="50px" alt="" class="card-img-top img-fluid">
                    @else
                    <img src="{{asset(Auth::user()->banner_img)}}" alt="" class="card-img-top img-fluid">
                    @endif
                    <div class="card-body text-center ">
                        <img src="{{asset(Auth::user()->profile_img)}}" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                        <h5 class="card-title">{{ Auth::user()->firstname }}{{ Auth::user()->lastname }}</h5>
                        <p class="card-text text-center mb-2">  {{ $about ? $about->bio : 'No bio available' }}</p>
                        <ul class="list-unstyled nav justify-content-center">
                           <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Friends <br> <strong>12M</strong></li></a>
                          <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Enimes <br> <strong>1</strong></li></a>
                        </ul>

                    </div>




                </div>


<!-- About Section -->
<div class="card shadow-sm card-left2 mb-4">
    <div class="card-body">
        <h5 class="mb-3 card-title">About <small><a href="#" class="ml-1" data-toggle="modal" data-target="#editModal">Edit</a></small></h5>
        <p class="card-text"><i class="fas fa-calendar-week mr-2"></i> Went to <a href="#" class="text-decoration-none">{{ $about ? $about->work : 'No Bio available' }}</a></p>
        <p class="card-text"><i class="fas fa-user-friends mr-2"></i> Become a friend with <a href="#" class="text-decoration-none">{{ $about ? $about->art_style : 'No Bio available' }}</a></p>
        <p class="card-text"><i class="fas fa-home mr-2"></i> Live in <a href="#" class="text-decoration-none">{{ $about ? $about->live : 'No Bio available' }}</a></p>
        <p class="card-text"><i class="fas fa-map-marker mr-2"></i> From <a href="#" class="text-decoration-none">{{ $about ? $about->location : 'No Bio available' }}</a></p>

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
                                <input type="text" class="form-control" id="work" name="work" value="{{ $about ? $about->work : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="art_style">Art Style</label>
                                <input type="text" class="form-control" id="art_style" name="art_style" value="{{ $about ? $about->art_style : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="live">Live</label>
                                <input type="text" class="form-control" id="live" name="live" value="{{ $about ? $about->live : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $about ? $about->location : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <input type="text" class="form-control" id="bio" name="bio" value="{{ $about ? $about->bio : '' }}">
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




<div class="card shadow-sm card-left3 mb-4" style="height:auto;">

    <div class="card-body">


                <div class="card-title d-flex justify-content-between">
                    <h5>Photos</h5>
                        <!-- Add link to trigger modal -->
                        <a href="#"  data-toggle="modal" data-target="#uploadModal" class="btn btn-sm text-end"  style="color: #007acc;">Add Gallery</a>
                </div>

                <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="uploadModalLabel">Upload Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="gallery_img">Select Gallery Image</label>
                                        <input type="file" class="form-control-file border rounded p-2" id="gallery_img" name="gallery_img" required>
                                        <small class="form-text text-muted">Supported formats: JPEG, PNG, JPG, GIF. Max size: 2MB.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3">Upload Image</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Images -->




                <div class="row" id="gallery">
                    @foreach ($gallery as $image)
                    <div class="col-6 p-1">
                        <a href="{{ asset($image->gallery_img) }}" data-lightbox="gallery">
                            <img src="{{ asset($image->gallery_img) }}" alt="img" class="img-fluid my-2">
                        </a>
                    </div>
                @endforeach

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
                                                    <input type="number" name="price" id="priceInput" class="form-control mt-2" placeholder="Price">


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
                                                            <img src="{{ asset('assets/img/tag.jpg') }}" alt="post form icon">
                                                            <span>Tag Friends</span>
                                                        </button>
                                                        {{-- <button type="button" class="btn btn-link post-form-btn btn-sm">
                                                            <img src="{{ asset('assets/img/check_in.webp') }}" alt="post form icon">
                                                            <span>Check In</span>
                                                        </button> --}}
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm">Publish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>

                            <!-- Display Posts -->







                        </div>

                    </div>




<!-- Image Modal -->
<div class="modal fade" style="width:100%;height:100vh;background-color:black;" id="imageModal"
     tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
            <div class="modal-content" style="background-color:black; width: 100%;">
            <div class="modal-header" style="border:none; position:relative;">
                <img src="{{ asset('assets/img/artschamps_profile.png') }}" style="position:absolute;left:-70px;" width="50px" alt="">
                <button type="button" class="close" style="color:white; position:absolute; left:-40px;
                font-size:4rem; height: 40px; line-height: 50px; text-align: center; background: transparent;
                 border:none; border-radius:5px;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="display: flex; justify-content: space-between; align-items: flex-start; padding: 0;">
                <!-- Image Section -->
                <div class="col-md-6" style="padding: 20px; min-height: 800px;">
                    <img style="width:100%; height:500px;" src="" id="modalImage" alt="Enlarged Image" class="img-fluid">
                    <h5 class="price-display" style="color:white; margin-top:20px;">Price: <span class="price-value" id="modalPrice"></span></h5>
                </div>

                <!-- Chat/Comment Section -->
                <div class="col-md-6" style="padding: 20px; background-color: #fff; border-radius: 10px;margin-left:100px;
                 min-height: 600px;max-width:30%;  overflow-y: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
                    <h6 style="color:black;">Comments:</h6>
                    <div id="chatMessages" style="max-height: calc(100% - 80px); overflow-y: auto;
                     border: 1px solid #ccc; padding: 10px; border-radius: 10px; background:#f9f9f9;">
                        <!-- Chat messages will be appended here -->
                    </div>
                    <form id="chatForm" style="margin-top:10px;position:fixed;bottom:12px;width:300px;">
                        <div class="form-group">
                            <textarea id="chatMessage" class="form-control" rows="3" placeholder="Type your message here..." style="border-radius:10px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius:10px; background:purple; border:none;">
                            <i class="fas fa-paper-plane"></i> Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@foreach ($posts as $post)

                    <div class="card-body">
                        <div class="container">
                            <div class="posts-section mb-5">
                                <div class="post border-bottom p-3 bg-white w-shadow">
                                    <div class="media text-muted pt-3">

                                        <div class="media-body pb-3 mb-0 small lh-125">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <a href="#" class="text-gray-dark post-user-name">{{ Auth::user()->firstname }}</a>
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
                                            <span class="d-block"> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y, H:i') }} <i class='bx bx-globe ml-3'></i></span>
                                            @if ($post->post_img)
                                            <img src="{{ asset($post->post_img) }}" alt="Post Image" width="400px" height="400px" class="mr-3 post-user-image" data-toggle="modal" data-target="#imageModal" data-image="{{ asset($post->post_img) }}" data-id="{{ $post->post_id }}" data-price="{{ $post->price }}">
                                        @endif

                                        </div>
                                    </div>





                                    <div class="mt-3">
                                        <p> {{ $post->content }}</p>
                                        <h5 class="price-display">Price: <span class="price-value">Pkr: {{ $post->price }}</span></h5>

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="d-flex">
                                            <a href="javascript:void(0)" id="likebtn" data-id="{{ $post->post_id }}" data-lstatus="{{ $post->lstatus }}"  class="post-card-buttons">
                                                <i class='bx bxs-like mr-2 @if ($post->lstatus == 1)
                                                    text-dark fw-bold
                                                    @else
                                                    text-primary
                                                    @endif'
                                                >&nbsp;Like </i> </a>
                                            <a style="text-decoration: none;" href="javascript:void(0)" id="commentbtn" data-id="{{ $post->post_id }}"
                                                 class="post-card-buttons ml-3">
                                                <i class='bx bx-message-rounded mr-2'></i> Comment</a>

                                                <div class="dropdown dropup share-dropup ml-3">
                                                    <a style="text-decoration: none;" href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class='bx bx-share-alt mr-2'></i> Share
                                                    </a>
                                                    <div class="dropdown-menu post-dropdown-menu">
                                                        <a style="text-decoration: none;" href="#" class="dropdown-item" data-post-id="POST_ID" onclick="sharePostAsMessage(this)">
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



                                            {{-- billing --}}
                                            <div class="dropdown dropup billing-dropup ml-3">
                                                <a style="text-decoration: none;" href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-money mr-2'></i> Billing
                                                </a>

                                                <div class="dropdown-menu post-dropdown-menu">
                                                    <a style="text-decoration: none;" href="#" class="dropdown-item" data-toggle="modal" data-target="#buyArtModal">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <i class='bx bx-dollar'></i>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <span>Buy Art</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#billingDetailsModal">
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




                                            <!-- Billing Details Modal Structure -->
<div class="modal fade" id="billingDetailsModal" tabindex="-1" role="dialog" aria-labelledby="billingDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="billingDetailsModalLabel">Billing Details</h4>
                <div class="d-flex ml-auto">
                    <img src="{{ asset('assets/img/national_bank.png') }}" width="80px" class="mr-2">
                    <img src="{{ asset('assets/img/askari_bank.jpg') }}" width="50px" class="mr-2">
                    <img src="{{ asset('assets/img/habib_bank.png') }}" width="50px" class="mr-2">
                    <img src="{{ asset('assets/img/Visa-Logo.png') }}" width="50px">
                </div>
                <button type="button" class="close ml-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- First Form -->
                <div id="firstForm">
                    <form id="firstFormContent" action="{{ route('first.form.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            @if ($post->post_img)
                                <div class="col-md-12">
                                    <img src="{{ asset($post->post_img) }}" alt="Online user" width="400px" height="400px" class="mr-3 post-user-image">
                                    <h5 class="price-display">Price: <span class="price-value">Pkr{{ $post->price }}</span></h5>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

                <!-- Second Form -->
                <div id="secondForm" style="display: none;">
                    <form action="{{ route('save.billing') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="billingFirstName" placeholder="Enter your first name">
                                @error('firstname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="billingLastName" placeholder="Enter your last name">
                                @error('lastname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="card_number">Card Number <span class="text-danger">*</span></label>
                                <input type="number" name="card_number" class="form-control" id="billingCardNumber" placeholder="Enter Your Card No">
                                @error('card_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="expiration_date">Expiration Date</label>
                                <input type="date" name="expiration_date" class="form-control" id="expiration_date" placeholder="MM/YY">
                                @error('expiration_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="card_holder_name">Card Holder Name</label>
                                <input type="text" name="card_holder_name" class="form-control" id="card_holder_name" placeholder="Enter Holder Name">
                                @error('card_holder_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Country">Billing Country</label>
                                <select name="billing_country" id="billingcountry" class="form-control">
                                    <option value="" selected>Select your country</option>
                                    <option value="us">United States</option>
                                    <option value="ca">Canada</option>
                                    <option value="gb">United Kingdom</option>
                                    <option value="au">Australia</option>
                                    <!-- Add more country options here -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="thirdState">State/Province</label>
                                <select id="thirdState" name="billing_state" class="form-control">
                                    <option value="" selected>Select your state</option>
                                    <option value="sindhi">Sindh</option>
                                    <option value="us">United States</option>
                                    <!-- Add more state options here -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="billingzip">Zip Code</label>
                                <input type="text" name="billing_zip" class="form-control" id="billing_zip" placeholder="Zip code">
                                @error('billing_zip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="billing_address">Address</label>
                                <input type="text" name="billing_address" class="form-control" id="billing_address" placeholder="Enter your address">
                                @error('billing_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="billing_city">City</label>
                                <input type="text" name="billing_city" class="form-control" id="billing_city" placeholder="Enter your city">
                                @error('billing_city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Third Form -->
                <div id="thirdForm" style="display: none;">
                    <form action="{{ route('finalize.billing') }}" method="POST">
                        @csrf
                        <div class="row">
                            <p class="modal-title" id="billingDetailsModalLabel">Select Payment Method</p>
                            <h6>Recommended method(s)</h6>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="ArtsChamps Wallet">
                                    <img src="{{ asset('assets/img/artschamps_wallet.png') }}" alt="ArtsChamps Wallet" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>ArtsChamps Wallet</h6>
                                        <span>Activate & Pay</span>
                                    </div>
                                </label>
                            </div>

                            <h6>Payment methods</h6>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="Credit/Debit Card">
                                    <img src="{{ asset('assets/img/credit_card.png') }}" alt="Credit/Debit Card" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>Credit/Debit Card</h6>
                                        <span>Credit/Debit Card</span>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="Jazz Cash">
                                    <img src="{{ asset('assets/img/jazz_cash.jpg') }}" alt="Jazz Cash" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>Jazz Cash</h6>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="Easy Paisa">
                                    <img src="{{ asset('assets/img/easypaisa.png') }}" alt="Easy Paisa" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>Easy Paisa</h6>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="Habib Bank Account">
                                    <img src="{{ asset('assets/img/habib_bank.png') }}" alt="Habib Bank Account" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>Habib Bank Account</h6>
                                    </div>
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" name="method_name" value="Cash on Delivery">
                                    <img src="{{ asset('assets/img/cash_on_delivery.png') }}" alt="Cash on Delivery" class="wallet-image">
                                    <div class="wallet-details">
                                        <h6>Cash on Delivery</h6>
                                    </div>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>
                    </form>
                </div>









                {{-- third --}}

            </div>

            <div class="modal-footer">
                <!-- Navigation Buttons -->
                <button type="button" id="previousButton" class="btn btn-secondary" style="display:none;">Previous</button>
                <button type="button" id="continueButton" class="btn btn-primary">Continue</button>
            </div>
        </div>
    </div>
</div>

{{-- billing --}}






</div>
</div>

{{-- comment --}}
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
                                                                                        <button class="btn search-button" type="submit" id="button-addon2">
                                                                                            <img src="{{ asset('assets/img/m-send.png') }}" alt="Messenger icon">
                                                                                        </button>

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
                                                                <br>
                                                <div id="commentsection-inner">

                                                </div>

                                                                <!-- Additional comments can be added here -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



{{-- comment --}}


                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach

<hr>












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

{{-- follow --}}

{{-- <div class="card shadow-sm mb-4">
    <div class="card-body">
        <h6 class="card-title">Friends <a href="#" class="ml-1"><small>View All</small></a></h6>
        <div class="row no-gutters d-none d-lg-flex">
            @foreach ($friends as $friend)
                <div class="col-6 p-1">
                    <img src="{{ asset($friend->profile_img) }}" alt="img" width="80px" height="80px" class="rounded-circle mb-4">
                </div>
                <div class="col-6 p-1 text-left">
                    <h6>{{ $friend->firstname }} {{ $friend->lastname }}</h6>
                    <a href="{{ route('profile', ['id' => $friend->id]) }}" class="btn btn-outline-info btn-sm mb-3">
                        <i class="fas fa-user-friends"></i> View Profile
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <p class="lead" style="font-size:18px;">Dave really likes these nerds, no one knows why though.</p>
    </div>
</div> --}}

{{-- follow --}}
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
// like
    $(document).ready(function(){

        $('#likebtn').click(function(){

            let postid  = $(this).data('id');
            let lstatus  = $(this).data('lstatus');

            $('#likebtn').html('Loading..');

                $.ajax({
                url: "{{ url('/like-post') }}/"+postid,
                method: 'POST',
                data: {
                        _token: '{{ csrf_token() }}',  // Include CSRF token for security
                        post_id: postid,
                        lstatus: lstatus
                    },

            success: function(response) {
                if (response.success) {
                    $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");
                }
                if (response.message) {
                    $('#likebtn').html("<i class='bx bxs-like mr-2 text-primary '>&nbsp;Like</i>");
                }
            }

        });

        });

// comment
        $('#commentbtn').click(function(){

    let postid  = $(this).data('id');

    $.ajax({
    url: "{{ url('/all-comments') }}/"+postid,
    method: 'GET',

    success: function(response) {

        let commentarray = response.comments;

        console.log(commentarray);

        $('#commentsesction').css('display','block');

        let data = '';

        commentarray.forEach(item => {
            data += `
            <div class="card">
            <div class="card-head p-2 d-flex justify-content-between">
                <p>
                    ${item.firstname} ${item.lastname}
                    </p>
                    <p>
                    ${item.created_at}
                    </p>
                                                    </div>
                                                    <div class="card-body p-2">
                                                    ${item.comment_name}
                                                    </div>
                                                </div>
                                                `;
        });

        $('#commentsection-inner').html(data);


        // $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");


}

});

});



    });

    // billing forms start

    $(document).ready(function() {
        $('#continueButton').click(function() {
            if ($('#firstForm').is(':visible')) {
                $('#firstForm').hide();
                $('#secondForm').show();
                $('#previousButton').show();
                $('#continueButton').text('Next');
            } else if ($('#secondForm').is(':visible')) {
                $('#secondForm').hide();
                $('#thirdForm').show();
                $('#continueButton').text('Submit');
            } else if ($('#thirdForm').is(':visible')) {
                submitForm();
            }
        });

        $('#previousButton').click(function() {
            if ($('#secondForm').is(':visible')) {
                $('#secondForm').hide();
                $('#firstForm').show();
                $('#previousButton').hide();
                $('#continueButton').text('Continue');
            } else if ($('#thirdForm').is(':visible')) {
                $('#thirdForm').hide();
                $('#secondForm').show();
                $('#continueButton').text('Next');
            }
        });

        function submitForm() {
            var formData = new FormData();
            var formId;

            if ($('#firstForm').is(':visible')) {
                formId = '#firstFormContent';
            } else if ($('#secondForm').is(':visible')) {
                formId = '#secondFormContent';
            } else if ($('#thirdForm').is(':visible')) {
                formId = '#thirdFormContent';
            }

            $(formId).find('input, select').each(function() {
                if ($(this).attr('type') === 'radio' && $(this).is(':checked')) {
                    formData.append($(this).attr('name'), $(this).val());
                } else if ($(this).attr('type') !== 'radio') {
                    formData.append($(this).attr('name'), $(this).val());
                }
            });

            $.ajax({
                url: $(formId).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('Success:', response);
                    $('#billingDetailsModal').modal('hide');
                },
                error: function(xhr) {
                    console.log('Error:', xhr.responseText);
                }
            });
        }
    });








// billing form end


// share ajax
function sharePostAsMessage(element) {
    var postId = element.getAttribute('data-post-id');
    var recipientId = prompt("Enter the recipient's ID:");

    if (recipientId) {
        $.ajax({
            url: '/share-post-as-message',
            type: 'POST',
            data: {
                post_id: postId,
                recipient_id: recipientId,
                _token: '{{ csrf_token() }}' // Laravel CSRF token for security
            },
            success: function(response) {
                alert('Post shared successfully as a message!');
            },
            error: function(xhr) {
                alert('An error occurred while sharing the post.');
            }
        });
    }
}




</script>
{{-- modalpost--}}


<script>
    $(document).ready(function() {
        $('#imageModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var imageSrc = button.data('image');
            var postId = button.data('id');
            var price = button.data('price');

            var modal = $(this);
            modal.find('#modalImage').attr('src', imageSrc);
            modal.find('#modalPrice').text('Pkr ' + price);

            // Update the URL with the post_id
            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?post_id=' + postId;
            window.history.pushState({path:newUrl}, '', newUrl);

            // Initialize chat or load existing comments here if needed
        });

        $('#imageModal').on('hide.bs.modal', function () {
            // Remove the post_id from the URL when the modal is closed
            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.history.pushState({path:newUrl}, '', newUrl);
        });

        $('#chatForm').on('submit', function(e) {
            e.preventDefault();
            var message = $('#chatMessage').val();
            if (message.trim() !== '') {
                $('#chatMessages').append('<div class="chat-message" style="padding:5px; margin-bottom:5px; background:#333; border-radius:5px; color:white;">' + message + '</div>');
                $('#chatMessage').val(''); // Clear input field
            }
        });
    });
    </script>



 <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>

 @endsection
