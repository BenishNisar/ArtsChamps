<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<style>
    body {
        background-color: #3178eb;
    }

    .container {
        margin-top: 80px;
        text-align: center;

    }

    #ppp {
        background-color: white;
        border-radius: 25px;
    }

    p {
        font-weight: bold;
    }

    input[type=text],
    input[type=Password] {
        border-radius: 50px;
        height: 39px;
    }

    input[type=text]:focus,
    input[type=Password]:focus {
        box-shadow: none;
    }

    input[type=checkbox] {}

    .btn-info {
        background-color: #3178eb;
        width: 85%;
        border-radius: 18px;
        height: 40px;
    }

    ul li {
        float: left;
        font-size: 35px;
        padding-left: 10px;
    }

    ul li a {
        transition: 0.5s ease;

    }
    .text-danger{
        color: red !important;
    }
</style>

<body>

    <div class="container">

        <div class="col-md-4"></div>



        <div class="col-md-4" id="ppp">

            @if (session()->has('status'))
                <div class="alert alert-success">
                    <p>{{ session()->get('status') }}</p>
                </div>
            @endif
            @if (session()->has('status1'))
                <div class="alert alert-danger">
                    <p>{{ session()->get('status1') }}</p>
                </div>
            @endif

            <form action="{{ url('/login-store') }}" method="POST">
                @csrf
                <br>
                <img src="{{ asset('assets/img/artschamps_profile.png') }}" alt=""
                    style="height: 130x;width: 120px;"><br><br><br>

                <p style="text-align:start;">Email</p>
                <input type="text" name="email" placeholder="Enter Email" required="" class="form-control">
                @error('email')
                            <label class="text-danger">{{ $message }}</label>
                @enderror
                <br>
                <p style="text-align:start;">Password</p>
                <input type="Password" name="password" placeholder="Password" required="" class="form-control">
                @error('password')
                <label class="text-danger">{{ $message }}</label>
                @enderror
                <br>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <a href="#">Forget password?</a>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-info">Login</button>
                <br><br>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-md-12">
                        <span>If you have Not Account </span>
                        <a   href="{{ url('/register') }}">Sign up</a>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4"></div>
                </div>


            </form>
            <br>
        </div>



        <div class="col-md-4"></div>
    </div>




</body>

</html>
