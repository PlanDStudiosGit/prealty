<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\property_review;
use App\Models\multiple_image;

use Hash;

class HomeController extends Controller
{
  public function hot_property()
  {

          $hot_properties = Property::where('hot_properties', 'Y')->get();


        foreach ($hot_properties as $property) {
                
                        $propertyData[] = [
                            'id' => $property->id,
                            'featured_image' => $property->featured_image,
                            'bedrooms' => $property->bedrooms,
                            'type' => $property->type,
                            'address' => $property->address,
                            'price' => $property->price, 
                            'created_at' => $property->created_at,         
                        ];
                }


      $response = [
            'success' => true,
            'hot-properties' => $propertyData
      ];

      return response()->json($response, 200);

  }





  public function properties()
  {
    $properties=Property::latest()->limit(6)->get();
  
  
      foreach ($properties as $property) {
       
        
        $propertyData[] = [
              'id' => $property->id,
              'featured_image' => $property->featured_image,
              'bedrooms' => $property->bedrooms,
              'type' => $property->type,
              'address' => $property->address,
              'price' => $property->price,
              'created_at' => $property->created_at,
              
          ];
      }

      $response = [
        'suucess' => true,
        'properties' => $propertyData
      ];

  
      return response()->json($response, 200);
  }





  public function propertyDetail($id)
  {
      $property = Property::find($id);
      $rating = Property_review::where('property_id', $id)->first();
      $multiple_images = multiple_image::select('multiple_images')->where('property_id', $id)->get();
  
      $property->rating = $rating->rating ?? 0;
      $property->multiple_images = $multiple_images;
  
      $response = [
          'success' => true,
          'property' => $property
      ];
  
      return response()->json($response, 200);
  }
     
} 