@extends('CMS.parent')

@section('title')
    {{'Home'}}
@endsection

@section('content')

    <div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>

    <div class="row clearfix">
        <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
                <div class="body ribbon">
                    <div class="ribbon-box green">
                            {{$users}}
                    </div>
                    <a href="{{route('indexUsers')}}" class="my_sort_cut text-muted">
                        <i class="icon-users"></i>
                        <span>Entrepreneurs</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
                <div class="body ribbon">
                    <div class="ribbon-box orange">
                        {{$projects}}
                    </div>
                    <a href="{{route('projectIndex')}}" class="my_sort_cut text-muted">
                        <i class="icon-grid"></i>
                        <span>Projects</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
                <div class="body ribbon">
                    <div class="ribbon-box green">
                        {{$financiers}}
                    </div>
                    <a href="{{route('indexFinanciers')}}" class="my_sort_cut text-muted">
                        <i class="icon-calendar"></i>
                        <span>Financiers</span>
                    </a>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
            <div class="card">
                <div class="body ribbon">
                    <div class="ribbon-box orange">
                        {{$funded}}
                    </div>
                    <a href="{{route('projectFundedIndex')}}" class="my_sort_cut text-muted">
                        <i class="icon-calendar"></i>
                        <span>Funded Projects</span>
                    </a>
                </div>
            </div>
        </div>

{{--        <div class="col-6 col-md-4 col-xl-2">--}}
{{--            <div class="card">--}}
{{--                <div class="body">--}}
{{--                    <a href="accounts.html" class="my_sort_cut text-muted">--}}
{{--                        <i class="icon-calculator"></i>--}}
{{--                        <span>Accounts</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-6 col-md-4 col-xl-2">--}}
{{--            <div class="card">--}}
{{--                <div class="body">--}}
{{--                    <a href="report.html" class="my_sort_cut text-muted">--}}
{{--                        <i class="icon-pie-chart"></i>--}}
{{--                        <span>Report</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="header">
                    <h2>Employee Structure</h2>
                </div>
                <div class="body text-center">
                    <div id="chart-bar-stacked" style="height: 130px"></div>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-6">
                            <h6 class="mb-0">50</h6>
                            <small class="text-muted">Male</small>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-0">17</h6>
                            <small class="text-muted">Female</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-value float-right text-muted"><i class="wi wi-fog"></i></div>
                                <h3 class="mb-1">12°C</h3>
                                <div>London</div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-value float-right text-muted"><i class="wi wi-day-cloudy"></i>
                                </div>
                                <h3 class="mb-1">18°C</h3>
                                <div>New York</div>
                            </div>
                            <div class="carousel-item">
                                <div class="card-value float-right text-muted"><i class="wi wi-sunrise"></i>
                                </div>
                                <h3 class="mb-1">37°C</h3>
                                <div>New Delhi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="header">
                    <h2>Employee Satisfaction</h2>
                </div>
                <div class="body text-center">
                    <div id="chart-area-spline-sracked" style="height: 130px"></div>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-6">
                            <h6 class="mb-0">195</h6>
                            <small class="text-muted">Last Month</small>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-0">163</h6>
                            <small class="text-muted">This Month</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted"><i class="icon-user"></i></div>
                    <h3 class="mb-1">13</h3>
                    <div>New Employee</div>
                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="header">
                    <h2>Salary Statistics</h2>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <small class="text-muted">Salary Statistics Performance on this year</small>
                    <div id="flotChart" class="flot-chart"></div>
                </div>
            </div>
        </div>
    </div>



@endsection
