<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'university_id',
        'name',
        "level",
        'description',
        'detail',
        'duration',  //Months
        "intake_period",
        "mode_of_study",
        "field_of_study",
        "language_of_instruction",
        'program_fee',
        'application_deadline',
        "is_popular",
        "has_scholarship",

    ];

    protected $casts = [
        'university_id' => 'integer',
        'duration' => 'integer',
        'program_fee' => 'float',
        'application_deadline' => 'date',
        "is_popular" => 'boolean',
        "has_scholarship" => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function scopeFilter($query, $filter)
    {
        return $query
            ->when(isset($filter['search']), function ($query) use ($filter) {
                $query->where(function ($q) use ($filter) {
                    $q->where("name", "like", '%' . $filter['search'] . '%')
                        ->orWhereHas("university", function ($q) use ($filter) {
                            $q->where("name", "like", '%' . $filter['search'] . '%');
                        });
                });
            })
            ->when(isset($filter['language']), function ($query) use ($filter) {
                $query->where("language_of_instruction", $filter['language']);
            })
            ->when(isset($filter['field_of_study']), function ($query) use ($filter) {
                $query->where("field_of_study", $filter['field_of_study']);
            })
            ->when(isset($filter['has_scholarship']), function ($query) use ($filter) {
                $query->where("has_scholarship", $filter['has_scholarship']);
            })
            ->when(isset($filter['level']), function ($query) use ($filter) {
                $query->where("level", $filter['level']);
            })
            ->when(isset($filter['mode']), function ($query) use ($filter) {
                $query->where("mode_of_study", $filter['mode']);
            });
    }
}
