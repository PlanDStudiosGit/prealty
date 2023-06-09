@extends('front.dashboard_2.layouts.main')

@section('title', 'Dashboard - Pool Detail')

@section('content')
<style>
  
  .progressbar-wrapper {
      background: #fff;
      width: 100%;
      padding-top: 10px;
      padding-bottom: 5px;
      padding-right: 50px;
      margin-left: -24px  ;    
}

.progressbar li {
      list-style-type: none;
      width: 20%;
      float: left;
      font-size: 9px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
       
}
.progressbar li:before {
    width: 39px;
    height: 39px;
    content: "";
    line-height: 39px;
    border: 2px solid #7d7d7d;
    display: block;
    text-align: center;
    margin: 0 auto 3px auto;
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
     top: 20px;
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

 
.pool_open_circle {
    display: inline-block;
    width: 13px;
    height: 13px;
    background-color: #00b33c;
    border-radius: 50%;
    margin:0 7px 0 17px;
    border:none;
  }
  .pool_open_text {
    color: #00b33c;
    display: inline-block;
  }

  .pool_close_circle {
    display: inline-block;
    width: 13px;
    height: 13px;
    background-color: #e60000;
    border-radius: 50%;
    margin:0 7px 0 17px;
    border:none;
  }
  .pool_close_text {
    color: #e60000;
    display: inline-block;
  }

  .pool_bought_circle {
    display: inline-block;
    width: 13px;
    height: 13px;
    background-color: #004de6;
    border-radius: 50%;
    margin:0 7px 0 17px;
    border:none;
  }
  .pool_bought_text {
    color: #004de6;
    display: inline-block;
  }

  .pool_bid_circle {
    display: inline-block;
    width: 13px;
    height: 13px;
    background-color: #e68a00;
    border-radius: 50%;
    margin:0 7px 0 17px;
    border:none;
  }
  .pool_bid_text {
    color: #e68a00;
    display: inline-block;
  }

  .pool_journey_circle {
    display: inline-block;
    width: 13px;
    height: 13px;
    background-color: #e68a00;
    border-radius: 50%;
    margin:0 7px 0 17px;
    border:none;
  }
  .pool_journey_text {
    color: #e68a00;
    display: inline-block;
  }


  .hidden {
      display: none;
    }
    .error-message {
      color: red;
    }
</style>


<section class="container-fluid bg-light ">
<div class="row">

    @include('front.dashboard_2.includes.sidenav')



      



        <div class="col-md-9 bg-white pl-4">
          

          
              <div class="row">
                <div class="col-md-4 mt-5 ">
                    <img class="pool_property_image" src="{{ asset('uploads/'.$property->featured_image ) }}  ">
                </div>
                    
                <div class="col-md-8 mt-5">
                  <h5 class="text-sm-left">{{$property->bedrooms}} Bedroom {{$property->type}} in {{$property->address}}</h5>
                  <!-- <h5 class="text-sm-left">Large 4-room apartment with a beautiful terrace.</h5> -->

                  <p class="price">${{number_format($property->price)}}</p>
                  @if($property->status == 0)
                    <p>
                      <span class="pool_open_circle"></span>
                      <span class="pool_open_text">Pool Open</span>
                    </p>
                  @elseif($property->status == 1)
                    <p>
                      <span class="pool_close_circle"></span>
                      <span class="pool_close_text">Pool Closed</span>
                    </p>
                  @elseif($property->status == 2)
                    <p>
                      <span class="pool_bought_circle"></span>
                      <span class="pool_bought_text">Property Bought</span>
                    </p>
                  @elseif($property->status == 3)
                    <p>
                      <span class="pool_bid_circle"></span>
                      <span class="pool_bid_text">Place Bids </span>
                    </p>
                  @elseif($property->status == 4)
                    <p>
                      <span class="pool_journey_circle"></span>
                      <span class="pool_journey_text">Journey End</span>
                    </p>
                  @endif


                  <p class="people">{{$total_people}} people in the pool</p>

                  <div class="progressbar-wrapper">
                    <ul class="progressbar">
                        <li class="{{ ($property->status >= 0) ?'status_active' :'' }}">Pool Open</li>
                        <li class="{{ ($property->status >= 1) ?'status_active' :'' }}">Pool Closed</li>
                        <li class="{{ ($property->status >= 2) ?'status_active' :'' }}">Property Bought</li>
                        <li class="{{ ($property->status >= 3) ?'status_active' :'' }}">Place Bids</li>
                        <li class="{{ ($property->status >= 4) ?'status_active' :'' }}">Journey End</li>
            
                    </ul>
              </div>


                </div>
              </div>
          


          
   
          <button class="btn btn-primary"><a href="{{url('/contract-form')}}" style="color:white; text-decoration:none">Contract</a></button>
          
              <div class="row mt-4">
                  <div class="col-md-12">

                    <div class="step step-active mt-4">

                      <div class="circle">1</div>
                      <div class="title">{{$property_review->review_date}}</div>
                      <div class="dashed"></div>
                      <div class="cover">
                        <div class="caption ">You have reviewed this property.
                          We will notify you when bids are open</div>
                      </div>
                    </div>

                    @if($property->status >= 1)
                    <div class="step step-active mt-2">

                    @if($property->status >= 1)
                      <div class="circle">2</div>
                      @else
                      <div class="circle"><i class="fa fa-check"></i></div>
                      @endif


                      <div class="title">{{$property_review->pool_close_date}}</div>
                      <div class="dashed"></div>
                      <div class="cover">
                        <div class="caption">Pool is close
                        </div>
                      </div>
                    </div>
                    @endif

                    @if($property->status >= 2)
                    <div class="step step-active mt-2">

                    @if($property->status >= 2)
                      <div class="circle">3</div>
                      @else
                      <div class="circle"><i class="fa fa-check"></i></div>
                      @endif
                      <div class="title">{{$property_review->property_bought_date}}</div>
                      <div class="dashed"></div>
                      <div class="cover">
                        <div class="caption">PROPERTY BOUGHT
                        </div>
                      </div>  
                    </div>
                    @endif

                    @if($property->status >= 3)
                    <div class="step step-active mt-2">
                      @if($property->status >= 3)
                      <div class="circle">4</div>
                      @else
                      <div class="circle"><i class="fa fa-check"></i></div>
                      @endif
                      <div class="title">{{$property_review->place_bid_date}}</div>
                      <div class="dashed"></div>
                      <div class="cover">
                        <div class="caption">This pool is open for bidding now. Please enter your highest offer!.
                        @if($property_review->action == '')
                        <a  class="btn btn-danger" id="popup-1-btn" style="color:white" >Bid</a>
                        @else
                        <a  class="btn btn-danger"   onclick="showAlert()" style="color:white " >Bid</a>
                        @endif
                      </div>
                      </div>  
                    </div> 
                    @endif 

                    @if($property->status >= 4)  
                    <div class="step step-active mt-2">
                      @if($property->status == 4)
                      <div class="circle"><i class="fa fa-check"></i></div>
                      @endif
                      <div class="title">{{$property_review->journey_end_date}}</div>
                      <div class="dashed"></div>
                      <div class="cover">
                        <div class="caption">Jouney End
                        </div>
                      </div>  
                    </div>
                    @endif

                 

                  </div>
              </div>

        </div>



        <!-- Button to trigger modal popup -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open Modal
</button> --> 


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
                <button id="bid-popup-btn" class="btn btn-primary" style=" height:50px !important">Buy Property</button>
                 <p style=" font-size:20px; margin-top:10px">or</p>

   <!-- roi  --><button id="roi-popup-btn" class="btn btn-primary" type="submit" style=" height:50px !important" >Return Of Investment</button>
                 
 
                 </form> 
                </div>
               
                

            </div>
        </div>
    </div> 
</div>




<!-- bid popup -->

@php
  $remaining_investment=$property->price - $total_roi_amount;
  $remaining_investment_percent=100-$total_roi_per; 

@endphp
<!-- Modal popup -->
<div class="modal fade" id="bid-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Place Bid</h4>
      </div>
      <div class="modal-body">
      <form  action="{{url('/detail/action',$property->id)}}"  method="post" id="investmentForm" onsubmit="validateForm(event)">
          @csrf
      

    <label for="numberInput">Bid amount should be greater than ${{number_format($property->price)}}</label>
    <input type="number" class="form-control" id="numberInput" name="bid_amount" placeholder="Place your bid"  onkeyup="checkNumber(this.value)" required>
    <br>

    <div id="radioContainer" class="hidden">
    <hr>
    <h4>In case you lose bid do you want ROI</h4> 
      <label for="yesRadio">Yes</label>
      <input type="radio" id="yesRadio" name="action" onclick="toggleROIInput()" value="buy&roi">
      <label for="noRadio">No</label>
      <input type="radio" id="noRadio" name="action" onclick="toggleROIInput()" value="buy">
    </div>

    <div id="roiInputContainer" class="hidden">
      <hr>
                <label for="inputNumber2"><h5>What % do you want to invest in the property?</h5></label>
                <p>Remaining Investment: <b>${{$remaining_investment}}</p>
                <div id="wrong3" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%">Not Enough Investment</div>
               
                     
                <input type="range" class="form-control" id="bid_investment_range" name="roi_per" min="1" max="100" step="5" value="1" >
                
                <div style="display:flex; float:right">
                    <div id="bid_textInput" ></div>
                    <div id="bid_textInputValue" ></div>
                    <input type="hidden" id="bid_total_cost" value="{{$property->price}}" />
                    <input type="hidden" id="percentage" value="0" /> 
                    <input type="hidden" id="bid_total_investment_value" name="roi_amount" value="0" />
                </div>
                
              
    </div>

    <div id="errorMessage" class="error-message hidden">
      Number should be greater than ${{number_format($property->price)}}.
    </div>
    <br>

    <input class="btn btn-primary" type="submit" value="Submit">
  </form>
    </div>
  </div> 
</div>


    </div>
  </section>








<!-- roi popup -->
<div class="modal" id="roi-popup">  
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">What % do you want to invest in the property?</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> 
            <div class="modal-body">
           
                <div class="form-group col-md-8" >
                  <form action="{{url('/detail/action',$property->id)}}" method="post" id="my-form">
                      @csrf
                        <input type="text" value="roi" name="action" hidden>
                        <p>Remaining Investment: <b>${{$remaining_investment}}</p>
                        <div id="wrong3" class='alert alert-danger' style="display:none;padding:10px;margin-top:3%">Not Enough Investment</div>
                        <div style="display:flex;">
                            
                        <input type="range" id="investment_range" name="roi_per" min="0" max="100" step="5" value="1" >

                        <div id="textInput" style="float:left;"></div>
                            <div id="textInputValue" style="float:right;"></div>
                            <input type="hidden" id="total_cost" value="{{$property->price}}" />
                            <input type="hidden" id="percentage" value="0" />
                            <input type="hidden" id="total_investment_value" name="roi_amount" value="0" />

                            <br>

                        
                        </div>
                        <button class="btn btn-primary" id="roi_submit" type="submit" >Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- bid already placed  -->

<!-- <div class="modal" id="bid_already_placed">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title">You already place the bid</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

        </div>
    </div> 
</div> -->


</section>





  <script>
    function showAlert() {
      Swal.fire({
        // title: 'SweetAlert Dialog',
        text: 'You have already palced the bid',
        icon: 'success',
        showCloseButton: true,
        confirmButtonText: 'OK'
      });
    }
  </script>





<script>
  function checkNumber(value) {
    const radioContainer = document.getElementById("radioContainer");
    const errorMessage = document.getElementById("errorMessage");
    const roiInputContainer = document.getElementById("roiInputContainer");
    var price = <?php echo $property->price ?>;

    if (value > price) {
      radioContainer.classList.remove("hidden");
      errorMessage.classList.add("hidden");
    } else {
      radioContainer.classList.add("hidden");
      errorMessage.classList.remove("hidden");
    }
  }

  function toggleROIInput() {
    const roiInputContainer = document.getElementById("roiInputContainer");
    const yesRadio = document.getElementById("yesRadio");

    roiInputContainer.classList.toggle("hidden", !yesRadio.checked);
    hideROIMessage();
  }

  function hideROIMessage() {
    const roiErrorMessage = document.getElementById("roiErrorMessage");
    roiErrorMessage.classList.add("hidden");
  }

  function validateForm(event) {
    const numberInput = document.getElementById("numberInput");
    const yesRadio = document.getElementById("yesRadio");
    const noRadio = document.getElementById("noRadio"); // Add this line
    const roiInput = document.getElementById("bid_investment_range"); // Update the ID here
    const roiErrorMessage = document.getElementById("wrong3"); // Update the ID here

    if (!numberInput.checkValidity()) {
      event.preventDefault();
      const errorMessage = document.getElementById("errorMessage");
      errorMessage.classList.remove("hidden");
    } else {
      const errorMessage = document.getElementById("errorMessage");
      errorMessage.classList.add("hidden");
    }

    if (yesRadio.checked && !roiInput.checkValidity()) {
      event.preventDefault();
      roiErrorMessage.classList.remove("hidden");
    } else {
      roiErrorMessage.classList.add("hidden");
    }

    if (!yesRadio.checked && !noRadio.checked) {
      event.preventDefault();
      const radioContainer = document.getElementById("radioContainer");
      radioContainer.classList.add("error-message");
    } else {
      const radioContainer = document.getElementById("radioContainer");
      radioContainer.classList.remove("error-message");
    }
  }
</script>









<!-- popup script  -->
<script>
    $(document).ready(function() {
        $('#popup-1-btn').click(function() {
            $('#popup-1').modal('show');
        });

        $('#bid-popup-btn').click(function() {
            $('#popup-1').modal('hide');
            $('#bid-popup').modal('show');
        });
        $('#roi-popup-btn').click(function() {
            $('#popup-1').modal('hide');
            $('#roi-popup').modal('show');
        });
        $('#bid_already_placed_btn').click(function() {

            $('#bid_already_placed').modal('show');
        });
    });
</script>




<!-- bid price  -->





<!-- Roi Calculation -->

<script>
$(document).on("input change", "#investment_range", function() {
	var $this = $(this);
	
	var scrolled_value = $this.val();
	var limiting_value = 50;
	var total_cost = $('#total_cost').val();
	var remaining_cost ="<?php echo $remaining_investment ?>";
	var remaining_precent ="<?php echo $remaining_investment_percent ?>";
	var percent = scrolled_value;
	if(remaining_precent == 100){
		if (scrolled_value >= limiting_value){
			$this.val(limiting_value);
			percent = limiting_value;
		}
	}else{
		if(remaining_precent >= 50){
			if (scrolled_value >= limiting_value){
				$this.val(limiting_value);
				percent = limiting_value;
			}
		}else{
			// console.log('asd');
			if (scrolled_value >= remaining_precent){
				$this.val(remaining_precent);
				percent = $this.val();
			}
		}
	}

	$('#textInput').html(percent+'%');


	// var percentage = $('#percentage').val();
	var end_value = ((percent/100)*total_cost);
	$('#total_investment_value').val(end_value);
	$('#textInputValue').html('$'+end_value.toLocaleString('en'));
	// document.getElementById('textInput').value=val; 
});



</script>


<script>
$(document).on("input change", "#bid_investment_range", function() {
	var $this = $(this);
	
	var scrolled_value = $this.val();
	var limiting_value = 50;
	var total_cost = $('#bid_total_cost').val();
	var remaining_cost ="<?php echo $remaining_investment ?>";
	var remaining_precent ="<?php echo $remaining_investment_percent ?>";
	var percent = scrolled_value;
	if(remaining_precent == 100){
		if (scrolled_value >= limiting_value){
			$this.val(limiting_value);
			percent = limiting_value;
		}
	}else{
		if(remaining_precent >= 50){
			if (scrolled_value >= limiting_value){
				$this.val(limiting_value);
				percent = limiting_value;
			}
		}else{
			// console.log('asd');
			if (scrolled_value >= remaining_precent){
				$this.val(remaining_precent);
				percent = $this.val();
			}
		}
	}

	$('#bid_textInput').html(percent+'%');


	// var percentage = $('#percentage').val();
	var end_value = ((percent/100)*total_cost);
	$('#bid_total_investment_value').val(end_value);
	$('#bid_textInputValue').html('$'+end_value.toLocaleString('en'));
	// document.getElementById('textInput').value=val; 
});
</script>

@endsection