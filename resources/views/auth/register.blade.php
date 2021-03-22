<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v1 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="http://localhost:8000/ongaku/public/css/register-page-style.css">

</head>

<body>

<div class="wrapper" style="background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('http://localhost:8000/ongaku/public/img/register-page-bg.jpg');">
    <div class="inner">
        <div class="image-holder">
            <img src="http://localhost:8000/ongaku/public/img/register-page-bg-1.jpg" alt="">
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3>Registration Form</h3>
            <div class="form-group">
                <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-wrapper">
                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
                <i class="zmdi zmdi-email"></i>
            </div>

            <div class="form-wrapper">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input id="password-confirm" type="password"  placeholder="Confirm Password"class="form-control" name="password_confirmation" required autocomplete="new-password">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button type="submit" class="btn btn-primary">Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

</body>
</html>
