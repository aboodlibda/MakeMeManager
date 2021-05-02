{{--@extends('MMM.parent')--}}
<title>Make Me Manager | New Project</title>
<html>
{{--@section('links')--}}
<head>

    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/animate-css/vivify.min.css')}}">
    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">

{{--    <link rel="stylesheet" href="{{asset('Dashboard/assets/vendor/dropify/css/dropify.min.css')}}">--}}

{{--    <script defer src="node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>--}}
{{--    <script defer src="node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>--}}
{{--    <script defer src="node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>--}}
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
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
</head>
{{--@endsection--}}


{{--@section('content')--}}
<body class="theme-cyan font-montserrat light_version">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>Create New Project</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('myProjects')}}">My Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create New Project</li>
                        </ol>
                    </nav>
                </div>

            </div>


            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                {{method_field('POST')}}

            <!-- Main Information -->
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Main Information</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">


                                    <div class="col-lg-6 col-md-12">
                                        <label>Project Title</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" >
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Category</label>
                                        <div class="form-group">
                                            <select class="form-control" name="category" id="category" >
                                                <option value="">{{old('category')}}-- Select Category --</option>
                                                <option value="AF">Art</option>
                                                <option value="AX">Comics</option>
                                                <option value="AL">Crafts</option>
                                                <option value="DZ">Dance</option>
                                                <option value="AS">Design</option>
                                                <option value="AD">Fashion</option>
                                                <option value="AO">Film & Video</option>
                                                <option value="AI">Food</option>
                                                <option value="AQ">Journalism</option>
                                                <option value="AG">Music</option>
                                                <option value="AR">Photography</option>
                                                <option value="AM">Publishing</option>
                                                <option value="AW">Technology</option>
                                                <option value="AU">Theater</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Requested Financing</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                            </div>
                                            <input type="text" name="requested_financing" id="requested_financing" value="{{old('requested_financing')}}" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Country</label>
                                        <div class="form-group">
                                            <select class="form-control" name="country" >
                                                <option value="">-- Select Country --</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Publication Date (dd/mm/yyyy)</label>
                                        <div class="input-group mb-3">
                                            <input data-provide="datepicker" name="publication_date" value="{{old('publication_date')}}" data-date-autoclose="true" class="form-control" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Upload Image</label>
                                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                            <input id="upload" name="image" type="file" onchange="readURL(this);" class="form-control border-0">
                                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                            <div class="input-group-append">
                                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                            </div>
                                        </div>

                                        <!-- Uploaded image area-->
                                        <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                        <div class="image-area mt-2"><img id="imageResult" src="#" alt="" class="img-thumbnail rounded shadow-sm mx-sm-2" style="height: 200px;width: 200px"></div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Campaign goal -->
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Campaign Goal</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-12">
                                        <label>Funding goal</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                            </div>
                                            <input type="text" name="funding_goal" id="funding_goal" value="{{old('funding_goal')}}" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>The Minimum Amount Of Financing</label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                            </div>
                                            <input type="text" name="minimum_amount" id="minimum_amount" value="{{old('minimum_amount')}}" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label>Duration of Fundraising ( Days )</label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="duration" id="duration" class="form-control money-dollar" value="{{old('duration')}}">
                                        </div>

                                    </div>






                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Description</h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label><b>Write in detail about the campaign, its reasons, the purpose of the funding request, etc.</b></label>
                                        <br>
                                        <br>
                                        <textarea id="ckeditor" name="description" >{{old('description')}}</textarea>

                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <br>
                                        <br>

                                        <label><b>Description Video Link</b></label>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-link"></i></span>
                                            </div>
                                            <input type="text" name="link" id="link" value="{{old('link')}}" class="form-control">
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Investment -->

                <div class="row clearfix">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Investment</h2>
                            </div>
                            <div class="body">

                                <label><b>Select the type of financing : </b></label> <br><br>

                                    <div class="col-lg-3">
                                        <label class="rdiobox">
                                            <input checked name="rdio" type="radio" value="1" id="type_div">&nbsp; <span>Reward Investment</span></label>
                                    </div>


                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <label class="rdiobox"><input name="rdio" value="2" type="radio"> &nbsp;<span>Financing Investment</span></label>
                                    </div><br><br>

                                    <div class="row">

                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0" id="type">
                                            <label>Description</label>
                                            <div class="input-group">

                                                <textarea class="form-control" name="reward_description" >{{old('reward_description')}}</textarea>
                                            </div>                                        </div><!-- col-4 -->


                                        <div class="col-lg-3 mg-t-20 mg-lg-t-0" id="invoice_number">
                                            <p class="mg-b-10">Investment ratio (%)</p>
                                            <input type="text" class="form-control" value="{{old('investment_ratio')}}" id="invoice_number" name="investment_ratio">

                                        </div><!-- col-4 -->


                                    </div><br>

                                <button type="submit" class="btn btn-primary btn-round">Save</button>
                        </div>

                        </div>
                    </div>
                </div>



                 &nbsp;&nbsp;


        </form>

    </div>
</div>

</div>

</body>
{{--@endsection--}}


{{--@section('scripts')--}}
{{--    <script src="{{asset('Dashboard/assets/vendor/dropify/js/dropify.min.js')}}"></script>--}}
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendor/jquery-validation/jquery.validate.js')}}"></script><!-- Jquery Validation Plugin Css -->
    <script src="{{asset('Dashboard/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/advanced-form-elements.js.js')}}"></script>
    <script src="{{asset('Dashboard/assets/vendor/ckeditor/ckeditor.js')}}"></script><!-- Ckeditor -->
    <script src="{{asset('assets/js/pages/forms/editors.js')}}"></script>
{{--@endsection--}}
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

</html>
