<header class="main_header_area headerstye-1">

<div class="header_menu" id="header_menu">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">

                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('front/assets/images/logo-white.png')}}" alt="image">
                        <img src="{{asset('front/assets/images/logo-white.png')}}" alt="image">
                    </a>
                </div>
                <!---===Navbar start here===--->

                <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="responsive-menu">
                        <li class="dropdown submenu active">
                            <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li><a href="#" >About</a></li>
                        <li class="submenu dropdown">
                            <a href="{{url('/search_property')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Search <i class="icon-arrow-down"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">How It Works <i
                                    class="icon-arrow-down" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="">Contact Us</a></li>
                            @guest
                            @if(Route::has('login'))
                            <li class="log-1">
                                
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="white"> Login</a>
                            </li>
                            <li class="sign-1">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="white">Signup</a>
                            </li>
                            @endif
                            @else
                            @if(!Auth::user()->role == 1)
                            <li class="log-1"> 
                                <a href="{{url('/dashboard')}}"  class="white">Dashboard</a>
                            </li>
                            @else
                            <li class="log-1">
                                <a href="{{url('/admin/dashboard')}}" class="white">Dashboard</a>
                            </li>
                            @endif 
                            <li class="log-1">
                                <a href="{{ route('logout') }}" class="white"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                  </ul>
                </div>
                <div class="register-login d-flex align-items-center">
                    @guest
                        @if(Route::has('login'))
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-5 white" id="login-top-nav">Login</a>
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="nir-btn-white" id="reg-top-nav">Signup</a>
                        @endif
                        @else

                        @if(!Auth::user()->role == 1) 
                            <a href="{{url('/dashboard')}}"  class="me-5 white">Dashboard</a>
                        @else
                            <a href="{{url('/admin/dashboard')}}" class="me-5 white">Dashboard</a>
                        @endif 
                            <a href="{{ route('logout') }}" class="nir-btn-white"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    @endguest
                </div>
                <div id="slicknav-mobile"></div>
            </div>
        </div>
    </nav>
</div>

</header>


<script>
    function login() {
    $('#exampleModal1').modal('hide'); 
   
    setTimeout(function() {  $('#exampleModal').modal('show');
    $('body').addClass('modal-open');
    }, 500);
}

function register() { 
    $('#exampleModal').modal('hide');

     setTimeout(function() {  $('#exampleModal1').modal('show');
    $('body').addClass('modal-open');
    }, 500);

}
</script>
