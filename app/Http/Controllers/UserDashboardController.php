<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\property_review;
use Auth;
use DB;

 

class UserDashboardController extends Controller
{
    public function dashboard(){ 
        if (Auth::check()) {
        $user=User::where('id',Auth::id())->first();
        // $current_investment=property_review::Where('user_id', Auth::id())->sum('total_investment_value');

        // echo '<pre>';
        // print_r($user);
        // exit;
     
        $param = 'dashboard';
        return view('front.dashboard_2.dashboard',compact('user','param'));
    }else{
        return redirect('/');
    }
    
    }

    

    public function update_investment(request $request){ 
        
    //    $user=$request->all();
    //  print_r($request->investment + $request->remaining_investment);exit;
   


        $user=User::where('id',Auth::id())->first();
        $user->investment= $request->investment + $request->initail_investment;
        $user->save();
        return view('front.dashboard_2.dashboard',compact('user'));
    }
   



    public function profile(){
        $user=User::all();
 
        return view('front.dashboard.user_profile',compact('user'));
    }


 







    // social investment

    public function social_investment1(){
       return view('auth.social_investment');
    }

    public function social_investment_store(request $request){
        $a=$request->all();
        // echo '<pre>';
        // print_r($property);
        // exit;
        $social_investment=User::where('id',Auth::id())->first();
      
        $social_investment->investment = $request->investment;
        $social_investment->save();
        return redirect('/');
     }

} 
