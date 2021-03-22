<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="http://localhost:8000/ongaku/public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8000/ongaku/public/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost:8000/ongaku/public/css/reset-page-elements.css">
    <link rel="stylesheet" href="http://localhost:8000/ongaku/public/css/reset-page-style.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reset Page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong style="color:#18d26e;">Ongaku </strong> Password Reset Page</h1>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3 text">
                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Forgot Password</h3>
                            <p>Enter your Email address to get reset password</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom row mb-0">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <label class="sr-only" for="email">Email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                            <br><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
