@extends('front.layouts.main_old')

@section('content')

@include('front.includes.navbar_old ')


    <style>
        body {
            padding-top: 50px;
            overflow: hidden;
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
        <div class="col-md-3"> 
<div class="filter">

  <div class="col-md-12 filter-1">
    <div class="card">
      <a href="./detail.html"> <img class="img-responsive card-style" src="./assets/Images/image-02.jpg"></a>
      <div class="card-body card-body-style">
        <h5 class="card-title">4 Bedroom in Houston,Texas</h5>
        <div class="row">
        <div class="col-md-6">
        <h5 class="card-text card-text-style">$4,50,000</h5>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <p class="investor">2</p>
          </div>
        <div class="col-md-3">
        <img src="./assets/Images/avatar.png" alt="Avatar" class="avatar">
      </div>
    </div>
    </div>
      </div>
    </div>
  </div>
  </div>

  <div class="col-md-12 filter-1">
    <div class="card">
      <a href="./detail.html"> <img class="img-responsive card-style" src="./assets/Images/image-02.jpg"></a>
      <div class="card-body card-body-style">
        <h5 class="card-title">4 Bedroom in Houston,Texas, USA</h5>
        <div class="row">
        <div class="col-md-6">
        <h5 class="card-text card-text-style">$4,50,000</h5>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <p class="investor">2</p>
          </div>
        <div class="col-md-3">
        <img src="./assets/Images/avatar.png" alt="Avatar" class="avatar">
      </div>
    </div>
    </div>
      </div>
    </div>
  </div> 
  </div>

  <div class="col-md-12 filter-1">
    <div class="card">
      <a href="./detail.html"> <img class="img-responsive card-style" src="./assets/Images/image-02.jpg"></a>
      <div class="card-body card-body-style">
        <h5 class="card-title">4 Bedroom in Houston,Texas</h5>
        <div class="row">
        <div class="col-md-6">
        <h5 class="card-text card-text-style">$4,50,000</h5>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9">
            <p class="investor">2</p>
          </div>
        <div class="col-md-3">
        <img src="./assets/Images/avatar.png" alt="Avatar" class="avatar">
      </div>
    </div>
    </div>
      </div>
    </div>
  </div>
  </div>
</div>
      </div>

        <div class="col-md-9 mapdiv">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d106334.08051777392!2d73.06608639999999!3d33.60686080000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1673607574723!5m2!1sen!2s" width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

  
 <!-- FOOTER -->
 @include('front.includes.footer_old')

@endsection