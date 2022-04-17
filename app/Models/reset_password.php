<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reset_password extends Model
{
    use HasFactory;

    protected $table = 'reset_password';

    protected $fillable = [
        'email',
        'token',
    ];

}
