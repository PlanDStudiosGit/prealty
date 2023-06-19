<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
<link href="{{asset('css/bootstrap-tagsinput.css')}}">
	<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
<style>
	.drop-zone {
	background-color: #f2f2f2;
	border: 2px dashed #ccc;
	border-radius: 5px;
	height: 20em;
	width: 27em;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	cursor: pointer;
	}

	.drop-zone__prompt {
	font-size: 16px;
	color: #aaa;
	}

	.drop-zone__input {
	display: none;
	}

	.preview {
	margin-top: 10px;
	display: flex;
	flex-wrap: wrap;
	}

	.preview__item {
	display: flex;
	flex-direction: column;
	align-items: center;
	margin-right: 10px;
	margin-bottom: 10px;
	position: relative;
	}

	.preview__image {
	height: 92px;
	width: 92px;
	object-fit: cover; 
	margin-right:11px;
	}

	.preview__remove {
	position: absolute;
	top: 0px;
	right: 11px;
	border: none;
	background-color: red;
	font-size: 20px bold;
	font-weight: 700;
	cursor: pointer;
	color:white;
	} 
	
	.mul_image{
	width:100px;
	height:100px;
	margin-right:-19px
	}

	.mul_image img{
	width:92px;
	height:92px
	
	}


</style>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


    <div class="dealership-form">
        <form class="myform" method="POST" action="{{ !empty($property)? route('admin.property.update', ['id' => $property->id]) : route('admin.property.store') }}" enctype="multipart/form-data">
            @csrf   
            <div class="form-row">
          

                    <div class="form-group col-md-6">
				         <label>Property Type</label>
				        <select class="form-control" required="required" name="type">
				         	<option value="" >Choose option</option>
				            <option value="Single-Family" {{@$property->type == 'Single-Family' ? 'selected':'' }}>Single-Family</option>
				            <option value="Condo" {{ @$property->type == 'Condo' ? 'selected':'' }}>Condo</option>

				            <option value="TownHouse" {{ @$property->type == 'TownHouse' ? 'selected':'' }}>TownHouse</option>
				        </select>
				   
				    </div>


                <div class="form-group col-md-6">
                    <label>Property Address</label>
                    <input maxlength="255" type="text" name="address" class="form-control" required placeholder="Property Address" value="{{ @$property->address }}" required>
                </div>

                     <div class="form-group col-md-6">
						<label>Price</label>
						<input maxlength="255" type="number" name="price" class="form-control" required placeholder="Property Price" min="0" value="{{@$property->price}}" required>
                	</div>

				<div class="form-group col-md-6"> 
					<label>Lot size</label>
					<input maxlength="255" type="number" name="lot_size" class="form-control" required placeholder="Lot size" min="0" value="{{ @$property->lot_size}}" required>
                </div>

				<div class="form-group col-md-12">
					<h3 style="color: #63729A; border-top:1px solid #63729A">Bedrooms </h3>
				</div>
                  
				
      
				<div class="form-group col-md-6">
				    <label>Bedrooms </label>	
					<select id="selectBedroom" class="form-control" required="required" name="bedroom" onchange="showBedroom()">
						<option value="0" >Select an option</option>
						<option value="1" {{ @$property->bedroom == '1' ? 'selected':'' }}>1</option>
						<option value="2" {{ @$property->bedroom == '2' ? 'selected':'' }}>2</option>
						<option value="3" {{ @$property->bedroom == '3' ? 'selected':'' }}>3</option>
						<option value="4" {{ @$property->bedroom == '4' ? 'selected':'' }}>4</option>
						<option value="5" {{ @$property->bedroom == '5' ? 'selected':'' }}>5</option>
						<option value="6" {{ @$property->bedroom == '6' ? 'selected':'' }}>6</option>
						<option value="7" {{ @$property->bedroom == '7' ? 'selected':'' }}>7</option>
						<option value="8" {{ @$property->bedroom == '8' ? 'selected':'' }}>8</option>
						<option value="9" {{ @$property->bedroom == '9' ? 'selected':'' }}>9</option>
						<option value="10"{{ @$property->bedroom == '10' ? 'selected':'' }}>10</option>
					</select>
				</div>  
		
				

					<!-- bedroom 1  -->
					<div id="bedroom1" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Master Bedroom</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="master_bedroom_area" class="form-control" placeholder="Area" value="{{ @$property->master_bedroom_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="master_bedroom_length" class="form-control" placeholder="Length" value="{{ @$property->master_bedroom_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="master_bedroom_width" class="form-control" placeholder="Width" value="{{ @$property->master_bedroom_width }}">
							</div>
						
								<div class="form-group col-md-6  ">
									<label>Level</label>
									<select class="form-control select2"  name="master_bedroom_level">
										<option value="">Choose option</option>
										<option value="first" {{ @$property->master_bedroom_level == 'first' ? 'selected':'' }}>first</option>
										<option value="second" {{ @$property->master_bedroom_level == 'second' ? 'selected':'' }}>second</option>
										<option value="basement" {{ @$property->master_bedroom_level == 'basement' ? 'selected':'' }}>basement</option>

									</select>
								</div>

								<div class="form-group col-md-6 ">
									<label>Features</label>
									<input  type="text" name="master_bedroom_features" class="form-control" placeholder="Features" value="{{ @$property->master_bedroom_features }}">
								</div>
								
							</div>
						</div>
				







					<div id="bedroom2" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 2</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_2_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_2_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_2_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_2_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_2_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_2_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_2_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_2_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_2_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_2_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_2_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_2_features }}">
							</div>
						
						</div>
					</div>




					<div id="bedroom3" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 3</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_3_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_3_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_3_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_3_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_3_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_3_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_3_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_3_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_3_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_3_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>

							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_3_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_3_features }}">
							</div>
						</div>
					</div>



					<div id="bedroom4" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 4</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_4_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_4_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_4_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_4_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_4_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_4_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_4_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_4_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_4_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_4_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_4_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_4_features }}">
							</div>
						</div>
					</div>





					<div id="bedroom5" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 5</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_5_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_5_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_5_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_5_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_5_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_5_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_5_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_5_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_5_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_5_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_5_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_5_features }}">
							</div>
						</div>
					</div>




					<div id="bedroom6" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 6</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_6_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_6_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_6_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_6_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_6_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_6_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_6_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_6_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_6_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_6_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_6_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_6_features }}">
							</div>
						</div>
					</div>



					<div id="bedroom7" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 7</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_7_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_7_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_7_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_7_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_7_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_7_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_7_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_7_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_7_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_7_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_7_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_7_features }}">
							</div>
						</div>
					</div>



					<div id="bedroom8" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 8</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_8_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_8_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_8_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_8_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_8_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_8_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_8_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_8_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_8_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_8_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_8_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_8_features }}">
							</div>
						</div>
					</div>




					<div id="bedroom9" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 9</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_9_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_9_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_9_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_9_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_9_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_9_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_9_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_9_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_9_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_9_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bedroom_9_features" class="form-control" placeholder="Features" value="{{ @$property->bedroom_9_features }}">
							</div>
						</div>
					</div>




					<div id="bedroom10" class="myBedroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bedroom 10</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bedroom_10_area" class="form-control" placeholder="Area" value="{{ @$property->bedroom_10_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bedroom_10_length" class="form-control" placeholder="Length" value="{{ @$property->bedroom_10_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bedroom_10_width" class="form-control" placeholder="Width" value="{{ @$property->bedroom_10_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bedroom_10_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bedroom_10_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bedroom_10_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bedroom_10_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>

							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input  type="text" name="bedroom_10_features" class="form-control" placeholder="Features" value="{{ @$property->master_bedroom_width }}">
							</div>
						</div>
					</div>
				<!-- bedroom   -->



				<!-- living room -->
					<div class="form-group col-md-12">
							<h3 style="color: #63729A; border-top:1px solid">Living Room </h3>
					</div>
						<div class="form-group col-md-6 ">
							<label>Area</label>
							<input  type="number" name="living_room_area" class="form-control" placeholder="Area" value="{{ @$property->living_room_area }}">
						</div>
						<div class="form-group col-md-6 ">
							<label>Length</label>
							<input  type="number" name="living_room_length" class="form-control" placeholder="Length" value="{{ @$property->living_room_length }}">
						</div> 
						<div class="form-group col-md-6 ">
							<label>Width</label>
							<input  type="number" name="living_room_width" class="form-control" placeholder="Width" value="{{ @$property->living_room_width }}">
						</div>
					
						<div class="form-group col-md-6  ">
							<label>Level</label>
							<select class="form-control"  name="living_room_level">
								<option value="">Choose option</option>
								<option value="first" {{ @$property->living_room_level == 'first' ? 'selected':'' }}>first</option>
								<option value="second" {{ @$property->living_room_level == 'second' ? 'selected':'' }}>second</option>
								<option value="basement" {{ @$property->living_room_level == 'basement' ? 'selected':'' }}>basement</option>
							</select>
						</div>

						<div class="form-group col-md-6 ">
								<label>Features</label>
								<input  type="text" name="living_room_features" class="form-control" placeholder="Features" value="{{ @$property->living_room_features }}">
							</div>
				<!-- living room -->

				<!-- Dining room -->
				<div class="form-group col-md-12">
							<h3 style="color: #63729A; border-top:1px solid">Dining Room </h3>
					</div>
						<div class="form-group col-md-6 ">
							<label>Area</label>
							<input  type="number" name="dining_room_area" class="form-control" placeholder="Area" value="{{ @$property->dining_room_area }}">
						</div>
						<div class="form-group col-md-6 ">
							<label>Length</label>
							<input  type="number" name="dining_room_length" class="form-control" placeholder="Length" value="{{ @$property->dining_room_length }}">
						</div> 
						<div class="form-group col-md-6 ">
							<label>Width</label>
							<input  type="number" name="dining_room_width" class="form-control" placeholder="Width" value="{{ @$property->dining_room_width }}">
						</div>
					
						<div class="form-group col-md-6  ">
							<label>Level</label>
							<select class="form-control"  name="dining_room_level">
								<option value="">Choose option</option>
								<option value="first" {{ @$property->dining_room_level == 'first' ? 'selected':'' }}>first</option>
								<option value="second" {{ @$property->dining_room_level == 'second' ? 'selected':'' }}>second</option>
								<option value="basement" {{ @$property->dining_room_level == 'basement' ? 'selected':'' }}>basement</option>
							</select>
						</div>

						<div class="form-group col-md-6 ">
								<label>Features</label>
								<input  type="text" name="dining_room_features" class="form-control" placeholder="Features" value="{{ @$property->dining_room_features }}">
							</div>
				<!-- Dining room -->

				<!-- Family room -->
				<div class="form-group col-md-12">
							<h3 style="color: #63729A; border-top:1px solid">Family Room </h3>
					</div>
						<div class="form-group col-md-6 ">
							<label>Area</label>
							<input  type="number" name="family_room_area" class="form-control" placeholder="Area" value="{{ @$property->family_room_area }}">
						</div>
						<div class="form-group col-md-6 ">
							<label>Length</label>
							<input  type="number" name="family_room_length" class="form-control" placeholder="Length" value="{{ @$property->family_room_length }}">
						</div> 
						<div class="form-group col-md-6 ">
							<label>Width</label>
							<input  type="number" name="family_room_width" class="form-control" placeholder="Width" value="{{ @$property->family_room_width }}">
						</div>
					
						<div class="form-group col-md-6  ">
							<label>Level</label>
							<select class="form-control"  name="family_room_level">
								<option value="">Choose option</option>
								<option value="first" {{ @$property->family_room_level == 'first' ? 'selected':'' }}>first</option>
								<option value="second" {{ @$property->family_room_level == 'second' ? 'selected':'' }}>second</option>
								<option value="basement" {{ @$property->family_room_level == 'basement' ? 'selected':'' }}>basement</option>
							</select>
						</div>
						<div class="form-group col-md-6 ">
								<label>Features</label>
								<input  type="text" name="family_room_features" class="form-control" placeholder="Features" value="{{ @$property->family_room_features }}">
						</div>
				<!-- Family room -->


				<!-- Basement -->
					<div class="form-group col-md-12">
							<h3 style="color: #63729A; border-top:1px solid">Basement </h3>
					</div>
					<div class="form-group col-md-6 ">
						<label>Area</label>
						<input  type="number" name="basement_area" class="form-control" placeholder="Area" value="{{ @$property->basement_area }}">
					</div>
					<div class="form-group col-md-6 ">
						<label>Length</label>
						<input  type="number" name="basement_length" class="form-control" placeholder="Length" value="{{ @$property->basement_length }}">
					</div> 
					<div class="form-group col-md-6 ">
						<label>Width</label>
						<input  type="number" name="basement_width" class="form-control" placeholder="Width" value="{{ @$property->basement_width }}">
					</div>
					<div class="form-group col-md-6 ">
						<label>Features</label>
						<input  type="text" name="basement_features" class="form-control" placeholder="Features" value="{{ @$property->basement_features }}">
					</div>
				<!-- Basement-->



				<!-- bathroom  -->
				<div class="form-group col-md-12">
					<h3 style="color: #63729A; border-top:1px solid #63729A">Bathrooms </h3>
				</div>
                  
				
      
				<div class="form-group col-md-6">
				    <label>Bathrooms </label>	
					<select id="selectBathroom" class="form-control" required="required" name="bathrooms" onchange="showBathrooms()">
						<option value="0" >Select an option</option>
						<option value="1" {{ @$property->bathrooms == '1' ? 'selected':'' }}>1</option>
						<option value="2" {{ @$property->bathrooms == '2' ? 'selected':'' }}>2</option>
						<option value="3" {{ @$property->bathrooms == '3' ? 'selected':'' }}>3</option>
						<option value="4" {{ @$property->bathrooms == '4' ? 'selected':'' }}>4</option>
						<option value="5" {{ @$property->bathrooms == '5' ? 'selected':'' }}>5</option>
						<option value="6" {{ @$property->bathrooms == '6' ? 'selected':'' }}>6</option>
						<option value="7" {{ @$property->bathrooms == '7' ? 'selected':'' }}>7</option>
						<option value="8" {{ @$property->bathrooms == '8' ? 'selected':'' }}>8</option>
						<option value="9" {{ @$property->bathrooms == '9' ? 'selected':'' }}>9</option>
						<option value="10"{{ @$property->bathrooms == '10' ? 'selected':'' }}>10</option>
					</select>
				</div>  

				<div class="form-group col-md-6">
				    <label>Half Bathrooms </label>	
					<select class="form-control" required="required" name="half_bathrooms">
						<option value="0" >Select an option</option>
						<option value="1" {{ @$property->half_bathrooms == '1' ? 'selected':'' }}>1</option>
						<option value="2" {{ @$property->half_bathrooms == '2' ? 'selected':'' }}>2</option>
						<option value="3" {{ @$property->half_bathrooms == '3' ? 'selected':'' }}>3</option>
						<option value="4" {{ @$property->half_bathrooms == '4' ? 'selected':'' }}>4</option>
						<option value="5" {{ @$property->half_bathrooms == '5' ? 'selected':'' }}>5</option>
						<option value="6" {{ @$property->half_bathrooms == '6' ? 'selected':'' }}>6</option>
						<option value="7" {{ @$property->half_bathrooms == '7' ? 'selected':'' }}>7</option>
						<option value="8" {{ @$property->half_bathrooms == '8' ? 'selected':'' }}>8</option>
						<option value="9" {{ @$property->half_bathrooms == '9' ? 'selected':'' }}>9</option>
						<option value="10"{{ @$property->half_bathrooms == '10' ? 'selected':'' }}>10</option>
					</select>
				</div>  

				<div class="form-group col-md-6">
						<label>Master Bathrooms</label>
					   <select class="form-control" required="required" name="master_bathroom">
							<option value="" >Choose option</option>
						   <option value="Yes" {{ @$property->master_bathroom == 'Yes' ? 'selected':'' }}>Yes</option>
						   <option value="No" {{ @$property->master_bathroom == 'No' ? 'selected':'' }}>No</option>
					   </select>
				   </div>
		
				

					<!-- bathroom 1  -->
					<div id="bathroom1" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 1</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_1_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_1_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_1_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_1_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_1_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_1_width }}">
							</div>
						
								<div class="form-group col-md-6  ">
									<label>Level</label>
									<select class="form-control select2"  name="bathroom_1_level">
										<option value="">Choose option</option>
										<option value="first" {{ @$property->bathroom_1_level == 'first' ? 'selected':'' }}>first</option>
										<option value="second" {{ @$property->bathroom_1_level == 'second' ? 'selected':'' }}>second</option>
										<option value="basement" {{ @$property->bathroom_1_level == 'basement' ? 'selected':'' }}>basement</option>

									</select>
								</div>

								<div class="form-group col-md-6 ">
									<label>Features</label>
									<input  type="text" name="bathroom_1_features" class="form-control" placeholder="Features" value="{{ @$property->master_bathroom_features }}">
								</div>
								
							</div>
						</div>
				







					<div id="bathroom2" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 2</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_2_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_2_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_2_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_2_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_2_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_2_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_2_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_2_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_2_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_2_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_2_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_2_features }}">
							</div>
						
						</div>
					</div>




					<div id="bathroom3" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 3</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_3_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_3_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_3_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_3_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_3_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_3_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_3_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_3_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_3_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_3_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>

							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_3_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_3_features }}">
							</div>
						</div>
					</div>



					<div id="bathroom4" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 4</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_4_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_4_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_4_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_4_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_4_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_4_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_4_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_4_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_4_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_4_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_4_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_4_features }}">
							</div>
						</div>
					</div>





					<div id="bathroom5" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 5</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_5_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_5_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_5_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_5_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_5_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_5_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_5_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_5_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_5_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_5_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_5_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_5_features }}">
							</div>
						</div>
					</div>




					<div id="bathroom6" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 6</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_6_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_6_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_6_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_6_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_6_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_6_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_6_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_6_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_6_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_6_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_6_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_6_features }}">
							</div>
						</div>
					</div>



					<div id="bathroom7" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 7</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_7_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_7_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_7_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_7_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_7_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_7_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_7_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_7_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_7_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_7_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_7_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_7_features }}">
							</div>
						</div>
					</div>



					<div id="bathroom8" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 8</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_8_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_8_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_8_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_8_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_8_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_8_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_8_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_8_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_8_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_8_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_8_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_8_features }}">
							</div>
						</div>
					</div>




					<div id="bathroom9" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 9</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_9_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_9_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_9_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_9_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_9_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_9_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_9_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_9_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_9_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_9_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>


							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input type="text" name="bathroom_9_features" class="form-control" placeholder="Features" value="{{ @$property->bathroom_9_features }}">
							</div>
						</div>
					</div>




					<div id="bathroom10" class="myBathroom col-md-12">
						<div class="row">
							<div class="form-group col-md-12 " >
								<h5 style="color: #63729A;">Bathroom 10</h5>
							</div>

							<div class="form-group col-md-6 ">
								<label>Area</label>
								<input  type="number" name="bathroom_10_area" class="form-control" placeholder="Area" value="{{ @$property->bathroom_10_area }}">
							</div>
							<div class="form-group col-md-6 ">
								<label>Length</label>
								<input  type="number" name="bathroom_10_length" class="form-control" placeholder="Length" value="{{ @$property->bathroom_10_length }}">
							</div> 
							<div class="form-group col-md-6 ">
								<label>Width</label>
								<input  type="number" name="bathroom_10_width" class="form-control" placeholder="Width" value="{{ @$property->bathroom_10_width }}">
							</div>
						
							<div class="form-group col-md-6  ">
								<label>Level</label>
								<select class="form-control"  name="bathroom_10_level">
									<option value="">Choose option</option>
									<option value="first" {{ @$property->bathroom_10_level == 'first' ? 'selected':'' }}>first</option>
									<option value="second" {{ @$property->bathroom_10_level == 'second' ? 'selected':'' }}>second</option>
									<option value="basement" {{ @$property->bathroom_10_level == 'basement' ? 'selected':'' }}>basement</option>

								</select>
							</div>

							<div class="form-group col-md-6 ">
								<label>Features</label>
								<input  type="text" name="bathroom_10_features" class="form-control" placeholder="Features" value="{{ @$property->master_bathroom_width }}">
							</div>
						</div>
					</div>
				<!-- bathrooms   -->


				<!-- bathroom  -->


				<!-- Laundry -->
				<div class="form-group col-md-12">
					<h3 style="color: #63729A; border-top:1px solid">Laundry </h3>
				</div>
				<div class="form-group col-md-6 ">
					<label>Laundry</label>
					<input  type="text" name="laundry" class="form-control" placeholder="laundry" value="{{ @$property->laundry}}">
				</div>
				<!-- Laundry-->

				
				<!-- Appliances  -->
				<div class="form-group col-md-12">
					<h3 style="color: #63729A; border-top:1px solid">Appliances  </h3>
				</div>
				<div class="form-group col-md-6 ">
					<label>Appliances </label>
					<!-- <input  type="text" name="appliances " class="form-control" placeholder="appliances" value="{{ @$property->appliances }}"> -->
					<input id="tagsinput" data-role="tagsinput" name="appliances" class="form-control" value="3,4,2,5" />
					<div class="items">
						<ul>
						<li>123</li>
						<li>234</li>
						<li>345</li>
						<li>456</li>
						<li>567</li>
						<li>678</li>
						</ul>
					</div>
				</div>
				<!-- Appliances-->

				<script>
					$(document).on('click', '.items ul li', function() {
						var value = $(this).html();
						$('#tagsinput').tagsinput('add', value);
						$(this).remove();
					});
					
					$('#tagsinput').on('itemRemoved', function(event) {
						var value = event.item;
						$('.items ul').append('<li>' + value + '</li>');
					});
				</script>

                 


					<div class="form-group col-md-12">
						<h3  style="color: #63729A; border-top: 1px solid #63729A">Parking </h3>
					</div>
 
					<div class="form-group col-md-6">
						<label>Has a Garage</label>
					   <select class="form-control" required="required" name="has_garage">
							<option value="" >Choose option</option>
						   <option value="Yes" {{ @$property->has_garage == 'Yes' ? 'selected':'' }}>Yes</option>
						   <option value="No" {{ @$property->has_garage == 'No' ? 'selected':'' }}>No</option>
					   </select>
				   </div> 
							
					
					<div class="form-group col-md-6">
						<label>Has Open Parking</label>
					   <select class="form-control" required="required" name="open_parking">
							<option value="" >Choose option</option>
						   <option value="Yes" {{ @$property->open_parking == 'Yes' ? 'selected':'' }}>Yes</option>
						   <option value="No" {{ @$property->open_parking == 'No' ? 'selected':'' }}>No</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Number Garage Spaces</label>
					   <select class="form-control" required="required" name="total_garage">
							<option value="" >Choose option</option>
						   <option value="1" {{ @$property->total_garage == '1' ? 'selected':'' }}>1</option>
						   <option value="2" {{ @$property->total_garage == '2' ? 'selected':'' }}>2</option>
						   <option value="3" {{ @$property->total_garage == '3' ? 'selected':'' }}>3</option>
						   <option value="4" {{ @$property->total_garage == '4' ? 'selected':'' }}>4</option>
						   <option value="5" {{ @$property->total_garage == '5' ? 'selected':'' }}>5</option>
						   <option value="6" {{ @$property->total_garage == '6' ? 'selected':'' }}>6</option>
						   <option value="7" {{ @$property->total_garage == '7' ? 'selected':'' }}>7</option>
						   <option value="8" {{ @$property->total_garage == '8' ? 'selected':'' }}>8</option>
						   <option value="9" {{ @$property->total_garage == '9' ? 'selected':'' }}>9</option>
						   <option value="10"{{ @$property->total_garage == '10' ? 'selected':'' }}>10</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Number of Covered Spaces</label>
					   <select class="form-control" required="required" name="covered_garage">
							<option value="" >Choose option</option>
						   <option value="1" {{ @$property->covered_garage == '1' ? 'selected':'' }}>1</option>
						   <option value="2" {{ @$property->covered_garage == '2' ? 'selected':'' }}>2</option>
						   <option value="3" {{ @$property->covered_garage == '3' ? 'selected':'' }}>3</option>
						   <option value="4" {{ @$property->covered_garage == '4' ? 'selected':'' }}>4</option>
						   <option value="5" {{ @$property->covered_garage == '5' ? 'selected':'' }}>5</option>
						   <option value="6" {{ @$property->covered_garage == '6' ? 'selected':'' }}>6</option>
						   <option value="7" {{ @$property->covered_garage == '7' ? 'selected':'' }}>7</option>
						   <option value="8" {{ @$property->covered_garage == '8' ? 'selected':'' }}>8</option>
						   <option value="9" {{ @$property->covered_garage == '9' ? 'selected':'' }}>9</option>
						   <option value="10"{{ @$property->covered_garage == '10' ? 'selected':'' }}>10</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Parking Total:</label>
					   <select class="form-control" required="required" name="total_parking">
							<option value="" >Choose option</option>
						   <option value="1" {{ @$property->total_parking == '1' ? 'selected':'' }}>1</option>
						   <option value="2" {{ @$property->total_parking == '2' ? 'selected':'' }}>2</option>
						   <option value="3" {{ @$property->total_parking == '3' ? 'selected':'' }}>3</option>
						   <option value="4" {{ @$property->total_parking == '4' ? 'selected':'' }}>4</option>
						   <option value="5" {{ @$property->total_parking == '5' ? 'selected':'' }}>5</option>
						   <option value="6" {{ @$property->total_parking == '6' ? 'selected':'' }}>6</option>
						   <option value="7" {{ @$property->total_parking == '7' ? 'selected':'' }}>7</option>
						   <option value="8" {{ @$property->total_parking == '8' ? 'selected':'' }}>8</option>
						   <option value="9" {{ @$property->total_parking == '9' ? 'selected':'' }}>9</option>
						   <option value="10"{{ @$property->total_parking == '10' ? 'selected':'' }}>10</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Parking Features:</label>
						<!-- <input type="text" name="parking_features" class="form-control" required placeholder="Parking Features" value="{{ @$property->parking_features }}" required> -->


						<input data-role="tagsinput" type="text" name="parking_features" id="tagsinput" class="form-control" required placeholder="Parking Features" required>
						<!-- <select data-role="tagsinput" name="parking_features[]" id="tagsinput" class="form-control" multiple >
						</select>
						<div class="btn-tag-val"></div>
						<button type="button" class="btn-tag">asd</button> -->
                	</div>





					<!-- Interior -->
					<div class="form-group col-md-12">
							<h3 style="color: #63729A; border-top:1px solid">Interior </h3>
					</div>

						<div class="form-group col-md-6 ">
								<label>Total Rooms</label>
								<input  type="number" name="total_rooms" class="form-control" placeholder="Features" value="{{ @$property->total_rooms }}">
							</div>

							<div class="form-group col-md-6 ">
								<label>Window Features</label>
								<input  type="text" name="windows_features" class="form-control" placeholder="Window Features" value="{{ @$property->windows_features }}">
							</div>

							<div class="form-group col-md-6 ">
								<label>Door Features</label>
								<input  type="text" name="door_features" class="form-control" placeholder="Features" value="{{ @$property->door_features }}">
							</div>

							<div class="form-group col-md-6 ">
								<label>Flooring</label>
								<input  type="text" name="flooring" class="form-control" placeholder="Features" value="{{ @$property->flooring }}">
							</div>

							<div class="form-group col-md-6 ">
								<label>Interior Features</label>
								<input  type="text" name="interior_features" class="form-control" placeholder="Features" value="{{ @$property->interior_features }}">
							</div>
				<!-- Interior -->




					<div class="form-group col-md-6">
						<label>Hot Properties</label>
					   <select class="form-control" required="required" name="hot_properties">
							<option value="" >Choose option</option>
						   <option value="Y" {{ @$property->hot_properties == 'Y' ? 'selected':'' }}>Yes</option>
						   <option value="N" {{ @$property->hot_properties == 'N' ? 'selected':'' }}>No</option>
					   </select>
				   </div>










<style>
	.bootstrap-tagsinput {
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  /* display: inline-block; */
  padding: 4px 6px;
  color: #555;
  vertical-align: middle;
  border-radius: 4px; 
  max-width: 100%;
  line-height: 22px;
  cursor: text;
}
.bootstrap-tagsinput input {
  border: none;
  box-shadow: none;
  outline: none;
  background-color: transparent;
  padding: 0 6px;
  margin: 0;
  width: auto;
  max-width: inherit;
}
.bootstrap-tagsinput.form-control input::-moz-placeholder {
  color: #777;
  opacity: 1;
}
.bootstrap-tagsinput.form-control input:-ms-input-placeholder {
  color: #777;
}
.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
  color: #777;
}
.bootstrap-tagsinput input:focus {
  border: none;
  box-shadow: none;
}
.bootstrap-tagsinput .tag {
  margin-right: 2px;
  color: white;
  background-color: blue;
}
.bootstrap-tagsinput .tag [data-role="remove"] {
  margin-left: 8px;
  cursor: pointer;
}
.bootstrap-tagsinput .tag [data-role="remove"]:after {
  content: "x";
  padding: 0px 2px;
}
.bootstrap-tagsinput .badge [data-role="remove"]:after {
  content: "x";
  padding: 0px 2px;
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

	.bootstrap-tagsinput  input{
		display: block;
	}
</style>
<!-- <script>
	$(document).on('click','.btn-tag',function(){
// var vall = $('#tagsinput').val();
var vall = $('#tagsinput').tagsinput('items');
console.log(vall);
$('.btn-tag-val').html(vall);
	});
	</script> -->

	<script>
					$(document).on('click', '.items ul li', function() {
						var value = $(this).html();
						$('#tagsinput').tagsinput('add', value);
						$(this).remove();
					});
					
					$('#tagsinput').on('itemRemoved', function(event) {
						var value = event.item;
						$('.items ul').append('<li>' + value + '</li>');
					});

					  // Prevent form submission on Enter key press
					$('#tagsinput').on('keydown', function(event) {
						if (event.key === 'Enter') {
						event.preventDefault();
						return false;
						}
					});
				</script>

				
				   
					




					
				

					<!-- multiple_images  -->
					<div class="col-md-5  mb-3">
                    <label>Multiple Images </label>

	
						<div class="drop-zone mt-2">
							<span class="drop-zone__prompt">Drop images here or click to upload</span>
							<input type="file" name="multiple_images[]" id="file" class="drop-zone__input" multiple>
						</div>
				
					
						@php
						$images=DB::table('multiple_images')->where('property_id',@$property->id)->get();
						@endphp
						<div class="row">
						@foreach($images as $img)
						<div class="col-lg-3 mul_image">
							<img  src="{{asset('uploads/'.$img->multiple_images)}}" class="img-fluid " alt="">
							<i class="fa fa-times delete-image" data-id="{{ $img->id }}" style="background:red;padding:3px;color:white;position:absolute;top:0px;right:25px;"></i>
						</div>
						@endforeach
						</div>

						<div class="preview"></div>
						
	        
					</div>     


				
				
					<div class="form-group col-md-12">
                    <label>Featured Image <a href="javascript:;" id="selectimage" class="edit-logo" onclick="selectImage('featured_image');"><img class="img-fluid" src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                    <div style="display: None">
                        <input type="file" name="featured_image" id="featured_image" {{ (empty($property))?'required':''}} />
                    </div>
                    <div class="update-logo">
                        <img id="featured-image" class="img-thumbnail" style="height: 100px;cursor: pointer" onclick="selectImage('featured_image');" src="{{ !empty($property)? asset('uploads/'.$property->featured_image) : asset('img/placeholder-img.png') }}" alt="">
                    </div>
                	</div>

					
 

				
			
			
 

   			        
              
                <div class="clearfix"></div>
                <div class="form-group col-md-12">
                    <label>Details</label>
                    <textarea name="description" class="form-control tinymceeditor" rows="5">{{ @$property->description }}</textarea>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="cus-btn text-right">
                        <a href="{{ route('admin.property.index') }}" class="cancle-btn">Back</a>
                        <button type="submit" class="send-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div> 







	<!-- bedroom  -->

<script>
    function showBedroom() {
        // Hide all divs
        var divs = document.getElementsByClassName("myBedroom");
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = "none";
        }

        // Get the selected option
        var selectBox = document.getElementById("selectBedroom");
        var selectedOption = selectBox.options[selectBox.selectedIndex].value;

        // Show the selected number of divs
        for (var i = 1; i <= selectedOption; i++) {
            var div = document.getElementById("bedroom" + i);
            if (div) {
                div.style.display = "block";
            } 
        }
		
    }

    // Hide all divs on page load
    window.addEventListener("load", function() {
        showBedroom();
    });
</script>
	<!-- bedroom  -->


	
	<!-- bathrooms  -->

<script>
    function showBathrooms() {
        // Hide all divs
        var divs = document.getElementsByClassName("myBathroom");
        for (var i = 0; i < divs.length; i++) {
            divs[i].style.display = "none";
        }

        // Get the selected option
        var selectBox = document.getElementById("selectBathroom");
        var selectedOption = selectBox.options[selectBox.selectedIndex].value;

        // Show the selected number of divs
        for (var i = 1; i <= selectedOption; i++) {
            var div = document.getElementById("bathroom" + i);
            if (div) {
                div.style.display = "block";
            }
        }
		
    }

    // Hide all divs on page load
    window.addEventListener("load", function() {
        showBathrooms();
    });
</script>
	<!-- bathrooms  -->

	



<!-- single image  -->
	<script>
		$(document).ready(function(){
			$('.select2').select2();
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#featured-image').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$(document).on('change', "#featured_image", function(){
			readURL(this);
		});
	</script>



<!-- multiple images -->
	<script>
		const dropZone = document.querySelector(".drop-zone");
		const input = dropZone.querySelector(".drop-zone__input");
		const preview = document.querySelector(".preview");

		dropZone.addEventListener("click", () => {
		input.click();
		});

		function handleFiles(files) {
		for (let i = 0; i < files.length; i++) {
			const file = files[i];

			if (!file.type.startsWith("image/")) continue;

			const img = document.createElement("img");
			img.classList.add("preview__image");
			img.file = file;

			const item = document.createElement("div");
			item.classList.add("preview__item");
			item.appendChild(img);

			const removeBtn = document.createElement("button");
			removeBtn.classList.add("preview__remove");
			removeBtn.innerHTML = "x";
			removeBtn.addEventListener("click", () => {
			item.remove();
			});
			item.appendChild(removeBtn);

			preview.appendChild(item);

			const reader = new FileReader();
			reader.onload = (function(aImg) { 
			return function(e) {
				aImg.src = e.target.result;
			};
			})(img);

			reader.readAsDataURL(file);
		}
		}

		input.addEventListener("change", () => {
		handleFiles(input.files);
		});

		dropZone.addEventListener("dragover", (event) => {
		event.preventDefault();
		dropZone.classList.add("drop-zone--over");
		});

		dropZone.addEventListener("dragleave", () => {
		dropZone.classList.remove("drop-zone--over");
		});

		dropZone.addEventListener("drop", (event) => {
		event.preventDefault();	
		dropZone.classList.remove("drop-zone--over");
		handleFiles(event.dataTransfer.files);
		});
	</script>


<!-- delete multiple_images  -->
<script>
$(document).ready(function() {
	$('.delete-image').click(function() {
		var image_id = $(this).data('id');
		var $parent = $(this).parent();
		$.ajax({
		type : 'POST',
		url : "{{route('delete-image')}}",
		data : {'_token' : '{{ csrf_token() }}', 'image_id' : image_id},
		cache : false,
		success : function(response){ 
			$parent.remove();
		}
	});
	});
});


</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <x-slot name="pluginCss"></x-slot>
    <x-admin.tinymce/>
</x-admin-layout>
