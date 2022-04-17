<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccinate extends Model
{
    use HasFactory;
    
    protected $table = 'vaccinate';

    protected $fillable = [
        'chicken_id',
        'vaccine_id',
        'user_id',
        'chicken_weight',
        'active'

    ];
}
