<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bodytype extends Model
{
    use HasFactory;

    protected $table = 'bodytype';

    protected $fillable = [
        'name',
    ];
}
