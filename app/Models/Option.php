<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;


class Option extends Model
{
    use HasFactory;
      protected $table = 'options';

    protected $fillable = [
        'name',
        'price',
        
    ];
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_option');
    }
}
