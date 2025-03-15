<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'university_id',
        'name',
        "level",
        'description',
        'duration',  //Months or Years
        "intake_period",
        "mode_of_study",
        "field_of_study",
        "language_of_instruction",
        'program_fee',
        'application_deadline',
        'requirements',
        'career_prospects'

    ];

    protected $casts = [
        'university_id' => 'integer',
        'duration' => 'integer',
        'program_fee' => 'float',
        'application_deadline' => 'date'
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
