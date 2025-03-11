<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'capacity',
        'is_active'
    ];

    protected $casts = [
        'event_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function getFormattedDateAttribute()
    {
        return $this->event_date->format('d F Y');
    }

    public function getFormattedTimeAttribute()
    {
        return date('g:i A', strtotime($this->start_time)) . ' - ' . date('g:i A', strtotime($this->end_time));
    }

    public function getSpotsLeftAttribute()
    {
        if (!$this->capacity) {
            return null; // Unlimited capacity
        }

        return max(0, $this->capacity - $this->registrations()->count());
    }

    public function getIsFullAttribute()
    {
        if (!$this->capacity) {
            return false; // Unlimited capacity
        }

        return $this->spots_left <= 0;
    }
}
