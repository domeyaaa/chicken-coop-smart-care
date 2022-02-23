<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dht22 extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'humidity',
        'fahrenheit',
        'temperature',
        'date',
    ];

    protected $table = 'dht22';
}
