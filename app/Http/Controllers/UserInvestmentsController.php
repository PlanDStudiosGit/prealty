<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\property_review;
use Auth;
use DB;

class UserInvestmentsController extends Controller
{
    public function invested_properties(){
        if (Auth::check()) {
        $user=User::all();
        // $property=Property::select('properties.*')->join('property_reviews','property_reviews.property_id','=','properties.id')->where('user_id',Auth::id())->where('property_reviews.action','!=','')->get();
        $reviews=DB::table('property_reviews')->where('user_id',Auth::user()->id)->where('action','!=','')->get();
        // echo "<pre>";print_r($reviews);exit;
		$param = 'invested_properties';
        return view('front.dashboard_2.my_investments',compact('user','reviews','param'));
     }else{
        return redirect('/');
    }
} 
} 

// ->whereNotNull('property_reviews.action')