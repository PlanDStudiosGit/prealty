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

class DetailController extends Controller
{




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





  
  public function property_review(request $request){
    try {

        $request->validate([
            'visit_property' => 'required|string',
            'positive_review' => 'required|string',
            'negative_review' => 'required|string',
            'rating' => 'required|numeric'
        ]);


$review = new property_review;

    $review->user_id = $request->user_id;
    $review->property_id = $request->property_id;
    $review->visit_property = $request->visit_property;
    $review->positive_review = $request->positive_review;
    $review->negative_review =  $request->negative_review;
    $review->rating = $request->rating;
    $review->save();
// echo "<pre>";print_r($review);exit;
        $response = [
            'success' => true,
            'user_id' => $review->user_id,
            'property_id' => $review->property_id,
            'visit_property' => $review->visit_property,
            'positive_review' => $review->positive_review,
            'negative_review' => $review->negative_review,
            'rating' => $review->rating,
            'message' => 'Reviewed successfully'
        ];

        return response()->json($response, 201);
    } catch (\Illuminate\Validation\ValidationException $e) {
        $errors = $e->validator->errors()->all();
            $response = [
                'success' => false, 
                'error' => $errors 
            ];

        return response()->json($response, 422);
    }
  }

}