<!doctype html>
<html lang="en">

<head>
    <title>Make Me Manager | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="{{asset('Dashboard/assets/images/logo.png')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/animate-css/vivify.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">

</head>

<body class="theme-cyan font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body">
                <div class="login-img">
                    <img class="img-fluid" src="{{asset('Dashboard/assets/images/logo.png')}}" />
                </div>


                <form class="form-auth-small" action="{{route('login')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <p class="lead">Login To Entrepreneur Account</p>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" class="form-control round @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control round @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                            <span>Remember me</span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    <div class="mt-4">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
                        <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                    </div>
<br>
                    <div>
                        <p class="lead"><strong>Are You A Financier ?</strong> <br>
                            <a href="{{route('financier.login')}}">Login From Here</a>
                        </p>
                    </div>
                </form>
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
