@extends('MMM.parent')
@section('title')
    {{$projects->title}}
@endsection

@section('links')
    <link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection

@section('content')

    <div class="hero page-inner">
        <div class="container">
            <div class="row justify-content-center align-items-center" style="background-image: url({{asset('Images/'.$projects->image)}}) ; size: auto " >
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">{{$projects->title}}</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item "><a href="{{route('projects.index')}}">Projects</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('project_financed'))
        <script>
            window.onload = function () {

                notif({
                    msg: "You Have Financed This Project Successfully",
                    type: "success"
                });
            }
        </script>

    @endif

    <div class="section">
        <div class="container">
            @if(Auth::guard('financier')->check())
                @if($projects->isFunded == Auth::guard('financier')->user()->id)
                    <div class="col-lg-6">
                        <p><a class="btn btn-success text-white py-3 px-4">You Have Funded This Project &nbsp;&nbsp;<i class="icon-done"></i></a></p>
                    </div><br><hr>
                @else
                    <div class="col-lg-6">
                        <p><a href="#modaldemo8" data-toggle="modal" class="btn btn-primary text-white py-3 px-4">Finance This Project &nbsp;&nbsp;<i class="icon-add"></i></a></p>
                    </div><br><hr>
                @endif
            @else
            @endif


            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="img-property-slide-wrap">

                            <script type="text/javascript" style="display:none">
                                //<![CDATA[
                                window.__mirage2 = {petok:"8d77af03b2b6e29102b0056fa3c99ca7ba9abd26-1614538189-1800"};
                                //]]>
                            </script>
                            <script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"></script>
                            <img data-cfsrc="{{asset('Images/'.$projects->image)}}" alt="Image" class="img-fluid" style="display:none;visibility:hidden;"><noscript><img src="{{asset('Images/'.$projects->image)}}" alt="Image" class="img-fluid"></noscript>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="heading text-primary">{{$projects->title}}</h2>
                    <p class="meta">{{$projects->country}}</p>
                    <p>{!! $projects->description !!} </p>


                     <div class="d-flex agent-box">

                        <div class="text">
                            <h5 class="heading text-primary">Project Card</h5>
                            <hr><br>
                            <h3 class="mb-0">Amount Requested For Financing :&nbsp;&nbsp;{{$projects->requested_financing}}</h3>
                            <hr>
                            <h3 class="mb-0">Campaign Financial Goal :&nbsp;&nbsp;{{$projects->funding_goal}}</h3>
                            <hr>
                            <h3 class="mb-0">Financial Minimum :&nbsp;&nbsp;{{$projects->minimum_amount}}</h3>
                            <hr>
                            <h3 class="mb-0">Duration of implementation : &nbsp;&nbsp;{{$projects->duration}} Day</h3>

{{--                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>--}}

                        </div>
                    </div>

                    <div class="d-flex agent-box">
                        <div class="img">
                            <img data-cfsrc="{{asset('imageUsers/'.$projects->user->image)}}" alt="Image" class="img-fluid" style="display:none;visibility:hidden;"><noscript><img src="{{asset('imageUsers/'.$projects->user->image)}}" alt="Image" class="img-fluid"></noscript>
                        </div>
                        <div class="text">
                            <h3 class="mb-0">{{$projects->user->name}}</h3>
                            <div class="meta mb-3">{{$projects->user->country}}</div>
                            <p>{{$projects->user->bio}}</p>
                            <ul class="list-unstyled social dark-hover d-flex">
                                <li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
                                <li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="me-1"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="section border-top">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Popular Projects</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p><a href="{{route('projects.index')}}" target="_blank" class="btn btn-primary text-white py-3 px-4">View all Projects</a></p>
                </div>
            </div>

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


            <!-- Finance -->
            <div class="modal" id="modaldemo8">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Finance This Project</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form action="{{route('financeProject')}}" method="post" >
                            @csrf
                            <div class="modal-body">

                                <div>
                                    <label class="mg-b-10"><b>Financing Amount : ($)</b></label><br>
                                    <input type="text" name="total_funding" class="form-control">
                                    <input type="hidden" name="project_id" value="{{$projects->id}}" class="form-control">
                                </div>

                                <br><br>

                                <label><b>Select the type of financing : </b></label> <br><br>

                                <div>
                                    <label class="rdiobox">
                                        <input checked name="rdio" type="radio" value="1" id="type_div">&nbsp; <span>Reward Investment</span></label>
                                </div>


                                <div >
                                    <label class="rdiobox"><input name="rdio" value="2" type="radio"> &nbsp;<span>Financing Investment</span>


                                    </label>
                                </div><br><br>

                                <div class="row">

                                    <div id="type">
                                        <label>Description</label>
                                        <div class="input-group">

                                            <textarea class="form-control" name="reward_description" >{{old('reward_description')}}</textarea>
                                        </div>                                        </div><!-- col-4 -->


                                    <div  id="invoice_number">
                                        <p class="mg-b-10">Investment ratio (%)</p>
                                        <input type="text" class="form-control" value="{{old('investment_ratio')}}" id="invoice_number" name="investment_ratio">

                                    </div><!-- col-4 -->


                                    <div class="form-group">
                                    <label for="exampleForControlTextarea1">Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"  ></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="submit">Add</button>
                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Cancel</button>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="body">
                        <div class="row clearfix">

                            @foreach($latest as $project)
                                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                                    <div class="box-feature mb-5">
                                        <div class="property-item">
                                            <a href="{{route('projects.show',$project->id)}}" class="img">
                                                <img data-cfsrc="{{asset('Images/'.$project->image)}}" alt="Image" class="img-fluid" style="height: 200px; width: 300px"   >
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
    <script src="{{asset('assets/js/modal.js')}}"></script>
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

<script>
        $(document).ready(function() {
            $('#invoice_number').hide();
            $('input[type="radio"]').click(function() {
                if ($(this).attr('id') == 'type_div') {
                    $('#invoice_number').hide();
                    $('#type').show();
                    $('#start_at').show();
                    $('#end_at').show();
                } else {
                    $('#invoice_number').show();
                    $('#type').hide();
                    $('#start_at').hide();
                    $('#end_at').hide();
                }
            });
        });
    </script>
@endsection
