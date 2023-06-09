@extends('front.dashboard_2.layouts.main')
@section('title', 'Dashboard - Reviewed Properties')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cabin:wght@600&display=swap');

body {
    margin: 0;
    font-family: 'Barlow', sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #F8F6F6;
}

.property-card {
    border-radius: 16px 16px 16px 16px;
    border: none;
    box-shadow:0px 0px 1px 0px;
}

.property-card img {
    border-radius: 16px 16px 0px 0px;
    height:200px;

}

.title-card {
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 28px;
}

.location-card {
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 17px;
    color: #666666;
}

.price-card-1 {
    font-family: 'Barlow' !important;
    font-style: normal !important;
    font-weight: 700 !important;
    font-size: 24px !important;
    line-height: 132% !important;
    color: #FE0000 !important;
}

.list-card {
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 132%;
    color: #666666;
    top: 9px;
    position: relative;
    float: right !important;
}
</style>

<section class="container-fluid">
<div class="row">

    @include('front.dashboard_2.includes.sidenav')


   <div class="col-md-9">
   <h1 style="margin-top:60px">Reviewed Properties</h1>
 
 @php
     $rev=DB::table('property_reviews')->where('user_id',Auth::user()->id)->get();
 @endphp
 <div class="container">
    <div class="row">
 @foreach($rev as $review_property)
     @php
         $pro=DB::table('properties')->where('id',$review_property->property_id)->first();
         $address=$pro->address;
         $max_length = 20;

         $today_date = time(); // or your date as well
         $listed_date = strtotime($pro->created_at);
         $datediff = $today_date - $listed_date;

         $total_days= round($datediff / (60 * 60 * 24));
     @endphp

     @if($review_property->action == '' )

                <div class="col-lg-4 mt-5">
                    <a href="{{url('pool_detail',[$pro->id])}}">
                        <div class="card property-card" >
                            <img class="image" src="{{ asset('uploads/'.$pro->featured_image ) }}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                    @if(strlen($address) > $max_length)
                                    <h4 class="card-title">{{$pro->bedrooms}} Bedroom {{$pro->type}} in {{substr($address,0,$max_length)}}....</h4>
                                    @else
                                    <h4 class="card-title">{{$pro->bedrooms}} Bedroom {{$pro->type}} in {{$pro->address}}</h4>
                                    @endif
                                <!-- <p class="location-card">Atascadero, California</p> -->
                                <div class="row">
                                <div class="col-md-6">
                                    <p class="price-card-1">${{number_format($pro->price)}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="list-card">Listed {{$total_days}} days ago</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

     @endif
 @endforeach
 </div>
        </div>
</div>


</section>


@endsection