<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    use HasFactory;
    //
    protected $fillable = [
        "name",
        "destination_id",
        "state",
        "timezone",
        "population",
    ];

    protected $casts = [
        "destination_id" => "integer",
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
