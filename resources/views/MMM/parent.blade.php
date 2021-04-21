<!doctype html>
<html lang="en">
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

<title>Make Me Manager |@yield('title')</title>
@yield('links')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('MMM/css/css2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('MMM/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/css/uicons-regular-rounded.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('MMM/css/style_1.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>




</head>


<body>
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="{{route('home')}}" class="logo m-0 float-start">Make Me Manager</a>
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="has-children">
                        <a href="properties.html">Properties</a>
                        <ul class="dropdown">
                            <li><a href="#">Buy Property</a></li>
                            <li><a href="#">Sell Property</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('projects.index')}}">Projects</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="HeaderMenu-link flex-shrink-0 d-inline-block no-underline border color-border-tertiary rounded px-2 py-1"><a href="{{route('login')}}">Sign in</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li class="HeaderMenu-link flex-shrink-0 d-inline-block no-underline border color-border-tertiary rounded px-2 py-1"><a href="{{route('register')}}">Sign up</a></li>
                        @endif
                    @else



                        <li class="has-children">

                            <a  href="#" role="button">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{route('profile',Auth::user()->id)}}">Profile</a></li>
                                <li><a href="{{route('myProjects')}}">My Projects
                                       &nbsp;&nbsp; <span class="badge btn-info">{{\Illuminate\Support\Facades\Auth::user()->projects->count()}}</span>
                                    </a></li>
                                <li><a href="#">settings</a></li>
                                <li>

                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                </li>


                            </ul>


                        </li>

                    @endguest
                </ul>

                <a href="#"
                   class="burger me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                   data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </div>
</nav>

    @yield('content')



<div class="site-footer">
    <div class="container">
        <div class="row justify-content-center mb-5 footer-cta">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4 ">Be a part of our growing real state agents</h2>
                <p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Real Estate
                        agent</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                        <li><a href="email-protection.html#d3babdb5bc93beaab7bcbeb2babdfdb0bcbe"><span
                                    class="__cf_email__" data-cfemail="95fcfbf3fad5f8ecf1faf8f4fcfbbbf6faf8">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Sources</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Links</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="mb-0">Copyright &copy;<script data-cfasync="false" src="{{asset('MMM/js/email-decode.min.js')}}"></script>
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved
                    {{--                    |--}}
                </p>
            </div>
        </div>
    </div>
</div>

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<script async src="{{asset('MMM/js/js_1.js')}}"></script>
<script src="{{asset('MMM/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('MMM/js/tiny-slider.js')}}"></script>
<script src="{{asset('MMM/js/aos.js')}}"></script>
<script src="{{asset('MMM/js/navbar.js')}}"></script>
<script src="{{asset('MMM/js/counter.js')}}"></script>
<script src="{{asset('MMM/js/custom.js')}}"></script>

@yield('scripts')
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
