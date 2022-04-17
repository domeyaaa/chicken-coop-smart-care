<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breed extends Model
{
    use HasFactory;
    protected $table = 'breed';

    protected $fillable = [
        'chicken_id',
        'chicken_hen_id',
        'egg_total',
        'egg_infected_total',
        'active'

    ];
}
