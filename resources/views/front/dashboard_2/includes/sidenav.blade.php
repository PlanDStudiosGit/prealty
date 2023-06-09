<style>
.active{
  background-color: rgb(254,0,0,0.3);
  width: 100%;
} 
li.list {
    padding: 10px 10px;
    border-radius: 10px;
}
.active a {
  color: #fff;
}
.md{
  background-color: #eeeeee !important;
  height: 100vh !important;
}
.rp{
          left: 0 !important;
          transition: 1s;

    -webkit-animation: slide 0.5s forwards;
    -webkit-animation-delay: 2s;
    animation: slide 0.5s forwards;
    animation-delay: 2s;
        }
        @-webkit-keyframes slide {
    100% { left: 0; }
}

@keyframes slide {
    100% { left: 0; }
}
.rp-back{
          left: 0 !important;
          transition: 1s;

    -webkit-animation: slide2 0.5s backwards;
    -webkit-animation-delay: 2s;
    animation: slide2 0.5s backwards;
    animation-delay: 2s;
        }
        @-webkit-keyframes slide2 {
    100% { left: -300px; }
}

@keyframes slide2 {
    100% { left: -300px; }
}
.btn-open{
  display: none !important;
  display: inline-block;
  background-color: #fe0000 !important;
  padding: 10px 25px !important;
  color: #fff !important;
  border: none;
  border-radius: 05px !important;
  float: right !important;
  top: 10px !important;
  position: relative;

}
        @media only screen and (max-width: 600px) and (min-width: 320px) {
    .md{
    background-color: #eeeeee !important;
    height: auto;
    top: 0;
    left: -300px;
    position: absolute;
    z-index: 1;
    width: 300px !important;

        }

        .btn-open{
          display: block !important;
        }

}
</style>

<div class="col-md-3 md">
            <div class="row pt-3">
              <div class="col-md-12 text-center">
                <div class="image"><img src="{{asset('front/dashboard/images/Ellipse 2.png')}}" style="width: 166px; height: 166px; margin-top: 55px;">
                  <h3 style="margin: 10px 0;">{{Auth::user()->name}}</h3>
                  <a href="javascript:;" style="text-decoration:none;">{{Auth::user()->email}}</a>
                </div>
			  </div>
              <div class="col-md-12">
                <ul class="list-unstyled pt-5 mb-5">
                  <li class="list {{ (isset($param) && $param == 'home')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/tabler_home.svg')}}" class="mr-3"><a href="{{url('/')}}"> Home</a>
				  </li>
                  <li class="list {{ (isset($param) && $param == 'dashboard')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/dashboard.svg')}}" class="mr-3"><a href="{{url('/dashboard')}}">Dashboard</a>
				  </li>
                  <li class="list {{ (isset($param) && $param == 'home')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/mdi_user-circle.svg')}}" class="mr-3"><a href="">My Profile</a>
				  </li>
                  <li class="list {{ (isset($param) && $param == 'reviewed_properties')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/Home work.svg')}}" class="mr-3"><a href="{{url('/reviewed_properties')}}">Reviewed Properties</a>
				  </li>
                  <li class="list {{ (isset($param) && $param == 'invested_properties')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/tabler_home-dollar.svg')}}" class="mr-3"><a href="{{url('/invested_properties')}}">Invested Properties</a>
				  </li>
                  <li class="list {{ (isset($param) && $param == 'search_property')?'active':'' }}">
					<img src="{{asset('front/dashboard/images/fe_search.svg')}}" class="mr-3"><a href="{{url('/search_property')}}">Search Properties</a>
				  </li>
                </ul>


                <div class="out mt-5 mb-5">
                  <a href="{{ route('logout') }}" class="nir-btn-white"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <img src="{{asset('front/dashboard/images/login.svg')}}" class="mr-2">Log out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script>
 $(document).on('click','.btn-open',function(){
	if($('.md').hasClass('rp')){
		$('.md').removeClass('rp');
    $('.md').addClass('rp-back');
		$('btn-open').html('<i class="fa fa-bar"></i>')
	}else{
    $('.md').removeClass('rp-back');
		$('.md').addClass('rp');
		$('.btn-open').html('<i class="fa fa-cross"></i>')
	}
});
</script>