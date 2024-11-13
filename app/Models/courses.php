<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class courses extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'type',
    ];

    public function university_courses(): BelongsTo
    {
        return $this->belongsTo(university_courses::class);
    }
}
