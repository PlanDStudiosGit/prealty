@extends('front.layouts.main')

@section('content')

@include('front.includes.navbar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.post-slide{
    background: #fff;
    margin: 20px 15px 20px;
    border-radius: 15px;
    padding-top: 1px;
}
.post-slide .post-img{
    position: relative;
    overflow: hidden;
    border-radius: 10px 10px 0px 0px;
}
.post-slide .post-img img{
    width: 100%;
    height: auto;
}
.post-slide .post-content{
    background:#fff;
    padding: 2px 20px 40px;
    border-radius: 15px;
}
.post-slide .post-title a{
    font-size:15px;
    font-weight:bold;
    color:#333;
    display: inline-block;
    text-transform:uppercase;
    transition: all 0.3s ease 0s;
}
@media only screen and (max-width:1280px) {
    .post-slide .post-content{
        padding: 0px 15px 25px 15px;
    }
}


.owl-nav {
  /* position: absolute; */
  z-index: 999;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  text-align: center;
}

.owl-prev{
  float:left;
}
.owl-next{ 
  float:right4;
}

.owl-prev,
.owl-next {
  display: inline-block;
  background-color: #fff;
  border: 2px solid #ccc;
  border-radius: 50%;
  padding: 10px;
  margin: 0 10px;
  cursor: pointer;
}

.owl-prev:hover,
.owl-next:hover {
  background-color: #ccc;
}

.owl-prev i,
.owl-next i {
  font-size: 1.5rem;
  color: #333;
}
</style>


<div>
    <!-- Wrapper for slides -->
    <div>
      <div class="item">
        <img src="front/assets/Images/carousel-image.png" style="max-height: 60rem; width: 100%;" alt="Image">  
      </div>
    </div>
</div>

<div class="container">
<h2 class="text-center">Hot Properties</h2><br>
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel" >
        
        {{-- @php
          $hot_properties=DB::table('properties')->where('hot_properties','Y')->get();
          @endphp --}}
          @foreach($hot_properties as $hot_property)
              @php
               $users=DB::table('property_reviews')->Where('property_id', $hot_property->id)->where('user_id','!=','')->get();
               @endphp
        <div class="post-slide">
          <a href="{{url('detail',[$hot_property->id])}}"> 
            <div class="col-sm-12" style="margin-top: 0px; padding-bottom: 25px; padding-left: 0; padding-right: 0;">
              <div class="card property-card">
                <img class="img-responsive card-style property-img" src="{{ asset('uploads/'.$hot_property->featured_image ) }}">
                <div class="card-body card-body-style">
            
                @php 
                  $address=$hot_property->address;
                  $max_length = 39;
                @endphp 

                @if(strlen($address) > $max_length)
                <h4 class="card-title"><b>{{$hot_property->bedrooms}} Bedroom {{$hot_property->type}} in {{substr($address,0,$max_length)}}....</b></h4>
                @else
                <h4 class="card-title"><b>{{$hot_property->bedrooms}} Bedroom {{$hot_property->type}} in {{$hot_property->address}}</b></h4>
                @endif
                  <div class="row">
                  <div class="col-md-6">
                  <h4 class="card-text card-text-style">${{number_format($hot_property->price)}}</h4>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-9">
                      <p class="investor">{{$users->count()}}</p>
                    </div>
                  <div class="col-md-3">
                  <a href=""><img src="./front/assets/Images/avatar.png" alt="Avatar" class="avatar" style= "width:30px !important;"></a>
                </div>
              </div> 
                </div>
              </div>
                </div>
              </div>
            </div>
        </div>
        </a>

        @endforeach
        
      </div>
      <div class="owl-nav container ">
        <button class="owl-prev" ><i class="fas fa-chevron-left" ></i></button>
        <button class="owl-next"><i class="fas fa-chevron-right"></i></button>
      </div>


    </div>
  </div>
</div>
   
<div class="container">    
  <h2 class="text-center">Hot Properties</h2><br> 
  <div class="row">
 

   @foreach($property as $key => $properties)
   @php
      $users=DB::table('property_reviews')->Where('property_id', $properties->id)->where('user_id','!=','')->get();
  @endphp 
  @if ($key < 6)
  <a href="{{url('detail',[$properties->id])}}">
    <div class="col-sm-4" style="margin-top:20px">
            
          <div class="card property-card">
         <img class="img-responsive card-style property-img" src="{{ asset('uploads/'.$properties->featured_image ) }}">
        <div class="card-body card-body-style">
          @php 
            $address=$properties->address;
            $max_length = 39;
          @endphp 

          @if(strlen($address) > $max_length)
          <h4 class="card-title"><b>{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{substr($address,0,$max_length)}}....</b></h4>
          @else
          <h4 class="card-title"><b>{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{$properties->address}}</b></h4>
          @endif

          <div class="row"> 
          <div class="col-md-6"> 
          <h4 class="card-text card-text-style">${{number_format($properties->price)}}</h4>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-9">
              <p class="investor">{{$users->count()}}</p>
            </div>
          <div class="col-md-3">
          <a href=""><img src="./front/assets/Images/avatar.png" alt="Avatar" class="avatar"></a>
        </div>
      </div> 
        </div>
      </div>
        </div>
      </a>  

      </div>
    </div>
    
    @endif
@endforeach



  </div>
  <div class="row text-center">
    <div class="col-sm-12">
      <form>
        <button type="button" class="button-view btn btn-primary">View All</button>
      </form>
        </a>
    </div>
  </div>
</div><br>




 <!-- FOOTER -->
@include('front.includes.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('#news-slider').owlCarousel({
    nav:true,
    // loop:true,  
    autoPlay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1, 
            nav:false
        },
        600:{
            items:2,
            nav:false,

        },
        1000:{
            items:3,
            nav:false,
            loop:true,
        }
    }

});

var owl = $('.owl-carousel');
owl.owlCarousel({
  nav: false,
  // other options...
});

$('.owl-prev').click(function() {
  owl.trigger('prev.owl.carousel');
});

$('.owl-next').click(function() {
  owl.trigger('next.owl.carousel');
});


</script>
@endsection
