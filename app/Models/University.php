<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = [
        "name",
        "university_id",
        "city",
        "description",
        "website",
        "contact_email",
        "",
    ];
}
