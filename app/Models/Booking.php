<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
     protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'is_available',
    ];
}
