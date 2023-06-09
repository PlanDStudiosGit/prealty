@extends('front.dashboardnew.layouts.main')

@section('content')



  <div class="dashboard">
    @include('front.dashboardnew.includes.sidenav')

    <div class="property-details">
      <img class="mesh-08-icon" alt="" src="{{ asset('uploads/'.$property->featured_image ) }}  " />
      <div class="frame-group">
        <div class="large-4-room-apartment-with-a-parent">
          <b class="large-4-room-apartment-container">
            <p class="large-4-room-apartment">
              Large 4-room apartment with a
            </p>
            <p class="large-4-room-apartment">beautiful terrace</p>
          </b><b class="b">${{number_format($property->price)}}</b>
          <div class="ellipse-parent">
            <img class="frame-child" alt="" src="{{asset('front/dashboard/images/ellipse-4.svg')}}" />
            @if($property->status == 0)
            <div class="pool-status">Pool Open</div>
            @elseif($property->status == 1)
            <div class="pool-status">Pool Closed</div>
            @elseif($property->status == 2)
            <div class="pool-status">Property Bought</div>
            @elseif($property->status == 3)
            <div class="pool-status">Place Bids</div>
            @elseif($property->status == 4)
            <div class="pool-status">Journey End</div>
            @endif
          </div>
          <div class="peoples-in-this-container">
            <b>{{$total_people}}</b><span class="peoples-in-this"> peoples in this pool</span>
          </div>
        </div>

        <div class="progress-container"> 
          <div class="progress" id="progress"></div>
          <div class="circles active {{ ($property->status >= 0) ?'active' :'' }}">1</div>
          <div class="pool-open  {{ ($property->status == 0) ?'circle_status' :'' }}">Pool Open</div>
          <div class="circles  {{ ($property->status >= 1) ?'active' :'' }}">2</div>
          <div class="pool-closed {{ ($property->status == 1) ?'circle_status' :'' }}">Pool Closed</div>
          <div class="circles  {{ ($property->status >= 2) ?'active' :'' }}">3</div>
          <div class="property-bought1 {{ ($property->status == 2) ?'circle_status' :'' }}">Property Bought</div>
          <div class="circles  {{ ($property->status >= 3) ?'active' :'' }}">4</div>
          <div class="place-bids {{ ($property->status == 3) ?'circle_status' :'' }}">Place Bids</div>
          <div class="circles   {{ ($property->status >= 4) ?'active' :'' }}">5</div>
          <div class="journey-end  {{ ($property->status == 4) ?'circle_status' :'' }}">Journey End</div>
        </div>
        </div>
      </div>
    </div>  


    <div class="progress-bar-parent">
      <div class="progress-bar" style="background-color:transparent">
      <div class="progress-bar-child">
          <img class="group-child" alt="" src="{{asset('front/dashboard/images/ellipse-41.svg')}}" />
          <div class="div3">1</div>
        </div>

        <div class="progress-bar-item"></div>
        @if($property->status >= 1)
        <div class="progress-bar-child">
          <img class="group-child" alt="" src="{{asset('front/dashboard/images/ellipse-41.svg')}}" />
          <div class="div3">2</div>
        </div>
        @endif
        <div class="progress-bar-item"></div>

         <!--<div class="ellipse-container">
          <img class="group-child" alt="" src="{{asset('front/dashboard/images/ellipse-41.svg')}} " />
          <div class="div3">3</div>
        </div> -->
      </div>
      <div class="div5">{{$property_review->review_date}}</div>
      @if($property->status >= 1)
      <div class="div6">{{$property_review->pool_close_date}}</div>
      @endif

      <div class="frame-child3"></div>
      
      @if($property->status >= 1)
      <div class="frame-child4"></div>
      @endif

      @if($property->status >= 0)
      <div class="you-have-reviewed">
        You have reviewed this property. We will notify you when bids are open
      </div>
      @endif

      
      @if($property->status >= 1)
      <div class="this-pool-is">
        This pool is open for bidding now. Please enter your highest offer!
      </div>
      <div class="button" > 
       
        <button class="btn btn-danger" id="popup-1-btn">Bid</button>
      </div>
      @endif


    </div>
  </div>


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
                 <p style=" font-size:20px; margin-top:10px">odr</p>

   <!-- roi  --><button id="roi-popup-btn" class="btn btn-primary" type="submit" style=" height:50px !important" >Return Of Investment</button>
                 
 
                 </form> 
                </div> 
               
                

            </div>
        </div>
    </div> 
</div>



<div class="modal" id="bid-popup">
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


@php
  $remaining_investment=$property->price - $total_roi_amount;
  $remaining_investment_percent=100-$total_roi_per; 

@endphp
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
                <p id="error-message" style="display:none; color:red;">Please enter a number greater than ${{number_format($property->price)}}</p>

                </form>
         
                </div>
                
            </div>
        </div>
    </div>
</div>



















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
    });
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


@endsection