@extends('Layout.Dashboard_layout')

<style>
    .dash_card {
        background-image: url('/assets/img/art_one.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }

    h5 {
        position: relative;
        top: 190px;
        left: 150px;
    }

    .card-title {
        position: relative;
        left: -15px;
        top: 260px;
        color: black;
        background-color: purple;
        border-radius: 12px;
        border: 1px solid purple;
    }

    .card-title:hover {
        background-color: #e8a84f;
        border: 1px solid purple;
    }

    .dash_card_two {
        background-image: url('/assets/img/art_two.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }

    .dash_card_three {
        background-image: url('/assets/img/art_three.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }

    .dash_card_four {
        background-image: url('/assets/img/arts_four.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }

    .dash_card_five {
        background-image: url('/assets/img/arts_five.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }

    .dash_card_six {
        background-image: url('/assets/img/arts_six.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 300px;
        height: 200px;
    }
</style>

@section('AdminContent')
    @if (Auth::user()->role_id == 1)
        @include('Dashboard.admin.admin')
    @elseif(Auth::user()->role_id == 2)
        @include('Dashboard.admin.artist')
    @endif
@endsection
