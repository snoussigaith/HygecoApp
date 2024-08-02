<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Option;
use App\Models\Client;
use App\Models\User;
use Illuminate\Notifications\Notifiable;


class Reservation extends Model
{
    use HasFactory ,Notifiable;
     protected $table = 'reservations';

     protected $fillable = [
        'service_id',
        'options',
        'total_price',
        'chambre_count',
        'bain_count',
        'cuisine_count',
        'client_id',
        'date',
        'time',
        'user_id',
        
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
