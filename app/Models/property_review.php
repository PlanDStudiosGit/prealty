<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property_review extends Model
{
    use HasFactory;
      protected $fillable = [
        'user_id',
        'property_id',
        'like_property', 
        'invest_property',
        'review_property', 
        'total_investment',
        'action',
        'bid_amount'
    ];
}
