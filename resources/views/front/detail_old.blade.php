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

#gallery-section {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  z-index: -1;
}

#thumbnail-gallery-container {
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  padding: 15px 50px 10px 50px;
}

.thumbnail {
  width: 100%;
  height: 10%; 

  margin-bottom: 2%; 
  position: relative;
  border: none !important;
  }

img.thumbnail-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center center;
  }



/* Lightbox Styles */ 

.lightbox-overlay {
display: flex;
transform: scale(0,1);
transition: transform 400ms ease-out;
transform-origin: center;
justify-content: center;
align-items: center;
background-color: rgb(80,80,80,0.95);
width: 100vw;
height: 100vh;
position: fixed;
top: 0;
left: 0;
}

.lightbox-overlay:target {
display: flex;
transform: scale(1,1);
z-index: 99999;
};

.lightbox-content {
color: rgb(250,250,250);
padding: 1.5em;
width: 75vw;
text-align: center;
}

.lightbox-image-title {
position: relative;
text-align: center;
}

.lightbox-navigation {
display: flex;
flex-flow: row wrap;
justify-content: space-evenly;
}

.close {
position: absolute;
background-color: none;
  top: 5px;    /* Top Right Corner Placement */
  right: 20px; 
  display: flex;
  justify-content: center;
  align-items: center;
}

a.close {
text-decoration: none;
font-weight: bold;
font-size :2em;
font-family: sans-serif;
}

.close::after {
content: 'X';
color: rgb(250,250,250);
}



.back, .next {
display: flex;
justify-content: center;
align-items: center;
width: 24%;
height: 2em;
color: rgb(255,255,255);
margin: 1%;
} 

img.lightbox-image {
width: 65vw;
max-height: 65vh;
object-fit: contain;
}
.img1 img{
  height:23em
}
.img2 img{
  height:11.1em
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
                  > Review Property</button>
                    
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
          <div class="col-md-8 img1">
            <!-- <img class="img-responsive tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}"> -->
            <a class="thumbnail" href="#lightbox-image-0"><img class="thumbnail-image img-responsive tp-1" src="{{asset('uploads/'.$multiple_images[0]->multiple_images)}}" alt="{{$multiple_images[0]->multiple_images}}"/></a>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-sm-12 img2">
                <!-- <img class="img-responsive tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}"> -->
              
            <a class="thumbnail" href="#lightbox-image-1"><img class="thumbnail-image img-responsive tp-1" src="{{asset('uploads/'.$multiple_images[1]->multiple_images)}}" alt="{{$multiple_images[1]->multiple_images}}"/></a>

              </div>
              <div class="col-sm-12 img2">
                <div style="position: relative;">
                <!-- <img class="img-responsive tp tp-1" src="{{asset('front/assets_old/Images/image-01.jpeg')}}"> -->
                <a class="thumbnail" href="#lightbox-image-2"><img class="thumbnail-image img-responsive tp-1" src="{{asset('uploads/'.$multiple_images[2]->multiple_images)}}" alt="{{$multiple_images[2]->multiple_images}}"/></a>

                <a href="#lightbox-image-1"><div class="view-more"><span class="viewmore">View More</span></div></a>
              </div> 
              </div>
            </div>

          </div>
        </div>
      </div>


     
                 @foreach($multiple_images as $key=>$images)
                    <div class="lightbox-overlay" id="lightbox-image-{{$key}}">
                            <div class="lightbox-content">
                      
                                  <a class="close" href="#gallery-section"></a>
                      
                                  <img class="lightbox-image" src="{{asset('uploads/'.$multiple_images[$key]->multiple_images)}}" alt="{{$key}}" />
                        
                      
                                  <p class="lightbox-navigation">
                                    @if($key > 0)
                                      <a class="back" href="#lightbox-image-{{$key-1}}">Back</a>
                                    @endif
                                    @if($key == $key)
                                    <a class="next" href="#lightbox-image-{{$key+1}}" >Next</a></p>
                                    @endif
                              
                                  </div><!-- lightbox-content -->
                    </div><!--- lightbox-overlay --->
                 @endforeach
                        
        
            <div class="lightbox-overlay" id="lightbox-imagee-1">
        
                <div class="lightbox-content">
        
                    <a class="close" href="#gallery-section"></a>
        
        
                    <img class="lightbox-image" src="https://www.coolgreenandshady.com/wp-content/uploads/2019/07/Product_Sleek-Succulents_IMG-1833.jpg" alt="Potted Succulent on Table." />
        
                    <p class="lightbox-navigation"><a class="back" href="#lightbox-image-1">Back</a><a class="next" href="#lightbox-image-3">Next</a></p>
        
                </div><!-- lightbox-content -->
            </div><!--- lightbox-overlay --->
        
            <div class="lightbox-overlay" id="lightbox-imagee-3">
                <div class="lightbox-content">
        
                    <a class="close" href="#gallery-section"></a> 
        
        
                    <img class="lightbox-image" src="https://www.viviano.com/images/prodshots_new/85919S_z.jpg" alt="Assorted succulents in a jar." />
                    
              <p class="lightbox-navigation"><a class="back" href="#lightbox-image-2">Back</a><a class="next" href="#lightbox-image-4">Next</a></p>
        
                </div><!-- lightbox-content -->
            </div><!--- lightbox-overlay --->
        
            <div class="lightbox-overlay" id="lightbox-imagee-4">
                <div class="lightbox-content">
        
                    <a class="close" href="#gallery-section"></a>
        
                    <img class="lightbox-image" src="https://cdn.shopify.com/s/files/1/1023/4337/products/product-listing-succulent-terrarium_grande.jpg?v=1517508241" alt="Two table top jars of assorted succulents." />
                    
                    <p class="lightbox-navigation"><a class="back" href="#lightbox-image-3">Back</a><a class="next" href="#lightbox-image-5">Next</a></p>
                </div><!-- lightbox-content -->
            </div><!--- lightbox-overlay --->
        
            <div class="lightbox-overlay" id="lightbox-imagee-5">
                <div class="lightbox-content">
        
                    <a class="close" href="#gallery-section"></a>
        
                    <img class="lightbox-image" src="https://simplysucculents.com/wp-content/uploads/2015/02/Terrarium-Bowl-577.jpg" alt="Assorted plants in a jar." />
            
        
                    <p class="lightbox-navigation"><a class="back" href="#lightbox-image-4">Back</a><a class="next" href="#lightbox-image-6">Next</a></p>
                </div><!-- lightbox-content -->
            </div><!--- lightbox-overlay --->
        
            <div class="lightbox-overlay" id="lightbox-imagee-6">
                <div class="lightbox-content">
        
                    <a class="close" href="#gallery-section"></a>
        
        
                    <img class="lightbox-image" src="https://www.thespruce.com/thmb/xfc4WpNMCmEIKCqtfUKwk11s428=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/difference-between-cacti-and-succulents-3976741-hero-fdb0b4d4197a4796b86dbdf39ebf026a.jpg" alt="Small pots of cactii." />
        
                    <p class="lightbox-navigation"><a class="next" href="#lightbox-image-5">Back</a></p>
                </div><!-- lightbox-content -->
            </div><!--- lightbox-overlay --->

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



  <!-- Review Property  -->
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
            <form action="{{url('review_property')}}" method="POST" id="stepForm">
              @csrf

  

            <input type="hidden" value="{{ $property->id }}" name="property_id"  >
            <input type="hidden" value="{{ @Auth::user()->id }}" name="user_id" > 



             <div class="tab-content tab-text">
              <div class="tab-pane" id="tab1">
                
                  <div>
                    <h4>Have you visited the property?</h4>
                  </div>
          
                      <div class="form-check ">
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
                    <textarea class="form-control" placeholder="Your Text Here" name="positive_review"  ></textarea>
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
                <li class="next next-btn"><a href="#" style="color:#333">Next</a></li>
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

<script>

// new script 
function visitProperty() {
  $('#myModal').modal('hide');
  $('#visitPropertyModal').modal('show');

  $('#finish').disabled = true;
  // alert("Your answer is no");
}


// rating

  function rangeSlide(value) {
      document.getElementById('rangeValue').innerHTML = value;
  }




     
</script>
  @endsection
