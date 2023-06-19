<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Property;
use App\Models\property_review;
use App\Models\multiple_image;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Hash;

class DashboardController extends Controller
{

    public function reviewed(){
        // echo (Auth::id());exit;
       
            $user=User::all();
            $reviewed_property=Property::select('properties.id','properties.featured_image','properties.bedrooms','properties.type','properties.address','properties.price','properties.created_at')->join('property_reviews','property_reviews.property_id','=','properties.id')->where('user_id',Auth::id())->get();
            

            $response = [
                'success' => true,
                'reviewed_property' => $reviewed_property,
            ];
            return response()->json($response, 200);  
        }


        public function invested(){
           
                $user=User::all();
                // $invested_property=DB::table('property_reviews')->where('user_id',Auth::user()->id)->where('action','!=','')->get();
                $invested_property = Property::select('properties.id', 'properties.featured_image', 'properties.bedrooms', 'properties.type', 'properties.address', 'properties.price', 'properties.created_at')
                ->join('property_reviews', 'property_reviews.property_id', '=', 'properties.id')
                ->where('property_reviews.user_id', Auth::id())
                ->where('property_reviews.action', '!=', '')
                ->get();
            
                
    
                $response = [
                    'success' => true,
                    'invested_property' => $invested_property,
                ];
                return response()->json($response, 200);  
            }
    }



