<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkegg extends Model
{
    use HasFactory;
    
    protected $table = 'checkegg';

    protected $fillable = [
        'egg_spawn',
        'chicken_id',
        'user_id',
        'active'

    ];
}
