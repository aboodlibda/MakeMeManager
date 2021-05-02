@extends('MMM.parent')
@section('title')
    {{'Financiers'}}
@endsection

@section('content')

    <div class="hero page-inner" style="background-image: url('dashboard/assets/images/projects.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Financiers</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Financiers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



    <div class="section section-4 border-top">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">The Financiers</h2>
            </div>
        </div>
            <hr>
            <br>
            <br>
                @foreach($financiers as $financier)
            <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-5">
                    <div class="property-item">
                <div class="item">
                    <div class="testimonial">
                        <script type="text/javascript" style="display:none">
                            //<![CDATA[
                            window.__mirage2 = {petok: "8d77af03b2b6e29102b0056fa3c99ca7ba9abd26-1614538189-1800"};
                            //]]>
                        </script>
                        <script type="text/javascript"
                                src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                        <img data-cfsrc="{{asset('imageFinanciers/'.$financier->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                             style="display:none;visibility:hidden;">
                        <noscript><img src="{{asset('imageFinanciers/'.$financier->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                        </noscript>
                        <h3 class="h5 text-primary">{{$financier->name}}</h3>
                        <p class="text-black-50">{{$financier->jop}}</p>
                        <p>{{$financier->bio}}</p>
                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                    </div></div></div>
            @endforeach
        </div>

    </div>
    </div>
    </div>
    </div>

@endsection
