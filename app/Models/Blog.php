<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = ["title", "slug", "description", "image", "content", "category", "publish_date", "is_published"];
}
