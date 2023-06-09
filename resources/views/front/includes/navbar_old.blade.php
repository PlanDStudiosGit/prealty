<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="{{route('index')}}"><img class="img-responsive" src="{{asset('front/assets_old/Images/logo.png')}}"  alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="{{url('/search_property')}}">Search Properties</a></li>
          <li><a href="#">How it Works</a></li>
          <li><a href="#">Contact</a></li>
        </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            @if (Route::has('login'))
                            
                            <li><a href="{{route('login')}}"><button type="button" class="btn btn-light button-login">Login</button></a></li>
                            <li><a href="{{route('social.register')}}"><button type="button" class="btn btn-dark button-signup">Signup</button></a></li>
                             @endif
                             @else

                             <!-- <img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name}}"> -->


				
                        @if(!Auth::user()->role == 1) 
                          <li><a href="{{url('dashboard')}}"><button type="button" class="btn btn-light button-login">Dashboard</button></a></li>
                        @else
                          <li><a href="{{url('admin/dashboard')}}"><button type="button" class="btn btn-light button-login">Dashboard</button></a></li>
                        @endif 

                                                <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                  <button type="button" class="btn btn-light button-login">Logout</button></a>
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                  </form>
                                                </li>
                                </ul>
                            </div>
                        </li>
                             @endguest

      
    </div>
  </div>
</nav>