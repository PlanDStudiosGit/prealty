<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    protected $fillable = [
        'property_id',
        'bedroom_area', 
        'bedroom_length',
        'bedroom_width',
        'bedroom_level',
	    'ismaster'

    ];
}
