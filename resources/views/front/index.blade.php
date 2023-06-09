
@extends('front.layouts.main')

@section('title', 'Pulse Reality - Home')

@section('content')

@include('front.includes.navbar')





 


    <section class="banner overflow-hidden">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url({{asset('front/assets/images/banner-image.png')}})"></div>
                        <div class="swiper-content">
                            <h2 class="mb-1"><a href="#" class="white">Lets Find A Home That’s Perfect for You</a></h2>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="form-main">
        <div class="container">
            <div class="form-content">
            <form action="search_property" method="POST" id="search_Form">
                @csrf
               <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Location</label>
                                    <div class="input-box">
                                        <i class="fa fa-search"></i>
                                        <input type="text" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Property Type</label>
                                    <div class="input-box">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <select class="niceSelect" name="type">
                                            <option value="Single-Family">Single-Family</option>
                                            <option value="Condo">Condo</option>
                                            <option value="TownHouse">TownHouse</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Price Range</label>
                                    <div class="input-box">
                                        <i class="fa fa-building"></i>
                                        <select class="niceSelect" name="range">
                                            <option value="50000-250000">$50,000-250,000</option>
                                            <option value="250000-500000">$250,000-500,000</option>
                                            <option value="500000-1000000">$500,000-1,000,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0 mt-4 as">
                                    <a  class="nir-btn w-100" onclick="document.getElementById('search_Form').submit(); return false;"><i class="fa fa-search mr-2"></i> Search </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Search Property</label>
                                    <div class="input-box">
                                        <i class="flaticon-search"></i>
                                        <input type="text" placeholder="Search Property">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0">
                                    <label>Location</label>
                                    <div class="input-box">
                                        <i class="flaticon-placeholder"></i>
                                        <select class="niceSelect">
                                            <option value="1">Input Location</option>
                                            <option value="2">Argentina</option>
                                            <option value="3">Belgium</option>
                                            <option value="4">Canada</option>
                                            <option value="5">Denmark</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0"> 
                                    <label>Property Type</label>
                                    <div class="input-box">
                                        <i class="flaticon-add-user"></i>
                                        <select class="niceSelect">
                                            <option value="1">Luxury</option>
                                            <option value="2">Deluxe</option>
                                            <option value="3">Premium</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group mb-0 mt-4">
                                    <a class="nir-btn w-100"><i class="fa fa-search mr-2"></i> Search Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>


    <section class="about-us pt-0 pb-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-image p-3 position-relative">
                            <img src="{{asset('front/assets/images/Image.png')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block">About Us</h4>
                            <h2 class="mb-2 pb-2">The Leading Real Estate Rental Marketplace.</h2>
                            <p class="mb-2 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <div class="trend-btn pb-2"><a href="#" class="nir-btn-about">Learn More</a></div>
                            <!-- <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    <li><i class="fa fa-building theme"></i> Smart Home Design</li>
                                    <li><i class="fa fa-building theme"></i> Beautiful Scene Around</li>
                                    <li><i class="fa fa-building theme"></i> Complete 24/7 Security</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="trending">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75">
                <h4 class="top-red-text">Hot Properties</h4>
                <h2 class="m-0">Hot Properties <span>Right Now</span></h2>
            </div>

            <div class="trend-box">
                <div class="row item-slider">
                    
                @foreach($hot_properties as $hot_property)
                    @php
                    $users=DB::table('property_reviews')->Where('property_id', $hot_property->id)->where('user_id','!=','')->get();
                    @endphp
               
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <a href="{{url('detail',[$hot_property->id])}}">
                            <div class="trend-image property_img">
                                <img class="slider_image" src="{{ asset('uploads/'.$hot_property->featured_image ) }}" alt="image">
                            </div>

                            @php 
                            $address=$hot_property->address;
                            $max_length = 42;

                      
                            $today_date = time(); 
                            $listed_date = strtotime($hot_property->created_at);
                            $datediff = $today_date - $listed_date;
                            $total_days= round($datediff / (60 * 60 * 24));
                            @endphp 
                      
                            <div class="trend-content p-4">
                            @if(strlen($address) > $max_length)
                                <h4 class="address">{{$hot_property->bedrooms}} Bedroom {{$hot_property->type}} in {{substr($address,0,$max_length)}}....</h4>
                            @else
                                <h4 class="address">{{$hot_property->bedrooms}} Bedroom {{$hot_property->type}} in {{$hot_property->address}}</h4>
                            @endif
                            
                                <div
                                    class="entry-meta d-flex align-items-center justify-content-between border-b">
                                    <div class="entry-author">
                                        <p><span class="price">${{number_format($hot_property->price)}}</span></p>
                                    </div>
                                    <div class="entry-metalist d-flex align-items-center">
                                        <p class="listed listed_days">Listed {{$total_days}} days ago</p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                </div>
                    
                
                
        @endforeach
                
                
                
                </div>
                <div class="trend-btn text-center"><a href="#" class="nir-btn-about">View All</a></div>
            </div>
        </div>
    </section>

    <!--- ========================================= --->
    <!---          How It Works starts here         --->
    <!--- ========================================= --->

    <section class="about-us pb-5">
        <div class="container">
            <div class="row align-items-center mb-6 text-center text-lg-start">
                <div class="col-lg-12">
                    <div class="section-title section-title-l pb-1 text-center">
                        <h4 class="top-red-text">Work</h4>
                        <h2 class="m-0"><span>How It</span> Works?</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 mb-4 hide-1080">
                <div class="about-image p-3 position-relative">
                    <img src="{{asset('front/assets/images/image-01.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row show-1080">
                <div class="col-lg-2 col-md-12 mb-4">
                    <div class="trend-item box-shadow bg-white d-flex align-items-center justify-content-between p-3">
                        <div class="trend-image w-25 me-3 wh-a">
                            <img src="{{asset('front/assets/images/trending1.png')}}" alt="image">
                        </div>
                        <div class="trend-content-main w-75">
                            <div class="trend-content">
                                <h5 class="theme mb-1">01</h5>
                                <h4 class="mb-0"><a href="">Choose A Property You Like </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="trend-item box-shadow bg-white d-flex align-items-center justify-content-between p-3">
                        <div class="trend-image w-25 me-3">
                            <img src="{{asset('front/assets/images/trending2.png')}}" alt="image">
                        </div>
                        <div class="trend-content-main w-75">
                            <div class="trend-content">
                                <h5 class="theme mb-1">02</h5>
                                <h4 class="mb-0"><a href="">Review The Property</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="trend-item box-shadow bg-white d-flex align-items-center justify-content-between p-3">
                        <div class="trend-image w-25 me-3">
                            <img src="{{asset('front/assets/images/trending3.png')}}" alt="image">
                        </div>
                        <div class="trend-content-main w-75">
                            <div class="trend-content">
                                <h5 class="theme mb-1">03</h5>
                                <h4 class="mb-0"><a href="">Pulse Realty Buys The Property</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="trend-item box-shadow bg-white d-flex align-items-center justify-content-between p-3">
                        <div class="trend-image w-25 me-3">
                            <img src="{{asset('front/assets/images/trending4.png')}}" alt="image">
                        </div>
                        <div class="trend-content-main w-75">
                            <div class="trend-content">
                                <h5 class="theme mb-1">04</h5>
                                <h4 class="mb-0"><a href="">Bid on Property Or Seek ROI</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="trend-item box-shadow bg-white d-flex align-items-center justify-content-between p-3">
                        <div class="trend-image w-25 me-3">
                            <img src="{{asset('front/assets/images/trending5.png')}}" alt="image">
                        </div>
                        <div class="trend-content-main w-75">
                            <div class="trend-content">
                                <h5 class="theme mb-1">05</h5>
                                <h4 class="mb-0"><a href="">Get Great Returns On Your Investments</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   
    <!--- ========================================= --->
    <!---          How It Works End's here          --->
    <!--- ========================================= --->

    <!--- ========================================= --->
    <!---          Our Propertise starts here       --->
    <!--- ========================================= --->

    <section class="trending bg-grey pt-9">
        <div class="container">
            <div class="section-title mb-6 pb-1 w-75 mx-auto text-center">
                <h4 class="top-red-text">More Propertise</h4>
                <h2 class="m-0"><span>Our Propertise</span></h2>
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                        @foreach($property as $key => $properties)
                        @php
                            $users=DB::table('property_reviews')->Where('property_id', $properties->id)->where('user_id','!=','')->get();
                        @endphp 
                        @if ($key < 6)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="trend-item box-shadow rounded bg-white">
                                <a href="{{url('detail',[$properties->id])}}">
                                    <div class="trend-image property_img">
                                        <img class="slider_image" src="{{ asset('uploads/'.$properties->featured_image ) }}" alt="image">
                                    </div>
                                    @php 
                                    $address=$properties->address;
                                    $max_length = 42;

                            
                                    $today_date = time(); 
                                    $listed_date = strtotime($properties->created_at);
                                    $datediff = $today_date - $listed_date;
                                    $total_days= round($datediff / (60 * 60 * 24));
                                    @endphp 
                                    
                                    <div class="trend-content p-4">
                                    @if(strlen($address) > $max_length)
                                        <h4 class="address">{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{substr($address,0,$max_length)}}....</h4>
                                    @else
                                        <h4 class="address">{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{$properties->address}}</h4>
                                    @endif
                                   
                                        <div
                                            class="entry-meta d-flex align-items-center justify-content-between border-b">
                                            <div class="entry-author">
                                                <p><span class="price">${{number_format($properties->price)}}</span></p>
                                            </div>
                                            <div class="entry-metalist d-flex align-items-center">
                                                <p class="listed listed_days">Listed {{$total_days}} days ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        @endif
                        @endforeach


                        </div>
                    </div>
                </div>
                <div class="trend-btn text-center pb-3"><a href="#" class="nir-btn-about">View All Listings</a></div>
            </div>
        </div>
    </section>

    <!--- ========================================= --->
    <!---          Our Propertise Ends here         --->
    <!--- ========================================= --->

    <!--- ========================================= --->
    <!---          Testimonials Start here          --->
    <!--- ========================================= --->

    <section class="testimonial pb-5 pt-9">
        <div class="container">
            <div class="section-title mb-4 pb-1 mx-auto">
                <h4 class="top-red-text">More Propertise</h4>
                <h2 class="m-0"><span>What Our Customers Says</span></h2>
            </div>
            <div class="row review-slider">
                <div class="col-sm-4 item">
                    <div class="testimonial-item1">
                        <div class="details">
                            <p class="mb-3">Wow, what a guided by professional<br> people.</p>
                        </div>
                        <div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <a href="#"><img src="{{asset('front/assets/images/testimonial-img.png')}}" alt=""></a>
                                </div>
                                <div class="col-md-9">
                                    <div class="col-md-12">
                                        <h4 class="m-0 theme2">Benjamin Robert</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1">
                        <div class="details">
                            <p class="m-0">It's an amazing experience to be able to buy a new place to live, thank you
                                Pulse Realty.</p>
                        </div>
                        <div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <a href="#"><img src="{{asset('front/assets/images/testimonial-img-1.jpg')}}" alt=""></a>
                                </div>
                                <div class="col-md-9">
                                    <div class="col-md-12">
                                        <h4 class="m-0 theme2">Annette Black</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1">
                        <div class="details">
                            <p class="m-0">At first I was lazy but after being accompanied by a pleasant guide.</p>
                        </div>
                        <div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <a href="#"><img src="{{asset('front/assets/images/testimonial-img-2.jpg')}}" alt=""></a>
                                </div>
                                <div class="col-md-9">
                                    <div class="col-md-12">
                                        <h4 class="m-0 theme2">Kathryn Murphy</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item1">
                        <div class="details">
                            <p class="m-0">New story in my life, really amazing and also affordable.</p>
                        </div>
                        <div>
                            <div class="row mt-2">
                                <div class="col-md-3">
                                    <a href="#"><img src="{{asset('front/assets/images/testimonial-img-3.jpg')}}" alt=""></a>
                                </div>
                                <div class="col-md-9">
                                    <div class="col-md-12">
                                        <h4 class="m-0 theme2">Guy Hawkins</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

 <!-- footer  -->
@include('front.includes.footer')


    <!-- <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div> -->


    <!---==============Sign in modal starts here==============-->


    @include('auth.login')
        <!---==============Sign in modal End here==============-->

        <!---==============Sign up modal starts here==============-->

        
        @include('auth.register')
        <!---==============Sign up modal End here==============-->



@endsection