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
        'garage',
        'lot_size',
        'elevator',
        'fireplace',
        'gated',
        'garden',
        'balcony',
        'terrace',
        'pool',
        'basement',
        'furnished',
        'featured_image',
        'multilple_images',
        'description',
	    'status',
	    'hot_properties',
	    'company_profit'

    ];
} 
