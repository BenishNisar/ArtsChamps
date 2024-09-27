<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Artist</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('dashboard_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/css/table.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('dashboard_assets/images/profilelogo.png')}}" />

  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
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
              <a class="nav-link" href="{{ url('artistdashboard/') }}">
                <span class="menu-icon" style="color: white">
                  <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title" style="color: white">Dashboard</span>
              </a>
            </li>





              <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/dashboard/artist/profile/') }}">
                  <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                  </span>
                  <span class="menu-title"  style="color: white">Profile</span>
                </a>
              </li>






            <li class="nav-item menu-items">
              <a class="nav-link" style="color: white" href="{{ url('dashboard/artist/gallery/') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title" style="color: white">Gallery</span>
              </a>
            </li>


            <li class="nav-item menu-items">
                <a class="nav-link" style="color: white" href="{{ url('dashboard/artist/billing/') }}">
                  <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                  </span>
                  <span class="menu-title" style="color: white">Billing</span>
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              <ul class="navbar-nav w-100">

                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h4 class="welcome-text"  id="greeting"> <span class="text-black fw-bold"></span>

                      </h4>
                        <h3 class="welcome-sub-text" id="slogan">"Every artist was first an amateur"</h3>
                      </li>

              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                  <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                    <h6 class="p-3 mb-0">Projects</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-file-outline text-primary"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-web text-info"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-layers text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all projects</p>
                  </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                  </a>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">4 new messages</p>
                  </div>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Event today</p>
                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-link-variant text-warning"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Launch Admin</p>
                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">See all notifications</p>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="{{asset(Auth::user()->profile_img)}}" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->firstname}}</p>
                      <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{url('admin/login')  }}" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">
                            Log out</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center">Advanced settings</p>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
          </nav>





          <!-- partial -->

          <div class="main-panel" style="background-color:white ;">


            <!-- contentweb-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @yield('AdminContent')

            <!-- partial -->
          </div>
          <!-- main-panel ends -->













      <script src="{{ url ('https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous')}}"></script>

    <!-- plugins:js -->
    <script src="{{asset('dashboard_assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('dashboard_assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{('dashboard_assets/js/off-canvas.js')}}"></script>
    <script src="{{('dashboard_assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{('dashboard_assets/js/misc.js')}}"></script>
    <script src="{{('dashboard_assets/js/settings.js')}}"></script>
    <script src="{{('dashboard_assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('dashboard_assets/js/dashboard.js')}}"></script>
    <script src="{{asset('dashboard_assets/js/script.js')}}"></script>


    <!-- End custom js for this page -->
  </body>

  <script>
    // Get the current time
    var currentTime = new Date();
    var currentHour = currentTime.getHours();
    var currentMinute = currentTime.getMinutes();

    // Function to format minutes with leading zero
    function formatMinutes(minutes) {
      return (minutes < 10 ? '0' : '') + minutes;
    }

    // Get the greeting element by its ID
    var greetingElement = document.getElementById('greeting');

    if (currentHour >= 5 && currentHour < 12) {
      greetingElement.textContent = 'Good Night ';
    } else if (currentHour >= 12 && currentHour < 24) {
      greetingElement.textContent = 'Good Morning';
    } else {
      greetingElement.textContent = 'Good After';
    }

    // Combine username and greeting in one line
    greetingElement.textContent += ' ';

    // Add a custom greeting for 11:40
    if (currentHour === 11 && currentMinute === 40) {
      greetingElement.innerHTML += '<br>Special greeting for 11:40!';
    }

    // Function to change h3 content one by one
    function changeH3ContentSequentially() {
      // Select the h3 element
      var h3Element = document.getElementById('slogan');

      // Array of slogans
      var slogans = [
        "Every artist was first an amateur.",
        "Art is the stored honey of the human soul.",
        "Creativity takes courage  Henri Matisse."
      ];

      // Function to update slogan with a delay
      function updateSlogan(index) {
        // Update the content of h3 element
        h3Element.innerText =  slogans[index] ;

        // Increment index for the next slogan
        index++;

        // Change slogan every 5 seconds, if there are more slogans
        if (index < slogans.length) {
          setTimeout(function () {
            updateSlogan(index);
          }, 5000);
        }
      }

      // Start updating slogans
      updateSlogan(0);
    }


    setTimeout(changeH3ContentSequentially, 1000);



  </script>
</html>
