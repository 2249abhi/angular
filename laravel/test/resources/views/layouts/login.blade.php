<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="{{ asset('assets/css/icons/icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-loading/lada.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="{{ asset('assets/css/animate-custom.css') }}" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="{{ asset('assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
</head>

<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="{{ asset('assets/img/account/user-icon.png') }}" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="{{ asset('assets/img/account/login-logo.png') }}" alt="Company Logo">
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        @yield('content')
                    </div>
                </div>
                <div class="social-login row">
                    <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                    </div>
                    <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
