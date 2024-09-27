@extends('Layout.layout') {{-- Assuming 'layout' is your main layout --}}

@section('ArtsChampsContent')

<div class="container mt-5">
    <!-- Welcome Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">Welcome to <span class="font-weight-bold">ArtsChamps!</span></h1>
        <p class="lead">A place where your art finds a home. Explore, create, and showcase your talent!</p>
    </div>

    <!-- User Profile Section -->
    <div class="profile-section bg-light shadow-sm p-4 rounded mb-5">
        <h2 class="text-info mb-4">Your Profile</h2>
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <!-- Profile Image -->
                <img src="{{ Auth::user()->profile_img ? asset(Auth::user()->profile_img) : asset('default-avatar.png') }}"
     class="img-thumbnail" alt="Profile Picture"

                     style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-9">
                <!-- User Details -->
                <p class="mb-1"><strong>Name:</strong> {{ Auth::user()->firstname }}</p>
                <p class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p class="mb-1"><strong>Member Since:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
               
            </div>
        </div>
    </div>

    <!-- Settings Section -->
    {{-- <div id="settings-section" class="settings-section bg-white shadow-sm p-5 rounded">
        <h2 class="text-info mb-4">Settings</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name Field -->
            <div class="form-group mb-3">
                <label for="display_name" class="form-label">Display Name</label>
                <input type="text" class="form-control" id="display_name" name="display_name" value="{{ Auth::user()->display_name }}" required>
            </div>

            <!-- Email Field -->
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
            </div>

            <!-- Profile Picture Field -->
            <div class="form-group mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                <small class="form-text text-muted">Upload a new profile picture (optional).</small>
            </div>

            <!-- Save Changes Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>

        </form>
    </div> --}}

    <!-- Artwork Gallery Section -->


</div>

@endsection
