<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        "field_of_study",
        'degree_type', // Degree, Masters, Doctorate
        'duration',  //Months or Years
        'tution_fee',
        'entry_requirements',
        'university_id',
        'country_id',
        'is_popular'

    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
