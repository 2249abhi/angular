<!DOCTYPE html>
<html class="no-js sidebar-large">
<head>
    <meta charset="utf-8">
    <title>Pixit - Responsive Boostrap3 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="dashboard">

    @if(Auth::guard('admin')->check())
        @include('admin.header.header')
    <!-- <div id="wrapper"> -->
        @include('admin.sidebar.sidebar')
        @yield('content')
     @else   
        @yield('content')
     @endif
        <!-- <div id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Blank Page <small>Blank Page</small></h1>
                    <br><br><br>
                </div>
            </div>
        </div> -->
        
    <!-- </div> -->
    
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>

    <script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
    <script src="assets/js/account.js"></script>
    <script src="assets/plugins/metrojs/metrojs.min.js"></script>
    <script src='assets/plugins/fullcalendar/moment.min.js'></script>
    <script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src="assets/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/plugins/google-maps/markerclusterer.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/google-maps/gmaps.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/charts-morris/raphael.min.js"></script>
    <script src="assets/plugins/charts-morris/morris.min.js"></script>
    <script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    
    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/application.js"></script>
</body>
</html>