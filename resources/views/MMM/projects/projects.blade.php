@extends('MMM.parent')
@section('title')
    {{'Projects'}}
@endsection

@section('links')
    <link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('content')


    <div class="hero page-inner" style="background-image: url('dashboard/assets/images/projects.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center" >
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Projects</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Entrepreneur Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    @if (session()->has('project_added'))
        <script>
            window.onload = function () {

                notif({
                    msg: "Project Added Successfully",
                    type: "success"
                });
            }
        </script>

    @endif

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
                    <div class="col-lg-6">
                        <p><a href="{{route('projects.create')}}" class="btn btn-primary text-white py-3 px-4">Create New Project</a></p>
                    </div>
                    <div class="body">
                        <div class="row clearfix">

                @foreach($projects as $project)
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature mb-5">
                    <div class="property-item">
                        <a href="{{route('projects.show',$project->id)}}" class="img">
                            <img data-cfsrc="{{asset('Images/'.$project->image)}}" alt="Image" class="img-fluid" style="height: 200px; width: 400px"   >
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
                </div>
            </div>

                            @endforeach

                        </div>

                        </div>
                          </div>
                            </div>


                                    </div>


    </div>


@endsection

@section('scripts')
    <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
