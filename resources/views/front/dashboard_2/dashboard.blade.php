@extends('front.dashboard_2.layouts.main')

@section('title', 'Pulse Realty - Dashboard')

@section('content')

<style>
  
.box{ 
    padding:15px 0 1px 10px;
    border-radius:10px; 
    box-shadow: 0px 0px 10px #ccc;
    width:100%;
    height:auto;
}
</style>


<section class="container-fluid">
<div class="row">

    @include('front.dashboard_2.includes.sidenav')


   <div class="col-md-9">
    <button type="button" class="btn-open">Save</button>
                <h2 style="margin-top:60px" >Dashboard</h2>
                <h5>Welcome to your Pulse Realty Dashboard.</h5>
                <p style="margin: 0 !important;">You can view your invested amount and add more funds to your investments.</p>
                <p style="margin: 0 !important;">View your reviewed properties and invested properties from the menu.</p>
                    @php
                        $initail_investment=$user->investment;
                        $remaining_amount=$initail_investment-100000;
                    @endphp
                    <div class="box text-center"   style="margin-top:30px" >
                    <div class="row">
                      <div class="col-md-4">
                        <p>INITIAL INVESTMENT: <span style="font-size: 20px; font-weight:600; display: block;">${{number_format($initail_investment)}}</span></p>
                      </div>
                        <div class="col-md-4">
                        <p>CURRENTLY INVESTED: <span style="font-size: 20px; font-weight:600; display: block;">${{number_format(100000)}}</span></p>
                        </div>
                        <div class="col-md-4">
                        <p>REMAINING AMOUNT:<span style="font-size: 20px; font-weight:600; display: block;">${{number_format($remaining_amount)}}</span></p>
                        </div>
                      </div>
                    </div>

                    <button class="btn btn-primary mt-3 ml-2" data-toggle="modal" data-target="#myModal" style="background-color: rgba(254,0,0,0.7); border: none;">Add Amount</button>
              
    



                <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add more Investement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{url('/update_investment')}}" method="POST">
                @csrf
                <input type="number" name="investment" class="form-control" min="1" required>
                <input type="number" name="initail_investment" hidden value="{{$initail_investment}}" >
                <button type="submit" class="btn btn-primary mt-3 " style="float:right; background-color: rgba(254,0,0,0.7); border: none;" >Submit</button>
            </form>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
</section>


@endsection  