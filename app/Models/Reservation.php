<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Option;
use App\Models\Client;

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
        'client_id',
        
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
