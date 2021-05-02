@extends('CMS.parent')

@section('title')
    {{'Projects'}}
@endsection

@section('head')
    <style>
        /*
    *
    * ==========================================
    * CUSTOM UTIL CLASSES
    * ==========================================
    *
    */
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSES
        * ==========================================
        *
        */
        body {
            min-height: 100vh;
            background-color: #757f9a;
            background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
        }

        /*
</style>
    <link href="{{asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/sweetalert/sweetalert.css')}}">


@endsection

@section('content')

    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h1>Users</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Financiers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @if (session()->has('user_added'))

        <script>
            window.onload = function () {
                notif({
                    msg: "User Added Successfully",
                    type: "success"
                });
            }
        </script>

    @endif

    @if (session()->has('User_deleted'))

        <script>
            window.onload = function () {
                notif({
                    msg: "User Deleted Successfully",
                    type: "error",

                });
            }
        </script>

    @endif

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Projects">Financiers</a></li>
                </ul>
                <div class="tab-content mt-0">

                            {{--imageUsers List--}}
                    <div class="tab-pane show active" id="Users">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Country</th>
                                    <th>Jop</th>
                                    <th>Join Date</th>
{{--                                    <th>Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($financiers as $fund)
                                    <tr>
                                        <td class="w60">
                                            {{--                                        <label class="fancy-checkbox">--}}
                                            {{--                                            <input class="checkbox-tick" type="checkbox" name="checkbox">--}}
                                            {{--                                            <span></span>--}}
                                            {{--                                        </label>--}}
                                            <img src="{{asset('imageFinanciers/'.$fund->image)}}" data-toggle="tooltip" data-placement="top" title="{{$fund->name}}" alt="Avatar" class="w35 h35 rounded">
                                        </td>
                                        <td>{{$fund->name}}</td>
                                        <td>{{$fund->email}}</td>
                                        <td>{{$fund->gender}}</td>
                                        <td>{{$fund->country}}</td>
                                        <td>{{$fund->jop}}</td>
                                        <td>{{$fund->created_at}}</td>
{{--                                        <td>--}}

{{--                                            <a href="{{ route('users.show', $user->id) }}" title="show">--}}
{{--                                                <span class="btn btn-sm btn-default">--}}
{{--                                                    <i class="icon-eye text-primary"></i>--}}
{{--                                                </span>--}}
{{--                                            </a>--}}

{{--                                            <a href="{{ route('users.edit', $user->id) }}">--}}
{{--                                              <span class="btn btn-sm btn-default">--}}
{{--                                                  <i class="fa fa-edit text-success"></i>--}}
{{--                                              </span>--}}

{{--                                            </a>--}}

{{--                                            <a  data-effect="effect-scale"--}}
{{--                                                data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-toggle="modal"--}}
{{--                                                href="#modaldemo9" >--}}
{{--                                              <span class="btn btn-sm btn-default">--}}
{{--                                           <i class="fa fa-trash-o text-danger"></i>--}}
{{--                                              </span>--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination mb-0"> {!! $financiers->render("pagination::bootstrap-4") !!} </div>
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
    <script src="{{asset('Dashboard/assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/modal.js')}}"></script>


    <script>
        /*  ==========================================
        SHOW UPLOADED IMAGE
    * ========================================== */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
@endsection
