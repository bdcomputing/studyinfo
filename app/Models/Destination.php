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
        'image',
        'country',
        'study_cost',
        'is_popular'
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];
}
