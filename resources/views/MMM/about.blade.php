@extends('MMM.parent')
@section('title')
    {{'About'}}
@endsection

@section('content')


    <div class="hero page-inner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">About</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">About</li>
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
                    <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur
                        similique debitis vel nisi qui reprehenderit totam? Quod maiores.</p>
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
                        <img data-cfsrc="{{asset('MMM/images/hero_2.jpg')}}" alt="Image" class="img-fluid"
                             style="display:none;visibility:hidden;">
                        <noscript><img src="{{asset('MMM/images/hero_2.jpg')}}" alt="Image" class="img-fluid"></noscript>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
<span class="wrap-icon me-3">
<span class="icon-home2"></span>
</span>
                        <div class="feature-text">
                            <h3 class="heading">Quality properties</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                                iste.</p>
                        </div>
                    </div>
                    <div class="d-flex feature-h">
<span class="wrap-icon me-3">
<span class="icon-person"></span>
</span>
                        <div class="feature-text">
                            <h3 class="heading">Top rated agents</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                                iste.</p>
                        </div>
                    </div>
                    <div class="d-flex feature-h">
<span class="wrap-icon me-3">
<span class="icon-security"></span>
</span>
                        <div class="feature-text">
                            <h3 class="heading">Easy and safe</h3>
                            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                                iste.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">2917</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">3918</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">38928</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">1291</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonials bg-light">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">The Team</h2>
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
                    <div class="item">
                        <div class="testimonial">
                            <img data-cfsrc="{{asset('MMM/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                 style="display:none;visibility:hidden;">
                            <noscript><img src="{{asset('MMM/images/person_1.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            </noscript>
                            <h3 class="h5 text-primary">James Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <img data-cfsrc="{{asset('MMM/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                 style="display:none;visibility:hidden;">
                            <noscript><img src="{{asset('MMM/images/person_2.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            </noscript>
                            <h3 class="h5 text-primary">Carol Houston</h3>
                            <p class="text-black-50">Designer, Co-founder</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <img data-cfsrc="{{asset('MMM/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                 style="display:none;visibility:hidden;">
                            <noscript><img src="{{asset('MMM/images/person_3.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            </noscript>
                            <h3 class="h5 text-primary">Synthia Cameron</h3>
                            <p class="text-black-50">Designer, Co-founder</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial">
                            <img data-cfsrc="{{asset('MMM/images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4"
                                 style="display:none;visibility:hidden;">
                            <noscript><img src="{{asset('MMM/images/person_4.jpg')}}" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
                            </noscript>
                            <h3 class="h5 text-primary">Davin Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                                Semantics, a large language ocean.</p>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-linkedin"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
