<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class universities extends Model
{
    protected $table = 'universities';

    protected $fillable = [
        'name',
        'adrress',
        'website',
        'phone',
        'country_id',
        'ranking',
        'established_date',
        'description',
        'facilities',
    ];

    public function university_courses(): BelongsTo
    {
        return $this->belongsTo(university_courses::class,'universirt_id');
    }
}
