<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Pulse Realty</title>
        <link rel="icon" type="image/x-icon" href="{{asset('front/assets/Images/fav-icon.png')}}">
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

      {{--}}  <!-- START: Pre Loader-->
      <!--   <div class="se-pre-con">
            <img src="{{asset('front/dashboard/images/logo.png.jpeg')}}" alt="logo" width="23" class="img-fluid"/>
        </div> -->
        <!-- END: Pre Loader-->--}}

        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header h4 mb-0 align-self-center logo-bar text-center">  
                    <a href="" class="horizontal-logo text-center">
                        <span class="h3 align-self-center mb-0 "><img src="front/dashboard/images/bpulse-logo.png" alt="" style=width:150px></span>              
                    </a>                   
                </div>
                <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                    <a href="#" class="sidebarCollapse" id="collapse"><i class="fa fa-bars" style="color: #a355ff;"></i></a>
                </div>

                <div style="float:right">
                <li style="decoration:none"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                 <form id="logout-form" action="{{ route('logout.perform') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                </div>

          
                
            </nav>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <div class="sidebar">
            <div class="media d-block text-center user-profile">
                <img class="img-fluid" src="front/dashboard/images/user-solid.svg" alt="" style="width:80px"     >
                <div class="media-body text-center mt-0 color-primary mt-2">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                            <h6 class="mb-0 font-weight-bold">{{Auth::user()->name}}</h6>
                           
                        </a>
                        
                </div>
            </div>
            
            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu" style="margin-left: 10px;">
                <li class="active">                  
                    <ul>
                    <li class=" active"><a href="{{url('/dashboard')}}" style="font-size: 17px;"><i class="fas fa-user-alt"></i> Dashboard</a></li>
                        <li ><a href="{{url('/profile')}}" style="font-size: 17px;"><i class="fas fa-user-alt"></i> My Profile</a></li>
                        <li><a href="{{url('/myproperties')}}" style="font-size: 17px; margin-top: 5px;"><i class="fa fa-home"></i>My Properties</a></li>
                        <li><a href="{{url('/search_properties')}}" style="font-size: 17px; margin-top: 5px;"><i class="fa fa-search"></i> Search Properties</a></li>
                        <li><a href="" style="font-size: 17px; margin-top: 5px;"><i class="fa fa-sign-out"></i> Log Out</a></li> 
                    </ul>
                </li>

               

                
              
            </ul>
            <!-- END: Menu-->
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Search Properties</h4> <b>Welcome to liner admin panel</b></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                Search Properties
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



      



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
