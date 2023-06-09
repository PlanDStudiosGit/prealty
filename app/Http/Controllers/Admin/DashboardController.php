<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Property;
use App\Models\property_review;


class DashboardController extends Controller
{
    public function index(){

        //$blogs = Blog::count();

        $users = User::count();
        $properties = Property::count();
        $property_reviews = property_review::count();

    
        $viewData = array(
            'pageName' => 'Dashboard',
      
            'users' => $users,
        
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => 'active',
                    'url' => route('admin.dashboard')
                )
            )
        );
        return view('admin.dashboard',compact('users','properties','property_reviews'))->with($viewData);
    }
}
