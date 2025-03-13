<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ["first_name", "last_name", "phone", "email", "message", "agree_terms"];

    protected $casts = [
        "agree_terms" => "boolean",
    ];
}
