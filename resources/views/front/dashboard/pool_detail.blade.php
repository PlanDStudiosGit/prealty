<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <title>Pulse Realty</title>
        <link rel="icon" type="image/x-icon" href="{{asset('front/assets/Images/fav-icon.png')}}">
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/simple-line-icons/css/simple-line-icons.css')}}">        
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/flags-icon/css/flag-icon.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/flag-select/css/flags.css')}}">
        
        <!-- END Template CSS-->

            <!-- START: Page CSS-->
            <link rel="stylesheet"  href="{{asset('front/dashboard/vendors/chartjs/Chart.min.css')}}">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/morris/morris.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/weather-icons/css/pe-icon-set-weather.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/chartjs/Chart.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/starrr/starrr.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
        <script src="https://kit.fontawesome.com/a076d05399.js')}}" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/ionicons/css/ionicons.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('front/dashboard/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css')}}">
        
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{asset('front/dashboard/css/main.css')}}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

    <style>


    
        .btn{ 
            background-color:#007bff;
        }
        .btn:hover{
            background-color:#007bff;
            
        }

        .box{ 
            padding:15px 0 1px 10px;
            margin:10px  auto 10px auto; 
            border-radius:20px; 
            box-shadow:0 0 2px 0;


        }
        

 

        .open{
            height:15px;
            width:15px;
            border:1px solid #42be42;
            border-radius:50%;
            margin-top: 3px;
            background-color:#42be42;
            
        }

        
        .close{
            height:15px;
            width:15px;
            border:1px solid red;
            border-radius:50%;
            margin-top: 3px;
            background-color:red;
            
        }
        .bought{
            height:15px;
            width:15px;
            border:1px solid blue;
            border-radius:50%;
            margin-top: 3px;
            background-color:blue;
            
        }
        .bids{
            height:15px;
            width:15px;
            border:1px solid orange;
            border-radius:50%;
            margin-top: 3px;
            background-color:orange;
            
        }





    


/* progress bar  */
.progressbar-wrapper {
      background: #fff;
      width: 100%;
      padding-top: 10px;
      padding-bottom: 10px;
}

.progressbar li {
      list-style-type: none;
      width: 20%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
      background:transparent !important;
}
.progressbar li:before {
    width: 60px;
    height: 60px;
    content: "";
    line-height: 60px;
    border: 2px solid #7d7d7d;
    display: block;
    text-align: center;
    margin: 0 auto 15px auto;
    border-radius: 50%;
    position: relative;
    z-index: 2;
    background-color: #fff;
}
.progressbar li:after {
     width: 100%;
     height: 2px;
     content: '';
     position: absolute;
     background-color: #7d7d7d;
     top: 30px;
     left: -50%;
     z-index: 0;
}
.progressbar li:first-child:after {
     content: none;
}
.progressbar li.status_active {
    color: green;
    font-weight: bold;  
}
.progressbar li.status_active:before {
    border-color: #55b776;
    background: green;
 }
.progressbar li.status_active + li:after {
    background-color: #55b776;
}
.progressbar li.status_active:before {
    background: #55b776  url(user.svg) no-repeat center center;
    background-size: 60%;
}
.progressbar li::before {
    background: #fff url(user.svg) no-repeat center center;
    background-size: 60%;
}
.progressbar {
    counter-reset: step;
} 
.progressbar li:before {
    content: counter(step);
    counter-increment: step; 
}
        
     
</style>
        

      <!-- START: Pre Loader-->
      <!--   <div class="se-pre-con">
            <img src="{{asset('front/dashboard/images/logo.png.jpeg')}}" alt="logo" width="23" class="img-fluid"/>
        </div> -->
        <!-- END: Pre Loader-->


        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header h4 mb-0 align-self-center logo-bar text-center">  
                    <a href="" class="horizontal-logo text-center">
                        <span class="h3 align-self-center mb-0 "><img src="front/dashboard/images/bpulse-logo.png" alt="" style=width:150px></span>              
                    </a>                   
                </div>
                <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                    <a href="#" class="sidebarCollapse" id="collapse"><i class="fa fa-bars" style="color: #a355ff;"></i></a>
                </div>

                <div style="float:right">
                <li style="decoration:none"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                </div>

          
                
            </nav>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        @include('front.dashboard.includes.sidenavbar')
        <!-- END: Main Menu-->





       




        <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                <!-- START: Breadcrumbs-->
               
   

                <div class="progressbar-wrapper" style="margin-bottom:100px">  
                    <ul class="progressbar"  >
                        <li class="circle status_active" id="step-1" >POOL OPEN</li>
                        <li class="circle {{ ($property->status >= 1) ?'status_active' :'' }}" id="step-2">POOL CLOSED</li>
                        <li class="circle {{ ($property->status >= 2) ?'status_active' :'' }}" id="step-3">PROPERTY BOUGHT</li>
                        <li class="circle {{ ($property->status >= 3) ?'status_active' :'' }}" id="step-4">PLACE BIDS</li>
                        <li class="circle {{ ($property->status >= 4) ?'status_active' :'' }}" id="step-5">JOURNEY END</li>

                    </ul> 
                </div>
 
        
        
                @if($buyer->user_id == Auth::id() && $property->status == 4)
                <marquee width="100%" direction="right" style="text-align:center; font-size:20px;padding:20px 0 20px 0;">CONGRATULATIONS, YOUR BID HAS BEEN ACCPETED AND THE PROPERTY HAS BEEN SOLD TO YOU FOR ${{number_format($buyer->bid_amount)}}</marquee>
                @endif
                <div class="container" >
                    <div class="row" > 
                        <div class="col-lg-6">
                            <div class="box"> 
                                <p style="margin-left:10px; "><b>Property Pool:</b></p>  
                                <p style="margin-left:10px; ">{{$property->bedrooms}} Bedroom {{$property->type}} in {{$property->address}}</p>
                            </div> 

                          

                            <div class="box">
                                <p style="padding-top:10px">POOL STATUS:</p>
                                @if($property->status == 0)
                                <div style="display:flex; ">
                                    <div class="open"></div>
                                    <p style="color:green; margin-left: 6px; ">status_ACTIVE/OPEN</p>
                                </div> 
                                @elseif($property->status == 1)
                                <div style="display:flex; " >
                                    <div class="close"></div> 
                                        <p style="color:red; margin-left: 6px;">status_ACTIVE/CLOSE</p>
                                </div>
                                @elseif($property->status == 2)
                                <div style="display:flex; " >
                                    <div class="bought"></div> 
                                    <p style="color:blue; margin-left: 6px;">PROPERTY BOUGHT</p>
                                </div>
                                @elseif($property->status == 3)
                                <div style="display:flex; ">
                                    <div class="bids"></div> 
                                    <p style="color:Orange; margin-left: 6px;">BIDS</p>
                                </div>
                                @elseif($property->status == 4)
                                <div style="display:flex; ">
                                    <div class="bids"></div> 
                                    <p style="color:Orange; margin-left: 6px;">JOURNEY END</p>
                                </div>
                                

                                @endif
                                <p>PEOPLE IN POOL:{{$total_users}}</p>
   
                            </div>

                            <div class="box">
                                <p>INVESTMENT PLEDGED:</p>
                                <p>AMOUNT IN USD: {{number_format($property_review->total_investment_value)}} </p>
                                <p>{{$property_review->total_investment}}% OF HOME VALUE</p>   
                            </div>

                            @if($property_review->action == "roi")  
                            <div class="box">

                                <p>YOU HAVE OPTED FOR ROI:</p>
                                <p> ${{number_format($property_review->total_investment_value)}} </p>
                                <p>{{$property_review->total_investment}}% OF HOME VALUE</p>
                            </div>

                            @elseif($property_review->action == "buy") 
                            <div class="box">

                                <p style="font-size:15px">YOUR BID VALUE IS: </p>
                                <p style="font-size:17px"> ${{number_format($property_review->bid_amount)}}</p>

                            </div>

                            @endif

                            <div class="place_bid">
                                @if($property->status == 3)
                                <button id="popup-1-btn" class="btn btn-primary">Place Bid</button>
                                @endif
                            </div>
                         
                        </div> 
                      


                       

                        
                        @php 
                        $remaining_amount=$buyer->bid_amount-$buyer->total_investment_value;
                        $total_profit=$buyer->bid_amount-$property->price; 
                        $pulse_profit=$total_profit/100*15;
                        $total_profit_after_deduction=$total_profit-$pulse_profit;
                        $invester_profit=$property_review->total_investment/100 * $total_profit_after_deduction;
                        @endphp


                        <div class="col-lg-6">
                           @if($property->status == 4 )
                            <div class="box"> 
                                <p>PROPERTY HAS BEEN SOLD TO:</p>
                                <P>{{ucwords($bid_users->name)}} FOR ${{number_format($buyer->bid_amount)}}</P>
                            </div>
                            @endif 

                            @if($buyer->user_id != Auth::id() && $property->status == 4)
                           <div class="box">
                                <p>PROFIT AFTER PROPERTY SOLD:</p>
                                <p>${{number_format($total_profit)}}</p>
                                <p>{{$property->company_profit}}% SERVICE CHARGES OF PULSE REALTY:</p>
                                <p>${{number_format($pulse_profit)}}</p>
                           </div> 
                           @elseif($buyer->user_id == Auth::id() && $property->status == 4)
                           <div class="box">
                                <p>YOUR FUND FROM INITIAL INVESTMENT:</p>
                                <p>${{number_format($buyer->total_investment_value)}}</p>
                                <p>PAYABLE AMOUNT FOR PROPERTY BOUGHT:</p>
                                <p>${{number_format($remaining_amount)}}</p>
                           </div>
                           @endif

                           @if($buyer->user_id != Auth::id() && $property->status == 4)
                            <div class="box">
                                <p>TOTAL PROFIT AFTER DEDUCTING CHARGES:</p>  
                                <P>${{number_format($total_profit_after_deduction)}}</P>
                                <p>AS PER YOUR INVESTMENT YOU RECIEVE:</p>
                                <P>${{number_format($invester_profit)}}</P>
                            </div>
                            @elseif($buyer->user_id == Auth::id() && $property->status == 4) 
                            <div class="box" style="padding-bottom:15px" >
                                <p>PLEASE CHOOESE 1 OF THE 2 OPTIONS</p>
                                    <button class="btn btn-primary">PAY AMOUNT</button>
                                    <button class="btn btn-primary">APPLY FOR LOAN</button>
                            </div>
                            @endif
                            

                        </div>
                    </div>      
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->




        

        <!-- popup -->
       
<div class="modal" id="popup-1">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">Do you want to </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <div  style="display:flex; justify-content: space-evenly;">
                <button id="popup-2-btn" class="btn btn-primary" style=" height:50px !important">Buy Property</button>
                 <p style=" font-size:20px; margin-top:10px">or</p>
                 <form action="{{url('/detail/action',$property->id)}}" method="post">
                     @csrf
                     <input type="text" value="roi" name="action" hidden>
                 <button class="btn btn-primary" type="submit" style=" height:50px !important" >Return Of Investment</button>
 
                 </form> 
                </div>
               
                

            </div>
        </div>
    </div> 
</div>


<div class="modal" id="popup-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Enter your bid amount</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> 
            <div class="modal-body">
           
                <div class="form-group col-md-8" >
                <form action="{{url('/detail/action',$property->id)}}" method="post" id="my-form">
                    @csrf
                <input type="text" value="buy" name="action" hidden>
                <p>Bid amount should be greater than ${{number_format($property->price)}}</p>
                <div style="display:flex;">
                     
                <input type="number" name="bid_amount" class="form-control" required placeholder="Bid amount"  id="number-input"  style="margin-right:30px;" required  >
                <button class="btn btn-primary" type="submit" >Submit</button>
                </div>
                <p id="error-message" style="display:none; color:red;">Please enter a number greater than ${{number_format($property->price)}}</p>

                </form>

                </div>
                
            </div>
        </div>
    </div>
</div>



 

<!-- popup -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#popup-1-btn').click(function() {
            $('#popup-1').modal('show');
        });

        $('#popup-2-btn').click(function() {
            $('#popup-1').modal('hide');
            $('#popup-2').modal('show');
        });
    });
</script>

<!-- hide bid btn  -->
<!-- <script>
    if(<?php echo $property->status ?> == "rio"||"buy"){
document.getElementById("popup-1-btn").disabled = true;
}
</script> -->


<script>
    var action = "<?php echo $property_review->action ?>";

    if(action == "rio"|| action =="buy"){
document.getElementById("popup-1-btn").style.display = "none";
} 
</script>   





<!-- bid price  -->

<script>
  const form = document.getElementById('my-form');
  const numberInput = document.getElementById('number-input');
  const errorMessage = document.getElementById('error-message');
  var bid_amount= "<?php echo $property->price ?>";
 

  form.addEventListener('submit', function(event) {
    if (bid_amount > Number(numberInput.value)-1) {
      errorMessage.style.display = 'block'; 
      event.preventDefault();
    } else {  
      errorMessage.style.display = 'none';
    }
  });
</script>




        

      

        <!-- START: Template JS-->
        <script src="front/dashboard/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="front/dashboard/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="front/dashboard/vendors/moment/moment.js"></script>
        <script src="front/dashboard/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="front/dashboard/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="front/dashboard/vendors/flag-select/js/jquery.flagstrap.min.js"></script> 
        <!-- END: Template JS-->

      


        <!-- START: APP JS-->
        <script src="front/dashboard/js/app.js"></script>
        <!-- END: APP JS-->

       
 
        <!-- START: Page JS-->
        <script src="front/dashboard/js/home.script.js"></script>
        <!-- END: Page JS-->
    </body>
    <!-- END: Body-->
</html>
