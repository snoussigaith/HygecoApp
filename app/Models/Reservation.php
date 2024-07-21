<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Option;

class Reservation extends Model
{
    use HasFactory;
     protected $table = 'reservations';

     protected $fillable = [
        'service_id',
        'options',
        'total_price',
        'chambre_count',
        'bain_count',
        'cuisine_count',
        
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
