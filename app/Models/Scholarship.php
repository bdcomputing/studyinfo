<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //
    protected $fillable = [
        "name",
        "description",
        "eligibility",
        "amount",
        "deadline",
        "university_id",
        "program_id",
    ];
}
