<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
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
				            <option value="Single-Family" {{@$property->type == 'Single-Familyes' ? 'selected':'' }}>Single-Family</option>
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
					<select id="selectBedroom" class="form-control" required="required" name="bedrooms" onchange="showBedrooms()">
						<option value="0" >Select an option</option>
						<option value="1" {{ @$property->bedrooms == '1' ? 'selected':'' }}>1</option>
						<option value="2" {{ @$property->bedrooms == '2' ? 'selected':'' }}>2</option>
						<option value="3" {{ @$property->bedrooms == '3' ? 'selected':'' }}>3</option>
						<option value="4" {{ @$property->bedrooms == '4' ? 'selected':'' }}>4</option>
						<option value="5" {{ @$property->bedrooms == '5' ? 'selected':'' }}>5</option>
						<option value="6" {{ @$property->bedrooms == '6' ? 'selected':'' }}>6</option>
						<option value="7" {{ @$property->bedrooms == '7' ? 'selected':'' }}>7</option>
						<option value="8" {{ @$property->bedrooms == '8' ? 'selected':'' }}>8</option>
						<option value="9" {{ @$property->bedrooms == '9' ? 'selected':'' }}>9</option>
						<option value="10"{{ @$property->bedrooms == '10' ? 'selected':'' }}>10</option>
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
								<h5 style="color: #63729A;">Bedroom 2</h5>
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
								<input  tytextmber" name="bedroom_10_features" class="form-control" placeholder="Features" value="{{ @$property->master_bedroom_width }}">
							</div>
						</div>
					</div>
				


				<!-- bedrooms   -->


				<div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Bathrooms </h3>
					</div>
                <div class="form-group col-md-6">
                    <label>Bathrooms</label>
                    <input maxlength="255" type="number" name="bathrooms" class="form-control" required placeholder="Bathrooms" min="0" value="{{ @$property->bathrooms }}" required>
                </div>

                 


   				<!-- <div class="form-group col-md-6">
                    <label>Garage</label>
                    <input maxlength="255" type="number" name="garage" class="form-control" required placeholder="Garage" min="0" value="{{ @$property->garage }}" required>
                </div>

                  <div class="form-group col-md-6">
				         <label>Elevator</label>
				        <select class="form-control" required="required" name="elevator">
				         	<option value="">Choose option</option>
				            <option value="Yes" {{ @$property->elevator == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->elevator == 'No' ? 'selected':'' }}>No</option>
				        </select>
				    </div>

				    <div class="form-group col-md-6">
				         <label>FirePlace </label>	
				        <select class="form-control" required="required" name="fireplace">
				         	<option value="">Choose option </option>
				            <option value="Yes" {{ @$property->fireplace  == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->fireplace  == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				    <div class="form-group col-md-6">
				         <label>Gated </label>
				        <select class="form-control" required="required" name="gated">
				         	<option value="">Choose option </option>
				            <option value="Yes" {{ @$property->gated  == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->gated  == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				      <div class="form-group col-md-6">
				         <label>Balcony </label>
				        <select class="form-control" required="required" name="balcony">
				         	<option value="">Choose option </option>
				            <option value="Yes" {{ @$property->balcony  == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->balcony  == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				      <div class="form-group col-md-6">
				         <label>Terrace </label>
				        <select class="form-control" required="required" name="terrace">
				         	<option value="">Choose option </option>
				            <option value="Yes" {{ @$property->terrace  == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->terrace  == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				      <div class="form-group col-md-6">
				         <label>Pool </label>
				        <select class="form-control" required="required" name="pool">
				         	<option value="">Choose option </option>
				            <option value="Yes" {{ @$property->pool  == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->pool  == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

                     <div class="form-group col-md-6">
				         <label>Garden</label>
				        <select class="form-control" required="required" name="garden">
				         	<option value="">Choose option</option>
				            <option value="Yes" {{ @$property->garden == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->garden == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				       <div class="form-group col-md-6">
				         <label>Basement</label>
				        <select class="form-control" required="required" name="basement">
				         	<option value="">Choose option</option>
				            <option value="Yes" {{ @$property->basement == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->basement == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>

				       <div class="form-group col-md-6">
				         <label>Furnished</label>
				        <select class="form-control" required="required" name="furnished">
				         	<option value="">Choose option</option>
				            <option value="Yes" {{ @$property->furnished == 'Yes' ? 'selected':'' }}>Yes</option>
				            <option value="No" {{ @$property->furnished == 'No' ? 'selected':'' }}>No</option>
				        </select>
				   
				    </div>


					<div class="form-group col-md-6">
						<label>Hot Properties</label>
					   <select class="form-control" required="required" name="hot_properties">
							<option value="" >Choose option</option>
						   <option value="Y" {{ @$property->hot_properties == 'Yes' ? 'selected':'' }}>Yes</option>
						   <option value="N" {{ @$property->hot_properties == 'No' ? 'selected':'' }}>No</option>
					   </select>
				   </div>

				   <div class="form-group col-md-6">
						<label>Pulse Profit</label>
						<input maxlength="255" type="number" name="company_profit" class="form-control" required placeholder="Pulse Profit" min="10" max="100" value="10" value="{{@$property->company_profit}}" required>
                	</div> -->

					
					<!-- <div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Home facts </h3>
					</div>
					<div class="form-group col-md-6">
						<label>Year Built</label>
						<input type="number" name="yearbuilt" class="form-control" required placeholder="Year Built" value="{{ @$property->yearbuilt }}" required>
                	</div>



					
					<div class="form-group col-md-6">
						<label>Style</label>
					   <select class="form-control" required="required" name="style">
							<option value="" >Choose option</option>
						   <option value="cape" {{ @$property->hot_properties == 'cape' ? 'selected':'' }}>Cape</option>
					   </select>
				   </div>

				

					<div class="form-group col-md-6">
						<label>MLS#</label>
						<input type="text" name="mls" class="form-control" required placeholder="Year Built" value="{{ @$property->mls }}" required>
                	</div> -->
 
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
						<input type="text" name="parking_features" class="form-control" required placeholder="Parking Features" value="{{ @$property->parking_features }}" required>
                	</div>


					<!-- <div class="form-group col-md-12">
						<h3  style="color: #63729A; border-top: 1px solid #63729A">Interior </h3>
					</div>

					<div class="form-group col-md-6">
						<label>Master Bedroom Level</label>
					   <select class="form-control" required="required" name="master_bedroom_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Bedroom #2 Level</label>
					   <select class="form-control" required="required" name="bedroom_2_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div> 

				   <div class="form-group col-md-6">
						<label>Bedroom #3 Level</label>
					   <select class="form-control" required="required" name="bedroom_3_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div>

				   <div class="form-group col-md-6">
						<label>Master Bathroom Features:</label>
						<input type="text" name="bathroom_features" class="form-control" required placeholder="Master Bathroom Features" value="{{ @$property->bathroom_features }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Living Room Level</label>
					   <select class="form-control" required="required" name="living_room_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div>

				   <div class="form-group col-md-6">
						<label>Living Room Features:</label>
						<input type="text" name="living_room_features" class="form-control" required placeholder="Living Room Features" value="{{ @$property->living_room_features }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Dining Room Level</label>
					   <select class="form-control" required="required" name="dining_room_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div>

				   <div class="form-group col-md-6">
						<label>Dining Room Features:</label>
						<input type="text" name="dining_room_features" class="form-control" required placeholder="Dining Room Features" value="{{ @$property->dining_room_features }}" required>
                	</div>

					
					<div class="form-group col-md-6">
						<label>Kitchen Level</label>
					   <select class="form-control" required="required" name="kitchen_level">
							<option value="" >Choose option</option>
						   <option value="first" {{ @$property->hot_properties == 'first' ? 'selected':'' }}>Level: First</option>
						   <option value="second" {{ @$property->hot_properties == 'second' ? 'selected':'' }}>Level: Second</option>
					   </select>
				   </div>

				   	<div class="form-group col-md-6">
						<label>Basement Features:</label>
						<input type="text" name="basement_features" class="form-control" required placeholder="Basement Features" value="{{ @$property->basement_features }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Kitchen Features:</label>
						<input type="text" name="kitchen_features" class="form-control" required placeholder="Kitchen Features" value="{{ @$property->kitchen_features }}" required>
                	</div>

					
					<div class="form-group col-md-6">
						<label>Window Features::</label>
						<input type="text" name="window_features" class="form-control" required placeholder="Window Features:" value="{{ @$property->window_features }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Flooring:</label>
						<input type="text" name="flooring" class="form-control" required placeholder="Flooring" value="{{ @$property->flooring }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Appliances:</label>
						<input type="text" name="appliances" class="form-control" required placeholder="Appliances" value="{{ @$property->appliances }}" required>
                	</div>

					<div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Exterior </h3>
					</div>
               
					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Building Information </h5>
					</div>

					<div class="form-group col-md-6">
						<label>Building Area (Total):</label>
						<input type="number" name="building_area" class="form-control" required placeholder="Building Area (Total)" value="{{ @$property->building_area }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Foundation Details:</label>
						<input type="text " name="foundation_detail" class="form-control" required placeholder="Foundation Details" value="{{ @$property->foundation_detail }}" required>
                	</div>
					<div class="form-group col-md-6">
						<label>Construction Materials:</label>
						<input type="text " name="construction_materials" class="form-control" required placeholder="Construction Materials" value="{{ @$property->construction_materials }}" required>
                	</div>

					<div class="form-group col-md-6">
						<label>Year Built Source:</label>
						<input type="text " name="year_built_source" class="form-control" required placeholder="Year Built Source" value="{{ @$property->year_built_source }}" required>
                	</div>
					<div class="form-group col-md-6">
						<label>Year Built Details:</label>
						<input type="text " name="year_built_details" class="form-control" required placeholder="Year Built Details" value="{{ @$property->year_built_source }}" required>
                	</div>

	
					 
                     <div class="form-group col-md-12">
						<h5 style="color: #63729A;">Exterior Features </h5>
					</div>


                    <div class="form-group col-md-6">
						<label>Roof:</label>
						<input type="text " name="roof" class="form-control" required placeholder="Roof" value="{{ @$property->roof }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>Patio And Porch Features:</label>
						<input type="text " name="patio_porch_features" class="form-control" required placeholder="Patio And Porch Features" value="{{ @$property->patio_porch_features}}" required>
                	</div>


     

                    <div class="form-group col-md-12">
						<h5 style="color: #63729A;">Property Information </h5>
					</div>


                    <div class="form-group col-md-6">
						<label>Accessibility Features:</label>
						<input type="text " name="accessiblity_feature" class="form-control" required placeholder="Accessibility Features" value="{{ @$property->accessiblity_feature }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>PropertySubType:</label>
						<input type="text " name="propertySubType" class="form-control" required placeholder="PropertySubType" value="{{ @$property->propertySubType }}" required>
                	</div>



                     <div class="form-group col-md-12">
						<h5 style="color: #63729A;">Lot Information </h5>
					</div>


                    <div class="form-group col-md-6">
						<label>Lot Size (Acres):</label>
						<input type="text " name="lot_size" class="form-control" required placeholder="Lot Size (Acres)" value="{{ @$property->lot_size }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>Lot Features:</label>
						<input type="text " name="lot_features" class="form-control" required placeholder="Lot Features" value="{{ @$property->lot_features }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>Road Frontage Type:</label>
						<input type="text " name="road_frontage_type" class="form-control" required placeholder="Road Frontage Type" value="{{ @$property->road_frontage_type }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>Parcel Number:</label>
						<input type="text " name="parcel_number" class="form-control" required placeholder="Parcel Number" value="{{ @$property->parcel_number }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>Zoning:</label>
						<input type="text " name="zoning" class="form-control" required placeholder="Zoning" value="{{ @$property->zoning }}" required>
                	</div>



                    <div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Financial </h3>
					</div>


					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Tax Information </h5>
					</div>

					<div class="form-group col-md-6">
						<label>Tax Annual Amount:</label>
						<input type="number" name="tax_annual_ammount" class="form-control" required placeholder="Tax Annual Amount" value="{{ @$property->tax_annual_ammount }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>Tax Assessed Value:</label>
						<input type="number" name="tax_assessed_value" class="form-control" required placeholder="Tax Assessed Value" value="{{ @$property->tax_assessed_value }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>Tax Year:</label>
						<input type="number" name="tax_year" class="form-control" required placeholder="Tax Year" value="{{ @$property->tax_year }}" required>
                	</div>




                     <div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Utilities </h3>
					</div>
					

					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Utility Information</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Utilities:</label>
						<input type="text" name="utilities" class="form-control" required placeholder="Utilities" value="{{ @$property->utilities }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>Sewer:</label>
						<input type="text" name="sewer" class="form-control" required placeholder="Sewer" value="{{ @$property->sewer }}" required>
                	</div>
                    <div class="form-group col-md-6">
						<label>Water Source:</label>
						<input type="text" name="water_source" class="form-control" required placeholder="Water Source" value="{{ @$property->water_source }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>Electric:</label>
						<input type="text" name="electric" class="form-control" required placeholder="Electric" value="{{ @$property->electric }}" required>
                	</div>


					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Heating & Cooling</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Has Heating:</label>
						<input type="text" name="has_heating" class="form-control" required placeholder="Has Heating" value="{{ @$property->has_heating }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>Heating:</label>
						<input type="text" name="heating" class="form-control" required placeholder="Heating" value="{{ @$property->heating }}" required>
                	</div>
                     



 <div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Location </h3>
					</div>
					

					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Location Information</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Directions:</label>
						<input type="text" name="directions" class="form-control" required placeholder="Directions" value="{{ @$property->directions }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>UnparsedAddress:</label>
						<input type="text" name="unparsedAddress" class="form-control" required placeholder="UnparsedAddress" value="{{ @$property->unparsedAddress }}" required>
                	</div>
                  



					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Community Information</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Senior CommunityYN:</label>
						<input type="text" name="senior_community" class="form-control" required placeholder="Senior CommunityYN" value="{{ @$property->senior_community }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>Community Features:</label>
						<input type="text" name="community_feature" class="form-control" required placeholder="Community Features" value="{{ @$property->community_feature }}" required>
                	</div>
                     



                <div class="form-group col-md-12">
						<h3 style="color: #63729A; border-top:1px solid">Other </h3>
					</div>
                

					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Miscellaneous Information</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Heat Zones:</label>
						<input type="text" name="heat_zones" class="form-control" required placeholder="Heat Zones" value="{{ @$property->heat_zones}}" required>
                	</div>


                     
                  

					
					<div class="form-group col-md-12">
						<h5 style="color: #63729A;">Listing Information</h5>
					</div>

					<div class="form-group col-md-6">
						<label>Disclosure:</label>
						<input type="text" name="disclosure" class="form-control" required placeholder="Disclosure" value="{{ @$property->disclosure }}" required>
                	</div>


                    <div class="form-group col-md-6">
						<label>Disclosures:</label>
						<input type="text" name="disclosures" class="form-control" required placeholder="Disclosures" value="{{ @$property->disclosures }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>StandardStatus:</label>
						<input type="text" name="standardStatus" class="form-control" required placeholder="StandardStatus" value="{{ @$property->standardStatus }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>Anticipated Sold Date:</label>
						<input type="text" name="anticipated_sold_date" class="form-control" required placeholder="Anticipated Sold Date" value="{{ @$property->anticipated_sold_date }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>BuyerAgencyCompensation:</label>
						<input type="number" name="buyerAgencyCompensation" class="form-control" required placeholder="BuyerAgencyCompensation" value="{{ @$property->buyerAgencyCompensation }}" required>
                	</div>

                    <div class="form-group col-md-6">
						<label>TransactionBrokerCompensation:</label>
						<input type="number" name="transactionBrokerCompensation" class="form-control" required placeholder="TransactionBrokerCompensation" value="{{ @$property->transactionBrokerCompensation }}" required>
                	</div>
                      -->



					


				   
					















					
				

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







	<!-- bedrooms  -->

<script>
    function showBedrooms() {
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
        showBedrooms();
    });
</script>
	<!-- bedrooms  -->


	



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
