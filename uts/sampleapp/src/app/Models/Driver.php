<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'experience_years', 'average_speed', 'total_trips', 'accidents_count', 'rating'
    ];

    public function tripRecords()
    {
        return $this->hasMany(TripRecord::class);
    }
}
