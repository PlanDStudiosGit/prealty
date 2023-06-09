<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;

class FrontController extends Controller
{
      public function index(){
        
        $property=Property::latest()->limit(6)->get();
        // print_r($property);exit;
        $hot_properties=Property::where('hot_properties','Y')->get();
        
        // echo "<pre>";
        // print_r ($hot_properties);
        // echo "</pre>";
        

        return view('front.index', compact('hot_properties','property'));
      }

      public function terms_condition(){

        return view('front.termsandcondition');
      }

      public function privacy_policy(){
      
         return view('front.privacy_policy');
      }

      public function front(){
      
        return view('front.front');
     }


}
