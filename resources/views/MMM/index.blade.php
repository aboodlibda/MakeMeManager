@extends('MMM.parent')
@section('title')
    {{'Main'}}
@endsection

@section('content')

    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url(&#x27;{{asset('frontImages/'.$front->home_page_image)}}&#x27;)"></div>
{{--            <div class="img overlay" style="background-image: url(&#x27;MMM/images/hero_2.jpg&#x27;)"></div>--}}
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    @if(Auth::guard('financier')->check())
                        <h1 class="heading" data-aos="fade-up">Get the best projects to finance</h1>
                    @elseif(Auth::guard('web')->check())
                    <h1 class="heading" data-aos="fade-up">Bring your creative project to life</h1>
                    @else
                    <h1 class="heading" data-aos="fade-up">The best environment for financing projects</h1>
                    @endif
                    <h1 class="heading" data-aos="fade-up">

{{--                        @if(Auth::guard('web')->check())--}}
{{--                            Hello {{Auth::guard('web')->user()->name}}--}}
{{--                        @elseif(Auth::guard('financier')->check())--}}
{{--                            Hello {{Auth::guard('financier')->user()->name}}--}}
{{--                        @endif--}}
                    </h1>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-5" data-aos="fade-up" style="justify-content: center"
                          data-aos-delay="200">
                        <!--<input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. New York">-->
                        <!--<button type="submit" class="btn btn-primary text-white py-3 px-4">إبدأ مشروعك</button>-->
{{--                        @if (\Auth::check())--}}


                        @if(Auth::guard('financier')->check())
                            <p><a href="{{route('projects.index')}}" target="" class="btn btn-primary text-white py-3 px-4" style="width: 200px">Browse projects</a></p>
                        @elseif(Auth::guard('web')->check())
                            <p><a href="{{route('projects.create')}}" target="" class="btn btn-primary text-white py-3 px-4" style="width: 200px">Start Your project</a></p>
                        @endif
                    </form>
                    <!--<p class="lead narrow-w mb-5" data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>-->
                    <!--<p data-aos="fade-up" data-aos-delay="400"><a href="#" class="text-white has-arrow">View Properties <span class="icon-keyboard_backspace"></span></a></p>-->

                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{route('financiers.index')}}"><div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3>Best Financiers</h3>
                    </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                   <a href="{{route('projects.index')}}"><div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3>Best Ideas</h3>
                    </div>
                   </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{route('entrepreneurs')}}"><div class="box-feature">
                            <span class="flaticon-building"></span>
                            <h3>Best Entrepreneurs</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
        {{--    Latest Projects--}}
            <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Latest Projects</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p><a href="{{route('projects.index')}}" class="btn btn-primary text-white py-3 px-4">View All Projects</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">

                            @foreach($projects as $project)
                            <div class="property-item">
                                <a href="{{route('projects.show',$project->id)}}" class="img">
                                    <img data-cfsrc="{{asset('Images/'.$project->image)}}" alt="Image" class="img-fluid"    >
                                    <noscript><img src="{{asset('Images/'.$project->image)}}" alt="Image" class="img-fluid"></noscript>
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>${{$project->requested_financing}}</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">{{$project->country}}</span>
                                        <span class="city d-block mb-3">{{$project->title}}</span>
                                        <div class="specs d-flex">
                                        <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-list me-2"></span>
                                        <span class="caption">{{$project->category}}</span>
                                        </span>
                                            <span class="d-block d-flex align-items-center">
                                        <span class="icon-attach_money me-2"></span>
                                        <span class="caption">2 Financiers</span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                            <a href="property-single.html" class="img">
                                <script type="text/javascript" style="display:none">
                                    //<![CDATA[
                                    window.__mirage2 = {petok: "1ee707f0092af1ea6ba929d49c0d26008ec18ded-1614538176-1800"};
                                    //]]>
                                </script>
                                <script type="text/javascript" src="{{asset('MMM/js/mirage2.min.js')}}"></script>

                            </a>

                        </div>
                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section sec-testimonials pt-0">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Best Financiers</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>
                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                </div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    @foreach($financiers as $financier)
                    <div class="item">
                        <div class="testimonial">
                            <img data-cfsrc="{{asset('imageFinanciers/'.$financier->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                 style="display:none;visibility:hidden;">
                            <noscript><img src="{{asset('imageFinanciers/'.$financier->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            </noscript>
                            <h3 class="h5 text-primary">{{$financier->name}}</h3>
                            <blockquote>
                                <p>&ldquo;{{$financier->bio}}&rdquo;</p>
                            </blockquote>
                            <p class="text-black-50">{{$financier->jop}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 border-top">
        <div class="container">
            <div class="property-item">
                <a href="property-single.html" class="img">
                    {{--                                    <script type="text/javascript" style="display:none">--}}
                    {{--                                        //<![CDATA[--}}
                    {{--                                        window.__mirage2 = {petok: "1ee707f0092af1ea6ba929d49c0d26008ec18ded-1614538176-1800"};--}}
                    {{--                                        //]]>--}}
                    {{--                                    </script>--}}
                    <script type="text/javascript" src="{{asset('MMM/js/mirage2.min.js')}}"></script>

                </a>

            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="row mb-5 align-items-center">
                        <div class="col-lg-6">
                            <h2 class="font-weight-bold text-primary heading">Funded Projects</h2>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <p><a href="{{route('funded.index')}}" class="btn btn-primary text-white py-3 px-4">View All Funded Projects</a></p>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row clearfix">

                            @foreach($funded as $fund)
                                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="box-feature mb-5">
                                        <div class="property-item">
                                            <a href="{{route('projects.show',$fund->project->id)}}" class="img">
                                                <img data-cfsrc="{{asset('Images/'.$fund->project->image)}}" alt="Image" class="img-fluid" style="height: 200px; width: 400px"   >
                                                <noscript><img src="{{asset('Images/'.$fund->project->image)}}" alt="Image" class="img-fluid"></noscript>
                                            </a>
                                            <div class="property-content">
                                                <div class="price mb-2"><span>${{$fund->project->requested_financing}}</span></div>
                                                <div>
                                                    <span class="d-block mb-2 text-black-50">{{$fund->project->country}}</span>
                                                    <span class="city d-block mb-3">{{$fund->project->title}}</span>
                                                    <div class="specs d-flex">
                                        <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-list me-2"></span>
                                        <span class="caption">{{$fund->project->category}}</span>
                                        </span>
                                                        <span class="d-block d-flex align-items-center">
                                        <span class="icon-attach_money me-2"></span>
                                        <span class="caption">2 Financiers</span>
                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>

    <div class="section section-4 border-top">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Best Entrepreneurs</h2>
                    </div>
                </div>
                <hr>
                <br>
                <br>
                @foreach($users as $user)
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
                                        <img data-cfsrc="{{asset('imageUsers/'.$user->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                             style="display:none;visibility:hidden;">
                                        <noscript><img src="{{asset('imageUsers/'.$user->image)}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                                        </noscript>
                                        <h3 class="h5 text-primary">{{$user->name}}</h3>
                                        <p class="text-black-50">{{$user->jop}}</p>
                                        <p>{{$user->bio}}</p>
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



@endsection

