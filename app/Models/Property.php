<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'type',
        'address', 
        'price',
        'bedrooms',
        'bathrooms',
        'lot_size',
	    'hot_properties',
	    'company_profit',
        'living_room_area',
        'living_room_length',
        'living_room_width',
        'living_room_level',
        'living_room_features',
        'dining_room_area',
        'dining_room_length',
        'dining_room_width',
        'dining_room_level',
        'dining_room_features',  
        'family_room_area',
        'family_room_length',
        'family_room_width',
        'family_room_level',
        'family_room_features',
        'basement_area',
        'basement_length',
        'basement_width',
        'basement_features', 
        'kitchen_area',
        'kitchen_length',
        'kitchen_width',
        'kitchen_level',
        'kitchen_features',
        'bathroom',
        'half_bathrooms',
        'master_bathroom',
        'has_garage',
        'open_parking',
        'total_garage',
        'covered_garage',
        'total_parking',
        'parking_features',
        'description',
        'featured_image',
        'multilple_images',
        'hot_properties',
        'status',


    ];
} 
