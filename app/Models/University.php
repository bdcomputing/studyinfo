<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = [
        "name",
        "destination_id",
        "city_id",
        "ranking",
        "type",
        "description",
        "detail",
        "website_url",
        "contact_email",
        "tuition_fee",
        "is_popular",
        "image_url",
        "logo_url"
    ];
    protected $casts = [
        "destination_id" => 'integer',
        "city_id" => 'integer',
        "tuition_fee" => "integer",
        "is_popular" => "boolean"
    ];
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function scopeFilter($query, $filter)
    {
        return $query
            ->when($filter["search"] ?? null, fn($q, $search) => $q->where("name", "LIKE", "%$search%"))
            ->when($filter["type"] ?? null, fn($q, $type) => $q->where("type", $type))
            ->when($filter["destination"] ?? null, function ($q, $destination) {
                $q->whereHas("destination", function ($subQuery) use ($destination) {
                    $subQuery->where('name', $destination);
                });
            });
        // ->when($filter["city"] ?? null, fn($q, $city) => $q->where("city", $city));
    }
}
