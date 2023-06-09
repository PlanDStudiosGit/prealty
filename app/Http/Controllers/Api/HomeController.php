<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use Hash;

class HomeController extends Controller
{

  public function hot_propertyj()
  {
      $properties = Property::where('hot_properties', 'Y')->get();
  
      $response = [];
  
      foreach ($properties as $property) {
          $response[] = [
              'id' => $property->id,
              'featured_image' => $property->featured_image,
              'bedrooms' => $property->bedrooms,
              'type' => $property->type,
              'address' => $property->address,
              'price' => $property->price,
              
              'created_at' => $property->created_at,
          ];
      }
  
      return response()->json($response, 200);
  }

















  public function hot_property()
  {
      try {
       
        
      $properties = Property::where('hot_properties', 'Y')->get();
  
      $response = [];
  
      foreach ($properties as $property) {
          $response[] = [
            'success' => true,
              'id' => $property->id,
              'featured_image' => $property->featured_image,
              'bedrooms' => $property->bedrooms,
              'type' => $property->type,
              'address' => $property->address,
              'price' => $property->price, 
              
              'created_at' => $property->created_at,
          ];
      }
  
      return response()->json($response, 200);
      } catch (\Illuminate\Validation\ValidationException $e) {
          $errors = $e->validator->errors()->all();
              $response = [
                  'success' => false,
                  'error' => $errors
              ];

          return response()->json($response, 422);
      }
  }

















  public function properties()
  {
    $properties=Property::latest()->limit(6)->get();
  
      $response = [];
  
      foreach ($properties as $property) {
       
        
          $response[] = [
              'id' => $property->id,
              'featured_image' => $property->featured_image,
              'bedrooms' => $property->bedrooms,
              'type' => $property->type,
              'address' => $property->address,
              'price' => $property->price,
              'created_at' => $property->created_at,
              
          ];
      }
  
      return response()->json($response, 200);
  }





    public function propertyDetail($id)
    {
      $detail= Property::find($id);
      $rating = Property_review::where('property_id', $id)->pluck('rating');
  
      $response[] = [
        'rating' => $rating,
        'detail' => $detail,
       
        
    ];
      return response()->json($response , 200);
      

    }

   
    
}