<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //

    protected $fillable = [
        'name',
        'slug',
        'description',
        'cost_of_living',
        'language',
        'image',
        'visa_requirements',
        'country',
        "currency",
        'image_url',
        'flag_url',
        "continent_id",
        'is_popular'
    ];

    protected $casts = [
        'is_popular' => 'boolean',
        "continent_id" => 'integer',
    ];
}
