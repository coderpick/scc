<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saiful community center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="shortcut icon" href="favicon.png">
    <!-- All css files are included here...-->
	
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.notify.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.notify.js')}}"></script>
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    {{--<div id="fakeloader"></div>--}}
    <div class="wrapper">
        <!-- Start of header area -->
        <header id="sticky-header" class="header-area header-wrapper transparent-header">
            <div class="primary-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="#"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-9 col-xs-9">
							<header>
								<nav class="primary-menu">
                                    <ul id="nav">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a data-scroll href="#about">about us</a>
                                            {{--<ul>--}}
                                                {{--<li><a href="#">Bengali</a></li>--}}
                                                {{--<li><a href="#">Endlish</a></li>--}}
                                                {{--<li><a href="#">Hindi</a></li>--}}
                                                {{--<li><a href="#">Chinese</a></li>--}}
                                                {{--<li><a href="#">Japanese</a></li>--}}
                                                {{--<li><a href="#">Kolkata</a></li>--}}
                                            {{--</ul>--}}
                                        </li>
                                        <li><a href="{{url('/service')}}">service</a>
                                            {{--<ul class="hello">--}}
                                                {{--<li><a href="#">services</a>--}}
                                                    {{--<ul>--}}
                                                        {{--<li><a href="#">services 1</a></li>--}}
                                                        {{--<li><a href="#">services 2</a></li>--}}
                                                        {{--<li><a href="#">services 3</a></li>--}}
                                                        {{--<li><a href="#">services 4</a></li>--}}
                                                        {{--<li><a href="#">services 5</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</li>--}}
                                                {{--<li><a href="">services</a></li>--}}
                                            {{--</ul>--}}
                                        </li>
                                        {{--<li><a href="#">bolg</a></li>--}}
                                        <li><a data-scroll href="#contact">contact</a></li>
                                        <li><a href="{{url('/gallary')}}">gallary</a></li>
                                    </ul>
								</nav>
							</header>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start of header bottom -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-6">
                            <div class="contact">
                            <a href="phone:+8801815-555566"><i class="fa fa-phone"></i>+880 1815-555566</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-lg-2">
                            <div class="header-logo-2">
                            <a href="#"><img src="{{asset('frontend/images/logo/logo-2.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-6">
                            <div class="contact">
                            <a href="mailto:satils@yahoo.com"><i class="fa fa-envelope-o"></i>satils@yahoo.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of header bottom -->
        </header>
        <!-- End of header area -->