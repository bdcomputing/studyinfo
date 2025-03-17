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
        "content",
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

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function scopeFilter($query, $filter)
    {
        return $query->when(isset($filter['search']), function ($query) use ($filter) {
            $query->where("name", "like", '%' . $filter['search'] . '%')
                ->orWhere("city", "like", '%' . $filter['search'] . '%')
                ->orWhereHas("destination", function ($q) use ($filter) { // Related table filter
                    $q->where("name", "like", '%' . $filter['search'] . '%');
                });
        });
    }
}
