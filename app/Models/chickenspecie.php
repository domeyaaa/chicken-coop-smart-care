<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chickenspecie extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'phase_name',
        'active'
    ];
}
