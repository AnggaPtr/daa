<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id', 'trip_date', 'distance', 'fuel_consumption', 'trip_duration'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
