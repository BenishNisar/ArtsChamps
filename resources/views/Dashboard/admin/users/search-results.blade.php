<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}">
</head>
<body>


    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>
        @if ($users->isEmpty())
            <p>No users found.</p>
        @else
            <div class="list-group">
                @foreach ($users as $user)
                    <a href="{{ route('admin.show-profile', ['id' => $user->id]) }}" class="list-group-item list-group-item-action">
                        <img style="border-radius:50%; width:50px;height:50px;"  src="{{ asset($user->profile_img) }}" alt="Profile Image" class="profile-picture">

                        <span>Name  :  {{ $user->firstname }} {{ $user->lastname }}</span>

                    </a>
                @endforeach
            </div>
        @endif
    </div>

    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
