<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bathroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'bathroom_area', 
        'bathroom_length',
        'bathroom_width',
        'bathroom_level'
    ];
}
