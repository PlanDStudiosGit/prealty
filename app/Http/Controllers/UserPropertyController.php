<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\property_review;
use Auth;
use DB;

 

class UserPropertyController extends Controller
{



    public function reviewed_properties(){
        if (Auth::check()) {
        $user=User::all();
        $property=Property::select('properties.*')->join('property_reviews','property_reviews.property_id','=','properties.id')->where('user_id',Auth::id())->get();
		// echo '<pre>'; 
		//  print_r($property->review_date);
		//  exit;
        return view('front.dashboard_2.reviewed_properties',compact('user','property'));
    }else{
        return redirect('/');
    }
    }

    public function pool_detail($id){
        
 
        $property=Property::findorfail($id);
        $user=User::where('id',Auth::id())->first();
        $property_review=property_review::Where('property_id', $id)->where('user_id','=', Auth::id())->first();
        $total_people=property_review::Where('property_id', $id)->count();
        $total_roi_amount=property_review::where('property_id', $id)->sum('roi_amount');
        $total_roi_per=property_review::where('property_id', $id)->sum('roi_per');

       
//  echo '<pre>'; 
//  print_r($property->price - $total_roi_amount);
//  exit; 
        return view('front.dashboard_2.pool_detail',compact('property','user','property_review','total_people','total_roi_amount','total_roi_per'))->with('success', 'The bid has been successfully placed'); 
    }






    public function property_action(request $request, $id){
        $property=property_review::where('property_id',$id)->where('user_id',Auth::id())->first();

        
        // dd($request->all());

        if($request->action == 'roi'){
            $property->action = 'roi';
            $property->roi_amount = $request->roi_amount;
            $property->roi_per = $request->roi_per;
 
    // echo '<pre>';
    // print_r($property);
    // exit; 

            $property->save();
        }
        elseif($request->action == 'buy'){ 
            $property->action = 'buy';
            $property->bid_amount = $request->bid_amount; 
            $property->save();
        }

        elseif($request->action == 'buy&roi'){  
            $property->action = 'buy&roi';
            $property->bid_amount = $request->bid_amount;
            $property->roi_amount = $request->roi_amount;
            $property->roi_per = $request->roi_per;
            
            $property->save();
        }

        // $isNull=property_review::whereNull('action')->where('property_id', $id)->count();
        // // print_r($isNull);exit; 
        
        // if($isNull == 0){
        //     $property=Property::Where('id', $id)->update(['status'=>4]);
        // }

    
        return redirect()->back()->with('success', 'The bid has been successfully placed');
    } 




} 
