<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensormid extends Model
{
    use HasFactory;

    protected $fillable = [
        'sm_temperature',
        'sm_humudity',
        'sm_ammonia',
        'sm_light_intensity',
    ];

    protected $table = 'sensormid';
}
