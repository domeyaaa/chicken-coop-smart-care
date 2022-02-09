<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'detail',
    ];

    protected $table = 'vaccines';

}
