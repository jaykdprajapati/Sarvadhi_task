<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class university_courses extends Model
{
    protected $table = 'university_courses';

    protected $fillable = [
        'universirt_id',
        'course_id',
        'fees',
        'intake',
        'duration',
        'scholarship',
        'entry_requirements',
        'language_requirements',
        'mode',
        'location',
    ];

    public function universities(): HasOne
    {
        return $this->hasOne(universities::class, 'id');
    }

    public function courses(): HasOne
    {
        return $this->hasOne(courses::class, 'id');
    }


}
