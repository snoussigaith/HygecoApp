<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\User;

class Buanderie extends Model
{
    use HasFactory;

    protected $table = 'buanderies';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'couette_double',
        'couette_queen',
        'couette_king',
        'oreiller',
        'sac',
        'collecte',
        'livraison',
        'adresse',
        'facultatif',
        'ville',
        'zip',
        'instruction',
        'summary',
    ];

     public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
