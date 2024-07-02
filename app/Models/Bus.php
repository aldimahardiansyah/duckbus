<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
