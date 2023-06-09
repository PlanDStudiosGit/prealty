<div class="menu-profile">
      <div class="profile">
       <img class="profile-child" alt="" src=" {{asset('front/dashboard/images/ellipse-2@2x.png')}}" />
        <div class="james-luis">{{Auth::user()->name}}</div>
        <div class="jamesluis12gmailcom">{{Auth::user()->email}}</div>
      </div>
      <div class="menu">
        
        <div class="frame-parent">
          <div class="tablerhome-parent">
          <img class="tablerhome-icon" alt="" src=" {{asset('front/dashboard/images/tablerhome.svg')}}" />
            <a href="{{url('/')}}" class="home">Home</a>
          </div>
          <div class="tablerhome-parent">
            <img class="vuesaxboldelement-3-icon" alt="" src=" {{asset('front/dashboard/images/vuesaxboldelement3.svg')}} " />
            <a href="javascript:void(0)" class="home">Dashboard</a>
          </div>
          <div class="tablerhome-parent">
            <img class="tablerhome-icon" alt="" src="{{asset('front/dashboard/images/mdiusercircle.svg')}}" />
            <a href="javascript:void(0)" class="home">My Profile</a>
          </div>
          <div class="home-work-parent">
            <img class="tablerhome-icon" alt="" src=" {{asset('front/dashboard/images/home-work.svg')}}" />
            <a href="{{url('/reviewed_properties')}}" class="home">My Properties</a>
          </div>
          <div class="tablerhome-parent">
            <img class="tablerhome-icon" alt="" src=" {{asset('front/dashboard/images/tablerhomedollar.svg')}}" />
            <a href="javascript:void(0)" class="home">My Investment</a>
          </div>
          <div class="tablerhome-parent">
            <img class="tablerhome-icon" alt="" src=" {{asset('front/dashboard/images/fesearch.svg')}}" />
            <a href="{{url('/search_property')}}" class="home">Search Properties</a>
          </div>
    </div>



        <div class="vuesaxlinearlogin-parent">
          <img class="vuesaxlinearlogin-icon" alt="" src="{{asset('front/dashboard/images/vuesaxlinearlogin.svg')}}" /><b class="log-out">Log out
          </b>
        </div>
      </div>
</div>

    <ul>
      <li><a href="{{url('/')}}"><img src="{{asset('front/dashboard/images/logo 1.svg')}}"/></a></li>
      <div class="dropdown">
      <li style="float: right;"><img class="user-profile dropbtn" src="{{asset('front/dashboard/images/ellipse-2@2x.png')}}">
        <div class="dropdown-content">
          <a href="#">logout</a>
        </div>
      </li>
      </div>
    </ul>