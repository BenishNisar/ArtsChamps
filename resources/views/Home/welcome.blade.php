

@extends('Layout.layout')
<style>
        #countrySelect {
        width: 100%;
    }
    .price-display {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        .price-value {
            color: #e74c3c;
            font-size: 1.5rem;
            font-weight: 700;
        }
        .wallet-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #333;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.payment-method {
    display: flex;
    align-items: center;
}

.wallet-image {
    width: 40px;
    height: 40px;
    margin-right: 25px;
    margin-left: 15px;

}

.wallet-details h6 {
    margin: 0;
}

.wallet-details span {
    display: block;
    margin-top: 5px;
    font-size: 0.875rem;
    color: #666;
}



.price {
    font-size: 1.2rem;
    color: #e74c3c;
    margin: 0;
}

    .post-user-image {
        cursor: pointer;
    }


/* Check */
.success-icon {
    text-align: center;
    margin-bottom: 10px;
}

.success-icon img {
    display: inline-block;
    vertical-align: middle;
}

#successMessage {
    text-align: center;
}

#successMessage p {
    font-size: 1.2em;
    color: #4CAF50; /* Green color for success */
}
/* check */



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
<div class="modal fade" style="width:100%;height:100vh;background-color:black;" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
        <div class="modal-content" style="background-color:black; width: 100%;">
            <div class="modal-header" style="border:none; position:relative;">
                <img src="{{ asset('assets/img/artschamps_profile.png') }}" style="position:absolute;left:-70px;" width="50px" alt="">
                <button type="button" class="close" style="color:white; position:absolute; left:-40px; font-size:4rem; height: 40px; line-height: 50px; text-align: center; background: transparent; border:none; border-radius:5px;" data-dismiss="modal" aria-label="Close">
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

                {{-- @foreach($posts as $post)
                <!-- Comment Section -->
                <div class="col-md-6 comments-section" id="comments-{{ $post->post_id }}" style="padding: 20px; background-color: #fff; border-radius: 10px; margin-left:100px; min-height: 600px; max-width:30%; overflow-y: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
                    <h6 style="color:black;">Comments</h6>

                    <!-- All comments will be dynamically appended here -->
                    <div class="comment-section-inner" id="commentsection-inner-{{ $post->post_id }}">
                        <!-- Existing comments (if any) will be displayed here -->
                    </div>

                    <!-- Comment Form -->
                    <form class="comment-form" method="POST" action="{{ route('add-comment') }}" data-post-id="{{ $post->post_id }}" style="margin-top:10px;">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment_name" placeholder="Type your comment here..." style="border-radius:10px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="border-radius:10px; background:purple; border:none;">
                            <i class="fas fa-paper-plane"></i> Send
                        </button>
                    </form>
                </div>
            @endforeach --}}



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

{{-- comment --}}
<a style="text-decoration: none;" href="javascript:void(0)" class="commentbtn" data-id="{{ $post->post_id }}">
    <i class='bx bx-message-rounded mr-2'></i> Comment
</a>

{{-- comment --}}


                                                <div class="dropdown dropup share-dropup ml-3">
                                                    <a style="text-decoration: none;" href="#" class="post-card-buttons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class='bx bx-share-alt mr-2'></i> Share
                                                    </a>
                                                    <div class="dropdown-menu post-dropdown-menu">
                                                        <a style="text-decoration: none;" href="#" class="dropdown-item" data-post-id="POST_ID" onclick="sharePostAsMessage(this)">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <i class='bx bx-message'></i>
                                                                </div>
                                                                <div class="col-10">
                                                                    <span>Send as Message</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                        {{-- share --}}



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
                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->post_id }}">
                </div>
            @endif
            {{-- <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->id() }}"> --}}
        </div>
    </form>
</div>

                {{-- first --}}

        <!-- Second Form -->
<div id="secondForm" style="display: none;">
                    <form id="billingForm" action="{{ route('save.billing') }}" method="POST">
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

{{-- <input type="hidden" name="order_id" value="{{ session('order_id') }}">

                            <p>Order ID: {{ session('order_id') }}</p>  <!-- Debugging line --> --}}



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
                <label class="payment-method">
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
                <label class="payment-method">
                    <input type="radio" name="method_name" value="Credit/Debit Card">
                    <img src="{{ asset('assets/img/credit_card.png') }}" alt="Credit/Debit Card" class="wallet-image">
                    <div class="wallet-details">
                        <h6>Credit/Debit Card</h6>
                        <span>Credit/Debit Card</span>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label class="payment-method">
                    <input type="radio" name="method_name" value="Jazz Cash">
                    <img src="{{ asset('assets/img/jazz_cash.jpg') }}" alt="Jazz Cash" class="wallet-image">
                    <div class="wallet-details">
                        <h6>Jazz Cash</h6>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label class="payment-method">
                    <input type="radio" name="method_name" value="Easy Paisa">
                    <img src="{{ asset('assets/img/easypaisa.png') }}" alt="Easy Paisa" class="wallet-image">
                    <div class="wallet-details">
                        <h6>Easy Paisa</h6>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label class="payment-method">
                    <input type="radio" name="method_name" value="Habib Bank Account">
                    <img src="{{ asset('assets/img/habib_bank.png') }}" alt="Habib Bank Account" class="wallet-image">
                    <div class="wallet-details">
                        <h6>Habib Bank Account</h6>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <label class="payment-method">
                    <input type="radio" name="method_name" value="Cash on Delivery">
                    <img src="{{ asset('assets/img/cash_on_delivery.png') }}" alt="Cash on Delivery" class="wallet-image">
                    <div class="wallet-details">
                        <h6>Cash on Delivery</h6>
                    </div>
                </label>
            </div>


        </div>
    </form>
</div>





    <!-- Success Message -->
    <div id="successMessage" style="display: none;">
        <div class="success-icon">
            <!-- Checkmark icon or image -->
            <img src="{{ asset('assets/img/checkmark.png') }}" alt="Success" width="50px">
        </div>
        <p>Thank you! Your payment has been successfully processed.</p>
    </div>


</div>

            <div class="modal-footer">
                <!-- Navigation Buttons -->
                <button type="button" id="previousButton" class="btn btn-secondary" style="display:none;">Previous</button>
                <button type="button submit" id="continueButton" class="btn btn-primary">Continue</button>
            </div>
        </div>
    </div>
</div>

{{-- billing --}}






</div>
</div>



{{-- Comment Section --}}
<div class="border-top pt-3 hide-comments commentsesction" id="comments-{{ $post->post_id }}" style="display:none;">
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
                                    <!-- Comment Form -->
                                    <form class="comment-form" method="POST" action="{{ route('add-comment') }}">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->post_id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control comment-input" name="comment_name" placeholder="Write a comment...">
                                                    <button class="btn search-button" type="submit">
                                                        <img src="{{ asset('assets/img/m-send.png') }}" alt="Send icon">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <br>
                            <div class="commentsection-inner" id="commentsection-inner-{{ $post->post_id }}">
                                <!-- All comments will be dynamically appended here -->
                            </div>
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
$(document).ready(function() {

$('#likebtn').click(function() {
    let postid = $(this).data('id');
    let lstatus = $(this).data('lstatus');

    $('#likebtn').html('Loading..');  // Change button text to 'Loading..'

    $.ajax({
        url: "{{ url('/like-post') }}/" + postid,
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',  // Include CSRF token for security
            post_id: postid,
            lstatus: lstatus
        },
        success: function(response) {
            console.log('Server Response:', response);  // Debug: Output the response

            // Reset button HTML based on the response
            if (response.success) {
                $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");
            }
            if (response.message) {
                $('#likebtn').html("<i class='bx bxs-like mr-2 text-primary'>&nbsp;Liked</i>");
            } else {
                $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);  // Debug: Output any AJAX errors
            $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");  // Reset button text on error
        }
    });

});

});

// comment

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function() {

    $('.commentbtn').click(function() {
        let postId = $(this).data('id');
        $(`#comments-${postId}`).toggle();
    });


    $('.comment-form').submit(function(e) {
        e.preventDefault();

        let form = $(this);
        let postid = form.find('input[name="post_id"]').val();

        $.ajax({
            url: "{{ route('add-comment') }}",
            method: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.message === "Comment added successfully") {
                    $.ajax({
                        url: `{{ url('/all-comments') }}/${postid}`,
                        method: 'GET',
                        success: function(response) {
                            let commentarray = response.comments;
                            let data = '';

                            // Loop through comments and display them in reverse order (most recent first)
                            commentarray.forEach(item => {
                                data += `
                                <div class="card mt-2">
                                    <div class="card-head p-2 d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="${item.profile_img}" alt="Profile Image" class="img-circle mr-2" style="width: 30px; height: 30px;">
                                            <p class="mb-0">
                                                ${item.firstname} ${item.lastname}
                                            </p>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            ${new Date(item.created_at).toLocaleString()}
                                        </p>
                                    </div>
                                    <div class="card-body p-2">
                                        ${item.comment_name}
                                    </div>
                                </div>`;
                            });

                            // Prepend the new comment at the top
                            $(`#commentsection-inner-${postid}`).html(data);
                            $(`#comments-${postid}`).show(); // Ensure the comments section is shown after a new comment is added
                        }
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });
});






// comment

// billing
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var currentStep = 1;

    $('#continueButton').click(function() {
        if (currentStep === 1) {
            if (validateFirstForm()) {
                var post_id = $('#post_id').val();

                $.ajax({
                    url: "{{ route('first.form.submit') }}",
                    type: 'POST',
                    data: { 'post_id': post_id },
                    success: function(response) {
                        console.log('First form submitted successfully:', response);
                        $('#firstForm').fadeOut('slow', function() {
                            $('#secondForm').fadeIn('slow');
                        });
                        $('#previousButton').show();
                        $('#continueButton').text('Next');
                        currentStep++;
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting first form:', error);
                        alert('There was an error submitting your form. Please try again.');
                    }
                });
            }
        } else if (currentStep === 2) {
            if (validateSecondForm()) {
                var formData = new FormData($('#billingForm')[0]);

                $.ajax({
                    url: "{{ route('save.billing') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#secondForm').fadeOut('slow', function() {
                            $('#thirdForm').fadeIn('slow');
                        });
                        console.log('Second form submitted successfully:', response);
                        $('#continueButton').text('Submit');
                        currentStep++;
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting second form:', error);
                        alert('There was an error submitting your form. Please try again.');
                    }
                });
            }
        } else if (currentStep === 3) {
            submitForm();
        }
    });

    // Handle "Previous" button click
    $('#previousButton').click(function() {
        if (currentStep === 2) {
            $('#secondForm').fadeOut('slow', function() {
                $('#firstForm').fadeIn('slow');
            });
            $('#previousButton').hide();
            $('#continueButton').text('Continue');
            currentStep--;
        } else if (currentStep === 3) {
            $('#thirdForm').fadeOut('slow', function() {
                $('#secondForm').fadeIn('slow');
            });
            $('#continueButton').text('Next');
            currentStep--;
        }
    });

    // First form validation
    function validateFirstForm() {
        var isValid = true;
        $('#firstForm').find('input[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                alert('Please fill out all required fields in the first form.');
                return false;
            }
        });
        return isValid;
    }

    // Second form validation
    function validateSecondForm() {
        var isValid = true;
        $('#secondForm').find('input[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                alert('Please fill out all required fields in the second form.');
                return false;
            }
        });
        return isValid;
    }


    function submitForm() {
    var formData = new FormData();

    // Collect data from #firstFormContent
    $('#firstFormContent').find('input, select').each(function() {
        if ($(this).is(':radio') && $(this).is(':checked')) {
            formData.append($(this).attr('name'), $(this).val());
        } else if ($(this).val() !== '') {
            formData.append($(this).attr('name'), $(this).val());
        }
    });

    // Collect data from #billingForm
    $('#billingForm').find('input, select').each(function() {
        if ($(this).is(':radio') && $(this).is(':checked')) {
            formData.append($(this).attr('name'), $(this).val());
        } else if ($(this).val() !== '') {
            formData.append($(this).attr('name'), $(this).val());
        }
    });

    // Collect data from #thirdForm
    $('#thirdForm').find('input, select').each(function() {
        if ($(this).is(':radio') && $(this).is(':checked')) {
            formData.append($(this).attr('name'), $(this).val());
        } else if ($(this).val() !== '') {
            formData.append($(this).attr('name'), $(this).val());
        }
    });

    $('#loadingIndicator').show();

    $.ajax({
            url: "{{ route('finalize.billing') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log('Final form submitted successfully:', response);
                $('#thirdForm').fadeOut('slow', function() {
                    $('#successMessage').fadeIn('slow');
                });
                $('#loadingIndicator').hide();

            },
            error: function(xhr, status, error) {
                console.error('Error submitting final form:', error);
                alert('There was an error submitting your form. Please try again.');
                $('#loadingIndicator').hide();
            }
        });






}



});




// billing


</script>
{{-- modalpost--}}




{{-- share --}}
{{-- <script>
    var loggedInUserId = @json(auth()->user()->id);


    function sharePostAsMessage(element) {
    var postId = $(element).data('post-id');
    var userId = loggedInUserId; // Ensure this is defined correctly

    $.ajax({
        url: '/share',  // Ensure this is the correct endpoint
        method: 'POST',
        data: {
            post_id: postId,
            user_id: userId,
            _token: '{{ csrf_token() }}'  // Ensure CSRF token is correctly included
        },
        success: function(response) {
            console.log(response); // Check the response
            if (response.status === 'success') {
                alert('Post shared successfully!');
            } else {
                alert('Failed to share the post.');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText); // Log any errors
            alert('An error occurred. Please try again.');
        }
    });
}




</script> --}}





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

            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?post_id=' + postId;
            window.history.pushState({path:newUrl}, '', newUrl);
        });

        $('#imageModal').on('hide.bs.modal', function () {
            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.history.pushState({path:newUrl}, '', newUrl);
        });


    });
</script>




 <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>

 @endsection
