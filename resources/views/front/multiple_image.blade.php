@extends('front.layouts.main_old')

@section('content')

@include('front.includes.navbar_old ')

 <style>
.login-head .login{
  margin-left: 250px;
  font-size: 27px;
  font-weight: 500;
}


.login-head img{ 
    margin-left: 200px;
}
.close{
  margin-right: 10px;
  margin-top: 5px;

}

.login-form label{
margin-left: 15px; margin-top:7px }


#rangeValue {
  position: relative;
  display: block;
  text-align: center;
  font-size: 3em;
  color: #999;
  font-weight: 400;
}
 </style>

  <!-- Wrapper for slides -->
  <div class="container">
    <div class="item">
      <img class="carousel-image" src="{{ asset('uploads/'.$property->featured_image ) }}" alt="Image">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        

        <h2>{{$property->address}}</h2>
        <div class="row">
          <div class="col-md-8 icons">
            <div class="row">
              <div class="col-md-4">
                <h5><span id="icon-fa"><i class="fa-solid fa-bed"></i></span> {{$property->bedrooms}} Bedrooms</h5>
              </div>

              <div class="col-md-4">
                <h5><span id="icon-fa"><i class="fa-solid fa-bath"></i></span> {{$property->bathrooms}} Bathroom</h5>
              </div>

              <div class="col-md-4">
                <h5><span id="icon-fa"><i class="fa-regular fa-square"></i></span> {{$property->lot_size}} Sq/Ft </h5>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="col-md-3">
        <span class="share">
          <button class="share-btn">
            <i class="fa-solid fa-arrow-up-from-bracket" data-hover="Hello, this is the tooltip"></i>
          </button>
          <button class="save-btn">
            <i class="fa-regular fa-heart"></i>
          </button>
        </span>
      </div>


      <div class="col-sm-3">
        <div class="card card-style-1">
          <div class="card-body">
            <h2 class="green">${{number_format($property->price)}}</h2>
            <h5 class="grey">{{$pool_users->count()}} People in this pool</h5>
            
     
            @if($property->status >=1)
            <button type="button" class="button-1 btn btn-dark" disabled>Pool Close</button>

            @elseif(@Auth::user()->role == 1) 

            @else 
            @guest
                      <button type="button" class="button-1 btn btn-dark" data-target="#login" data-toggle="modal"> Review Property</button>

                    @endguest

                  @auth
                  <button type="button" class="button-1 btn btn-dark"
            @if($user_check == 0) 
              data-toggle="modal" data-target="#myModal" 
            @else
              data-toggle="modal" data-target="#myModalReviewed" 
            @endif
            > Review
                    Property</button>
                    
            @endauth

             
            @endif
              


          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container ">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-md-8">
            <img class="img-responsive tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}">
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-sm-12">
                <img class="img-responsive tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}">
              </div>
              <div class="col-sm-12">
                <div style="position: relative;">
                <img class="img-responsive tp tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}">
                <div class="view-more"><span class="viewmore">View More</span></div>
              </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-md-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d106334.08051777392!2d73.06608639999999!3d33.60686080000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1673607574723!5m2!1sen!2s"
          width="100%" height="230px" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-8 clearfix">
        <h2>About Property</h2>
        <p class="p-font">{!!$property->description!!}</p>

       
       
      </div>
    </div>
  </div>

  

  <div class="container">
    <div class="row">
      <div class="col-md-8 clearfix border-ph">
        <div class="row">
          <div class="col-md-12">
            <h3>Property Highlights</h3>
          </div>
          <div class="col-md-3">
            <h5>Garage: <b>{{$property->garage}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Elevator: <b>{{$property->elevator}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Fireplace: <b>{{$property->fireplace}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Gated <b>{{$property->gated}}</b></h5>
          </div>

       <!--    <div class="col-md-3">
            <h5>Waterfront: <b></b></yes5>
          </div> -->
          <div class="col-md-3">
            <h5>Garden: <b>{{$property->garden}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Balcony: <b>{{$property->balcony}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Terrace: <b>{{$property->terrace}}</b></h5>
          </div>

          <div class="col-md-3">
            <h5>Pool: <b>{{$property->pool}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Basement: <b>{{$property->basement}}</b></h5>
          </div>
          <div class="col-md-3">
            <h5>Furnished: <b>{{$property->furnished}}</b></h5>
          </div>
         <!--  <div class="col-md-3">
            <h5>Pets Allowed: <b>Yes</b></h5>
          </div> -->

        </div>
      </div>
    </div>
  </div><br>

  <div id="test">
    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="green">${{ number_format($property->price) }}</h2>
        <h5 class="grey">{{$pool_users->count()}} People in this pool</h5>
      </div>


      <div class="col-md-6"> 
        
         @if($property->status >=1)
            <button type="button" class="button-1 btn btn-dark" disabled> Pool Close</button>

            @elseif(@Auth::user()->role == 1) 

            @else
            @guest
                        <button type="button" class="button-1 btn btn-dark" data-target="#login" data-toggle="modal" style="margin-top:30px;"> Review Property</button>

                      @endguest

                    @auth
                    <button type="button" class="button-1 btn btn-dark"
              @if($user_check == 0) 
                data-toggle="modal" data-target="#myModal" 
              @else
                data-toggle="modal" data-target="#myModalReviewed" 
              @endif
              style="margin-top:30px;"> Review
                      Property</button>
                      
      @endauth
     @endif


      </div>
    </div>
    </div>
  </div>

<!--Trigger-->


<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div>
      <div class="modal-content">
        <button data-dismiss="modal" class="close">&times;</button>
        
      <div class="login-head">
      <img class="logo-01" src="{{asset('front/assets_old/Images/logo-01.png')}}">
      <h3 class="login">Sign in</h3>  
      </div>
        <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf

      <div class="form-group">
  
       <label for="email" class="col-md-4 col-form-label text-md-end" >{{ __('Email/Username') }}</label>
      <!-- <input class="form-control" type="text" id="Username" placeholder="Email/Username" required> -->
      <input id="email" id="Username" type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/Username" style="width: 90%; height:40px; margin-left: 20px;">
   @error('email') 
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
      </div>

      <div class="form-group">
        <label for="password" class="col-md-4 col-form-label text-md-end"  >{{ __('Password') }}</label>
      <!-- <input class="form-control" type="password" id="Myinput" name="First Name" placeholder="Password"required> -->

      <input id="password" id="Myinput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" style="width: 90%; height:40px;  margin-left: 20px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


      <div class="all" style="float: left; margin-left: 20px;">
      <input type="checkbox" onclick="myFunction()" > <span>Show Password</span>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <input type="submit" value="Sign in" class="btn signin-button" style="float: left; margin-left: 20px;">
          <!-- <a href="#"><button type="button" class="btn signin-button"> Sign in</button></a> -->
        </div>
        </div>

      </form>
    
      </div>
    </div>
  </div>  
</div>

  <!-- FOOTER -->
@include('front.includes.footer_old')

  <!--Already reviewed Property Modal -->
<div class="modal fade" id="myModalReviewed" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
			<div class="modal-body">
				<div class="text-center">You have already review this property pool.</div>
			</div>
		</div>
	</div>
</div>
  <!-- Modal -->

    <!--Not Visited Property Modal -->
<div class="modal fade" id="myModalReviewed" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
			<div class="modal-body">
				<div class="text-center">.</div>
			</div>
		</div>
	</div>
</div>
  <!-- Modal -->

  

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Questions</h4>
        </div>
        <div class="modal-body">


          <div id="rootwizard">
            <div >
              <div >
                <ul role="tablist" style="display:none;">
                  <li><a href="#tab1" data-toggle="tab">1</a></li>
                  <li><a href="#tab2" data-toggle="tab">2</a></li>  
                  <li><a href="#tab3" data-toggle="tab">3</a></li>
                  <li><a href="#tab4" data-toggle="tab">4</a></li>
                  <li><a href="#tab5" data-toggle="tab">5</a></li>
                </ul>
              </div>
            </div>
            <form action="{{url('review_property')}}" method="POST">
              @csrf

  

            <input type="hidden" value="{{ $property->id }}" name="property_id"  >
            <input type="hidden" value="{{ @Auth::user()->id }}" name="user_id" > 



             <div class="tab-content tab-text">
              <div class="tab-pane" id="tab1">
                
                  <div>
                    <h4>Have you visited the property?</h4>
                  </div>
          
                      <div class="form-check">
                        <label class="form-check-label">
						<input class="form-check-input" type="radio" name="visit_property" value="yes"  />
                        Yes</label>
     <br>
                        <label class="form-check-label">
						<input class="form-check-input" type="radio" name="visit_property" value="no" onclick="visitProperty()">
                        No</label>
                      </div> 
             

                
              </div>
              <div class="tab-pane" id="tab2">
              <div>
                    <h4>Tell us what you liked about the property.</h4>
                    <textarea class="form-control" placeholder="Your Text Here" name="positive_review" ></textarea>
                  </div>
              </div>


              <div class="tab-pane" id="tab3">

                
                <div>
                    <h4>What did you not like about the property. </h4>
                    <textarea class="form-control" placeholder="Your Text Here" name="negative_review" ></textarea>
                </div>
                

              </div>


    

              <div class="tab-pane" id="tab4">
            
                    <h4>Rate the Property</h4>
                    
                    <span id="rangeValue">1</span>
                    <Input class="range" type="range" name="rating" value="1" min="1" max="10" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>


                
              </div>
        
              <ul class="pager wizard">
                <li class="previous first" style="display:none;"><a href="#">First</a></li>
                <li class="previous"><a href="#">Previous</a></li>
                <li class="next last" style="display:none;"><a href="#">Last</a></li>
                <li class="next next-btn"><a href="#">Next</a></li>
                <li class="last-btn" style="display:none;"><input type="submit" name="" value="Finish" id="finish" style="display: inline-block;    padding: 5px 14px;    background-color: #fff;   border: 1px solid #ddd;    border-radius: 15px; float:right;" /></li>
              
              </ul>  

            </div>
            </form>
          </div>

     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

<!-- visit property popup -->
  <div class="modal fade" id="visitPropertyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Please visit the property first</h4>
      </div>
      <div class="modal-body">
        <p>You cannot submit a review without visiting the property. Please visit the property first.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
    // new script 
    function visitProperty() {
      $('#myModal').modal('hide');
      $('#visitPropertyModal').modal('show');
    }


    
</script>
    
  @endsection
