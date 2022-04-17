<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class body extends Model
{
    use HasFactory;
    protected $table = 'body';

    protected $fillable = [
        'volume',
        'chicken_id',
        'user_id',
        'bodytype_id',
        'active'
    ];
}
