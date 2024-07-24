<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;


class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'last_name',
        'phone',
        'address',
        'city',
        'apt_suite',
        'zip',
    ];
     public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
