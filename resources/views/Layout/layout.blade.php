<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Arts Champs</title>

<meta name="csrf-token" content="{{ csrf_token() }}">



<link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url  ('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
<link rel="stylesheet" href="{{ url ('https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link href="{{asset('assets/css/messenger.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/loginpg.css')}}" rel="stylesheet">
<!------------------Lightbox for Gallery-------------->
<link rel="stylesheet" href="lightbox.min.css">
<script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
<!------------------Lightbox for Gallery-------------->

<style>
    .form-inline {
    display: flex;
    align-items: center;
}

#search {
    padding-right: 2.5rem; /* Adjust this value based on button size */
    border-right: none;
}

.btn {
    border-radius: 0px;
}

.position-relative {
    position: relative;
}

.position-absolute {
    position: absolute;


}

</style>
</head>
<body>
<!-------------------------------Navigation Starts------------------>
<nav class="navbar navbar-expand-md navbar-dark mb-4">
    <a href="/" class="navbar-brand"><img src="{{asset('assets/img/artschamps_profile.png')}}"
        alt="logo" class="img-fluid" width="60px" height="60px"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="responsive">
        <ul class="navbar-nav mr-auto text-capitalize">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link active" style="color:black; font-weight: bold;">Home</a></li>
            <li class="nav-item"><a href="{{url('/Home/profile')}}" class="nav-link" style="color:black; font-weight: bold;">Profile</a></li>
            <li class="nav-item"><a href="{{url('/Home/messages')}}" class="nav-link" style="color:black; font-weight: bold;">Messages</a></li>
            <li class="nav-item"><a href="{{url('/Home/gallery')}}" class="nav-link" style="color:black; font-weight: bold;">Gallery</a></li>
            <li class="nav-item"><a href="{{url('/Home/messages')}}" class="nav-link d-md-none" style="color:white; font-weight: bold;">
                    Growl</a></li>
        </ul>




        <form action="{{ route('admin.search-user') }}" method="GET" class="form-inline ml-auto d-none d-md-block">
            <input type="text" name="search" id="search" placeholder="Search" class="form-control form-control-sm">
            <button type="submit" class="btn btn-primary btn-sm"
            style="position: relative;
            right:10px;
            background:purple;
            border-radius:10%;
            ">
                <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
            </button>
        </form>






        <a href="#" id="notification-icon" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i class="far fa-bell ml-3 d-none d-md-block"></i></a>
        <div class="dropdown ml-3 d-none d-md-block">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset(Auth::user()->profile_img)}}"  alt="" class="rounded-circle" width="32px" height="32px">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item " href="{{url('/profile')}}">Profile</a>
                <a class="dropdown-item" href="{{url('/settings')}}">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="{{url('/login')}}">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!---------------------------------------------Ends navigation------------------------------>


<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>

@yield("ArtsChampsContent")

<!------------------------JavaScript------------->
 {{-- <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js')}}"></script>
  <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}"></script>  --}}
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js')}}"></script>

<script>
    document.getElementById('notification-icon').addEventListener('click', function() {
        var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasScrolling'));
        offcanvas.show();
    });
</script>

</body>
</html>
