<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\property_review;
use Auth;

class SearchController extends Controller
{
  public function search(){
    $property=Property::all();

    return view('front.search_property',compact('property'));
  }

  public function filter(request $request){
        // $a=$request->all();
    // echo '<pre>';
    // print_r($property);exit;
    $price=explode('-',$request->range);
    $property=Property::where('type',$request->type)->whereBetween('price',[$price[0],$price[1]])->get();
	$param = 'reviewed_properties';
    return view('front.search_property',compact('property','param'));
  }
}
