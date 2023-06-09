<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\property_review;
use App\Models\multiple_image;
use Carbon\Carbon;
use Auth;
use DB;

class DetailController extends Controller
{
    
// property detail 
	public function detail($id = NULL){
      
		$user_check = 0;
		if($user = Auth::user()){
			$user_check = property_review::where('user_id',$user->id)->where('property_id',$id)->count();
		}
        $user=User::where('id',Auth::id())->first();
        $property=Property::findorfail($id);
        $pool_users=property_review::Where('property_id', $id)->where('user_id','!=','')->get();

        $multiple_images=multiple_image::Where('property_id', $id)->get(); 
    
        //    echo '<pre>';
        //     print_r($multiple_images);
		// 	exit;
    	return view('front.detail',compact('property','user_check','pool_users','user','multiple_images'));
	}

    public function review(Request $request){
        $input = $request->all();
        $property_review = new property_review;

            // echo '<pre>';
            // print_r($input);
			// echo '</pre>';
			// exit;

        $property_review->user_id = $request->user_id;
        $property_review->property_id = $request->property_id;
        $property_review->visit_property = $request->visit_property;
        $property_review->positive_review = $request->positive_review;
        $property_review->negative_review = $request->negative_review;
        $property_review->rating = $request->rating;
        $property_review->review_date = Carbon::today();
      
        
        $property_review->save();



        return redirect()->back()->with('success', 'Thankyou for reviewing the property');

    }

 

}
