<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = [
        "name",
        "destination_id",
        "city",
        "ranking",
        "type",
        "description",
        "website_url",
        "contact_email",
        "tuition_fee",
        "admission_requirements",
        "student_life",
        "image_url",
        "logo_url"
    ];
    protected $casts = [
        "destination_id" => 'integer',
        "tuition_fee" => "integer"
    ];
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
