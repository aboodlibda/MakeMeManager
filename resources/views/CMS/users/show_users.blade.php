@extends('CMS.parent')

@section('title')
    {{$user->name}}
@endsection

@section('head')

@endsection

@section('content')

    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h1>Users</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('indexUsers')}}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$user->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row clearfix">

        <div class="col-lg-12 col-md-8 col-sm-12">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card c_grid c_yellow">
                        <div class="body text-center">
                            <div class="circle">
                                <img class="rounded-circle" src="{{asset('imageUsers/'.$user->image)}}" alt="">
                            </div>
                            <h6 class="mt-3 mb-0">{{$user->name}}</h6>
                            <span>{{$user->email}}</span>
                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                                <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <span class="btn btn-default btn-sm">Follow</span>
                            <span class="btn btn-default btn-sm">Message</span>
                            <br>
                            <br>
                            <div>

                                <span class="btn btn-default btn-sm">
                                <small class="text-muted">Email address: </small>
                                <p>{{$user->email}}</p>
                                </span>
                                &nbsp;&nbsp;&nbsp;

                                <span class="btn btn-default btn-sm">
                                <small class="text-muted">Jop: </small>
                                <p>{{$user->jop}}</p>
                                </span>
                                &nbsp;&nbsp;&nbsp;

                                <span class="btn btn-default btn-sm">
                                <small class="text-muted">Gender: </small>
                                <p>{{$user->gender}}</p>
                                </span>
                                &nbsp;&nbsp;&nbsp;

                                <span class="btn btn-default btn-sm">
                                <small class="text-muted">Country: </small>
                                <p>{{$user->country}}</p>
                                </span>
                                &nbsp;&nbsp;&nbsp;

                                <span class="btn btn-default btn-sm">
                                <small class="text-muted">Birth Date: </small>
                                <p>{{$user->birthday}}</p>
                                </span>
                                &nbsp;&nbsp;&nbsp;

                                <span class="btn btn-default btn-sm">
                                    <small class="text-muted">Address: </small>
                                    <p>{{$user->address}}</p></span>




                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')

@endsection
