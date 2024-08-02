

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
                                                        <label for="gallery_img">Select Image</label>
                                                        <input type="file" class="form-control-file" id="gallery_img" name="gallery_img" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gallery Images -->




                                <div class="row" id="gallery">
                                    @foreach ($gallery as $image)
                                        <div class="col-6 p-1">
                                            <a href="{{ asset('assets/gallery/' . $image->gallery_img) }}" data-lightbox="gallery">
                                                <img src="{{ asset('assets/gallery/' . $image->gallery_img) }}" alt="img" class="img-fluid my-2">
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








                    @foreach ($gallery as $item)
                    <div class="card-body">
                        <div class="container">
                            <div class="posts-section mb-5">
                                <div class="post border-bottom p-3 bg-white w-shadow">
                                    <div class="media text-muted pt-3">
                                        <div class="media-body pb-3 mb-0 small lh-125">
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <a href="#" class="text-gray-dark post-user-name">{{ Auth::user()->firstname }}</a>
                                                <span class="d-block">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y, H:i') }} <i class='bx bx-globe ml-3'></i></span>
                                            </div>
                                            <div class="gallery mt-3">
                                                @if ($item->gallery_img)
                                                <a href="{{ asset('assets/gallery/' . $item->gallery_img) }}" target="_blank">
                                                    <img src="{{ asset('assets/gallery/' . $item->gallery_img) }}" alt="Gallery image" width="400px" height="400px" class="mr-3 post-user-image">
                                                </a>
                                                <div class="mt-2">
                                                    <a href="{{ asset('assets/gallery/' . $item->gallery_img) }}" download class="btn btn-primary"><i class='bx bx-download'></i> Download</a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

    $(document).ready(function(){

        $('#likebtn').click(function(){

            let postid  = $(this).data('id');

            $('#likebtn').html('Loading..');

        $.ajax({
            url: "{{ url('/like-post') }}/"+postid,
            method: 'POST',
            data: {
                        _token: '{{ csrf_token() }}',  // Include CSRF token for security
                        post_id: postid
                    },

            success: function(response) {
                if (response.success) {
                    console.log(response)
                    $('#likebtn').html("<i class='bx bxs-like mr-2 text-dark fw-bold'>&nbsp;Like</i>");
                }
            }

        });


        });

    });

</script>


@endsection
