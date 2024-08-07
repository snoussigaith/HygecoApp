<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buanderie extends Model
{
    use HasFactory;

    protected $table = 'buanderies';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'email',
        'phone',
        'description',
        'country',
        'city',
        'frameworks',
        'cv'
    ];
}
