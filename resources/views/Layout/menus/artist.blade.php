<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href=""><img src="{{asset  ('assets/img/profilelogo.png')}}" style="width: 50px;height:50px;border-radius:20%;" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset  ('assets/img/profilelogo.png')}}""  style="width: 50px;height:50px;border-radius:20%;"  alt="logo" /></a>
    </div>
    <ul class="nav">


      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('dashboard/') }}">
          <span class="menu-icon" style="color: white">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title" style="color: white">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category" >
          <span class="nav-link"  style="color: white">Post</span>


        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/dashboard/admin/post/') }}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title"  style="color: white">Add Post</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/dashboard/admin/profile/') }}">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title"  style="color: white">Profile</span>
          </a>
        </li>




      <li class="nav-item menu-items">
        <a class="nav-link" style="color: white" href="{{ url('/dashboard/admin/artwork/') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Artwork</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" style="color: white" href="{{ url('dashboard/admin/gallery/') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title" style="color: white">Gallery</span>
        </a>
      </li>



      <li class="nav-item menu-items">
        <a class="nav-link" style="color: white" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Social Interaction</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item" > <a class="nav-link" style="color: white" href="{{ url('dashboard/admin/messages/') }}"> Message </a></li>
              <li class="nav-item" > <a class="nav-link" style="color: white" href="{{ url('dashboard/admin/like/') }}">
                  Like </a></li>



          </ul>
        </div>
      </li>

    </ul>
  </nav>
