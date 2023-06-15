@extends('front.layouts.main')

@section('title', 'Pulse Reality - Detail')

@section('content')

@include('front.includes.navbar')


<style>


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
  width: 32%;
  margin-bottom: 2%; 
  position: relative;
  }

img.thumbnail-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center center;
  }

@media only screen and (max-width: 800px){
  #gallery-section {
      padding: 10px 10px 0px 10px;
  }
  #thumbnail-gallery-container {
      padding: 0px;
  }
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
  /* width: 7%; */
  height: 6em;
  color: rgb(255,255,255);
  margin-left: auto;
  margin-right: 1px;

} 

img.lightbox-image {
  width: 65vw;
  max-height: 65vh;
  object-fit: contain;
}


/* range slider  */
.range-form {
  width: 400px;
  margin: auto;
  padding: 50px;
}

.range-slider {
  -webkit-appearance: none;
  /* Override default CSS styles */
  appearance: none;
  width: 100%;
  /* Full-width */
  height: 10px;
  border-radius: 5px;
  /* Specified height */
  background: #d3d3d3;
  /* Grey background */
  outline: none;
  /* Remove outline */
  opacity: 0.7;
  /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s;
  /* 0.2 seconds transition on hover */
  transition: opacity .2s;
  &:hover {
    opacity: 1;
    /* Fully shown on mouse-over */
  }
  &::-webkit-slider-thumb {
    -webkit-appearance: none;
    /* Override default look */
    appearance: none;
    width: 18px;
    /* Set a specific slider handle width */
    height: 18px;
    /* Slider handle height */
    background: red;
    /* Green background */
    cursor: pointer;
    /* Cursor on hover */
    border-radius: 50%;
  }
  &::-moz-range-thumb {
    width: 18px;
    /* Set a specific slider handle width */
    height: 18px;
    /* Slider handle height */
     background: #FF0000;
    /* Green background */
    cursor: pointer;
    /* Cursor on hover */
  }
}



/* next previous button  */
.pager.wizard {
  display: flex;
  justify-content: space-between;
}

.previous {
  margin-top:17px;


}
.previous:hover {
    color:white;
  }

 
.next a:hover {
    color:white;
  }

.last-btn{
  margin-top:17px;
}

.last-btn a:hover {
    color:white;
  }

  .gallery-image {
  position: relative;
}


.modal-open {
  padding: 0 !important;
}

.modal-open .detail_modal {
  background: #000000ad;
  overflow: hidden;
  padding-right: 0 !important;
}

.modal-open .detail_modal .modal-dialog {
  max-width: 620px;
  top: 25%;
}

.modal-open .detail_modal .modal-dialog .modal-content {
  border: none;
  position: relative;
  border-radius: 0;
}

.modal-open .detail_modal .modal-dialog .modal-content .modal-body {
  padding: 20px;
}

.modal-open .detail_modal .modal-dialog .modal-content .login-content {
  box-shadow: 0 0 15px #cccccc37;
}

</style>


    <section class="banner overflow-hidden">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url({{asset('uploads/'.$property->featured_image ) }}   )"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog blog-left pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="blog-single-in d-md-flex align-items-center mb-4 text-center text-md-start">
                            <div class="blog-single-in-cont w-75">
                                <div class="blog-content">
                                    <h2 class="blog-title mb-0">{{$property->address}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrapper">
                            <div class="blog-content">
                                <p class="mb-3">{!!$property->description!!}</p>
                            </div>

                            <div class="property-detail mb-4 bg-lgrey p-4 border">
                                <h4 class="border-b pb-2">Property Details</h4>
                                <div class="row">
                                <h5 class="border-b pb-2">Bedrooms</h5>
                                <div class="col-lg-12">
                                  <p>Bedrooms: {{$property->bedrooms}}</p>
                                </div>

                                @if($property->bedrooms == 1)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                             
                                @endif

                                @if($property->bedrooms == 2)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                @endif

                                
                                @if($property->bedrooms == 3)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                @endif

                                
                                @if($property->bedrooms == 4)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>

                                @endif

                                @if($property->bedrooms == 5)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>

                                @endif

                                @if($property->bedrooms == 6)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>


                                 <!-- bedroom 6 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 6</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_6_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_6_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_6_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_6_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_6_features}}</p>
                                </div>

                                @endif

                                @if($property->bedrooms == 7)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>


                                 <!-- bedroom 6 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 6</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_6_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_6_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_6_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_6_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_6_features}}</p>
                                </div>


                                 <!-- bedroom 7 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 7</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_7_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_7_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_7_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_7_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_7_features}}</p>
                                </div>


                                @endif

                                @if($property->bedrooms == 8)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>


                                 <!-- bedroom 6 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 6</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_6_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_6_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_6_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_6_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_6_features}}</p>
                                </div>


                                 <!-- bedroom 7 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 7</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_7_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_7_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_7_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_7_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_7_features}}</p>
                                </div>


                                 <!-- bedroom 8 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 8</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_8_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_8_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_8_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_8_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_8_features}}</p>
                                </div>



                                @endif

                                @if($property->bedrooms == 9)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>


                                 <!-- bedroom 6 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 6</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_6_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_6_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_6_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_6_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_6_features}}</p>
                                </div>


                                 <!-- bedroom 7 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 7</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_7_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_7_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_7_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_7_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_7_features}}</p>
                                </div>


                                 <!-- bedroom 8 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 8</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_8_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_8_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_8_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_8_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_8_features}}</p>
                                </div>


                                 <!-- bedroom 9 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 9</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_9_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_9_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_9_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_9_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_9_features}}</p>
                                </div>


                      
                                @endif
                                
                                @if($property->bedrooms == 10)
                                <div class="col-lg-12">
                                  <p style="font-weight:600">Master Bedroom</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->master_bedroom_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->master_bedroom_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->master_bedroom_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->master_bedroom_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->master_bedroom_features}}</p>
                                </div>

                                <!-- bedroom 2 -->
                                <div class="col-lg-12">
                                <p style="font-weight:600">Bedroom 2</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_2_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_2_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_2_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_2_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_2_features}}</p>
                                </div>


                                 <!-- bedroom 3 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 3</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_3_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_3_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_3_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_3_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_3_features}}</p>
                                </div>


                                 <!-- bedroom 4 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 4</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_4_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_4_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_4_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_4_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_4_features}}</p>
                                </div>


                                 <!-- bedroom 5 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 5</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_5_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_5_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_5_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_5_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_5_features}}</p>
                                </div>


                                 <!-- bedroom 6 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 6</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_6_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_6_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_6_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_6_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_6_features}}</p>
                                </div>


                                 <!-- bedroom 7 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 7</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_7_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_7_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_7_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_7_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_7_features}}</p>
                                </div>


                                 <!-- bedroom 8 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 8</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_8_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_8_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_8_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_8_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_8_features}}</p>
                                </div>


                                 <!-- bedroom 9 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 9</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_9_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_9_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_9_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_9_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_9_features}}</p>
                                </div>


                                 <!-- bedroom 10 -->
                                 <div class="col-lg-12">
                                 <p style="font-weight:600">Bedroom 10</p>
                                </div> 
                                <div class="col-lg-4">
                                  <p>Area: {{$property->bedroom_10_area}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Length: {{$property->bedroom_10_length}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>width: {{$property->bedroom_10_width}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Level: {{$property->bedroom_10_level}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_10_features}}</p>
                                </div>

                                <div class="col-lg-6">
                                  <p>Features: {{$property->bedroom_10_features}}</p>
                                </div>

                                @endif

                                <h5 class="border-b pb-2">Garage</h5>
                                <div class="col-lg-4">
                                  <p>Has a Garage: {{$property->has_garage}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Has Open Parking: {{$property->open_parking}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Number Garage Spaces: {{$property->total_garage}}</p>
                                </div>

                                <div class="col-lg-4">
                                  <p>Parking Total: {{$property->total_parking}}</p>
                                </div>   
                                
                                <div class="col-lg-4">
                                  <p>Parking Features: {{$property->parking_features}}</p>
                                </div>

                        </div>
                    </div>

                            <!-- <div class="property-detail mb-4 bg-lgrey p-4 border">
                                <h4 class="border-b pb-2">Property Details</h4>
                                <div class="row">
                                    <div class="col-lg">
                                        <ul class="pro-inline-item">
                                            <li class="d-block fw-bold lh-lg">
                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/heyeivni.json"
                                                trigger="hover"
                                                colors="primary:#fe0000,secondary:#fe0000"
                                                style="width:30px;height:30px; padding-top: 7px;">
                                            </lord-icon>Bedrooms :
                                                <span class="fw-normal float-end">{{$property->bedrooms}}</span>
                                            </li>
                                            <li class="d-block fw-bold lh-lg">
                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/wxssyhfr.json"
                                                trigger="hover"
                                                colors="primary:#fe0000,secondary:#fe0000"
                                                style="width:30px;height:30px; padding-top: 7px;">
                                            </lord-icon> Bathrooms : <span class="fw-normal float-end">{{$property->bathrooms}}</span>
                                            </li>
                                           
                                          
                                        </ul>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="pro-inline-item">
                                            <li class="d-block fw-bold lh-lg">
                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                            <lord-icon
                                              src="https://cdn.lordicon.com/ckuogwdx.json"
                                              trigger="hover"
                                              colors="primary:#fe0000,secondary:#fe0000"
                                              style="width:30px;height:30px; padding-top: 7px;">
                                          </lord-icon>Garage :
                                          <span class="fw-normal float-end">{{$property->garage}}</span>
                                            </li>
                                            <li class="d-block fw-bold lh-lg">
                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                            <lord-icon src="https://cdn.lordicon.com/gmzxduhd.json" trigger="hover"
                                                    colors="primary:#fe0000,secondary:#fe0000"
                                                    style="width:30px;height:30px; padding-top: 7px;">
                                                </lord-icon> Property Size : <span class="fw-normal float-end">{{$property->lot_size}}
                                                    sq/ft</span>
                                            </li>
                                           
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="property-detail mb-4 bg-grey p-4">
                                <h4 class="border-bottom pb-2">Amenities</h4>
                                <div class="row">
                                    <div class="col-lg">
                                        <ul class="pro-inline-item">
                                            <li class="d-block lh-lg"><i class="{{($property->elevator == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i>Elevator</li>
                                            <li class="d-block lh-lg"><i class="{{($property->fireplace == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i> FirePlace</li>
                                            <li class="d-block lh-lg"><i class="{{($property->gated == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i> Gated</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="pro-inline-item">
                                            <li class="d-block lh-lg"><i class="{{($property->balcony == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i> Balcony</li>
                                            <li class="d-block lh-lg"><i class="{{($property->terrace == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i>Terrace</li>
                                            <li class="d-block lh-lg"><i class="{{($property->pool == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i>Pool </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-lg">
                                        <ul class="pro-inline-item">
                                            <li class="d-block lh-lg"><i class="{{($property->garden == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i> Garden</li>
                                            <li class="d-block lh-lg"><i class="{{($property->basement == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i> Basement</li>
                                            <li class="d-block lh-lg"><i class="{{($property->furnished == 'Yes') ?'fa fa-check theme' :'fa fa-times'}}"></i>Furnished</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div> 
                </div>
         
                
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="header-social text-center mb-2">
                                <ul>
                                    <li><a ><lord-icon src="https://cdn.lordicon.com/koyivthb.json"
                                                trigger="hover" colors="primary:#fe0000,secondary:#fe0000"
                                                style="width:35px;height:35px; padding-top: 5px;" stroke="80">
                                            </lord-icon></a></li>
                                            <li><a >
                                                <lord-icon
                                                src="https://cdn.lordicon.com/rjzlnunf.json"
                                                trigger="hover"
                                                colors="primary:#fe0000,secondary:#fe0000"
                                                style="width:35px;height:35px; padding-top: 5px;" stroke="80">
                                            </lord-icon>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="author-news mb-4 box-shadow p-3 text-center">
                                <div class="author-news-content">
                                    <div class="author-content">
                                        <h3 class="mb-2"><span class="d-block theme fs-5 fw-normal">Start From</span>
                                            ${{number_format($property->price)}}
                                        </h3>
                                        <h3 class="mb-2 d-block fs-5 fw-normal">{{$pool_users->count()}} People in this pool</h3>


                                        @if($property->status >=1)
                                        <a class="nir-btn-about float-none mb-2" disabled>Pool Close</a>
                                       
                                        @elseif(@Auth::user()->role == 1) 

                                        @else
                                        @guest
                                          <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nir-btn-about float-none mb-2" >Review Property</a>
                                        @endguest
                                        @auth  
                                        

                                        <!-- <a href="" class="nir-btn-about float-none mb-2" >Review Property</a> -->
                                          <a class="nir-btn-about float-none mb-2"
                                            @if($user_check == 0) 
                                              data-bs-toggle="modal" data-bs-target="#questions" 
                                            @else
                                              onclick="showAlert()"
                                            @endif
                                            >Review Property</a>
                                        @endauth
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        @php
                          $total_ratings = DB::table('property_reviews')->where('property_id', $property->id)->sum('rating');
                          $number_of_rating = DB::table('property_reviews')->where('property_id', $property->id)->count();
                          $average_rating = ($number_of_rating > 0) ? $total_ratings / $number_of_rating : 0;
                          $star_rating = $average_rating * 10 / 10;
                        @endphp

                        <div class="author-content text-center mb-4 box-shadow p-3 position-relative">
                        <div class="blob"></div>
                        <div class="blob2"></div>
                        <h4 class="title mb-1" style="font-size:29px;">{{round($star_rating,1)}}/<span style="font-size:20px;">10</span></h4>
                        <p class="mb-1">Pulse Rate Of This Property is</p>
                        <h4 style="font-size:26px; hover: none; color:#fe0000;">High</h4>
                        </div>
                        <div class="blog-imagelist mb-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57254.73771733552!2d73.02045900140673!3d33.54663869039816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df948974419acb%3A0x984357e1632d30f!2sRawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1681192640111!5m2!1sen!2s"
                                width="600" height="220" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
<style>
  .author-content{
    overflow: hidden;
  }
.blob, .blob2 {
	background: transparent;
    border-radius: 50%;
    margin: 10px;
    height: 20px;
    width: 20px;
    box-shadow: 0 0 0 0 rgba(244, 129, 129, 1);
    transform: scale(1);
    animation: pulse 2s infinite;
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    margin: -10px auto 0;
}

@keyframes pulse {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(244, 129, 129, 0.7);
	}

	70% {
		transform: scale(1);
		box-shadow: 0 0 0 50px rgba(244, 129, 129, 0);
	}

	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(244, 129, 129, 0);
	}
}

.blob2 {
    animation-delay: 500ms;
}

@keyframes pulse2 {
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(244, 129, 129, 0.7);
	}

	70% {
		transform: scale(1);
		box-shadow: 0 0 0 50px rgba(244, 129, 129, 0);
	}

	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(244, 129, 129, 0);
	}
}

</style>

    <section class="discount-action discount-action1 pt-5">
        <div class="container-fluid" style="padding:0px !important">
            <div class="call-banner">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12 col-md-12 p-0">
                        <div class="bg-theme1">
                            <div class="trend-content-main">
                                <div class="trend-content p-5 text-center">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3">
                                            <h2 class=" white">REVIEW</h2>
                                        </div>
                                        <div class="col-lg-4 col-md-3">
                                            <h2 class=" white"> INVEST</h2>
                                        </div>
                                        <div class="col-lg-4 col-md-3">
                                            <h2 class=" white">GET GREAT RETURN</h2>
                                        </div>
                                        <div class="col-lg-2 col-md-3 pt-1">
                                            <div class="align-items-center">
                                             @if($property->status >=1)
                                        <a class="nir-btn-about float-none mb-2" disabled>Pool Close</a>
                                       
                                        @elseif(@Auth::user()->role == 1) 

                                        @else
                                        @guest
                                          <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nir-btn-about float-none mb-2" >Review Property</a>
                                        @endguest
                                        @auth  
                                        

                                        <!-- <a href="" class="nir-btn-about float-none mb-2" >Review Property</a> -->
                                          <a href="" class="nir-btn-about float-none mb-2"
                                            @if($user_check == 0) 
                                            data-bs-toggle="modal" data-bs-target="#questions" 
                                            @else
                                            onclick="showAlert()" 
                                            @endif
                                            >Review Property</a>
                                        @endauth
                                        @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="gallery pt-10 pb-6">
    <div class="container">
        <div id="gallery-container" class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gallery-item mb-4">
                    <div class="gallery-image">
                    <img src="{{asset('uploads/'.@$multiple_images['0']->multiple_images)}}">
                    </div>
                </div>
            </div>

            @if(@$multiple_images['1']->multiple_images != '')
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="gallery-item mb-4">
                    <div class="gallery-image">
                    <img src="{{asset('uploads/'.@$multiple_images['1']->multiple_images)}}">
                    </div>
                </div>
            </div>
            @endif

            @if(@$multiple_images['2']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                        <img src="{{asset('uploads/'.@$multiple_images['2']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif 

                @if(@$multiple_images['3']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                        <img src="{{asset('uploads/'.@$multiple_images['3']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif

                @if(@$multiple_images['4']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                        <img src="{{asset('uploads/'.@$multiple_images['4']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif

                @if(@$multiple_images['5']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                        <img src="{{asset('uploads/'.@$multiple_images['5']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif


                @if(@$multiple_images['6']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                        <img src="{{asset('uploads/'.@$multiple_images['6']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif

                @if(@$multiple_images['7']->multiple_images != '')
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                          <img src="{{asset('uploads/'.@$multiple_images['7']->multiple_images)}}"style="width:100%; height:18em">
                        </div>
                    </div>
                </div>
                @endif

               
                @for($key = 8; $key < count($multiple_images); $key++)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4">
                        <div class="gallery-image">
                          <img src="{{asset('uploads/'.@$multiple_images[$key]->multiple_images)}}"style="width:100%; height:18em">           
                        </div>
                    </div>
                </div>
                @endfor
                
                


        </div>

        <div id="show-more-btn" class="mt-3">
            <button id="show-more" class="nir-btn-about" style="margin:auto; display:block">Show More</button>
            <button id="show-less" class="nir-btn-about" style="display: none; margin:auto">Show Less</button>
        </div>
    </div>
</div>

 


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var galleryContainer = document.getElementById("gallery-container");
        var showMoreButton = document.getElementById("show-more");
        var showLessButton = document.getElementById("show-less");

        var galleryItems = galleryContainer.getElementsByClassName("gallery-item");
        var visibleImages = 8;

        // Hide images beyond the initially visible ones
        for (var i = visibleImages; i < galleryItems.length; i++) {
            galleryItems[i].style.display = "none";
        }

        // Check if there are more images to show
        if (galleryItems.length <= visibleImages) {
            // Hide the show more button if there are no additional images
            showMoreButton.style.display = "none";
        }

        // Show more button click event
        showMoreButton.addEventListener("click", function() {
            // Show all the hidden images
            for (var i = visibleImages; i < galleryItems.length; i++) {
                galleryItems[i].style.display = "block";
            }

            // Hide the show more button and show the show less button 
            showMoreButton.style.display = "none";
            showLessButton.style.display = "block";
        });

        // Show less button click event
        showLessButton.addEventListener("click", function() {
            // Hide the extra images beyond the initially visible ones
            for (var i = visibleImages; i < galleryItems.length; i++) {
                galleryItems[i].style.display = "none";
            }

            // Show the show more button and hide the show less button
            showMoreButton.style.display = "block";
            showLessButton.style.display = "none";
        });
    });
</script>




 
    <div class="content-line m-0">
        <div class="content-line-inner bg-theme2 pb-6 pt-6 p-5">
            <div class="container">
                <div class="row d-md-flex align-items-center justify-content-between text-lg-start text-center">
                    <div class="col-lg-9">
                        <h2 class="mb-0">
                            Looking for a dream home?
                        </h2>
                        <p class="">We can help you realize your dream of a new home</p>
                    </div>
                    <div class="col-lg-4">
                        <a href="" class="nir-btn-about float-lg-end float-none">Find More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('front.includes.footer')

    <!---==============Sign in modal starts here==============-->


    @include('auth.login')
        <!---==============Sign in modal End here==============-->

        <!---==============Sign up modal starts here==============-->

        
        @include('auth.register')
        <!---==============Sign up modal End here==============-->







<!-- Modal  -->

  <!-- Review Property  -->
  <div class="modal fade detail_modal" id="questions" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
       
          <h4 class="modal-title">Questions</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <div id="rootwizard">
            <div >
              <div >
                
              </div>
            </div>
            <form action="{{url('review_property')}}" method="POST" id="myForm">
              @csrf
  

            <input type="hidden" value="{{$property->id }}" name="property_id"  >
            <input type="hidden" value="{{@Auth::user()->id }}" name="user_id" > 



             <div class="tab-content tab-text">
              <div class="tab-pane active" id="tab1">
                
                  <div>
                    <h4>Have you visited the property?</h4>
                  </div>
          
                      <div class="form-check ">
                        <label class="form-check-label">
						            <input class="form-check-input step1" type="radio" id="yes" name="visit_property" value="yes"  />
                        Yes</label>
                                <br>
                        <label class="form-check-label">
						            <input class="form-check-input step1" type="radio" id="no" name="visit_property" value="no" >
                        No</label>
                      </div> 
             

                
              </div>
              <div class="tab-pane" id="tab2">
              <div>
                    <h4>Tell us what you liked about the property.</h4>
                    <textarea class="form-control" id="step2" placeholder="Your Text Here" name="positive_review"  ></textarea>
                  </div>
              </div>


              <div class="tab-pane" id="tab3">

                
                <div>
                    <h4>What did you not like about the property. </h4>
                    <textarea class="form-control" placeholder="Your Text Here" name="negative_review" id="step3"></textarea>
                </div>
                

              </div>


    

                <!-- <div class="tab-pane" id="tab4">
              
                      <h4>Rate the Property</h4>
                      
                      <span id="rangeValue">1</span>
                      <Input class="range" type="range" name="rating" value="1" min="1" max="10" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                      
                  
                </div> -->


                <div class="tab-pane" id="tab4">
                  <div class="col-md-12"> 
                    <h4>Rate the Property</h4>
                    <div class="col-md-3" style="margin:auto ">
                      <span id="demo" style="margin-left:100px; font-size:25px; font-weight:600; color:red">0</span>
                    </div>
            
                    <input type="range"  type="range" name="rating" value="1" min="1" max="10" class="form-control-range range-slider range"  style="margin:auto "id="myRange">
                  </div>
              
            
              </div>
        
              <ul class="pager wizard">
                
                <li class="previous"><a id="myModalPrevious" class="nir-btn-about float-none mb-2" >Previous</a></li>
             
                <li class="next next-btn"><a id="myModalNext" class="nir-btn-about float-none mb-2"  style="color:#333">Next</a></li>
                <li class="last-btn" ><a class="nir-btn-about float-none mb-2" onclick="document.getElementById('myForm').submit(); return false;"  id="finish" style="display:none;">Finish</a></li>
              
              </ul>  

            </div>
            </form>
          </div>

     
        </div>
      
      </div>

    </div>
  </div>

  <!-- visit property popup -->
<!-- <div class="modal fade detail_modal" id="visitPropertyModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Please visit the property first</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You cannot submit a review without visiting the property. Please visit the property first.</p>
      </div>
     
    </div>
  </div>
</div> -->

 
  <!-- <div class="modal fade detail_modal" id="myModalReviewed" role="dialog">
	<div class="modal-dialog">
		
		<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          
        </div>
			<div class="modal-body">
				<div class="text-center">You have already review this property pool.</div>
			</div>
		</div>
	</div>
</div>
 -->
  <!--Already reviewed Property sweet alert -->
  <!-- Modal -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.all.min.js"></script>
  <script>
    function showAlert() {
      Swal.fire({
        // title: 'SweetAlert Dialog',
        text: 'You have already reviewed the property',
        icon: 'success',
        showCloseButton: true,
        confirmButtonText: 'OK'
      });
    }
  </script>




  <!-- Question modal -->
  <!-- form validator -->
  

<script>
  $(document).on('click', '#open-review-modal', function(){
    $('#question').modal({
      backdrop : 'static',
      keyboard : false
    });
  });

  $(document).on('click', '#myModalNext', function(){
    if ($('#tab1').hasClass('active')) {
  if ($('.step1').is(':checked')) {
    var step1 = $('.step1:checked').val();
    if (step1 == 'yes') {
      $('#tab1').removeClass('active');
      $('#tab2').addClass('active');
    } else if (step1 == 'no') {
      $('#questions').modal('hide');
      Swal.fire({
        title: 'Please visit the property first',
        text: 'You cannot submit a review without visiting the property. Please visit the property first.',
        icon: 'info',
        confirmButtonText: 'OK'
      });
      return true;
    }
  } else {
    return false;
  }
}

    if($('#tab2').hasClass('active')){
      var step2=$('#step2').val();
      if(step2 == ""){
        // document.getElementById("step2").style.borderColor = "red";
        return false;
      }
      $('#tab2').removeClass('active');
      $('#tab3').addClass('active');
    }else 

    if($('#tab3').hasClass('active')){
      var step3=$('#step3').val();
      if(step3 == ""){
        return false;
      }
      $('#tab3').removeClass('active');
      $('#tab4').addClass('active');
      document.getElementById("myModalNext").style.display = "none";
      document.getElementById("finish").style.display = "block";
    }else 
    if($('#tab4').hasClass('active')){
      var step3=$('#step3').val();
      if(step3 == ""){
        return false;
      }
      document.getElementById("myModalNext").style.display = "none";
      document.getElementById("finish").style.display = "block";
    }

  });


  // previous
  $(document).on('click', '#myModalPrevious', function(){
    if($('#tab1').hasClass('active')){
        document.getElementById("myModalPrevious").disabled = true;
      document.getElementById("finish").style.display = "none";
      document.getElementById("myModalNext").style.display = "block";
    }

    if($('#tab2').hasClass('active')){
     
      $('#tab2').removeClass('active');
      $('#tab1').addClass('active');
      document.getElementById("finish").style.display = "none";
      document.getElementById("myModalNext").style.display = "block";

    }

    if($('#tab3').hasClass('active')){
      
      $('#tab3').removeClass('active');
      $('#tab2').addClass('active');
      document.getElementById("finish").style.display = "none";
      document.getElementById("myModalNext").style.display = "block";

    }


    if($('#tab4').hasClass('active')){
      
      $('#tab4').removeClass('active');
      $('#tab3').addClass('active');
      document.getElementById("finish").style.display = "block";
      document.getElementById("myModalNext").style.display = "none";

    }

  });
</script>

  <!-- form validator -->
 <!-- Question modal -->




<script>

// new script 
// function visitProperty() {
//   $('#questions').modal('hide');
//   $('#visitPropertyModal').modal('show');

// }


// rating

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
}


     
</script>

    @endsection