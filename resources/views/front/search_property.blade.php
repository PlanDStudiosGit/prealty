@extends('front.layouts.main_old')

@section('content')

@include('front.includes.navbar_old')

    <style>
          @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cabin:wght@600&display=swap');


.property-card {
    border-radius: 16px 16px 16px 16px;
    border: none;
    box-shadow:0 0 2px 0;
}
.property-card img{
    border-radius: 16px 16px 0px 0px;
    height:250px;
 
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
   
        .main-cont{
          height: calc(100vh - 50px); 
        }
        .filter{
          overflow: auto;
          padding-top: 20px;
          height: calc(100vh - 50px);
        }
        .filter-1{
          padding-bottom: 10px;
        }

        .mapdiv{
          padding-left: 0px;
          overflow: hidden;
          border-radius: 10px;
        }
    </style>


   
                  <div class="main-cont">
                    <div class="row">  
                      <div class="col-md-4">
                        <div class="filter">
 
                          @foreach($property as $properties)  
                            @php
                                $users=DB::table('property_reviews')->Where('property_id', $properties->id)->where('user_id','!=','')->get();
                                $address=$properties->address;
                                $max_length = 39;
                                            
                                $today_date = time(); // or your date as well
                                $listed_date = strtotime($properties->created_at);
                                $datediff = $today_date - $listed_date;

                                $total_days= round($datediff / (60 * 60 * 24));
                            @endphp
                            <a href="{{url('detail',[$properties->id])}}"> 
                            <div class="col-lg-12 filter-1" style="margin-top:20px">
                            <div class="card property-card">
                                <img class="image" src="{{ asset('uploads/'.$properties->featured_image ) }}" alt="Card image" style="width:100%">
                                <div class="card-body" style="margin:0px 5px 0px 5px">
                                    @if(strlen($address) > $max_length)
                                    <h4 class="card-title"><b>{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{substr($address,0,$max_length)}}....</b></h4>
                                    @else
                                    <h4 class="card-title"><b>{{$properties->bedrooms}} Bedroom {{$properties->type}} in {{$properties->address}}</b></h4>
                                    @endif
                                  <!-- <p class="location-card">Atascadero, California</p> -->
                                  <div class="row">
                                    <div class="col-md-6">
                                      <p class="price-card-1">${{number_format($properties->price)}}</p>
                                    </div>
                                    <div class="col-md-6">
                                      <p class="list-card">Listed {{$total_days}} days ago</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>

                              </a>
                          @endforeach

                        </div>
                      </div>
                        <div class="col-md-8 mapdiv">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d106334.08051777392!2d73.06608639999999!3d33.60686080000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1673607574723!5m2!1sen!2s" width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                  </div>

  
 <!-- FOOTER -->
 @include('front.includes.footer_old')

@endsection