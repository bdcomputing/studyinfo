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
        'detail',
        'country',
        "currency",
        'image_url',
        "image_public_id",
        'flag_url',
        "flag_publlic_id",
        "continent_id",
        'is_popular'
    ];

    protected $casts = [
        'is_popular' => 'boolean',
        "continent_id" => 'integer',
    ];

    public function universities()
    {
        return $this->hasMany(University::class);
    }


    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
