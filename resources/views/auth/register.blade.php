<!doctype html>
<html lang="en">

<head>
    <title>Make Me Manager | Register</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{{--    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">--}}
{{--    <meta name="author" content="GetBootstrap, design by: puffintheme.com">--}}

    <link rel="icon" href="{{asset('dashboard/assets/images/logo.png')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="dashboard/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/site.min.css">

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
                    <img class="img-fluid" src="{{asset('dashboard/assets/images/logo.png')}}" />
                </div>


                <form class="form-auth-small" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <p class="lead">Create an account</p>
                    </div>
                    <!-- Name input -->
                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="name" class="form-control round @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <!-- Email input -->
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
                        <input id="password" type="password" class="form-control round @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control round" name="password_confirmation" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary btn-round btn-block">Register</button>
                    <div class="mt-4">
                        <span>Do You have an account? <a href="{{ route('login') }}">Login</a></span>
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

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
