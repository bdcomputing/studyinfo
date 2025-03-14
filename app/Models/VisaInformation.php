<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaInformation extends Model
{
    //
    protected $fillable = [
        "country_id",
        "program_id",
        "visa_type",
        "processing_time",
        "cost",
        "documents_required",
        "work_permit", // boolean
        "post_graduation_permit", // boolean
    ];
}
