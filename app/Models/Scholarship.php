<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //
    protected $fillable = [
        "name",
        "description",
        "eligibility_criteria",
        "amount",
        "application_deadline",
        "university_id",
    ];

    protected $casts = [
        "application_deadline" => "datetime:Y-m-d",
        "amount" => 'integer',
        "university_id" => "integer",
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
