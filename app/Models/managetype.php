<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managetype extends Model
{
    use HasFactory;

    protected $table = 'managetype';

    protected $fillable = [
        'email',
        'token',
    ];
}
