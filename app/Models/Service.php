<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'price',
        'options', // Include options in the fillable array
        'has_frequency',
        'has_base',
    ];

    public function options()
    {
        return $this->belongsToMany(Option::class, 'service_option');
    }
}
