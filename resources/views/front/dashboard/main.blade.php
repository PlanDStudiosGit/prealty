<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Liner Admin</title>
        <link rel="shortcut icon" href="{{asset('front/dashboard/images/favicon.ico')}}" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/simple-line-icons/css/simple-line-icons.css')}}">        
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/flags-icon/css/flag-icon.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/flag-select/css/flags.css')}}">
        <!-- END Template CSS-->

            <!-- START: Page CSS-->
            <link rel="stylesheet"  href="{{asset('front/dashboard/vendors/chartjs/Chart.min.css')}}">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/morris/morris.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/weather-icons/css/pe-icon-set-weather.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/chartjs/Chart.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/starrr/starrr.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
        <script src="https://kit.fontawesome.com/a076d05399.js')}}" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/ionicons/css/ionicons.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css')}}">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{asset('front/dashboard/css/main.css')}}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

    @yield('content')


      



        <!-- START: Template JS-->
        <script src="front/dashboard/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="front/dashboard/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="front/dashboard/vendors/moment/moment.js"></script>
        <script src="front/dashboard/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="front/dashboard/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="front/dashboard/vendors/flag-select/js/jquery.flagstrap.min.js"></script> 
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="front/dashboard/js/app.js"></script>
        <!-- END: APP JS-->

       

        <!-- START: Page JS-->
        <script src="front/dashboard/js/home.script.js"></script>
        <!-- END: Page JS-->
    </body>
    <!-- END: Body-->
</html>
