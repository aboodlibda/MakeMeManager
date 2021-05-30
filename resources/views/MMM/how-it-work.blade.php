@extends('MMM.parent')
@section('title')
    {{'How It Work'}}
@endsection

@section('content')


    <div class="hero page-inner" style="background-image: url({{asset('frontImages/'.$front->how_it_work_image)}})">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">How It Work</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">How It Work</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 border-top">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading text-primary mb-4">Make Me Manager</h2>
                    <p class="text-black-50">{{$front->how_it_work_text_1}}</p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="img-about dots">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {petok: "8d77af03b2b6e29102b0056fa3c99ca7ba9abd26-1614538189-1800"};
                            //]]>
                        </script>
                        <script type="text/javascript"
                                src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                        <img data-cfsrc="{{asset('frontImages/'.$front->how_it_work_image)}}" alt="Image" class="img-fluid"
                             style="display:none;visibility:hidden;">
                        <noscript><img src="{{asset('frontImages/'.$front->how_it_work_image)}}" alt="Image" class="img-fluid"></noscript>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="text-black-50">{{$front->how_it_work_text_2}}</p>
                </div>
            </div>
        </div>
    </div>




@endsection
