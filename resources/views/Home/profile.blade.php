@extends('Layout.layout')
@section('ArtsChampsContent')
      <!-----------------------------------Banner/img Starts-------------------->


      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <!-- Profile Picture and Bio Data Section -->
            <div class="col-md-6 mt-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Profile Picture</h5>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div class="profile-img-container mb-5">
                            <img id="profile-img" src="{{ asset('assets/img/profilelogo.png') }}" alt="Profile Image" class="rounded-circle" width="120px" height="120px">
                            <input type="file" id="profileFileInput" style="display: none;" onchange="previewProfileImage(event)">
                            <label for="profileFileInput" class="camera-icon">
                                <img src="{{ asset('assets/img/ArtsCamera_icon.png') }}" alt="Change Image" width="70px" height="70px">
                            </label>
                        </div>
                        <div class="bio-data" style="margin-right:200px;margin-top:-20px;">
                            @if(1==1)
                            <h6> <b>  Name: </b>{{ Auth::user()->firstname }}</h6>
                            <h6> <b>Bio: </b>  {{ $about ? $about->bio : 'No bio available' }}</h6>
                            <h6>  <b>Date Of Birth:</b>  {{ Auth::user()->dob }}</h6>

                            <h6> <b>Social Media: </b> {{ Auth::user()->social_media }}</h6>
                                {{-- <h6>Art Style: {{ Auth::user()->userAbout->art_style }}</h6> --}}
                                {{-- <h6>Rating: {{ Auth::user()->userAbout->rating }}</h6> --}}
                                {{-- <h6>Total Sales: {{ Auth::user()->userAbout->total_sales }}</h6> --}}
                                {{-- <h6>Join Date: {{ Auth::user()->userAbout->join_date }}</h6> --}}
                            @else
                                <h6>Name: Not Available</h6>
                                <h6>Bio: Not Available</h6>
                                <h6>Date Of Birth: Not Available</h6>
                                <h6>Social Media: Not Available</h6>
                                <h6>Art Style: Not Available</h6>
                                <h6>Rating: Not Available</h6>
                                <h6>Total Sales: Not Available</h6>
                                <h6>Join Date: Not Available</h6>
                            @endif
                        </div>


                    </div>
                </div>
            </div>

            <!-- Banner Image Section -->
            <div class="col-md-6">
                <div class="mb-4">
                    <h5 class="text-center">Banner Image</h5>
                    <div class="banner-img-container mb-3 text-center">
                        <img id="banner-img" src="{{ asset('assets/img/Artsbanner.png') }}" alt="Banner Image" class="img-fluid">
                        <input type="file" id="bannerFileInput" style="display: none;" onchange="previewBannerImage(event)">
                        <label for="bannerFileInput" class="btn btn-primary mt-2"  style="border:#863C71;margin-bottom:7px;background:linear-gradient(45deg,#863C71,#FEE6A1);color:black;font-family:bold;
                        float: right;border-radius:5px;"
                        >Change Banner Image</label>
                    </div>
                </div>

                <!-- Navigation Links Section -->
                <div class="text-center">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Others</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Request</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


         <!---------------------------MOdal Section  satrts------------------->

        <!---------------------------MOdal Section starts------------------->

<div class="modal fade" id="modalview" >
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

                            <img src="{{ asset('public/assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Archer andu and <strong> 5 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-dhg.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Jchob Thunder and <strong> 1 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-fat.jpg') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

                            <div class="media-body text-dark">
                                <h6 class="media-header">Mark Otto and <strong> 3 others</strong></h6>
                                <p class="media-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>

                        </li>
                    </a>
                    <hr class="my-3">

                    <a href="#" class="text-decoration-none">
                        <li class="media hover-media">

                            <img src="{{ asset('public/assets/img/avatar-mdo.png') }}" alt="img" width="60px" height="60px" class="rounded-circle mr-3">

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


        <!-------------------------------MOdal Ends---------------------------->































        <!--------------------Image Portfolio----------------->

        <div class="container ">
            <button class="btn " style="border:#863C71;margin-bottom:7px;background:linear-gradient(45deg,#863C71,#FEE6A1);color:black;font-family:bold; float: right;border-radius:5px;" type="button" onclick="document.getElementById('fileInput').click()">Add Photos</button>
            <input type="file" id="fileInput" style="display: none;">
        </div>
                <div class="grid-template container my-d4 ">


            <div class="item-1">
                <a href="#" data-lightbox="id"><img src="{{ $about ? $about->photos : 'No bio available' }}" alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            </div>

            <div class="item-2">
                <a href="#" data-lightbox="id"><img src="{{ asset('assets/portfolio/img2.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;"></a>
            </div>

                <div class="item-3">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img3.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-4">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img4.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-5">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img5.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-6">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img6.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-7">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img7.jpg') }}" alt="" class="img-fluid" style="width:455px; height: 255px;">
                    </a>
                </div>
                <div class="item-8">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img8.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-9">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img9.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-10">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img10.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>
                <div class="item-11">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img11.jpg') }}" alt="" class="img-fluid" style="width:455px; height: 255px;">
                    </a>
                </div>
                <div class="item-12">
                    <a href="#" data-lightbox="id">
                        <img src="{{ asset('assets/portfolio/img12.jpg') }}" alt="" class="img-fluid" style="width:217px; height: 255px;">
                    </a>
                </div>





        </div>


















@endsection
